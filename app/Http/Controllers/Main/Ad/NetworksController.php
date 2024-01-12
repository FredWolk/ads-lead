<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSeoFilter;
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
        $seo_filters = AdSeoFilter::all();
        $banner = BannerAside::where('show', 'ad')->where('status', 1)->first();
        $recomended = Ad::all()->where('is_recomendated', 1)->sortBy('listing_rating')->take(3);
        $ad = Ad::orderBy('main_advertising_formats')->paginate(25);
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.ad.networks', compact(
            'seo',
            'filters',
            'banner',
            'recomended',
            'ad',
            'locale',
            'seo_filters'
        ));
    }

    public function filter(Request $request)
    {
        $keys = [
            'advertising_formats' => 'advertising_formats',
            'countries' => 'countries',
            'payment_systems' => 'payment_systems',
            'minimum_top_up_amount' => 'minimum_top_up_amount',
        ];
        $array = [];
        if (!empty($request->query())) {
            foreach ($request->query() as $key => $item) {
                $array[] = [$keys[$key], 'like', "%$item[0]%"];
            }
            $ad = Ad::where($array)->get();
        } else {
            $ad = Ad::all();
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-ad', compact('ad', 'locale'))->render();
    }
}
