<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
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
