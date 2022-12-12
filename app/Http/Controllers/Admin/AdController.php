<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AD\StoreAdRequest;
use App\Http\Requests\Ad\UpdateAdRequest;
use App\Models\Ad;
use App\Models\Filters;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    public function index()
    {
        $ad = Ad::all();
        return view('admin.ad.index', compact('ad'));
    }
    public function create()
    {
        $filters = Filters::first();
        return view('admin.ad.create', compact('filters'));
    }

    public function store(StoreAdRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image']))
            $data['image'] = Storage::disk('public')->put('/admin/images/ad', $data['image']);

        if (!empty($data['logo']))
            $data['logo'] = Storage::disk('public')->put('/admin/images/ad', $data['logo']);

        $ad = Ad::firstOrCreate($data);
        if ($ad) {
            return redirect()->route('ad.show', $ad->id);
        }
    }
    public function show(Ad $ad)
    {
        return view('admin.ad.show', compact('ad'));
    }
    public function edit(Ad $ad)
    {
        $filters = Filters::first();
        return view('admin.ad.edit', compact('ad', 'filters'));
    }

    public function update(UpdateAdRequest $request, Ad $ad)
    {
        $data = $request->validated();
        if ($ad->update($data))
            return redirect()->route('ad.show', $ad->id);
    }
    public function destroy(Ad $ad)
    {
        if ($ad->delete())
            return redirect()->route('ad.index');
    }
}
