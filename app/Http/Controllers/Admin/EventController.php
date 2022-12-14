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
     * @param  \App\Http\Requests\Events\StoreEventsRequest  $request
     */
    public function store(StoreEventsRequest $request)
    {
        $data = $request->validated();
        $data['image'] = Storage::disk('public')->put('/admin/images/events', $data['image']);
        $event = Events::firstOrCreate($data);
        if ($event) {
            return redirect()->route('event.show', $event->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Events  $events
     */
    public function show(Events $events)
    {
        return view('admin.events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Events  $events
     */
    public function edit(Events $events)
    {
        return view('admin.events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Events\UpdateEventsRequest  $request
     * @param  \App\Models\Events  $events
     */
    public function update(UpdateEventsRequest $request, Events $events)
    {
        $data = $request->validated();
        if ($events->update($data))
            return redirect()->route('event.show', $events->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Events  $events
     */
    public function destroy(Events $events)
    {
        if ($events->delete())
            return redirect()->route('event.index');
    }
}
