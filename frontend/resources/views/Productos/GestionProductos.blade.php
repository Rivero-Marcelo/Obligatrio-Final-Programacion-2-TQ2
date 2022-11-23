<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESTIÓN DE PRODUCTOS</title>
</head>
<body>

    <h2>GESTION DE PRODUCTOS</h2>



    @foreach ($productos as $producto)
            <b>Nombre:</b> {{$producto['nombre']}} 
            <b>Descripcion:</b> {{$producto['descripcion']}}
            <b>Stock:</b> {{$producto['stock']}}
            <form action="" method="POST">
                @method('DELETE')
                @csrf
            </form>
            
            <br><br>
            
    @endforeach

    







    
</body>
</html>