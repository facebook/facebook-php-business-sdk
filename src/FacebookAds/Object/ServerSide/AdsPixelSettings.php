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

namespace FacebookAds\Object\ServerSide;

use FacebookAds\Http\Client;
use FacebookAds\Http\SimpleRequest;
use FacebookAds\Exception\Exception;

use ArrayAccess;

class AdsPixelSettings implements ArrayAccess {

  /**
   * @var string
   */
  const SIGNALS_JSON_CONFIG_PATH = 'signals/config/json';

  /**
   * Associative array for storing property values
   * @var mixed[]
   */
  protected $container = array();

   /**
   * Constructor
   * @param mixed[] $data Associated array of property value initializing the model
   */
  public function __construct(array $data = null) {
    $this->container['enable_automatic_matching'] = isset($data['enableAutomaticMatching']) ? $data['enableAutomaticMatching'] : null;;
    $this->container['enabled_automatic_matching_fields'] = isset($data['enabledAutomaticMatchingFields']) ? $data['enabledAutomaticMatchingFields'] : null;
    $this->container['pixel_id'] = isset($data['pixel_id']) ? $data['pixel_id'] : null;
  }

  /**
   * Factory method to build the settings given a pixel id
   * @param string $pixelId
   * @return AdsPixelId
   */
  public static function buildFromPixelId($pixelId){
    $response = self::callPixelSettingsEndpoint($pixelId);
    if( $response !== null ){
      $jsonString = $response->getBody();
      $pixelSettingsAsDict = json_decode($jsonString, true);
      if (array_key_exists('errorMessage', $pixelSettingsAsDict)){
        return null;
      }
      $pixelSettingsAsDict['matchingConfig']['pixel_id'] = $pixelId;
      return new AdsPixelSettings($pixelSettingsAsDict['matchingConfig']);
    }
    return null;
  }

  /**
   * @param string $pixelId
   * @return SimpleRequest
  */
  private static function callPixelSettingsEndpoint($pixelId){
    $path = sprintf("%s/%s/", self::SIGNALS_JSON_CONFIG_PATH, $pixelId);
    $client = new Client();
    $request = new SimpleRequest($client);
    $request->setPath($path);
    try{
      return $client->sendRequest($request);
    }
    catch(Exception $e){
      return null;
    }
  }

  /**
   * Get Pixel Id.
   * @return string pixel id
   */
  public function getPixelId() {
    return $this->container['pixel_id'];
  }


  /**
   * Sets Pixel id.
   * @param string $pixelId
   * @return $this
   */
  public function setPixelId($pixelId) {
    $this->container['pixel_id'] = $pixelId;
    return $this;
  }

  /**
   * Get Enable automatic matching.
   * @return bool enable automatic matching
   */
  public function getEnableAutomaticMatching() {
    return $this->container['enable_automatic_matching'];
  }


  /**
   * Sets Enable automatic matching.
   * @param bool $enableAutomaticMatching
   * @return $this
   */
  public function setEnableAutomaticMatching($enableAutomaticMatching) {
    $this->container['enable_automatic_matching'] = $enableAutomaticMatching;
    return $this;
  }

  /**
   * Get Enabled automatic matching fields.
   * @return array enabled automatic matching fields
   */
  public function getEnabledAutomaticMatchingFields() {
    return $this->container['enabled_automatic_matching_fields'];
  }


  /**
   * Sets Enabled automatic matching fields.
   * @param array $enabledAutomaticMatchingFields
   * @return $this
   */
  public function setEnabledAutomaticMatchingFields($enabledAutomaticMatchingFields) {
    $this->container['enabled_automatic_matching_fields'] = $enabledAutomaticMatchingFields;
    return $this;
  }

  /**
   * Returns true if offset exists. False otherwise.
   * @param integer $offset Offset
   * @return boolean
   */
  public function offsetExists($offset) {
    return isset($this->container[$offset]);
  }

  /**
   * Gets offset.
   * @param integer $offset Offset
   * @return mixed
   */
  public function offsetGet($offset) {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * Sets value based on offset.
   * @param integer $offset Offset
   * @param mixed $value Value to be set
   * @return void
   */
  public function offsetSet($offset, $value) {
    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * Unsets offset.
   * @param integer $offset Offset
   * @return void
   */
  public function offsetUnset($offset) {
    unset($this->container[$offset]);
  }

  /**
   * Gets the string presentation of the object
   * @return string
   */
  public function __toString() {
    if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
      return json_encode($this, JSON_PRETTY_PRINT);
    }
    return json_encode($this);
  }

}
