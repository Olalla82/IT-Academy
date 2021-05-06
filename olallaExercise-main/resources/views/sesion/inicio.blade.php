<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Inicio Sesión</title>
</head>
<body class="bg-primary">

    <div class="container">
        <h1 class="text-light">INICIO DE SESIÓN</h1>
            
        <form class="" action="{{route('sesion.inicio')}}" method="post"><br>
            @csrf
            <label for="">NOMBRE DE USUARIO:</label><br>
            <input class="form-control" type="text" name="nombre" value="{{old('nombre')}}" placeholder="Nombre de usuario">
                @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>                
                @enderror

            <br>
            <label for="">EMAIL:</label><br>
            <input class="form-control" type="mail" name="mail" value="{{old('mail')}}" placeholder="Email">
                @error('mail')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <br>
            <label for="">CONTRASEÑA:</label><br>
            <input class="form-control" type="password" name="pssw" value="{{old('pssw')}}" placeholder="Contraseña">
                @error('pssw')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror    

            <br><br>
            <button class="btn btn-info" type="submit" name="enviar">Inicio Sesión</button>
        </form>
    </div>
</body>
</html>