<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{

    public function create(){

        return view ('/Productos/NuevoProducto');
    }
    
    public function showAll()
    {
        $response = Http::acceptJson()->get('localhost:8800/api/producto');
        $productos = json_decode($response, true);
        return view('Productos/GestionProductos',['productos' => $productos]);
   

    }

    public function Eliminar(Request $request, $id)
    {
        $response = Http::delete('localhost:8800/api/producto/');

    }

    public function store(Request $request)
    {
        $response = Http::acceptJson()->post('localhost:8800/api/producto', [

            "nombre" => $request -> post('nombre'),
            "descripcion" => $request -> post('descripcion'),
            "stock" => $request -> post('stock')
        ]);

        return $response;

    }




}
