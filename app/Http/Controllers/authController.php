<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function token()
    {
        return csrf_token();
    }
    public function login(){
        return view('auth.login');
    }
}
