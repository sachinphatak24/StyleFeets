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

    <title>Fashion Feet|Home</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="homee.php">
            <h2>FashionFeets</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./homee.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop For
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./shop_for_gents.php">Men</a>
                        <a class="dropdown-item" href="./shop_for_women.php">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./account.php">Account</a>
                </li>
                <?php
                session_start();
                           $count=0;
                            if(isset($_SESSION['cart']))
                            {
                              $count=count($_SESSION['cart']);
                            }
                            ?>
                <li class="nav-item">
                    <a class="nav-link" href="./cart.php"><button type="button" class="btn btn-primary btn-sm">
                            Cart <span class="badge badge-light"><?php echo $count; ?></span>
                        </button></a>
                </li>
            </ul>        </ul>



            
<!-- //////////////////////////////////////   -->
<?php if (isset($_SESSION['username'])): ?>
    <ul class="navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
                    <?php $user = $_SESSION['username'] ?>
                     Logged in as <strong><?php echo ucfirst($user); ?>  </strong>   
                
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="homee.php?logout='1'">  Log Out</a>
                </li>
                <?php endif ?>

        </div>
    </nav>



<!-- ------------------------------------------------------------------ -->
<?php

                    
    $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
    $shoe_id = $_GET['id'];  
    $sql = "SELECT * FROM shoes WHERE shoeid = {$shoe_id}";
    $result = mysqli_query($conn, $sql) or die("Query unsuccesful");
    




    
    if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

?>

    <div class="more-info">

        <form action="managecart.php" method="POST">
         
        <div class="row">

            <div class="col-lg-6 col-sm-12">
                <img src="<?php echo $row['shoeimg']; ?>" alt="">
            </div>

            <div class="col-lg-6 col-md-12 more-info-info">
                <h2>Product Information:</h2>
                <p>Model Name:<?php echo $row['shoename']; ?></p>
                <p>Brand:  <?php echo $row['shoebrand']; ?> </p>
                <p>Type:
                <?php 
                    $sql1 = "SELECT * FROM shoetype";
                    $result1 = mysqli_query($conn,$sql1) or die("Query Unsuccessful");         
                    if (mysqli_num_rows($result1) > 0) {   
                    while($row1 = mysqli_fetch_assoc($result1)){
                        if($row['stype'] == $row1['type_id']){     
                        echo $row1['type_name'];
                        }}
                     } 
                ?></p>
                    
                
                <p>Price : RS.<?php echo $row['shoeprice']; ?>/-</p>
                <p><label for="size">Choose Your Size:</label>

                    <select name="size" id="size">
                        <!-- <option value="5">5</option> -->
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                    </select> </p>



                    <input type="hidden" name="item_img" value="<?php echo $row['shoeimg']; ?>">
                    <input type="hidden" name="item_name" value="<?php echo $row['shoename']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['shoeprice'];?>">
                    <button type="submit" class="btn btn-success" name="add_to_cart" >Add To Cart</button>  
            </div>
        </div>
    </div> 



    <div class="footer">
        <div class="icon">
            <a href="#"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>
            <a class="fb" href="#"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>
        </div>
        <div class="footer-line">
            <p class="text-dark">Copyright 2020. All Rights Reserved.</p>
        </div>
    </div>

<?php }} ?> 

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