<?php

$user="portaal";
$pass="12localhost3";
try {
    $con = new PDO('mysql:host=localhost;dbname=portaal;port=3306', $user, $pass);
    foreach($con->query('SELECT * from cijfers') as $row) {
    //    print_r($row);

    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
