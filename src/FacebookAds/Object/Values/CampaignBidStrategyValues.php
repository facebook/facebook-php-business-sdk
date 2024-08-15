<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Values;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 * @method static CampaignBidStrategyValues getInstance()
 */
class CampaignBidStrategyValues extends AbstractEnum {

  const COST_CAP = 'COST_CAP';
  const LOWEST_COST_WITHOUT_CAP = 'LOWEST_COST_WITHOUT_CAP';
  const LOWEST_COST_WITH_BID_CAP = 'LOWEST_COST_WITH_BID_CAP';
  const LOWEST_COST_WITH_MIN_ROAS = 'LOWEST_COST_WITH_MIN_ROAS';
}
