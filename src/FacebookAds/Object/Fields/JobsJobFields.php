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

class JobsJobFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLINKS = 'applinks';
  const CATEGORY_SPECIFIC_FIELDS = 'category_specific_fields';
  const CUSTOM_LABEL_0 = 'custom_label_0';
  const CUSTOM_LABEL_1 = 'custom_label_1';
  const CUSTOM_LABEL_2 = 'custom_label_2';
  const CUSTOM_LABEL_3 = 'custom_label_3';
  const CUSTOM_LABEL_4 = 'custom_label_4';
  const CUSTOM_LABEL_5 = 'custom_label_5';
  const CUSTOM_LABEL_6 = 'custom_label_6';
  const ID = 'id';
  const IMAGE_FETCH_STATUS = 'image_fetch_status';
  const IMAGES = 'images';
  const JOBS_JOB_ID = 'jobs_job_id';
  const SANITIZED_IMAGES = 'sanitized_images';
  const UNIT_PRICE = 'unit_price';
  const URL = 'url';

  public function getFieldTypes() {
    return array(
      'address' => 'Object',
      'applinks' => 'CatalogItemAppLinks',
      'category_specific_fields' => 'CatalogSubVerticalList',
      'custom_label_0' => 'string',
      'custom_label_1' => 'string',
      'custom_label_2' => 'string',
      'custom_label_3' => 'string',
      'custom_label_4' => 'string',
      'custom_label_5' => 'string',
      'custom_label_6' => 'string',
      'id' => 'string',
      'image_fetch_status' => 'ImageFetchStatus',
      'images' => 'list<string>',
      'jobs_job_id' => 'string',
      'sanitized_images' => 'list<string>',
      'unit_price' => 'Object',
      'url' => 'string',
    );
  }
}
