<?php

// Initialize session
    $ch = curl_init();

    //Getting content from API
    //In JSON
    curl_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");

    //To string instead of directly displaying it on the screen
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    //Execute
    $response = curl_exec($ch);

    curl_close($ch);

    echo $response, "/n";

?>