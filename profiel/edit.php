<?php
require 'conection.php';

if(isset($_POST['submit'])){
$leerlingnummer=$_POST['id'];
$naam=$_POST['naam'];
$tussenvoegsels=$_POST['tussenvoegsels'];
$achternaam=$_POST['achternaam'];
$email=$_POST['email'];
$wachtwoord=$_POST['wachtwoord'];
try{
$query="UPDATE leerling 
SET  naam='".$naam."', tussenvoegsels='".$tussenvoegsels."',achternaam='".$achternaam."',email='".$email."',wachtword='".$wachtwoord."'
WHERE idleerling='".$leerlingnummer."'";
$stmt = $con->prepare($query);
$resul = $stmt->execute();
if ($stmt->rowCount() > 0) {
  header("Location:/fullstackproject/profiel/profiel.php");
  
} else {
  echo '<script>alert("Je account is niet geupdated")</script>';
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
session_start();
$idleerling=$_SESSION['idleerling'];
$query="SELECT * FROM leerling WHERE idleerling=:idleerling";
$stmt=$con->prepare($query) or die("error1.");
$stmt->execute(array("idleerling" => $idleerling)) or die ("error 2.");
$row=$stmt->fetch();
?> 
  <input type="text" name="id" id="nm" placeholder="Leerling Nummer" value="<?php echo $row['idleerling']?>"></br>
  <input type="text" name="naam" id="nm" placeholder="Naam" value="<?php echo $row['naam']?>"></br>
  <input type="text" name="tussenvoegsels" id="ts" placeholder="Tussenvoegsels(optioneel)" value="<?php echo $row['tussenvoegsels']?>"></br>
  <input type="text" name="achternaam" id="ac" placeholder="Achternaam" value="<?php echo $row['achternaam']?>"></br>
  <input type="email" name="email" id="em" placeholder="Email" value="<?php echo $row['email']?>"></br>
  <input type="password" name="wachtwoord" id="ww" placeholder="Wachtword" value="<?php echo $row['wachtword']?>"></br>
<input type="submit" name="submit" id='sb' value="Update">

</form>
</div>
</div>

</body>