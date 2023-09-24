<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSeoFilter;
use App\Models\BannerAside;
use App\Models\Filters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
{
    public function __invoke($catalog)
    {
        $ad = Ad::where('main_advertising_formats', $catalog)->paginate(5);
        if ($ad->count() === 0)
            return redirect()->route('cpa');
        $seo_filters = AdSeoFilter::all();
        $banner = BannerAside::where('show', 'ad')->where('status', 1)->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $filters = Filters::select('advertising_formats', 'countries', 'payment_systems', 'minimum_top_up_amount')->first()->toArray();

        return view('main.ad.catalog', compact('ad', 'catalog', 'banner', 'locale', 'filters', 'seo_filters'));
    }

    public function filter(Request $request, $catalog)
    {

        if (!empty($request->query())) {
            $ad = Ad::where('main_advertising_formats', $catalog)->whereJsonContains('advertising_formats', $request->query('advertising_formats'))
                ->orWhereJsonContains('countries', $request->query('countries'))
                ->orWhereJsonContains('payment_systems', $request->query('payment_systems'))
                ->orWhereJsonContains('minimum_top_up_amount', $request->query('minimum_top_up_amount'))->get();
        } else {
            $ad = Ad::all();
        }

        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-ad-catalog', compact('ad', 'locale'))->render();
    }
}
