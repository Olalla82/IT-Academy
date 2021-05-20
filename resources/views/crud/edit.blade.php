<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="container-fluid" style="background-size:cover; background-image:url('https://www.blauverdhotels.com//media/hoteles/hostal-estrella/00.hostal-estrella-1400px.jpg');">

  <!-- NAVEGADOR -->
  <nav class="container-fluid navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1">{{Cookie::get('cookie1')}}</span>
    <button class="btn btn-light"><a href="{{route('reservas.index')}}" class="text-dark" style="text-decoration:none;">LISTA DE RESERVAS</a></button>
  </nav>
  

  <div class="container">
  <!-- FORMULARIO -->
    <form action="{{route('reservas.update', $hotel)}}" method="post">

  @csrf
  @method('put')
        <fieldset>
          <legend><h1 class=" text-light display-3 font-weight-bold" style="text-shadow: 3px 3px 15px black;">MODIFICAR RESERVA</h1></legend>
          
          <div class="mb-3 col-12">
            <label class="form-label text-light display-6" style="text-shadow: 5px 5px 15px black;">SELECCIONA EL HOTEL</label>
            <select class="form-select" name="nombre_hotel" value="{{old('nombre_hotel', $hotel->nombre_hotel)}}">
              
              <option>Hotel Magestic</option>
              <option>Hotel Playa Luna</option>
              <option>Hotel Palace</option>
              <option>Hotel Club Habbana</option>
              <option>Hotel Prestige Deluxe</option>
              <option>Hotel Mar i Cel</option>
              <option>Hotel Los hawaianos</option>
              <option>Hotel Las 1000 Maravillas</option>
              <option>Hotel Hilton</option>
            </select>

          </div><br>

          <div class="mb-3 col-md-1">
            <label class="form-label text-light display-6" style="text-shadow: 5px 5px 15px black;">HABITACIONES</label>
              <select class="form-select" name="numero_habit"  value="{{old('numero_habit', $hotel->numero_habit)}}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
          </div><br>

          <div class="col-md-1">

              <label class="form-label text-light display-6" style="text-shadow: 5px 5px 15px black;">NOCHES</label>
                <select class="form-select" name="numero_noches"  value="{{old('numero_noches', $hotel->numero_noches)}}">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
                  <option>11</option>
                  <option>12</option>
                  <option>13</option>
                  <option>14</option>
                  <option>15</option>
                  <option>16</option>
                  <option>17</option>
                  <option>18</option>
                  <option>19</option>
                  <option>20</option>
                  <option>20</option>
                  <option>21</option>
                  <option>22</option>
                  <option>23</option>
                  <option>24</option>
                  <option>25</option>
                  <option>26</option>
                  <option>27</option>
                  <option>28</option>
                  <option>29</option>
                  <option>30</option>
                </select>  
          </div><br>

          <div class="d-flex justify-content-between">
              <div>
                  <label for="" class="text-light display-6" style="text-shadow: 5px 5px 15px black;">FECHA ENTRADA</label><br><br>
                  <input type="date" name="fecha_llegada" value="{{old('fecha_llegada', $hotel->fecha_llegada)}}">
                  @error('fecha_llegada')
                  <br>
                    <small class="text-light">*{{$message}}</small>
                  <br>
                  @enderror

              </div>
              <br><br>
              <div>
                  <label for="" class="text-light display-6" style="text-shadow: 5px 5px 15px black;">FECHA SALIDA</label><br><br>
                  <input type="date" name="fecha_salida" value="{{old('fecha_salida', $hotel->fecha_salida)}}">
                  @error('fecha_salida')
                    <br>
                      <small class="text-light">*{{$message}}</small>
                    <br>
                  @enderror
              
              </div>
          </div><br>
        
          <div class="col-md-1">
            <label class="form-label text-light display-6" style="text-shadow: 5px 5px 15px black;">PERSONAS</label>
              <select class="form-select" name="numero_personas" value="{{old('numero_personas', $hotel->numero_personas)}}">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
              </select>
          </div><br>

          <button type="submit" class="btn btn-success col-12">RESERVA</button>
        
        </fieldset>
      </form>
    </div>
</body>
</html>