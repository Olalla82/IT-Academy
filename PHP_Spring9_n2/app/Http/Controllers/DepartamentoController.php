<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{   
    public function token()
    {
        return csrf_token(); 
    }
    public function index($pais){
        return view('departamento.index_d', compact('pais'));
    }
    public function store($pais){
        return view('departamento.store_d', compact('pais'));
    }
    public function show($pais, $departamento){
        return view('departamento.show_d', compact('pais','departamento'));
    }
    public function update($pais, $departamento){
        return view('departamento.update_d', compact('pais', 'departamento'));
    }
    public function destroy($pais, $departamento){
        return view('departamento.destroy_d', compact('pais','departamento'));
    }
}
