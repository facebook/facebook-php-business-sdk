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
use FacebookAdsTest\Config\SkippableFeaturesManager;

class IntegrationBootstrap extends Bootstrap {

  /**
   * @param string $file_path
   * @return array
   * @throws \RuntimeException
   */
  protected function loadConfigData($file_path) {
    if (!is_readable($file_path)) {
      throw new \RuntimeException("Could not read {$file_path}");
    }

    $data = require $file_path;
    if (!is_array($data)) {
      throw new \RuntimeException("Invalid config structure");
    }

    return $data;
  }

  /**
   * @return array
   */
  protected function getConfigData() {
    if ($this->configData === null) {
      $this->configData = $this->loadConfigData(__DIR__.'/../../config.php');
    }

    return $this->configData;
  }

  /**
   * @param string|int $key
   * @param mixed $default
   * @return mixed
   */
  protected function confx($key, $default = null) {
    return $this->idx($this->getConfigData(), $key, $default);
  }

  /**
   * @param string|int $key
   * @return mixed
   * @throws \Exception
   */
  protected function confxt($key) {
    return $this->idxt($this->getConfigData(), $key);
  }

  /**
   * @return Config
   */
  protected function getUnitConfig() {
    return parent::getConfig();
  }

  /**
   * @return Config
   */
  public function getConfig() {
    if ($this->config === null) {
      $this->config = parent::getConfig();
      $this->config->appId = $this->confx('app_id');
      $this->config->appSecret = $this->confx('app_secret');
      $this->config->accessToken = $this->confx('access_token');
      $this->config->accountId = $this->confx('act_id');
      $this->config->pageId = $this->confx('page_id');
      $this->config->appUrl = $this->confx('app_url');
      $this->config->businessId = $this->confx('business_id');
      $this->config->instagramActorId = $this->confx('instagram_actor_id');

      // Optionals: Override unit config
      $this->config->testRunId = $this->confx(
        'test_run_id', $this->config->testRunId);
      $this->config->testImagePath = $this->confx(
        'test_image_path', $this->config->testImagePath);
      $this->config->testZippedImagesPath = $this->confx(
        'test_zipped_images_path', $this->config->testZippedImagesPath);
      $this->config->testVideoPath = $this->confx(
        'test_video_path', $this->config->testVideoPath);

      // Optionals
      $this->config->secondaryBusinessId
        = $this->confx('secondary_business_id', '');
      $this->config->secondaryAccountId
        = $this->confx('secondary_account_id', '');
      $this->config->secondaryPageId = $this->confx('secondary_page_id', '');
      $this->config->secondaryAppId = $this->confx('secondary_app_id', '');
      $this->config->graphBaseDomain = $this->confx('graph_base_domain');
      $this->config->skipSslVerification
        = $this->confx('skip_ssl_verification', false);
      $this->config->curlLogger = $this->confx('curl_logger');

      SkippableFeaturesManager::setInstance(
        new SkippableFeaturesManager($this->confx('skip_if', array())));
    }

    return $this->config;
  }
}
