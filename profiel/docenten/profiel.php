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
    <i class="fa-sharp fa-solid fa-house-chimney"><a href="/fullstackproject/portal/docenten/portal.php"><li>Home</li></a></i>
    <i class="fa-sharp fa-solid fa-school-circle-xmark"><a href="/fullstackproject/cijfers/docenten/cijfers.php"><li>Cijfers</li></a></i> 
    <i class="fa-solid fa-user"><a href="/fullstackproject/profiel/docenten/profiel.php"><li>Profiel</li></a></i>
    <i class="fa-solid fa-power-off"><a href="/fullstackproject/portal/docenten/loguit.php" class="button">Uitloggen</a></i>
    </ul>
  
  <script>
    function show() {
      document.getElementById('sidebar').classList.toggle('active');
    }
  </script> 
  </div>
  
</div>

<div class="table-container">
  <table class="table">
        <thead>
          <tr>
            <th>Leerlingnummer</th>
            <th>Naam</th>
            <th>Tussenvoegsels</th>
            <th>Achternaam</th>
            <th>Email</th>
            <th>#</th>
            <tr>  
        </thead>
        <tbody>
        
<?php
require 'conection.php';
session_start();
$idDocent=$_SESSION['idDocent'];

$query="SELECT * FROM docent WHERE idDocent=$idDocent";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

while($row=$stmt->fetch()){
    echo "<tr>";
    echo "<td data-label='ID Nummer'>".$row['idDocent']."</td>";
    echo "<td data-label='Naam'>".$row['naam']."</td>";
    echo "<td data-label='Tussenvoegsels'>".$row['tussenvoegsels']."</td>";
    echo "<td data-label='Achternaam'>".$row['achternaam']."</td>";
    echo "<td data-label='Email'>".$row['email']."</td>";
    echo "<td data-label='#'><a href='/fullstackproject/profiel/docenten/edit.php' class='btn'>Edit</a></td>";
    echo "</tr>";
}

?>

<tbody>
   </table>
</body>
</html>
<script src="https://kit.fontawesome.com/70211edd98.js" crossorigin="anonymous"></script>