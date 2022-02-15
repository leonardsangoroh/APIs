<?php
    $api_key = "sk_test_51KTXABJaLId6sUZsKIKwLfbxdT8JOALVcK18U8YTxcWqmEKXZiif5OhoFJ5hNF0cf9lhKC53sc0VRQ9gV3Bm3JTY00VVu0yGxp";

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