<?php
   include_once  "includes/Logindata.php"
?>

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

<br></br>


     <form action = "Insertprocess.php" method = "POST"> 
	 <label for="nosaukums">Produkti:</label>
       <input type = "text" name = "id" placeholder = "id">
	   <input type = "text" name = "nos" placeholder = "nosaukums">
	   <input type = "text" name = "cen" placeholder = "cena">
	   <button type = "sumbit" name = "sumbit">Pievienot pievienot</button>
	  </form>

<a href = "Homepage.php">Tabuli</a>
</body>
