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

namespace FacebookAdsTest\Config;

final class Config {

  /**
   * @var self
   */
  protected static $instance;

  /**
   * @var string
   */
  public $testRunId;

  /**
   * @var string
   */
  public $testImagePath;

  /**
   * @var string
   */
  public $testZippedImagesPath;

  /**
   * @var string
   */
  public $testVideoPath;

  /**
   * @var string
   */
  public $curlLogger;

  /**
   * @var string
   */
  public $appId;

  /**
   * @var string
   */
  public $appSecret;

  /**
   * @var string
   */
  public $accessToken;

  /**
   * @var string
   */
  public $businessId;

  /**
   * @var string
   */
  public $accountId;

  /**
   * @var string
   */
  public $pageId;

  /**
   * @var string
   */
  public $appUrl;

  /**
   * @var string
   */
  public $instagramActorId;

  /**
   * @var string
   */
  public $secondaryBusinessId;

  /**
   * @var string
   */
  public $secondaryPageId;

  /**
   * @var string
   */
  public $secondaryAccountId;

  /**
   * @var string
   */
  public $secondaryAppId;

  /**
   * @var string
   */
  public $graphBaseDomain;

  /**
   * @var bool
   */
  public $skipSslVerification;

  /**
   * @return Config
   */
  public static function instance() {
    return self::$instance ?: (self::$instance = new self());
  }

  /**
   * @param Config $config
   */
  public static function setInstance(Config $config) {
    self::$instance = $config;
  }

  /**
   * @param string $key
   * @param string $value
   */
  public function __set($key, $value) {
    throw new \RuntimeException("Unsupported key: {$key}");
  }
}
