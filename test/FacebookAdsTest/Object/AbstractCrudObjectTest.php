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

use FacebookAdsTest\Object\EmptyCrudObject;
use FacebookAds\Object\AbstractCrudObject;

class AbstractCrudObjectTest extends AbstractCrudObjectTestCase {

  public function testCreationWithNull() {
    $this->checkCreationSuccessWithID(null);
  }

  public function testCreationWithNegativeId() {
    $this->checkCreationFailureWithID(-1234123);
  }

  public function testCreationWithPositiveId() {
    $this->checkCreationSuccessWithID(100007309086878);
  }

  public function testCreationWithCorrectStringId() {
    $this->checkCreationSuccessWithID('100007309086878');
  }

  public function testCreationWithIncorrectNegativeStringId() {
    $this->checkCreationFailureWithID('-1234123');
  }

  public function testCreationWithIncorrectStringId() {
    $this->checkCreationFailureWithID('1.234e10');
  }

  public function testCreationSuccessWithAct_() {
    $this->checkCreationSuccessWithID('act_12341521352312');
  }

  public function testCreationFailureWithAct_() {
    $this->checkCreationFailureWithID('act_1.1234e10');
  }

  public function testCreationWithOverFlowInt() {
    $this->checkCreationFailureWithID(PHP_INT_MAX+1);
  }
  private function checkCreationSuccessWithID($id) {
    new EmptyCrudObject($id);
  }

  private function checkCreationFailureWithID($id) {
    $this->assertInvalidArgumentException($id);
  }

  /**
   * @param mixed $id
   */
  public function assertInvalidArgumentException(mixed $id) {
    $has_throw_exception = false;
    try {
      new EmptyCrudObject($id);
    } catch (\InvalidArgumentException $e) {
      $has_throw_exception = true;
    }
    $this->assertTrue($has_throw_exception);
  }

}
