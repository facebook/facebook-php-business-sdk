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

class VideoReferenceMatchFields extends AbstractEnum {

  const CONFLICTING_COUNTRIES = 'conflicting_countries';
  const CREATION_TIME = 'creation_time';
  const DISPUTE_FORM_DATA = 'dispute_form_data';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const IS_DISPUTABLE = 'is_disputable';
  const IS_POSSIBLE_CONFLICT = 'is_possible_conflict';
  const IS_VIEWED = 'is_viewed';
  const MATCH_STATE = 'match_state';
  const MATCHED_REFERENCE_ASSET = 'matched_reference_asset';
  const MATCHED_REFERENCE_COPYRIGHT = 'matched_reference_copyright';
  const MATCHED_REFERENCE_OWNER_ID = 'matched_reference_owner_id';
  const MATCHED_REFERENCE_OWNER_NAME = 'matched_reference_owner_name';
  const MODIFICATION_HISTORY = 'modification_history';
  const REFERENCE_ASSET = 'reference_asset';
  const REFERENCE_COPYRIGHT = 'reference_copyright';
  const REFERENCE_OWNER_ID = 'reference_owner_id';
  const REFERENCE_OWNER_NAME = 'reference_owner_name';
  const REJECTION_FORM_DATA = 'rejection_form_data';

  public function getFieldTypes() {
    return array(
      'conflicting_countries' => 'VideoCopyrightGeoGate',
      'creation_time' => 'datetime',
      'dispute_form_data' => 'string',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'is_disputable' => 'bool',
      'is_possible_conflict' => 'bool',
      'is_viewed' => 'bool',
      'match_state' => 'string',
      'matched_reference_asset' => 'CopyrightReferenceContainer',
      'matched_reference_copyright' => 'Object',
      'matched_reference_owner_id' => 'string',
      'matched_reference_owner_name' => 'string',
      'modification_history' => 'list<Object>',
      'reference_asset' => 'CopyrightReferenceContainer',
      'reference_copyright' => 'Object',
      'reference_owner_id' => 'string',
      'reference_owner_name' => 'string',
      'rejection_form_data' => 'string',
    );
  }
}
