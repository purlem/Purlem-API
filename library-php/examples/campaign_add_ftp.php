<?php
require '/path/to/purlapi.php';

// Connect
$userID = 'XXX'; //Enter your userID here
$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
Purlem::connect($userID,$token);

// Add FTP Campaign
$response = Purlem::add_ftp_campaign(array('name' => 'New-Campaign', //Required:  Campaign Name
										   'template' => 'default', //Required:  Template
										   'url' => 'http://domain.com', //Required:  URL
										   'ftp_server' => 'ftp.domain.com', //Required:  FTP Server
										   'ftp_username' => 'user', //Required:  FTP Username
										   'ftp_password' => 'xxxxxxxx', //Required:  FTP Password
										   'ftp_path' => 'public_html') //Required:  FTP Path
										   );
echo $response;
?>