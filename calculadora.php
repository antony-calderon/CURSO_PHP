<style>
	.resultado
	{
		color: blue;
		font-family: snap ITC;
		font-size: 50px;
	}

</style>


<?php

	if (isset($_POST["button"]))
		{
			$numero1=$_POST["num1"];
			$numero2=$_POST["num2"];

			$operacion=$_POST["operacion"];

			calcular($operacion); //le da a la funcion la palabra seleccionada en despegable
		}
		

	

		function calcular($calculo)
		{
			if (!strcmp("Suma", $calculo))
			{
				global $numero1;
				global $numero2;

				$suma=$numero1+$numero2;
				echo "<p class='resultado'>el resultado es: $suma</p>";
			}

			if (!strcmp("Resta", $calculo))
			{
				global $numero1;
				global $numero2;

				$resta=$numero1-$numero2;
				echo "<p class='resultado'>el resultado es: $resta</p>";
			}

			if (!strcmp("Multiplicación", $calculo))
			{
				global $numero1;
				global $numero2;

				$producto=$numero1*$numero2;
				echo "<p class='resultado'>el resultado es: $producto</p>";
			}

			if (!strcmp("División", $calculo))
			{
				global $numero1;
				global $numero2;

				$division=$numero1/$numero2;
				echo "<p class='resultado'>el resultado es: $division</p>";
			}

			if (!strcmp("Módulo", $calculo))
			{
				global $numero1;
				global $numero2;

				$modulo=$numero1%$numero2;
				echo "<p class='resultado'>el resultado es: $modulo</p>";
			}

			if (!strcmp("Incremento", $calculo))
			{
				global $numero1;
				$numero1++;

				$incremento=$numero1;
				echo "<p class='resultado'>el resultado es: $incremento</p>";
			}

			if (!strcmp("Decremento", $calculo))
			{
				global $numero1;
				$numero1--;

				$decremento=$numero1;
				echo "<p class='resultado'>el resultado es: $decremento</p>";
			}
		}


	?>