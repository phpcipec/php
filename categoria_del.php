<?php
include("funciones/conexion.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}
$sql = "DELETE FROM categoria WHERE idcategoria = '$id'";
$res = mysql_query($sql,$con);
mysql_close($con);
header("Location:categoria.php");
?>