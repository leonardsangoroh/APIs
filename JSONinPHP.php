<?php

 $response = file_get_contents("https://randomuser.me/api");

 //As an object
 //$data = json_decode($response);

 //As an array
 $data = json_decode($response, true);

 //Getting every info about the random user
 //var_dump($data);

 //Getting specific data from the API response
 echo $data["results"][0]["name"]["first"], "\n";
?>