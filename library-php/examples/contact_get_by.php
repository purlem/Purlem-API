<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get_By Contact
$field = 'xxxxxx'; //The field to search in.  EX: 'firstName', 'company', 'purl'
$data = 'xxxxxx'; //The data to search.  EX: 'Tom', 'Apple', 'TomJones' 
$response = Purlem::get_by_contact(array($field,$data));
echo $response;
?>