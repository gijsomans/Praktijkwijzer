<?php
include '../includes/db.php';

$id = $_GET['id'];

$conn->query("UPDATE Klachten SET completed='0' WHERE id=$id");


    header('Location: archief.php' );
?>

