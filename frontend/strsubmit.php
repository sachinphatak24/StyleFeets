<?php
session_start();
?>


<?php

      if(isset($_SESSION['cart'])) 
      {
        foreach($_SESSION['cart'] as $key => $value)
        {  
          
      print_r($value); 
          $values =  $value['item_name'];  
        }
      }  
      print_r($values);


      ?>











<?php

print_r("cool");
print_r($value);
print_r("cool");
print_r($values);
      $total = 0;
      
      if(isset($_SESSION['cart'])) 
      {
        
        
        foreach($_SESSION['cart'] as $key => $value)
        {
          $sr= $key+1;
          $total= $total+$value['price'];
        }
      }  
      ?>




<?php
              $totall=$total * 100;
              ?>


<?php

require('strconfig.php');
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>"$totall",
		"currency"=>"inr",
		
		"description"=>"$values",
		"source"=>$token,
	));

	echo "<pre>";
  header('location: success.php'); 
  session_unset();
}
?>


