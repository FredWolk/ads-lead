<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Top\StoreBannerTopRequest;
use App\Http\Requests\Banners\Top\UpdateBannerTopRequest;
use App\Models\BannerTop;
use Illuminate\Support\Facades\Storage;

class BannerTopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = BannerTop::all();
        return view('admin.banners.top.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.top.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Top\StoreBannerTopRequest  $request
     */
    public function store(StoreBannerTopRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['file']))
            $data['file'] = Storage::disk('public')->put('/admin/files/banner_top', $data['file']);
        if (!empty($data['mobile_file']))
            $data['mobile_file'] = Storage::disk('public')->put('/admin/files/banner_top', $data['mobile_file']);

        $banner= BannerTop::firstOrCreate($data);

        if ($banner) {
            return redirect()->route('top.show', $banner->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerTop  $top
     */
    public function show(BannerTop $top)
    {
        return view('admin.banners.top.show', compact('top'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerTop  $top
     */
    public function edit(BannerTop $top)
    {
        return view('admin.banners.top.edit', compact('top'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Top\UpdateBannerTopRequest  $request
     * @param  \App\Models\BannerTop  $top
     */
    public function update(UpdateBannerTopRequest $request, BannerTop $top)
    {
        $data = $request->validated();

        if (!empty($data['file'])) {
            if (!empty($top->file))
                Storage::disk('public')->delete($top->file);
            $data['file'] = Storage::disk('public')->put('/admin/files/banner_top', $data['file']);
        }
        if (!empty($data['mobile_file'])) {
            if (!empty($top->mobile_file))
                Storage::disk('public')->delete($top->mobile_file);
            $data['mobile_file'] = Storage::disk('public')->put('/admin/files/banner_top', $data['mobile_file']);
        }

        if ($top->update($data)){
            return redirect()->route('top.show', $top->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerTop  $top
     */
    public function destroy(BannerTop $top)
    {
        Storage::disk('public')->delete($top->file);
        Storage::disk('public')->delete($top->mobile_file);
        $top->delete();
        return redirect()->route('top.index');
    }
}
