<?php
     $api_key = "sk_test_51KTXABJaLId6sUZsKIKwLfbxdT8JOALVcK18U8YTxcWqmEKXZiif5OhoFJ5hNF0cf9lhKC53sc0VRQ9gV3Bm3JTY00VVu0yGxp";

     $data = [
         "name" => "Leonard",
         "email" => "Leonard@example.com"
     ];

     require __DIR__ . "/vendor/autoload.php";

     $stripe = new \Stripe\StripeClient($api_key);

     $customer = $stripe->customers->create($data);
 
     echo $customer;
?>