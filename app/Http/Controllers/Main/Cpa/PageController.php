<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Http\Services\ViewService;
use App\Models\Cpa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function __invoke($catalog, $link, ViewService $service)
    {
        $cpa = Cpa::where('link', $link)->first();
        if (empty($cpa))
            return redirect()->route('cpa');
        $moreCpa = Cpa::where('id', '!=', $cpa->id)->take(6)->get();
        $cookie = $service->View($cpa, 'cpa_views');
        $cpa->toArray();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return response()->view('main.cpa.page', compact('cpa', 'locale', 'moreCpa'))->withCookie($cookie);
    }
}
