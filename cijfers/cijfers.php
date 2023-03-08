<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="cijfers.css">
</head>
<body>
  <h1>Resultaten</h1>
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
            <th>Nederlands</th>
            <th>Wiskunde</th>
            <th>Engels</th>
            <th>Sport</th>
            <th>Beroepsgericht</th>
            <th>Loopbaan en burgerschap</th>
          <tr>  
        </thead>
        <tbody>
<?php
require 'conection.php';
session_start();
$idleerling=$_SESSION['idleerling'];
$query="SELECT vakken.VkNaam,cijfer FROM vakken_has_leerling INNER JOIN vakken on vakken_has_leerling.vakken_vakid = vakken.vakid WHERE idleerling=$idleerling ";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");
while($row=$stmt->fetch()){
    echo "<tr>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "<td>".$row['cijfer']."</td>"."<br>";
    echo "</tr>";
}

?>
  </table>
</body>
<script src="https://kit.fontawesome.com/70211edd98.js" crossorigin="anonymous"></script>
</html>