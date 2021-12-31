<?php
    require('config.php');   

    if(isset($_POST['stripeToken'])){
        \Stripe\Stripe::setVerifySslCerts(false);
    
        $token = $_POST["stripeToken"];
    
        $data=\Stripe\Charge::create(array(
            "amount"=>"100000",
            "currency"=>"myr",
            "description"=>"lmao yeet",
            "source"=>$token,
    
        ));

        echo 'payment success you potato';
    }else{
        echo 'payment fail noob';
    }
?>