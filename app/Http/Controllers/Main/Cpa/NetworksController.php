<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Cpa;
use App\Models\Filters;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NetworksController extends Controller
{
    public function __invoke()
    {
        $seo = Seo::where('page', Seo::CPA_PAGE)->first();
        $filters = Filters::select('vertical', 'countries', 'payment_models', 'payment_schedule', 'payment_systems')->first()->toArray();
        $banner = BannerAside::where('show', 'cpa')->where('status', 1)->first();
        $recomended = Cpa::all()->where('is_recomendated', 1)->take(2);
        $cpa = Cpa::paginate(5);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.cpa.networks', compact(
            'seo',
            'filters',
            'banner',
            'recomended',
            'cpa',
            'locale'
        ));
    }

    public function filter(Request $request)
    {
        $cpa = Cpa::paginate(2);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-cpa', compact('cpa', 'locale'))->render();
    }
}
