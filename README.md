# Facebook Business SDK for PHP

[![Packagist](https://img.shields.io/packagist/v/facebook/php-business-sdk.svg?style=flat-square)](https://packagist.org/packages/facebook/php-business-sdk)
[![License](https://img.shields.io/badge/license-Facebook%20Platform-blue.svg?style=flat-square)](https://github.com/facebook/facebook-php-business-sdk/blob/main/LICENSE)
[![Build Status](https://img.shields.io/endpoint.svg?url=https%3A%2F%2Factions-badge.atrox.dev%2Ffacebook%2Ffacebook-php-business-sdk%2Fbadge%3Fref%3Dmaster&style=flat)](https://actions-badge.atrox.dev/facebook/facebook-php-business-sdk/goto?ref=main)
[![Scrutinizer](https://img.shields.io/scrutinizer/g/facebook/facebook-php-business-sdk.svg?style=flat-square)](https://scrutinizer-ci.com/g/facebook/facebook-php-business-sdk)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/facebook/facebook-php-business-sdk.svg?style=flat-square)](https://scrutinizer-ci.com/g/facebook/facebook-php-business-sdk)

## Introduction

The Facebook <a href="https://developers.facebook.com/docs/business-sdk" target="_blank">Business SDK</a> is a one-stop shop to help our partners better serve their businesses. Partners are using multiple Facebook API's to server the needs of their clients. Adopting all these API's and keeping them up to date across the various platforms can be time consuming and ultimately prohibitive. For this reason Facebook has developed the Business SDK bundling many of its APIs into one SDK to ease implementation and upkeep. The Business SDK is an upgraded version of the Marketing API SDK that includes the Marketing API as well as many Facebook APIs from different platforms such as Pages, Business Manager, Instagram, etc.

## Quick Start

Business SDK <a href="https://developers.facebook.com/docs/business-sdk/getting-started" target="_blank">Getting Started Guide</a>

## Pre-requisites

### Register An App

To get started with the SDK, you must have an app
registered on <a href="https://developers.facebook.com/" target="_blank">developers.facebook.com</a>.

To manage the Marketing API, please visit your
<a href="https://developers.facebook.com/apps/<YOUR APP ID>/dashboard"> App Dashboard </a>
and add the <b>Marketing API</b> product to your app.

**IMPORTANT**: For security, it is recommended that you turn on 'App Secret
Proof for Server API calls' in your app's Settings->Advanced page.

### Obtain An Access Token

When someone connects with an app using Facebook Login and approves the request
for permissions, the app obtains an access token that provides temporary, secure
access to Facebook APIs.

An access token is an opaque string that identifies a User, app, or Page.

For example, to access the Marketing API, you need to generate a User access token
for your app and ask for the ``ads_management`` permission; to access Pages API,
you need to generate a Page access token for your app and ask for the ``manage_page`` permission.

Refer to our
<a href="https://developers.facebook.com/docs/facebook-login/access-tokens" target="_blank">
Access Token Guide</a> to learn more.

For now, we can use the
<a href="https://developers.facebook.com/tools/explorer" target="_blank">Graph Explorer</a>
to get an access token.

## Installation

The Facebook Business SDK requires PHP 5.6 or greater.

### Composer

The Facebook Business SDK uses composer to manage dependencies. Visit the <a href="https://getcomposer.org/download/" target="_blank">composer documentation</a> to learn how to install composer.

Add the following to your `composer.json` file:

```json
{
    "require": {
        "facebook/php-business-sdk": "5.0.5"
    }
}
```
then install it through composer:

```shell
php composer.phar install --no-dev
```

This SDK and its dependencies will be installed under `./vendor`.

### Alternatives

This repository is written following the [psr-4 autoloading standard](http://www.php-fig.org/psr/psr-4/). Any psr-4 compatible autoloader can be used.

## Usage

### Api main class

The `FacebookAds\Api` object is the foundation of the Business SDK which encapsulates a `FacebookAds\Session` and is used to execute requests against the Graph API.

To instantiate an Api object you will need a valid access token:
```php
use FacebookAds\Api;

// Initialize a new Session and instantiate an Api object
Api::init($app_id, $app_secret, $access_token);

// The Api object is now available through singleton
$api = Api::instance();

```

Once instantiated, the Api object will allow you to start making requests to the Graph API.

### Fields names

Due to the high number of field names in the Graph API existing objects, in order to facilitate your code maintainability, enum-like classes are provided.
These files are stored under the `FacebookAds/Object/Fields` directory.
You can access object properties in the same manner you would usually do in php:

```php
use FacebookAds\Object\AdAccount;

$account = new AdAccount();
$account->name = 'My account name';
echo $account->name;
```

or using the enums:

```php
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$account = new AdAccount();
$account->{AdAccountFields::NAME} = 'My account name';
echo $account->{AdAccountFields::NAME};
```

### Object classes

Facebook Ads entities are defined as classes under the `FacebookAds/Object` directory.

#### Read Objects

```php
use FacebookAds\Object\AdAccount;

$account = (new AdAccount($account_id))->getSelf();
```

For some objects, the Ads API doesn't return all available fields by default. The first argument of the object's read method is an array of field names to be requested.

```php
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdAccountFields;

$fields = array(
  AdAccountFields::ID,
  AdAccountFields::NAME,
);

$account = (new AdAccount($account_id))->getSelf($fields);
```
Requesting an high number of fields may cause the response time to visibly increase, you should always request only the fields you really need.

#### Create Objects

```php
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\AdSetFields;

$account_id = 'act_123123';
$campaign_id = '123456';

$account = new AdAccount($account_id);
$adset = $account->createAdSet(
    array(),
    array(
      AdSetFields::NAME => 'My Test AdSet',
      AdSetFields::CAMPAIGN_ID => campaign_id,
      AdSetFields::DAILY_BUDGET => 150,
      AdSetFields::START_TIME => (new \DateTime("+1 week"))->format(\DateTime::ISO8601),
      AdSetFields::END_TIME => (new \DateTime("+2 week"))->format(\DateTime::ISO8601),
      AdSetFields::BILLING_EVENT => 'IMPRESSIONS',
      AdSetFields::TARGETING => array('geo_locations' => array('countries' => array('US'))),
      AdSetFields::BID_AMOUNT => '1000',
    )
);

echo $adset->id;
```

#### Update Objects

```php
use FacebookAds\Object\AdSet;
use FacebookAds\Object\Fields\AdSetFields;

$ad_set_id = '123456';

$set = new AdSet($ad_set_id);
$fields = array(
);
$params = array(
  AdSetFields::NAME => 'My new AdSet name',
);
$set->updateSelf($fields, $params);
```

#### Delete Objects

```php
use FacebookAds\Object\AdSet;

$ad_set_id = '123456';

$set = new AdSet($ad_set_id);
$set->deleteSelf();
```

### Cursors

Since the release of the Facebook Graph API 2.0, pagination is handled through [cursors](https://developers.facebook.com/docs/graph-api/using-graph-api/v2.2#paging).
Here cursors are defined as in `\FacebookAds\Cursor`. Cursors are generally returned from connection methods:

```php
use FacebookAds\Object\AdAccount;
use FacebookAds\Object\Fields\CampaignFields;

$account = new AdAccount('<ACT_ID>');
$cursor = $account->getCampaigns(['id','name']);

// Loop over objects
foreach ($cursor as $campaign) {
  echo $campaign->{CampaignFields::NAME}.PHP_EOL;
}

// Access objects by index
if ($cursor->count() > 0) {
  echo "The first campaign in the cursor is: ".$cursor[0]->{CampaignFields::NAME}.PHP_EOL;
}

// Fetch the next page
$cursor->fetchAfter();
// New Objects will be appended to the cursor
```

#### Implicit Fetching

Whenever all object connected to a parent are required (carelessly from the number of HTTP requests) implicit fetching can help reducing the amount of code required.
If cursor has Implicit Fetching enabled, while iterating (foreach, Cursor::next(), Cursor::prev()) the page end is reached, the SDK will automatically fetch and append a new page, until cursor end.
Implicit Fetching will make you lose control of the number of HTTP request that will be sent and, for this reason, is disabled by default.
Implicit Fetching can be enabled for a specific cursor:

```php
$cursor->setUseImplicitFetch(true);
```

Or globally:

```php
use FacebookAds\Cursor;

Cursor::setDefaultUseImplicitFetch(true);
```

#### Reverse Iterations

Cursors are bi-directional, and can be iterated in reverse order:

```php
use FacebookAds\Object\AbstractCrudObject;

/** @var \FacebookAds\Cursor $cursor */
$cursor->setUseImplicitFetch(true);

$cursor->end();
while ($cursor->valid()) {
  echo $cursor->current()->{AbstractCrudObject::FIELD_ID}.PHP_EOL;
  $cursor->prev();
}

```

## Tests

The 'test' folder contains the test cases. These are logically divided in unit and integration tests.
Integration tests require an active Facebook Ad Account, a Facebook Application and a valid Access Token.

Note: we are currently unable to securely and reliably run integration tests on a public CI system. Our integrations with Travis and Scrutinizer (including badges at the top of this file) include only unit tests.


### Install dependencies

From the root folder run:

```shell
php composer.phar install --dev
```

### Execute unit tests only

```shell
./vendor/bin/phpunit -c test/phpunit-travis.xml
```

To run tests individually (be sure not to be pointing to an integration test file):

```shell
./vendor/bin/phpunit -c test/phpunit-travis.xml path/to/class/file
```


### Execute all tests (unit + integration)

Setup your integration config:

1 - Copy the config file template.

```shell
cp test/config.php.dist test/config.php
```

2 - Edit `test/config.php` with your informations.

Execute:

```shell
./vendor/bin/phpunit -c test/
```

To run tests individually:

```shell
./vendor/bin/phpunit -c test/ path/to/class/file
```

## Debug

If this SDK is not working as expected, it may be either a SDK issue or API issue.

This can be identified by constructing a raw cURL request and seeing if the response is as expected

for example:

```php
require __DIR__ . '/vendor/autoload.php';
use FacebookAds\Api;
use FacebookAds\Object\AdAccount;

Api::init($app_id, $app_secret, $access_token);
$api = Api::instance();

use FacebookAds\Logger\CurlLogger;
$api->setLogger(new CurlLogger());
$account = new AdAccount($account_id);
$account->read(array('id'));
```

When running this code, this cURL request will be printed to the console as:
```
curl -G \
  -d 'fields=id' \
  -d 'access_token=<access_token>' \
  https://graph.facebook.com/v3.1/<act_accountid>
```

## SDK Codegen
Our SDK is autogenerated from [SDK Codegen](https://github.com/facebook/facebook-business-sdk-codegen). If you want to learn more about how our SDK code is generated, please check this repository.

## Issue
Since we want to handle bugs more efficiently, we've decided to close issue reporting in Github and move to our dedicated bug reporting channel.
If you encounter a bug with Business SDK (PHP), please report the issue at [our developer bug reporting channel](https://developers.facebook.com/support/bugs/).
