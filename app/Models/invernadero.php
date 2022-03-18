<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invernadero extends Model
{
    use HasFactory;
    protected $fillable =[
        'seccion',
        'descripcion'
    ];
    
     public function comments()
     {
       
   
        return $this->hasMany('App\Models\sensores');
      }

     public function temperatura()
     {
         return $this->hasMany('App\Models\temperatura');
     }
}
