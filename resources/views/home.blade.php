<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="container-fluid" style="background-size:cover; background-image:url('https://ep01.epimg.net/elpais/imagenes/2020/07/23/album/1595502452_011337_1595503948_noticia_normal.jpg');">

   <!-- NAVEGADOR -->
    <div>
        <nav class="navbar navbar-dark bg-dark container-fluid">
            <span class="navbar-brand mb-0 h1">{{Cookie::get('cookie1')}}</span>
        </nav>
    </div>

    <div class="d-flex justify-content-center mt-5" style="position:relative; top:100px; text-shadow: 5px 5px 15px black">
        <h1 class="display-6 text-light font-weight-bold">BIENVENIDOS A BOOKING HOTELES LA FLORIDA</h1>
    </div>
       
    <div class="container d-flex justify-content-between mt-5" style="position:relative; top:250px">
            <button class="btn col-3 btn-dark p-2"><a class="text-light" style="text-decoration:none;" href="{{route('reservas.index')}}">LISTA DE RESERVAS</a></button>
            <button class="btn col-3 btn-dark p-2"><a class="text-light" style="text-decoration:none;" href="{{route('reservas.create')}}">AÑADIR RESERVA</a></button>
    </div>
    
</body>
</html>