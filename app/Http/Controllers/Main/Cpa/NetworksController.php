<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Cpa;
use App\Models\CpaSeoFilter;
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
        $seo_filters = CpaSeoFilter::all();
        $banner = BannerAside::where('show', 'cpa')->where('status', 1)->first();
        $recomended = Cpa::all()->where('is_recomendated', 1)->take(2);
        $cpa = Cpa::orderBy('main_verticales')->paginate(5);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.cpa.networks', compact(
            'seo',
            'filters',
            'banner',
            'recomended',
            'cpa',
            'locale',
            'seo_filters'
        ));
    }

    public function filter(Request $request)
    {

        if (!empty($request->query())) {
            $cpa = Cpa::whereJsonContains('verticales', $request->query('vertical'))
                ->whereJsonContains(function ($query) use ($request) {
                    $query->whereJsonContains('verticales', $request->query('vertical'))
                        ->whereJsonContains('countries', $request->query('countries'));
                })
//                ->whereJsonContains('payment_models', $request->query('payment_models'))
//                ->whereJsonContains('payment_schedule_f', $request->query('payment_schedule'))
//                ->whereJsonContains('payment_systems', $request->query('payment_systems'))
                ->get();
        } else {
            $cpa = Cpa::all();
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-cpa', compact('cpa', 'locale'))->render();
    }
}
