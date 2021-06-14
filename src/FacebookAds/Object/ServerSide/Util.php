<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds\Object\ServerSide;

/**
 * Util Class
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class Util {
  /**
   * @param string $data hash input data using SHA256 algorithm.
   * @return string
   */
  public static function hash($data) {
    if ($data == null || Util::isHashed($data)) {
      return $data;
    }
    return hash('sha256', $data, false);
  }

  /**
   * @param string $pii PII data to check if its hashed.
   * @return bool
   */
  public static function isHashed($pii) {
    // it could be sha256 or md5
    return preg_match('/^[A-Fa-f0-9]{64}$/', $pii) ||
      preg_match('/^[a-f0-9]{32}$/', $pii);
  }

  /**
   * Extracts the IP Address from the PHP Request Context.
   * @return string
   */
  public static function getIpAddress() {
    $ip_address = null;

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (!empty($_SERVER['REMOTE_ADDR'])) {
      $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    return $ip_address;
  }

  /**
   * Extracts the HTTP User Agent from the PHP Request Context.
   * @return string
   */
  public static function getHttpUserAgent() {
    $user_agent = null;

    if (!empty($_SERVER['HTTP_USER_AGENT'])) {
      $user_agent = $_SERVER['HTTP_USER_AGENT'];
    }

    return $user_agent;
  }

  /**
   * Extracts the URI from the PHP Request Context.
   * @return string
   */
  public static function getRequestUri() {
    $url = "http://";
    if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') {
      $url = "https://";
    }

    if (!empty($_SERVER['HTTP_HOST'])) {
      $url .= $_SERVER['HTTP_HOST'];
    }

    if (!empty($_SERVER['REQUEST_URI'])) {
      $url .= $_SERVER['REQUEST_URI'];
    }

    return $url;
  }

  /**
   * Extracts the FBP cookie from the PHP Request Context.
   * @return string
   */
  public static function getFbp() {
    $fbp = null;

    if (!empty($_COOKIE['_fbp'])) {
      $fbp = $_COOKIE['_fbp'];
    }

    return $fbp;
  }

  /**
   * Extracts the FBC cookie from the PHP Request Context.
   * @return string
   */
  public static function getFbc() {
    $fbc = null;

    if (!empty($_COOKIE['_fbc'])) {
      $fbc = $_COOKIE['_fbc'];
    }

    return $fbc;
  }

  public static function getCaBundlePath() {
    return __DIR__.DIRECTORY_SEPARATOR
      .str_repeat('..'.DIRECTORY_SEPARATOR, 4)
      .'fb_ca_chain_bundle.crt';
  }

  public static function getAppsecretProof($access_token, $appsecret) {
    return hash_hmac(
      'sha256',
      $access_token,
      $appsecret
    );
  }
}
