<?php

        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");        
        $sql = "SELECT shoebrand, count(*) AS number FROM shoes GROUP BY shoebrand";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FashionFeets |Database</title>
<link rel="stylesheet" href="css/stylerr.css">
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
  google.charts.load('current', {packages: ['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart()
  {
      var data = google.visualization.arrayToDataTable([
          ['Brand','Number'],
          <?php 
            while ($row = mysqli_fetch_array($result)) 
            {
                echo "['".$row["shoebrand"]."', ".$row["number"]."],";
            }
          ?>
      ]);
      var options = {
          title: 'Percentage Of Shoe Brands'
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data,options);  
  }

//   function drawwChart()
//   {
//       var dataa = google.visualization.arrayToDataTable([
//           ['Gender','Number'],
//           <?php
//             $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");        
//             $sqll = "SELECT gender, count(*) AS number FROM shoes GROUP BY gender";
//             $resullt = mysqli_query($conn, $sqll) or die("Query unsuccesful");
//             while ($row = mysqli_fetch_array($resullt)) 
//             {
//                 echo "['".$row["gender"]."', ".$row["number"]."],";
//             }
//           ?>
//       ]);
//       var optionss = {
//           title: 'Percentage Of Male/Female'
//       };
//       var chartt = new google.visualization.PieChart(document.getElementById('picchart'));
//       chartt.draw(dataa,optionss);  
//   }

</script>
  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
 
</head>
<body>
    <div id="wrapper"  style="background-color:white;">
        <div id="header">
            <h1>FashionFeets Database</h1>
        </div>
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
                </li>
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
                    <?php if (isset($_SESSION['username'])): ?>
                    <a href="index.php?logout='1'">Log Out</a>
                </li>
                    <?php endif ?>
            </ul>
        </div>

    

<div id="main-content">
<h2>Brand Pie Chart</h2>
<div id="piechart" style="width:900px; height:500px;">
</div>

</div>
</div>
</div>
</body>
</html>
