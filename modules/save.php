<?php

    require_once("db.php");

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $token = "probe";
    
    $query = "INSERT INTO users(password, email, token) VALUES ('$password','$email', '$token')";
    
    if (!empty($password) && !empty($email)) {
        $result = mysqli_query($conn, $query);
    }
    
    if (!$result){
        die('Query failed,');
    }

    header('Location: ../')

?>

