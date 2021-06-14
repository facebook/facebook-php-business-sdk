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
use FacebookAds\Object\ServerSide\Normalizer;


class ServerSideNormalizeTest extends AbstractUnitTestCase {

  /**
   * Test cases for Email Normalization
   */
  public function emailNormalizeData() {
    return array(
      array(
        "foo(.bar)@baz.com/",
        'foo.bar@baz.com',
      ),
      array(
        'foo"@bar.com',
        'foo@bar.com',
      ),
      array(
        'foo()@bar.com',
        'foo@bar.com',
      ),
    );
  }

  /**
   * @dataProvider emailNormalizeData
   */
  public function testEmailNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('em', $input));
  }

  /**
   * Test cases for Phone Normalization
   */
  public function phoneNormalizeData() {
    return array(
      array(
        '123-456-7890',
        '1234567890',
      ),
      array(
        '777 747 (3515)',
        '7777473515',
      ),
      array(
        '+442071838750',
        '442071838750',
      ),
      array(
        '44-12390821300A',
        '4412390821300',
      )
    );
  }

  /**
   * @dataProvider phoneNormalizeData
   */
  public function testPhoneNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('ph', $input));
  }

  /**
   * Test cases for Postal Code Normalization
   */
  public function postalCodeNormalizeData() {
    return array(
      array(
        '  98121',
        '98121',
      ),
      array(
        '98121-4892',
        '98121',
      ),
      array(
        'NR9 5AL',
        'nr95al',
      ),
      array(
        '98-121-4892',
        '98',
      ),
    );
  }

  /**
   * @dataProvider postalCodeNormalizeData
   */
  public function testPostalCodeNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('zp', $input));
  }

  /**
   * Test cases for City Normalization
   */
  public function cityNormalizeData() {
    return array(
      array(
        'Menlo Park',
        'menlopark',
      ),
      array(
        'Seattle-98121',
        'seattle',
      ),
      array(
        'Washington D.C',
        'washingtondc',
      ),
    );
  }

  /**
   * @dataProvider cityNormalizeData
   */
  public function testCityNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('ct', $input));
  }

  /**
   * Test cases for Country Normalization
   */
  public function countryNormalizeData() {
    return array(
      array(
        '   US   ',
        'us',
      ),
      array(
        '*****UU*****', // Can't validate, just normalizes
        'uu',
      ),
    );
  }

  /**
   * @dataProvider countryNormalizeData
   */
  public function testCountryNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('country', $input));
  }

  /**
   * Test cases for Currency Normalization
   */
  public function currencyNormalizeData() {
    return array(
      array(
        '   ABC   ', // Can't validate the data, just normalizes.
        'abc',
      ),
      array(
        'INR',
        'inr',
      ),
    );
  }

  /**
   * @dataProvider currencyNormalizeData
   */
  public function testCurrencyNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('currency', $input));
  }

  /**
   * test for asserting valid exception is thrown for invalid (ISO)currency format
   */
  public function testCurrencyException() {
    $has_throw_exception = false;
    try {
      Normalizer::normalize('currency', 'Us Dollar');
    } catch (\Exception $e) {
      $has_throw_exception = true;
    }
    $this->assertTrue($has_throw_exception);
  }

  /**
   * test for asserting valid exception is thrown for invalid (ISO)country format
   */
  public function testCountryException() {
    $has_throw_exception = false;
    try {
      Normalizer::normalize('country', 'United States of America');
    } catch (\Exception $e) {
      $has_throw_exception = true;
    }
    $this->assertTrue($has_throw_exception);
  }

  /**
   * test for asserting valid exception is thrown for invalid Email format
   */
  public function testEmailException() {
    $has_throw_exception = false;
    try {
      Normalizer::normalize('em', '324342@@@@bar.com');
    } catch (\Exception $e) {
      $has_throw_exception = true;
    }
    $this->assertTrue($has_throw_exception);
  }

  public function f5firstData() {
    return array(
      array(
        'George',
        'georg',
      ),
      array(
        'John',
        'john',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider f5firstData
   */
  public function testF5first($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('f5first', $input)
    );
  }

  public function f5lastData() {
    return array(
      array(
        'Washington',
        'washi',
      ),
      array(
        'Adams',
        'adams',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider f5lastData
   */
  public function testF5last($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('f5last', $input)
    );
  }

  public function fiData() {
    return array(
      array(
        'GW',
        'g',
      ),
      array(
        'j',
        'j',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider fiData
   */
  public function testFi($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('fi', $input)
    );
  }

  public function dobdData() {
    return array(
      array(
        '1',
        '01',
      ),
      array(
        '9',
        '09',
      ),
      array(
        '31',
        '31',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider dobdData
   */
  public function testDobd($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('dobd', $input)
    );
  }

  public function testDobdException() {
    $failure_cases = array(
      '-1',
      '0',
      '32',
      '2b',
      'ab',
    );
    $exceptions_counter = 0;
    $has_throw_exception = false;
    foreach ($failure_cases as $case) {
      try {
        Normalizer::normalize('dobd', $case);
      } catch (\Exception $e) {
        $exceptions_counter += 1;
      }
    }
    $this->assertEquals(count($failure_cases), $exceptions_counter);
  }

  public function dobmData() {
    return array(
      array(
        '1',
        '01',
      ),
      array(
        '5',
        '05',
      ),
      array(
        '12',
        '12',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider dobmData
   */
  public function testDobm($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('dobm', $input)
    );
  }

  public function testDobmException() {
    $failure_cases = array(
      '-1',
      '0',
      '13',
      '1a',
      'May',
      'oc',
    );
    $exceptions_counter = 0;
    $has_throw_exception = false;
    foreach ($failure_cases as $case) {
      try {
        Normalizer::normalize('dobm', $case);
      } catch (\Exception $e) {
        $exceptions_counter += 1;
      }
    }
    $this->assertEquals(count($failure_cases), $exceptions_counter);
  }

  public function dobyData() {
    return array(
      array(
        '1995',
        '1995',
      ),
      array(
        '9999',
        '9999',
      ),
      array(
        '1000',
        '1000',
      ),
      array(
        '',
        '',
      ),
      array(
        null,
        null,
      ),
    );
  }

  /**
   * @dataProvider dobyData
   */
  public function testDoby($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('doby', $input)
    );
  }

  public function testDobyException() {
    $failure_cases = array(
      '-1',
      '0',
      '20',
      '12345',
      'nineteen-eighty',
    );
    $exceptions_counter = 0;
    $has_throw_exception = false;
    foreach ($failure_cases as $case) {
      try {
        Normalizer::normalize('doby', $case);
      } catch (\Exception $e) {
        $exceptions_counter += 1;
      }
    }
    $this->assertEquals(count($failure_cases), $exceptions_counter);
  }

  /**
   * Test cases for DeliveryCategory Normalization
   */
  public function deliveryCategoryNormalizeData() {
    return array(
      array(
        'home_delivery',
        'home_delivery',
      ),
      array(
        'CURBSIDE',
        'curbside',
      ),
      array(
        ' IN_STORE ',
        'in_store',
      ),
    );
  }

  /**
   * @dataProvider deliveryCategoryNormalizeData
   */
  public function testDeliveryCategoryNormalize($input, $expected) {
    $this->assertEquals(
      $expected,
      Normalizer::normalize('delivery_category', $input));
  }
}
