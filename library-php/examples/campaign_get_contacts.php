<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get All Campaign Contacts
$campaign_id = '5645'; //The Campaign ID to get
$response = Purlem::get_all_campaign_contacts($campaign_id);
echo $response;
?>