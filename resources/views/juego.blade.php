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
        <div class="row justify-content-center">
            <div class="mt-3">
                <h2 class="text-danger display-4 font-weight-bold"  style="text-shadow: 3px 3px 15px black;">JUGADOR</h2>
            </div><br>  
        </div>
        <div class="row justify-content-center">
            <div><span class="text-light" style="font-size: 50px">{{$player->nombre}}</span></div>
        </div>


     
            
        <div class="row m-5 d-flex justify-content-center">
           
                <div class="justify-content-center m-4">
                    <button class="btn btn-danger p-3" style="border: 3px solid red; border-radius: 15px;">
                      <a class="nav-link active text-light font-weight-bold" href="{{route('games.index', $player->id)}}" style="font-size: 20px;">JUGAR PARTIDA</a>
                    </button>  
                </div>
        </div>
    
        <div class="row d-flex flex-column">
            <div class="d-flex justify-content-center">
                <h2 class="text-light display-5 font-weight-bold"  style="text-shadow: 3px 3px 15px black;">BIENVENIDOS A NUESTRO JUEGO DE DADOS</h2>
            </div><br>  
            <div class="d-flex justify-content-center">
                <h2  class="text-light display-5 font-weight-bold" style="text-shadow: 3px 3px 15px black;" >¡DISFRUTA LA PARTIDA!</h2>
            </div>
        </div>
        

        <div class="d-flex justify-content-between m-4">
            <div class="justify-content-center m-4">
                <form class="form-group" action="{{route('player.update', $player)}}" method="post">
                    @csrf
                    @method('put')
                    <button class="btn btn-light text-danger font-weight-bold" style="border: 3px solid red; border-radius: 15px;font-size: 30px;">
                            MODIFICAR JUGADOR
                    </button>  <br><br>
                    <input class="col-12" style="height:50px" type="text" name="nombre" placeholder="Nombre Jugador"><br><br>
                    <label for="" class="text-danger font-weight-bold" style="text-shadow: 3px 3px 15px black; font-size:30px; border-radius:5px;">NOMBRE DEL JUGADOR</label><br>
                    
                </form>
            </div>
            <div class="justify-content-center m-4">
                <button class="btn btn-light" style="border: 3px solid red; border-radius: 15px;">
                    <a class="nav-link active text-danger font-weight-bold" href="{{route('player.index')}}" style="font-size: 30px;">
                        RANKING
                    </a>
                </button>  
            </div>
        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>