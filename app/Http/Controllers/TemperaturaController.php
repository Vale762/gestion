<?php

namespace App\Http\Controllers;

use App\Models\temperatura;
use App\Http\Requests\StoretemperaturaRequest;
use App\Http\Requests\UpdatetemperaturaRequest;

class TemperaturaController extends Controller
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
     * @param  \App\Http\Requests\StoretemperaturaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretemperaturaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function show(temperatura $temperatura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function edit(temperatura $temperatura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetemperaturaRequest  $request
     * @param  \App\Models\temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetemperaturaRequest $request, temperatura $temperatura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temperatura  $temperatura
     * @return \Illuminate\Http\Response
     */
    public function destroy(temperatura $temperatura)
    {
        //
    }
}
