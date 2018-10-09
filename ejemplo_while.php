<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<?php

		$var1 = 1;

		while ($var1 < 6)
		{
			echo "linea numero $var1 <br>";
			$var1++;
		}
		echo "salimos del bucle";
	
	?>

<br><br>


	<?php
				///////////do while////////////
   		$var1 = 7; //condicion falsa
		do
		{
			echo "linea numero $var1 <br>";  //el codigo se ejecuta al menos una vez
			$var1++;
		}
		while ($var1 < 6); //se evalua la condicion despues de ejecutar el codigo

		echo "salimos del bucle";	
	?>

</body>
</html>