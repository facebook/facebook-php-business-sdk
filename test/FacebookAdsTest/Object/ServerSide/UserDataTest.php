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

namespace FacebookAdsTest\Object;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\UserData;
use FacebookAds\Object\ServerSide\Util;
use InvalidArgumentException;


class UserDataTest extends AbstractUnitTestCase {
  public function testBuilderAndConstructor() {
    $initial_state = array(
      'email' => 'email-0@test.com',
      'phone' => '1234567890',
      'gender' => 'f',
      'date_of_birth' => '01/01/2001',
      'last_name' => 'last_name-4',
      'first_name' => 'first_name-5',
      'city' => 'city',
      'state' => 'state',
      'country_code' => 'us',
      'zip_code' => '12345',
      'external_id' => 'external_id-10',
      'client_ip_address' => 'client_ip_address-11',
      'client_user_agent' => 'client_user_agent-12',
      'fbc' => 'fbc-13',
      'fbp' => 'fbp-14',
      'subscription_id' => 'subscription_id-15',
      'fb_login_id' => 'fb_login_id-16',
      'lead_id' => 'lead_id-17',
      'f5first' => 'f5fir',
      'f5last' => 'f5las',
      'fi' => 'f',
      'dobd' => '01',
      'dobm' => '01',
      'doby' => '2001'
    );
    $expected = array(
      'em' => array(Util::hash($initial_state['email'])),
      'ph' => array(Util::hash($initial_state['phone'])),
      'ge' => array(Util::hash($initial_state['gender'])),
      'db' => array(Util::hash($initial_state['date_of_birth'])),
      'ln' => array(Util::hash($initial_state['last_name'])),
      'fn' => array(Util::hash($initial_state['first_name'])),
      'ct' => array(Util::hash($initial_state['city'])),
      'st' => array(Util::hash($initial_state['state'])),
      'country' => array(Util::hash($initial_state['country_code'])),
      'zp' => array(Util::hash($initial_state['zip_code'])),
      'external_id' => array('external_id-10'),
      'client_ip_address' => 'client_ip_address-11',
      'client_user_agent' => 'client_user_agent-12',
      'fbc' => 'fbc-13',
      'fbp' => 'fbp-14',
      'subscription_id' => 'subscription_id-15',
      'fb_login_id' => 'fb_login_id-16',
      'lead_id' => 'lead_id-17',
      'f5first' => Util::hash($initial_state['f5first']),
      'f5last' => Util::hash($initial_state['f5last']),
      'fi' => Util::hash($initial_state['fi']),
      'dobd' => Util::hash($initial_state['dobd']),
      'dobm' => Util::hash($initial_state['dobm']),
      'doby' => Util::hash($initial_state['doby'])
    );
    $builder = (new UserData())
      ->setEmail($initial_state['email'])
      ->setPhone($initial_state['phone'])
      ->setGender($initial_state['gender'])
      ->setDateOfBirth($initial_state['date_of_birth'])
      ->setLastName($initial_state['last_name'])
      ->setFirstName($initial_state['first_name'])
      ->setCity($initial_state['city'])
      ->setState($initial_state['state'])
      ->setCountryCode($initial_state['country_code'])
      ->setZipCode($initial_state['zip_code'])
      ->setExternalId($initial_state['external_id'])
      ->setClientIpAddress($initial_state['client_ip_address'])
      ->setClientUserAgent($initial_state['client_user_agent'])
      ->setFbc($initial_state['fbc'])
      ->setFbp($initial_state['fbp'])
      ->setSubscriptionId($initial_state['subscription_id'])
      ->setFbLoginId($initial_state['fb_login_id'])
      ->setLeadId($initial_state['lead_id'])
      ->setF5first($initial_state['f5first'])
      ->setF5last($initial_state['f5last'])
      ->setFi($initial_state['fi'])
      ->setDobd($initial_state['dobd'])
      ->setDobm($initial_state['dobm'])
      ->setDoby($initial_state['doby']);

    $this->assertEquals($expected, $builder->normalize());

    $constructor = new UserData($initial_state);
    $this->assertEquals($expected, $constructor->normalize());

    // Make sure single value getters still work, since we store these fields as arrays internally.
    $this->assertEquals($initial_state['email'], $constructor->getEmail());
    $this->assertEquals($initial_state['phone'], $constructor->getPhone());
    $this->assertEquals($initial_state['gender'], $constructor->getGender());
    $this->assertEquals($initial_state['date_of_birth'], $constructor->getDateOfBirth());
    $this->assertEquals($initial_state['last_name'], $constructor->getLastName());
    $this->assertEquals($initial_state['first_name'], $constructor->getFirstName());
    $this->assertEquals($initial_state['city'], $constructor->getCity());
    $this->assertEquals($initial_state['state'], $constructor->getState());
    $this->assertEquals($initial_state['country_code'], $constructor->getCountryCode());
    $this->assertEquals($initial_state['zip_code'], $constructor->getZipCode());
    $this->assertEquals($initial_state['external_id'], $constructor->getExternalId());
  }

