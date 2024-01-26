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

class ArchivableCrudObjectEffectiveStatuses extends AbstractEnum {

  const ACTIVE = 'ACTIVE';
  const AD_PAUSED = 'AD_PAUSED';
  const ADSET_PAUSED = 'ADSET_PAUSED';
  const ARCHIVED = 'ARCHIVED';
  const ARCHIVED_IN_DRAFT = 'ARCHIVED_IN_DRAFT';
  const CAMPAIGN_PAUSED = 'CAMPAIGN_PAUSED';
  const DELETED = 'DELETED';
  const DISAPPROVED = 'DISAPPROVED';
  const PAUSED = 'PAUSED';
  const PENDING = 'PENDING';
  const PENDING_BILLING_INFO = 'PENDING_BILLING_INFO';
  const PENDING_REVIEW = 'PENDING_REVIEW';
  const PREAPPROVED = 'PREAPPROVED';
}
