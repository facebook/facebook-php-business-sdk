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

use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdImage;
use FacebookAds\Object\ObjectStorySpec;
use FacebookAds\Object\ObjectStory\LinkData;
use FacebookAds\Object\ObjectStory\AttachmentData;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\Fields\ObjectStorySpecFields;
use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
use FacebookAds\Object\Fields\ObjectStory\AttachmentDataFields;

class AdCreativeTest extends AbstractCrudObjectTestCase {

  public function testCrud() {
    $creative = new AdCreative(null, $this->getConfig()->accountId);
    $creative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $creative->{AdCreativeFields::NAME} = 'My Test Ad';
    $creative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $creative->{AdCreativeFields::OBJECT_ID} = $this->getConfig()->pageId;
    $this->assertCanCreate($creative);
    $this->assertCanRead($creative);
    $this->assertCanUpdate(
      $creative,
      array(
        AdCreativeFields::NAME => 'My Test Ad '. $this->getConfig()->testRunId,
      ));
    $this->assertCanBeLabeled($creative);
    $this->assertCanDelete($creative);
  }

  public function testMultiProductObjectSpec() {
    // Create a new AdCreative
    $creative = new AdCreative(null, $this->getConfig()->accountId);
    $creative->{AdCreativeFields::NAME} = 'Multi Product Ad Creative';

    // Create a new ObjectStorySpec to create an unpublished post
    $story = new ObjectStorySpec();
    $story->{ObjectStorySpecFields::PAGE_ID} = $this->getConfig()->pageId;

    // Create LinkData object representing data for a link page post
    $link = new LinkData();
    $link->{LinkDataFields::LINK} = $this->getConfig()->appUrl;
    $link->{LinkDataFields::CAPTION} = 'My Caption';

    // Upload a test image to use in Attachments
    $adImage = new AdImage(null, $this->getConfig()->accountId);
    $adImage->{AdImageFields::FILENAME} = $this->getConfig()->testImagePath;
    $adImage->save();

    // Create 3 products as this will be a multi-product ad
    $product1 = (new AttachmentData())->setData(array(
      AttachmentDataFields::LINK => $this->getConfig()->appUrl.'p1',
      AttachmentDataFields::IMAGE_HASH => $adImage->hash,
      AttachmentDataFields::NAME => 'Product 1',
      AttachmentDataFields::DESCRIPTION => '$100',
    ));

    $product2 = (new AttachmentData())->setData(array(
      AttachmentDataFields::LINK => $this->getConfig()->appUrl.'p2',
      AttachmentDataFields::IMAGE_HASH => $adImage->hash,
      AttachmentDataFields::NAME => 'Product 2',
      AttachmentDataFields::DESCRIPTION => '$200',
    ));

    $product3 = (new AttachmentData())->setData(array(
      AttachmentDataFields::LINK => $this->getConfig()->appUrl.'p3',
      AttachmentDataFields::IMAGE_HASH => $adImage->hash,
      AttachmentDataFields::NAME => 'Product 3',
      AttachmentDataFields::DESCRIPTION => '$300',
    ));

    // Add the products into the child attachments
    $link->{LinkDataFields::CHILD_ATTACHMENTS} = array(
      $product1,
      $product2,
      $product3,
    );

    $story->{ObjectStorySpecFields::LINK_DATA} = $link;
    $creative->{AdCreativeFields::OBJECT_STORY_SPEC} = $story;

    $this->assertCanCreate($creative);
    $this->assertCanDelete($creative);
  }
}
