<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Aside\StoreBannerAsideRequest;
use App\Http\Requests\Banners\Aside\UpdateBannerAsideRequest;
use App\Models\BannerAside;
use Illuminate\Support\Facades\Storage;

class BannerAsideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = BannerAside::all();
        return view('admin.banners.aside.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.aside.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Aside\StoreBannerAsideRequest  $request
     */
    public function store(StoreBannerAsideRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['file']))
            $data['file'] = Storage::disk('public')->put('/admin/files/banner_aside', $data['file']);

        $banner= BannerAside::firstOrCreate($data);

        if ($banner) {
            return redirect()->route('aside.show', $banner->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerAside  $aside
     */
    public function show(BannerAside $aside)
    {
        return view('admin.banners.aside.show', compact('aside'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerAside  $aside
     */
    public function edit(BannerAside $aside)
    {
        return view('admin.banners.aside.edit', compact('aside'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Aside\UpdateBannerAsideRequest  $request
     * @param  \App\Models\BannerAside  $aside
     */
    public function update(UpdateBannerAsideRequest $request, BannerAside $aside)
    {
        $data = $request->validated();

        if (!empty($data['file'])) {
            if (!empty($aside->file))
                Storage::disk('public')->delete($aside->file);
            $data['file'] = Storage::disk('public')->put('/admin/banner_aside', $data['file']);
        }

        if ($aside->update($data)){
            return redirect()->route('aside.show', $aside->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerAside  $aside
     */
    public function destroy(BannerAside $aside)
    {
        Storage::disk('public')->delete($aside->file);
        $aside->delete();
        return redirect()->route('aside.index');
    }
}
