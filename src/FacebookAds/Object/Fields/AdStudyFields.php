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

class AdStudyFields extends AbstractEnum {

  const BUSINESS = 'business';
  const CANCELED_TIME = 'canceled_time';
  const CLIENT_BUSINESS = 'client_business';
  const COOLDOWN_START_TIME = 'cooldown_start_time';
  const CREATED_BY = 'created_by';
  const CREATED_TIME = 'created_time';
  const DESCRIPTION = 'description';
  const END_TIME = 'end_time';
  const ID = 'id';
  const MEASUREMENT_CONTACT = 'measurement_contact';
  const NAME = 'name';
  const OBSERVATION_END_TIME = 'observation_end_time';
  const RESULTS_FIRST_AVAILABLE_DATE = 'results_first_available_date';
  const SALES_CONTACT = 'sales_contact';
  const START_TIME = 'start_time';
  const TYPE = 'type';
  const UPDATED_BY = 'updated_by';
  const UPDATED_TIME = 'updated_time';
  const CELLS = 'cells';
  const CONFIDENCE_LEVEL = 'confidence_level';
  const OBJECTIVES = 'objectives';
  const VIEWERS = 'viewers';

  public function getFieldTypes() {
    return array(
      'business' => 'Business',
      'canceled_time' => 'datetime',
      'client_business' => 'Business',
      'cooldown_start_time' => 'datetime',
      'created_by' => 'User',
      'created_time' => 'datetime',
      'description' => 'string',
      'end_time' => 'datetime',
      'id' => 'string',
      'measurement_contact' => 'User',
      'name' => 'string',
      'observation_end_time' => 'datetime',
      'results_first_available_date' => 'string',
      'sales_contact' => 'User',
      'start_time' => 'datetime',
      'type' => 'string',
      'updated_by' => 'User',
      'updated_time' => 'datetime',
      'cells' => 'list<Object>',
      'confidence_level' => 'float',
      'objectives' => 'list<Object>',
      'viewers' => 'list<int>',
    );
  }
}
