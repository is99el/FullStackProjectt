<?php
require 'conecntion.php';

if(isset($_POST['submit'])){
$leerlingnummmer=$_POST['id'];
$naam=$_POST['naam'];
$tussenvoegsels=$_POST['tussenvoegsels'];
$achternaam=$_POST['achternaam'];
$email=$_POST['email'];
$wachtwoord=$_POST['wachtwoord'];
try{
$sql="INSERT INTO leerling(idLeerling,Email,Naam,Tussenvoegsels,Achternaam,Wachtwoord)  VALUES ($leerlingnummmer,'$email','$naam','$tussenvoegsels','$achternaam','$wachtwoord')";
$stmt = $con->prepare($sql);
$resul = $stmt->execute();
if ($resul === false) {
    echo "Niet Aangemaakt";
} else {
echo '<script>alert("Je account is aangemaakt")</script>';
header("Location: /fullstackproject/login/login.php");
die();
}
}catch(PDOException $abc){

echo 'het is niet gelukt';


}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/fullstackproject/signup/signup.css">
  <title>SignUp</title>
</head>
<body>
<div class="container2">  
<form action=""method="post">
<h1>Aanmelden</h1>  
  <input type="text" name="id" id="nm" placeholder="Leerling Nummer"></br>
  <input type="text" name="naam" id="nm" placeholder="Naam"></br>
  <input type="text" name="tussenvoegsels" id="ts" placeholder="Tussenvoegsels(optioneel)"></br>
  <input type="text" name="achternaam" id="ac" placeholder="Achternaam"></br>
   <input type="email" name="email" id="em" placeholder="Email"></br>
   <input type="password" name="wachtwoord" id="ww" placeholder="Wachtword"></br>
<input type="submit" name="submit" id='sb' value="Aanmelden">
<a href="/fullstackproject/login/login.php" id="acc">Heb je al een account?</a>
</form>
</div>
</forum>

</body>