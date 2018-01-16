<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
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

class CustomAudienceFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const APPROXIMATE_COUNT = 'approximate_count';
  const DATA_SOURCE = 'data_source';
  const DELIVERY_STATUS = 'delivery_status';
  const DESCRIPTION = 'description';
  const EXTERNAL_EVENT_SOURCE = 'external_event_source';
  const ID = 'id';
  const IS_VALUE_BASED = 'is_value_based';
  const LOOKALIKE_AUDIENCE_IDS = 'lookalike_audience_ids';
  const LOOKALIKE_SPEC = 'lookalike_spec';
  const NAME = 'name';
  const OPERATION_STATUS = 'operation_status';
  const OPT_OUT_LINK = 'opt_out_link';
  const PERMISSION_FOR_ACTIONS = 'permission_for_actions';
  const PIXEL_ID = 'pixel_id';
  const RETENTION_DAYS = 'retention_days';
  const RULE = 'rule';
  const RULE_AGGREGATION = 'rule_aggregation';
  const SUBTYPE = 'subtype';
  const TIME_CONTENT_UPDATED = 'time_content_updated';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const ALLOWED_DOMAINS = 'allowed_domains';
  const CLAIM_OBJECTIVE = 'claim_objective';
  const CONTENT_TYPE = 'content_type';
  const DATASET_ID = 'dataset_id';
  const EVENT_SOURCE_GROUP = 'event_source_group';
  const LIST_OF_ACCOUNTS = 'list_of_accounts';
  const ORIGIN_AUDIENCE_ID = 'origin_audience_id';
  const PREFILL = 'prefill';
  const PRODUCT_SET_ID = 'product_set_id';
  const ASSOCIATED_AUDIENCE_ID = 'associated_audience_id';
  const CREATION_PARAMS = 'creation_params';
  const EXCLUSIONS = 'exclusions';
  const INCLUSIONS = 'inclusions';
  const PARENT_AUDIENCE_ID = 'parent_audience_id';
  const TAGS = 'tags';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'approximate_count' => 'int',
      'data_source' => 'CustomAudienceDataSource',
      'delivery_status' => 'CustomAudienceStatus',
      'description' => 'string',
      'external_event_source' => 'AdsPixel',
      'id' => 'string',
      'is_value_based' => 'bool',
      'lookalike_audience_ids' => 'list<string>',
      'lookalike_spec' => 'LookalikeSpec',
      'name' => 'string',
      'operation_status' => 'CustomAudienceStatus',
      'opt_out_link' => 'string',
      'permission_for_actions' => 'CustomAudiencePermission',
      'pixel_id' => 'string',
      'retention_days' => 'int',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'subtype' => 'string',
      'time_content_updated' => 'unsigned int',
      'time_created' => 'unsigned int',
      'time_updated' => 'unsigned int',
      'allowed_domains' => 'list<string>',
      'claim_objective' => 'ClaimObjective',
      'content_type' => 'ContentType',
      'dataset_id' => 'string',
      'event_source_group' => 'string',
      'list_of_accounts' => 'list<unsigned int>',
      'origin_audience_id' => 'string',
      'prefill' => 'bool',
      'product_set_id' => 'string',
      'associated_audience_id' => 'unsigned int',
      'creation_params' => 'map',
      'exclusions' => 'list<Object>',
      'inclusions' => 'list<Object>',
      'parent_audience_id' => 'unsigned int',
      'tags' => 'list<string>',
    );
  }
}
