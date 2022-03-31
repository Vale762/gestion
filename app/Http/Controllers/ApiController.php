<?php

namespace App\Http\Controllers;

use App\traits\ApiResponser;
use Illuminate\Http\Request;

class ApiController extends Controller
{
     /** para poder utilizar el traits lo usamos en api controller para que este se puede ocupar en todos nuestros controladores */

  /** Aqui ya podemos haceder a todos los metodos que estan en ApiResponser.php */
  Use ApiResponser;

}