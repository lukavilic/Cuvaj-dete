<?php
    include 'connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!$username or !$email or !$password) {
        die("Greska!!! Jedno ili vise polja je prazno!!!");
    }

    $query = "insert into user(username, email, password) values('$username', '$email', '$password')";
    mysqli_query($conn, $query);
    
    mysqli_close($conn);
?>