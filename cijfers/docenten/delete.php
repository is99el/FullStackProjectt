<?php
require 'conection.php';
$id=$_GET['id'];
$query = "DELETE FROM leerling WHERE idleerling=$id"; 
$stmt = $con->prepare($query);
$resul = $stmt->execute();
header("Location: leerlingen.php"); 
?>
