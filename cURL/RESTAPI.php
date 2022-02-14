<?php

//Getting gists from github using the Github API

    $ch = curl_init();

    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.github.com/gists",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERAGENT => "leonardsangoroh"
    ]);

    $response = curl_exec($ch);

    curl_close($ch);

    $data = json_decode($response, true);

    foreach ($data as $gist) {
        echo $gist["id"], " - ", $gist["description"], "\n";
    }


?>