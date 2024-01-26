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

namespace FacebookAdsTest\Object\ServerSide;

use PHPUnit\Framework\TestCase;
use FacebookAds\Object\ServerSide\Util;

class ServerSideUtilTest extends TestCase {

  public function setUp(): void {
    $_SERVER = [];
    $_COOKIE = [];
  }

  public function testNewEventTakesIpAddressFromHttpClientIP() {
    $_SERVER["HTTP_CLIENT_IP"] = "HTTP_CLIENT_IP_VALUE";
    $_SERVER["HTTP_X_FORWARDED_FOR"] = "HTTP_X_FORWARDED_FOR_VALUE";
    $_SERVER["REMOTE_ADDR"] = "REMOTE_ADDR";
    $this->assertEquals("HTTP_CLIENT_IP_VALUE",
      Util::getIpAddress());
  }

  public function testNewEventTakesIpAddressFromHttpXForwardedFor() {
    $_SERVER["HTTP_X_FORWARDED_FOR"] = "HTTP_X_FORWARDED_FOR_VALUE";
    $_SERVER["REMOTE_ADDR"] = "REMOTE_ADDR";
    $this->assertEquals("HTTP_X_FORWARDED_FOR_VALUE",
      Util::getIpAddress());
  }

  public function testNewEventTakesIpAddressFromRemoteAddr() {
    $_SERVER["REMOTE_ADDR"] = "REMOTE_ADDR_VALUE";
    $this->assertEquals("REMOTE_ADDR_VALUE",
      Util::getIpAddress());
  }

  public function testNewEventHasUserAgent() {
    $_SERVER["HTTP_USER_AGENT"] = "HTTP_USER_AGENT_VALUE";

    $this->assertEquals("HTTP_USER_AGENT_VALUE",
      Util::getHttpUserAgent());
  }

  public function testNewEventHasEventSourceUrlWithHttps() {
    $_SERVER["HTTPS"] = "anyvalue";
    $_SERVER["HTTP_HOST"] = "www.pikachu.com";
    $_SERVER["REQUEST_URI"] = "/index.php";

    $this->assertEquals("https://www.pikachu.com/index.php", Util::getRequestUri());
  }

  public function testNewEventHasEventSourceUrlWithHttp() {
    $_SERVER["HTTPS"] = "";
    $_SERVER["HTTP_HOST"] = "www.pikachu.com";
    $_SERVER["REQUEST_URI"] = "/index.php";


    $this->assertEquals("http://www.pikachu.com/index.php", Util::getRequestUri());
  }

  public function testNewEventHasEventSourceUrlWithHttpsOff() {
    $_SERVER["HTTPS"] = "off";
    $_SERVER["HTTP_HOST"] = "www.pikachu.com";
    $_SERVER["REQUEST_URI"] = "/index.php";

    $this->assertEquals("http://www.pikachu.com/index.php", Util::getRequestUri());
  }


  public function testNewEventHasFbc() {
    $_COOKIE["_fbc"] = "_fbc_value";

    $this->assertEquals("_fbc_value", Util::getFbc());
  }

  public function testNewEventHasFbp() {
    $_COOKIE["_fbp"] = "_fbp_value";

    $this->assertEquals("_fbp_value", Util::getFbp());
  }

  public function testGetCaBundlePath() {
    $this->assertTrue(file_exists(Util::getCaBundlePath()));
  }

  public function testGetAppsecretProof() {
    $access_token = 'accesstoken0';
    $appsecret = 'appsecret1';
    $expected_appsecret_proof = hash_hmac(
      'sha256',
      $access_token,
      $appsecret
    );

    $this->assertEquals(
      Util::getAppsecretProof($access_token, $appsecret),
      $expected_appsecret_proof
    );
  }
}
