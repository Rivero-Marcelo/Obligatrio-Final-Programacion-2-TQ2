<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function create(){

        return view('Usuarios/nuevoUsuario');

    }


    public function store(Request $request){
        
        $response = Http::acceptJson()->post('http://localhost:8888/api/auth/register', [

            'name' => $request -> post('name'),
            'email' => $request -> post('email'),
            'password' => $request -> post('password')
        ]); 

   
    return back()->withSuccess('Usuario creado con éxito');
    }

    
    
    public static function me(Request $request){

        $response = Http::acceptJson()->withToken($request->session()->get('token'))
            ->post('http://localhost:8888/api/auth/me');
        
        return $usuario = json_decode($response, true);

    }

    
}
