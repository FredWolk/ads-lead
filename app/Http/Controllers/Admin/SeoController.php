<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Seo\StoreRequest;
use App\Http\Requests\Seo\UpdateRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{

    public function index()
    {
        $seo = Seo::all()->toArray();
        return view('admin.seo.index', compact('seo'));
    }

    public function create()
    {
        return view('admin.seo.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $seo = Seo::firstOrCreate($data);
        return redirect()->route('seo.show', $seo->id);
    }

    public function show(Seo $seo)
    {
        $seo = $seo->toArray();
        return view('admin.seo.show', compact('seo'));
    }

    public function edit(Seo $seo)
    {
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(UpdateRequest $request, Seo $seo)
    {
        $data = $request->validated();
        $seo->update($data);
        return redirect()->route('seo.show', $seo->id);
    }
}
