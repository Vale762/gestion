<?php

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Models\invernadero;

use App\Http\Requests\StoreinvernaderoRequest;
use App\Http\Requests\UpdateinvernaderoRequest;


use App\Http\Controllers\Controller;

use App\Http\Controllers\ApiController;


class InvernaderoController extends ApiController


//Funcion para mandar a traer cada uno de los campos
{

    public function index()

    {
        $invernadero = Invernadero::all();
        return $this->showAll($invernadero, 200);
    }

    
    public function store(Request $request)
        
    {
        $invernadero = Invernadero::create($request->all());
        
        return $this->showOne($invernadero,201);
    }



    
    public function update(Request $request)
    {

        $invernadero = Invernadero::findOrFail($request->id);
        $invernadero->descripcion = $request->descripcion;
        $invernadero->seccion = $request->seccion;
        $invernadero->save();
        
        return $this->showOne($invernadero,200);
       

    }

    public function show($id)
    {
        
        $invernadero = Invernadero::findOrfail($id);
        
        return $this->showOne($invernadero);
    }
   
    public function destroy(Request $request)
    {
        $invernadero = Invernadero::destroy($request->id);
        return response()->json($invernadero, 200);
        
    }
      
    
   
}

   

