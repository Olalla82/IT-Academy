<!DOCTYPE html>
<html lang="en">
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
          <button class="btn btn-light"><a href="{{route('reservas.create')}}" class="text-dark" style="text-decoration:none;">AÑADIR RESERVA</a></button>
      </nav>
  </div>

  <div class="container-fluid mt-2">
  <!-- TABLA -->
    <table class="table">
        <thead class="" style="font-size: 22px; text-shadow: 5px 5px 18px white;">
          <tr>
            <th scope="col">HOTELES</th>
            <th scope="col">HABITACIONES</th>
            <th scope="col">NOCHES</th>
            <th scope="col">FECHA ENTRADA</th>
            <th scope="col">FECHA SALIDA</th>
            <th scope="col">Nº PERSONAS</th>
          </tr>
        </thead><br>
        <tbody class="text-light bg-dark font-weight-bold" style="opacity:0.7;font-size:18px">
          <br>
          @foreach( $hoteles as $hotel)
              <tr>
                <th scope="row">{{$hotel->nombre_hotel}}</th>
                <td>{{$hotel->numero_habit}}</td>
                <td>{{$hotel->numero_noches}}</td>
                <td>{{$hotel->fecha_llegada}}</td>
                <td>{{$hotel->fecha_salida}}</td>
                <td>{{$hotel->numero_personas}}</td>
                <td>
                  <form action="{{route('reservas.delete', $hotel)}}" method="post">
                    @csrf
                    @method('delete')
                      <button class="btn btn-light" type="submit">Eliminar</button>
                  </form>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>