<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\ThreadsLinks;
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
        return view('main.forum.threads', compact('locale'));
    }
}
