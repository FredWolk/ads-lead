<?php

namespace App\Http\Controllers\Admin\Banners;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banners\Fourm\StoreBannerForumAsideRequest;
use App\Http\Requests\Banners\Fourm\UpdateBannerForumAsideRequest;
use App\Models\BannerForumAside;
use Illuminate\Support\Facades\Storage;

class BannerForumAsideController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = BannerForumAside::all();
        return view('admin.banners.forum.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banners.forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Fourm\StoreBannerForumAsideRequest  $request
     */
    public function store(StoreBannerForumAsideRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['file']))
            $data['file'] = Storage::disk('public')->put('/admin/files/banner_forum', $data['file']);

        $banner= BannerForumAside::firstOrCreate($data);

        if ($banner) {
            return redirect()->route('forum.show', $banner->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BannerForumAside  $forum
     */
    public function show(BannerForumAside $forum)
    {
        return view('admin.banners.forum.show', compact('forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BannerForumAside  $forum
     */
    public function edit(BannerForumAside $forum)
    {
        return view('admin.banners.forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Banners\Fourm\UpdateBannerForumAsideRequest  $request
     * @param  \App\Models\BannerForumAside  $forum
     */
    public function update(UpdateBannerForumAsideRequest $request, BannerForumAside $forum)
    {
        $data = $request->validated();

        if (!empty($data['file'])) {
            if (!empty($forum->file))
                Storage::disk('public')->delete($forum->file);
            $data['file'] = Storage::disk('public')->put('/admin/files/banner_forum', $data['file']);
        }

        if ($forum->update($data)){
            return redirect()->route('forum.show', $forum->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BannerForumAside  $forum
     */
    public function destroy(BannerForumAside $forum)
    {
        Storage::disk('public')->delete($forum->file);
        $forum->delete();
        return redirect()->route('forum.index');
    }
}
