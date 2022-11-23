<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class ProductoController extends Controller
{
    
    public function Listado()
    {
        $response = Http::get('localhost:8080/api/producto');
        $productos = json_decode($response, true);
        return view('Productos/GestionProductos',['productos' => $productos]);
   

    }

    public function Eliminar(Request $request, $id)
    {
        $response = Http::delete('localhost:8000/api/producto/');

    }

    public function Nuevo(Request $request)
    {
        $response = Http::post('localhost:8000/producto', [

            "nombre" => $request -> post["nombre"],
            "descripcion" => $request -> post["descripcion"],
            "stock" => $request -> post["stock"]
        ]);

        return $response;

    }




}
