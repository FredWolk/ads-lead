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

        $service = Services::firstOrCreate($data);
        if ($service) {
            return redirect()->route('services.show', $service->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Services  $service
     */
    public function show(Services $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Services  $service
     */
    public function edit(Services $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Services\UpdateServicesRequest  $request
     * @param  \App\Models\Services  $service
     */
    public function update(UpdateServicesRequest $request, Services $service)
    {
        $data = $request->validated();
        if (!empty($data['logo'])) {
            if (!empty($service->logo))
                Storage::disk('public')->delete($service->logo);
            $data['logo'] = Storage::disk('public')->put('/admin/images/services', $data['logo']);
        }
        if ($service->update($data))
            return redirect()->route('services.show', $service->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $service
     */
    public function destroy(Services $service)
    {
        if (!empty($service->logo)) {
            Storage::disk('public')->delete($service->logo);
        }

        if ($service->delete())
            return redirect()->route('services.index');
    }
}
