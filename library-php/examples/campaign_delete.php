<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Campaign
$campaign_id = 'XXXXX'; //The Campaign ID to delete
$response = Purlem::delete_campaign($campaign_id);
echo $response;
?>