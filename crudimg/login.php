<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
        <h2>Log in</h2>
        </div>
        <form action="login.php" method= "post">
        
        <div>
        <label for="username">Username:</label>
        <input type="text" name="username">
        </div>
   
        
        <div>
        <label for="password"> Password:</label>
        <input type="password" name="password_1">
        </div>

     
        <button type="submit" name="login_user">Submit </button>

        <p>Not A User?  <a href="reg.php"><b>Register Here</b></a></p>

        </form>
    </div>    
</body>
</html>