<?php
    require_once("db.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $token = "probe";
    
    
    $query = "INSERT INTO users(username, password, name, lastname, email, token) VALUES ('$username', '$password', '$name', '$lastname', '$email', '$token')";
    $result = mysqli_query($conn, $query);
    
    if (!$result){
        die('Query failed,');
    }


?>

