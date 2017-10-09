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

use FacebookAds\Http\Adapter\Curl\AbstractCurl;
use FacebookAds\Http\FileParameter;
use FacebookAdsTest\AbstractUnitTestCase;

class FileParameterTest extends AbstractUnitTestCase {

  public function argumentsProvider() {
    return array(
      array('PATH', 'NAME', 'MIME_TYPE'),
      array('PATH', 'NAME', null),
      array('PATH', 'NAME'),
      array('PATH', null, null),
      array('PATH'),
    );
  }

  /**
   * @dataProvider argumentsProvider
   * @param string $path
   * @param string|null $name
   * @param string|null $mime_type
   */
  public function testGetters($path, $name = null, $mime_type = null) {
    $param = (new FileParameter($path))
      ->setName($name)
      ->setMimeType($mime_type);

    $this->assertEquals($param->getPath(), $path);
    $this->assertEquals($param->getName(), $name);
    $this->assertEquals($param->getMimeType(), $mime_type);
  }

  /**
   * @dataProvider argumentsProvider
   * @param string $path
   * @param string|null $name
   * @param string|null $mime_type
   */
  public function testCurlImplementation(
    $path,
    $name = null,
    $mime_type = null) {
    $param = (new FileParameter($path))
      ->setName($name)
      ->setMimeType($mime_type);

    AbstractCurl::createOptimalVersion()->preparePostFileField($param);
  }
}
