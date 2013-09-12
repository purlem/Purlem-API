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


Available Resources
---------------

**Get Contact**

/v1/contacts/{CONTACT ID}

```shell
curl -u user:token  https://purlapi.com/v1/contacts/123
```

**Get By Contact**

/v1/contacts/get_by/{FIELD}/{DATA}

```shell
curl -u user:token  https://purlapi.com/v1/contacts/get_by/purl/BobThomas
```

**Add Contact**
/v1/contacts/add

```shell
curl -u user:token -X POST --data "campaignID=1051&firstName=Bob&lastName=Jones https://purlapi.com/v1/contacts/add
```

**Update Contact**

/v1/contacts/update

```shell
curl -u user:token -X POST --data "contactID=123&company=XYZCorp" https://purlapi.com/v1/contacts/update
```

**Delete Contact**

/v1/contacts/delete/{CONTACT ID}

```shell
curl -u user:token -X POST https://purlapi.com/v1/contacts/delete/123
```

**Get All Campaigns**

/v1/campaigns

```shell
curl -u user:token  https://purlapi.com/v1/campaigns
```

**Get All Campaign Contacts**

/v1/campaigns/{CAMPAIGN ID}/contacts

```shell
curl -u user:token  https://purlapi.com/v1/campaigns/1/contacts
```

**Get Campaign**

/v1/campaigns/{CAMPAIGN ID}

```shell
curl -u user:token  https://purlapi.com/v1/campaigns/1
```

**Add instantPURL Campaign**

/v1/campaigns/add/instantpurl

```shell
curl -u user:token -X POST --data "name=My-Campaign&template=default" https://purlapi.com/v1/campaigns/add/instantpurl
```

**Add FTP Campaign**

/v1/campaigns/add/ftp

```shell
curl -u user:token -X POST --data "name=My-Campaign&template=default&url=http://mydomain.com&ftp_server=ftp.mydomain.com&ftp_username=myusername&ftp_password=mypassword&ftp_path=public_html" https://purlapi.com/v1/campaigns/add/ftp
```

**Update Campaign**

/v1/campaigns/update

```shell
curl -u user:token -X POST --data "name=New-Name&campaignID=1" https://purlapi.com/v1/campaigns/update
```

**Delete Campaign**

/v1/campaigns/delete/{CAMPAIGN ID}

```shell
curl -u user:token -X POST https://purlapi.com/v1/campaigns/delete/1
```

**Get Campaign's Results**

/v1/results/{CAMPAIGN ID}

```shell
curl -u user:token https://purlapi.com/v1/results/1
```

**Delete Result**

/v1/results/delete/{RESULT ID}

```shell
curl -u user:token -X POST https://purlapi.com/v1/results/delete/1523
```

**Get All Clients**

/v1/clients

```shell
curl -u user:token  https://purlapi.com/v1/clients
```

**Get Client**

/v1/campaigns/{CLIENT ID}

```shell
curl -u user:token  https://purlapi.com/v1/clients/1
```

**Add Client**

/v1/campaigns/add/client

```shell
curl -u user:token -X POST --data "name=ClientName&username=user&password=pass&planID=2" https://purlapi.com/v1/clients/add
```

**Update Client**

/v1/clients/update

```shell
curl -u user:token -X POST --data "clientID=1name=ClientName&username=user&password=pass&planID=2" https://purlapi.com/v1/clients/update
```

**Delete Client**

/v1/campaigns/delete/{CLIENT ID}

```shell
curl -u user:token -X POST https://purlapi.com/v1/cleints/delete/1
```

