<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Add Client
$response = Purlem::add_client(array('name' => 'APIClient', //Required:  Client Name
								   'username' => 'user', //Required:  Username
								   'password' => 'xxxxx', //Required:  Password
								   'planID' => '7', //Required: Plan ID (1 - 12)
								   )
							);
							
echo $response;
?>