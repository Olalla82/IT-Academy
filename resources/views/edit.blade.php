<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body style="background-image:url('https://s1.eestatic.com/2016/07/09/elandroidelibre/el_androide_libre_138749861_180142680_1024x576.jpg'); background-size: cover;">
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            
            <form class="" action="{{--{{route('player.update'), $player}}--}}" method="post">
        @csrf
        @method('put')
                <div class="row justify-content-center">
                    <label for="" class="display-4 font-weight-bold text-light" style="text-shadow: 5px 5px 18px black;">NOMBRE DEL JUGADOR</label>
                </div>
                <br><br>
                <div class="row justify-content-center m-5">   
                    <input class="col-8 p-3" style="border-radius: 10px;"type="text" name="nombre" value="{{old('nombre', $player->nombre)}}">
                </div>
                <br><br>
                <div class="row justify-content-center m-5">
                    <button type="submit" class="btn btn-light p-3 font-weight-bold"style="color: red; font-size: 30px; border: 6px solid red; border-radius: 15px;">
                        MODIFICAR NOMBRE DEL JUGADOR
                    </button>
                </div>
            </form>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>