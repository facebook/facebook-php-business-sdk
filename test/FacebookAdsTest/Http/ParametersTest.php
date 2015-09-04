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

namespace FacebookAdsTest\Http;

use FacebookAds\Http\Parameters;
use FacebookAdsTest\AbstractUnitTestCase;

class ParametersTest extends AbstractUnitTestCase {

  public function testInterfaces() {
    $parameters = new Parameters();
    $this->assertTrue($parameters instanceof \IteratorAggregate);
    $this->assertTrue($parameters instanceof \Traversable);
    $this->assertTrue($parameters instanceof \ArrayAccess);
    $this->assertTrue($parameters instanceof \Serializable);
    $this->assertTrue($parameters instanceof \Countable);
  }

  public function testEnhance() {
    $parameters = new Parameters();
    $copy = $parameters->getArrayCopy();

    $data = array(
      'foo' => 0,
      'bar' => 1,
    );

    $copy = array_merge($copy, $data);
    $parameters->enhance($data);
    $this->assertEquals($copy, $parameters->getArrayCopy());

    $data = array(
      'bar' => -1,
      'baz' => 2,
    );

    $copy = array_merge($copy, $data);
    $parameters->enhance($data);
    $this->assertEquals($copy, $parameters->getArrayCopy());
  }

  public function testExport() {
    $parameters = new Parameters();
    $parameters['scalar'] = 1;
    $parameters['non_scalar'] = array(0, '1', true);
    $data = $parameters->export();
    $this->assertArrayHasKey('scalar', $data);
    $this->assertEquals(1, $data['scalar']);
    $this->assertArrayHasKey('non_scalar', $data);
    $this->assertEquals('[0,"1",true]', $data['non_scalar']);
  }
}
