<?php

namespace App\Http\Controllers\Main\Event;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Events;
use Illuminate\Support\Facades\App;

class EventPageController extends Controller
{
    public function __invoke($link)
    {
        if (empty($link)) {
            return redirect()->route('events');
        }

        $event = Events::firstWhere('link', $link);
        if (empty($event)) {
            return redirect()->route('events');
        }

        return view('main.events.page', [
            'locale' => App::getLocale() == 'en' ? '' : 'pt_',
            'event' => $event,
            'banner' => BannerAside::where('status', 1)->where('show', 'all')->first(),
            'more_events' => Events::all()->where('id', '!=', $event->id)->take(6)
        ]);
    }
}
