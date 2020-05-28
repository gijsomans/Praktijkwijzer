<?php
include '../includes/db.php';


if(isset($_POST['username'])){
    $us = $_POST['username'];
    $pw = $_POST['password'];
    $sql = $conn->query("select username,password from Users where username = '$us' and password = '$pw'");
    $result = $sql->fetch();
}else{
    $result = false;
    echo $_POST['username'];
    echo $_POST['password'];

    echo "jemoeder";
}

if($result){
    $_SESSION['username'] = $_POST['username'];
    header('Location: ../home.php' );
}else{
    header('Location: ../index.php' );
}
?>