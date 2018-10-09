<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	//$num1=rand(10,50); //rand permite un numero aleatorio y los parametros(10,50)el rango de este.
	//$num1=pow(5, 2);  //pow es para elevar potencias en este caso 5 a la 2.
	//$num1=5.7478569;  
	//echo "el numero es: " . round($num1,2);  //round redondea un float, y en este caso lo redondea tomando dos decimales nada mas.



    //CASTING IMPLICITO: php cabia el tipo de variable implicitmente.


	/*$num1="5";  //empieza como caracter de valor 5

	$num1+=2;  //se le incrementa en dos y queda de tipo entero

	$num1=$num1+5.48; // se le suma un float quedando de tipo float

	echo $num1;*/


	//CASTING EXPLICITO: php recibe el tipo de variable al que se desea convetir.

	$num1="5";  //empieza como varible tipo string

	$resultado=(int)$num1;  //lo toma otra varible y lo convierte en entero con la aclaracion (int).
	echo $resultado;

	?>
	
</body>
</html>