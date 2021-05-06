<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body class="bg-primary">
   

    <div class="container"><br><br>

        <h1>Modificar Llibre</h1>

        <form action="{{route('catalog.update')}} " method="post">
            
            @csrf
            @method('put')

            <label>Categoría:</label>
            <input class="form-control" type="text" name="categoria" value="{{ old('categoria')}}" placeholder="Categoría">
                @error('categoria')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>Nombre Librería:</label>
            <input class="form-control" type="text" name="nombre" value="{{ old('nombre')}}" placeholder="Nombre Librería">
                @error('nombre')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
            <br>
            <label>Descripción:</label>
            <textarea class="form-control" type="text" name="descript"  value="{{ old('descript')}}" placeholder="Descripción"></textarea>
                @error('descript')
                    <small>*{{$message}}</small>
                    <br>
                    <br>
                @enderror
                <br>
            <button class="btn btn-info" type="submit" name="enviar">Incluir datos</button>

        </form>
    </div>
</body>
</html>