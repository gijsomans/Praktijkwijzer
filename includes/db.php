<?php

$servername = "gijsomans.nl";
$username = "u49677p46778_maas";
$password = "peHojen9";

try {
    $conn = new PDO("mysql:host=$servername;dbname=u49677p46778_maas", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
