//Getting contents from an HTML page
<?php
	$response = file_get_contents("https://randomuser.me/api");

    echo $response;
?>