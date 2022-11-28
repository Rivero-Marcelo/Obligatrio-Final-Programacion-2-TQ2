<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>

    @if (session('usuario'))
        
    @endif

    <div><a href={{route('logout')}}>Cerrar Sesión</a><h3>Usuario: {{session()->get('nombreUsuario')}}</h3></div>
    </div>

    
    <h2 align="center">HOME</h2><br><br>


    <div><a href={{route('producto.create')}}>Nuevo Producto</a><br><br>
    <a href={{route('producto.showAll')}}>Ver Productos</a></div><br>
    </div>
    <br>
    <div><a href={{route('compra.create')}}>Compras</a><br>
    </div><br>
    <br><br>
    <div><a href={{route('compra.showAll')}}>Ver Compras</a><br>
    </div><br>

    </div>

 

    
</body>
</html>