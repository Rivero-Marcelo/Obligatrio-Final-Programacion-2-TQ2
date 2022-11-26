<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Producto</title>
</head>
<body>

<h1>NUEVO PRODUCTO</h1>
<br>

<form action={{route('producto.store')}} method="post">
    @csrf

<b>Nombre:</b> <br><input type="text" name="nombre"><br><br>
<b>Descripcion:</b> <br><input type="text" name="descripcion"><br><br>
<b>Stock:</b> <br><input type="text" name="stock"><br><br>

<input type="submit" value="Nuevo">

</form>

 
<br>

    
</body>
</html>

