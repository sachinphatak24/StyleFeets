<?php include('server.php')?>

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
        </div>
    </nav>
    <div class="container mt-4">
        <h3>Sign Up Here !</h3>
        <form action="signup.php" method="post">
        <div class="row mt-4">
                <div class="col">
                    <input type="text"  name="username"class="form-control" placeholder="Username" required>
                </div>
        </div>

       

        
        <?php include('error.php')?>
                        

            <div class="row mt-4">
                <div class="col">
                    <input type="text"  name="fname"class="form-control" placeholder="First name" required>
                </div>
                <div class="col">
                    <input type="text" name="lname" class="form-control" placeholder="Last name" required>
                </div>
            </div>
     
        
            <div class="row mt-4">
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="col">
                    <input type="number" name="pnumber" class="form-control" placeholder="Phone" required>
                </div>
            </div>
     
            <div class="row mt-4">
                <div class="col">
                    <input type="password" name="password_1" class="form-control" placeholder="Password" required>
                </div>
                <div class="col">
                    <input type="password" name="password_2" class="form-control" placeholder="Confirm Password" required>
                </div>
            </div>
            <div class="form-group mt-4 col-md-8">
                    <label for="inputAddress">Gender</label>
                    <select  name="gender" class="form-control" required>
                        <option selected>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            <div class="form-group mt-4">
                <label for="inputAddress">Address</label>
                <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
            </div>
            <!-- <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
            </div> -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputCity">City</label>
                    <input type="text" name="city" class="form-control" id="inputCity" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputState">State</label>
                    <select id="inputState" name="state" class="form-control" required>
                        <option selected>Choose...</option>
                        <option>Andhra Pradesh</option>
                        <option>Arunachal Pradesh</option>
                        <option>Assam</option>
                        <option>Bihar</option>
                        <option>Chattisgarh</option>
                        <option>Goa</option>
                        <option>Gujarat</option>
                        <option>Haryana</option>
                        <option>Himchal Pradesh</option>
                        <option>Jharkhand</option>
                        <option>Karnataka</option>
                        <option>Kerala</option>
                        <option>Madhya Pradesh</option>
                        <option>Maharashtra</option>
                        <option>Manipur</option>
                        <option>Meghalaya</option>
                        <option>Mizoram</option>
                        <option>Nagaland</option>
                        <option>Odisha</option>
                        <option>Punjab</option>
                        <option>Rajasthan</option>
                        <option>Sikkim</option>
                        <option>Tamil Nadu</option>
                        <option>Telangana</option>
                        <option>Tripura</option>
                        <option>Utarakhand</option>
                        <option>Uttar Pradesh</option>
                        <option>West Bengal</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="inputZip">Zip</label>
                    <input type="text" name="zip" class="form-control" id="inputZip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                    <label class="form-check-label" for="gridCheck">
                        Check Me Out
                    </label>
                </div>
            </div>
            <button type="submit" name ="reg_user" class="btn btn-primary">Sign in</button>

            <p>Already A User?    <a href="account.php"><b>Log in</b></a></p>

        </form>

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