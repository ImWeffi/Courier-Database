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


<?php
require_once"includes/Logindata.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $sql = $_POST["sql"];
  $result = $conn->query($sql);
  if ($result === false) {
    echo "Kļūda izpildot: " . $conn->error;
  } else {
    $tnosaukumi = $result->fetch_fields();
    echo "<h3>Rezultāts:</h3>";
    echo "<pre>" . htmlspecialchars($sql) . "</pre>";
    echo "<table border ='2px'>";
    echo '<tr>'; 
    foreach($tnosaukumi as $elements ){
      echo '<th>';
      echo $elements->name;
      echo '</th>';
    }
    echo '</tr>';
    while($row = $result ->fetch_assoc()){
      echo '<tr>';
      foreach($row as $item){
        echo '<td>';	
        echo $item;
        echo '</td>';	   
      }
      echo '<tr>';
    }
    echo"</table>";
  }
} else {
  echo "<h3>Ievadiet SQL vaicājumu:</h3>";
  echo "<form method=\"post\">";
  echo "<textarea name=\"sql\" rows=\"10\" cols=\"50\"></textarea><br>";
  echo "<input type=\"submit\" value=\"Submit\">";
  echo "</form>";
}

?>