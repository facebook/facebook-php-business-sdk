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

namespace FacebookAds\Http\Adapter\Curl;

abstract class AbstractCurl implements CurlInterface {

  /**
   * @var resource
   */
  protected $handle;

  /**
   * @throws \RuntimeException
   */
  public function __construct() {
    if (!extension_loaded('curl')) {
      throw new \RuntimeException("Extension curl not loaded");
    }
  }

  public function __clone() {
    $this->handle = curl_copy_handle($this->handle);
  }

  public function __destruct() {
    if (is_resource($this->handle)) {
      curl_close($this->handle);
    }
  }

  /**
   * @return CurlInterface
   */
  public static function createOptimalVersion() {
    if (version_compare(PHP_VERSION, '5.5.0') >= 0) {
      return new Curl55();
    } else {
      return new Curl();
    }
  }

  /**
   * @return resource
   */
  public function getHandle() {
    return $this->handle;
  }

  /**
   * @return int
   */
  public function errno() {
    return curl_errno($this->handle);
  }

  /**
   * @return string
   */
  public function error() {
    return curl_error($this->handle);
  }

  /**
   * @return mixed
   */
  public function exec() {
    return curl_exec($this->handle);
  }

  /**
   * @param int $opt
   * @return mixed
   */
  public function getInfo($opt = 0) {
    return curl_getinfo($this->handle, $opt);
  }

  /**
   * @return void
   */
  public function init() {
    $this->handle = $this->handle ?: curl_init();
  }

  /**
   * @param array $opts
   */
  public function setoptArray(array $opts) {
    curl_setopt_array($this->handle, $opts);
  }

  /**
   * @param int $option
   * @param mixed $value
   * @return bool
   */
  public function setopt($option, $value) {
    return curl_setopt($this->handle, $option, $value);
  }

  /**
   * @param int $age
   * @return array
   */
  public static function version($age) {
    return curl_version($age);
  }
}
