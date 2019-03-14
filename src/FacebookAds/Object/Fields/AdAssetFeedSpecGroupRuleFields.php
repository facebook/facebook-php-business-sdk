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

class AdAssetFeedSpecGroupRuleFields extends AbstractEnum {

  const BODY_LABEL = 'body_label';
  const CAPTION_LABEL = 'caption_label';
  const DESCRIPTION_LABEL = 'description_label';
  const IMAGE_LABEL = 'image_label';
  const LINK_URL_LABEL = 'link_url_label';
  const TITLE_LABEL = 'title_label';
  const VIDEO_LABEL = 'video_label';

  public function getFieldTypes() {
    return array(
      'body_label' => 'AdAssetFeedSpecAssetLabel',
      'caption_label' => 'AdAssetFeedSpecAssetLabel',
      'description_label' => 'AdAssetFeedSpecAssetLabel',
      'image_label' => 'AdAssetFeedSpecAssetLabel',
      'link_url_label' => 'AdAssetFeedSpecAssetLabel',
      'title_label' => 'AdAssetFeedSpecAssetLabel',
      'video_label' => 'AdAssetFeedSpecAssetLabel',
    );
  }
}
