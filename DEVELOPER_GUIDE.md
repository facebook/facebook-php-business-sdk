# Facebook Ads SDK - Developer Guide

## Introduction

This guide assumes you have an app that has been whitelisted for the Facebook Ads API, that you have a fully working development environment with all required dependencies and that are ready to start coding. If you haven't done this, please see the [README](./README.md) file.

We also assume you are somewhat familiar with namespaces in PHP. If not, we recommend you take some time to read the [namespace basics](http://www.php.net/manual/en/language.namespaces.basics.php) in the PHP Manual. 

You should also have the documentation for the [Facebook Marketing APIs](https://developers.facebook.com/docs/ads-api) available as you will need to refer to this to understand which combination of parameters are required for the different object types.

## Bootstrapping <a name="bootstrapping"></a>
The classes within the Facebook Ads SDK are designed to be included using an autoloader compliant with the [PSR-4](http://www.php-fig.org/psr/psr-4/). If you are using [Composer](https://getcomposer.org/) to include dependencies, you will find an implementation available within the vendor folder. This guide assumes you are using this autoloader.

```php
<?php
define('VENDOR_DIR', '/path/to/sdk/'); // Path to the Vendor directory 
$loader = include VENDOR_DIR.'/vendor/autoload.php';
```

### Authentication <a name="authentication"></a>
To make any request to the Ads API, you will need to have a valid access token and the user has accepted the `ads_management` permission.

## The Api Object

The `FacebookAds\Api` object is the basis of the Ads SDK which encapsulates a `FacebookAds\Session` and is used to execute requests against the Graph API.

An easy to use init method is provided:

```php
use FacebookAds\Api;

// Set the default application to be used with this session and register an instance of the Api object
Api::init('<APP_ID>', '<APP_SECRET>', '<ACCESS_TOKEN>');

// The instace is now retrivable
$api = Api::instance();
```

### Making requests to the Graph <a name="making_requests"></a>

Generally you should not need to make requests to the Graph API directly as these calls are handled by the implementation of objects within the SDK. However, there may be some case where you do want to query the Graph directly. In this case, you can use the `call` method of the `Api` class which returns a `FacebookAds\Http\RequestInterface`, by default the registered class is `FacebookAds\Http\Request`:

```php
$response = $api->call(
  '/61405622', 
  Api::HTTP_METHOD_GET, 
  array('fields'=>'name')
);
var_dump($response->getContent());
```

### Handling Multiple Access Tokens <a name="multiple_tokens"></a>
The first time an `Api` object is instantiated, we store a static reference to that object within the `Api` class and this is used as the default instance within the SDK. This saves you from having to pass around a reference to an `Api` instance within your application.

A common requirement amongst Facebook Ads API developers however is to be able to handle multiple sessions within a single script execution. For example, you may have a process which syncs updated objects for multiple app users into some local datastore. 

To enable this, we provide two ways to manage sessions. 

The first is by mutating the default instance used by the application. The default instance can be accessed using the method `Api::instance()`. You can also change the default instance using the static method `Api::setInstance($api)`.

The second is to explicitly define the `Api` instance you want to use when querying the Graph. This is achieved by passing an instance to the constructor of any class that extends from `Object\AbstractCrudObject`.

```php
use FacebookAds\Object\Ad;
$my_ad = new Ad($id, $parent_id=null, $api);
```

## Objects Types


### CRUD Objects
For any entity that can be directly queried from the Graph API we have provided classes which extend `Object\AbstractCrudObject`. This provides `create`, `read`, `update` and `delete` methods for the majority of these entities. However, in some cases the Graph API does not support all of these operations and you will receive an `\Exception` if you attempt to call an unsupported method.

When setting class variables on an object of this type we perform some basic validation to ensure the field is a valid field and an `\Exception` will be thrown if a field name is not found within the [field definition](#field_definition) for that class. 

### Simple Objects
There is another set of entities which cannot be directly queried from the Graph such as an `AdPreview`. This type of object extends `Object\AbstractObject` which provides methods to access the response data. 

### Field definitions <a name="field_definition"></a>

For each object type, we provide a class enumerating the available fields of that object. These can be found within the `FacebookAds\Object\Fields` namespace and provide a way to reference fields without using strings. You can alternatively use strings if you find this easier. 

For example, you can set the data of an object using the field definitions in the following way:

```php
$someObject->setData(array(
  MyObjectFields::ID => 1234,
  MyObjectFields::NAME => 'My Name',
));
```
	
Alternatively, you can use the string equivalent:

```php
$someObject->setData(array(
  'id'=>1234,
  'name'=>'My Name',
));
```

Similarly the same applies for direct assignation:

```php
//Using field definitions:
$someObject->{SomeObjectFields::ID} = 123;

//Equivalent to using the variable name directly:
$someObject->id = 123;
```

### The Cursor Class
When requesting multiple objects from the Graph, responses may be returned in pages of data which can be traversed using cursors. We encapsulate this information into a `Cursor` class which represents the set of objects in the current page along with information about how to access subsequent pages of objects. This class implements the `\Iterable` and `\Countable` interfaces.  

## Reading Objects

### Reading a single object
To read an object from the Graph you will need its `id`. By default, only the `id` field of an object is queried and you should specify when reading an object the fields you need. It is not recommended that you request all fields unless you require them all. 

```php
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$required_fields = array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
  AdAccountFields::DAILY_SPEND_LIMIT,  
);

$adaccount = (new AdAccount($id))->read($required_fields);
```
See [Defining Default Fields](#default_fields) within the section about Extending the SDK for an example of how to avoid defining the fields you require every request.


### Reading multiple objects
We provide the static method `readIds($ids = array(...), $fields = array(...))` to enable you to request many objects of a single type and will return a `Cursor`:

```php
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$required_fields = array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
  AdAccountFields::DAILY_SPEND_LIMIT,  
);
$account_ids = array('act_x', 'act_y'...)
$adaccounts = AdAccount::readIds($account_ids, $required_fields);
foreach($adaccounts as $account) {
	echo $account->id."\n";
}
```

## Creating Objects

When creating objects on the Graph, they are generally created by making a POST request to an edge of a parent object. For example, ads are created using the endpoint `https://graph.facebook.com/act_123123/ads`. Therefore when creating an object, you must know the `id` of the parent object which is generally the id of an AdAccount. You should consult the [Facebook Developer Documentation](https://developers.facebook.com/docs/ads-api) to see which parent object to use.
 
```php
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;

$account_id = 'act_123123';
$ad = new Ad($id=null, $account_id);

$ad->setData(array(
  AdFields::NAME => 'My Test Ad',
  AdFields::ADSET_ID => $adset_id,
));

$ad->create(array(
  Ad::STATUS_PARAM_NAME => Ad::STATUS_PAUSED,
));
echo $ad->{AdFields::ID};
```

## Updating Objects

When you mutate an AdObject, we record which variables have changed and make it easy for you to write these change to the Graph API by calling the `update` method. 

Please note that in some cases the variable name used to update an attribute of an entity differs from the one read from Graph API. Any variable you change will be included in the request to update an object an you will likely receive an `\Exception` if the field name is incorrect. Please consult the [Facebook Developer Documentation](https://developers.facebook.com/docs/ads-api) to see which fields are required. 

```php
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;

$ad = new Ad($id);
$ad->name = 'Updated Name';
$ad->update();
```

## Deleting Objects


### Deleting a single object

To delete an object, you only need call the `delete` method on an instance of that object. Note, you do not have had to have read the object from the Graph API, all you need is the `id` of the object.

```php
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;

$ad = new Ad($id);
$ad->delete();
```

### Deleting multiple objects

We provide the static method `deleteIds($ids = array(...))` to enable you to delete many objects at the same time. This method returns a boolean value and will only return `true` if all objects were successfully deleted. A return value of `false` means one or more failed to be deleted. Please also note that we do not verify the type of the `id` you have passed into this function.

```php
use FacebookAds\Object\Ad;
$status = Ad::deleteIds($ids = array(...));
```

### Save Helper 

On object that extends `AbstractCrudObject` you can call the `save` method which will call `create` if the object does not have a value for `id` set, or will call `update` a value is present. 


## Connections

Objects on the Graph API may also have connections. A connection provides a way to retrieve objects which relate to the current object, for example, you can retrieve all the ads relative to an ad account using the URL `https://graph.facebook.com/act_123123/ads`.

For each connection an object has, we provide a helper method to retrieve its related objects. In the case of `ObjectObject\AdAccount` we provide several of these methods including `getAds($required_fields)` which will return a `Cursor` containing a page of `Object\Ad` objects.

```php
use FacebookAds\Object\AdAccount;
$account = new AdAccount($id);
$ads = $account->getAds($fields = array('name')));
foreach($ads as $ad) {
  echo $ad->name."\n";
}
```

You only need the `id` of the object on which you want to call a connection method, therefore you do not need to have read the object from the Graph API first. 

For cases where these helper methods are not available, see [Requesting Connections Without Helper Methods](#generic_connections).

## Targeting <a name="targeting"></a>

Facebook's targeting can generally be broken down into [interests](https://developers.facebook.com/docs/reference/ads-api/interest-targeting), [demographics](https://developers.facebook.com/docs/reference/ads-api/demographic-targeting), [behaviors](https://developers.facebook.com/docs/reference/ads-api/behavior-targeting) and [geo targeting](https://developers.facebook.com/docs/reference/ads-api/targeting-specs/#location). Many of these need to be queried from the Graph API search endpoint.

To query targeting using the Ads SDK, you can use the `Object\TargetingSearch` class.

## Examples 

This set of examples will walk you through:

1. Reading AdAccounts for a user
* Creating a Campaign
* Searching targeting criteria
* Creating an AdSet
* Creating an AdImage
* Creating an AdCreative
* Creating an Ad

Examples can be found within the `examples/` folder of the SDK. This assumes you have bootstrap code with an access token:

```php
<?php
define('SDK_DIR', '/path/to/sdk/'); // Path to the SDK directory 

$loader = include SDK_DIR.'/vendor/autoload.php';

use FacebookAds\Api;

Api::init($app_id, $app_secret, $access_token);

```

### 1. Reading AdAccounts

The `FacebookSession` contains the `id` of the user who has the active session and this can be used to read their `AdAccount` connections. 

```php
use FacebookAds\Object\AdUser;
use FacebookAds\Object\Fields\AdUserFields;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$user = new AdUser('me');
$user->read(array(AdUserFields::ID));

$accounts = $user->getAdAccounts(array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
));

// Print out the accounts
echo "Accounts:\n";
foreach($accounts as $account) {
  echo $account->id . ' - ' .$account->name."\n";
}

// Grab the first account for next steps (you should probably choose one)
$account = (count($accounts)) ? $accounts->getObjects()[0] : null;
echo "\nUsing this account: ";
echo $account->id."\n";
```

### 2. Creating a Campaign

Now we have an `AdAccount` for the current user we can go ahead an create our [Campaign](https://developers.facebook.com/docs/reference/ads-api/adcampaign). All `ads` within your `campaign` should have the same objective. You can find the available objectives within the [`AdObjectives`](src/FacebookAds/Object/Values/AdObjectives.php) class.

In the following example we create a paused campaign so your ads do not go live, however you can omit the status field if you want your ad to run. 

```php
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\AdBuyingTypes;

$campaign  = new Campaign(null, $account->id);
$campaign->setData(array(
  CampaignFields::NAME => 'My First Campaign',
  CampaignFields::OBJECTIVE => AdObjectives::LINK_CLICKS,
));

$campaign->create(array(
  Campaign::STATUS_PARAM_NAME => Campaign::STATUS_PAUSED,
));
echo "Campaign ID:".$campaign->id."\n";
```


### 3. Searching Targeting

The final thing we need before creating an `Ad` is some targeting. Many attributes of targeting can be found defined in the developer documentation, however some categories need you to search, such as interests. For this, we provide the `TargetingSearch` class.

```php
use FacebookAds\Object\TargetingSearch;
use FacebookAds\Object\Search\TargetingSearchTypes;

$results = TargetingSearch::search(
  $type = TargetingSearchTypes::INTEREST,
  $class = null,
  $query = 'facebook london',
);

// we'll take the top result for now
$target = (count($results)) ? $results->getObjects()[0] : null;
echo "Using target: ".$target->name."\n";
```

Targeting for the moment is expressed in the form of a multidimensional array:

```php
$targeting = array(
  'geo_locations' => array(
    'countries' => array('GB'),
  ),
  'interests' => array(
    array(
      'id' => $target->id,
      'name'=>$target->name,
    ),
  ),
);
```


### 4. Creating an AdSet

An [`AdSet`](https://developers.facebook.com/docs/reference/ads-api/adset) is a set of [`Ad`](https://developers.facebook.com/docs/reference/ads-api/adgroup) objects and it is best practice to ensure all `Ad` objects within an `AdSet` have the same targeting.

The `AdSet` holds the attributes about the duration of a campaign and the budget. When deciding a budget, you should also choose between `lifetime_budget` and `daily_budget`.

```php
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;

$adset = new AdSet(null, $account->id);
$adset->setData(array(
  AdSetFields::NAME => 'My First AdSet',
  AdSetFields::CAMPAIGN_ID => $campaign->id,
  AdSetFields::DAILY_BUDGET => '150',
  AdSetFields::OPTIMIZATION_GOAL => OptimizationGoals::REACH,
  AdSetFields::BILLING_EVENT => BillingEvents::IMPRESSIONS,
  AdSetFields::BID_AMOUNT => 2,
  AdSetFields::TARGETING => $targeting,
  AdSetFields::START_TIME => 
    (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
  AdSetFields::END_TIME => 
    (new \DateTime("+2 week"))->format(\DateTime::ISO8601),
));

$adset->create();
echo 'AdSet  ID: '.$adset->id."\n";
```
### 5. Create an AdImage

Now you have a `AdSet`, you will be able to create an `Ad`, however, first you will need to upload the image you want to use as part of the `AdCreative`.

```php
use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdImageFields;

$image = new AdImage(null, $account->id);
$image->filename = SDK_DIR.'/test/misc/FB-f-Logo__blue_512.png';

$image->create();
echo 'Image Hash: '.$image->hash."\n";
```

### 6. Creating an AdCreative

You can create an `AdCreative` in two ways. The first is by including a JSON object when creating an `Ad` and the second, which we will demonstrate here, is by explicitly creation an `AdCreative` and using its `id` when creating an `Ad`.

```php
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative(null, $account->id);
$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::TITLE => 'Welcome to the Jungle',
  AdCreativeFields::BODY => 'We\'ve got fun \'n\' games',
  AdCreativeFields::IMAGE_HASH => $image->hash,
  AdCreativeFields::OBJECT_URL => 'http://www.example.com/',
));

$creative->create();
echo 'Creative ID: '.$creative->id . "\n";
```

### 7. Creating an Ad

The final step is to create the [`Ad`](https://developers.facebook.com/docs/reference/ads-api/adgroup/). The `Ad` contains all of the information about bid, creative and targeting. It should also have the asme objective as the `Campaign` we created.

```php
use FacebookAds\Object\Ad;
use FacebookAds\Object\Fields\AdFields;

$ad = new Ad(null, $account->id);
$ad->setData(array(
  AdFields::CREATIVE => array('creative_id' => $creative->id),
  AdFields::NAME => 'My First Ad',
  AdFields::ADSET_ID => $adset->id,
));

$ad->create();
echo 'Ad ID:'.$ad->id."\n";
```
## Extending the SDK 

There are many scenarios in which you may want to extend the SDK, and when developing this SDK we attempted to balance extensibility with ease of use for new developers.

### Defining Default Fields to Read <a name="default_fields"></a>
We noted earlier that by default no fields are requested when calling the `read` method of a class implementing `AbstractCrudObject`, however if you always require the same set of fields throughout your application we have provided a simple way to do this.

Within your own namespace, you can extend the any class implementing `AbstractCrudObject` and override the static variable `$defaultReadFields` to be an array of fields you want to be read by default. You should try to not change the classes in the SDK directly as this may break forward compatibly.

```php
namespace MyNamespace\Object;

use FacebookAds\Object\Fields\AdAccountFields;

class AdAccount extends FacebookAds\Object\AdAccount {

  protected static $defaultReadFields = array(
    AdAccountFields::ID,
    AdAccountFields::NAME,
    AdAccountFields::DAILY_SPEND_LIMIT,
    AdAccountFields::CURRENCY,
  );
}
```

Within your application, whenever you use an `AdAccount`, you should use the one within your namespace instead of the `FacebookAds` one.

```php
use MyNamespace\Object\AdAccount;
$adaccount = (new AdAccount($id))->read();
echo $adaccount->name;
```
 
### Requesting Connections Without Helper Methods<a name="generic_connections"></a>

As detailed in the [Connections](#connections) section, we provide helper methods to request objects relative to an object. However, in some cases these methods may not have been implemented, or if you have extended our based objects as in the example of [defining default fields to read](#default_fields), calling a connection helper method on a base object will return objects of the \FacebookAds namespace type. 

In this case, you can use our generic connection methods to retrieve the correct type of object for any class extending `AbstractCrudObject`. To enable this, we provide two methods, `getOneByConnection` and `getManyByConnection` or which the latter is the most commonly used.

```php
use FacebookAds\Object\AdAccount;

// Ad in your namespace which you have used to extend the
// FacebookAds\Object\Ad class
use MyNamespace\Object\Ad;

$account = new AdAccount($id);
$my_adaccount_objects = $account->getManyByConnection(
  Ad::className(), $fields = array(...), $params = array(...));

```
