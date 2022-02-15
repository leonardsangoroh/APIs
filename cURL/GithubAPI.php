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
       CURLOPT_HTTPHEADER => $headers
       //Another user-agent option
       //CURLOPT_USERAGENT => "leonardsangoroh"

   ]);

   

    //Execute
    $response = curl_exec($ch);

    //Display status codes
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close($ch);

    echo $status_code. "\n";

    echo $response. "\n";

?>