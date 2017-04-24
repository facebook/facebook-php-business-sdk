<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-genereated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeVideoDataFields extends AbstractEnum {

  const BRANDED_CONTENT_SPONSOR_PAGE_ID = 'branded_content_sponsor_page_id';
  const BRANDED_CONTENT_SPONSOR_RELATIONSHIP = 'branded_content_sponsor_relationship';
  const CALL_TO_ACTION = 'call_to_action';
  const IMAGE_HASH = 'image_hash';
  const IMAGE_URL = 'image_url';
  const LINK_DESCRIPTION = 'link_description';
  const MESSAGE = 'message';
  const OFFER_ID = 'offer_id';
  const PAGE_WELCOME_MESSAGE = 'page_welcome_message';
  const TARGETING = 'targeting';
  const TITLE = 'title';
  const VIDEO_ID = 'video_id';

  public function getFieldTypes() {
    return array(
      'branded_content_sponsor_page_id' => 'string',
      'branded_content_sponsor_relationship' => 'string',
      'call_to_action' => 'AdCreativeLinkDataCallToAction',
      'image_hash' => 'string',
      'image_url' => 'string',
      'link_description' => 'string',
      'message' => 'string',
      'offer_id' => 'string',
      'page_welcome_message' => 'string',
      'targeting' => 'Targeting',
      'title' => 'string',
      'video_id' => 'string',
    );
  }
}
