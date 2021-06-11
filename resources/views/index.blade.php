<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body style="background-image:url('https://www.crushpixel.com/big-static11/preview4/red-dices-718104.jpg'); background-size:cover;">

    <div calss="container-fluid bg-success ">
        <nav style=""class="p-5">
            <ul class="nav justify-content-around">
                <li class="nav-items">
                    <button class="btn btn-light p-3" style="border: 6px solid red; border-radius: 25px;">
                        <a class="nav-link active text-danger font-weight-bold" href="{{route('player.create')}}" style="font-size: 30px;">PARTIDA</a>
                    </button>
                </li>
                <li class="nav-items">
                    <button class="btn btn-light p-3" style="border: 6px solid red; border-radius: 15px;">
                        <a class="nav-link active text-danger font-weight-bold" href="{{route('games.show')}}" style="font-size: 30px;">RANKING</a>
                    </button>
                </li>
            </ul>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="mt-5 pt-5">
                <h1 class="text-light display-1 font-weight-bold" style="text-shadow: 3px 3px 18px red">JUEGOS DE DADOS</h1>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>