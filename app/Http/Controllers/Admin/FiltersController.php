<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FiltersRequest;
use App\Models\Filters;
use Illuminate\Http\Request;

class FiltersController extends Controller
{

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Filters  $filters
     */
    public function edit(Filters $filters)
    {
        return view('admin.filters.edit', compact('filters'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Filters  $filters
     */
    public function update(FiltersRequest $request, Filters $filters)
    {
        $data = $request->validated();
        $filters->update($data);
        return redirect()->route('filters.edit', 1);
    }

}
