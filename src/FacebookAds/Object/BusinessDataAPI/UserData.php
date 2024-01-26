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

namespace FacebookAds\Object\BusinessDataAPI;

/**
 * UserData is a set of identifiers Facebook can use for targeted attribution.
 *
 * @category    Class
 */
class UserData {

  /**
   * Associative array for storing property values
   * @var mixed[]
   */
  protected $container = array();

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initalizing the model
   */
  public function __construct(array $data = null) {
    $this->container['email'] = isset($data['email']) ? $data['email'] : null;
    $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
    $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
    $this->container['city'] = isset($data['city']) ? $data['city'] : null;
    $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
    $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
    $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
    $this->container['address'] = isset($data['address']) ? $data['address'] : null;
  }


  /**
   * Sets an email address, in lowercase.
   *
   * Example: joe@eg.com
   * @param string $email An email address, in lowercase.
   * @return $this
   */
  public function setEmail($email) {
    $this->container['email'] = $email;

    return $this;
  }

  /**
   * Sets a phone number. Include only digits with countryCode code, area code, and number.
   *
   * Example: 16505551212
   * @param string $phone A phone number. Include only digits with country code, area code, and number.
   * @return $this
   */
  public function setPhone($phone) {
    $this->container['phone'] = $phone;

    return $this;
  }

  /**
   * Sets a date of birth given as year, month, and day.
   *
   * Example: 19971226 for December 26, 1997.
   * @param string $date_of_birth A date of birth given as year, month, and day.
   * @return $this
   */
  public function setDateOfBirth($date_of_birth) {
    $this->container['date_of_birth'] = $date_of_birth;

    return $this;
  }

  /**
   * Sets a last name in lowercase.
   *
   * Example: smith
   * @param string $last_name A last name in lowercase.
   * @return $this
   */
  public function setLastName($last_name) {
    $this->container['last_name'] = $last_name;

    return $this;
  }

  /**
   * Sets a first name in lowercase.
   *
   * Example: joe
   * @param string $first_name A first name in lowercase.
   * @return $this
   */
  public function setFirstName($first_name) {
    $this->container['first_name'] = $first_name;

    return $this;
  }

  /**
   * Sets a city in lowercase without spaces or punctuation.
   *
   * Example: menlopark
   * @param string $city A city in lowercase without spaces or punctuation.
   * @return $this
   */
  public function setCity($city) {
    $this->container['city'] = $city;

    return $this;
  }

  /**
   * Sets a two-letter state code in lowercase.
   *
   * Example: ca
   * @param string $state A two-letter state code in lowercase.
   * @return $this
   */
  public function setState($state) {
    $this->container['state'] = $state;

    return $this;
  }

  /**
   * Sets a two-letter country code in lowercase.
   *
   * Example: us
   * @param string $country_code two-letter country code in lowercase.
   * @return $this
   */
  public function setCountryCode($country_code) {
    $this->container['country_code'] = $country_code;

    return $this;
  }

  /**
   * Sets a five-digit zip code.
   *
   * Example: 94035
   * @param string $zip_code A five-digit zip code.
   * @return $this
   */
  public function setZipCode($zip_code) {
    $this->container['zip_code'] = $zip_code;

    return $this;
  }

  /**
   * Sets any unique ID from the advertiser, such as loyalty membership IDs, user IDs, and external
   * cookie IDs. In the Offline Conversions API, this is known as extern_id. For more information,
   * see Offline Conversions, Providing External IDs. If External ID is being sent via other
   * channels, then it should be sent in the same format via the server-side API.
   * @param string $external_id Any unique ID from the advertiser, such as loyalty membership IDs,
   *      user IDs, and external cookie IDs.
   * @return $this
   */
  public function setExternalId($external_id) {
    $this->container['external_id'] = $external_id;

    return $this;
  }

  /**
   * Sets physical address
   * Example: 1001 Westlake Ave
   * @param string $address Physical address
   * @return $this
   */
  public function setAddress($address) {
    $this->container['address'] = $address;

    return $this;
  }

  public function toJson() {
    $request = array();

    $request['em'] = $this->getEmail();
    $request['ph'] = $this->getPhone();
    $request['db'] = $this->getDateOfBirth();
    $request['ln'] = $this->getLastName();
    $request['fn'] = $this->getFirstName();
    $request['ct'] = $this->getCity();
    $request['st'] = $this->getState();
    $request['zp'] = $this->getZipCode();
    $request['country'] = $this->getCountryCode();
    $request['external_id'] = $this->getExternalId();
    $request['addr'] = $this->getAddress();
    $request = array_filter($request);
    return $request;
  }

  /**
   * Gets an email address, in lowercase.
   * @return string
   */
  public function getEmail() {
    return $this->container['email'];
  }

  /**
   * Gets a phone number
   * @return string
   */
  public function getPhone() {
    return $this->container['phone'];
  }

  /**
   * Gets Date Of Birth.
   * @return string
   */
  public function getDateOfBirth() {
    return $this->container['date_of_birth'];
  }

  /**
   * Gets Last Name.
   * @return string
   */
  public function getLastName() {
    return $this->container['last_name'];
  }

  /**
   * Gets First Name.
   * @return string
   */
  public function getFirstName() {
    return $this->container['first_name'];
  }

  /**
   * Gets city.
   * @return string
   */
  public function getCity() {
    return $this->container['city'];
  }

  /**
   * Gets state.
   * @return string
   */
  public function getState() {
    return $this->container['state'];
  }

  /**
   * Gets zip code
   * @return string
   */
  public function getZipCode() {
    return $this->container['zip_code'];
  }

  /**
   * Gets country code.
   * @return string
   */
  public function getCountryCode() {
    return $this->container['country_code'];
  }

  /**
   * Gets Any unique ID from the advertiser, such as loyalty membership IDs, user IDs, and external cookie IDs.
   * @return string
   */
  public function getExternalId() {
    return $this->container['external_id'];
  }

  /**
   * Gets physical address
   * @return string
   */
  public function getAddress() {
    return $this->container['address'];
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
