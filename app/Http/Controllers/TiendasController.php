<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;

class TiendasController extends Controller
{
    public function index(){
       
        $tienda = Tienda::all();
       return response()->json(compact('tienda'));

    }
    public function store(Request $request){
        $tienda = Tienda::create($request->all());
        return response()->json(compact('tienda'));

    }
  
}
