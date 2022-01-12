<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="./styles.css">
  <?php
include 'header.php';
?>



  <title>FashionFeets |Database</title>
</head>

<body>

  <div class="about-1 container" style="font-family:-">
    <div class="about">
      <h1>Insert And Delete Log History</h1>
    </div>
    <h3>Insert History:-</h3>
    
<?php
        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
        
        $sql = "SELECT * FROM insertrecord";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
            
    ?>
     <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
    ?>
    

    <p><?php echo $row['activity']; ?></p>
      
      
  <?php } 
            
        }  
        ?>

    <h3>Delete History:-</h3>
    
<?php
        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
        
        $sql = "SELECT * FROM deleterecord";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");
        
        if(mysqli_num_rows($result)>0){ 
            
            ?>
     <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
            ?>
    

    <p><?php echo $row['activity']; ?></p>
      
      
  <?php } 
            
        }  
        ?>
        </div>
        </div>

        </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
    crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>

