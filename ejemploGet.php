<?php //Ejemplo aprenderaprogramar.com

       $nombre = $_GET['nombre'];
       $num1 = $_GET['num1'];
       $num2 = $_GET['num2'];
       $suma = $num1+$num2;

       echo $nombre . "<br>";
       echo $num1 . "<br>";
       echo $num2 . "<br>";
       echo "la suma es: " . $suma;

?>