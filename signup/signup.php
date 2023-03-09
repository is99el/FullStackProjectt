<?php
require 'conection.php';


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
    echo '<script>alert("Je account is niet aangemaakt")</script>';
} else {
  echo '
  <div class="popup">
        
        <h2>Welkom!</h2>
        <p>
            Uw account is aangemaakt
        </p>
        <a href="/fullstackproject/login/login.php">Log In!</a>
    </div>
    <!--Script-->
    <script>
    window.addEventListener("load", function(){
      setTimeout(
          function open(event){
              document.querySelector(".popup").style.display = "block";
          },
          1000
      )
  });
  
  
 </script>
    <style>
    body{
      background-image: url(/fullstackproject/images/111-min.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }
    h2{
      color:white;
    }
      .popup{
      background-color: rgba(9, 152, 128, 0.819);
      width: 450px;
      padding: 30px 40px;
      position: absolute;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
      border-radius: 8px;
      font-family: "Poppins",sans-serif;
      display: none;
      text-align: center;
  }
  .popup button{
      display: block;
      margin:  0 0 20px auto;
      background-color: transparent;
      font-size: 30px;
      color: #c5c5c5;
      border: none;
      outline: none;
      cursor: pointer;
  }
  .popup p{
    color:white;
      font-size: 14px;
      text-align: justify;
      margin: 20px 0;
      margin-left:3%;
      line-height: 25px;
  }
  a{
      display: block;
      width: 150px;
      position: relative;
      margin: 10px auto;
      text-align: center;
      background-color: rgba(5, 108, 176, 0.827);
      color: #ffffff;
      text-decoration: none;
      padding: 5px 0;
  }</style>
  ';

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
<div id="ff">
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
</div>

</body>