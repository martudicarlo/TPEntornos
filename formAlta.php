<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Formulario Alta Usuarios</title>
</head>
	<body>
	<FORM action="alta.php" method="POST" name="FormAlta">
		<TABLE width="225">
		<TR>
			<TD> Ciudad:</TD>
			<TD> <input type="TEXT" name="ciudad" size="30" maxlength="40" required>
		</TR>
		<TR>
			<TD> Pais:</TD>
			<TD> <input type="text" name="pais" size="20" maxlength="8"> </TD>
		</TR>
		<TR>
			<TD> Habitantes: </TD>
			<TD> <input type="TEXT" name="Habitantes" size="20" maxlength="20"></TD>
		</TR>
		<TR>
			<TD> Superficie: </TD>
			<TD> <INPUT TYPE="text" name="Superficie" size="20" maxlength="40"> </TD>
		</TR>
		<TR>
			<TD> Tiene metro?: </TD>
			<TD> <INPUT TYPE="checkbox" name="tieneMetro" value="false"> </TD>
		</TR>
		<TR>
			<TD colspan="2" align="center"> <INPUT TYPE="SUBMIT" name="Submit" value="Agregar">
			<p><a href="Menu.php">Volver al menu del ABM</a></p>
			</TD>
		</TR>
		</TABLE>
	</FORM>
	</body>
</html>
