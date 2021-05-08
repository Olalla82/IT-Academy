<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <title>Regístro</title>
    
</head>
<body class="bg-secondary">
  
   <h1 style="text-align:center" class=" display-1 text-light">BIENVENIDOS AL PORTAL DEL EMPLEADO</h1><br>

    <div class="container">
        <form class="px-4 py-3" action="{{route('password.post')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="text-light">CORREO ELECTRÓNICO</label>
              <input type="email" class="form-control" name="email" placeholder="email@gmail.com">
                    @error('email')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                     @enderror
            </div><br>
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-default btn-lg btn-light text-dark">RESTAURAR CONTRASEÑA</button>
            </div> 
          </form>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>