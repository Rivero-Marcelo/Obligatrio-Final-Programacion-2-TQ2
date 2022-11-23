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

<form action={{route('producto.nuevo')}} method="post">
    @csrf

<b>Nombre:</b> <br><input type="text" name="nombre"><br><br>
<b>Descripcion:</b> <br><input type="text" name="descripcion"><br><br>
<b>Stock:</b> <br><input type="text" name="stock"><br><br>

<input type="submit" value="Nuevo">

</form>

@if(session('success'))
        <br>
        <div style="color: red;">{{session('success')}}</div>
@endif
        <br>

@if($errors->any())
<br>
    @foreach ($errors->all() as $error)
    <div style="color: red;">{{$error}}</div>
    @endforeach
@endif
 
<br>

    
</body>
</html>
Footer
