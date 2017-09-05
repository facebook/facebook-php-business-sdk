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

namespace FacebookAdsTest;

use FacebookAds\TypeChecker;

class TypeCheckerTest extends AbstractUnitTestCase {

  public function testIsPrimitiveType() {
    $typeChecker = new TypeChecker(null, array('foo' => 'bar'));

    $this->assertTrue($typeChecker->isPrimitiveType('foo'));
    $this->assertTrue($typeChecker->isPrimitiveType('bool'));

    $this->assertFalse($typeChecker->isPrimitiveType('bar'));
  }

  public function testConvertStringToPrimType() {
    $typeChecker = new TypeChecker(null, array('foo' => 'bar'));

    $this->assertEquals('baz', $typeChecker->convertStringToPrimType('foo', 'baz'));
    $this->assertFalse($typeChecker->convertStringToPrimType('bool', '0'));
    $this->assertEquals(10, $typeChecker->convertStringToPrimType('int', '10'));
    $this->assertEquals(10, $typeChecker->convertStringToPrimType('unsigned int', '10'));
    $this->assertEquals(10, $typeChecker->convertStringToPrimType('float', '10,2'));
    $this->assertEquals('baz', $typeChecker->convertStringToPrimType('datetime', 'baz'));
    $this->assertEquals('baz', $typeChecker->convertStringToPrimType('string', 'baz'));
    $this->assertEquals('baz', $typeChecker->convertStringToPrimType('Object', 'baz'));
  }

  public function testGetType() {
    $typeChecker = new TypeChecker(array('foo' => 'bar'), null);

    $this->assertEquals('bar', $typeChecker->getType('foo'));

    $this->assertNull($typeChecker->getType('baz'));
  }

  public function testIsValidParam() {
    $typeChecker = new TypeChecker(array('foo' => 'bar'), null);

    $this->assertTrue($typeChecker->isValidParam('foo'));

    $this->assertFalse($typeChecker->isValidParam('baz'));
  }

  public function testIsValidParamPair() {
    $typeChecker = new TypeChecker(array('foo' => 'bool'), array());

    $this->assertTrue($typeChecker->isValidParamPair('foo', true));

    $this->assertFalse($typeChecker->isValidParamPair('foo', 'string'));
    $this->assertFalse($typeChecker->isValidParamPair('bar', true));
  }

  public function testCheckTypeEnum() {
    $typeChecker = new TypeChecker(null, array('foo' => array('bar')));

    $this->assertTrue($typeChecker->checkType('foo', 'bar'));
    $this->assertFalse($typeChecker->checkType('foo', 'baz'));
  }

  public function testCheckTypePrimitiveTypes() {
    $typeChecker = new TypeChecker(null, array());

    $this->assertTrue($typeChecker->checkType('string', 'foo'));
    $this->assertFalse($typeChecker->checkType('string', array()));

    $this->assertTrue($typeChecker->checkType('datetime', 'foo'));
    $this->assertFalse($typeChecker->checkType('datetime', array()));

    $this->assertTrue($typeChecker->checkType('bool', true));
    $this->assertFalse($typeChecker->checkType('bool', 'foo'));

    $this->assertTrue($typeChecker->checkType('map', array()));
    $this->assertFalse($typeChecker->checkType('map', 'foo'));

    $this->assertTrue($typeChecker->checkType('list', array()));
    $this->assertFalse($typeChecker->checkType('list', 'foo'));

    $this->assertTrue($typeChecker->checkType('int', 10));
    $this->assertFalse($typeChecker->checkType('int', 'foo'));

    $this->assertTrue($typeChecker->checkType('unsigned int', 10));
    $this->assertFalse($typeChecker->checkType('unsigned int', 'foo'));

    $this->assertTrue($typeChecker->checkType('float', 10));
    $this->assertFalse($typeChecker->checkType('float', 'foo'));
  }

  public function testCheckTypeCollectionTypes() {
    $typeChecker = new TypeChecker(null, array());

    $this->assertTrue($typeChecker->checkType('list<int>', 10));
    $this->assertTrue($typeChecker->checkType('list<int>', array(10, 20)));
    $this->assertFalse($typeChecker->checkType('list<int>', 'foo'));

    $this->assertTrue($typeChecker->checkType('map<int,int>', array(1 => 10, 2 => 20)));
    $this->assertFalse($typeChecker->checkType('map<int,int>', array('foo' => 10)));
    $this->assertFalse($typeChecker->checkType('map<int,int>', array(10 => 'foo')));
  }

  public function testIsAbstractObject() {
    $typeChecker = new TypeChecker(null, null);

    $abstractObject = new \FacebookAds\Object\AbstractObject();
    $this->assertTrue($typeChecker->isAbstractObject($abstractObject));

    $nonAbstractObject = new \stdClass();
    $this->assertFalse($typeChecker->isAbstractObject($nonAbstractObject));
  }

  public function testIsListParam() {
    $typeChecker = new TypeChecker(array('foo' => 'list<Object>', 'bar' => 'map<string,string>'), null);

    $this->assertTrue($typeChecker->isListParam('foo'));

    $this->assertFalse($typeChecker->isListParam('bar'));
    $this->assertFalse($typeChecker->isListParam('baz'));
  }

  public function testIsMapParam() {
    $typeChecker = new TypeChecker(array('foo' => 'list<Object>', 'bar' => 'map<string,string>'), null);

    $this->assertTrue($typeChecker->isMapParam('bar'));

    $this->assertFalse($typeChecker->isMapParam('foo'));
    $this->assertFalse($typeChecker->isMapParam('baz'));
  }

  public function testIsFileParam() {
    $typeChecker = new TypeChecker(array('foo' => 'file', 'bar' => 'baz'), null);

    $this->assertTrue($typeChecker->isFileParam('foo'));

    $this->assertFalse($typeChecker->isFileParam('bar'));
    $this->assertFalse($typeChecker->isFileParam('baz'));
  }

  public function testGetTypeFromCollection() {
    $typeChecker = new TypeChecker(null, null);

    $type = $typeChecker->getTypeFromCollection('list<Object>', 'list');
    $this->assertEquals('Object', $type[0]);

    $type = $typeChecker->getTypeFromCollection('map<int,string>', 'map');
    $this->assertEquals('int', $type[0]);
    $this->assertEquals('string', $type[1]);
  }
}