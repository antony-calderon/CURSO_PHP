<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		h1
		{
			text-align:center;
		}

		table
		{
			background-color:#FFC;
			padding:5px;
			border:#666 5px solid;
		}
		
		.no_validado
		{
			font-size:18px;
			color:#F00;
			font-weight:bold;
		}
		
		.validado
		{
			font-size:18px;
			color:#0C3;
			font-weight:bold;
		}


	</style>
</head>

<body>

	<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td> <!--da espacio entra las celdas y el boton enviar-->
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

	<?php
		if(isset($_POST["enviando"])) //ISSET se encarga de validar que se halla oprimido el boton enviar
		{
			$usuario=$_POST["nombre_usuario"]; //si se le do a enviar: el dato guardado en el cuadro nombre (nombre_usuario) se asigna a la variable $usuario de php
			$edad=$_POST["edad_usuario"]; //si se le dio al boton enviar: el dato guardado en el cuadro edad (edad_usuario) se le asigna a la variable $edad de php 

			if($usuario=="antony" or $usuario=="marcela" && $edad>=18)
			{
				echo "<p class='validado'> puedes entrar </p>";
			}
			else
			{
				echo "<p class='no_validado'> no puedes entrar</p>";
			}
		}


	?>
	
</body>
</html>