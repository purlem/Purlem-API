<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Add Contact
$response = Purlem::add_contact(array('campaignID' => 'XXX', //Required: The Campaign ID to add contact
								      'firstName' => 'Alex', //Required: First Name
									  'lastName' => 'Brown', //Required: Last Name
									  'company' => 'XYZCorp', //Optional: Company
									  'position' => 'Owner', //Optional: Position
									  'email' => 'alex@email.com', //Optional: Email
									  'phone' => '123-123-1234', //Optional: Phone
									  'address' => '123 Street', //Optional: Address
									  'city' => 'San Francisco', //Optional: City
									  'state' => 'CA', //Optional: State
									  'zip' => '94104', //Optional: Zip
									  'customXXXX' => 'Dog') //Optional: CustomField
									  );
echo $response;
?>