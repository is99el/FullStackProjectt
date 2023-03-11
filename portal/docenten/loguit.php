<?php
session_start();
unset($_SESSION['idDocent']);
header("location:/fullstackproject/login/docenten/login.php");

?>