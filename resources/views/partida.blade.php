<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUEGO</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body style="background-image:url('https://images-na.ssl-images-amazon.com/images/I/91BZBH6qkcL._AC_SL1500_.jpg'); background-size: cover;">
        
    <div class="container">
       
        <div class="row mt-4 d-flex justify-content-around">
            <div>
                <div><h2 class="text-danger display-4 font-weight-bold" style="text-shadow: 3px 3px 15px black;">DADO 1</h2></div><br>
                <div><span class="text-light" style="font-size: 50px">
                     {{$game->dado1}}
                </span></div>
            </div>
            <div>
                <div><h2 class="text-danger display-4 font-weight-bold" style="text-shadow: 3px 3px 15px black;">DADO 2</h2></div><br>
                <div>
                    <span class="text-light" style="font-size: 50px">
                        {{$game->dado2}}
                    </span>
                </div>
            </div>
            
        </div>
        <div class="row  d-flex justify-content-center align-items-center">
            <div class="d-flex flex-column">
                <div class=" d-flex justify-content-center align-items-center">
                    <h2 class="text-danger display-4 font-weight-bold justify-content-center" style="text-shadow: 3px 3px 15px black;">RESULTADO</h2>
                </div>
                <br>
                <div class="d-flex justify-content-center align-items-center">
                    <span class="text-light" style="font-size: 30px">
                    
                        @if ($resultado == true)
                                <h1 class="d-flex justify-content-center">¡ENHORABUENA!</h1> 
                                <h1 class="d-flex justify-content-center">TU RESULTADO ES 7</h1>    
                                <h1 class="d-flex justify-content-center">HAS GANADO LA PARTIDA</h1>
                        @else 
                                <h1 class="d-flex justify-content-center">¡LO SENTIMOS!</h1>
                                <h1 class="d-flex justify-content-center">HAS SACADO EL {{$sumatoria}}</h1>
                                <h1 class="d-flex justify-content-center">SIGUE JUGANDO</h1>
                        @endif
                    </span>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="justify-content-center m-4">
                <button class="btn btn-light p-3" style="border: 6px solid red; border-radius: 15px;">
                    <a class="nav-link active text-danger font-weight-bold" href="{{route('games.index', $player->id)}}" style="font-size: 30px;">VUELVE A TIRAR</a>
                </button>  
            </div>
            <div class="justify-content-center m-4">
                <button class="btn btn-light p-3" style="border: 6px solid red; border-radius: 15px;">
                    <a class="nav-link active text-danger font-weight-bold" href="{{route('player.index')}}" style="font-size: 30px;">RANKING</a>
                </button>  
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>