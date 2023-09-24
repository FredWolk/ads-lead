<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Cpa;
use App\Models\CpaSeoFilter;
use App\Models\Filters;
use Illuminate\Support\Facades\App;

class FilterSeoController extends Controller
{
    public function __invoke($catalog)
    {
        $seo = CpaSeoFilter::firstWhere('filter_name', $catalog);
        if (!$seo)
            return redirect()->route('cpa');
        $cpa = Cpa::whereJsonContains('verticales', $catalog)
            ->orWhereJsonContains('countries', $catalog)
            ->orWhereJsonContains('payment_models', $catalog)
            ->orWhereJsonContains('payment_schedule_f', $catalog)
            ->orWhereJsonContains('payment_systems', $catalog)->paginate(10);
        $banner = BannerAside::where('show', 'cpa')->where('status', 1)->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $filters = Filters::select('vertical', 'countries', 'payment_models', 'payment_schedule', 'payment_systems')->first()->toArray();

        return view('main.cpa.seo-catalog', compact('cpa', 'catalog', 'banner', 'locale', 'filters', 'seo'));
    }
}
