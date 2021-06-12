<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{

    public function login(){
        return view('login');
    }
    public function log(Request $request){
        
           $validator = Validator::make($request->only('email', 'password'),[
               'email' => 'required|email',
               'password' =>'required|min:4'
           ]);

      /*     if($validator->fails()) {
               return response()->json([
                   'success' => false,
                   'error' => $validator->errors()
               ], 422);
           }*/

           $token = JWTAuth::attempt($request->only('email', 'password'));
            
      /*     if($token){
                
                return response()->json([
                    'success' => true,
                    'token' => $token,
                    'user' => Auth::user()
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => 'unauthorized'
                ], 401);

            }*/

            return view('create');
    }



    public function logout(){
        $token = JWTAuth::getToken();

        try{

            JWTAuth::invalidate($token);
            return response()->json([
                'success' => true
            ], 200);

        } catch(JWTException $ex) {
            return response()->json([
                'success' => false,
                'error' => 'Failed logout'
            ], 422);

        }

    }
}
