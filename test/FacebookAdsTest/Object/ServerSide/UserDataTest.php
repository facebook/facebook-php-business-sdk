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
      'em' => Util::hash($initial_state['email']),
      'ph' => Util::hash($initial_state['phone']),
      'ge' => Util::hash($initial_state['gender']),
      'db' => Util::hash($initial_state['date_of_birth']),
      'ln' => Util::hash($initial_state['last_name']),
      'fn' => Util::hash($initial_state['first_name']),
      'ct' => Util::hash($initial_state['city']),
      'st' => Util::hash($initial_state['state']),
      'country' => Util::hash($initial_state['country_code']),
      'zp' => Util::hash($initial_state['zip_code']),
      'external_id' => 'external_id-10',
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
  }
}
