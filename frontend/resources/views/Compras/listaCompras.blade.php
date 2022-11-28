<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LISTADO DE VENTAS</title>
</head>
<body>

    <h2>LISTADO DE VENTAS</h2>



    @foreach ($compras as $compra)
            <b>Cliente:</b> {{$compra['idCliente']}} 
            <b>Producto:</b> {{$compra['idProducto']}}
            
            
            <br><br>
            
    @endforeach


   
    <br><br><br>
    <a href={{route('home')}}>Volver al inicio</a>





    
</body>
</html>