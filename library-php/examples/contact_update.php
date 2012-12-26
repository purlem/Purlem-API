<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Update Contact
$response = Purlem::update_contact(array('contactiD' => 'XXX', //Required: The Contact ID to update
								      'firstName' => 'Alex', //Optional: First Name
									  'lastName' => 'Brown', //Optional: Last Name
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