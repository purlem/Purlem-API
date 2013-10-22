<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Get_By Contact
$field = 'xxxxxx'; //The field to search in.  EX: 'company', 'email'
$response = Purlem::get_many_where_exists($field);
echo $response;
?>