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

<h2>Īss apraksts</h2>
</html>

<p>Partikas datubaze piegādei ir informācijas sistēma, kas tiek izmantota, lai organizētu un pārvaldītu partikas produktu piegādes procesu.</p> 
<p>Datu bāzes mērķis ir parādīt visu pasūtījuma informāciju, sākot no Klienta līdz pasūtījuma informācijai.</p>
<p>Tā ietver datus par piegādes plānošanu, produktu daudzumiem, piegādes laikiem, piegādātājiem un citiem saistītiem aspektiem</p>

<p>Pasūtījuma informācijā var norādīt klienta informāciju, produkta informāciju un piegādātāja informāciju.</p>
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


