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
        //NIVELL 1 EXERCICI 1
            function resta($n1, $n2){
                return $n1 - $n2;  
                }
                echo resta(6, 2);
                echo '<br>';
                
        //NIVELL 1 EXERCICI 2-3     
            function parell_o_imparell(){    

                $edad = 38;

                 if ($edad%2 == 0){
                    echo "El número es par";
                 }else{
                    echo "El número es impar";
                 }
                 echo '<br>';
            }

            parell_o_imparell();

                echo '<br>';
        //NIVELL 1 EXERCICI 4
            for($i=0; $i<=10; $i++){
                echo $i;
            }   echo '<br>';
        //NIVELL 2 EXERCICI 1    
            function amagatall(){
                for($i=0;$i<=10;$i+=2){
                    echo $i; 
                }
            }
            amagatall();  
                   echo '<br>';
        //NIVELL2 EXERCICI 2
            function parametrizada($num){
                for($i=0;$i<=$num;$i+=2){
                     echo $i; 
                }
            }
            echo parametrizada(15);  
                echo '<br>';
                            
        //NIVELL 2 EXERCICI 3  (Está comentado para que se pueda ejecutar el Ejercicio 1
           /* function amagatall($val){
                for($i=0;$i<=$val;$i+=2){
                    echo $i; 
                }
            }
            amagatall(10); 
                 echo '<br>';
            */
        //NIVELL 3 EXERCICI 1
            for($años =1960; $años<=2016; $años+=4){
                echo ' ' .$años;
            }   echo '<br>';
             
                
        //NIVELL 3 EXERCICI 2        
            $xocolata = 1;
            $xiclets = 0.50;
            $carmels = 1.50;
            $total_productes = $xocolata + $xiclets + $carmels;
            
            function productes(){
               
                global $xocolata, $xiclets, $carmels, $total_productes;
                
                $total_productes = (2*$xocolata) + $xiclets + $carmels;
                
                echo $total_productes;
            }
            productes();
                echo '<br>';
        //NIVELL 3 EXERCICI 3
            $numero = 101;
            
            for($n=2;$n<$numero;$n++){
                $numeros[$n]=true;
            }   
            
            for($k=2;$k<$numero; $k++){
                if($numeros[$k]){
                    for($n=$k*$k;$n<$numero;$n+=$k){
                        $numeros[$n] = false;
                    }
                }
            }
            echo 'Los números primos son : ';
            for($k = 2; $k <$numero; $k++){
                if($numeros[$k]){
                    echo $k.', ';
                }
            }
                    
        ?>
    </body>
</html>
