<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ranking</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background-image:url('https://www.crushpixel.com/big-static11/preview4/red-dices-718104.jpg'); background-size:contain;">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <h1 class=" display-3 font-weight-bold" style="color: white; opacity:0.9;text-shadow: 3px 3px 15px black;">RANKING</h1>
        </div>
    </div>
    <div class="container mt-5">
        <table class="table bg-light" style="opacity:0.7;">
            <thead>
            <tr>
                <th scope="col" style="font-size: 25px; font-weight:bold;">Jugador</th>
                <th scope="col" style="font-size: 25px; font-weight:bold;">Dado 1</th>
                <th scope="col" style="font-size: 25px; font-weight:bold;">Dado 2</th>
                <th scope="col" style="font-size: 25px; font-weight:bold;">Total</th>
            </tr>
            </thead>
            <tbody>
               
                @foreach($games as $game) 
                <tr>
                    <td style="font-size: 22px;">{{$game->player->nombre}}</td> 
                    <td style="font-size: 22px;">{{$game->dado1}}</td>
                    <td style="font-size: 22px;">{{$game->dado2}}</td>
                    <td style="font-size: 22px;">
                    @php
                    $dado1 = $game->dado1;
                    $dado2 = $game->dado2;
                        $resultado =$dado1+ $dado2;
                        echo $resultado;
                    @endphp
                    </td>
                    <td style="font-size: 22px;"><a href="#">Editar</a></td>
                    <td style="font-size: 22px;"><a href="">Eliminar</a></td>
                </tr>
                @endforeach
               
            </tbody>      
        </table>
        <div class="row justify-content-end mt-4">
            <button class="btn btn-light p-3" style="border: 6px solid red; border-radius: 15px;"><a class="nav-link active text-danger font-weight-bold" href="{{route('player.index')}}" style="font-size: 30px;">VOLVER</a></button>   
        </div>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>