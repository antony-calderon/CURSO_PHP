<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

		for ($i=0; $i <=10 ; $i++) 
		{ 
		  	echo "linea numero $i <br>";

		  	if($i==5)
		  	{
		  		echo "bucle interrumpido";
		  		break; //con una condicion y un break se interumpe el bucle
		  	}
		}  
	?>

	<br><br>

	<?php
	//////////////////tabla del 9//////////////////////
 		for ($i=0; $i <= 10 ; $i++) 
		{ 
		  	echo "9 x $i = " . 9 * $i . "<br>";
		}   
		echo "salimos del bucle";
	?>
<br><br>
	<?php 
	////////////division entre 9 hasta negativos y pasando por cero////////////// 
		for ($i=10; $i >= -10; $i--)
		{
			if ($i == 0)
			{
				echo "division entre cero es invalida <br>";
				continue;
			}
			echo "9/$i = " . 9/$i . "<br>";
		}
	?>
</body>
</html>