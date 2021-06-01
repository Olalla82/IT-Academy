<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuadro extends Model
{
    use HasFactory;
    protected $guarded = [''];

  //Relacion uno a muchos inversa
    public function tiendas()
    {
        return $this->belongsTo('App\Models\Tienda');
    }
}
