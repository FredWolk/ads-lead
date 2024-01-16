<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Favorite;
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
        $favorite = Favorite::where('link', $theme.'/'.$thread->link)->where('user_id', Auth::id())->select('id')->first();
        $comments = TradeComment::where('threads_id', $thread->id)->with('author')->paginate(5);
        $cookie = $service->View($thread, 'threads');
        return response()->view('main.forum.board', compact('locale', 'thread', 'comments', 'favorite'))->withCookie($cookie);
    }
}
