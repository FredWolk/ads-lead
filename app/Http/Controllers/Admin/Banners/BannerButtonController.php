<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Button\StoreBannerButtonRequest;
use App\Http\Requests\Banners\Button\UpdateBannerButtonRequest;
use App\Models\BannerButton;

class BannerButtonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $buttons = BannerButton::all();
        return view('admin.banners.button.index', compact('buttons'));
    }

    /**
     * Show the form for creating a new resource.

     */
    public function create()
    {
        return view('admin.banners.button.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Button\StoreBannerButtonRequest  $request
     */
    public function store(StoreBannerButtonRequest $request)
    {
        $data = $request->validated();
        $button = BannerButton::firstOrCreate($data);
        if ($button)
            return redirect()->route('button.show', $button->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerButton  $bannerButton
     */
    public function show($id)
    {
        dd($id);
        return view('admin.banners.button.show', compact('bannerButton'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerButton  $bannerButton
     */
    public function edit(BannerButton $bannerButton)
    {
        dd($bannerButton);
        return view('admin.banners.button.edit', compact('bannerButton'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Button\UpdateBannerButtonRequest  $request
     * @param  \App\Models\BannerButton  $bannerButton
     */
    public function update(UpdateBannerButtonRequest $request, BannerButton $bannerButton)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerButton  $bannerButton
     */
    public function destroy(BannerButton $bannerButton)
    {

    }
}
