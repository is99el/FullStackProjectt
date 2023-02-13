<?php

$user="portaal";
$pass="12localhost3";
try {
    $con = new PDO('mysql:host=localhost;dbname=portaal;port=3306', $user, $pass);
    foreach($con->query('SELECT * from leerling') as $row) {
//        print_r($row);

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
$query="SELECT * FROM leerling";
$stmt=$con->prepare($query)or die("error1.");
$stmt->execute() or die ("error 2.");
