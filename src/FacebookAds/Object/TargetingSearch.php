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

namespace FacebookAds\Object;

use FacebookAds\Api;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;

class TargetingSearch extends AbstractObject {

  /**
   * @param string $query
   * @param string $type
   * @param string $class
   * @param array $params
   * @param Api $api
   * @return Cursor
   * @throws \InvalidArgumentException
   */
  public static function search(
    $type,
    $class=null,
    $query=null,
    array $params = array(),
    Api $api = null) {

    $api = $api ?: Api::instance();
    if (!$api) {
      throw new \InvalidArgumentException(
        'An Api instance must be provided as argument or '.
        'set as instance in the \FacebookAds\Api');
    }

    $params = array_merge($params, array(
      'type' => $type,
      'class' => $class,
      'q' => $query,
    ));

    $response = $api->call('/search', RequestInterface::METHOD_GET, $params);
    return new Cursor($response, new TargetingSearch());
  }
}
