<?php

    //CREATING A GITHUB REPOSITORY THROUGH AN API

    $ch = curl_init();

    $headers = [
        "Authorization: token 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",
        "User-Agent: leonardsangoroh"
    ];

    //Request body is also called payloads
    $payload = json_encode([
        "name" => "Created from API",
        "description" => "An example API-created repo"
    ]);

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.github.com/user/repos",
        CURLOPT_RETURNTRANSFER => true,
        //Request headers
       CURLOPT_HTTPHEADER => $headers,

       //Setting request methods
       //MUST BE IN UPPERCASE
       //CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POST => true,

        //body
        CURLOPT_POSTFIELDS => $payload

   ]);

   

    //Execute
    $response = curl_exec($ch);

    //Display status codes
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close($ch);

    echo $status_code. "\n";

    echo $response. "\n";

?>