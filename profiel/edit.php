<?php
require 'conecntion.php';
session_start();
$idleerling=$_SESSION['idleerling'];

if(isset($_POST['submit'])){
$leerlingnummmer=$_POST['id'];
$naam=$_POST['naam'];
$tussenvoegsels=$_POST['tussenvoegsels'];
$achternaam=$_POST['achternaam'];
$email=$_POST['email'];
$wachtwoord=$_POST['wachtwoord'];
try{
$sql="INSERT INTO leerling(idleerling,email,naam,tussenvoegsels,achternaam,wachtword)  VALUES ($leerlingnummmer,'$email','$naam','$tussenvoegsels','$achternaam','$wachtwoord')";
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
  <title>Update</title>
</head>
<body>
<div id="ff">
<div class="container2">  
<form action=""method="post">
<h1>Update</h1> 
<?php
$idleerling=$_SESSION['idleerling'];
$id=$_GET['idleerling'];
$query="SELECT * FROM gegevens Where id=$id LIMIT 1";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");

?> 
  <input type="text" name="id" id="nm" placeholder="Leerling Nummer" value="<?php echo $row['idleerling']?>"></br>
  <input type="text" name="naam" id="nm" placeholder="Naam"></br>
  <input type="text" name="tussenvoegsels" id="ts" placeholder="Tussenvoegsels(optioneel)"></br>
  <input type="text" name="achternaam" id="ac" placeholder="Achternaam"></br>
   <input type="email" name="email" id="em" placeholder="Email"></br>
   <input type="password" name="wachtwoord" id="ww" placeholder="Wachtword"></br>
<input type="submit" name="submit" id='sb' value="update">
<a href="/fullstackproject/login/login.php" id="acc">Heb je al een account?</a>
</form>
</div>
</div>

</body>