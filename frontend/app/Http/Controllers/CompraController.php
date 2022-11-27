<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CompraController extends Controller
{
    public function create (){

        $response = Http::acceptJson()->get('localhost:8800/api/producto');
        $productos = json_decode($response, true);
        return view('Compras/nuevaCompra',['productos' => $productos]);
    }

    
    public function confirmarCompra(Request $request){

        $datos = $request->input();

        return view('Compras/confirmarCompra')->with('datos', $datos);


        
    }
    
    
    public function store(Request $request){

        $response = Http::acceptJson()->post('localhost:8900/api/ventas/registro',[

            'idProducto' => $request->post('')
        ]);



    }


    
}
