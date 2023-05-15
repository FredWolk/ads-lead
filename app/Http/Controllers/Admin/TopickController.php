<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Topick\StoreRequest;
use App\Http\Requests\Topick\UpdateRequest;
use App\Models\ThreadsLinks;

class TopickController extends Controller
{
    public function index()
    {
        $topick = ThreadsLinks::all();
        return view('admin.topick.index', compact('topick'));
    }

    public function create()
    {
        return view('admin.topick.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $topick = ThreadsLinks::firstOrCreate($data);
        return redirect()->route('topick.show', $topick->id);
    }

    public function show($id)
    {
        $topick = ThreadsLinks::firstWhere('id', $id);
        return view('admin.topick.show', compact('topick'));
    }

    public function edit($id)
    {
        $topick = ThreadsLinks::firstWhere('id', $id);
        return view('admin.topick.edit', compact('topick'));
    }

    public function update(UpdateRequest $request, ThreadsLinks $topick)
    {
        $data = $request->validated();
        $topick->update($data);
        return redirect()->route('topick.show', $topick->id);
    }

    public function destroy($id)
    {
        ThreadsLinks::firstWhere('id', $id)->delete();
        return redirect()->route('topick.index');
    }
}
