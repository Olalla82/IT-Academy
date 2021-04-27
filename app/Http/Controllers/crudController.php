<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crudController extends Controller
{   
    public function token()
    {
        return csrf_token();
    }
    public function index(){
        
        //return "Esto es un CRUD";        
        return view('crud');   
              
    }
    public function create(Request $request){
        //return $request->all();

        $request->validate([
            'categoria' => 'required',
            'nombre' => 'required',
            'descript' => 'required'
        ]);
        return view('crud');
    }
   
}
