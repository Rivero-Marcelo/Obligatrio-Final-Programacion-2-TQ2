<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <br>INICIO DE SESION<br><br>

    <div><form  action= {{ route('login') }}    method="post">
        @csrf
        Email  <input type="text" name="email"> Contraseña 
        <input type="password" name="password">  <br><br>
        <input type="submit" value="Iniciar Sesión"></form><br>
    </div>
    <br>
    <br>

    <div><a href={{route('usuario.create')}}>Registrarse</a></div>    
    </div>
    <br><br>




    @if(session()->has('error_login'))
    <div style="color: red;">{{session()->get('error_login')}}</div>
    @endif

    
</body>
</html>