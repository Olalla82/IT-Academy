<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timeController extends Controller
{
    
   public function token()
    {
        return csrf_token();
    }
    public function __invoke(){
        return view('time');
    }

    
}
