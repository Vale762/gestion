<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function usuarios(){
        $users = User::all();
        return $users;
    }

    //El método guardar de usuarios ya existe en el controlador de RegisterController
    

    public function actualiza(Request $request){

        $users = User::findOrFail($request->id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
       
        
        return response()->json($users->save(), 200);
       
    }

    public function eliminar(Request $request)
    {
        $users = User::destroy($request->id);
        return response()->json($users, 200);
        
    }


}