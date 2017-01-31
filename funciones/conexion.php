<?php
	$con = mysql_connect("localhost","administrator","user1234");
	if(!$con){
		die("Falla de conexion de Base de Datos ". mysql_error);
	}
	echo "Conexion correcta a la Base de Datos<br>";

	$db_selected = mysql_select_db("ferreteria_db",$con)
		 or die("Could not select test1");
?>