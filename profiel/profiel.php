<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profiel</title>
  <link rel="stylesheet" href="profiel.css">
</head>
<body>
<h1>Profiel</h1>
  <div id="sidebar">
    <div class="toggle-btn" onclick ="show()">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul>
    <i class="fa-sharp fa-solid fa-house-chimney"><a href="/fullstackproject/portal/portal.php"><li>Home</li></a></i>
    <i class="fa-sharp fa-solid fa-school-circle-xmark"><a href="/fullstackproject/cijfers/cijfers.php"><li>Cijfers</li></a></i> 
    <i class="fa-solid fa-user"><a href="/fullstackproject/profiel/profiel.php"><li>Profiel</li></a></i>
    <i class="fa-solid fa-power-off"><a href="/fullstackproject/portal/loguit.php" class="button">Uitloggen</a></i>
    </ul>
  
  <script>
    function show() {
      document.getElementById('sidebar').classList.toggle('active');
    }
  </script> 
  </div>
  
</div>
<table>
<div class="container">
        <thead>
          <tr>
            <th>Leerlingnummer</th>
            <th>Naam</th>
            <th>Tussenvoegsels</th>
            <th>Achternaam</th>
          <tr>  
        </thead>
        <tbody>
<?php
require 'conecntion.php';
session_start();
$idleerling=$_SESSION['idleerling'];

$query="SELECT * FROM leerling WHERE idleerling=$idleerling";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

while($row=$stmt->fetch()){
    echo "<tr>";
    echo "<td>".$row['idleerling']."</td>"."<br>";
    echo "<td>".$row['naam']."</td>"."<br>";
    echo "<td>".$row['tussenvoegsels']."</td>"."<br>";
    echo "<td>".$row['achternaam']."</td>"."<br>";
    echo "</tr>";
}

?>
   </table>
</body>
</html>
<script src="https://kit.fontawesome.com/70211edd98.js" crossorigin="anonymous"></script>