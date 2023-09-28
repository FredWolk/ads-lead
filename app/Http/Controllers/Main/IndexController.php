<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Article;
use App\Models\Cpa;
use App\Models\Events;
use App\Models\Seo;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function __invoke()
    {
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $article = Article::where('type', 'article')->with('author')->take(4)->orderByDesc('id')->get()->toArray();
        $cpa = Cpa::all()->where('is_main', 1)->orderByDesc('id')->take(4)->toArray();
        $top_cpa = Cpa::all()->where('is_top', 1)->orderByDesc('id')->take(5)->toArray();
        $ads = Ad::all()->where('is_main', 1)->orderByDesc('id')->take(4)->toArray();
        $top_ads = Ad::all()->where('is_top', 1)->orderByDesc('id')->take(5)->toArray();
        $video = Video::all()->take(6)->toArray();

        $seo = Seo::where('page', Seo::MAIN_PAGE)->first();

        $start = date('Y-m-01');
        $finish = date('Y-m-t');
        $events = Events::all()
            ->where('filtration_date', '>=', $start)
            ->where('filtration_date', '<=', $finish)
            ->toArray();
        $firstEvent = Events::where('filtration_date', '>=', date('Y-m-d'))->first();
        if (!empty($firstEvent))
            $firstEvent = $firstEvent->toArray();

        $mobileEvents = Events::all()
            ->where('filtration_date', '>=', date('Y-m-d'))
            ->take(6)->toArray();
        foreach ($events as $i) {
            $arr[$i['filtration_date']] = $i;
        }
        for ($i = $start; $i <= $finish; $i = date('Y-m-d', strtotime($i . '+1 day'))) {
            $calendar[$i] = !empty($arr[$i]) ? $arr[$i] : null;
        }
        return view('main.index', compact(
            'locale',
            'article',
            'cpa',
            'seo',
            'top_cpa',
            'ads',
            'top_ads',
            'video',
            'calendar',
            'firstEvent',
            'mobileEvents',
        ));
    }

    public function indexFilter(Request $request)
    {
        $date = $request->input('date');
        if (!empty($date)) {
            $locale = App::getLocale() == 'en' ? '' : 'pt_';
            $events = Events::all()
                ->where('filtration_date', '>=', date('Y-m-01', strtotime($date)))
                ->where('filtration_date', '<=', date('Y-m-01', strtotime($date . '+1 month')))
                ->toArray();
            foreach ($events as $i) {
                $arr[$i['filtration_date']] = $i;
            }
            for ($i = date('Y-m-01', strtotime($date)); $i < date('Y-m-01', strtotime($date . '+1 month')); $i = date('Y-m-d', strtotime($i . '+1 day'))) {
                $calendar[$i] = !empty($arr[$i]) ? $arr[$i] : null;
            }
            return view('main.filters.index-calendar', compact('locale', 'calendar'))->render();
        }
    }

    public function search(Request $request)
    {
        $search = $request->input('search_desc');
        $lang = $request->input('desc_locale');
        $locale = $lang == 'en' ? '' : 'pt_';
        $article = Article::where("{$locale}name", 'LIKE', "%{$search}%")
            ->orWhere("{$locale}prev_text", 'LIKE', "%{$search}%")
            ->select("{$locale}name", "{$locale}prev_text", 'link')
            ->get();
        if (!empty($article))
            $arr['article'] = $article->toArray();

        $cpa = Cpa::where("{$locale}name", 'LIKE', "%{$search}%")
            ->orWhere("{$locale}prev_text", 'LIKE', "%{$search}%")
            ->select("{$locale}name", "{$locale}prev_text", 'link', 'main_verticales')
            ->get();
        if (!empty($cpa))
            $arr['cpa'] = $cpa->toArray();

        return $arr;
    }
}
