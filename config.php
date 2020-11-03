<?php

include('stripe-php-master/stripe-php-master/init.php');
$pkey="pk_test_51Hj5HiFY3uo8Yg9wnY0VSQD21jBbZt9vgavK5EygQHmXxWIXSZAjjnZ1WH0bIbDOOIBP0whOY6yRD5fManodNYRs00K3JPrTIo";
$skey="sk_test_51Hj5HiFY3uo8Yg9wKXDPwfEMAwfn99yc8oFxAj7fjRSAZuwnTBLWPU8HNKYfojFbJdDV31RH9VHUuFwrhQDQgOkg00z1zdFt6m";
\Stripe\Stripe::setApiKey($skey);
?>