  public function testMultiValueFieldsGettersAndSetters() {
    $initial_state = array(
      'emails' => array('email-0@test.com', 'email-1@eg.com'),
      'phones' => array('1234567890', '10000000000'),
      'genders' => array('f', 'm'),
      'dates_of_birth' => array('01/01/2001', '02/09/2008'),
      'last_names' => array('last_name-4', 'smith'),
      'first_names' => array('first_name-5', 'joe'),
      'cities' => array('seattle', 'san fransisco'),
      'states' => array('WA', 'CA'),
      'country_codes' => array('us', 'ca'),
      'zip_codes' => array('12345', '00000'),
      'external_ids' => array('external_id-10', '123')
    );

    $userData = (new UserData())
      ->setEmails($initial_state['emails'])
      ->setPhones($initial_state['phones'])
      ->setGenders($initial_state['genders'])
      ->setDatesOfBirth($initial_state['dates_of_birth'])
      ->setLastNames($initial_state['last_names'])
      ->setFirstNames($initial_state['first_names'])
      ->setCities($initial_state['cities'])
      ->setStates($initial_state['states'])
      ->setCountryCodes($initial_state['country_codes'])
      ->setZipCodes($initial_state['zip_codes'])
      ->setExternalIds($initial_state['external_ids']);

    $this->assertEquals($initial_state['emails'], $userData->getEmails());
    $this->assertEquals($initial_state['phones'], $userData->getPhones());
    $this->assertEquals($initial_state['genders'], $userData->getGenders());
    $this->assertEquals($initial_state['dates_of_birth'], $userData->getDatesOfBirth());
    $this->assertEquals($initial_state['last_names'], $userData->getLastNames());
    $this->assertEquals($initial_state['first_names'], $userData->getFirstNames());
    $this->assertEquals($initial_state['cities'], $userData->getCities());
    $this->assertEquals($initial_state['states'], $userData->getStates());
    $this->assertEquals($initial_state['country_codes'], $userData->getCountryCodes());
    $this->assertEquals($initial_state['zip_codes'], $userData->getZipCodes());
    $this->assertEquals($initial_state['external_ids'], $userData->getExternalIds());
  }

  public function testConstructorWithBothSingularAndPluralParams() {
    $params = array(
      array('email', 'emails'),
      array('phone', 'phones'),
      array('gender', 'genders'),
      array('date_of_birth', 'dates_of_birth'),
      array('last_name', 'last_names'),
      array('first_name', 'first_names'),
      array('city', 'cities'),
      array('state', 'states'),
      array('country_code', 'country_codes'),
      array('zip_code', 'zip_codes'),
      array('external_id', 'external_ids')
    );

    $exception_count = 0;
    foreach ($params as $p){
      $initial_state = array(
        $p[0] => 'testStr1',
        $p[1] => array('testStr2', 'testStr3')
      );
      try {
        $userData = new UserData($initial_state);
      } catch(InvalidArgumentException $e) {
        $exception_count++;
      }
    }
    self::assertEquals(count($params), $exception_count);
  }

