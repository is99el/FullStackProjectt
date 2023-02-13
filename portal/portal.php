<?php
require 'conecntion.php';


$email=trim($_POST['email']);
$password=trim($_POST['wachtwoord']);
//prepare the statement
$stmt = $con->prepare("SELECT * FROM leerling WHERE Email=?  AND Wachtwoord=?");
//execute the statement
$stmt->execute([$email, $password]);
//fetch result
$user = $stmt->fetch();
if ($user) {
    echo "<h1 id='welkom'>Welkom in het portaal</h1>";
}else {
    echo 'De gegevens kloppen niet of de student bestaat niet!';
    echo "<p><a href='/fullstackproject/signup/signup.php'>Aanmelden</a></p>";
    echo "<a href='/fullstackproject/login/login.php'>Terug naar inloggen</br></a>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="stylesheet" href="portal.css">
</head>
<body>    
</body>
</html>


