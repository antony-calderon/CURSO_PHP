<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		include ("vehiculos.php");

		$mazda=new Coche();
		$pegaso=new Camion();

		echo "el numero de ruedas del mazda es " . $mazda->ruedas . "<br>";
		echo "el numero de ruedas del pegaso es " . $pegaso->ruedas . "<br>"; 

		echo $pegaso->establecer_color("verde" , "cami");
		echo $pegaso->arrancar();
	?>
</body>
</html>