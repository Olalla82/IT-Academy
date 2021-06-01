<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

       /* $token = auth()->user()->createToken('Personal Acces Token')->accessToken;
            return view('home', compact('token'));*/

        if(Auth::attempt($data)){
 dd(':D');
            $token = Auth::user()->createToken('Personal Access Token')->accessToken;
            dd($token);   
            return redirect()->route('home');
            //return response()->json(['token' => $token], 200);
        } else {
            dd(':C');
            return response()->json(['error' => 'Unauthorized'], 401);
        }
                //dd(':D');
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
