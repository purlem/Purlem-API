<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get All Client
$response = Purlem::get_all_clients();

echo $response;
?>