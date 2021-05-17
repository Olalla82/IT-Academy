<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
</head>
<body  class="container-fluid m-5" style="font-weight:bold;background-size:cover; background-image:url('https://www.adslzone.net/app/uploads-adslzone.net/2017/08/donde-ver-futbol-temporada-2017-2018.jpg')">
   <!--NAVBAR--> 
    <div class="container-fluid">  
      <nav class="navbar navbar-light bg-danger" style="box-shadow: white 4px 5px 18px;">
          <button class="btn btn-light text-danger"><a class="text-danger" href="{{route('crud.create')}}">Crear Registro</a></button>
          <a class="navbar-brand text-light" href="#">{{Cookie::get('cookie1')}}</a>
          <button class="btn btn-light text-danger"><a class="text-danger" href="{{route('crud.update')}}">Actualizar Registro</a></button>
      </nav> 
    </div>

    <div class="d-flex justify-content-center">    
        <h1 class="text-danger display-2 font-weight-bold" style="text-shadow: white 4px 5px 14px;">CLASIFICACIONES LIGA</h1>
    </div><br>
    
    <div class="row d-flex justify-content-around" >
        <div class="text-light bg-danger" style="opacity:0.8;">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">EQUIPOS</th>
                    <th scope="col">Estadio</th>
                    <th scope="col">Calificacion</th>
                    <th scope="col">Goles</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
             @foreach($equipos as $equipo)
                  <tr>
                      <th scope="row">{{$equipo->nombre}}</th>
                      <td>{{$equipo->estadio}}</td>
                      <td>{{$equipo->calificacion}}</td>
                      <td>{{$equipo->goles}}</td>
                      <td>
                        <form action="{{route('delete.post')}}" method="post">
                        @csrf
                        @method('delete')
                          <button class="btn btn_light text-danger" type="submit">Eliminar</button>
                        </form>
                      </td>
                  </tr>
             @endforeach
                </tbody>
              </table>
        </div>
        <div class="text-light bg-danger" style="opacity:0.8;">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">PARTIDOS</th>
                    <th scope="col">Equipo Local</th>
                    <th scope="col">Equipo Visitante</th>
                    <th scope="col">Fecha</th>
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
               @foreach($partidos as $partido)   
                  <tr>
                    <th scope="row">{{$partido->estadio}}</th>
                    <td>{{$partido->equipo_local}}</td>
                    <td>{{$partido->equipo_visitante}}</td>
                    <td>{{$partido->fecha}}</td>
                    <td> 
                      <form action="{{route('delete.post')}}" method="post">
                      @csrf
                      @method('delete')
                        <button class="btn btn_light text-danger" type="submit">Eliminar</button>
                      </form>
                    </td>
                  </tr>
              @endforeach  
                </tbody>
              </table>
        </div>  
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



</body>
</html>