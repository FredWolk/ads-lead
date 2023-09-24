<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCpaSeoFilterRequest;
use App\Http\Requests\UpdateCpaSeoFilterRequest;
use App\Models\CpaSeoFilter;
use App\Models\Filters;

class CpaSeoFilterController extends Controller
{
    public function index()
    {
        $filters = CpaSeoFilter::all();
        return view('admin.seo-filters.cpa-filters.index', compact('filters'));
    }

    public function create()
    {
        $seo = Filters::select('vertical', 'countries', 'payment_models', 'payment_schedule', 'payment_systems')->first();
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
        return view('admin.seo-filters.cpa-filters.create', compact('filters'));
    }

    public function store(StoreCpaSeoFilterRequest $request)
    {
        $data = $request->validated();
        $seo = CpaSeoFilter::firstOrCreate([
            'filter_name' => $data['filter_name']
        ], $data);
        return redirect()->route('cpa-seo-filter.show', $seo->id);
    }

    public function show(CpaSeoFilter $cpa_seo_filter)
    {
        return view('admin.seo-filters.cpa-filters.show', compact('cpa_seo_filter'));
    }

    public function edit(CpaSeoFilter $cpa_seo_filter)
    {
        $seo = Filters::select('vertical', 'countries', 'payment_models', 'payment_schedule', 'payment_systems')->first();
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
        return view('admin.seo-filters.cpa-filters.edit', compact('cpa_seo_filter', 'filters'));
    }

    public function update(UpdateCpaSeoFilterRequest $request, CpaSeoFilter $cpa_seo_filter)
    {
        $data = $request->validated();
        $cpa_seo_filter->update($data);
        return redirect()->route('cpa-seo-filter.show', $cpa_seo_filter->id);
    }

    public function destroy(CpaSeoFilter $cpa_seo_filter)
    {
        $cpa_seo_filter->delete();
        return redirect()->route('cpa-seo-filter.index');
    }
}
