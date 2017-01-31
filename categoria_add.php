<?php
	include("funciones/conexion.php");
if(isset($_POST['descripcion'])){
	$desccategoria = $_POST['descripcion'];
	
	$sql = "INSERT INTO categoria(descripcionProducto)";
	$sql .= "VALUES('".$desccategoria."')" ;
	$res = mysql_query($sql, $con) or die(mysql_error());
	header("Location:categoria.php");
	
}
mysql_close(); 
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
          <h1>Bootstrap starter template</h1>
       <form id="categoria" name="categoria" method="post" action="categoria_add.php">
       <h1>Categorias</h1>
      		<br>
       		Descripcion:
       	<input class="form-control" name="descripcion" type="descripcion" id="descripcion" value="" size=45 />
       	<br>
       	<input type="submit" name="name" id="categoria" value="Agregar Categoria"/>
       	
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
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
