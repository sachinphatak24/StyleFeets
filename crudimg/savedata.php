<?php
echo $shoe_name = $_POST["shoename"];
echo $shoe_brand = $_POST["shoebrand"];
echo $shoe_type = $_POST["stype"];
echo $shoe_gender = $_POST["gtype"];
echo $shoe_price = $_POST["shoeprice"];
echo $shoe_qty = $_POST["shoeqty"];

$files = $_FILES['file'];
// print_r($files);

$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];
$fileext = explode('.',$filename);
$filecheck = strtolower(end($fileext));

$fileextstored = array('png','jpg','jpeg');


if(in_array($filecheck,$fileextstored)){
    $destinationfile = 'upload/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
   





$conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");




$sql = "INSERT INTO shoes(shoename,shoebrand,stype,gtype,shoeprice,shoeqty,shoeimg) VALUES ('{$shoe_name}','{$shoe_brand}','{$shoe_type}','{$shoe_gender}','{$shoe_price}','{$shoe_qty}','{$destinationfile}')";
$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

}else{
    
$conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");




$sql = "INSERT INTO shoes(shoename,shoebrand,stype,gtype,shoeprice,shoeqty,shoeimg) VALUES ('{$shoe_name}','{$shoe_brand}','{$shoe_type}','{$gender_type}','{$shoe_price}','{$shoe_qty}','{$destinationfile}')";
$result = mysqli_query($conn, $sql) or die("Query unsuccesful");




}


header("location: http://localhost/fp/crudimg/index.php");

mysqli_close($conn);

?>