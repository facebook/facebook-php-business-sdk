#!/usr/bin/env php
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

use FacebookAdsTest\Bootstrap;
use FacebookAdsDocsmith\Runner;
use FacebookAdsDocsmith\Runner\ActionsEnum;
use FacebookAdsDocsmith\Runner\OptionsEnum;
use FacebookAdsTest\Bootstrap\IntegrationBootstrap;

$relative_path = getcwd();
chdir(__DIR__);

/** @var IntegrationBootstrap $bootstrap */
$bootstrap = require_once __DIR__.'/../docsmith/init_auto.php';

if ($argc < 3) {
  Runner::throwInvalidUsage("Insufficient number of arguments");
}

$action = $argv[1];
if (!ActionsEnum::getInstance()->isValidValue($action)) {
  Runner::throwInvalidUsage("Unknown action {$action}");
}

$doc_path = $argv[2][0] == '/'
  ? $argv[2]
  : realpath($relative_path.'/'.$argv[2]);

if (!file_exists($doc_path)) {
  Runner::throwInvalidUsage("Can't open {$doc_path} for reading");
}

$opts = array_splice($argv, 3);
$options = new ArrayObject(
  array_fill_keys(OptionsEnum::getInstance()->getValues(), false));

foreach ($opts as $opt) {
  $opt = substr($opt, 1);
  if (OptionsEnum::getInstance()->isValidValue($opt)) {
    $options->offsetSet($opt, true);
  }
}

$runner = new Runner($doc_path, $action, $options);

exit($runner->run());
