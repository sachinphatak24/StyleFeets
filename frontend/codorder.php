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


  <title>Fashion Feets|Order Summary</title>
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
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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

        </div>
</nav>

  <div class="container contact">
    <div class="row">
      <div class="col-sm-9">
        <form action="codorderform.php" method="POST">
          <div class="form-row">    
          <div class="form-group col-md-6">
            <label for="formGroupExampleInput">Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput"
              Required>
          </div>    
          <div class="form-group col-sm-6">
            <label for="formGroupExampleInput2">Email </label>
            <input type="email" name="email" class="form-control" id="formGroupExampleInput2" 
              Required>
          </div>
          <div class="form-group col-sm-6">
            <label for="formGroupExampleInput3">Phone </label>
            <input type="number" name="phone" class="form-control" id="formGroupExampleInput3"
              Required>
          </div>
          <div class="form-group col-sm-6">
            <label for="formGroupExampleInput3">Pin Code</label>
            <input type="number" name="pincode" class="form-control" id="formGroupExampleInput3" 
              Required>
          </div>
          <div class="form-group col-sm-6">
            <label for="exampleFormControlTextarea1">Locality</label>
            <input type="text" name="locality" class="form-control" id="formGroupExampleInput3" 
              Required>
          </div>
          <div class="form-group col-sm-12">
            <label for="exampleFormControlTextarea1">Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput3" 
              Required>
          </div>
          <div class="form-group col-sm-6">
            <label for="exampleFormControlTextarea1">City</label>
            <input type="text" name="city" class="form-control" id="formGroupExampleInput3" 
              Required>
          </div>
          <div class="form-group col-sm-4">
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
          <div class="form-group col-sm-6">
            <label for="exampleFormControlTextarea1">Landmark</label>
            <input type="text" name="landmark" class="form-control" id="formGroupExampleInput3" 
              Required>
          </div>
          </div>

            <?php
                        $total = 0;
                        $desc='';
                        if(isset($_SESSION['cart'])) 
                        {
                        
                        
                        foreach($_SESSION['cart'] as $key => $value)
                    {
                    $sr= $key+1;
                    $total= $total+$value['price'];
                    $desc .= $value['item_name'];
                    echo"
                    <input type='hidden' name='amount' value='$total' >
                    <input type='hidden' name='description' value='$desc' >
                    ";
                    
                }
            }  
            
            ?>

        <button type="submit" class="btn btn-primary">Confirm Order</button>
        </form>
        </div>
        <div class="col-sm-3">
        <div class="border bg-light rounded p-4">
          <h3>Total:</h3>
          <hr>
          <h5 class="text-left">₹ <?php echo $total ?></h5>
          <hr>
          <form>
            <div class="form-check">
              <input class="form-check-input" type="radio" checked name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label btn btn-primary" for="flexRadioDefault1" >
                Cash On Delivery
              </label>
            
            </div>
            
            </form>
          
            </form>

               <hr>
      </div>
    </div>
      </div>
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