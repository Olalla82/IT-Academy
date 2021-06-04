<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;
    protected $guarded = [''];
   

    //Relacion uno a muchos

    public function cuadros(){
        return $this->hasMany('App\Models\Cuadro');
    }

}
