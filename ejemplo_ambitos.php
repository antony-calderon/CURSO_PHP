<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php

	$nombre = "juan";   //la variable esta en el ambito fuera de la funcion (ambito local)

	function dameNombre()   
	{
		global $nombre; //cambia el ambito de la variable a global para ser usado dentro de la funcion.

		$nombre = "el nombre es " . $nombre;
	}
	dameNombre();

	echo $nombre; //imprime la variable fuera de la funcion. (ambito local)


	?>
	
</body>
</html>