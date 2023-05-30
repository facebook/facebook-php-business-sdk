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

class JobOpeningFields extends AbstractEnum {

  const ADDRESS = 'address';
  const APPLICATION_CALLBACK_URL = 'application_callback_url';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const ERRORS = 'errors';
  const EXTERNAL_COMPANY_FACEBOOK_URL = 'external_company_facebook_url';
  const EXTERNAL_COMPANY_FULL_ADDRESS = 'external_company_full_address';
  const EXTERNAL_COMPANY_ID = 'external_company_id';
  const EXTERNAL_COMPANY_NAME = 'external_company_name';
  const EXTERNAL_ID = 'external_id';
  const ID = 'id';
  const JOB_STATUS = 'job_status';
  const LATITUDE = 'latitude';
  const LONGITUDE = 'longitude';
  const OFFSITE_APPLICATION_URL = 'offsite_application_url';
  const PAGE = 'page';
  const PHOTO = 'photo';
  const PLATFORM_REVIEW_STATUS = 'platform_review_status';
  const POST = 'post';
  const REMOTE_TYPE = 'remote_type';
  const REVIEW_REJECTION_REASONS = 'review_rejection_reasons';
  const TITLE = 'title';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'address' => 'string',
      'application_callback_url' => 'string',
      'created_time' => 'datetime',
      'description' => 'string',
      'errors' => 'list<string>',
      'external_company_facebook_url' => 'string',
      'external_company_full_address' => 'string',
      'external_company_id' => 'string',
      'external_company_name' => 'string',
      'external_id' => 'string',
      'id' => 'string',
      'job_status' => 'JobStatus',
      'latitude' => 'float',
      'longitude' => 'float',
      'offsite_application_url' => 'string',
      'page' => 'Page',
      'photo' => 'Photo',
      'platform_review_status' => 'PlatformReviewStatus',
      'post' => 'Post',
      'remote_type' => 'string',
      'review_rejection_reasons' => 'list<ReviewRejectionReasons>',
      'title' => 'string',
      'type' => 'Type',
    );
  }
}
