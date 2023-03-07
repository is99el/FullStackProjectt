<?php
session_start();
unset($_SESSION['idleerling']);
header("location:/fullstackproject/login/login.php");

?>