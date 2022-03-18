<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sensores extends Model
{
    use HasFactory;
    
     public function sensores()
     {
         return $this->belongsTo('App\Models\invernadero');
    
     }
}
