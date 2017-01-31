


<?php
	
	$con = mysql_connect("localhost","administrator","user1234");
	if(!$con){
		die("DB conection failed". mysql_error);
	}
	echo "DB conection sucess<br>";
	
	mysql_select_db("ferreteria",$con)
		 or die("Could not select test1");
	$sql = "CREATE TABLE personas1(
	idnombre int not null auto_increment,
	nombre varchar(25),
	appellido varchar(25),
	telf int,
	email varchar(60),
	primary key(idnombre))";
	if (mysql_query($sql,$con))
	  {
	  echo "Table persons created successfully<br>";
	  }
	else
	  {
	  echo "Error creating table: " . mysql_error($con)."<br>";
	  }
	
	mysql_close($con);
	?>
