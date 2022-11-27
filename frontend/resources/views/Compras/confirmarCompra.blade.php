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


    <div>

        <form action={{route('compra.store')}} method="post">
            @csrf
            <input type="text" name="idProducto" disabled="true" value={{$datos['id']}}>
            <br><br>
            <input type="submit" value="Confirmar Compra"></form><br>

        </form>
    </div>
    
</body>
</html>