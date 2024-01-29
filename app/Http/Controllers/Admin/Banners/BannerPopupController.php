<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Popup\StoreBannerPopupRequest;
use App\Http\Requests\Banners\Popup\UpdateBannerPopupRequest;
use App\Models\Popup;
use Illuminate\Support\Facades\Storage;

class BannerPopupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popup = Popup::all();
        return view('admin.banners.popup.index', compact('popup'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.popup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Banners\Popup\StoreBannerPopupRequest $request
     */
    public function store(StoreBannerPopupRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['logo']))
            $data['logo'] = Storage::disk('public')->put('/admin/files/popup', $data['logo']);

        $banner = Popup::firstOrCreate($data);

        if ($banner) {
            return redirect()->route('popup.show', $banner->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Popup $popup
     */
    public function show(Popup $popup)
    {
        return view('admin.banners.popup.show', compact('popup'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Popup $popup
     */
    public function edit(Popup $popup)
    {
        return view('admin.banners.popup.edit', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Banners\Popup\UpdateBannerPopupRequest $request
     * @param \App\Models\Popup $popup
     */
    public function update(UpdateBannerPopupRequest $request, Popup $popup)
    {
        $data = $request->validated();

        if (!empty($data['logo'])) {
            if (!empty($popup->logo))
                Storage::disk('public')->delete($popup->logo);
            $data['logo'] = Storage::disk('public')->put('/admin/files/popup', $data['logo']);
        }

        if ($popup->update($data)) {
            return redirect()->route('popup.show', $popup->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Popup $popup
     */
    public function destroy(Popup $popup)
    {
        Storage::disk('public')->delete($popup->popup);
        $popup->delete();
        return redirect()->route('popup.index');
    }
}
