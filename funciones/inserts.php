<?php
	$con = mysql_connect("localhost","administrator","user1234");
	if(!$con){
		die("DB conection failed". mysql_error);
	}
	echo "DB conection sucess<br>";
	
	mysql_select_db("ferreteria",$con)
		 or die("Could not select test1");
	$sql = "INSERT INTO personas1 (nombre,appellido,telf,email)
	VALUES ('Bruno','Barrios',123465,'test@test.com')";
	if(mysql_query($sql,$con))
	  {
	  echo "Table persons created successfully<br>";
	  }
	else
	  {
	  echo "Error creating table: " . mysql_error($con)."<br>";
	  }
	mysql_close($con);
	?>
