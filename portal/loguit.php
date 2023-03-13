<?php
session_start();
unset($_SESSION['idleerling']);
header("location:/fullstackproject/home/home.php");

?>