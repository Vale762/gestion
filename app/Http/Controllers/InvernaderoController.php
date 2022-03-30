<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invernadero;
use App\Http\Requests\StoreinvernaderoRequest;
use App\Http\Requests\UpdateinvernaderoRequest;


class InvernaderoController extends Controller


//Funcion para mandar a traer cada uno de los campos
{

    public function invernadero()

    {
    $invernadero = invernadero::all();
    return $invernadero;

    }

    
    public function store(Request $request)
        
    {
        $invernadero = new invernadero();
        $invernadero->descripcion = $request->descripcion;
        $invernadero->seccion = $request->seccion;
        return response()->json($invernadero->save(), 200);
    }

    public function update(Request $request)
    {

        $invernadero = invernadero::findOrFail($request->id);
        $invernadero->descripcion = $request->descripcion;
        $invernadero->seccion = $request->seccion;
        return response()->json($invernadero->save(), 200);

    }
   
    public function destroy(Request $request)
    {
        $invernadero = invernadero::destroy($request->id);
        return response()->json($invernadero, 200);
        
    }
      
    
   
}

   

