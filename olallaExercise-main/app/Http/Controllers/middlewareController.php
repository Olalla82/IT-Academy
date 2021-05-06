<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class middlewareController extends Controller
{
    public function __construct(){
        $this->middleware('time');
    }
}
