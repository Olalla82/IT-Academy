<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <title>CRUD</title>
</head>
<body class="bg-info">
    <div class="container"><br><br>
        <form action="{{route('crud.create')}} " method="get">
            
            @csrf

            <label>Categoría:</label>
            <input class="form-control" type="text" name="categoria" placeholder="Categoría">
                @error('categoria')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>Nombre Librería:</label>
            <input class="form-control" type="text" name="nombre" placeholder="Nombre Librería">
                @error('nombre')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>Descripción:</label>
            <textarea class="form-control" type="text" name="descript" placeholder="Descripción"></textarea>
                @error('descript')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
                <br>
            <button class="btn btn-primary" type="submit" name="enviar">Incluir datos</button>

        </form>
    </div>
</body>
</html>