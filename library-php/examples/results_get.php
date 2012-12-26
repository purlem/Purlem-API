<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Campaign Results
$campaign_id = 'XXXXX' //The Campaign ID to get results for
$response = Purlem::get_results($campaign_id);
echo $response;
?>