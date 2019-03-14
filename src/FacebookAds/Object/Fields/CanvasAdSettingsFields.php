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
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class CanvasAdSettingsFields extends AbstractEnum {

  const IS_CANVAS_COLLECTION_ELIGIBLE = 'is_canvas_collection_eligible';
  const LEAD_FORM_CREATED_TIME = 'lead_form_created_time';
  const LEAD_FORM_NAME = 'lead_form_name';
  const LEAD_GEN_FORM_ID = 'lead_gen_form_id';
  const LEADS_COUNT = 'leads_count';
  const PRODUCT_SET_ID = 'product_set_id';
  const USE_RETAILER_ITEM_IDS = 'use_retailer_item_ids';

  public function getFieldTypes() {
    return array(
      'is_canvas_collection_eligible' => 'bool',
      'lead_form_created_time' => 'unsigned int',
      'lead_form_name' => 'string',
      'lead_gen_form_id' => 'string',
      'leads_count' => 'int',
      'product_set_id' => 'string',
      'use_retailer_item_ids' => 'bool',
    );
  }
}
