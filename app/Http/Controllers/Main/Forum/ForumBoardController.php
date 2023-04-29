<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Trade;
use Illuminate\Support\Facades\App;

class ForumBoardController extends Controller
{
    public function __invoke($theme, $link, ViewService $service)
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $thread = Trade::where('link', $link)->where('theme', $theme)->first();
        if (empty($thread)) {
            return redirect()->route('forum.threads', $theme);
        }
        $service->View($thread, 'threads');
        return view('main.forum.board', compact('locale', 'thread'));
    }
}
