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
            'events' => Events::paginate(4),
            'locale' => App::getLocale() == 'en' ? '' : 'pt_',
            'banner' => BannerAside::where('status', 1)->where('show', 'all')->first(),
            'seo' => Seo::where('page', Seo::EVENTS_PAGE)->first()
        ]);
    }
}
