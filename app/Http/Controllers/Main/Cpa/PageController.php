<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\BannerAside;
use App\Models\Cpa;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function __invoke($catalog, $link, ViewService $service)
    {
        $cpa = Cpa::where('link', $link)->with('comments')->first();
        if (empty($cpa))
            return redirect()->route('cpa');
        $moreCpa = Cpa::where('id', '!=', $cpa->id)->take(6)->inRandomOrder()->get();
        $cookie = $service->View($cpa, 'cpa_views');
        $cpa->toArray();
        $banner = BannerAside::where('status', 1)->where('show', 'all')->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return response()->view('main.cpa.page', compact('cpa', 'locale', 'moreCpa', 'banner'))->withCookie($cookie);
    }
}
