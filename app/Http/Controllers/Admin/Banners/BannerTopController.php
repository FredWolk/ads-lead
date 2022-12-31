<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Top\StoreBannerTopRequest;
use App\Http\Requests\Banners\Top\UpdateBannerTopRequest;
use App\Models\BannerTop;

class BannerTopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Top\StoreBannerTopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerTopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerTop  $bannerTop
     * @return \Illuminate\Http\Response
     */
    public function show(BannerTop $bannerTop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerTop  $bannerTop
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerTop $bannerTop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Top\UpdateBannerTopRequest  $request
     * @param  \App\Models\BannerTop  $bannerTop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerTopRequest $request, BannerTop $bannerTop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerTop  $bannerTop
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerTop $bannerTop)
    {
        //
    }
}
