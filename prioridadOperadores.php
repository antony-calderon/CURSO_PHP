<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php  
		$var1 = true;
		$var2 = false;
		$resultado = $var1 && $var2; //como $var2 es false, se guarda en el $resultado false (la prioridad es de &&)

		if($resultado == true)

		{
			echo "correcto";
		}
		else
		{
			echo "incorrecto";
		}
	?>
<br>
	<?php  
		$var1 = true;
		$var2 = false;
		$resultado = $var1 and $var2; //se almacena true en $resultado ya que la prioridad es de =

		if($resultado == true)

		{
			echo "correcto";
		}
		else
		{
			echo "incorrecto";
		}
	?>
</body>
</html>