<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Delete Contact
$contact_id = 'XXXXX'; //The Contact ID to delete
$response = Purlem::delete_contact($contact_id);
echo $response;
?>