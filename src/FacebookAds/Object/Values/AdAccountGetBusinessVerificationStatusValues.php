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
 * @method static AdAccountGetBusinessVerificationStatusValues getInstance()
 */
class AdAccountGetBusinessVerificationStatusValues extends AbstractEnum {

  const EXPIRED = 'EXPIRED';
  const FAILED = 'FAILED';
  const INELIGIBLE = 'INELIGIBLE';
  const NOT_VERIFIED = 'NOT_VERIFIED';
  const PENDING = 'PENDING';
  const PENDING_NEED_MORE_INFO = 'PENDING_NEED_MORE_INFO';
  const PENDING_SUBMISSION = 'PENDING_SUBMISSION';
  const REJECTED = 'REJECTED';
  const REVOKED = 'REVOKED';
  const VERIFIED = 'VERIFIED';
}
