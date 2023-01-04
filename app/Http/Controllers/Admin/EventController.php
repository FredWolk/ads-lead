<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Events\StoreEventsRequest;
use App\Http\Requests\Events\UpdateEventsRequest;
use App\Models\Events;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $events = Events::all();
        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Events\StoreEventsRequest $request
     */
    public function store(StoreEventsRequest $request)
    {
        $data = $request->validated();
        if (!empty($data['image']))
            $data['image'] = Storage::disk('public')->put('/admin/images/events', $data['image']);
        if (!empty($data['pt_image']))
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/events', $data['pt_image']);
        $event = Events::firstOrCreate($data);
        if ($event) {
            return redirect()->route('event.show', $event->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Events $event
     */
    public function show(Events $event)
    {
        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Events $event
     */
    public function edit(Events $event)
    {
        return view('admin.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Events\UpdateEventsRequest $request
     * @param \App\Models\Events $event
     */
    public function update(UpdateEventsRequest $request, Events $event)
    {
        $data = $request->validated();
        if (!empty($data['image'])) {
            if (!empty($event->image))
                Storage::disk('public')->delete($event->image);
            $data['image'] = Storage::disk('public')->put('/admin/images/events', $data['image']);
        }
        if (!empty($data['pt_image'])) {
            if (!empty($event->pt_image))
                Storage::disk('public')->delete($event->pt_image);
            $data['pt_image'] = Storage::disk('public')->put('/admin/images/events', $data['pt_image']);
        }

        if ($event->update($data))
            return redirect()->route('event.show', $event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Events $event
     */
    public function destroy(Events $event)
    {
        if (!empty($event->image))
            Storage::disk('public')->delete($event->image);
        if (!empty($event->pt_image))
            Storage::disk('public')->delete($event->pt_image);

        if ($event->delete())
            return redirect()->route('event.index');
    }
}
