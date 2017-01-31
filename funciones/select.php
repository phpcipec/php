<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select</title>
	<h1>This file will select a entry from Personas1 table</h1>
	<br> 

<body>
<?php
	include("conexion.php");
	$sql = "SELECT * FROM personas1 WHERE nombre = 'bruno'";
	$consulta = mysql_query($sql,$con);
	while($fila = mysql_fetch_array($consulta)){
		
		echo $fila['nombre'].' '.$fila['appellido'].' '.$fila['telf'].'  '. $fila['email'].'<br>' ;
	}
	mysql_close($con);
	?>
</body>
</html>