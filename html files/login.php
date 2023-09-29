<?php
    include("DB_connect.php");

    $errors2 = array("username"=>"", "password"=>"");
    $username2;
    $password2;

    if(isset($_POST["login_login_btn"])){
        //to find errors in the fields
        if(empty($_POST["username"])){
            $errors2["username"] = "Username field is empty!.";
        }else{
            $username2 = $_POST["username"];
        }

        if(empty($_POST["password"])){
            $errors2["password"] = "Password field is empty!.";
        }else{
            $password2 = $_POST["password"];
        }

        //for login part
        if(!array_filter($errors2)){
            $sql = "select username,password from operation where username ='$username2' and password ='$password2' ";
            $result2 = mysqli_query($conn, $sql);

            if($result2){

                if(mysqli_num_rows($result2)==1){
                    header("Location: home.php");
                }else{
                    //login error
                }

            }else{
                echo "Database not connected!." . mysqli_connect_error();
            }

        }else{

        }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="signup.css">  -->
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .signup_btn{
           margin-left: 135px;
        }
        .login_btn{
            margin-left: 25px;
        }
        .title{
            text-align: center;
        }

    </style>



</head>
<body>
    <div class="main">
            <div>
                <form action="login.php" method="POST">
                    <h1 class="title">Login page</h1>
        
                    <label for="username">Enter username:</label>
                    <input type="text" name="username" id="username"><br>
                    <div style="color: red"><?php echo $errors2["username"] ?></div><br>
        
                    <label for="password">Enter password:</label>
                    <input type="password" name="password" id="password"><br>
                    <div style="color: red"><?php echo $errors2["password"] ?></div><br>
                   
                   <button class="signup_btn"><a href="signup.php">Signup</a></button>
                   <button class="login_btn" name="login_login_btn">login</button>
                   
        
        
                </form>
            </div>
          
    </div>
</body>
</html>