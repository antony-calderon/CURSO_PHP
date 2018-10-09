<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		function incrementaVariable()
		{
			static $contador=0; //esta linea se ejecuta una sola vez, y el valor de la variable aumenta de 1 en 1 osin resetearse a cero nuevamente. (conserva su valor al salir de su ambito)
			$contador++;
			echo $contador . "<br>";
		} 
		incrementaVariable();
		incrementaVariable();
		incrementaVariable();
		incrementaVariable();

	 ?>
</body>
</html>