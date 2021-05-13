<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 

</head>
<body style="background-size:cover; background-image:url('https://3er1viui9wo30pkxh1v2nh4w-wpengine.netdna-ssl.com/wp-content/uploads/prod/sites/61/2019/04/LaLiga.jpg')">
    
    <!--NAVBAR--> 
    <div class="container-fluid m-4">  
        <nav class="navbar navbar-light bg-danger" style="box-shadow: white 4px 5px 18px;">
            <a class="navbar-brand text-light" href="#">{{Cookie::get('cookie1')}}</a>
            <div>
                <button type="" class="btn btn-light"><a href="{{route('crud.index')}}"class="text-danger" style="text-decoration:none;">CLASIFICACIONES LIGA</a></button>
            </div>
        </nav>
        
    </div>

    <div class="container d-flex justify-content-center mt-5" >
        <h1 class="display-3 text-light font-weight-bold" style="text-shadow: red 5px 5px 14px;">HAS BORRADOS LOS DATOS <br><br>DE LA LIGA CORRECTAMENTE</h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>