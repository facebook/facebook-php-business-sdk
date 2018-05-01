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

namespace FacebookAds;

class Session implements SessionInterface {

  /**
   * @var string
   */
  protected $appId;

  /**
   * @var string
   */
  protected $appSecret;

  /**
   * @var string
   */
  protected $accessToken;

  /**
   * @var string
   */
  protected $appSecretProof;

  /**
   * @param string $app_id
   * @param string $app_secret
   * @param string $access_token
   */
  public function __construct($app_id, $app_secret, $access_token) {
    $this->appId = $app_id;
    $this->appSecret = $app_secret;
    $this->accessToken = $access_token;
  }

  /**
   * @return string
   */
  public function getAppId() {
    return $this->appId;
  }

  /**
   * @return string
   */
  public function getAppSecret() {
    return $this->appSecret;
  }

  /**
   * @return string
   */
  public function getAccessToken() {
    return $this->accessToken;
  }

  /**
   * @return string
   */
  public function getAppSecretProof() {
    if ($this->getAppSecret() === null) {
      return null;
    }
    if ($this->appSecretProof === null) {
      $this->appSecretProof
        = hash_hmac('sha256', $this->getAccessToken(), $this->getAppSecret());
    }
    return $this->appSecretProof;
  }

  /**
   * @return array
   */
  public function getRequestParameters() {
    if ($this->getAppSecretProof() !== null) {
      return array(
        'access_token' => $this->getAccessToken(),
        'appsecret_proof' => $this->getAppSecretProof(),
      );
    } else {
      return array(
        'access_token' => $this->getAccessToken(),
      );
    }
  }
}
