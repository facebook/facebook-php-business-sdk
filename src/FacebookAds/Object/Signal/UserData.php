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

namespace FacebookAds\Object\Signal;

use Util;

use FacebookAds\Object\BusinessDataAPI\UserData as BusinessDataUserData;
use FacebookAds\Object\ServerSide\UserData as ServerSideUserData;

/**
 * UserData is a set of identifiers Facebook can use for targeted attribution.
 *
 * @category    Class
 */
class UserData {

  /**
   * Associative array for storing property values for Business Data API
   * @var BusinessDataUserData
   */
  protected $businessDataUserData = null;

  /**
   * Associative array for storing property values for Conversion API
   * @var ServerSideUserData
   */
  protected $serverSideUserData = null;

  /**
   * Constructor
   * @param mixed[] $data Associated array of property value initalizing the model
   */
  public function __construct(array $data = null) {
    $this->businessDataUserData = new BusinessDataUserData($data);
    $this->serverSideUserData = new ServerSideUserData($data);
  }

  /**
   * Sets an email address, in lowercase.
   *
   * Example: joe@eg.com
   * @param string $email An email address, in lowercase.
   * @return $this
   */
  public function setEmail($email) {
    $this->businessDataUserData->setEmail($email);
    $this->serverSideUserData->setEmail($email);
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
    $this->businessDataUserData->setPhone($phone);
    $this->serverSideUserData->setPhone($phone);

    return $this;
  }

  /**
   * Sets Gender, in lowercase. Either f or m.
   * @param FacebookAds\Object\ServerSide\Gender $gender Gender, in lowercase. Either f or m.
   * @return $this
   */
  public function setGender($gender) {
    $this->serverSideUserData->setGender($gender);

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
    $this->businessDataUserData->setDateOfBirth($date_of_birth);
    $this->serverSideUserData->setDateOfBirth($date_of_birth);

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
    $this->businessDataUserData->setLastName($last_name);
    $this->serverSideUserData->setLastName($last_name);

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
    $this->businessDataUserData->setFirstName($first_name);
    $this->serverSideUserData->setFirstName($first_name);

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
    $this->businessDataUserData->setCity($city);
    $this->serverSideUserData->setCity($city);

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
    $this->businessDataUserData->setState($state);
    $this->serverSideUserData->setState($state);

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
    $this->businessDataUserData->setCountryCode($country_code);
    $this->serverSideUserData->setCountryCode($country_code);

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
    $this->businessDataUserData->setZipCode($zip_code);
    $this->serverSideUserData->setZipCode($zip_code);

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
    $this->businessDataUserData->setExternalId($external_id);
    $this->serverSideUserData->setExternalId($external_id);

    return $this;
  }

  /**
   * Sets IP address of the browser corresponding to the event.
   * @param string $client_ip_address The IP address of the browser corresponding to the event.
   * @return $this
   */
  public function setClientIpAddress($client_ip_address) {
    $this->serverSideUserData->setClientIpAddress($client_ip_address);

    return $this;
  }

  /**
   * Sets user agent for the browser corresponding to the event.
   * @param string $client_user_agent The user agent for the browser corresponding to the event.
   * @return $this
   */
  public function setClientUserAgent($client_user_agent) {
    $this->serverSideUserData->setClientUserAgent($client_user_agent);

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
    $this->serverSideUserData->setFbc($fbc);

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
    $this->serverSideUserData->setFbp($fbp);

    return $this;
  }

  /**
   * Sets subscription ID for the user in this transaction. This is similar to the order ID for an
   * individual product.
   * @param string $subscription_id The subscription ID for the user in this transaction.
   * @return $this
   */
  public function setSubscriptionId($subscription_id) {
    $this->serverSideUserData->setSubscriptionId($subscription_id);

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
    $this->serverSideUserData->setFbLoginId($fb_login_id);

    return $this;
  }

  /**
   * Sets lead_id for the user in this transaction.
   * A lead_id is associated with a lead generated by Facebook's Lead Ads.
   * @param string $lead_id The lead_id for the user in this transaction.
   * @return $this
   */
  public function setLeadId($lead_id) {
    $this->serverSideUserData->setLeadId($lead_id);

    return $this;
  }

  /**
   * Sets the first 5 letters of the first name.
   * @param string $f5first The first 5 letters of the first name.
   * @return $this
   */
  public function setF5first($f5first) {
    $this->serverSideUserData->setF5first($f5first);

    return $this;
  }

  /**
   * Sets the first 5 letters of the last name.
   * @param string $f5last The first 5 letters of the last name.
   * @return $this
   */
  public function setF5last($f5last) {
    $this->serverSideUserData->setF5last($f5last);

    return $this;
  }

  /**
   * Sets the first initial.
   * @param string $fi The first initial.
   * @return $this
   */
  public function setFi($fi) {
    $this->serverSideUserData->setFi($fi);

    return $this;
  }

  /**
   * Sets the date of birth day.
   * @param string $dobd The date of birth day.
   * @return $this
   */
  public function setDobd($dobd) {
    $this->serverSideUserData->setDobd($dobd);

    return $this;
  }

  /**
   * Sets the date of birth month.
   * @param string $dobm The date of birth month.
   * @return $this
   */
  public function setDobm($dobm) {
    $this->serverSideUserData->setDobm($dobm);

    return $this;
  }

  /**
   * Sets the date of birth year.
   * @param string $doby The date of birth year.
   * @return $this
   */
  public function setDoby($doby) {
    $this->serverSideUserData->setDoby($doby);

    return $this;
  }