  public function testConstructorWithOnlyPluralParams() {
    $initial_state = array(
      'emails' => array('email-0@test.com', 'email-1@eg.com'),
      'phones' => array('1234567890', '10000000000'),
      'genders' => array('f', 'm'),
      'dates_of_birth' => array('01/01/2001', '02/09/2008'),
      'last_names' => array('last_name-4', 'smith'),
      'first_names' => array('first_name-5', 'joe'),
      'cities' => array('seattle', 'san fransisco'),
      'states' => array('WA', 'CA'),
      'country_codes' => array('us', 'ca'),
      'zip_codes' => array('12345', '00000'),
      'external_ids' => array('external_id-10', '123')
    );

    $userData = new UserData($initial_state);

    $this->assertEquals($initial_state['emails'], $userData->getEmails());
    $this->assertEquals($initial_state['phones'], $userData->getPhones());
    $this->assertEquals($initial_state['genders'], $userData->getGenders());
    $this->assertEquals($initial_state['dates_of_birth'], $userData->getDatesOfBirth());
    $this->assertEquals($initial_state['last_names'], $userData->getLastNames());
    $this->assertEquals($initial_state['first_names'], $userData->getFirstNames());
    $this->assertEquals($initial_state['cities'], $userData->getCities());
    $this->assertEquals($initial_state['states'], $userData->getStates());
    $this->assertEquals($initial_state['country_codes'], $userData->getCountryCodes());
    $this->assertEquals($initial_state['zip_codes'], $userData->getZipCodes());
    $this->assertEquals($initial_state['external_ids'], $userData->getExternalIds());
  }

  public function testGettersAndSettersWithNull() {
    $userData = (new UserData())
      ->setEmail(null)
      ->setPhone(null)
      ->setGender(null)
      ->setDateOfBirth(null)
      ->setLastName(null)
      ->setFirstName(null)
      ->setCity(null)
      ->setState(null)
      ->setCountryCode(null)
      ->setZipCode(null)
      ->setExternalId(null);

    $this->assertEquals(null, $userData->getEmail());
    $this->assertEquals(null, $userData->getPhone());
    $this->assertEquals(null, $userData->getGender());
    $this->assertEquals(null, $userData->getDateOfBirth());
    $this->assertEquals(null, $userData->getLastName());
    $this->assertEquals(null, $userData->getFirstName());
    $this->assertEquals(null, $userData->getCity());
    $this->assertEquals(null, $userData->getState());
    $this->assertEquals(null, $userData->getCountryCode());
    $this->assertEquals(null, $userData->getZipCode());
    $this->assertEquals(null, $userData->getExternalId());
  }

  public function testGettersAndSettersWithEmpty() {
    $userData = (new UserData())
      ->setEmails(array())
      ->setPhones(array())
      ->setGenders(array())
      ->setDatesOfBirth(array())
      ->setLastNames(array())
      ->setFirstNames(array())
      ->setCities(array())
      ->setStates(array())
      ->setCountryCodes(array())
      ->setZipCodes(array())
      ->setExternalIds(array());

    $this->assertEquals(null, $userData->getEmail());
    $this->assertEquals(null, $userData->getPhone());
    $this->assertEquals(null, $userData->getGender());
    $this->assertEquals(null, $userData->getDateOfBirth());
    $this->assertEquals(null, $userData->getLastName());
    $this->assertEquals(null, $userData->getFirstName());
    $this->assertEquals(null, $userData->getCity());
    $this->assertEquals(null, $userData->getState());
    $this->assertEquals(null, $userData->getCountryCode());
    $this->assertEquals(null, $userData->getZipCode());
    $this->assertEquals(null, $userData->getExternalId());
  }

