<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body class="bg-secondary">

    <nav class="navbar navbar-dark bg-secondary ">
        <span class="bg-secondary text-light  m-auto"><p>NOMBRE DE USUARIO:<p>{{Cookie::get('cookie1')}}</span></div>
    </nav>
    <hr class="bg-light">

    <div class="container"><br>
        <h1 class="display-3 text-light">ACTUALIZAR DATOS DEL TRABAJADOR</h1><br>

        <form class="form" action="{{route('empleado.update')}}" method="post">

            @csrf
            @method('put')
            
            <label for="" class="display-6 form-label text-light">NOMBRE</label>
            <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control" placeholder="Nombre Empleados">
                @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <label for="" class="display-6 form-label text-light">NIF</label>
            <input type="text" name="nif" value="{{old('nif')}}" class="form-control" placeholder="NIF">
                @error('nif')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <label for="" class="display-6 form-label text-light">EMAIL</label>
            <input type="mail" name="mail" value="{{old('mail')}}" class="form-control" placeholder="Email"><br>
                @error('mail')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                @enderror

            <label for="" class="display-6 form-label text-light">PERFIL PROFESIONAL</label><br>
            <select class="form-select text-secondary" name="cargo" id="">
                <option value="">VETERINARIO/A</option>
                <option value="">AUXILIAR ADMINISTRATIVO/A</option>
                <option value="">EDUCADOR/A SOCIAL</option>
                <option value="">RECEPCIONISTA</option>
                <option value="">LIMPIADOR/A</option>
                <option value="">PROFESOR/A</option>
                <option value="">PELUQUERO/A</option>
                <option value="">ABOGADO/A</option>
                <option value="">ELECTRICISTA</option>
                <option value="">MECÁNICO/A</option> 
            </select><br><br>
            <div class="d-grid gap-2">
                <button class="btn btn-info text-dark" type="submit"><h2 class="display-6">ACTUALIZAR DATOS</h2></button>
            </div>
        </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>