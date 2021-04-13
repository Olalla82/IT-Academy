<?php

require_once "conexion.php";
$obj=new conectar();
$conexion=$obj->conexion();
$id=$_GET['id'];
$sql="SELECT  nombre_producto, precio, cantidad_producto 
		FROM t_compra 
		WHERE id_t_compra='$id'";
$result=mysqli_query($conexion,$sql);
$ver=mysqli_fetch_row($result);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Editar Producto</title>

</head>
<body>
	
        <div class="border border-success d-inline-flex p-4">   
		<form class="form-group d-flex flex-column" action="actualizar.php" method="post">
        	<label class="input-group-text bg-dark text-light" for="">ACTUALIZAR PRODUCTO:</label>
        	<br>
        	<input type="text" hidden="" value="<?php echo $id ?>" name="id" type="text" name="producto">
        	<br>
        	<input type="text" name="producto" value="<?php echo $ver[0] ?>">
        	<br>
        	<select class="custom-select" value="<?php echo $cantidades ?>" name="cantidad">
        		<option value="1" selected>1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
        	</select>
        	<br><br>
        	<button class="btn btn-success">Editar Producto</button>

        </form>
</div>
</body>
</html>