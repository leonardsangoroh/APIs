<?php

// Initialize session
    $ch = curl_init();

    //Getting content from API
    //In JSON
    curl_setopt($ch, CURLOPT_URL, "https://api.openweathermap.org/data/2.5/weather?q=London&appid=49832d6ae6db149f24fe5e9ee60ab21b");

    //To string instead of directly displaying it on the screen
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Execute
    $response = curl_exec($ch);

     //Display status coedes
     $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    

    curl_close($ch);

    echo $status_code. "\n";
    echo $response. "\n";

?>