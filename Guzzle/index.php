<?php
    //Require the package classes
    require __DIR__ . "/Guzzle/autoload.php";

    $client = new GuzzleHttp\Client;

    $response = $client->request("GET", "https://api.github.com/user/repos", [
        "headers" => [
            "Authorization" => "token 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",
            "User-Agent" => "leonardsangoroh"
        ]
    ]);

    echo $response->getStatusCode(), "\n";

    echo $response->getHeader("content-type")[0], "\n";

    echo substr($response->getBody(), 0 , 200), "...\n";

?>