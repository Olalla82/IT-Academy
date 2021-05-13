<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body class="bg-info">
    <table class="table container">
        <thead>
            <th>ID</th>
            <th>EQUIPO</th>
            <th>ESTADIO DE JUEGO</th>
        </thead>
        <tbody>
            @foreach ($editars as $editar)
                <tr>
                    <td>{{ $editar->id }}</td>
                    <td>{{ $editar->title }}</td>
                    <td>
                        @can('editar')
                            <a href="{{ route('editar.index', $editar->id) }}">Eliminar Registro</a>
                        @else
                            Usted no puede modificar la lista de clasificaciones
                        @endcan
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>