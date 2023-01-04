<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AD\StoreAdRequest;
use App\Http\Requests\AD\UpdateAdRequest;
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
            $data['image'] = Storage::disk('public')->put('/admin/images/netw', $data['image']);

        if (!empty($data['pt_image']))
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/netw', $data['pt_image']);

        if (!empty($data['logo']))
            $data['logo'] = Storage::disk('public')->put('/admin/images/netw', $data['logo']);

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

        if (!empty($data['image'])) {
            if (!empty($ad->image))
                Storage::disk('public')->delete($ad->image);
            $data['image'] = Storage::disk('public')->put('/admin/images/netw', $data['image']);
        }
        if (!empty($data['pt_image'])) {
            if (!empty($ad->pt_image))
                Storage::disk('public')->delete($ad->pt_image);
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/netw', $data['pt_image']);
        }
        if (!empty($data['logo'])) {
            if (!empty($ad->logo))
                Storage::disk('public')->delete($ad->logo);
            $data['logo'] = Storage::disk('public')->put('/admin/images/netw', $data['logo']);
        }
        if ($ad->update($data))
            return redirect()->route('ad.show', $ad->id);
    }

    public function destroy(Ad $ad)
    {

        if (!empty($ad->image)) {
            Storage::disk('public')->delete($ad->image);
        }
        if (!empty($ad->pt_image)) {
            Storage::disk('public')->delete($ad->pt_image);
        }
        if (!empty($ad->logo)) {
            Storage::disk('public')->delete($ad->logo);
        }

        if ($ad->delete())
            return redirect()->route('ad.index');
    }
}
