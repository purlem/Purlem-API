= Installation

Obtain the latest version of the Purlem PHP Library bindings with:

    git clone https://github.com/purlem/Purlem-API.git

To get started, add the following to your PHP script:

    require_once("/path/to/purlapi.php");

Simple usage looks like:

    // Connect
    $userID = 'XXX'; //Enter your userID here
    $token = 'xxxxxxxxxxxxx'; //Enter your API Token here
    Purlem::connect($userID,$token);

    // Get All Campaigns
    $response = Purlem::get_all_campaigns();
    echo $response;

= Documentation

Please see https://github.com/purlem/Purlem-API for up-to-date documentation.