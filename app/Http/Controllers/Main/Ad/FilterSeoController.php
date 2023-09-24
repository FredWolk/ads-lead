<?php

namespace App\Http\Controllers\Main\Ad;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use App\Models\AdSeoFilter;
use App\Models\BannerAside;
use App\Models\Filters;
use Illuminate\Support\Facades\App;

class FilterSeoController extends Controller
{
    public function __invoke($catalog)
    {
        $seo = AdSeoFilter::firstWhere('filter_name', $catalog);
        if (!$seo)
            return redirect()->route('ad');
        $ad = Ad::where('main_advertising_formats', $catalog)->whereJsonContains('advertising_formats', $catalog)
            ->orWhereJsonContains('countries', $catalog)
            ->orWhereJsonContains('payment_systems', $catalog)
            ->orWhereJsonContains('minimum_top_up_amount', $catalog)->paginate(10);
//        $seo_filters = AdSeoFilter::all();
        $banner = BannerAside::where('show', 'ad')->where('status', 1)->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $filters = Filters::select('advertising_formats', 'countries', 'payment_systems', 'minimum_top_up_amount')->first()->toArray();

        return view('main.ad.seo-catalog', compact('ad', 'catalog', 'banner', 'locale', 'filters', 'seo'));
    }
}
