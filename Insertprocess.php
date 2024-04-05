<?php

include_once  "includes/Logindata.php";
      
	  
	$first = $_POST['id'];
$second = $_POST['nos'];
$third = $_POST['cen'];

$sql = "INSERT INTO products (idproducts, menu_name, price) VALUES ('$first', '$second', '$third')";
mysqli_query($conn, $sql);

header("Location:../insert.php?insert=sucesss");