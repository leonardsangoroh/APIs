<?php

// Initialize session
    $ch = curl_init();

   $headers = [
    "Authorization: Client-ID YOUR API KEY"
   ];

   curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        //Request headers
        CURLOPT_HTTPHEADER => $headers,

        //View all response headers
       CURLOPT_HEADER => true
   ]);

    //Execute
    $response = curl_exec($ch);

     //Display status codes
     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
     //Getting specific response metadata
     $content_type = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);

     $content_length = curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD);


    curl_close($ch);

    echo $status_code. "\n";

    echo $content_type;

    echo $content_length;

    echo $response. "\n";

?>