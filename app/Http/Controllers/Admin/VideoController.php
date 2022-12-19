<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Video\StoreVideoRequest;
use App\Http\Requests\Video\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $video = Video::all();
        return view('admin.videos.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Video\StoreVideoRequest $request
     */
    public function store(StoreVideoRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image']))
            $data['image'] = Storage::disk('public')->put('/admin/images/video', $data['image']);
        if (!empty($data['pt_image']))
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/video', $data['pt_image']);
        if ($video = Video::firstOrCreate($data))
            return redirect()->route('video.show', $video->id);

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Video $video
     */
    public function show(Video $video)
    {
        return view('admin.videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Video $video
     */
    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Video\UpdateVideoRequest $request
     * @param \App\Models\Video $video
     */
    public function update(UpdateVideoRequest $request, Video $video)
    {
        $data = $request->validated();
        if (!empty($data['image'])) {
            Storage::disk('public')->delete($video->image);
            $data['image'] = Storage::disk('public')->put('/admin/images/video', $data['image']);
        }
        if (!empty($data['pt_image'])) {
            Storage::disk('public')->delete($video->pt_image);
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/video', $data['pt_image']);
        }

        if ($video->update($data))
            return redirect()->route('video.show', $video->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Video $video
     */
    public function destroy(Video $video)
    {
        if (!empty($video->image))
            Storage::disk('public')->delete($video->image);
        if (!empty($video->pt_image))
            Storage::disk('public')->delete($video->pt_image);
        if ($video->delete())
            return redirect()->route('video.index');
    }
}
