<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotele;
use Throwable;

class HomeController extends Controller
{
    public function index(){
       try{

            return view('home');

       }catch(Throwable $e){

           return response()->view('error');
       }
       
    }
}
