<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<style>
	.resaltar
	{
		color: red;
		font-weight: bold;
	}
</style>

<body>


	<?php

	$variable1="casa";
	$variable2="CASA";

	$resultado1=strcmp($variable1, $variable2);//devuelve 1 si no son iguales. 0 si son iguales

	//STRCMP compara string teniendo en cuenta las mayusculas
	

	if($resultado1)
	{
		echo "no coinciden <br>";
	} 
	else
		{
			echo "coinciden <br>";
		}

	////////////////////////////////////////////////////////////////////
	

	$resultado2=strcasecmp($variable1, $variable2);//devuelve 1 si no son iguales. 0 si son iguales

	
	//STRCASECMP compara string sin tener en cuenta las mayusculas

	if($resultado2)
	{
		echo "no coinciden <br>";
	} 
	else
		{
			echo "coinciden <br>";
		}	
	?>
	
</body>
</html>