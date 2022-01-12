<?php 


session_start();

if (isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must log in to view this page";
    header("locaton: ./account.php");
}

if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: ./homee.php");
}

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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Fashion Feet|Home</title>
</head>
<!-- <i class="fas fa-shoe-prints"></i> -->
<!--  <img src="iconshoe.jpg" width="80" height="50" alt=""> -->
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
                    <a class="nav-link" href="./contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./about.php">About</a>
                </li>

                <?php if (isset($_SESSION['username'])): ?>
                <li class="nav-item display:none;">
                    <?php else: ?>
                    <a class="nav-link" href="./account.php">Account</a>
                    <?php endif ?>
                </li>
                <?php
                
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

            </ul>

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
</ul>


<!-- ///////////////////////////////////////// -->



        </div>
    </nav>









    
    <?php
        if (isset($_SESSION["success"])): ?> 
            <div>
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);            
                    ?>
                </h3>
            </div>
    <?php endif ?>


    
    <div class="alert alert-success" role="alert">
        <h3>Welcome<!-- If the user logs in print info abt him  -->
        <?php if (isset($_SESSION['username'])): ?>
            <?php $user = $_SESSION['username'] ?>
    <strong><?php echo  ucfirst($user) ?> </strong>!</h3>
    <?php endif ?>
<h3> Shop With Us And Stay In Trend...</h3>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./carousel1..jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Looking For A Shoe?</h2>
                    <h4>Check Out Our New COllection Exclusive For Men. <a href="./shop_for_gents.php"><button
                                type="button" class="btn btn-success btn-sm">Shop Now!</button></a></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./carousel2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Party? Then A Heel is Must!</h2>
                    <h4>Look Out Our Exclusive Party Heel Collection. <a href="./shop_for_women.php"><button
                                type="button" class="btn btn-success btn-sm">Buy Now!</button></a></h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="best_sellers container">
        <h1 style="text-align:center; color: darkslategrey;">BEST SELLERS</h1>
    </div>

    <?php
        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
        
        $sql = "CALL `getbestsellersmale`();";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
            
    ?>

    <div class="card-group">
        <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
    ?>

        <div class="card">
            <img src=" <?php echo $row['shoeimg']; ?>"  class="card-img-top" alt="...">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['shoename'];?></h5>
                <p class="card-text">
                <h2>Rs.<?php echo $row['shoeprice'];?> /-</h2>
                <h3><a href="moreinfo.php?id=<?php echo $row['shoeid'];?>"><button type="button" class="btn btn-dark">Buy Now</button></a></h3>
                </p>
            </div>
        </div>
        <?php } 
            mysqli_close($conn);   
            
            
            ?>
    </div>




    <?php }else{
                echo"<h2>No Records Found</h2>";
            } 
 ?>

<!-- ----------------------------------------------------- -->
<?php
        $conn = mysqli_connect("localhost","root","","crudimg") or die("Connection Failed");
        
        $sql = "CALL `getbestsellersfemale`();";
        $result = mysqli_query($conn, $sql) or die("Query unsuccesful");

        if(mysqli_num_rows($result)>0){ 
            
    ?>

    <div class="card-group">
        <?php 
        while ($row = mysqli_fetch_assoc($result)) { 
    ?>

        <div class="card">
            <img src=" <?php echo $row['shoeimg']; ?>"  class="card-img-top" alt="...">
            
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['shoename'];?></h5>
                <p class="card-text">
                <h2>Rs.<?php echo $row['shoeprice'];?> /-</h2>
                <h3><a href="moreinfo.php?id=<?php echo $row['shoeid'];?>"><button type="button" class="btn btn-dark">Buy Now</button></a></h3>
                </p>
            </div>
        </div>
        <?php } 
            mysqli_close($conn);   
            
            
            ?>
    </div>




    <?php }else{
                echo"<h2>No Records Found</h2>";
            } 
 ?>



    <div class="trusted_partners">
        <h1 style="text-align:center; color: darkslategrey;">TRUSTED PARTNERS</h1>
    </div>

    <div class="container trusted_partners-1">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <img src="./nike.png" alt="">
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="./dknny.png" alt="">
            </div>
            <div class="col-lg-4 col-sm-12">
                <img src="./adidas.png" alt="">
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

