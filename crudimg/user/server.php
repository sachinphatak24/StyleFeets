<?php

session_start();
// inititalising variables

$username = "";
$email="";

$errors = array();

// Connect to db 

$db = mysqli_connect('localhost','root','', 'crudimg') or die("Couldnt establish a conection to the database"); 


//reg users  
if(isset($_POST['reg_user'])){
$username = mysqli_real_escape_string($db,$_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation

if(empty($username)) {array_push($error, "Username is Required");}
if(empty($email)) {array_push($error, "Email is Required");}
if(empty($password_1)) {array_push($error, "Password is Required");}
if($password_1!= $password_2) {array_push($errors,"Passwords Do Not Match");}

// check db for existing user with same username 

$user_check_query = "SELECT * FROM adminuser WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
  
if($user){

    if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email){
        array_push($errors, "This Email id already has a registered username");
    }
}


// Reg user 

    if (count($errors)== 0){
    $password = md5($password_1); // encrypt password
    // print $password;  
    $query= "INSERT INTO adminuser (username,email,password) VALUES ('$username', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now Logged in";
    header('location: index.php');
    }
}

// login user

if (isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if(empty($username)){

    array_push($errors, "username is required");

    }

    if(empty($password)){

        array_push($errors, "password is required");
    }
    if(count($errors)===0) {
        $password = md5($password);
        $query= "SELECT * FROM adminuser WHERE username='$username' AND password='$password'";
        $results= mysqli_query($db, $query); 

        if (mysqli_num_rows($results)) {
            $_SESSION['username']= $username;
            $_SESSION['success']= "Logged in successfully";
            header('location: ../index.php');
        }else{
            array_push($errors, "Wrong username/password combination. Please Try again.");
        }
    }
        
}








?>