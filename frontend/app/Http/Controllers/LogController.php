<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class LogController extends Controller
{
    public function index(Request $request){

      if ($request->session()->has('autenticado')) {

        return redirect()->route('home');
        
    }     
        
       return view('login');
    }


    public function autenticar(Request $request) {

      $response = Http::acceptJson()->post('http://localhost:8888/api/auth/login', [

        'email' => $request -> post('email'),
        'password' => $request -> post('password'),

      ]);

      $response = json_decode($response, true);

      if(Arr::exists($response, 'access_token')){
        $request->session()->regenerate();
        $request->session()->put('autenticado', true);
        return redirect()->route('home');

      }

      return redirect()->back()->with('error_login', $response['error']);
      

      

      


    //    if (Auth::attempt($credenciales)) {    
            
      //      $request->session()->regenerate();
            
        //    return redirect()->route('home');
       // }


      //  return redirect()->back()->with('error_login', 'Las credenciales no son válidas');
        
    }


    public function logout() {

      $response = Http::acceptJson()->post('http://localhost:8888/api/auth/logout');
     
     
      //   session()->flush();
      //  Auth::logout();

        return redirect()->route('login');

}

}
