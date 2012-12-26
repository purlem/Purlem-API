Purlem API
====================

The Purlem API is organized around REST, uses JSON for serialization and HTTP basic authentication.  The API allows for basic CRUD operations on campaigns, contacts and results.


Authentication
--------------

You authenticate to the Purlem API by providing your User ID and API token in the request throught HTTP basic authentication. You can find both your User ID and API Token in your Purlem dashboard under **My Account**.

In curl, that looks like:

```shell
curl -u user:token
```



Request
----------------

All URLs start with `https://purlapi.com/v1/`. The path is prefixed with the the API version. 

To make a request for all the results in a campaign, you'd append the campaign's index path to the base url to form something like /results/{CAMPAIGN ID}. In curl, that looks like:

```shell
curl -u user:token https://purlapi.com/v1/results/{CAMPAIGN ID}
```

To add,update or delete something, it's the same deal except you also have to POST the data. To add a contact it would look like:

```shell
curl -u user:token
  -X POST 
  --data "campaignID={CAMPAIGN ID}&firstName=Bob&lastName=Jones" 
  http://purlapidev.com/v1/contacts/add
```

That's all!



Response
-----------------

All responses will use JSON for serialization of data. The response for adding a contact would be something like:
 
```shell
{
"type":"contact.created",
"object":"event",
"timestamp":"2012-12-21 01:01:01",
"data":{
  "ID":"{CONTACT ID}",
	"userID":"{USER ID}",
	"campaignID":"{CAMPAIGN ID}",
	"firstName":"Bob",
	"lastName":"Jones",
	"purl":"http://domain.com/Bob.Thomas"
	}
}
```


Errors
---------------

If there is a problem with your request you will receive 4xx error, along with JSON data describing the error.  An error response may look like:

```shell
{"message":"Bad Authentication data","code":400}
```


Limiting
-------------

You can perform up to 100 requests per 1 hour period for the same account. 
