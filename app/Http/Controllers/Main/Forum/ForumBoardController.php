<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Favorite;
use App\Models\Subscribe;
use App\Models\Trade;
use App\Models\TradeComment;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class ForumBoardController extends Controller
{
    public function __invoke($theme, $link, ViewService $service)
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $thread = Trade::where('link', $link)->where('theme', $theme)->first();
        if (empty($thread)) {
            return redirect()->route('forum.threads', $theme);
        }
        $favorite = Favorite::where('thread_id', $thread->id)->where('user_id', Auth::id())->select('id')->first();
        $subscribe = Subscribe::where('author_id', $thread->author->id)->where('user_id', Auth::id())->first();
        $comments = TradeComment::where('threads_id', $thread->id)->with('author')->paginate(5);
        $cookie = $service->View($thread, 'threads');
        return response()->view('main.forum.board', compact('locale', 'thread', 'comments', 'favorite', 'subscribe'))->withCookie($cookie);
    }
}
