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

use ArrayAccess;

/**
 * UserData is a set of identifiers Facebook can use for targeted attribution.
 *
 * @category    Class
 */
class UserData implements ArrayAccess {
  /**
   * The original name of the model.
   * @var string
   */
  protected static $swaggerModelName = 'server_side_pixel_user_data';

  /**
   * Array of property to type mappings. Used for (de)serialization
   * @var string[]
   */
  protected static $param_types = array(
    'email' => 'string',
    'phone' => 'string',
    'gender' => 'string',
    'date_of_birth' => 'string',
    'last_name' => 'string',
    'first_name' => 'string',
    'ct' => 'string',
    'state' => 'string',
    'country_code' => 'string',
    'zip_code' => 'string',
    'external_id' => 'string',
    'client_ip_address' => 'string',
    'client_user_agent' => 'string',
    'fbc' => 'string',
    'fbp' => 'string',
    'subscription_id' => 'string',
    'fb_login_id' => 'string',
    'lead_id' => 'string',
    'f5first' => 'string',
    'f5last' => 'string',
    'fi' => 'string',
    'dobd' => 'string',
    'dobm' => 'string',
    'doby' => 'string'
  );
  /**
   * Array of attributes where the key is the local name, and the value is the original name
   * @var string[]
   */
  protected static $attributeMap = array(
    'email' => 'email',
    'phone' => 'phone',
    'gender' => 'gender',
    'date_of_birth' => 'date_of_birth',
    'last_name' => 'last_name',
    'first_name' => 'first_name',
    'ct' => 'ct',
    'state' => 'state',
    'country_code' => 'country_code',
    'zip_code' => 'zip_code',
    'external_id' => 'external_id',
    'client_ip_address' => 'client_ip_address',
    'client_user_agent' => 'client_user_agent',
    'fbc' => 'fbc',
    'fbp' => 'fbp',
    'subscription_id' => 'subscription_id',
    'fb_login_id' => 'fb_login_id',
    'lead_id' => 'lead_id',
    'f5first' => 'f5first',
    'f5last' => 'f5last',
    'fi' => 'fi',
    'dobd' => 'dobd',
    'dobm' => 'dobm',
    'doby' => 'doby'
  );
  /**
   * Array of attributes to setter functions (for deserialization of responses)
   * @var string[]
   */
  protected static $setters = array(
    'email' => 'setEmail',
    'phone' => 'setPhone',
    'gender' => 'setGender',
    'date_of_birth' => 'setDateOfBirth',
    'last_name' => 'setLastName',
    'first_name' => 'setFirstName',
    'city' => 'setCity',
    'state' => 'setState',
    'country_code' => 'setCountryCode',
    'zip_code' => 'setZipCode',
    'external_id' => 'setExternalId',
    'client_ip_address' => 'setClientIpAddress',
    'client_user_agent' => 'setClientUserAgent',
    'fbc' => 'setFbc',
    'fbp' => 'setFbp',
    'subscription_id' => 'setSubscriptionId',
    'fb_login_id' => 'setFbLoginId',
    'lead_id' => 'setLeadId',
    'f5first' => 'setF5first',
    'f5last' => 'setF5last',
    'fi' => 'setFi',
    'dobd' => 'setDobd',
    'dobm' => 'setDobm',
    'doby' => 'setDoby'
  );
  /**
   * Array of attributes to getter functions (for serialization of requests)
   * @var string[]
   */
  protected static $getters = array(
    'email' => 'getEmail',
    'phone' => 'getPhone',
    'gender' => 'getGender',
    'date_of_birth' => 'getDateOfBirth',
    'last_name' => 'getLastName',
    'first_name' => 'getFirstName',
    'city' => 'getCity',
    'state' => 'getState',
    'country_code' => 'getCountryCode',
    'zip_code' => 'getZipCode',
    'external_id' => 'getExternalId',
    'client_ip_address' => 'getClientIpAddress',
    'client_user_agent' => 'getClientUserAgent',
    'fbc' => 'getFbc',
    'fbp' => 'getFbp',
    'subscription_id' => 'getSubscriptionId',
    'fb_login_id' => 'getFbLoginId',
    'lead_id' => 'getLeadId',
    'f5first' => 'getF5first',
    'f5last' => 'getF5last',
    'fi' => 'getFi',
    'dobd' => 'getDobd',
    'dobm' => 'getDobm',
    'doby' => 'getDoby'
  );
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
    $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
    $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
    $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
    $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
    $this->container['city'] = isset($data['city']) ? $data['city'] : null;
    $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
    $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
    $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
    $this->container['client_ip_address'] = isset($data['client_ip_address']) ? $data['client_ip_address'] : null;
    $this->container['client_user_agent'] = isset($data['client_user_agent']) ? $data['client_user_agent'] : null;
    $this->container['fbc'] = isset($data['fbc']) ? $data['fbc'] : null;
    $this->container['fbp'] = isset($data['fbp']) ? $data['fbp'] : null;
    $this->container['subscription_id'] = isset($data['subscription_id']) ? $data['subscription_id'] : null;
    $this->container['fb_login_id'] = isset($data['fb_login_id']) ? $data['fb_login_id'] : null;
    $this->container['lead_id'] = isset($data['lead_id']) ? $data['lead_id'] : null;
    $this->container['f5first'] = isset($data['f5first']) ? $data['f5first'] : null;
    $this->container['f5last'] = isset($data['f5last']) ? $data['f5last'] : null;
    $this->container['fi'] = isset($data['fi']) ? $data['fi'] : null;
    $this->container['dobd'] = isset($data['dobd']) ? $data['dobd'] : null;
    $this->container['dobm'] = isset($data['dobm']) ? $data['dobm'] : null;
    $this->container['doby'] = isset($data['doby']) ? $data['doby'] : null;
  }

  public static function paramTypes() {
    return self::$param_types;
  }

  public static function attributeMap() {
    return self::$attributeMap;
  }

  public static function setters() {
    return self::$setters;
  }

  public static function getters() {
    return self::$gendertters;
  }

  /**
   * show all the invalid properties with reasons.
   *
   * @return array invalid properties with reasons
   */
  public function listInvalidProperties() {
    $invalid_properties = array();
    return $invalid_properties;
  }

  /**
   * validate all the properties in the model
   * return true if all passed
   *
   * @return bool True if all properteis are valid
   */
  public function valid() {
    return true;
  }

  /**
   * Sets an email address, in lowercase.
   *
   * <p>Example: joe@eg.com
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
   * <p>Example: 16505551212
   * @param string $phone A phone number. Include only digits with country code, area code, and number.
   * @return $this
   */
  public function setPhone($phone) {
    $this->container['phone'] = $phone;

    return $this;
  }

  /**
   * Sets Gender, in lowercase. Either f or m.
   * @param FacebookAds\Object\ServerSide\Gender $gender Gender, in lowercase. Either f or m.
   * @return $this
   */
  public function setGender($gender) {
    $this->container['gender'] = $gender;

    return $this;
  }

  /**
   * Sets a date of birth given as year, month, and day.
   *
   * <p>Example: 19971226 for December 26, 1997.
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
   * <p>Example: smith
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
   * <p>Example: joe
   * @param string $first_name A first name in lowercase.
   * @return $this
   */
  public function setFirstName($first_name) {
    $this->container['first_name'] = $first_name;

    return $this;
  }

  /**
   * Sets a city in lower-case without spaces or punctuation.
   *
   * <p>Example: menlopark
   * @param string $city A city in lower-case without spaces or punctuation.
   * @return $this
   */
  public function setCity($city) {
    $this->container['city'] = $city;

    return $this;
  }

  /**
   * Sets a two-letter state code in lowercase.
   *
   * <p>Example: ca
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
   * <p>Example: us
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
   * <p>Example: 94035
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
   * Sets IP address of the browser corresponding to the event.
   * @param string $client_ip_address The IP address of the browser corresponding to the event.
   * @return $this
   */
  public function setClientIpAddress($client_ip_address) {
    $this->container['client_ip_address'] = $client_ip_address;

    return $this;
  }

  /**
   * Sets user agent for the browser corresponding to the event.
   * @param string $client_user_agent The user agent for the browser corresponding to the event.
   * @return $this
   */
  public function setClientUserAgent($client_user_agent) {
    $this->container['client_user_agent'] = $client_user_agent;

    return $this;
  }

  /**
   * Sets Facebook click ID value stored in the _fbc browser cookie under your domain. See Managing
   * fbc and fbp Parameters for how to get this value
   * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/parameters#fbc),
   * or generate this value from a fbclid query parameter.
   * @param string $fbc The Facebook click ID value stored in the _fbc browser cookie under your domain.
   * @return $this
   */
  public function setFbc($fbc) {
    $this->container['fbc'] = $fbc;

    return $this;
  }

  /**
   * Sets Set Facebook browser ID value stored in the _fbp browser cookie under your domain. See Managing
   * fbc and fbp Parameters for how to get this value
   * (https://developers.facebook.com/docs/marketing-api/facebook-pixel/server-side-api/parameters#fbc),
   * or generate this value from a fbclid query parameter.
   * @param string $fbp The Facebook browser ID value stored in the _fbp browser cookie under your domain.
   * @return $this
   */
  public function setFbp($fbp) {
    $this->container['fbp'] = $fbp;

    return $this;
  }

  /**
   * Sets subscription ID for the user in this transaction. This is similar to the order ID for an
   * individual product.
   * @param string $subscription_id The subscription ID for the user in this transaction.
   * @return $this
   */
  public function setSubscriptionId($subscription_id) {
    $this->container['subscription_id'] = $subscription_id;

    return $this;
  }

  /**
   * Sets FbLogin ID for the user in this transaction.
   * ID issued by Facebook when a person first logs into an instance of an app.
   * This is also known as App-Scoped ID.
   * @param string $fb_login_id The Fb_Login_Id for the user in this transaction.
   * @return $this
   */
  public function setFbLoginId($fb_login_id) {
    $this->container['fb_login_id'] = $fb_login_id;

    return $this;
  }

  /**
   * Sets lead_id for the user in this transaction.
   * A lead_id is associated with a lead generated by Facebook's Lead Ads.
   * @param string $lead_id The lead_id for the user in this transaction.
   * @return $this
   */
  public function setLeadId($lead_id) {
    $this->container['lead_id'] = $lead_id;

    return $this;
  }

  /**
   * Sets the first 5 letters of the first name.
   * @param string $f5first The first 5 letters of the first name.
   * @return $this
   */
  public function setF5first($f5first) {
    $this->container['f5first'] = $f5first;

    return $this;
  }

  /**
   * Sets the first 5 letters of the last name.
   * @param string $f5last The first 5 letters of the last name.
   * @return $this
   */
  public function setF5last($f5last) {
    $this->container['f5last'] = $f5last;

    return $this;
  }

  /**
   * Sets the first initial.
   * @param string $fi The first initial.
   * @return $this
   */
  public function setFi($fi) {
    $this->container['fi'] = $fi;

    return $this;
  }

  /**
   * Sets the date of birth day.
   * @param string $dobd The date of birth day.
   * @return $this
   */
  public function setDobd($dobd) {
    $this->container['dobd'] = $dobd;

    return $this;
  }

  /**
   * Sets the date of birth month.
   * @param string $dobm The date of birth month.
   * @return $this
   */
  public function setDobm($dobm) {
    $this->container['dobm'] = $dobm;

    return $this;
  }

  /**
   * Sets the date of birth year.
   * @param string $doby The date of birth year.
   * @return $this
   */
  public function setDoby($doby) {
    $this->container['doby'] = $doby;

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

  public function normalize() {
    $normalized_payload = array();

    $normalized_payload['em'] = Util::hash(Normalizer::normalize('em', $this->getEmail()));
    $normalized_payload['ph'] = Util::hash(Normalizer::normalize('ph', $this->getPhone()));
    $normalized_payload['ge'] = Util::hash(Normalizer::normalize('ge', $this->getGender()));
    $normalized_payload['db'] = Util::hash(Normalizer::normalize('db', $this->getDateOfBirth()));
    $normalized_payload['ln'] = Util::hash(Normalizer::normalize('ln', $this->getLastName()));
    $normalized_payload['fn'] = Util::hash(Normalizer::normalize('fn', $this->getFirstName()));
    $normalized_payload['ct'] = Util::hash(Normalizer::normalize('ct', $this->getCity()));
    $normalized_payload['st'] = Util::hash(Normalizer::normalize('st', $this->getState()));
    $normalized_payload['zp'] = Util::hash(Normalizer::normalize('zp', $this->getZipCode()));
    $normalized_payload['country'] = Util::hash(Normalizer::normalize('country', $this->getCountryCode()));
    $normalized_payload['external_id'] = $this->getExternalId();
    $normalized_payload['client_ip_address'] = $this->getClientIpAddress();
    $normalized_payload['client_user_agent'] = $this->getClientUserAgent();
    $normalized_payload['fbc'] = $this->getFbc();
    $normalized_payload['fbp'] = $this->getFbp();
    $normalized_payload['subscription_id'] = $this->getSubscriptionId();
    $normalized_payload['fb_login_id'] = $this->getFbLoginId();
    $normalized_payload['lead_id'] = $this->getLeadId();
    $normalized_payload['f5first'] = Util::hash(Normalizer::normalize('f5first', $this->getF5first()));
    $normalized_payload['f5last'] = Util::hash(Normalizer::normalize('f5last', $this->getF5last()));
    $normalized_payload['fi'] = Util::hash(Normalizer::normalize('fi', $this->getFi()));
    $normalized_payload['dobd'] = Util::hash(Normalizer::normalize('dobd', $this->getDobd()));
    $normalized_payload['dobm'] = Util::hash(Normalizer::normalize('dobm', $this->getDobm()));
    $normalized_payload['doby'] = Util::hash(Normalizer::normalize('doby', $this->getDoby()));
    $normalized_payload = array_filter($normalized_payload);
    return $normalized_payload;
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
   * Gets gender.
   * @return string
   */
  public function getGender() {
    return $this->container['gender'];
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
   * Gets IP address of the browser corresponding to the event.
   * @return string
   */
  public function getClientIpAddress() {
    return $this->container['client_ip_address'];
  }

  /**
   * Gets user agent for the browser corresponding to the event.
   * @return string
   */
  public function getClientUserAgent() {
    return $this->container['client_user_agent'];
  }

  /**
   * Gets the Facebook click ID value stored in the _fbc browser cookie under your domain.
   * @return string
   */
  public function getFbc() {
    return $this->container['fbc'];
  }

  /**
   * Gets the Facebook browser ID value stored in the _fbp browser cookie under your domain.
   * @return string
   */
  public function getFbp() {
    return $this->container['fbp'];
  }

  /**
   * Gets the subscription ID for the user in this transaction.
   * @return string
   */
  public function getSubscriptionId() {
    return $this->container['subscription_id'];
  }

  /**
   * Gets the FbLogin ID for the user in this transaction.
   * @return string
   */
  public function getFbLoginId() {
    return $this->container['fb_login_id'];
  }

  /**
   * Gets the lead_id for the user in this transaction.
   * @return string
   */
  public function getLeadId() {
    return $this->container['lead_id'];
  }

  /**
   * Gets the first 5 letters of the first name.
   * @return string
   */
  public function getF5first() {
    return $this->container['f5first'];
  }

  /**
   * Gets the first 5 letters of the last name.
   * @return string
   */
  public function getF5last() {
    return $this->container['f5last'];
  }

  /**
   * Gets the first initial.
   * @return string
   */
  public function getFi() {
    return $this->container['fi'];
  }

  /**
   * Gets the date of birth day.
   * @return string
   */
  public function getDobd() {
    return $this->container['dobd'];
  }

  /**
   * Gets the date of birth month.
   * @return string
   */
  public function getDobm() {
    return $this->container['dobm'];
  }

  /**
   * Gets the date of birth year.
   * @return string
   */
  public function getDoby() {
    return $this->container['doby'];
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
