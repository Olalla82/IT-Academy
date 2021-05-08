<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <title>Home</title>
    
</head>
<body class="bg-secondary">
  
   <h1 style="text-align:center" class=" display-1 text-light">REGISTRO DE USUARIO</h1>

    <div class="container">
        <form class="px-4 py-3" action="{{route('sesion.registro.store')}}" method="post">
            @csrf

            <div class="form-group">
              <label for="" class="text-light">NOMBRE DE USUARIO</label><br>
              <input type="text" class="form-control" name="nombre" placeholder="Nombre de Usuario" value="{{old('nombre')}}">

          @error('nombre')

              <br>
              <small>*{{$message}}</small>
              <br>

          @enderror
            </div><br>

            <div class="form-group">
                <label for="" class="text-light">CORREO ELECTRÓNICO</label><br>
                <input type="email" class="form-control" name="email" placeholder="email@gmail.com" value="{{old('email')}}">

            @error('email')

                <br>
                <small>*{{$message}}</small>
                <br>

            @enderror
            </div><br>

            <div class="form-group">
              <label for="" class="text-light">CONTRASEÑA</label><br>
              <input type="password" class="form-control" name="password"  value="{{old('password')}}" placeholder="Contraseña">

              @error('password')

              <br>
              <small>*{{$message}}</small>
              <br>

              @enderror

            </div><br>

            <div class="form-check">

              <input type="checkbox" name="check" value="{{old('check')}}" class="form-check-input">
              <label class="form-check-label text-light" for="">
                Recordarme
              </label>
            </div>
            <br>       
                
            <button type="" class="btn btn-default btn-lg btn-light text-dark">REGÍSTRATE</button>
            
              
          </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>