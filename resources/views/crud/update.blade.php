<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</head>
<body style="background-size:cover; background-image:url('https://img.blogs.es/anexom/wp-content/uploads/2018/08/mitos-futbol-ansiedad-1024x683.jpg')">

    <!--NAVBAR--> 
    <div class="container-fluid m-4">  
        <nav class="navbar navbar-light bg-danger" style="box-shadow: white 5px 5px 18px;">
            <a class="navbar-brand text-light" href="#">{{Cookie::get('cookie1')}}</a>
        </nav>
        
    </div>

    <div class="container m-5">
        
        <form action="{{route('crud.restore')}}" method="post">

        @csrf
        @method('put')

            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-light font-weight-bold" style="font-size:;">EQUIPO LOCAL</label>
                <div class="col-sm-10">
                    <input type="text" name="equipo_local" class="form-control col-3" placeholder="Equipo Local">
                    <span class="text-light font-weight-bold" style="font-size:28px;">{{old('equipo_local')}}</span>
                    @error('equipo_local')
                        <br>
                            <small class="text-light">*{{$message}}</small>
                        <br>
                    @enderror

                </div>
                <br>
                <label class="col-sm-2 col-form-label text-light font-weight-bold">GOLES</label>
                <div class="col-sm-10">
                    <input type=" number" name="goles_local" class="form-control col-3" placeholder="Goles">
                    <span class="text-light font-weight-bold" style="font-size:28px;">{{old('goles_local')}}</span>
                    @error('goles_local')
                        <br>
                            <small class="text-light">*{{$message}}</small>
                        <br>
                    @enderror<br>

                </div>
                
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0 text-light font-weight-bold" style="font-size:;">RESULTADO:</legend>
                    
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                        <label class="form-check-label text-light">
                            Ganador
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                        <label class="form-check-label text-light">
                            Empate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                        <label class="form-check-label text-light">
                            Perdedor
                        </label>
                    </div>
                    
                </div>  
            </fieldset>

            <br><br>
            
            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-light font-weight-bold" style="font-size:;">EQUIPO VISITANTE</label>
                <div class="col-sm-10">
                    <input type="text" name="equipo_visitante" class="form-control col-3" placeholder="Equipo Visitante">
                    <span  class="text-light font-weight-bold" style="font-size:28px;">{{old('equipo_visitante')}}</span>
                    @error('equipo_visitante')
                        <br>
                            <small  class="text-light">*{{$message}}</small>
                        <br>
                    @enderror<br>

                </div>
                

                <label class="col-sm-2 col-form-label text-light font-weight-bold">GOLES</label>
                <div class="col-sm-10">
                    <input type=" number" name="goles_visitante" class="form-control col-3" placeholder="Goles">
                    <span  class="text-light font-weight-bold" style="font-size:28px;">{{old('goles_visitante')}}</span>
                    @error('goles_visitante')
                        <br>
                            <small  class="text-light">*{{$message}}</small>
                        <br>
                    @enderror<br>

                </div>
               
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0 text-light font-weight-bold" style="font-size:;">RESULTADO:</legend>
                    
                    <div class="col-sm-10">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                        <label class="form-check-label text-light">
                            Ganador
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                        <label class="form-check-label text-light">
                            Empate
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" value="option3">
                        <label class="form-check-label text-light">
                            Perdedor
                        </label>
                    </div>

                </div>  
            </fieldset>
            
            <br><br>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label text-light font-weight-bold" style="font-size:;">ESTADIO DE JUEGO</label>
                <div class="col-sm-10">
                    <input type="text" name="estadio" class="form-control col-3"  placeholder="Estadio">
                    <span  class="text-light font-weight-bold" style="font-size:28px;">{{old('estadio')}}</span>
                    @error('estadio')
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
        <div>
            <button type="" class="btn btn-danger"><a href="{{route('crud.index')}}"class="text-light" style="text-decoration:none;">CLASIFICACIONES LIGA</a></button>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>