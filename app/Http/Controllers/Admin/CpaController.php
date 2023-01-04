<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CPA\StoreCpaRequest;
use App\Http\Requests\CPA\UpdateCpaRequest;
use App\Models\Cpa;
use App\Models\Filters;
use Illuminate\Support\Facades\Storage;

class CpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $cpa = Cpa::all();
        return view('admin.cpa.index', compact('cpa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $filters = Filters::first();
        return view('admin.cpa.create', compact('filters'));
    }

    public function store(StoreCpaRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image']))
            $data['image'] = Storage::disk('public')->put('/admin/images/cpa', $data['image']);
        if (!empty($data['pt_image']))
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/cpa', $data['pt_image']);

        if (!empty($data['logo']))
            $data['logo'] = Storage::disk('public')->put('/admin/images/cpa', $data['logo']);
        if (!empty($data['manager_image']))
            $data['manager_image'] = Storage::disk('public')->put('/admin/images/cpa', $data['manager_image']);

        $cpa = Cpa::firstOrCreate($data);

        if ($cpa) {
            return redirect()->route('cpa.show', $cpa->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cpa  $cpa
     */
    public function show(Cpa $cpa)
    {
        return view('admin.cpa.show', compact('cpa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cpa  $cpa
     */
    public function edit(Cpa $cpa)
    {
        $filters = Filters::first();
        return view('admin.cpa.edit', compact('cpa', 'filters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CPA\UpdateCpaRequest  $request
     * @param  \App\Models\Cpa  $cpa
     */
    public function update(UpdateCpaRequest $request, Cpa $cpa)
    {
        $data = $request->validated();

        if (!empty($data['image']))
            Storage::disk('public')->delete($cpa->image);
            $data['image'] = Storage::disk('public')->put('/admin/images/cpa', $data['image']);
        if (!empty($data['pt_image']))
            Storage::disk('public')->delete($cpa->pt_image);
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/cpa', $data['pt_image']);

        if (!empty($data['logo']))
            Storage::disk('public')->delete($cpa->logo);
            $data['logo'] = Storage::disk('public')->put('/admin/images/cpa', $data['logo']);
        if (!empty($data['manager_image']))
            Storage::disk('public')->delete($cpa->manager_image);
            $data['manager_image'] = Storage::disk('public')->put('/admin/images/cpa', $data['manager_image']);

        if ($cpa->update($data))
            return redirect()->route('cpa.show', $cpa->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cpa  $cpa
     */
    public function destroy(Cpa $cpa)
    {
        if (!empty($cpa->image))
            Storage::disk('public')->delete($cpa->image);
        if (!empty($cpa->pt_image))
            Storage::disk('public')->delete($cpa->pt_image);
        if (!empty($cpa->logo))
            Storage::disk('public')->delete($cpa->logo);
        if (!empty($cpa->manager_image))
            Storage::disk('public')->delete($cpa->manager_image);

        if ($cpa->delete())
            return redirect()->route('cpa.index');
    }
}
