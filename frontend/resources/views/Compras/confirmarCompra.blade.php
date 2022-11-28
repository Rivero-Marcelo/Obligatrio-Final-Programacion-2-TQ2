<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>CONFIRMAR COMPRA</h2>

    <br><br>

    CLIENTE: {{session()->get('nombreUsuario')}} <br><br>
    ------------------------------------------------------------------
    <br><br>
    PRODUCTO: {{$producto['nombre']}}


    <div>
        <form action={{route('compra.store')}} method="post">
            @csrf

                    <input type="hidden" name="idProducto"  value={{$producto['id']}}>
            <br>
        Cantidad:   <input type="text" name="cantidad"  value=1><br><br><br><br>

                             <input type="submit" value="Confirmar Compra"><br>
        </form>
    </div>
    <br>

    @if(session('success'))
    -------------------------------------------------------
    <div style="color: red;">{{session('success')}}</div>
    ------------------------------------------------------
    @endif

    <br><br><br>

    <a href={{route('compra.create')}}>Volver a Compras</a>
    
</body>
</html>