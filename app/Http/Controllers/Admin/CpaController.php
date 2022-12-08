<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CPA\StoreCPARequest;
use App\Http\Requests\CPA\UpdateCpaRequest;
use App\Models\Ad;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CPA\StoreCpaRequest  $request
     */
    public function store(StoreCpaRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/admin/images/cpa', $data['image']);
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
        return view('admin.cpa.edit', compact('cpa'));
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
        if ($cpa->delete())
            return redirect()->route('cpa.index');
    }
}
