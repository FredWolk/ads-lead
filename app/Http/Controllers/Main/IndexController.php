<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\Article;
use App\Models\Cpa;
use App\Models\Events;
use App\Models\Video;
use Illuminate\Http\Request;
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

        $start = date('Y-m-01');
        $finish = date('Y-m-t');
        $events = Events::all()
            ->where('filtration_date', '>=', $start)
            ->where('filtration_date', '<=', $finish)
            ->toArray();
        $firstEvent = Events::where('filtration_date', '>=', date('Y-m-d'))->first()->toArray();
        $mobileEvents = Events::all()
            ->where('filtration_date', '>=', date('Y-m-d'))
            ->take(6)->toArray();
        foreach ($events as $i){
            $arr[$i['filtration_date']] = $i;
        }
        for($i = $start; $i <= $finish; $i = date('Y-m-d', strtotime($i . '+1 day'))) {
            $calendar[$i] = !empty($arr[$i]) ? $arr[$i] : null;
        }
        return view('main.index', compact(
            'locale',
            'article',
            'cpa',
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
        if ($request->ajax()){
            $date = $request->input('date');
            if (!empty($date)){
                $locale = App::getLocale() == 'en' ? '' : 'pt_';
                $events = Events::all()
                    ->where('filtration_date', '>=', date('Y-m-01', strtotime($date)))
                    ->where('filtration_date', '<=', date('Y-m-01', strtotime($date . '+1 month')))
                    ->toArray();
                foreach ($events as $i){
                    $arr[$i['filtration_date']] = $i;
                }
                for($i = date('Y-m-01', strtotime($date)); $i <= date('Y-m-01', strtotime($date . '+1 month')); $i = date('Y-m-d', strtotime($i . '+1 day'))) {
                    $calendar[$i] = !empty($arr[$i]) ? $arr[$i] : null;
                }
                return view('main.filters.index-calendar', compact('locale','calendar'))->render();
            }

        }
    }
}
