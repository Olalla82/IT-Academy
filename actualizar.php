<?php
	require_once "conexion.php";
	require_once "metodos.php";

	$p_nombre=$_POST['producto'];
	$id=$_POST['id'];

	$datos=array(
				$p_nombre,
				$id);

	$obj= new metodos();

	if ($obj->actualizaDatosNombre($datos)==1){
		header("location:index.php");
	}else{
		echo "<br>";
		echo "Fallo al Agregar";
	}

	desconectar();
?>