<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Models\temperatura;

use App\Http\Requests\StoretemperaturaRequest;
use App\Http\Requests\UpdatetemperaturaRequest;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiController;

class TemperaturaController extends ApiController
{
    public function index(){
       
        $temp = temperatura::all();
        return $this->showAll($temp, 200);
    }

     
    public function store (Request $request)
        
    {

        $temp = temperatura::create($request->all());
        return $this->showOne($temp,201);
    }

    

    public function update(Request $request)
    {   
        $temp = temperatura::findOrFail($request->id);
        $temp->temperatura = $request->temperatura;
        $temp->fecha = $request->fecha;
        $temp->invernadero_id= $request->invernadero_id;
        $temp->save();
        return $this->showOne($temp,200);
    }

    public function show($id)
    {
        
        $temp = temperatura::findOrfail($id);
        return $this->showOne($temp);
    }


    public function destroy(Request $request)
    {
        $temp = temperatura::destroy($request->id);
        return response()->json($temp, 200);
        
    }


}

