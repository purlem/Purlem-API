<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Contact
$contact_id = 'XXXXXX'; //The ID of the contact you would like to get
$response = Purlem::get_contact($contact_id);
echo $response;
?>