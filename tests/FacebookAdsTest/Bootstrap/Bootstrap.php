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

namespace FacebookAdsTest\Bootstrap;

use FacebookAdsTest\Config\Config;

class Bootstrap {

  /**
   * @var self
   */
  private static $instance;

  /**
   * @var bool
   */
  private $isIntialized = false;

  /**
   * @var array|null
   */
  protected $configData;

  /**
   * @var Config|null
   */
  protected $config;

  /**
   * @var mixed
   */
  protected $autoloader;

  /**
   * @throws \LogicException
   */
  final public function __construct() {
    if (self::$instance !== null) {
      throw new \LogicException("Bootstrap already instanciated");
    }

    self::$instance = $this;
  }

  /**
   * @return string
   */
  protected function getComposerAutoloadPath() {
    return __DIR__.'/../../../vendor/autoload.php';
  }

  /**
   * @return mixed
   */
  public function getAutoloader() {
    if ($this->autoloader === null) {
      $autoload_path = $this->getComposerAutoloadPath();
      if (!is_readable($autoload_path)) {
        throw new \RuntimeException("Could not read ".$autoload_path);
      }
      $this->autoloader = include $autoload_path;
      $this->autoloader->addPsr4('FacebookAdsTest\\', __DIR__.'/../');
    }

    return $this->autoloader;
  }

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and selecting a default value if it does not exist
   *
   * @param array $array
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  protected function idx(array $array, $key, $default = null) {
    return array_key_exists($key, $array) && $array[$key] !== ''
      ? $array[$key]
      : $default;
  }

  /**
   * Simplifies the common pattern of checking for an index in an array
   * and throw an exception if not
   *
   * @param array $array
   * @param string|int $key
   * @return mixed
   * @throws \Exception
   */
  protected function idxt(array $array, $key) {
    if (!array_key_exists($key, $array) || !$array[$key]) {
      throw new \Exception("Missing mandatory config '{$key}'");
    }

    return $array[$key];
  }

  /**
   * @return Config
   */
  public function getConfig() {
    if ($this->config === null) {
      $this->config = new Config();
      $this->config->testRunId
        = md5($this->idx($_SERVER, 'LOGNAME', uniqid(true)).microtime(true));
      $this->config->testImagePath = __DIR__.'/../../misc/image.png';
      $this->config->testZippedImagesPath = __DIR__.'/../../misc/images.zip';
      $this->config->testVideoPath = __DIR__.'/../../misc/video.mp4';
    }

    return $this->config;
  }

  /**
   * @throws \LogicException
   */
  public function init() {
    if ($this->isIntialized) {
      throw new \LogicException("Bootstrap already initialized");
    }

    $this->getAutoloader();
    Config::setInstance($this->getConfig());
  }
}
