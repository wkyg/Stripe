<?php
    require ("config.php");     
?>
<html lang="en">   
    <form action="submit.php" method="POST">
        <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="<?php echo $publishableKey ?>"
            data-amount="100000"
            data-name="Hotelah"
            data-description="Room hehe booking payment"
            data-img="images/logo.png"
            data-currency="myr"
            data-email="wtf@wtf.com">
        </script>
    </form>
</html>