<?php
   include_once  "includes/Logindata.php"
?>

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
<h2>kursi</h2>
<tr>
<th> Kursaid </th>
<th> kursa nosaukums </th>
<tr>


<?php
   $sql = " SELECT * from kursi";
   $result = $conn ->query($sql);
   
   if($result -> num_rows > 0){
	   while($row = $result -> fetch_assoc() ){
	   echo "<tr><td>" . $row["idkursi"] . 
	   "</td><td>". $row["kurss"];
	   }
   }else{
	   echo"No results";
   }
	   $conn ->close();
?>  
</table>


<body> 

     <form action = "updateprocess.php" method = "POST"> 
	 <label for="nosaukums">Datu mainasana</label>
	 <br></br>
	 <input type = "text" name = "kurss" placeholder = "id">
	 <br></br>
	   <input type = "text" name = "nosaukums" placeholder = "Kursa nos">
	   <br></br>
	   <button type = "sumbit" name = "sumbit">Nomainit</button>
	   <br></br>
	   <a href = "Homepage.php">Tabuli</a>
	  </form>


</body>
