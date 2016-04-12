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

class AdPromotedObjectFields extends AbstractEnum {

  const APPLICATION_ID = 'application_id';
  const CUSTOM_EVENT_TYPE = 'custom_event_type';
  const OBJECT_STORE_URL = 'object_store_url';
  const OFFER_ID = 'offer_id';
  const PAGE_ID = 'page_id';
  const PIXEL_ID = 'pixel_id';
  const PLACE_PAGE_SET_ID = 'place_page_set_id';
  const PRODUCT_CATALOG_ID = 'product_catalog_id';
  const PRODUCT_SET_ID = 'product_set_id';

  public function getFieldTypes() {
    return array(
      'application_id' => 'string',
      'custom_event_type' => 'CustomEventType',
      'object_store_url' => 'string',
      'offer_id' => 'string',
      'page_id' => 'string',
      'pixel_id' => 'string',
      'place_page_set_id' => 'string',
      'product_catalog_id' => 'string',
      'product_set_id' => 'string',
    );
  }
}
