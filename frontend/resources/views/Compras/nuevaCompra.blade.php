<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COMPRAS</title>
</head>
<body>

    <h2>SECCION COMPRAS</h2><br><br>

    <h3>LISTADO DE PRODUCTOS</h3>



    @foreach ($productos as $producto)
            <b>Nombre:</b> {{$producto['nombre']}} 
            <b>Descripcion:</b> {{$producto['descripcion']}}
            <b>Stock:</b> {{$producto['stock']}}
            <a href={{route('compra.confirmar', ['id' => $producto['id']])}}>COMPRAR</a>
            <br><br>
            
    @endforeach