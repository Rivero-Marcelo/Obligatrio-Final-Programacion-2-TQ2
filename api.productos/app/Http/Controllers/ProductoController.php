<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;


class ProductoController extends Controller
{


    public function index(){

        $productos = Producto::all();
        return $productos;
}


    public function store(Request $request){

        $request -> validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'stock' => 'required'
        ]);

        $producto = Producto::create([

            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'stock' => $request->stock

        ]);

        return $producto;
    }


    public function show(Request $request, $id){

        try {
            $producto = Producto::findOrFail($id)->toJson();
            return $producto;
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response([
                'status' => 'ERROR',
                'error' => '404 not found'
            ], 404);
        }
    }

    public function update(Request $request, $id){

        $producto = Producto::findOrFail($id);
        return $producto;


    }

    public function destroy($id){

        $producto = Producto::findOrFail($id);
        $producto->delete();

        return [ 'mensaje' => 'Se eliminó el producto.'];

 
    }




}