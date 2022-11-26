<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE PRODUCTOS</title>
</head>
<body>

    <h2>LISTADO DE PRODUCTOS</h2>



    @foreach ($productos as $producto)
            <b>Nombre:</b> {{$producto['nombre']}} 
            <b>Descripcion:</b> {{$producto['descripcion']}}
            <b>Stock:</b> {{$producto['stock']}}
            <a href={{route('producto.destroy', ['id' => $producto['id']])}}>Eliminar</a>
            <br><br>
            
    @endforeach

    







    
</body>
</html>