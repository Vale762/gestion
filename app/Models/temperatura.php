<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class temperatura extends Model
{
    use HasFactory;
    protected $fillable =[
        'temperatura',
        'fecha'
    ];

     public function post()
      {
          return $this->belongsTo('App\Models\invernadero');
    
      }
}
