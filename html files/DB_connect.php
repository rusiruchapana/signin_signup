<?php
    $conn = mysqli_connect("localhost", "php_signin_signup", "php_signin_signupbB@", "php_signin_signup");

    if(!$conn){
        echo "Connection failed to the database!." . mysqli_connect_error();
    }
?>

