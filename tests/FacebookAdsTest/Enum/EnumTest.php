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

namespace FacebookAdsTest\Enum;

use FacebookAds\Enum\EmptyEnum;
use FacebookAdsTest\AbstractUnitTestCase;

class EnumTest extends AbstractUnitTestCase {

  public function testSingleton() {
    $this->assertTrue(DummyEnum::getInstance() === DummyEnum::getInstance());
  }

  public function testAccess() {
    $this->assertEquals(DummyEnum::className(), get_class(new DummyEnum()));

    $enum = DummyEnum::getInstance();
    $copy = $enum->getArrayCopy();
    $names = $enum->getNames();
    $values = $enum->getValues();
    $values_map = $enum->getValuesMap();

    $this->assertEquals(2, count($copy));
    $this->assertArrayHasKey('NAME_1', $copy);
    $this->assertEquals(DummyEnum::NAME_1, $copy['NAME_1']);

    $this->assertEquals(2, count($names));
    $this->assertTrue(in_array('NAME_1', $names));

    $this->assertEquals(2, count($values));
    $this->assertTrue(in_array(DummyEnum::NAME_1, $values));

    $this->assertEquals(2, count($values_map));
    $this->assertArrayHasKey(DummyEnum::NAME_1, $values_map);

    $this->assertEquals(DummyEnum::NAME_1, $enum->getValueForName('NAME_1'));
  }

  public function testLazyLoading() {
    $enum = DummyEnum::getInstance();

    $this->assertTrue($enum->getArrayCopy() === $enum->getArrayCopy());
    $this->assertTrue($enum->getNames() === $enum->getNames());
    $this->assertTrue($enum->getValues() === $enum->getValues());
    $this->assertTrue($enum->getValuesMap() === $enum->getValuesMap());
  }

  public function testValidation() {
    $enum = DummyEnum::getInstance();

    $this->assertTrue($enum->isValid('NAME_1'));
    $this->assertFalse($enum->isValid('NAME_ND'));
    $this->assertTrue($enum->isValidValue(DummyEnum::NAME_1));
    $this->assertFalse($enum->isValidValue('VALUE_ND'));
  }


  public function testAssurance() {
    $enum = DummyEnum::getInstance();

    $this->assertEquals(DummyEnum::NAME_1, $enum->assureValueForName('NAME_1'));
    $this->assertWillThrow(function() use ($enum) {
      $enum->assureValueForName('NAME_ND');
    }, 'InvalidArgumentException');

    $enum->assureIsValid('NAME_1');
    $this->assertWillThrow(function() use ($enum) {
      $enum->assureIsValid('NAME_ND');
    }, 'InvalidArgumentException');

    $enum->assureIsValidValue(DummyEnum::NAME_1);
    $this->assertWillThrow(function() use ($enum) {
      $enum->assureIsValidValue('VALUE_ND');
    }, 'InvalidArgumentException');
  }

  public function testEmptyEnum() {
    $enum = EmptyEnum::getInstance();

    $this->assertEquals(array(), $enum->getArrayCopy());
    $this->assertEquals(array(), $enum->getNames());
    $this->assertEquals(array(), $enum->getValues());
    $this->assertEquals(array(), $enum->getValuesMap());
  }
}
