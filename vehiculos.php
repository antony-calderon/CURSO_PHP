<?php 

////////////////////////CLASE COCHE////////////////////////////////// 
		class Coche
		{
			var $color;
			var $ruedas;
			var $motor;

			function Coche()//metodo constructor, indica el estado inicial del objeto
			{
				$this->ruedas=4;
				$this->color="";
				$this->motor=1600;
			}

			function arrancar()
			{
				echo "estoy arrancando<br>";
			}

			function girar()
			{
				echo "estoy girando<br>";
			}

			function frenar()
			{	
				echo "estoy frenando<br>";
			}

			function establecer_color($color_coche,$nombre_coche)
			{
				//$this->color=$color_coche;

				echo "el color de " . $nombre_coche . " es: " . $color_coche . "<br>";
			}		
		}

		$renault = new Coche();//estado inicial al objeto, llama al constructor... 
		$mazda = new Coche();
		$chevrolet = new Coche();

		$renault->establecer_color("rojo","renault");//llama la funcion para establecer color con dos parametros
		$mazda->establecer_color("azul","mazda");

		$mazda -> girar();//llama al metodo girar para el objeto mazda...
		echo $mazda -> ruedas . "<br>";
		echo $mazda -> motor . "<br>";

		///////////////////CLASE CAMION//////////////////////////////////////

		class Camion extends Coche ////HERENCIA//////
		{

			function Camion()//metodo constructor, indica el estado inicial del objeto
			{
				$this->ruedas=8;
				$this->color="";
				$this->motor=2600;
			}

///////////////////como se extiende o se hereda de coche, no se ponen los metodos (funciones)//////


///////////////////////SE SOBRE-ESCRIBE LA FUNCION ESTABLECER COLOR DE COCHE PARA CAMION////////////////

			function establecer_color($color_camion,$nombre_camion)
			{
				//$this->color=$color_coche;

				echo "el color de " . $nombre_camion . " es: " . $color_camion . "<br>";
			}
///////////////////////////////////////////////////////////////////////////////////////////////////////////

			function arrancar()
			{
				parent::arrancar();//parent llama el metodo arranca de coche 
				echo "el camion ya arranco <br>";//se añade lo pertienente al objeto camion
			}
					
		}
	?>