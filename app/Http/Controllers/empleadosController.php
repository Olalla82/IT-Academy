<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Empleado;
use Cookie;


class empleadosController extends Controller
{
    public function token(){
        
        return csrf_token();
    }
    public function index(){

        $usuario = User::first();
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados', 'usuario'));
    }
    public function create(){
        $usuario = User::first();
                
        return view('empleados.create', compact('usuario'));
    }
    public function envio(Request $request){
      
        $request->flash();
        $request->validate([
            'nombre' => 'required',
            'nif' => 'required',
            'email' => 'required',
            'cargo' => 'required'
        ]);
        return view('empleados.create');
        
    }
    public function show(){
        $usuario = User::first();
        return view('empleados.index', compact('usuario'));
    }
    public function vista_update(){
        $usuario = User::first();
        return view('empleados.update', compact('usuario'));
    }
    public function update(Request $request){
        $request->flash();
        $request->validate([
            'nombre' => 'required',
            'nif' => 'required',
            'email' => 'required',
            'cargo' => 'required'
        ]);
        return view('empleados.update');
    }
    public function delete(){
        return view('empleados.delete');
        
    }
}
