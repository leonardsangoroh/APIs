<?php
//PUTTING ALL INDIVIDUAL RESPONSES IN AN ARRAY

/* 
A callback function is a function passed into another function as an
argument, which is then invoked inside the outer function to complete 
some kind of routine or action.
*/

// Initialize session
    $ch = curl_init();

   $headers = [

    "Authorization: Client-ID GYr0SwTxcv5bvhe1XcW1jeVa3nTyQu3YyGszjYzx8p8"

   ];

   //An array to store each individual response header
   $response_headers = [];

   //Callback function called after each response header
   $header_callback = function($ch, $header) use (&$response_headers) {
       //Get length of response
       $len = strlen($header);

       //Split header into parts with a colon as a separator
       $parts = explode(":", $header,2);


       if(count($parts)<2) {
           return $len;
       }

       $response_headers[$parts[0]] = trim($parts[1]);

       //Assign (response) header to response headers array
       //$response_headers []= $header;

       return $len;
       

   };

   curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.unsplash.com/photos/random",
        CURLOPT_RETURNTRANSFER => true,
        //Request headers
        CURLOPT_HTTPHEADER => $headers,
        //This function gets called by libcurl as soon as it has received header data.
        //The header callback will be called once for each header and only complete 
        //header lines are passed on to the callback

        CURLOPT_HEADERFUNCTION => $header_callback

   ]);

   

    //Execute
    $response = curl_exec($ch);

    //Display status codes
    $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    
    curl_close($ch);

    echo $status_code. "\n";

    print_r($response_headers);

    echo $response. "\n";

?>