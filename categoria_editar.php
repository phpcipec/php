<?php 
	include("funciones/conexion.php");

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM categoria WHERE idcategoria=$id";
		$res = mysql_query($sql,$con);
		$row=mysql_fetch_array($res);
	}else{
		echo "Debe especificar un ID\n";
	}

	if(isset($_POST['actualizar'])){
		if(!empty($_POST['descripcion'])){
			$idcategoria = $_POST['idcategoria'];
			$descategoria = $_POST['descripcion'];
			echo "esto es id ".$idcategoria;
			echo "texto  ".$descategoria;
			$sqlUpdate = mysql_query("UPDATE categoria SET descripcionProducto = '$descategoria' WHERE idcategoria = '$idcategoria'",$con) or die(mysql_error($con));
			
			header("Location:categoria.php");
		}else{
			echo "Debe llenar todos los campos";
		}
		
	}
mysql_close($con);
?>
<!DOCTYPE html>
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
          
       <form id="categoria" name="categoria" method="post" action="categoria_editar.php">
       <h1>Editar Categoria</h1>
      		<br>		
       		Descripcion:
       	<input class="form-control" name="descripcion" type="descripcion" id="descripcion" value="<?php echo $row['descripcionProducto']; ?>" size=45 />
       	
		<input type="Hidden" name="idcategoria" value="<?php echo $row['idcategoria']; ?>">
       	
       	<br>
       	
       	<input type="submit" name="actualizar" id="actualizar" value="Editar Categoria"/>
       	
       </form>
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
