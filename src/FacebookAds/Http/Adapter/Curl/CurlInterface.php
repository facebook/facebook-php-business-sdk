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

interface CurlInterface {

  /**
   * @return resource
   */
  public function getHandle();

  /**
   * @return int
   */
  public function errno();

  /**
   * @return string
   */
  public function error();

  /**
   * @param string $string
   * @return bool|string
   */
  public function escape($string);

  /**
   * @return mixed
   */
  public function exec();

  /**
   * @param int $opt
   * @return mixed
   */
  public function getInfo($opt = 0);

  /**
   * @return void
   */
  public function init();

  /**
   * @param int $bitmask
   * @return int
   */
  public function pause($bitmask);

  /**
   * @param $filepath
   * @return string|\CurlFile
   */
  public function preparePostFileField($filepath);

  /**
   * @return void
   */
  public function reset();

  /**
   * @param array $opts
   */
  public function setoptArray(array $opts);

  /**
   * @param int $option
   * @param mixed $value
   * @return bool
   */
  public function setopt($option, $value);

  /**
   * @param $string
   * @return string
   */
  public function unescape($string);

  /**
   * @param int $age
   * @return array
   */
  public static function version($age);
}
