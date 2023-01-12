<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\BannerAside;
use App\Models\Filters;
use App\Models\Seo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class NetworksController extends Controller
{
    public function __invoke()
    {
        $seo = Seo::where('page', Seo::ADS_PAGE)->first();
        $filters = Filters::select('advertising_formats', 'countries', 'payment_systems', 'minimum_top_up_amount')->first()->toArray();
        $banner = BannerAside::where('show', 'ad')->where('status', 1)->first();
        $recomended = Ad::all()->where('is_recomendated', 1)->take(2);
        $ad = Ad::paginate(5);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.ad.networks', compact(
            'seo',
            'filters',
            'banner',
            'recomended',
            'ad',
            'locale'
        ));
    }
    public function filter(Request $request)
    {

        if (!empty($request->query())){
            $ad = Ad::whereJsonContains('advertising_formats', $request->query('advertising_formats'))
                ->orWhereJsonContains('countries', $request->query('countries'))
                ->orWhereJsonContains('payment_systems', $request->query('payment_systems'))
                ->orWhereJsonContains('minimum_top_up_amount', $request->query('minimum_top_up_amount'))->get();
        } else {
            $ad = Ad::all();
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-ad', compact('ad', 'locale'))->render();
    }
}
