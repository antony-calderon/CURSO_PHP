<?php
echo $_SERVER['HTTP_USER_AGENT'];

?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() debe haber devuelto no falso</h3>
<p>Está usando Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() debe haber devuelto falso</h3>
<p>No está usando Internet Explorer</p>
<?php
}
?>

<form action="accion.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>

<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php echo 'Mientras que esto va a ser interpretado.'; ?>
<p>Esto también será ignorado por PHP y mostrado por el navegador.</p>

<?php  
$un_int=4;
if (is_int($un_int)) {
    $un_int += 4;
}
echo $un_int;
?>
<br>
<?php  
$nombres = array("antony","jhony","marcela");
echo $nombres[1];
?>