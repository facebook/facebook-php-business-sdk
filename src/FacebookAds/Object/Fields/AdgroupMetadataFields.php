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

class AdgroupMetadataFields extends AbstractEnum {

  const AD_STANDARD_ENHANCEMENTS_EDIT_SOURCE = 'ad_standard_enhancements_edit_source';
  const ADGROUP_CREATION_SOURCE = 'adgroup_creation_source';
  const ADGROUP_EDIT_SOURCE = 'adgroup_edit_source';
  const CAROUSEL_STYLE = 'carousel_style';
  const CAROUSEL_WITH_STATIC_CARD_STYLE = 'carousel_with_static_card_style';

  public function getFieldTypes() {
    return array(
      'ad_standard_enhancements_edit_source' => 'int',
      'adgroup_creation_source' => 'string',
      'adgroup_edit_source' => 'string',
      'carousel_style' => 'string',
      'carousel_with_static_card_style' => 'string',
    );
  }
}
