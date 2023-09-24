<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdSeoFilterRequest;
use App\Http\Requests\UpdateAdSeoFilterRequest;
use App\Models\AdSeoFilter;
use App\Models\Filters;

class AdSeoFilterController extends Controller
{
    public function index()
    {
        $filters = AdSeoFilter::all();
        return view('admin.seo-filters.ads-filters.index', compact('filters'));
    }

    public function create()
    {
        $seo = Filters::select('vertical', 'countries', 'payment_systems', 'minimum_top_up_amount')->first();
        $filters = [];
        $vertical = json_decode($seo->vertical, 1);
        $countries = json_decode($seo->countries, 1);
        $payment_systems = json_decode($seo->payment_systems, 1);
        $minimum_top_up_amount = json_decode($seo->minimum_top_up_amount, 1);
        if (!empty($vertical)) {
            foreach ($vertical as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($countries)) {
            foreach ($countries as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($payment_systems)) {
            foreach ($payment_systems as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($minimum_top_up_amount)) {
            foreach ($minimum_top_up_amount as $i) {
                $filters[] = $i;
            }
        }
        return view('admin.seo-filters.ads-filters.create', compact('filters'));
    }

    public function store(StoreAdSeoFilterRequest $request)
    {
        $data = $request->validated();
        $seo = AdSeoFilter::firstOrCreate([
            'filter_name' => $data['filter_name']
        ], $data);
        return redirect()->route('ads-seo-filter.show', $seo->id);
    }

    public function show(AdSeoFilter $ads_seo_filter)
    {
        return view('admin.seo-filters.ads-filters.show', compact('ads_seo_filter'));
    }

    public function edit(AdSeoFilter $ads_seo_filter)
    {
        $seo = Filters::select('advertising_formats', 'countries', 'payment_systems', 'minimum_top_up_amount')->first();
        $filters = [];
        $vertical = json_decode($seo->vertical, 1);
        $countries = json_decode($seo->countries, 1);
        $payment_systems = json_decode($seo->payment_systems, 1);
        $minimum_top_up_amount = json_decode($seo->minimum_top_up_amount, 1);
        if (!empty($vertical)) {
            foreach ($vertical as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($countries)) {
            foreach ($countries as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($payment_systems)) {
            foreach ($payment_systems as $i) {
                $filters[] = $i;
            }
        }
        if (!empty($minimum_top_up_amount)) {
            foreach ($minimum_top_up_amount as $i) {
                $filters[] = $i;
            }
        }
        return view('admin.seo-filters.ads-filters.edit', compact('ads_seo_filter', 'filters'));
    }

    public function update(UpdateAdSeoFilterRequest $request, AdSeoFilter $ads_seo_filter)
    {
        $data = $request->validated();
        $ads_seo_filter->update($data);
        return redirect()->route('ads-seo-filter.show', $ads_seo_filter->id);
    }

    public function destroy(AdSeoFilter $ads_seo_filter)
    {
        $ads_seo_filter->delete();
        return redirect()->route('ads-seo-filter.index');
    }
}
