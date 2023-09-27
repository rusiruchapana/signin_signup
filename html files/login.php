



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
                <form action="">
                    <h1 class="title">Login page</h1>
        
                    <label for="username">Enter username:</label>
                    <input type="text" name="username" id="username"><br><br>
        
                    <label for="password">Enter password:</label>
                    <input type="password" name="password" id="password"><br><br>
        
                   
                   <button class="signup_btn"><a href="signup.php">Signup</a></button>
                   <button class="login_btn">login</button>
                   
        
        
                </form>
            </div>
          
    </div>
</body>
</html>