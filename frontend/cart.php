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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">

    <title>Fashion Feet|Cart</title>
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

        </div>
    </nav>



  <div class="container">
     <div class="row">
      
      <div class="col-lg-12 text-center border rounded bg-light my-5">
        <h1>My Cart</h1>
      </div>  
      
    <div class="col-lg-9">
    <table class="table">
    <thead class='text-center'>
      <tr>
        <th scope="col">Serial No.</th>
        <th scope="col">Item Name</th>
        <th scope="col">Item Price</th>
        <th scope="col">Quanity</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody class="text-center">
      <?php
      $total = 0;

      if(isset($_SESSION['cart'])) 
      {
        foreach($_SESSION['cart'] as $key => $value)
        {
          $sr= $key+1;
          $total= $total+$value['price'];
          
          echo"
          <tr>
          <td>$sr</td>  
          <td>$value[item_name]</td>  
          <td>$value[price]</td>  
          <td>$value[quantity]</td>  
          <td>
          <form action='managecart.php' method='POST'>  
          <button name='remove_item' class='btn btn-sm btn-outline-danger'>Remove</button>  
          <input type='hidden' name='item_name' value='$value[item_name]'> 
          </form>
          </td>
          <tr>
          ";

        }
      }  
      ?>
    
    </tbody>
  </table>
  </div>
      <div class="col-lg-3">
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
          
          <?php
              require('strconfig.php');
              $totall=$total * 100;
              ?>
              <p></p>
            <p style="text-align:center;">Or</p>
            <form action="strsubmit.php" method="post">
              <script
                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                data-key="<?php echo $publishableKey?>"
                data-amount="<?php echo $totall?>"
                data-name="Fashion Feets"
                data-description="Premium"
                data-currency="inr"
                
              >
              </script>

            </form>
               <hr>
              <a class="btn btn-primary btn-block" href="./codorder.php">Place Order</a>
      </div>
    </div>

    </div>
</div>
   
 



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>

