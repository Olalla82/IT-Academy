  <?php

      class conectar{
              private $servidor="localhost";
              private $usuario="root";
              private $password="";
              private $bd="compra_php_m8";
    
    
          public function conexion(){
              $conexion=mysqli_connect(
                      $this->servidor,
                      $this->usuario,
                      $this->password,
                      $this->bd);
              return $conexion; 
          }

           function close($conexion) {
                  $conexion->close();
          }
       
        }
        
?>