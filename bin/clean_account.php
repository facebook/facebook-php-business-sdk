#!/usr/bin/env php
<?php
/*
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

use FacebookAds\Api;
use FacebookAds\Cursor;
use FacebookAds\Object\AbstractCrudObject;
use FacebookAds\Object\AdAccount;
use FacebookAds\Logger\CurlLogger;
use FacebookAdsTest\Bootstrap\IntegrationBootstrap;

chdir(__DIR__);

/** @var IntegrationBootstrap $bootstrap */
if (in_array('--docsmith-bootstrap', $_SERVER['argv'])) {
  $bootstrap = require_once __DIR__.'/../docsmith/init_integration.php';
} else {
  $bootstrap = require_once __DIR__.'/../test/init_integration.php';
}

$config = $bootstrap->getConfig();

Api::init($config->appId, $config->appSecret, $config->accessToken);

if (in_array('--dump', $_SERVER['argv'])) {
  Api::instance()->setLogger(new CurlLogger(STDERR));
}

$get_class_name = function($object) {
  return (new ReflectionClass($object))->getShortName();
};

$delete_object = function(AbstractCrudObject $object) use ($get_class_name) {
  echo sprintf(
    ' > Deleting %s %d',
    $get_class_name($object),
    $object->{AbstractCrudObject::FIELD_ID}).PHP_EOL;

  try {
    $object->deleteSelf();
  } catch (Exception $e) {
    echo sprintf(" > Deletion failed with %s: %s",
      $get_class_name($e),
      $e->getMessage()).PHP_EOL;
  }
};

$clean_edge = function($cursor_provider) use ($get_class_name, $delete_object) {
  try {
    $cursor = call_user_func($cursor_provider);
    if (!$cursor instanceof Cursor) {
      throw new ErrorException(sprintf(
        "Provider returned instance of %s",
        $get_class_name($cursor)));
    }
    $cursor->setUseImplicitFetch(true);
    foreach ($cursor as $object) {
      if (!$object instanceof AbstractCrudObject) {
        throw new ErrorException(sprintf(
          "Provider returned instance of %s, not a CRUD object",
          $get_class_name($object)));
      }

      $trait = 'FacebookAds\Object\Traits\CannotDelete';
      if (in_array($trait, (new ReflectionClass($object))->getTraitNames())) {
        break;
      }
      $delete_object($object);
    }
  } catch (Exception $e) {
    echo sprintf(" > Edge iteration failed with %s: %s",
      $get_class_name($e),
      $e->getMessage()).PHP_EOL;
  }
};

$account = new AdAccount($config->accountId);
$reflection = new ReflectionClass($account);

foreach ($reflection->getMethods(ReflectionMethod::IS_PUBLIC) as $method) {
  if (
    strncasecmp($method->getName(), 'get', 3) !== 0
    || preg_match('/@return\s+Cursor/', $method->getDocComment()) !== 1
  ) {
    continue;
  }

  echo sprintf(' > Fetching AdAccount::%s', $method->getName()).PHP_EOL;
  $clean_edge($method->getClosure($account));
}
