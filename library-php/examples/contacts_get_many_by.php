<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get All Campaign Contacts
$field = 'xxxxxx'; //The field to search in.  EX: 'firstName', 'company', 'purl'
$data = 'xxxxxx'; //The data to search.  EX: 'Tom', 'Apple', 'TomJones' 
$response = Purlem::get_many_by(array($field,$data));
echo $response;
?>
