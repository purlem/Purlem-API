<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Client
$client_id = 'XXXXX'; //The Client ID to get
$response = Purlem::get_client($client_id);

echo $response;
?>