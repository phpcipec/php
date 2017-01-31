<?php
	include("funciones/conexion.php");
	$sql = "SELECT * FROM categoria";
$res = mysql_query($sql,$con);

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html><!DOCTYPE html>
<html lang="en">
 <?php include("funciones/header.php");?>
  <body>

   <?php
	  
	  include("funciones/menu.php");
	  ?>

    <div class="container">
      
      <div class="starter-template">
      <br>
      <br>
      <br>
          <h1>Bootstrap starter template</h1>
          <a href="categoria_add.php" class="btn btn-success btn-lg active" role="button">Agregar Categoria</a>
          <br>
          <br>	
        <table class="table table-striped">
  			<tr>
  				<td>Descripcion</td>
  				<td>Accion</td>
  			</tr>
  			<?php
				while($row = mysql_fetch_array($res)){?>
				<tr>
					<td><?php echo $row['descripcionProducto'];?></td>
					<td>
						<a href="categoria_editar.php?id=<?php echo $row['idcategoria']; ?>" class="btn btn-warning btn-xs btn-lg active" role="button">Editar</a>
						<a href="categoria_del.php?id=<?php echo $row['idcategoria']; ?>" class="btn btn-danger btn-xs btn-lg active" onclick="return confirmation()">Eliminar</a>
					</td>
				</tr>
    	   <?php }?>
     	</table>
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
