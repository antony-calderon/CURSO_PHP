<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"]))
	{
		$edad = $_POST["edad_usuario"];
		$nombre = $_POST["nombre_usuario"];

		if($edad <= 17)
		{
			echo "eres menor de edad <br>";
		}
			else if($edad <= 40)   //al utilizar else if se toman todos los if como un bloque 
			{                      //si se hace sin else, se toman los if independientes y mandaria los mensajes de 
				echo "eres joven <br>"; //los if independientes.
			}
				else if($edad <= 65)
				{
					echo "eres maduro <br>";
				}
					else
					{
						echo "cuidate <br>";//cuidate = cu &iacute; date para hacer el acento en la i
					}


	///////////////////////////////////////////////////////////////////////////////////////////////////
					//  ejemplo operador ternario/////

					//lleva primero la condicion, 
					//despues el mensaje en caso de true 
					//y luego el mensaje en caso de false.

			$salida = $edad == 21 && $nombre == "marcela" ? "Puedes acceder marcela :* <br>" : "no tienes acceso <br>";
			echo $salida;
	}

echo "<h3>ejemplo switch case </h3>	";
	///////////////////////////////////////////////////////////////////////////////////////////////////
					//  ejemplo switch case//////
			switch ($nombre) 
			{
				case 'marcela':
					echo "hola marcela";
					break;

				case 'antony':
					echo "hola antony";
					break;
				
				default:
					echo "no autorizado";
					
			}


echo "<h3>ejemplo switch case comparando dos variables (nombre y edad) </h3>	";
	///////////////////////////////////////////////////////////////////////////////////////////////////
					//  ejemplo switch case comparando variables//////
			switch (true) 
			{
				case $nombre == 'marcela' && $edad == 21:
					echo "hola marcela, puedes acceder";
					break;

				case $nombre == 'antony' && $edad == 28:
					echo "hola antony, puedes acceder";
					break;
				
				default:
					echo "no autorizado";
					
			}


echo "<h3>ejemplo switch case condicional edad </h3>	";
	///////////////////////////////////////////////////////////////////////////////////////////////////
					//  ejemplo switch case condicional edad//////
			switch (true)                                         
			{
				case $edad <= 17:
					echo "no puedes acceder, eres menor de edad"; //al usar el break, rompe el flujo de 
					break;                                        //ejecucion, si no existieran los brakes
																  //al insertar 15 años, me tomaria todos 
				case $edad <= 40:								  //los mensajes de todos los cases (eres menor,
					echo "puedes acceder, eres joven";            //eres joven, eres maduro, etc).
					break;

				case $edad <= 65:
					echo "puedes acceder, eres adulto";
					break;
				
				default:
					echo "cuida tu avanzada edad, puedes acceder";
					
			}
	
	
	
?>