<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="container-fluid" style="background-size:cover; background-image:url('https://ep01.epimg.net/elpais/imagenes/2020/07/23/album/1595502452_011337_1595503948_noticia_normal.jpg');">

   <!-- NAVEGADOR -->
   <div>
      <nav class="navbar navbar-dark bg-dark container-fluid">
          <span class="navbar-brand mb-0 h1">{{Cookie::get('cookie1')}}</span>
          <button class="btn btn-light"><a class="text-dark" style="text-decoration:none;" href="{{route('reservas.index')}}">VOLVER A LA LISTA DE RESERVAS</a></button>
      </nav>
  </div>
    
  <div class="d-flex justify-content-center mt-5"><h1 class="text-light" style="text-shadow: 5px 5px 15px black">TU RESREVA SE HA PROCESADO CORRECTAMENTE</h1></div>

    <div></div>

  <div class="container-fluid mt-2">
  <!-- TABLA -->
    <table class="table">
        <thead class="display-6">
          <tr>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Hotel</th>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Habitaciones</th>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Noches</th>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Fecha Entrada</th>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Fecha Salida</th>
            <th scope="col" style="text-shadow: 5px 5px 18px white">Nº Personas</th>
          </tr>
        </thead><br>
        <tbody class="text-light bg-dark font-weight-bold" style="opacity:0.7;font-size:26px">              
            <tr>  
              <td>{{$hotel->nombre_hotel}}</td>
              <td>{{$hotel->numero_habit}}</td>
              <td>{{$hotel->numero_noches}}</td>
              <td>{{$hotel->fecha_llegada}}</td>
              <td>{{$hotel->fecha_salida}}</td>
              <td>{{$hotel->numero_personas}}</td>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-center mt-5">   
        <button class="btn btn-dark  p-3"><a href="{{route('reservas.edit', $hotel)}}" class="text-light" style="text-decoration:none;">MODIFICAR RESERVA</a></button>    
    </div>
</body>
</html>