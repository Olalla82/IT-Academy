<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{


   public function log(){
       return view('login');
   }
      /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['login', 'register']]);
    }

      


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    
     public function login(Request $request)
    {   
        $validator = Validator::make($request->only('email', 'password'), [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);
        if($validator->fails()) {
            return response()->json([
                'success' => false,
                'error' =>$validator->errors()
            ], 422);
        }

        $token = JWTAuth::attempt($request->only('email', 'password'));


       if($token){
            return response()->json([
                'success' => true,
                'token' => $token,
                'user' => Auth::user()
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'error' => 'Unauthorized'
                
            ], 401);

            return view('index', $token);
            
        }
    }


    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
   
}
