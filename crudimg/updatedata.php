<?php 
 
 $shoe_id = $_POST['shoeid'];
 $shoe_name = $_POST['shoename'];
 $shoe_brand = $_POST['shoebrand'];
 $shoe_price = $_POST['shoeprice'];
 $shoe_qty = $_POST['shoeqty'];
 $shoe_type = $_POST['stype'];
 $shoe_gender = $_POST['gtype'];

$conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");

$sql = "UPDATE shoes SET shoename = '{$shoe_name}', shoeqty= '{$shoe_qty}' , shoebrand = '{$shoe_brand}', stype = '{$shoe_type}', gtype = '{$shoe_gender}', shoeprice= '{$shoe_price}' WHERE shoeid = {$shoe_id}";
$result = mysqli_query($conn, $sql) or die("Query unsuccesful");

header("location: http://localhost/fp/crudimg/index.php");

mysqli_close($conn);




?>