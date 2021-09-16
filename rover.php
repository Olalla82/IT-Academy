<?php

//INICIALIZAR VARIABLES
$width = $height = $x = $y = $orientacion = $ordenes = $resultado = '';

//---------AVANZAR-----------
if (isset($_GET['enviarA'])) {

    $width = $_GET['width'];
    $height = $_GET['height'];
    $x = $_GET['x'];
    $y = $_GET['y'];
    $orientacion = $_GET['orientacion'];

    //Transformar Mayúsculas
    $orientacion = strtoupper($orientacion);

    if ($orientacion == 'N') {
        $y = ++$y;
    } else if ($orientacion == 'E') {
        $x = ++$x;
    } else if ($orientacion == 'S') {
        $y = --$y;
    } else if ($orientacion == 'W') {
        $x = --$x;
    }
}

//---------IZQUIERDA-----------
if (isset($_GET['enviarL'])) {

    $width = $_GET['width'];
    $height = $_GET['height'];
    $x = $_GET['x'];
    $y = $_GET['y'];
    $orientacion = $_GET['orientacion'];

    //Transformar Mayúsculas
    $orientacion = strtoupper($orientacion);

    if ($orientacion == 'N') {
        echo $orientacion = 'W';
    } else if ($orientacion == 'E') {
        echo $orientacion = 'N';
    } else if ($orientacion == 'S') {
        echo $orientacion = 'E';
    } else if ($orientacion == 'W') {
        echo $orientacion = 'S';
    }
}

//---------DERECHA-----------
if (isset($_GET['enviarR'])) {

    $width = $_GET['width'];
    $height = $_GET['height'];
    $x = $_GET['x'];
    $y = $_GET['y'];
    $orientacion = $_GET['orientacion'];

    //Transformar Mayúsculas
    $orientacion = strtoupper($orientacion);

    if ($orientacion == 'N') {
        echo $orientacion = 'E';
    } else if ($orientacion == 'E') {
        echo $orientacion = 'S';
    } else if ($orientacion == 'S') {
        echo $orientacion = 'W';
    } else if ($orientacion == 'W') {
        echo $orientacion = 'N';
    }
}

//DENTRO O FUERA DEL CUADRO
if ($width < $x || $height < $y) {
    echo $resultado = 'NO';
} else {
    echo $resultado = 'SÍ';
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rover en Marte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body class="bg-warning">
    <div class="container">
        <div>
            <h1 class="text-center"><strong>ROVER EN MARTE</strong></h1>
        </div>
        <div class="d-flex justify-content-around">
            <div>
                <form method="get" action="#">
                    <div class="form-group">
                        <label for=""><strong>ALTITUD DEL CUADRADO</strong></label><br>
                        <input class="form-control col-2" type="number" name="height" value="<?php echo $height; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>ANCHURA DEL CUADRADO</strong></label><br>
                        <input class="form-control col-2" type="number" name="width" value="<?php echo $width; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Coordenada X:</strong></label><br>
                        <input class="form-control col-2" type="number" name="x" value="<?php echo $x; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Coordenada Y:</strong></label><br>
                        <input class="form-control col-2" type="number" name="y" value="<?php echo $y; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>ORIENTACIÓN:</strong> (N = norte, S = sur, E = este, W= oeste )</label><br>
                        <input class="form-control col-3" type="text" name="orientacion" value="<?php echo $orientacion; ?>">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>ORDENES:</strong> (L= izquierda, R= derecha, A= avanzar)</label><br>
                    </div>
                    <div>
                        <input class="btn btn-danger" type="submit" name="enviarL" value="L">
                        <input class="btn btn-danger" type="submit" name="enviarA" value="A">
                        <input class="btn btn-danger" type="submit" name="enviarR" value="R">
                    </div>
                </form>
            </div>
            <div class="d-block">
                <div class="m-5">
                    <span><strong>¿ESTÁ DENTRO DEL CUADRADO? </strong><?php echo $resultado; ?> </span><br><br>
                    <span><strong>Coordenada X:</strong> <?php echo $x; ?></span><br><br>
                    <span><strong>Coordenda Y:</strong> <?php echo $y; ?></span><br><br>
                    <span><strong>Orientación:</strong> <?php echo $orientacion; ?></span><br><br>
                </div>
                <div>
                    <img src="img/curiosity.jpg" alt="Curiosity" style="width: 350px; border-radius: 100px;">
                </div>
            </div>
        </div>
    </div>
</body>

</html>