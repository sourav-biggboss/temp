<?php


include('config.php');
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$v=\Stripe\Charge::create(array(
"amount"=>10,
"description"=>"test",
"currency"=>"inr",
"source"=>$token
));
print_r($v);
?>