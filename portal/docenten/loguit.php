<?php
session_start();
unset($_SESSION['idDocent']);
header("location:/fullstackproject/home/home.php");

?>