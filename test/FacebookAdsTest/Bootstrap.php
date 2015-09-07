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

namespace FacebookAdsTest;

use FacebookAdsTest\Config\Config;
use FacebookAdsTest\Config\SkippableFeaturesManager;

abstract class Bootstrap {

  /**
   * @string
   */
  const DEFAULT_TIMEZONE = 'UTC';

  private static $loader;

  /**
   * @var array
   */
  private static $config = array();

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and selecting a default value if it does not exist
   *
   * @param array $array
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  private static function idx(array $array, $key, $default = null) {
    return array_key_exists($key, $array) && $array[$key] !== ''
      ? $array[$key]
      : $default;
  }

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and throw an exception if not
   *
   * @param array $array
   * @param $key
   * @return mixed
   * @throws \Exception
   */
  private static function idxt(array $array, $key) {
    if (!array_key_exists($key, $array) || !$array[$key]) {
      throw new \Exception("Missing mandatory config '{$key}'");
    }

    return $array[$key];
  }

  /**
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  private static function confx($key, $default = null) {
    return self::idx(self::$config, $key, $default);
  }

  /**
   * @param $key
   * @return mixed
   * @throws \Exception
   */
  private static function confxt($key) {
    return self::idxt(self::$config, $key);
  }

  /**
   * @throws \RuntimeException
   */
  public static function initAutoloader() {
    $vendor_path = static::findParentPath('vendor');
    if (!$vendor_path || !is_readable($vendor_path . '/autoload.php')) {
      throw new \RuntimeException("Could not read autoload.php");
    }
    self::$loader = include $vendor_path . '/autoload.php';
    self::$loader->addPsr4(
      'FacebookAdsTest\\', __DIR__.'/');
  }

  /**
   * @param $filepath
   * @return array
   */
  protected static function readConfigFile($filepath) {
    if (!is_readable($filepath)) {
      throw new \RuntimeException("Could not read {$filepath}");
    }
    $config = require $filepath;
    if (!is_array($config)) {
      throw new \RuntimeException("Invalid config structure");
    }

    return $config;
  }

  /**
   * @return Config
   * @throws \Exception
   */
  public static function initUnitConfig() {
    $config = Config::instance();
    $config->testRunId = md5(
      (isset($_SERVER['LOGNAME']) ? $_SERVER['LOGNAME'] : uniqid(true))
      . microtime(true));
    $config->testImagePath = __DIR__.'/../misc/image.png';
    $config->testZippedImagesPath = __DIR__.'/../misc/images.zip';
    $config->testVideoPath = __DIR__.'/../misc/video.mp4';

    return $config;
  }

  /**
   * @return Config
   * @throws \Exception
   */
  public static function initIntegrationConfig() {
    static::$config = static::readConfigFile(dirname(__DIR__).'/config.php');
    $config = static::initUnitConfig();
    $config->appId = self::confxt('app_id');
    $config->appSecret = self::confxt('app_secret');
    $config->accessToken = self::confxt('access_token');
    $config->accountId = self::confxt('act_id');
    $config->pageId = self::confxt('page_id');
    $config->appUrl = self::confxt('app_url');
    $config->businessId = self::confxt('business_id');

    // Optionals
    $config->secondaryBusinessId = self::confx('secondary_business_id', '');
    $config->secondaryAccountId = self::confx('secondary_account_id', '');
    $config->secondaryPageId = self::confx('secondary_page_id', '');
    $config->secondaryAppId = self::confx('secondary_app_id', '');
    $config->graphBaseDomain = self::confx('graph_base_domain');
    $config->skipSslVerification = self::confx('skip_ssl_verification', false);
    $config->curlLogger = self::confx('curl_logger');

    if (date_default_timezone_set(self::confxt('act_timezone')) === false) {
      throw new \InvalidArgumentException(sprintf(
        'Not a valid timezone: "%s"', self::confx('act_timezone')));
    }

    SkippableFeaturesManager::setInstance(
      new SkippableFeaturesManager(self::confx('skip_if', array())));

    return $config;
  }

  /**
   * @param string $path
   * @return string
   */
  protected static function findParentPath($path) {
    $dir = __DIR__;
    $previous = '.';
    while (!is_dir($dir.'/'.$path)) {
      $dir = dirname($dir);
      if ($previous === $dir) {
        return false;
      }
      $previous = $dir;
    }
    return $dir.'/'.$path;
  }
}
