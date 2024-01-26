<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
