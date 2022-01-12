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
  <link rel="stylesheet" href="./css/styles.css">


  <title>Fashion Feets| Admin Account</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <h2>FashionFeets</h2>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./home.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Shop For
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="./shop_for_gents.html">Men</a>
            <a class="dropdown-item" href="./shop_for_women.html">Women</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./about.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.html">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./account.html">Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./cart.html"><button type="button" class="btn btn-primary btn-sm">
              Cart <span class="badge badge-light">4</span>
            </button></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

<div class="container mt-4">
  <h3>Please Log into Your Admin Account !</h3>
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="formGroupExampleInput">Username</label>
      <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="username"
        Required>
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Password</label>
      <input type="Password" class="form-control" id="formGroupExampleInput2" placeholder="Password" name="password_1"
        Required>
    </div>
    <button type="button" class="btn btn-primary">Log In</button>
  </form>
<!--   
  <div class="mt-4">
    <p>Not Registered ? <a href="./signup.html">Sign Up Now!</a></p>
  </div>
</div> -->

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