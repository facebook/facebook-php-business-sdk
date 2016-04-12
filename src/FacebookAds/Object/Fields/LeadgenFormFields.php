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

class LeadgenFormFields extends AbstractEnum {

  const CREATED_TIME = 'created_time';
  const CUSOMIZED_TCPA_CONTENT = 'cusomized_tcpa_content';
  const EXPIRED_LEADS_COUNT = 'expired_leads_count';
  const FOLLOW_UP_ACTION_TEXT = 'follow_up_action_text';
  const FOLLOW_UP_ACTION_URL = 'follow_up_action_url';
  const ID = 'id';
  const IS_CONTINUED_FLOW = 'is_continued_flow';
  const LEADGEN_EXPORT_CSV_URL = 'leadgen_export_csv_url';
  const LEADS_COUNT = 'leads_count';
  const LOCALE = 'locale';
  const NAME = 'name';
  const PAGE = 'page';
  const PAGE_ID = 'page_id';
  const PRIVACY_POLICY_URL = 'privacy_policy_url';
  const QUALIFIERS = 'qualifiers';
  const TCPA_COMPLIANCE = 'tcpa_compliance';

  public function getFieldTypes() {
    return array(
      'created_time' => 'datetime',
      'cusomized_tcpa_content' => 'string',
      'expired_leads_count' => 'unsigned int',
      'follow_up_action_text' => 'string',
      'follow_up_action_url' => 'string',
      'id' => 'string',
      'is_continued_flow' => 'bool',
      'leadgen_export_csv_url' => 'string',
      'leads_count' => 'unsigned int',
      'locale' => 'string',
      'name' => 'string',
      'page' => 'Object',
      'page_id' => 'string',
      'privacy_policy_url' => 'string',
      'qualifiers' => 'list<Object>',
      'tcpa_compliance' => 'bool',
    );
  }
}
