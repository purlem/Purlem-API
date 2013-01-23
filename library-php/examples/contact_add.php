<html>
<head>
<?php
require '/path/to/purlapi.php';

if($_POST) {
	
	/************************************
	******* Enter Your Info Here ********
	************************************/
	$userID = 'XXX'; //Enter your userID here
	$token = 'xxxxxxxxxxxxx'; //Enter your API Token here
	$campaignID = 'XXXX'; //The campaign that you would like to add the contact to
	/************************************/
	
	//Connect
	Purlem::connect($userID,$token);

	// Add Contact	
	$data = array('campaignID' => $campaignID);
	foreach($_POST as $key => $value) {
		$data = $data + array($key => $value);
	}	
	$response = Purlem::add_contact($data);
	$response = json_decode($response);
	
	//Error
	if($response->code == 400) {
		$error = $response->message;
	} 
	
	//Success
	else {
		//Redirect to PURL (Optional)
		header( 'Location: http://'. $response->data->purl ) ;
		exit;
	}						  							  
}

if(isset($error)) echo '<div class="error">'.$error.'</div>';
?>



<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size:14px;
}
label, input {
	display: block;
}
label {
	font-weight: bold;
}
input {
	margin-bottom:10px;
}
input[type="text"] {
	font-size:14px;
	color:#333;
	padding:5px;
	width:300px;
}
input[type="submit"] {
	display: inline-block;
    text-decoration: none;
    font: bold 16px/16px HelveticaNeue, Arial;
    padding: 9px 30px;
    color: #000;
    border: 1px solid #dedede;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
input[type="submit"].blue{
    background: #92dbf6;
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#abe4f8', endColorstr='#6fcef3'); /*  IE */
    background: -webkit-gradient(linear, left top, left bottom, from(#abe4f8), to(#6fcef3)); /*  WebKit */
    background: -moz-linear-gradient(top,  #abe4f8, #6fcef3);
    border-color: #8dc5da #76b7cf #63abc7;
    color: #42788e;
    text-shadow: 0 1px 0 #b6e6f9;
    -webkit-box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #c0ebfa;
    -moz-box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #c0ebfa;
    box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #c0ebfa;    
}
input[type="submit"].blue:hover{
    background: #92dbf6;
    border-color: #7caec0 #68a3ba #5a9cb5;
    text-shadow: 0 1px 0 #bee9fa;
    -webkit-box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #ade4f8;
    -moz-box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #ade4f8;
    box-shadow: 0 1px 1px #d6d6d6, inset 0 1px 0 #ade4f8;    
	cursor:pointer;
}
.error {
	background-color:#F2DEDE;
	color:#B94948;
	padding:15px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	margin-bottom:20px;
	font-weight:bold;
}
</style>

</head>

<body>
<form id="form1" name="form1" method="post" action="">

<label>First Name:</label>
<input type="text" name="firstName" id="firstName" />

<label>Last Name:</label>
<input type="text" name="lastName" id="lastName" />

<label>Organization:</label>
<input type="text" name="organization" id="organization" />

<label>Position:</label>
<input type="text" name="position" id="position" />

<label>Email:</label>
<input type="text" name="email" id="email" />

<label>Phone:</label>
<input type="text" name="phone" id="phone" />

<label>Address:</label>
<input type="text" name="address" id="address" />

<label>City:</label>
<input type="text" name="city" id="city" />

<label>State:</label>
<input type="text" name="state" id="state" />

<label>Zip:</label>
<input type="text" name="zip" id="zip" />

<label>Customfield:</label>
<input type="text" name="customXXXX" id="customXXXX" />

<input type="submit" name="button" id="button" value="Submit" class="blue" />

</form>

</body>
</html>