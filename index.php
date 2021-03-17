<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            //VARIABLES
               $nombre = 'Olalla';
               $edad = 38;
               $altura = 1.56;
               $info = true;
               
               echo $nombre;
               echo '<br>';
               echo $edad;
               echo '<br>';
               echo $altura;
               echo '<br>';
               echo $info;
               echo '<br>';
               
               $apellido = 'Malpartida';
               echo strlen($apellido);
               echo'<br>';
               echo strrev($apellido);
               echo '<br>';
               echo $nombre. ' '.$apellido;
               echo '<br>';
               
            //CONSTANTES
               define('NOMBRE_COMPLETO', 'Olalla Malpartida Raya');
               echo NOMBRE_COMPLETO;
               echo '<br>';
               
            //ARRAYS  
              $num1 = [12,15,24,35,48];
              $num2 = array(14,18,42);
              print_r($num1);
              echo '<br>';
              print_r($num2);
              echo '<br>';
            //Incluyo dos formas de subir valores a un array
              $num2[] = 54;
              array_push($num2, 59);
              print_r($num2);
              echo '<br>';
              
             $nums = array_merge($num1 ,$num2);
             echo sizeof($nums);
             echo '<br>';
             print_r($nums[0]);
             echo '<br>';
             print_r($nums[1]);
             echo '<br>';
             print_r($nums[2]);
             echo '<br>';
             print_r($nums[3]);
             echo '<br>';
             print_r($nums[4]);
             echo '<br>';
             print_r($nums[5]);
             echo '<br>';
             print_r($nums[6]);
             echo '<br>';
             print_r($nums[7]);
             echo '<br>';
             print_r($nums[8]);
             echo '<br>';
             print_r($nums[9]);
             echo '<br>';
             echo '<br>';
             echo '<br>';
             
             
             $x = 5;
             $y = 10;
             $n = 1.5;
             $m = 4.2;
             
             echo $x;
             echo '<br>';
             echo $y;
             echo '<br>';
             echo $x + $y;
             echo '<br>';
             echo $y - $x;
             echo '<br>';
             echo $x * $y;
             echo '<br>';
             echo $x / $y;
             echo '<br>';
             echo $x % $y;
             echo '<br>';
             echo '<br>';
             echo $n;
             echo '<br>';
             echo $m;
             echo '<br>';
             echo $n + $m;
             echo '<br>';
             echo $m - $n;
             echo '<br>';
             echo $n * $m;
             echo '<br>';
             echo $n / $m;
             echo '<br>';
             echo $n % $m;
             echo '<br>';
             echo '<br>';
             echo $x*2;
             echo '<br>';
             echo $y*2;
             echo '<br>';
             echo $n*2;
             echo '<br>';
             echo $m*2;
             echo '<br>';
             echo $x + $y + $n + $m;
             echo '<br>';
             echo $x * $y * $n * $m;
                        
        ?>
    </body>
</html>
