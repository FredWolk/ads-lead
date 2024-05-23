<?php

namespace App\Http\Controllers\Main\Forum;

use App\Http\Controllers\Controller;
use App\Models\BannerForumAside;
use App\Models\ThreadsLinks;
use App\Models\Trade;
use Illuminate\Support\Facades\App;

class ForumThreadsController extends Controller
{
    public function index($link)
    {
        $theme = ThreadsLinks::firstWhere('link', $link);
        if (empty($theme)) {
            return redirect()->route('forum');
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $arrTags = [];
        Trade::whereNotNull('tags')->pluck('tags')->each(function ($e) use (&$arrTags){
            foreach ($e as $i){
                $arrTags[preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($i))] = preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($i));
            }
        });

        $banner = BannerForumAside::first();

        $threads = Trade::where('theme', $link)->with('author')->orderBy('created_at', 'DESC')->withCount('comments')->paginate(15);

        return view('main.forum.threads', compact('locale', 'theme', 'threads', 'arrTags', 'banner'));
    }
    public function filter($link)
    {
        $arrTags = [];
        Trade::whereNotNull('tags')->pluck('tags')->each(function ($e) use (&$arrTags){
            foreach ($e as $i){
                $arrTags[preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($i))] = preg_replace('/[^\p{L}\p{N}\s]/u', '', mb_strtolower($i));
            }
        });
        $threads = Trade::where('tags', 'LIKE',  '%'.$link.'%')->with('author')->orderBy('created_at', 'DESC')->withCount('comments')->paginate(15);

        return view('main.forum.thread', compact( 'threads','link', 'arrTags'));
    }
}
