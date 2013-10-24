<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Campaign
$campaign_id = 'XXXXX'; //The Campaign ID to get fields from
$response = Purlem::get_campaign_fields($campaign_id);
echo $response;
?>