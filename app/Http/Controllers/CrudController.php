<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;
use App\Models\Partido;

class CrudController extends Controller
{
    public function index(){
        $equipos = Equipo::all();
        $partidos = Partido::all();
        return view('crud.index', compact('equipos', 'partidos'));
    }
    public function create(){
        return view('crud.create');
    }
    public function store(Request $request){
        $request->flash();

        $request->validate([
            'estadio' => 'required',
            'equipo_local' => 'required',
            'equipo_visitante' => 'required',
            'fecha' => 'required'
        ]);

        return view('crud.create');
       // return response(view('empleados.index', compact('empleados')))->cookie('cookie1', $request->email, 60);
    }
    public function update(){
        return view('crud.update');
    }
    public function restore(Request $request){
        $request->flash();
        
        $request->validate([
            'equipo_local' => 'required',
            'goles_local' => 'required',
            'equipo_visitante' => 'required',
            'goles_visitante' => 'required',
            'estadio' => 'required' 
        ]);

        return view('crud.update');
    }
    public function delete(){
        return view('crud.delete'); 
    }
    public function delete_post(){
        return view('crud.delete'); 
    }
}
