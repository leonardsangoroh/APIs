<?php
    //Require the package classes
    require __DIR__ . "/vendor/autoload.php";

    $client = new GuzzleHttp\Client;

    $response = $client->request("GET", "https://api.github.com/user/repos", [
        "headers" => [
            "Authorization" => "token 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",
            "User-Agent" =>  "leonardsangoroh"
        ]
    ]);

    echo $response->getStatusCode(), "\n";

    echo "BELOW IS THE HEADER \n";
    echo $response->getHeader("content-type")[0], "\n";
    echo "BELOW IS THE BODY \n";
    echo substr($response->getBody(), 0 , 200), "...\n";

?>