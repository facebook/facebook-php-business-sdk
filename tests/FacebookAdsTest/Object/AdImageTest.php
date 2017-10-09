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

use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdImageFields;

class AdImageTest extends AbstractCrudObjectTestCase {

  public function testCrud() {
    $image = new AdImage(null, $this->getConfig()->accountId);
    $image->{AdImageFields::FILENAME} = $this->getConfig()->testImagePath;
    $this->assertCanCreate($image);
    $this->assertCanRead($image);
    $this->assertCannotUpdate($image);
    $this->assertCanDelete($image);
  }

  /**
   * @expectedException \Exception
   */
  public function testZipFileInNormalCreate() {
    $image = new AdImage(null, $this->getConfig()->accountId);
    $image->{AdImageFields::FILENAME}
      = $this->getConfig()->testZippedImagesPath;
    $image->create();
  }

  public function testBulkZipUpload() {
    $images = AdImage::createFromZip(
       $this->getConfig()->testZippedImagesPath,
       $this->getConfig()->accountId);
    $this->assertTrue(is_array($images));

    foreach ($images as $image) {
      $this->assertCanDelete($image);
    }
  }
}
