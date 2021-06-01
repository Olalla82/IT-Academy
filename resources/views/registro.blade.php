<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class=container>
        <form class="form-signin" action="{{route('registro.usuario')}}" method="post">

        @csrf
        
            <h1 class="h3 mb-3 mt-3 font-weight-normal">Registro</h1>
            <label for="inputname" class="sr-only">Nombre de Usuario</label><br>
            <input type="text" id="inputname" class="form-control" placeholder="Nombre de Usuario" required="" autofocus="" name="name"><br>

            <label for="inputEmail" class="sr-only">Correo Electrónico</label><br>
            <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required="" autofocus="" name="email"><br>
           

            <label for="inputPassword" class="sr-only">Contraseña</label><br>
            <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="" name="password"><br>
           

            <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="rrecuerdame"> Recuérdame
            </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Regístrate</button>
         
        </form>
    </div>



      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>