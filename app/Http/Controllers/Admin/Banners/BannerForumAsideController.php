<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Fourm\StoreBannerForumAsideRequest;
use App\Http\Requests\Banners\Fourm\UpdateBannerForumAsideRequest;
use App\Models\BannerForumAside;

class BannerForumAsideController extends Controller
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
     * @param  \App\Http\Requests\Banners\Fourm\StoreBannerForumAsideRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBannerForumAsideRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerForumAside  $bannerForumAside
     * @return \Illuminate\Http\Response
     */
    public function show(BannerForumAside $bannerForumAside)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerForumAside  $bannerForumAside
     * @return \Illuminate\Http\Response
     */
    public function edit(BannerForumAside $bannerForumAside)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Fourm\UpdateBannerForumAsideRequest  $request
     * @param  \App\Models\BannerForumAside  $bannerForumAside
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBannerForumAsideRequest $request, BannerForumAside $bannerForumAside)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerForumAside  $bannerForumAside
     * @return \Illuminate\Http\Response
     */
    public function destroy(BannerForumAside $bannerForumAside)
    {
        //
    }
}
