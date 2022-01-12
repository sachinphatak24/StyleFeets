<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FashionFeets |Database </title>
<link rel="stylesheet" href="css/stylerr.css">

  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
 
</head>
<body>
    <div id="wrapper">
        <div id="header">
            <h1>FashionFeets Database</h1>
        </div>
        <?php if (isset($_SESSION['username'])): ?>

        <div id="menu">
            <ul style="text-align: center">
                <li>
                    <a href="../frontend/homee.php">Website</a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="add.php">Add</a>
                </li>
                <li>
                    <a href="update.php">Update</a>
                </li>
                <li>
                    <a href="delete.php">Delete</a>
                </li>
                <li>
                    <a href="brandchart.php">Brand Chart</a>
                </li>
                <li>
                    <a href="genderchart.php">Gender Chart</a>
                </li>>
                <li>
                    <a href="reports.php">Reports</a>
                </li>
                <li>
                    <a href="customers.php">Customers</a>
                </li>
                <li>
                    <a href="codpayment.php">Payment Record</a>
                </li>
                <li>
                    <a href="log.php">Log History</a>
                </li>
                <li class="coolest">
    <?php endif ?>
                    <?php if (isset($_SESSION['username'])): ?>
                    <a href="index.php?logout='1'">Log Out</a>
                </li>  
                <?php endif ?>
                  
            </ul>
        </div>
