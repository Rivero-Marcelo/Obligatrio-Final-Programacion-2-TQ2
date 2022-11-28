<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistroVenta;
use Illuminate\Support\Facades\Http;


class RegistroVentaController extends Controller
{


    public function index(){

        $ventas = RegistroVenta::all();
        return $ventas;
}

    public function store(Request $request)
    {

        $venta = RegistroVenta::create([

            'idCliente' => $request->idCliente,
            'idProducto' => $request->idProducto,
            
        ]);

        return [

            'status'=> "OK",
            'registro' => $venta

        ];


    }

    

}
