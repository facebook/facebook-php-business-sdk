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

class CanvasTemplateFields extends AbstractEnum {

  const CHANNELS = 'channels';
  const DESCRIPTION = 'description';
  const DOCUMENT = 'document';
  const ID = 'id';
  const IS_MULTI_TAB_SUPPORTABLE = 'is_multi_tab_supportable';
  const IS_NEW = 'is_new';
  const NAME = 'name';
  const OBJECTIVES = 'objectives';
  const OWNER_ID = 'owner_id';
  const REQUIRED_CAPABILITIES = 'required_capabilities';
  const SNAPSHOT_PHOTO = 'snapshot_photo';
  const STATUS = 'status';
  const SUB_VERTICALS = 'sub_verticals';
  const VERTICALS = 'verticals';

  public function getFieldTypes() {
    return array(
      'channels' => 'map<string, map<string, string>>',
      'description' => 'string',
      'document' => 'Canvas',
      'id' => 'string',
      'is_multi_tab_supportable' => 'bool',
      'is_new' => 'bool',
      'name' => 'string',
      'objectives' => 'map<Object, Object>',
      'owner_id' => 'User',
      'required_capabilities' => 'list<string>',
      'snapshot_photo' => 'Photo',
      'status' => 'string',
      'sub_verticals' => 'list<string>',
      'verticals' => 'map<string, string>',
    );
  }
}
