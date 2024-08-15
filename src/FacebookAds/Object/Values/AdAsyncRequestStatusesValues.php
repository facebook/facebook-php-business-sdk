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
 * @method static AdAsyncRequestStatusesValues getInstance()
 */
class AdAsyncRequestStatusesValues extends AbstractEnum {

  const CANCELED = 'CANCELED';
  const CANCELED_DEPENDENCY = 'CANCELED_DEPENDENCY';
  const ERROR = 'ERROR';
  const ERROR_CONFLICTS = 'ERROR_CONFLICTS';
  const ERROR_DEPENDENCY = 'ERROR_DEPENDENCY';
  const INITIAL = 'INITIAL';
  const IN_PROGRESS = 'IN_PROGRESS';
  const PENDING_DEPENDENCY = 'PENDING_DEPENDENCY';
  const PROCESS_BY_AD_ASYNC_ENGINE = 'PROCESS_BY_AD_ASYNC_ENGINE';
  const PROCESS_BY_EVENT_PROCESSOR = 'PROCESS_BY_EVENT_PROCESSOR';
  const SUCCESS = 'SUCCESS';
  const USER_CANCELED = 'USER_CANCELED';
  const USER_CANCELED_DEPENDENCY = 'USER_CANCELED_DEPENDENCY';
}
