<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</head>
<body style="background-size:cover; background-image:url('https://3er1viui9wo30pkxh1v2nh4w-wpengine.netdna-ssl.com/wp-content/uploads/prod/sites/61/2019/04/LaLiga.jpg')">

   <!--NAVBAR--> 
   <div class="container-fluid m-4">  
        <nav class="navbar navbar-light bg-danger" style="box-shadow: white 5px 8px 25px;">
            <a class="navbar-brand text-light" href="#">{{Cookie::get('cookie1')}}</a>
        </nav>
    </div>

    <div class="container-fluid m-5">
        <div>
            <form action="{{route('crud.store')}}" method="post">

            @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-light font-weight-bold">ESTADIO DE JUEGO</label>
                    <div class="col-sm-10">
                    <input type="text" name="estadio" value="" class="form-control col-3" placeholder="Estadio"><br>
                    <div><span class="text-danger font-weight-bold" style="font-size:28px">{{old('estadio')}}</span></div>
                    @error('estadio')
                    <br>
                        <small class="text-light">*{{$message}}</small>
                    <br>
                    @enderror

                </div>
                    
                </div> 
                <br><br>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-light font-weight-bold">EQUIPO LOCAL</label>
                    <div class="col-sm-10">
                        <input type="text" name="equipo_local" value="" class="form-control col-3"  placeholder="Equipo Local"><br>
                        <div><span class="text-danger font-weight-bold" style="font-size:28px">{{old('equipo_local')}}</span></div>
                        @error('equipo_local')
                            <br>
                                <small  class="text-light">*{{$message}}</small>
                            <br>
                        @enderror

                    </div>
                    
                </div>
                <br><br>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label text-light font-weight-bold">EQUIPO VISITANTE</label>
                    <div class="col-sm-10">
                        <input type="text" name="equipo_visitante" value="" class="form-control col-3" placeholder="Equipo Visitante"><br>
                        <div><span class="text-danger font-weight-bold" style="font-size:28px">{{old('equipo_visitante')}}</span></div>
                        @error('equipo_visitante')
                        <br>
                            <small  class="text-light">*{{$message}}</small>
                        <br>
                        @enderror

                    </div>
                    
                </div>
                <br><br>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label text-light font-weight-bold">FECHA DEL ENCUENTRO</label>
                    <div class="col-sm-10">
                        <input type="date" name="fecha" value="" class="form-control col-3" placeholder="Fecha del Encuentro"><br>
                        <div><span class="text-danger font-weight-bold" style="font-size:28px">{{old('fecha')}}</span></div>
                        @error('fecha')
                        <br>
                            <small  class="text-light">*{{$message}}</small>
                        <br>
                        @enderror

                    </div>
                    
                </div>
                <br><br>

                <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-danger">AÑADIR PARTIDO</button>
                </div>
                </div>
            </form>
        </div>
        <div>
            <button type="" class="btn btn-danger"><a href="{{route('crud.index')}}"class="text-light" style="text-decoration:none;">CLASIFICACIONES LIGA</a></button>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>