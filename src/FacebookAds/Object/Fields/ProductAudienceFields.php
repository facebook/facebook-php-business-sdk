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
 * @method static ProductAudienceFields getInstance()
 */
class ProductAudienceFields extends AbstractEnum {

  const ID = 'id';
  const NAME = 'name';
  const DESCRIPTION = 'description';
  const PRODUCT_SET_ID = 'product_set_id';
  const PIXEL_ID = 'pixel_id';
  const INCLUSIONS = 'inclusions';
  const EXCLUSIONS = 'exclusions';
}
