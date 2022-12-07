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
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $ad = Ad::all();
        return view('admin.ad.index', compact('ad'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filters = Filters::first();
        return view('admin.ad.create', compact('filters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AD\StoreAdRequest  $request
     */
    public function store(StoreAdRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/admin/images/ad', $data['image']);
        $ad = Ad::firstOrCreate($data);
        if ($ad) {
            return redirect()->route('ad.show', $ad->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     */
    public function show(Ad $ad)
    {
        return view('admin.ad.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     */
    public function edit(Ad $ad)
    {
        return view('admin.ad.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\AD\UpdateAdRequest  $request
     * @param  \App\Models\Ad  $ad
     */
    public function update(UpdateAdRequest $request, Ad $ad)
    {
        $data = $request->validated();
        if ($ad->update($data))
            return redirect()->route('ad.show', $ad->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     */
    public function destroy(Ad $ad)
    {
        if ($ad->delete())
            return redirect()->route('ad.index');
    }
}
