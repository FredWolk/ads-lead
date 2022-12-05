<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCpaRequest;
use App\Http\Requests\UpdateCpaRequest;
use App\Models\Cpa;

class CpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCpaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCpaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cpa  $cpa
     * @return \Illuminate\Http\Response
     */
    public function show(Cpa $cpa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cpa  $cpa
     * @return \Illuminate\Http\Response
     */
    public function edit(Cpa $cpa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCpaRequest  $request
     * @param  \App\Models\Cpa  $cpa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCpaRequest $request, Cpa $cpa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cpa  $cpa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cpa $cpa)
    {
        //
    }
}
