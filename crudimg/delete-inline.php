<?php

$shoe_id = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM shoes WHERE shoeid = {$shoe_id}";


$result = mysqli_query($conn, $sql) or die("Query unsuccesful");


header ("location: http://localhost/fp/crudimg/index.php");

mysqli_close($conn);


?>