  public function testMultiValueFieldsDeduplication() {
    $initial_state = array(
      'emails' => array('email-0@test.com', 'email-1@eg.com', 'email-1@eg.com'),
      'phones' => array('1234567890', '10000000000', '10000000000'),
      'genders' => array('f', 'm', 'm'),
      'dates_of_birth' => array('01/01/2001', '02/09/2008', '02/09/2008'),
      'last_names' => array('last_name-4', 'smith', 'smith'),
      'first_names' => array('first_name-5', 'joe', 'first_name-5'),
      'cities' => array('seattle', 'sanfransisco', 'seattle'),
      'states' => array('wa', 'ca', 'wa'),
      'country_codes' => array('us', 'ca', 'us'),
      'zip_codes' => array('12345', '00000', '12345'),
      'external_ids' => array('external_id-10', '123', 'external_id-10')
    );

    $userData = (new UserData())
      ->setEmails($initial_state['emails'])
      ->setPhones($initial_state['phones'])
      ->setGenders($initial_state['genders'])
      ->setDatesOfBirth($initial_state['dates_of_birth'])
      ->setLastNames($initial_state['last_names'])
      ->setFirstNames($initial_state['first_names'])
      ->setCities($initial_state['cities'])
      ->setStates($initial_state['states'])
      ->setCountryCodes($initial_state['country_codes'])
      ->setZipCodes($initial_state['zip_codes'])
      ->setExternalIds($initial_state['external_ids']);

    $normalized = $userData->normalize();

    $this->assertEquals(2, count($normalized['em']));
    $this->assertEquals(2, count($normalized['ph']));
    $this->assertEquals(2, count($normalized['ge']));
    $this->assertEquals(2, count($normalized['db']));
    $this->assertEquals(2, count($normalized['ln']));
    $this->assertEquals(2, count($normalized['fn']));
    $this->assertEquals(2, count($normalized['ct']));
    $this->assertEquals(2, count($normalized['st']));
    $this->assertEquals(2, count($normalized['country']));
    $this->assertEquals(2, count($normalized['zp']));
    $this->assertEquals(2, count($normalized['external_id']));
  }

  public function testNormalizeMultiValueFields() {
    $initial_state = array(
      'email' => array('email-0@test.com', 'email-1@eg.com'),
      'phone' => array('1234567890', '10000000000'),
      'gender' => array('f', 'm'),
      'date_of_birth' => array('01/01/2001', '02/09/2008'),
      'last_name' => array('last_name-4', 'smith'),
      'first_name' => array('first_name-5', 'joe'),
      'city' => array('seattle', 'sanfransisco'),
      'state' => array('wa', 'ca'),
      'country_code' => array('us', 'ca'),
      'zip_code' => array('12345', '00000'),
      'external_id' => array('external_id-10', '123')
    );

    $userData = (new UserData())
      ->setEmails($initial_state['email'])
      ->setPhones($initial_state['phone'])
      ->setGenders($initial_state['gender'])
      ->setDatesOfBirth($initial_state['date_of_birth'])
      ->setLastNames($initial_state['last_name'])
      ->setFirstNames($initial_state['first_name'])
      ->setCities($initial_state['city'])
      ->setStates($initial_state['state'])
      ->setCountryCodes($initial_state['country_code'])
      ->setZipCodes($initial_state['zip_code'])
      ->setExternalIds($initial_state['external_id']);

    $expected = array(
      'em' => $this->hashList($initial_state['email']),
      'ph' => $this->hashList($initial_state['phone']),
      'ge' => $this->hashList($initial_state['gender']),
      'db' => $this->hashList($initial_state['date_of_birth']),
      'ln' => $this->hashList($initial_state['last_name']),
      'fn' => $this->hashList($initial_state['first_name']),
      'ct' => $this->hashList($initial_state['city']),
      'st' => $this->hashList($initial_state['state']),
      'country' => $this->hashList($initial_state['country_code']),
      'zp' => $this->hashList($initial_state['zip_code']),
      'external_id' => $initial_state['external_id']
    );

    $this->assertEquals($expected, $userData->normalize());
  }

  public function testMultiValueFieldsCanNormalizeEmpty() {
    $userData = new UserData();
    $normalized = $userData->normalize();

    $this->assertEquals(array(), $normalized);
  }

  private function hashList($arr){
    return array_map(
      function($val){
        return Util::hash($val);
      },
      $arr);
  }
}
