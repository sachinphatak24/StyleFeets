<?php

  session_start();
  

  $con =mysqli_connect('localhost','root','','crudimg') ;


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];
  

  /*$q ="select * from signup where email='$email' && password='$password' ";

  $result =mysqli_query($con,$q); 

  $num =mysqli_num_rows($result);

  if($num==1){
    echo "Duplicate data";

  }else{*/
    $qy="INSERT INTO contact (name,email,phone,msg) VALUES ('$name','$email','$phone','$msg')"; 
    mysqli_query($con,$qy); 
    
    header('location: succ.php');
    ?> 
    
    
  




