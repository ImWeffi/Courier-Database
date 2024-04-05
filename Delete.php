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

<form action = "deleteprocess.php" method = "POST"> 
	 <label for="nosaukums">Datu izdzesana</label>
	 <br></br>
	 <input type = "text" name = "id" placeholder = "ID">
	   <br></br>
	   <button type = "sumbit" name = "sumbit">Izdzest</button>
	   <br></br>

	   <a href = "galvenalapa.php">Sakums</a>
	  </form>