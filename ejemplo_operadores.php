  <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<p>&nbsp;</p>
<form name="form1" method="post" action="">
	<h1>CALCULADORA</h1>
  <p>
    <label for="num1"></label>
    <input type="text" name="num1" id="num1">
    <label for="num2"></label>
    <input type="text" name="num2" id="num2">
    <label for="operacion"></label>
    <select name="operacion" id="operacion">
      <option>Suma</option>
      <option>Resta</option>
      <option>Multiplicación</option>
      <option>División</option>
      <option>Módulo</option>
      <option>Incremento</option>
      <option>Decremento</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">
  </p>
</form>
<p>&nbsp;</p>
	
	<?php

	include ("calculadora.php");  //incluimos el codigo del archivo calculadora

	/*if (isset($_POST["button"]))
		{
			$numero1=$_POST["num1"];
			$numero2=$_POST["num2"];

			$operacion=$_POST["operacion"];

			calcular($operacion);
		}*/
		


	?>
</body>
</html>