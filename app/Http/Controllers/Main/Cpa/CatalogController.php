<?php

namespace App\Http\Controllers\Main\Cpa;

use App\Http\Controllers\Controller;
use App\Models\BannerAside;
use App\Models\Cpa;
use App\Models\Filters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CatalogController extends Controller
{
    public function __invoke($catalog)
    {
        $cpa = Cpa::where('main_verticales', $catalog)->paginate(5);
        if ($cpa->count() === 0)
            return redirect()->route('cpa');
        $banner = BannerAside::where('show', 'cpa')->where('status', 1)->first();
        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        $filters = Filters::select('vertical', 'countries', 'payment_models', 'payment_schedule', 'payment_systems')->first()->toArray();

        return view('main.cpa.catalog', compact('cpa', 'catalog', 'banner', 'locale', 'filters'));
    }


    public function filter(Request $request, $catalog)
    {
        if (!empty($request->query())) {
            $cpa = Cpa::where('main_verticales', $catalog)->whereJsonContains('verticales', $request->query('vertical'))
                ->orWhereJsonContains('countries', $request->query('countries'))
                ->orWhereJsonContains('payment_models', $request->query('payment_models'))
                ->orWhereJsonContains('payment_schedule_f', $request->query('payment_schedule'))
                ->orWhereJsonContains('payment_systems', $request->query('payment_systems'))->get();
        } else {
            $cpa = Cpa::all()->where('main_verticales', $catalog);
        }


        $locale = App::getLocale() == 'en' ? '' : 'pt_';
        return view('main.filters.filter-cpa-catalog', compact('cpa', 'locale'))->render();
    }
}
