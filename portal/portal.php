<?php
require 'conecntion.php';

$email=trim($_POST['email']);
$password=trim($_POST['wachtwoord']);
//prepare the statement
$stmt = $con->prepare("SELECT * FROM leerling WHERE email=?  AND wachtword=?");
//execute the statement
$stmt->execute([$email, $password]);
//fetch result
$user = $stmt->fetch();
if ($user) {
    echo '<h1 id="welkom">Welkom in het portaal</h1>';
    
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
  <div class="container">

<div class="grid-template-rows">
<h1>Laatste nieuws!</h1>
<a href="https://nos.nl/artikel/2464685-biden-kiest-warschau-als-podium-voor-nieuwe-speech-en-dat-is-geen-toeval"target="_blank"><img src="/fullstackproject/images/1.jpg"></a>
<a href="https://nos.nl/collectie/13922/artikel/2464683-dit-weten-we-nu-over-de-nieuwste-aardbevingen-in-turkije-en-syrie"target="_blank"><img src="/fullstackproject/images/2.jpg"></a>
<a href="https://nos.nl/artikel/2464685-biden-kiest-warschau-als-podium-voor-nieuwe-speech-en-dat-is-geen-toeval"target="_blank"><img src="/fullstackproject/images/1.jpg"></a>
<a href="https://nos.nl/artikel/2464685-biden-kiest-warschau-als-podium-voor-nieuwe-speech-en-dat-is-geen-toeval"target="_blank"><img src="/fullstackproject/images/1.jpg"></a>

</div>
</div>
</body>
<script src="https://kit.fontawesome.com/70211edd98.js" crossorigin="anonymous"></script>
</html>


