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

class AdCampaignGoalFields extends AbstractEnum {

  const ENGAGED_AUDIENCES_AUDIENCE_LABEL_EXCLUSIONS = 'engaged_audiences_audience_label_exclusions';
  const ENGAGED_AUDIENCES_AUDIENCE_LABEL_INCLUSIONS = 'engaged_audiences_audience_label_inclusions';
  const ENGAGED_AUDIENCES_EXCLUSIONS = 'engaged_audiences_exclusions';
  const ENGAGED_AUDIENCES_INCLUSIONS = 'engaged_audiences_inclusions';
  const EXISTING_CUSTOMERS_AUDIENCE_LABEL_EXCLUSIONS = 'existing_customers_audience_label_exclusions';
  const EXISTING_CUSTOMERS_AUDIENCE_LABEL_INCLUSIONS = 'existing_customers_audience_label_inclusions';
  const EXISTING_CUSTOMERS_AUTO_EXCLUSION_RETENTION_DAYS = 'existing_customers_auto_exclusion_retention_days';
  const EXISTING_CUSTOMERS_EXCLUSION_AUTO_SELECTION_STATE = 'existing_customers_exclusion_auto_selection_state';
  const EXISTING_CUSTOMERS_EXCLUSIONS = 'existing_customers_exclusions';
  const EXISTING_CUSTOMERS_INCLUSIONS = 'existing_customers_inclusions';
  const IS_CA_EXPANSION_ENABLED = 'is_ca_expansion_enabled';
  const IS_LOOKALIKE_INCLUSION_ENABLED = 'is_lookalike_inclusion_enabled';
  const LOOKALIKE_INCLUSIONS = 'lookalike_inclusions';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'engaged_audiences_audience_label_exclusions' => 'list<string>',
      'engaged_audiences_audience_label_inclusions' => 'list<string>',
      'engaged_audiences_exclusions' => 'list<string>',
      'engaged_audiences_inclusions' => 'list<string>',
      'existing_customers_audience_label_exclusions' => 'list<string>',
      'existing_customers_audience_label_inclusions' => 'list<string>',
      'existing_customers_auto_exclusion_retention_days' => 'int',
      'existing_customers_exclusion_auto_selection_state' => 'int',
      'existing_customers_exclusions' => 'list<string>',
      'existing_customers_inclusions' => 'list<string>',
      'is_ca_expansion_enabled' => 'bool',
      'is_lookalike_inclusion_enabled' => 'bool',
      'lookalike_inclusions' => 'list<string>',
      'type' => 'int',
    );
  }
}
