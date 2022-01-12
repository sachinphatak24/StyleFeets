
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
          ['Gender','Number'],
          <?php 
            while ($row = mysqli_fetch_array($result)) 
            {
                echo "['".$row["g_type"]."', ".$row["number"]."],";
            }
          ?>
      ]);
      var options = {
          title: 'Percentage Of Male/Female Brands'
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data,options);  
  }

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
                <!-- https://dashboard.stripe.com/test/payments?status%5B%5D=successful -->
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
    <h2>All Customers</h2>
    <?php
        include 'config.php';
        
        $sql = "SELECT * FROM casualuser";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
    ?>

<!-- cellpadding="7px" -->
<div style="overflow-x:auto;">
    <table cellpadding="7px" >
        <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone No.</th>
        <th>Gender</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        </thead>
        <tbody>
        <?php 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?>
            <tr>
                <td> <?php echo $row['casid'];?></td>
                <td> <?php echo $row['username']; ?></td>
                <td> <?php echo $row['email']; ?></td>
                <td> <?php echo $row['pnumber']; ?></td>
                <td> <?php echo $row['gender']; ?></td>
                <td> <?php echo $row['fname']; ?></td>
                <td> <?php echo $row['lname']; ?></td>
                <td> <?php echo $row['address']; ?></td>
            </tr>
            <?php } 
            mysqli_close($conn);   
            
            
            ?>
        </tbody>
    </table>
</div>
        <?php }else{
                echo"<h2>No Records Found</h2>";
            } 
 ?>


</div>
</div>
</body>
</html>
