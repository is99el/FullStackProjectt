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


$query="SELECT * FROM cijfers";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

while($row=$stmt->fetch()){
    echo "<tr>";
    echo "<td>".$row['nederlands']."</td>"."<br>";
    echo "<td>".$row['wiskunde']."</td>"."<br>";
    echo "<td>".$row['engels']."</td>"."<br>";
    echo "<td>".$row['sport']."</td>"."<br>";
    echo "<td>".$row['beropesgericht']."</td>"."<br>";
    echo "<td>".$row['LB']."</td>"."<br>";
    echo "</tr>";
}

?>
  </table>
</body>
<script src="https://kit.fontawesome.com/70211edd98.js" crossorigin="anonymous"></script>
</html>