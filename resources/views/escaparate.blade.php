<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body style="background-image:url('https://a.travel-assets.com/findyours-php/viewfinder/images/res40/182000/182173.jpg'); background-size:cover;">
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">
           <div> 
                <a class="navbar-brand" href="{{route('login.show')}}">Login</a>
                <button class="navbar-toggler" type="button" >
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div> 
                <a class="navbar-brand" href="{{route('tiendas')}}">Añadir Tienda</a>
                <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div> 
                <a class="navbar-brand" href="{{route('home')}}">Añadir Arte</a>
                <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div>
                <a class="navbar-brand" href="{{route('register.show')}}">Register</a>
                <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>                   
            </div>
          </nav>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</body>
</html>