<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  

		echo "este es el primer mensaje <br>";

		include ("proporciona_Datos.php");//llama a la funcion que se encuentra en otro archivo.
		
		echo "este es el segundo mensaje <br>";

		dameDatos();//ejecuta la funcion del archivo externo llamado con include.

		/*INCLUDE se usa para añadir un pedazo de codigo al programa, ejecutando el resto sin problema.

		REQUIRE añade el codigo pero si tiene error, no se ejecutara de ahi para abajo, es requerido para que funcione el programa*/


	?>
	
</body>
</html>