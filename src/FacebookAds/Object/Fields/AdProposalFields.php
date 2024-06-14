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

class AdProposalFields extends AbstractEnum {

  const AD_PROPOSAL_TYPE_NAME = 'ad_proposal_type_name';
  const ADACCOUNT = 'adaccount';
  const CREATION_TIME = 'creation_time';
  const CREATOR = 'creator';
  const DELIVERY_INTERFACE = 'delivery_interface';
  const EXPIRATION_TIME = 'expiration_time';
  const HAS_CONFLICT = 'has_conflict';
  const ID = 'id';
  const KPI_METRIC = 'kpi_metric';
  const MESSAGE = 'message';
  const NAME = 'name';
  const PROPOSAL_DTS_TEMPLATE = 'proposal_dts_template';
  const PROPOSAL_TEMPLATE_NAME = 'proposal_template_name';
  const RECOMMENDATION = 'recommendation';
  const REVIEW_TIME = 'review_time';
  const REVIEWED_BY = 'reviewed_by';
  const SEND_TIME = 'send_time';
  const STATUS = 'status';
  const USE_TESTING = 'use_testing';

  public function getFieldTypes() {
    return array(
      'ad_proposal_type_name' => 'string',
      'adaccount' => 'AdAccount',
      'creation_time' => 'datetime',
      'creator' => 'User',
      'delivery_interface' => 'string',
      'expiration_time' => 'datetime',
      'has_conflict' => 'bool',
      'id' => 'string',
      'kpi_metric' => 'string',
      'message' => 'string',
      'name' => 'string',
      'proposal_dts_template' => 'string',
      'proposal_template_name' => 'string',
      'recommendation' => 'string',
      'review_time' => 'datetime',
      'reviewed_by' => 'User',
      'send_time' => 'datetime',
      'status' => 'string',
      'use_testing' => 'bool',
    );
  }
}
