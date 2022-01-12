<?php 


session_start();

if (isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in to view this page";
    header("locaton: login.php");
}

if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title> 
</head>
<body>

<h1>This is the Homepage</h1>
<?php
if (isset($_SESSION["success"])): ?> 
    <div>
        <h3>
            <?php
      
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            
            ?>
        </h3>
    </div>
<?php endif ?>

<!-- If the user logs in print info abt him  -->
<?php if (isset($_SESSION['username'])): ?>
    <h3>Welcome <strong><?php echo $_SESSION['username']; ?> </strong></h3>

    <button><a href="index.php?logout='1'">Log Out</a></button>

<?php endif ?>
</body>
</html>