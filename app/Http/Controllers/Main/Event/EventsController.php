<?php

namespace App\Http\Controllers\Main\Event;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Events;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EventsController extends Controller
{
    public function __invoke()
    {
        return view('main.events.index', [
            'events' => Events::paginate(8),
            'locale' => App::getLocale() == 'en' ? '' : 'pt_',
            'banner' => BannerAside::where('status', 1)->where('show', 'all')->first(),
            'seo' => Seo::where('page', Seo::EVENTS_PAGE)->first()
        ]);
    }

    public function filter(Request $request)
    {
        $year = $request->input('year');
        $month = $request->input('month');
        if (empty($year) || empty($month)) {
            return false;
        }
        $date = date("{$year}-{$month}-01");
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $events = Events::all()->where('filtration_date', '>=', $date);
        return view('main.filters.filter-event', compact('events', 'locale'))->render();
    }
}
