<?php
	$link = mysqli_connect("localhost", "root") or die ("Problemas de conexi�n a la base de datos");
	mysqli_select_db($link, "Capitales");
?>