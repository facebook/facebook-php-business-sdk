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

class ProductCatalogDiagnosticGroupFields extends AbstractEnum {

  const AFFECTED_CHANNELS = 'affected_channels';
  const AFFECTED_ENTITY = 'affected_entity';
  const AFFECTED_FEATURES = 'affected_features';
  const DIAGNOSTICS = 'diagnostics';
  const ERROR_CODE = 'error_code';
  const NUMBER_OF_AFFECTED_ENTITIES = 'number_of_affected_entities';
  const NUMBER_OF_AFFECTED_ITEMS = 'number_of_affected_items';
  const SEVERITY = 'severity';
  const SUBTITLE = 'subtitle';
  const TITLE = 'title';
  const TYPE = 'type';

  public function getFieldTypes() {
    return array(
      'affected_channels' => 'list<AffectedChannels>',
      'affected_entity' => 'AffectedEntity',
      'affected_features' => 'list<AffectedFeatures>',
      'diagnostics' => 'list<Object>',
      'error_code' => 'int',
      'number_of_affected_entities' => 'int',
      'number_of_affected_items' => 'int',
      'severity' => 'Severity',
      'subtitle' => 'string',
      'title' => 'string',
      'type' => 'Type',
    );
  }
}
