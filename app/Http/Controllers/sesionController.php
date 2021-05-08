<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\empleadosController;


class sesionController extends Controller
{
    public function login()
    {
        
        return view('sesion.home');
    }
    public function store(Request $request)
    {   
        $request->flash();
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        return response(view('sesion.home'))->cookie('cookie1', 'valor', 60);
      
    }
    public function registro()
    {  
        return view('sesion.registro');
    }
    public function registro_store(Request $request)
    {
        $request->flash();
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        return view('sesion.registro');
    }
    public function pssw()
    {
        return view('sesion.password');
    }
    public function password(Request $request)
    {
        $request->flash();
        $request->validate([
            'email' => 'required'
        ]);
        return view('sesion.password');
    }
}
