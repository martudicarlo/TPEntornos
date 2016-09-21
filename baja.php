<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Baja</title>
</head>
<body>
	<?php
	include ("conexion.inc.php");
	$vCiudad = $_POST ['ciudad'];
	$vSql = "SELECT * FROM Capitales WHERE ciudad='$vCiudad' ";
	$vResultado = mysqli_query($link, $vSql);
	if(mysqli_num_rows($vResultado) == 0)
	{
		echo ("Ciudad inexistente...!!! <br>");
		echo ("<A href='FormBaja.php'>Continuar</A>");
	}
	else
	{
		//Arma la instrucción SQL y luego la ejecuta
		$vSql= "DELETE FROM Capitales WHERE ciudad = '$vCiudad' ";
		mysqli_query($link, $vSql);
		echo("La ciudad fue Borrada<br>");
		echo("<A href='menu.php'>Volver al Menu del ABM</A>");
	}	
	// Cerrar la conexion
	mysqli_close($link);
	?>
</body>
</html>
