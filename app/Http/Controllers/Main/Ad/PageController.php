<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Ad;
use App\Models\BannerAside;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function __invoke($catalog, $link, ViewService $service)
    {
        $ad = Ad::where('link', $link)->first();
        if (empty($ad))
            return redirect()->route('ad');
        $moreAd = Ad::where('id', '!=', $ad->id)->take(6)->get();
        $cookie = $service->View($ad, 'ad_views');
        $ad->toArray();
        $banner = BannerAside::where('status', 1)->where('show', 'all')->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return response()->view('main.ad.page', compact('ad', 'locale', 'moreAd', 'banner'))->withCookie($cookie);
    }
}
