<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\ThreadsLinks;
use App\Models\Trade;
use Illuminate\Support\Facades\App;

class ForumThreadsController extends Controller
{
    public function __invoke($link)
    {
        $theme = ThreadsLinks::firstWhere('link', $link);
        if (empty($theme)) {
            return redirect()->route('forum');
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $thread = Trade::where('theme', $link)->with('author')->withCount('comments')->get();
        if (!empty($thread)) {
            $threads = $thread->toArray();
        }
        return view('main.forum.threads', compact('locale', 'theme', 'threads'));
    }
}
