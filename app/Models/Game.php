<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $guarded = [''];
    
    //Relación 1 a Muchos Inversa
    public function player(){
        return $this->belongsTo('App\Models\Player');

    }
}
