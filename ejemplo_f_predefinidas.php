<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<?php  
		$palabra = "antony";
		echo (strtoupper($palabra));
	?>
<br><br>
	<?php   ///////////////////////funcion propia o hecha por mi /////////////////
		
		function suma ($num1 , $num2)
		{
			$resultado = ($num1 + $num2);

			return $resultado;
		}

		echo (suma (5 , 6));
	?>
	<br><br>
	<?php  

		function frase_mayus ($frase , $conversion = true)
		{
			$frase = strtolower($frase);

			if ($conversion == true)
			{
				$resultado = ucwords($frase);
			}
			else
			{
				$resultado = strtoupper($frase);
			}
			return $resultado;
		}

		echo (frase_mayus ("hola antony, espero que estes muy bien")); // como no se ha puesto el segundo
																	   //argumento, se toma el valor por		
																	   //defecto ($conversion=true).
	?>
	<br><br>
	<?php  
		function incremento ($numero)
		{
			$numero ++;
			return $numero;
		}
		echo (incremento (12));
	?>
	<br><br>
	<?php //////pasar parametros por referencia con &///////////////
	      /////conservan el valor que la funcion le haya asignado/////////  
		function aumento (&$valor) //el & relacion, vincula o refeencia el valor de la variable
		{
			$valor ++;
			return $valor;
		}

		$digito = 5;
		echo (aumento ($digito)) . "<br>";
		echo $digito;
	?>
	<br><br>
	<?php //////otro ejemplo de parametros por referencia //////////////  
		function pasar_mayus (&$oracion)
		{
			$oracion = strtolower($oracion);
			$oracion = ucwords($oracion);
			return $oracion;
		}

		$hola = "hOlA mUnDo";
		echo pasar_mayus ($hola) . "<br>";
		echo $hola;
	?>
</body>
</html>