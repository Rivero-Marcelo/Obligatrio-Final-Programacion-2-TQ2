<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class CompraController extends Controller
{
    public function create (){

        $response = Http::acceptJson()->get('localhost:8800/api/producto');
        $productos = json_decode($response, true);
       
        return view('Compras/nuevaCompra',['productos' => $productos]);
    }

    
    public function confirmarCompra(Request $request){

       $producto = $request->input();

        return view('Compras/confirmarCompra')->with('producto', $producto);
 
    }
    
    
    public function store(Request $request){

        $response = Http::acceptJson()->post('localhost:8900/api/ventas/registro',[

            'idProducto' => $request->post('idProducto'),
            'idCliente' => session()->get('idUsuario'),

        ]);

        return redirect()->action([CompraController::class]);
    }

    
    
    private function actualizarStock(Request $request){

        $response = Http::acceptJson()->get('localhost:8800/api/producto');

        
    }


    
}
