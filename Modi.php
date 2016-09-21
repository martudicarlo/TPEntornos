<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
html> 
<head> 
<title>Usuario a modificar</title> 
</head> 
<body bgcolor="#FFFFFF" text="#000000">  
<?php
	include ("conexion.inc.php");
	$vCiudad = $_POST ['ciudad'];
	$vSql = "SELECT * FROM Capitales WHERE ciudad='$vCiudad' ";
	$vResultado = mysqli_query($link, $vSql);
	if(mysqli_num_rows($vResultado) == 0)
	{
		echo ("Ciudad inexistente...!!! <br>");
		echo ("<A href='formModif.php'>Continuar</A>");
	}
	else
	{
		echo ("<A href='modifDos .php'>Continuar</A>");
	}
	// Cerrar la conexion
	mysqli_close($link);
	?>
</html> 