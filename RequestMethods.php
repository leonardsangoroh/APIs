<?php

    $ch = curl_init();

    $headers = [
        "Authorization: token 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",
        "User-Agent: leonardsangoroh"
    ];

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.github.com/user/starred/eddiemg10/Nyumbani",
        CURLOPT_RETURNTRANSFER => true,
        //Request headers
       CURLOPT_HTTPHEADER => $headers,

       //Setting request methods
       //MUST BE IN UPPERCASE
       CURLOPT_CUSTOMREQUEST => "DELETE"

   ]);

   

    //Execute
    $response = curl_exec($ch);

    //Display status codes
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close($ch);

    echo $status_code. "\n";

    echo $response. "\n";

?>