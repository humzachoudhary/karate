<?php
$username = "1415481";
$password = "chelsea123";
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db1415481', $username, $password);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}




?>