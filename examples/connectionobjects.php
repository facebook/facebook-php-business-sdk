<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

// Configurations
$access_token = null;
$app_id = null;
$app_secret = null;
define('SDK_DIR', __DIR__ . '/..'); // Path to the SDK directory
$loader = include SDK_DIR.'/vendor/autoload.php';
// Configurations - End

if(is_null($access_token) || is_null($app_id) || is_null($app_secret)) {
  throw new \Exception(
    'You must set your access token, app id and app secret before executing'
  );
}

use FacebookAds\Api;
use FacebookAds\Object\AdUser;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Fields\ConnectionObjectFields;
use FacebookAds\Object\Values\ConnectionObjectTypes;

Api::init($app_id, $app_secret, $access_token);

// Use the first account - Connection objects are not actually account-specific
// so the account ID doesn't matter
$user = new AdUser('me');
$accounts = $user->getAdAccounts([AdAccountFields::ID]);
$account = $accounts[0];

$connection_objects = $account->getConnectionObjects([
  ConnectionObjectFields::ID,
  ConnectionObjectFields::NAME,
  ConnectionObjectFields::OBJECT_STORE_URLS,
  ConnectionObjectFields::TYPE,
  ConnectionObjectFields::URL,
]);

// Group the connection objects based on type
$groups = [];

foreach ($connection_objects as $object) {
  if (!isset($groups[$object->type])) {
    $groups[$object->type] = [];
  }
  $groups[$object->type][] = $object;
}

foreach ($groups as $type => $type_objects) {
  $type_name = get_type_name($type);
  echo "\n", $type_name, "\n";
  echo str_repeat('=', strlen($type_name)), "\n";

  foreach ($type_objects as $object) {
    render_object($object);
  }
}

function get_type_name($type) {
  switch ($type) {
    case ConnectionObjectTypes::PAGE:
      return 'Page';
    case ConnectionObjectTypes::APPLICATION:
      return 'Application';
    case ConnectionObjectTypes::EVENT:
      return 'Event';
    case ConnectionObjectTypes::PLACE:
      return 'Place';
    case ConnectionObjectTypes::DOMAIN:
      return 'Domain';
    default:
      return $type;
  }
}

function render_object($object) {
  switch ($object->type) {
    case ConnectionObjectTypes::APPLICATION:
      echo ' - ', $object->id, ' - ', $object->name, "\n";
      foreach ($object->object_store_urls as $store_name => $store_url) {
        echo '   ', $store_name, ': ', $store_url, "\n";
      }
      return;

    default:
      echo ' - ', $object->id, ' - ', $object->name, ' - ', $object->url, "\n";
      return;
  }

}