  /**
   * Sets physical address.
   * @param string $address The physical address.
   * @return $this
   */
  public function setAddress($address) {
    $this->businessDataUserData->setAddress($address);

    return $this;
  }

  /**
   * Gets an email address, in lowercase.
   * @return array
   */
  public function getEmail() {
    return Util::constructResponse($this->serverSideUserData->getEmail(), $this->businessDataUserData->getEmail());
  }

  /**
   * Gets a phone number
   * @return array
   */
  public function getPhone() {
    return Util::constructResponse($this->serverSideUserData->getPhone(), $this->businessDataUserData->getPhone());
  }

  /**
   * Gets gender.
   * @return array
   */
  public function getGender() {
    return Util::constructResponse($this->serverSideUserData->getGender(), null);
  }

  /**
   * Gets Date Of Birth.
   * @return array
   */
  public function getDateOfBirth() {
    return Util::constructResponse($this->serverSideUserData->getDateOfBirth(), $this->businessDataUserData->getDateOfBirth());
  }

  /**
   * Gets Last Name.
   * @return array
   */
  public function getLastName() {
    return Util::constructResponse($this->serverSideUserData->getLastName(), $this->businessDataUserData->getLastName());
  }

  /**
   * Gets First Name.
   * @return array
   */
  public function getFirstName() {
    return Util::constructResponse($this->serverSideUserData->getFirstName(), $this->businessDataUserData->getFirstName());
  }

  /**
   * Gets city.
   * @return array
   */
  public function getCity() {
    return Util::constructResponse($this->serverSideUserData->getCity(), $this->businessDataUserData->getCity());
  }

  /**
   * Gets state.
   * @return array
   */
  public function getState() {
    return Util::constructResponse($this->serverSideUserData->getState(), $this->businessDataUserData->getState());
  }

  /**
   * Gets zip code
   * @return array
   */
  public function getZipCode() {
    return Util::constructResponse($this->serverSideUserData->getZipCode(), $this->businessDataUserData->getZipCode());
  }

  /**
   * Gets country code.
   * @return array
   */
  public function getCountryCode() {
    return Util::constructResponse($this->serverSideUserData->getCountryCode(), $this->businessDataUserData->getCountryCode());
  }

  /**
   * Gets Any unique ID from the advertiser, such as loyalty membership IDs, user IDs, and external cookie IDs.
   * @return array
   */
  public function getExternalId() {
    return Util::constructResponse($this->serverSideUserData->getExternalId(), $this->businessDataUserData->getExternalId());
  }

  /**
   * Gets IP address of the browser corresponding to the event.
   * @return array
   */
  public function getClientIpAddress() {
    return Util::constructResponse($this->serverSideUserData->getClientIpAddress(), null);
  }

  /**
   * Gets user agent for the browser corresponding to the event.
   * @return array
   */
  public function getClientUserAgent() {
    return Util::constructResponse($this->serverSideUserData->getClientUserAgent(), null);
  }

  /**
   * Gets the Facebook click ID value stored in the _fbc browser cookie under your domain.
   * @return array
   */
  public function getFbc() {
    return Util::constructResponse($this->serverSideUserData->getFbc(), null);
  }

  /**
   * Gets the Facebook browser ID value stored in the _fbp browser cookie under your domain.
   * @return array
   */
  public function getFbp() {
    return Util::constructResponse($this->serverSideUserData->getFbp(), null);
  }

  /**
   * Gets the subscription ID for the user in this transaction.
   * @return array
   */
  public function getSubscriptionId() {
    return Util::constructResponse($this->serverSideUserData->getSubscriptionId(), null);
  }

  /**
   * Gets the FbLogin ID for the user in this transaction.
   * @return array
   */
  public function getFbLoginId() {
    return Util::constructResponse($this->serverSideUserData->getFbLoginId(), null);
  }

  /**
   * Gets the lead_id for the user in this transaction.
   * @return array
   */
  public function getLeadId() {
    return Util::constructResponse($this->serverSideUserData->getLeadId(), null);
  }

  /**
   * Gets the first 5 letters of the first name.
   * @return array
   */
  public function getF5first() {
    return Util::constructResponse($this->serverSideUserData->getF5first(), null);
  }

  /**
   * Gets the first 5 letters of the last name.
   * @return array
   */
  public function getF5last() {
    return Util::constructResponse($this->serverSideUserData->getF5last(), null);
  }

  /**
   * Gets the first initial.
   * @return array
   */
  public function getFi() {
    return Util::constructResponse($this->serverSideUserData->getFi(), null);
  }

  /**
   * Gets the date of birth day.
   * @return array
   */
  public function getDobd() {
    return Util::constructResponse($this->serverSideUserData->getDobd(), null);
  }

  /**
   * Gets the date of birth month.
   * @return array
   */
  public function getDobm() {
    return Util::constructResponse($this->serverSideUserData->getDobm(), null);
  }

  /**
   * Gets the date of birth year.
   * @return array
   */
  public function getDoby() {
    return Util::constructResponse($this->serverSideUserData->getDoby(), null);
  }

  /**
   * Gets physical address
   * @return array
   */
  public function getAddress() {
    return Util::constructResponse(null, $this->businessDataUserData->getAddress());
  }

  /**
   * Gets user data for Business Data API
   * @return BusinessDataUserData
   */
  public function getBusinessDataUserData() {
    return $this->businessDataUserData;
  }

  /**
   * Gets user data for Conversion API
   * @return ServerSideUserData
   */
  public function getServerSideUserData() {
    return $this->serverSideUserData;
  }

}
