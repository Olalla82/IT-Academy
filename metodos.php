<?php

	class metodos{
    
            public function mostrarDatos($sql){
                $c= new conectar();
                $conexion=$c->conexion();

                $result=mysqli_query($conexion,$sql);

                return mysqli_fetch_all($result,MYSQLI_ASSOC);

                 $conexion->close($result);
            }

           public function insertarDatosNombre($datos,$precio,$cantidades){
                $c= new conectar();
                $conexion=$c->conexion();

                $sql="INSERT INTO t_compra (nombre_producto, precio, cantidad_producto)
                                VALUES ('$datos[0]','$precio[0]','$cantidades[0]')";
                return $result=mysqli_query($conexion, $sql);
                $conexion->close($result);

            }
            
            public function actualizaDatosNombre($datos){
                $c= new conectar();
                $conexion=$c->conexion();
                $sql="UPDATE t_compra 
                            SET nombre_producto='$datos[0]'
                            WHERE id_t_compra='$datos[1]'";

                return $result=mysqli_query($conexion, $sql);

                 $conexion->close($result);

            }

            public function eliminarDatosNombre($id){
            	$c= new conectar();
            	$conexion=$c->conexion();
            	$sql="DELETE FROM t_compra WHERE id_t_compra='$id'";
            	return $result=mysqli_query($conexion,$sql);

                 $conexion->close($result);
            }
          }
          
          
?>

   