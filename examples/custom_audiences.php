<?php
/**
 * Copyright 2014 Facebook, Inc.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

// Set your access token here:
$access_token = null;
$app_id = null;
$app_secret = null;

// Set your ad account here: act_XX
$account_id = null;

if (is_null($access_token) || is_null($app_id) || is_null($app_secret)) {
  throw new \Exception(
    'You must set your access token, app id and app secret before executing'
  );
}

if (is_null($account_id)) {
  throw new \Exception(
    'You must set your account id before executing');
}

define('SDK_DIR', __DIR__ . '/..'); // Path to the SDK directory
$loader = include SDK_DIR.'/vendor/autoload.php';

use FacebookAds\Api;

Api::init($app_id, $app_secret, $access_token);

// use the namespace for Custom Audiences and Fields
use FacebookAds\Object\CustomAudience;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceTypes;

// Create a custom audience object, setting the parent to be the account id
$audience = new CustomAudience(null, $account_id);
$audience->setData(array(
  CustomAudienceFields::NAME => 'My Custom Audiece',
  CustomAudienceFields::DESCRIPTION => 'Lots of people',
));
// Create the audience
$audience->create();
echo "Audience ID: " . $audience->id."\n";

// Assuming you have an array of emails:
$emails = array(
  'paul@example.com',
  'luca@example.com',
  'bruce@example.com',
  'peihua@example.com',
);

$audience->addUsers($emails, CustomAudienceTypes::EMAIL);
$audience->read(array(CustomAudienceFields::APPROXIMATE_COUNT));
echo "Estimated Size:"
  . $audience->{CustomAudienceFields::APPROXIMATE_COUNT}."\n";
