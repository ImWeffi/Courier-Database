<?php
   include_once  "includes/Logindata.php"
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Piegades datubaze sistema</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<h1>Piegādes pakalpojums datubāze</h1>
<body>
  <div class="navigacija">
    <ul>
      <li><a href="galvenalapa.php">Par DB</a></li>
      <li><a href="tabulas.php">Visas Tabulas</a></li>
      <li><a href="Delete.php">Delete</a></li>
	  <li><a href="Insert.php">Insert</a></li>
      <li><a href="Vaic.php">Vaicājums</a></li>
    </ul>
  </div>
</body>

<h2>Visas tabulas</h2>

<style>
 .navigacija ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  text-align: center;
  background-color: #333;
  border-top-left-radius:20px;
  border-bottom-left-radius:20px; 
  border-top-right-radius:20px;
  border-bottom-right-radius:20px;
}

.navigacija li {
  display: inline-block;
}

.navigacija li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none; 
}

.navigacija li a:hover {
  background-color: #111;
}

h1 {
	text-align: center;
}

h2 {
	text-align: center;
}
p {
	text-align: center;
}
</style>


<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
}
</style>


<table style = "100% width">
<a>courier</a>
<tr>
<th> id kurjers</th>
<th> vards</th>
<th> uzvards </th>
<th> telefons</th>
<th> piegādes veids</th>
<tr>


<?php
   $sql = " SELECT * from courier";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idcourier"] . 
	   "</td><td>". $row["first_name"]. 
	   "</td><td>". $row["last_name"]. 
	   "</td><td>". $row["phone_number"]. 
	   "</td><td>". $row["delivery_tipe"];
	   }
   }else{
	   echo"No results";
   }
	   
?>  
</table>

<table style = "100% width">
<a>customers<a>
<tr>
<th>idcustomers</th>
<th>vards </th>
<th>uzvards </th>
<th>numurs</th>
<th> adrese </th>
<th> durvju numurs </th>


<tr>

<?php
   $sql = " SELECT * from customers";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idcustomers"] . 
	   "</td><td>". $row["first_name"]."</td><td>". $row["last_name"] . "</td><td>". $row["phone_number"] .
	   "</td><td>". $row["street"] ."</td><td>". $row["apartament"];
	   }
   }else{
	   echo"No results";
   }
	  
?>  
</table>

<table style = "100% width">
<a>orders</a>
<tr>
<th> id pasūtījumi</th>
<th> id klienti</th>
<th> laiks </th>

<tr>


<?php
   $sql = " SELECT * from orders";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idorders"] . 
	   "</td><td>". $row["idcustomers"]. 
	   "</td><td>". $row["data_get"];
	   }
   }else{
	   echo"No results";
   }
	  
?>  
</table>


<table style = "100% width">
<a>delivery</a>
<tr>
<th> id piegāde</th>
<th> id pasūtījumi</th>
<th> id kurjers</th>
<th> laiks</th>
<th> maksāšanas </th>
<tr>


<?php
   $sql = " SELECT * from delivery";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["iddelivery"] . 
	   "</td><td>". $row["idorders"]. 
	   "</td><td>". $row["idcourier"]. 
	   "</td><td>". $row["date_arrived"]. 
	   "</td><td>". $row["payment_method"];
	   }
   }else{
	   echo"No results";
   }
	   
?>  
</table>


<table style = "100% width">
<a>orders_product</a>
<tr>
<th> id pasūtījums</th>
<th> id produkts</th>
<th> daudzums </th>

<tr>


<?php
   $sql = " SELECT * from orders_product";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idorders"] . 
	   "</td><td>". $row["idproducts"]. 
	   "</td><td>". $row["quanity"];
	   }
   }else{
	   echo"No results";
   }
	  
?>  
</table>


<table style = "100% width">
<a>products</a>
<tr>
<th> id produkts</th>
<th> menu</th>
<th> cena </th>

<tr>


<?php
   $sql = " SELECT * from products";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idproducts"] . 
	   "</td><td>". $row["menu_name"]. 
	   "</td><td>". $row["price"];
	   }
   }else{
	   echo"No results";
   }
	  
?>  
</table>