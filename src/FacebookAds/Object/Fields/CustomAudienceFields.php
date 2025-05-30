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

class CustomAudienceFields extends AbstractEnum {

  const ACCOUNT_ID = 'account_id';
  const APPROXIMATE_COUNT_LOWER_BOUND = 'approximate_count_lower_bound';
  const APPROXIMATE_COUNT_UPPER_BOUND = 'approximate_count_upper_bound';
  const CUSTOMER_FILE_SOURCE = 'customer_file_source';
  const DATA_SOURCE = 'data_source';
  const DATA_SOURCE_TYPES = 'data_source_types';
  const DATAFILE_CUSTOM_AUDIENCE_UPLOADING_STATUS = 'datafile_custom_audience_uploading_status';
  const DELETE_TIME = 'delete_time';
  const DELIVERY_STATUS = 'delivery_status';
  const DESCRIPTION = 'description';
  const EXCLUDED_CUSTOM_AUDIENCES = 'excluded_custom_audiences';
  const EXTERNAL_EVENT_SOURCE = 'external_event_source';
  const HOUSEHOLD_AUDIENCE = 'household_audience';
  const ID = 'id';
  const INCLUDED_CUSTOM_AUDIENCES = 'included_custom_audiences';
  const IS_ELIGIBLE_FOR_SAC_CAMPAIGNS = 'is_eligible_for_sac_campaigns';
  const IS_HOUSEHOLD = 'is_household';
  const IS_SNAPSHOT = 'is_snapshot';
  const IS_VALUE_BASED = 'is_value_based';
  const LOOKALIKE_AUDIENCE_IDS = 'lookalike_audience_ids';
  const LOOKALIKE_SPEC = 'lookalike_spec';
  const NAME = 'name';
  const OPERATION_STATUS = 'operation_status';
  const OPT_OUT_LINK = 'opt_out_link';
  const OWNER_BUSINESS = 'owner_business';
  const PAGE_DELETION_MARKED_DELETE_TIME = 'page_deletion_marked_delete_time';
  const PERMISSION_FOR_ACTIONS = 'permission_for_actions';
  const PIXEL_ID = 'pixel_id';
  const REGULATED_AUDIENCE_SPEC = 'regulated_audience_spec';
  const RETENTION_DAYS = 'retention_days';
  const REV_SHARE_POLICY_ID = 'rev_share_policy_id';
  const RULE = 'rule';
  const RULE_AGGREGATION = 'rule_aggregation';
  const RULE_V2 = 'rule_v2';
  const SEED_AUDIENCE = 'seed_audience';
  const SHARING_STATUS = 'sharing_status';
  const SUBTYPE = 'subtype';
  const TIME_CONTENT_UPDATED = 'time_content_updated';
  const TIME_CREATED = 'time_created';
  const TIME_UPDATED = 'time_updated';
  const ALLOWED_DOMAINS = 'allowed_domains';
  const ASSOCIATED_AUDIENCE_ID = 'associated_audience_id';
  const CLAIM_OBJECTIVE = 'claim_objective';
  const CONTENT_TYPE = 'content_type';
  const COUNTRIES = 'countries';
  const CREATION_PARAMS = 'creation_params';
  const DATASET_ID = 'dataset_id';
  const ENABLE_FETCH_OR_CREATE = 'enable_fetch_or_create';
  const EVENT_SOURCE_GROUP = 'event_source_group';
  const EVENT_SOURCES = 'event_sources';
  const EXCLUSIONS = 'exclusions';
  const FACEBOOK_PAGE_ID = 'facebook_page_id';
  const INCLUSIONS = 'inclusions';
  const LIST_OF_ACCOUNTS = 'list_of_accounts';
  const MARKETING_MESSAGE_CHANNELS = 'marketing_message_channels';
  const ORIGIN_AUDIENCE_ID = 'origin_audience_id';
  const PARENT_AUDIENCE_ID = 'parent_audience_id';
  const PARTNER_REFERENCE_KEY = 'partner_reference_key';
  const PREFILL = 'prefill';
  const PRODUCT_SET_ID = 'product_set_id';
  const SUBSCRIPTION_INFO = 'subscription_info';
  const USE_FOR_PRODUCTS = 'use_for_products';
  const USE_IN_CAMPAIGNS = 'use_in_campaigns';
  const VIDEO_GROUP_IDS = 'video_group_ids';
  const WHATS_APP_BUSINESS_PHONE_NUMBER_ID = 'whats_app_business_phone_number_id';

  public function getFieldTypes() {
    return array(
      'account_id' => 'string',
      'approximate_count_lower_bound' => 'int',
      'approximate_count_upper_bound' => 'int',
      'customer_file_source' => 'string',
      'data_source' => 'CustomAudienceDataSource',
      'data_source_types' => 'string',
      'datafile_custom_audience_uploading_status' => 'string',
      'delete_time' => 'int',
      'delivery_status' => 'CustomAudienceStatus',
      'description' => 'string',
      'excluded_custom_audiences' => 'list<CustomAudience>',
      'external_event_source' => 'AdsPixel',
      'household_audience' => 'int',
      'id' => 'string',
      'included_custom_audiences' => 'list<CustomAudience>',
      'is_eligible_for_sac_campaigns' => 'bool',
      'is_household' => 'bool',
      'is_snapshot' => 'bool',
      'is_value_based' => 'bool',
      'lookalike_audience_ids' => 'list<string>',
      'lookalike_spec' => 'LookalikeSpec',
      'name' => 'string',
      'operation_status' => 'CustomAudienceStatus',
      'opt_out_link' => 'string',
      'owner_business' => 'Business',
      'page_deletion_marked_delete_time' => 'int',
      'permission_for_actions' => 'AudiencePermissionForActions',
      'pixel_id' => 'string',
      'regulated_audience_spec' => 'LookalikeSpec',
      'retention_days' => 'int',
      'rev_share_policy_id' => 'unsigned int',
      'rule' => 'string',
      'rule_aggregation' => 'string',
      'rule_v2' => 'string',
      'seed_audience' => 'int',
      'sharing_status' => 'CustomAudienceSharingStatus',
      'subtype' => 'string',
      'time_content_updated' => 'unsigned int',
      'time_created' => 'unsigned int',
      'time_updated' => 'unsigned int',
      'allowed_domains' => 'list<string>',
      'associated_audience_id' => 'unsigned int',
      'claim_objective' => 'ClaimObjective',
      'content_type' => 'ContentType',
      'countries' => 'string',
      'creation_params' => 'map',
      'dataset_id' => 'string',
      'enable_fetch_or_create' => 'bool',
      'event_source_group' => 'string',
      'event_sources' => 'list<map>',
      'exclusions' => 'list<Object>',
      'facebook_page_id' => 'string',
      'inclusions' => 'list<Object>',
      'list_of_accounts' => 'list<unsigned int>',
      'marketing_message_channels' => 'Object',
      'origin_audience_id' => 'string',
      'parent_audience_id' => 'unsigned int',
      'partner_reference_key' => 'string',
      'prefill' => 'bool',
      'product_set_id' => 'string',
      'subscription_info' => 'list<SubscriptionInfo>',
      'use_for_products' => 'list<UseForProducts>',
      'use_in_campaigns' => 'bool',
      'video_group_ids' => 'list<string>',
      'whats_app_business_phone_number_id' => 'string',
    );
  }
}
