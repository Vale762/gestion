<?php

namespace App\Http\Controllers;

use App\Models\sensores;
use App\Http\Requests\StoresensoresRequest;
use App\Http\Requests\UpdatesensoresRequest;

class SensoresController extends Controller
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
     * @param  \App\Http\Requests\StoresensoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoresensoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function show(sensores $sensores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function edit(sensores $sensores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesensoresRequest  $request
     * @param  \App\Models\sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatesensoresRequest $request, sensores $sensores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sensores  $sensores
     * @return \Illuminate\Http\Response
     */
    public function destroy(sensores $sensores)
    {
        //
    }
}
