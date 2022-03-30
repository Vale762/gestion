<?php

namespace App\Http\Controllers;

use App\Models\temperatura;
use App\Http\Requests\StoretemperaturaRequest;
use App\Http\Requests\UpdatetemperaturaRequest;
use Illuminate\Http\Request;

class TemperaturaController extends Controller
{
    public function temperatura(){
        $temp = temperatura::all();
        return $temp;
    }

     
    public function registros(Request $request)
        
    {
        $temp = new temperatura();
        $temp->temperatura = $request->temperatura;
        $temp->fecha = $request->fecha;
        $temp->invernadero_id= $request->invernadero_id;
        return response()->json($temp->save(), 200);
    }

    

    public function actualizaciones(Request $request)
    {

        $temp = temperatura::findOrFail($request->id);
        $temp->temperatura = $request->temperatura;
        $temp->fecha = $request->fecha;
        $temp->invernadero_id= $request->invernadero_id;
        return response()->json($temp->save(), 200);
       
    }

    public function eliminaciones(Request $request)
    {
        $temp = temperatura::destroy($request->id);
        return response()->json($temp, 200);
        
    }


}

