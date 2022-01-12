<?php
require('stripe-php-master/init.php');


$publishableKey="pk_test_51I8rD2AHhtYBhCYB0zTGX5hZ5yNzpmiJFUWafjVHuGxdlKG7yIHHvr10mlFh7N9ul8qJfryISkqepLQFX555wHr200opKrnzwx";

$secretKey="sk_test_51I8rD2AHhtYBhCYBBSDXCeUwo0fs1hONhZo52HwZHYySqX0cE5pxD9MIc8mUFN1jULmJSJdmm2TaAW8gzdfdN4BW00aUwCpU82";

\Stripe\Stripe::setApiKey($secretKey);
?>