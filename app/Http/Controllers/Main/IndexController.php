<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Article;
use App\Models\Cpa;
use App\Models\Video;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $article = Article::with('author')->take(4)->get()->toArray();
        $cpa = Cpa::all()->where('is_main', 1)->take(4)->toArray();
        $top_cpa = Cpa::all()->where('is_top', 1)->take(5)->toArray();
        $ads = Ad::all()->where('is_main', 1)->take(4)->toArray();
        $top_ads = Ad::all()->where('is_top', 1)->take(5)->toArray();
        $video = Video::all()->take(6)->toArray();
        return view('main.index', compact(
            'locale',
            'article',
            'cpa',
            'top_cpa',
            'ads',
            'top_ads',
            'video',
        ));
    }
}
