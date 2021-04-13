<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Document</title>
</head>
<body>

<div class="border border-success d-inline-flex p-4">   
		<form class="form-group d-flex flex-column" action="insert.php" method="post">
        	<label class="input-group-text bg-dark text-light" for="">INCLUIR PRODUCTO:</label>
        	<br>
        	<input type="text" name="producto">
        	<br><br>
            <label class="input-group-text bg-success text-light" for="">PRECIO:</label>
            <br>
            <input type="text" name="precio">
            <br><br>
        	<select class="custom-select" name="cantidad">
        		<option value="1" selected>1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
        	</select>
        	<br><br>
        	<button class="btn btn-danger">Añadir Producto</button>

        </form>
</div>
</body>
</html>