<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

class PassportController extends Controller
{

   public function login_index(){
      
    return view('login');
   }


    public function login(Request $request){
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

      

        if(Auth::attempt($data)){
            $token = Auth::user()->createToken('Personal Access Token')->accessToken;  
            //return redirect()->route('home', ['token' => $token]);
            //return view('home',  ['token' => $token]);
            return redirect()->action(
                [HomeController::class, 'show' ], ['token' => $token]);

            //return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
               
    }

    public function register_index(){
        return view('registro');
    } 

    public function register(Request $request){
               
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => bcrypt($request->password)

        ]);
        
        $token = $user->createToken('Personal Acces Token')->accessToken;
           
            return redirect()->route('login.show');
       // return route('auth.login', compact('token'));
       // return response()->json(['token' => $token], 200);

    }

    public function logout(Request $request){
        
        $token = Auth::user()->token();
        $token->revoke();
         return response()->json([
             'message' => 'Successfully logged out'
         ]);
    }
}
