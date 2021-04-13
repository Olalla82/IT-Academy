
<?php

require_once "conexion.php";
require_once "index.php";

$consulta= new conectar();
$query = mysqli_query($consulta->conexion(), "SELECT * FROM compra_php_m8");

       class Tabla{
           

            public function boton(){
                  echo '<form class="form-group d-flex flex-column" action="insertar.php" method="post">';
                  echo '<button class="btn btn-success">Nuevo Producto</button>';
                  echo '</form>';        
                        
            }
            public function inicioTabla(){
                  echo '<table class="table table-striped table-bordered text-dark" style="border-collapse:collapse;" border="1">';
                  echo '<tr>';
                  echo '<td>Nombre Producto</td>';
                  echo '<td>Precio Unidad</td>';
                  echo '<td>Cantidad</td>';
                  echo '<td>Actualizar Productos</td>';
                  echo '<td>Borrar</td>';
                  echo '</tr>';
            
                  $obj= new metodos();
                  $sql="SELECT id_t_compra, nombre_producto, precio, cantidad_producto FROM t_compra";
                  $datos=$obj->mostrarDatos($sql);
               
               
               foreach($datos as $key){

                  echo '<tr id="alto">';
                  echo '<td>';
                  echo $key['nombre_producto'];
                  echo '</td>';
                  echo '<td>';
                  echo $key['precio'];
                  echo '</td>';
                  echo '<td>';
                  echo $key['cantidad_producto'];
                  echo '</td>';
                  echo '<td>';
                  echo '<a href="editar.php?id=' .$key['id_t_compra'].'">';
                  echo 'Editar';
                  echo  '</a>';
                  echo '</td>';
                  echo '<td>';
                  echo '<a href="eliminar.php?id=' .$key['id_t_compra'].'">';
                  echo 'Eliminar';
                  echo  '</a>';
                  echo '</td>';
                  echo '</tr>';
                  
             }
                  
                  echo '</table>';
            }
      
           

            public function graficar(){
                  $this->boton();
                  $this->inicioTabla();
            }

      }

            $tabla1=new Tabla(2,3);
            $tabla1->graficar();

?> 

