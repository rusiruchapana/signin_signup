<?php
   
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
                    


                    <label for="signup_email">Enter email:</label>
                    <input type="email" name="signup_email" id="signup_email"><br><br>
                    

        
                    <label for="signup_password">Enter password:</label>
                    <input type="password" name="signup_password" id="signup_password"><br><br>
                    

                    
                    <a href="login.php">
                        <input type="text" value="login">
                    </a>
                  
                    <input type="submit" value="Signup" name="signup_signup_btn" class="signup_signup_btn">

                    
        
                </form>
            </div>
          
    </div>
    </body>
</html>