<?php
include '../includes/db.php';

$id = $_GET['id'];

$conn->query("UPDATE Klachten SET completed='1' WHERE id=$id");


    header('Location: overzicht.php' );
?>

