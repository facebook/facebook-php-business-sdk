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
use FacebookAds\Object\ServerSide\Util;


class ServerSideNormalizeTest extends AbstractUnitTestCase {

    /**
     * Test cases for Email Normalization
     */
    public function testEmailNormalizeData() {
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
     * @dataProvider testEmailNormalizeData
     */
    public function testEmailNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('em', $input));
    }

    /**
     * Test cases for Phone Normalization
     */
    public function testPhoneNormalizeData() {
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
     * @dataProvider testPhoneNormalizeData
     */
    public function testPhoneNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('ph', $input));
    }

    /**
     * Test cases for Postal Code Normalization
     */
    public function testPostalCodeNormalizeData() {
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
     * @dataProvider testPostalCodeNormalizeData
     */
    public function testPostalCodeNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('zp', $input));
    }

    /**
     * Test cases for City Normalization
     */
    public function testCityNormalizeData() {
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
     * @dataProvider testCityNormalizeData
     */
    public function testCityNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('ct', $input));
    }

    /**
     * Test cases for Country Normalization
     */
    public function testCountryNormalizeData() {
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
     * @dataProvider testCountryNormalizeData
     */
    public function testCountryNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('country', $input));
    }

    /**
     * Test cases for Currency Normalization
     */
    public function testCurrencyNormalizeData() {
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
     * @dataProvider testCurrencyNormalizeData
     */
    public function testCurrencyNormalize($input, $expected) {
        $this->assertEquals(
            $expected,
            Util::normalize('currency', $input));
    }

    /**
     * test for asserting valid exception is thrown for invalid (ISO)currency format
     */
    public function testCurrencyException() {
    $has_throw_exception = false;
    try {
      Util::normalize('currency', 'Us Dollar');
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
      Util::normalize('country', 'United States of America');
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
      Util::normalize('em', '324342@@@@bar.com');
    } catch (\Exception $e) {
      $has_throw_exception = true;
    }
    $this->assertTrue($has_throw_exception);
  }
}
