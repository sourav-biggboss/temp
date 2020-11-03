<?php


include('config.php');

?>

<html>
  <body>
    <form action="submit.php" method="post">
      djj
<script src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="<?php echo $pkey; ?>"
        data-name="test"
        data-amount="10"
        data-description="test"
        data-currency="inr"
        data-image=""

        ></script>
    </form>
    </body>


  </html>