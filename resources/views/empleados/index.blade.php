<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Index</title>

</head>
<body class="bg-secondary">

    <nav class="navbar navbar-dark bg-secondary ">
        <span class="bg-secondary text-light  m-auto"><p>NOMBRE DE USUARIO:<p>{{Cookie::get('cookie1')}}</span></div>
    </nav>
    <hr class="bg-light">

    <div class="container">
        <h1 style="text-align:center" class=" display-1 text-light">LISTA DE EMPLEADOS</h1><br>
        <div class="d-flex justify-content-center">
            <button class="btn btn-info justify-content-center p-3"><a href="{{route('empleado.create')}}" style="color: black; text-decoration:none;">AÑADIR EMPLEADOS A LA LISTA</a></button>
        </div>
    </div>
        
    <div class="container"> 
        <table class="table table-striped bg-secondary">
            <thead>
            <tr>
                <th scope="col" class="text-light display-6">Nombre Empleados</th>
                <th scope="col" class="text-light display-6">NIF</th>
                <th scope="col" class="text-light display-6">Email</th>
                <th scope="col" class="text-light display-6">Cargo en la Empresa</th>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-light">Maria Fernández</th>
                <td class="text-light">485726395-A</td>
                <td class="text-light">mfer@gmail.com</td>
                <td class="text-light">Veterinario</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            <tr>
                <th scope="row" class="text-light">José Martinéz</th>
                <td class="text-light">35874213-F</td>
                <td class="text-light">josems@yahoo.es</td>
                <td class="text-light">Auxuliar veterinario</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            <tr>
                <th scope="row" class="text-light">Pilar Nieto</th>
                <td class="text-light">56326589-V</td>
                <td class="text-light">pnieto@hotmail.com</td>
                <td class="text-light">Recepcionista</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            <tr>
                <th scope="row" class="text-light">Carmen Guerra</th>
                <td class="text-light">53216589-V</td>
                <td class="text-light">carmeng@gmail.com</td>
                <td class="text-light">Educadora Social</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            <tr>
                <th scope="row" class="text-light">Aurora Sala</th>
                <td class="text-light">23211234-V</td>
                <td class="text-light">aurorag@gmail.com</td>
                <td class="text-light">Abogada</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>
            <tr>
                <th scope="row" class="text-light">Vanessa Sanchez</th>
                <td class="text-light">54131234-V</td>
                <td class="text-light">vaneag@gmail.com</td>
                <td class="text-light">Diseñadora</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
            </tr>

            @foreach($empleados as $empleado)
            <tr>
                <th scope="row" class="text-light">{{$empleado->nombre}}</th>
                <td class="text-light">{{$empleado->nif}}</td>
                <td class="text-light">{{$empleado->email}}</td>
                <td class="text-light">{{$empleado->profesion}}</td>
                <th scope="col" class="text-light display-6"><a class="text-light" href="{{route('empleado.delete')}}">Eliminar<a></th>
          
            </tr>
        @endforeach 
            </tbody>
        </table>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>