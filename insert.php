<?php
	require_once "conexion.php";
	require_once "metodos.php";

	$p_nombre=$_POST['producto'];
	$precio=$_POST['precio'];
	$cantidades=$_POST['cantidad'];
	
	$datos=array(
			$p_nombre,
			$precio,
			$cantidades
				);
	
	$obj= new metodos();
	if ($obj->insertarDatosNombre($datos,$precio,$cantidades)==1){
		header("location:index.php");
	}else{
		echo "Fallo al Agregar";
	}

?>