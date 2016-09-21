<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Alta Usuario</title>
</head>
<body>
	<?php
	include("conexion.inc.php");
	//Captura datos desde el Form anterior
	$vCiudad = $_POST['ciudad'];
	$vPais = $_POST['pais'];
	$vHabitantes = $_POST['Habitantes'];
	$vSuperficie = $_POST['Superficie'];
	$vTieneMetro = isset($_POST['tieneMetro']);
	
	//Arma la instrucción SQL y luego la ejecuta
		$vSql = "INSERT INTO Capitales (ciudad, pais, habitantes, superficie, tiene_metro)
		values ('$vCiudad','$vPais', '$vHabitantes', '$vSuperficie', '$vtieneMetro')";
		mysqli_query($link, $vSql) or die (mysqli_error($link));
		echo("La ciudad fue Registrada.<br>");
		echo ("<A href='menu.php'>VOLVER AL MENU</A>");
			
	// Cerrar la conexion
	mysqli_close($link);
	?>
</body>
</html>