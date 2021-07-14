<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuadro;

class CuadrosController extends Controller
{
    public function index(){
        $cuadros = Cuadro::all();
        return response()->json(compact('cuadros'));

    }
    public function store(Request $request){
        $cuadro = Cuadro::create($request->all());
        return response()->json_decode(compact('cuadro'));

    }
    public function delete(Cuadro $cuadro){
        $cuadro->delete();
        return response()->json(compact('cuadro'));

    }
}
