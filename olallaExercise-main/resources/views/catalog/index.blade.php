<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>CREATE</title>
</head>


<body class="bg-primary">

   
    <div class="container"><br>
        <h1>CREAR REGISTROS</h1><br>
        <form action="{{route('catalog.create')}} " method="post">
            
            @csrf

            <label>CATEGORIA:</label>
            <input class="form-control" type="text" name="categoria" value="{{ old('categoria')}}" placeholder="Categoría">
                @error('categoria')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>NOMBRE LIBRERIA:</label>
            <input class="form-control" type="text" name="nombre" value="{{ old('nombre')}}" placeholder="Nombre Librería">
                @error('nombre')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>DESCRIPCIÓN:</label>
            <textarea class="form-control" type="text" name="descript"  value="{{ old('descript')}}"  placeholder="Descripción"></textarea>
                @error('descript')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
                <br>
            <button class="btn btn-info" type="submit" name="enviar">INCLUIR DATOS</button>

        </form>
    </div>
</body>
</html>