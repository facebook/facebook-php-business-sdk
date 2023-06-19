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

class AdCreativeDegreesOfFreedomSpecFields extends AbstractEnum {

  const AD_HANDLE_TYPE = 'ad_handle_type';
  const CREATIVE_FEATURES_SPEC = 'creative_features_spec';
  const DEGREES_OF_FREEDOM_TYPE = 'degrees_of_freedom_type';
  const IMAGE_TRANSFORMATION_TYPES = 'image_transformation_types';
  const MULTI_MEDIA_TRANSFORMATION_TYPE = 'multi_media_transformation_type';
  const STORIES_TRANSFORMATION_TYPES = 'stories_transformation_types';
  const TEXT_TRANSFORMATION_TYPES = 'text_transformation_types';
  const VIDEO_TRANSFORMATION_TYPES = 'video_transformation_types';

  public function getFieldTypes() {
    return array(
      'ad_handle_type' => 'string',
      'creative_features_spec' => 'Object',
      'degrees_of_freedom_type' => 'string',
      'image_transformation_types' => 'list<string>',
      'multi_media_transformation_type' => 'string',
      'stories_transformation_types' => 'list<string>',
      'text_transformation_types' => 'list<string>',
      'video_transformation_types' => 'list<string>',
    );
  }
}
