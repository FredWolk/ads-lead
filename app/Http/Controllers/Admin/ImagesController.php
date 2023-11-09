<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateImagesRequest;
use App\Models\Images;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Images::orderBy('id', 'desc')->paginate(21);
        return view('admin.images.index', compact('images'));
    }

    public function create()
    {
        return view('admin.images.create');
    }

    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->file();
        if (!empty($data['link'])) {
            foreach ($data['link'] as $link) {
                $url['link'] = Storage::disk('public')->put('/admin/new_images', $link);
                $images = Images::firstOrCreate($url);
            }
        }
        if ($images) {
            return redirect()->route('images.index');
        }
    }

    public function edit(Images $image)
    {
        return view('admin.images.edit', compact('image'));
    }

    public function update(UpdateImagesRequest $request, Images $image)
    {
        $data = $request->validated();
        if (!empty($data['link'])) {
            if (!empty($image->link)) {
                Storage::disk('public')->delete($image->link);
            }
            $data['link'] = Storage::disk('public')->put('/admin/new_images', $data['link']);
        }
        if ($image->update($data)) {
            return redirect()->route('images.index');
        }
    }

    public function destroy(Images $image)
    {
        if (!empty($image->link)) {
            Storage::disk('public')->delete($image->link);
        }
        if ($image->delete()) {
            return redirect()->route('images.index');
        }
    }
}
