<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sesionController extends Controller
{
    public function token(){

       return csrf_token();     
    }
    public function index(){

        //return "Inicio Sesión";
        return response(view('sesion.inicio'))->cookie('cokkie1', 'valor', 15 );
       
    }
    public function send(Request $request){
        //return "Inicio Sesión";
        $request->validate([
            'nombre' => 'required',
            'mail' => 'required',
            'pssw' => 'required'
        ]);
        //return $request->all();
        return view('sesion.inicio');
    }
    public function create(){
        //return "Create sesion";
        return response(view('sesion.registro'))->cookie('cokkie2', 'valor', 15 );
    }
    public function incluir(Request $request){

        $request->validate([
            'nombre' => 'required',
            'mail' => 'required',
            'pssw' => 'required'
        ]);
        //return $request->all();
        return view('sesion.registro');
    }
    public function update(){
        //return "Actualizar contraseña";
        return response(view('sesion.password')) ->cookie('cokkie3', 'valor', 15);
        
    }
    public function restaurar(Request $request){
        //return "Actualizar contraseña";
        $request->validate([
            'mail' => 'required'
        ]);
        //return $request->all();
        return view('sesion.password');
    }
}
