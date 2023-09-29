<?php
    //make connection
    include("DB_connect.php");


    //error validate
    $errors = array("username"=>"", "email"=>"", "password"=>"");
    $username1=$email1=$password1="";

    if(isset($_POST["signup_signup_btn"])){
        if(empty($_POST["signup_username"])){
            $errors["username"] = "Please enter a username!.";
        }else{
            $username1 = $_POST["signup_username"];
        }

        if(empty($_POST["signup_email"])){
            $errors["email"] = "Please enter a email!.";
        }else{
            if(!filter_var($_POST["signup_email"], FILTER_VALIDATE_EMAIL)){
                $errors["email"] = "Enter valid email address!.";
            }else{
                $email1 = $_POST["signup_email"];
            }
        }
        

        if(empty($_POST["signup_password"])){
            $errors["password"] = "Enter a password!.";
        }else{
            $password1 = $_POST["signup_password"];
        }


        //Do database operations
        if(!array_filter($errors)){
            // echo "No errors!!!!!!!!!.";
            $username1 = mysqli_real_escape_string($conn, $_POST["signup_username"]);
            $email1 = mysqli_real_escape_string($conn, $_POST["signup_email"]);
            $password1 = mysqli_real_escape_string($conn, $_POST["signup_password"]);

            $sql = "insert into operation(username, email, password) values('$username1', '$email1', '$password1')";

            if( mysqli_query($conn, $sql)){
                echo "New record is added;";
            }else{
                echo "Not added;";
            }
           
        }else{
            echo "There are errors in the form.";
        }

        mysqli_close($conn);
    }
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="signup.css">
    </head>

    <body>
        <div class="signup_main">
            <div>
                <form action="signup.php" method="POST">
                    <h1 class="signup_title">Register page</h1>
        
                    <label for="signup_username">Enter username:</label>
                    <input type="text" name="signup_username" id="signup_username"><br><br>
                    <div class="error_username" style="color: red;"><?php echo $errors["username"] ?></div><br>


                    <label for="signup_email">Enter email:</label>
                    <input type="email" name="signup_email" id="signup_email"><br><br>
                    <div class="error_email" style="color: red;"><?php echo $errors["email"] ?></div><br>

        
                    <label for="signup_password">Enter password:</label>
                    <input type="password" name="signup_password" id="signup_password"><br><br>
                    <div class="error_password" style="color: red;"><?php echo $errors["password"] ?></div><br>
             


                    
                    <a href="login.php">
                        <input type="text" value="login">
                    </a>
                  
                    <input type="submit" value="Signup" name="signup_signup_btn" class="signup_signup_btn">

                    
                    
        
                </form>
            </div>
          
    </div>
    </body>
</html>