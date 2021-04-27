<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>Registro de Usuario</title>
</head>
<body class="bg-info">

    <div class="container"><br>
        <form class="" action="{{route('sesion.password')}}" method="post">
            @csrf
            <label for=""><h1 class="text-primary">RECUPERAR CONTRASEÑA</h1></label><br>
            <input class="form-control" type="mail" name="mail" placeholder="Introduce tu Email">
                @error('mail')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <br>
            <button class="btn btn-primary" type="submit" name="enviar">Recuperar</button><br><br>
            
        </form>
    </div>
</body>
</html>