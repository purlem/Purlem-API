<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get Campaign Results
$contact_id = 'XXXXX' //The Contact ID to get results for
$response = Purlem::get_contact($contact_id);
echo $response;
?>