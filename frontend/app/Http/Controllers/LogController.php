<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LogController extends Controller
{
    public function index(){

       // if(Auth::check()){
         //   return redirect()->route('home');
       // }

        
        return view('login');
    }


    public function autenticar(Request $request) {

      $response = Http::acceptJson()->post('http://localhost:8888/api/auth/login', [

        'email' => $request -> post('email'),
        'password' => $request -> post('password'),

      ]);

      return $response;


    //    if (Auth::attempt($credenciales)) {    
            
      //      $request->session()->regenerate();
            
        //    return redirect()->route('home');
       // }


      //  return redirect()->back()->with('error_login', 'Las credenciales no son válidas');
        
    }


    public function logout() {
        session()->flush();
      //  Auth::logout();

        return redirect()->route('login');

}

}
