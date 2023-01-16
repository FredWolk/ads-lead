<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Services\StoreServicesRequest;
use App\Http\Requests\Services\UpdateServicesRequest;
use App\Models\Services;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Services\StoreServicesRequest  $request
     */
    public function store(StoreServicesRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['logo']))
            $data['logo'] = Storage::disk('public')->put('/admin/images/services', $data['logo']);

        $services = Services::firstOrCreate($data);
        if ($services) {
            return redirect()->route('services.show', $services->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $services
     */
    public function show(Services $services)
    {
        return view('admin.services.show', compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $services
     */
    public function edit(Services $services)
    {
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Services\UpdateServicesRequest  $request
     * @param  \App\Models\Services  $services
     */
    public function update(UpdateServicesRequest $request, Services $services)
    {
        $data = $request->validated();
        if (!empty($data['logo'])) {
            if (!empty($services->logo))
                Storage::disk('public')->delete($services->logo);
            $data['logo'] = Storage::disk('public')->put('/admin/images/services', $data['logo']);
        }
        if ($services->update($data))
            return redirect()->route('services.show', $services->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     */
    public function destroy(Services $services)
    {
        if (!empty($services->logo)) {
            Storage::disk('public')->delete($services->logo);
        }

        if ($services->delete())
            return redirect()->route('services.index');
    }
}
