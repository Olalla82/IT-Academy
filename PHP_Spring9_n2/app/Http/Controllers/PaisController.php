<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function token()
    {
        return csrf_token(); 
    }
    public function index(){
        return view('paises.index_p');
    }
    public function store(){
        return view('paises.store_p');
    }
    public function show($pais){
       return view('paises.show_p', ['pais' => $pais]);
       
    }
    public function update($pais){
        return view('paises.update_p', compact('pais'));
    }
    public function destroy($pais){
        return view('paises.destroy_p', ['pais' => $pais]);
    }
}
