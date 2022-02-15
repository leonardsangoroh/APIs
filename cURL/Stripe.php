<?php
    $api_key = "YOUR SECRET KEY";

    $data = [
        "name" => "Lee",
        "email" => "Lee@example.com"
    ];

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://api.stripe.com/v1/customers',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD => $api_key,
        CURLOPT_POSTFIELDS => http_build_query($data)
    ]);

    $response = curl_exec($ch);

    curl_close($ch);

    echo $response;
?>
