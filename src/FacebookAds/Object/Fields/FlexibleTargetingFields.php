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

class FlexibleTargetingFields extends AbstractEnum {

  const BEHAVIORS = 'behaviors';
  const COLLEGE_YEARS = 'college_years';
  const CONNECTIONS = 'connections';
  const CUSTOM_AUDIENCES = 'custom_audiences';
  const EDUCATION_MAJORS = 'education_majors';
  const EDUCATION_SCHOOLS = 'education_schools';
  const EDUCATION_STATUSES = 'education_statuses';
  const ETHNIC_AFFINITY = 'ethnic_affinity';
  const FAMILY_STATUSES = 'family_statuses';
  const FRIENDS_OF_CONNECTIONS = 'friends_of_connections';
  const GENERATION = 'generation';
  const HOME_OWNERSHIP = 'home_ownership';
  const HOME_TYPE = 'home_type';
  const HOME_VALUE = 'home_value';
  const HOUSEHOLD_COMPOSITION = 'household_composition';
  const INCOME = 'income';
  const INDUSTRIES = 'industries';
  const INTERESTED_IN = 'interested_in';
  const INTERESTS = 'interests';
  const LIFE_EVENTS = 'life_events';
  const MOMS = 'moms';
  const NET_WORTH = 'net_worth';
  const OFFICE_TYPE = 'office_type';
  const POLITICS = 'politics';
  const RELATIONSHIP_STATUSES = 'relationship_statuses';
  const USER_ADCLUSTERS = 'user_adclusters';
  const WORK_EMPLOYERS = 'work_employers';
  const WORK_POSITIONS = 'work_positions';

  public function getFieldTypes() {
    return array(
      'behaviors' => 'list<IDName>',
      'college_years' => 'list<unsigned int>',
      'connections' => 'list<IDName>',
      'custom_audiences' => 'list<IDName>',
      'education_majors' => 'list<IDName>',
      'education_schools' => 'list<IDName>',
      'education_statuses' => 'list<unsigned int>',
      'ethnic_affinity' => 'list<IDName>',
      'family_statuses' => 'list<IDName>',
      'friends_of_connections' => 'list<IDName>',
      'generation' => 'list<IDName>',
      'home_ownership' => 'list<IDName>',
      'home_type' => 'list<IDName>',
      'home_value' => 'list<IDName>',
      'household_composition' => 'list<IDName>',
      'income' => 'list<IDName>',
      'industries' => 'list<IDName>',
      'interested_in' => 'list<unsigned int>',
      'interests' => 'list<IDName>',
      'life_events' => 'list<IDName>',
      'moms' => 'list<IDName>',
      'net_worth' => 'list<IDName>',
      'office_type' => 'list<IDName>',
      'politics' => 'list<IDName>',
      'relationship_statuses' => 'list<unsigned int>',
      'user_adclusters' => 'list<IDName>',
      'work_employers' => 'list<IDName>',
      'work_positions' => 'list<IDName>',
    );
  }
}
