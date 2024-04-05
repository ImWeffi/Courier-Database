<?php

include_once  "includes/Logindata.php";
      
	  
	  $kursi = $_POST['kurss'];
	  $nos = $_POST['nosaukums'];
	  
	  if($kursi != NULL AND $nos != NULL){
      $sql = "UPDATE kursi SET kurss = '$nos' WHERE idkursi = '$kursi'";
mysqli_query($conn, $sql);
    }else{
	echo "tuksa aile";
	  }
?>
<html>
<head>
<title></title>
<head>
</html>
<body> 
 <a href = "Homepage.php">Tabuli</a>
</body>