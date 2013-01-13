<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Update Client
$response = Purlem::update_client(array('clientID' => 'xxx', //Required:  Client ID
									   'name' => 'ClientName', //Optional:  Name
									   'username' => 'user', //Optional:  Username
									   'password' => 'xxxx', //Optional:  Password
									   'planID' => '7', //Optional:  PlanID (1 - 12)
									   )
								);
							
echo $response;
?>