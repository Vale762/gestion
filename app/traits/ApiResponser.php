<?php
namespace App\Traits;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;


/* retornar respueestas */
trait apiResponser
{
  protected function successResponse($data, $code)
  {
    return  response()->json($data,$code);  
  }

//   Respuesta de error
  protected function errorResponse($message, $code)
  {
    return response()->json(['error'=>$message,'code'=>$code],$code);
  }



// Lista completa de los usuarios.
  protected function showAll(Collection $collection, $code = 200){
    return $this->successResponse(['data'=> $collection], $code);
  }

//   Mostrar un solo registro
  protected function showOne(Model $instance, $code = 200){
    return $this->successResponse(['data'=> $instance], $code);
  }

}