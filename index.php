<?php
    //Require the package classes
    require __DIR__ . "/vendor/autoload.php";

    $client = new GuzzleHttp\Client;

    $response = $client->request("GET", "https://api.github.com/user/repos", [
        "headers" => [
            "Authorization: token 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",
            "User-Agent: leonardsangoroh"
        ]
    ]);

    echo $response->getStatusCode(), "\n";

    echo $response->getHeader("content-type")[0], "\n";

    echo substr($response->getBody(), 0 , 200), "...\n";

?>