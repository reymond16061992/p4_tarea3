 <!DOCTYPE html>
 <html>
 <head>

 <h1> TAREA 3: PROMEDIO</h1>
 
 <title> TAREA 3 PROGRAMACION IV </title>

 </head>
 
 <body>
 <?php
 $promedio=0;
 $suma=0;
  $ventas=array( 
        7.3, 4.6, 25.6, 38.7, 65.8,
	50.6, 34.7, 4.7, 45.8, 53.8,
	23.45, 45.20, 23.1, 2.3, 2.4,
	23.4, 29.8, 65.4, 12.3, 24.5
                );
				
                $elementos = count($ventas);
              
              for ($i=0;$i<$elementos;$i++){
               echo " "." ".$ventas[$i];
                 $suma=$suma+$ventas[$i];				 
                } 
		
		$promedio=$suma/$elementos;
				
	echo "</br>";		
	echo "</br>Suma de los 20 numeros es= ". $suma;
	echo "</br>Promedio de los 20 numeros es= ". $promedio;
				
				
 ?>
 </body>
 
 
