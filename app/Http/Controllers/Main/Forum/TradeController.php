<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Complaints;
use App\Models\Notification;
use App\Models\Subscribe;
use App\Models\Trade;
use App\Models\TradeComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'theme' => 'string|required',
            'title' => 'string|required',
            'link' => 'string|required',
            'prefix' => 'string|nullable',
            'tags' => 'array|nullable',
            'content' => 'string|required'
        ]);
        $data['link'] = preg_replace('/[^a-zA-Z\s 0-9-]/', '', $data['link']);
        $data['user_id'] = Auth::id();
        $trade = Trade::where('title', $data['title'])->where('link', $data['link'])->first();
        if (!empty($trade)){
            $trade->update($data);
        } else {
            $trade = Trade::create($data);
            if ($trade){
                $subscribers = Subscribe::where('author_id', $data['user_id'])->get();
                if ($subscribers->count() > 0){
                    $subscribers->each(function ($e) use ($data, $trade){
                        $user = User::firstWhere('id', $data['user_id']);
                        $notif = Notification::newPost($trade);
                        $notif['user_id'] = $e->user_id;
                        $notif['init_user_id'] = $data['user_id'];
                        $notif['init_user_photo'] = $user->photo;
                        Notification::create($notif);
                    });
                }
            }
        }
        return redirect()->route('forum.threads', $data['link']);
    }

    public function edit(Trade $trade)
    {
        $user = Auth::user();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        if ($user->getAuthIdentifier() !== $trade->user_id) {
            return redirect()->back();
        }
        return view('main.forum.create-threads', compact('locale', 'user', 'trade'));
    }

    public function update(Request $request, Trade $trade)
    {
        $user_id = Auth::id();
        if ($trade->user_id !== $user_id) {
            return false;
        }
        $data = $request->validate([
            'title' => 'string|nullable',
            'prefix' => 'string|nullable',
            'tags' => 'array|nullable',
            'content' => 'string|required'
        ]);
        $trade->update($data);
        return redirect()->route('forum.board', [$trade->theme, $trade->link]);
    }

    public function deleteThread(Trade $trade)
    {
        $user_id = Auth::id();
        if ($trade->user_id === Auth::id()) {
            $comments = TradeComment::all()->where('user_id', $user_id)->where('threads_id', $trade->id);
            if (!empty($comments)) {
                foreach ($comments as $comment) {
                    $comment->delete();
                }
            }
            $trade->delete();
        }

        return redirect()->route('forum');
    }

    public function createComment(Request $request, Trade $threads)
    {
        $data = $request->validate([
            'content' => 'required|string'
        ]);
        $data['theme'] = $threads->theme;
        $data['user_id'] = Auth::id();
        $data['threads_id'] = $threads->id;
        $comment = TradeComment::create($data);
        if ($comment){
            $user = User::firstWhere('id', $data['user_id']);
            $notif = Notification::newComment($threads);
            $notif['user_id'] = $threads->user_id;
            $notif['init_user_id'] = $data['user_id'];
            $notif['init_user_photo'] = $user->photo;
            Notification::create($notif);
        }
        return redirect()->route('forum.board', [$threads->theme, $threads->link]);
    }

    public function deleteComment(TradeComment $comment)
    {
        if ($comment->user_id === Auth::id()) {
            $comment->delete();
        }
        return redirect()->back();
    }

    public function complaint(Request $request)
    {
        $data = $request->validate([
            'message' => 'required|string',
            'trade_id' => 'required|integer',
        ]);
        $data['user_id'] = Auth::id();
        $complaint = Complaints::create($data);
        if ($complaint){
            return redirect()->back()->withSuccess('You message sended');
        } else {
            return redirect()->back()->withErrors(['error' => 'Server error']);
        }

    }
}
