<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\Trade;
use App\Models\TradeComment;
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
        $data['user_id'] = Auth::user()->getAuthIdentifier();
        Trade::updateOrCreate($data);
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
        TradeComment::create($data);
        return redirect()->route('forum.board', [$threads->theme, $threads->link]);
    }

    public function deleteComment(TradeComment $comment)
    {
        if ($comment->user_id === Auth::id()) {
            $comment->delete();
        }
        return redirect()->back();
    }
}
