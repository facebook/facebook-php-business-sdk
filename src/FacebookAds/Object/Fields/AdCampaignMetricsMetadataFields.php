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

class AdCampaignMetricsMetadataFields extends AbstractEnum {

  const BOOSTED_COMPONENT_OPTIMIZATION = 'boosted_component_optimization';
  const CREATION_FLOW_TIPS = 'creation_flow_tips';
  const DEFAULT_OPTED_IN_PLACEMENTS = 'default_opted_in_placements';
  const DELIVERY_GROWTH_OPTIMIZATIONS = 'delivery_growth_optimizations';
  const DUPLICATION_FLOW_TIPS = 'duplication_flow_tips';
  const EDIT_FLOW_TIPS = 'edit_flow_tips';

  public function getFieldTypes() {
    return array(
      'boosted_component_optimization' => 'list<string>',
      'creation_flow_tips' => 'list<string>',
      'default_opted_in_placements' => 'list<Object>',
      'delivery_growth_optimizations' => 'list<Object>',
      'duplication_flow_tips' => 'list<string>',
      'edit_flow_tips' => 'list<string>',
    );
  }
}
