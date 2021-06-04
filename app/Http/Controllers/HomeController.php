<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuadro;

class HomeController extends Controller
{
    public function index(){
    
      return view('home');

    }
    public function show(){
    
      return view('escaparate');

    }
    public function create(){
      return view('tiendas');

    }
}
