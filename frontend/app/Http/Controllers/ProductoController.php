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
        $response = Http::acceptJson()->get('http://localhost:'. env('API_PRODUCTOS_PORT') . '/api/producto');
        $productos = json_decode($response, true);
        return view('Productos/listadoProductos',['productos' => $productos]);
   

    }

    public function destroy(Request $request, $id)
    {
        $response = Http::acceptJson()->delete('http://localhost:' . env('API_PRODUCTOS_PORT') .'/api/producto/' . $id);
        return redirect()->route('producto.showAll')->with(['success' => 'Producto eliminado']);

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
