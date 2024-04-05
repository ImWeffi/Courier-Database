<?php

include_once  "includes/Logindata.php";
      
	  
	  $id = $_POST['id']; 
	  
	  $sql = "DELETE FROM courier WHERE idcourier = '$id'";
	  mysqli_query($conn, $sql);
	?>
	
	<html>
<head>
<title></title>
<head>
</html>
<body> 
 <a href = "galvenalapa.php">Sakums</a>
 <a href = "Delete.php">Atpakal</a>
</body>