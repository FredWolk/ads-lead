<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Aside\StoreBannerAsideRequest;
use App\Http\Requests\Banners\Aside\UpdateBannerAsideRequest;
use App\Models\BannerAside;

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
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerAsideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerAside  $bannerAside
     * @return \Illuminate\Http\Response
     */
    public function show(BannerAside $bannerAside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerAside  $bannerAside
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerAside $bannerAside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Aside\UpdateBannerAsideRequest  $request
     * @param  \App\Models\BannerAside  $bannerAside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerAsideRequest $request, BannerAside $bannerAside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerAside  $bannerAside
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerAside $bannerAside)
    {
        //
    }
}
