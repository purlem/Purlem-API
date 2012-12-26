<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Add instantPURL Campaign
$response = Purlem::add_instantpurl_campaign(array('name' => 'New-Campaign', //Required: Name of Campaign
												   'template' => 'default') //Required: Template
												   );
echo $response;
?>