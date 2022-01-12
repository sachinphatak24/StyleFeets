<?php

  session_start();
  

  $con =mysqli_connect('localhost','root','','crudimg') or die("oops") ;


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $pincode= $_POST['pincode'];
  $locality = $_POST['locality'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $landmark = $_POST['landmark'];
  $total = $_POST['amount'];
  $description = $_POST['description'];


    $qy="INSERT INTO codorders (name,email,mobileno,pincode,locality,address,city,state,landmark,amount,description) VALUES ('$name','$email','$phone','$pincode','$locality','$address','$city','$state','$landmark','$total','$description')" or die("unsucc"); 
    mysqli_query($con,$qy); 
    
    header('location: success.php');
    session_unset();

    ?> 


    
    
  




