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

class AdCreativeSourcingSpecFields extends AbstractEnum {

  const ASSOCIATED_PRODUCT_SET_ID = 'associated_product_set_id';
  const BRAND = 'brand';
  const DESTINATION_SCREENSHOT_SPEC = 'destination_screenshot_spec';
  const DYNAMIC_SITE_LINKS_SPEC = 'dynamic_site_links_spec';
  const ENABLE_SOCIAL_FEEDBACK_PRESERVATION = 'enable_social_feedback_preservation';
  const INTENT = 'intent';
  const PCA_SPEC = 'pca_spec';
  const PROMOTION_METADATA_SPEC = 'promotion_metadata_spec';
  const SITE_LINKS_DATA_CONSENTED = 'site_links_data_consented';
  const SITE_LINKS_SPEC = 'site_links_spec';
  const SOURCE_URL = 'source_url';
  const WEBSITE_MEDIA_SPEC = 'website_media_spec';
  const WEBSITE_SUMMARY_SPEC = 'website_summary_spec';

  public function getFieldTypes() {
    return array(
      'associated_product_set_id' => 'string',
      'brand' => 'Object',
      'destination_screenshot_spec' => 'Object',
      'dynamic_site_links_spec' => 'Object',
      'enable_social_feedback_preservation' => 'bool',
      'intent' => 'Object',
      'pca_spec' => 'Object',
      'promotion_metadata_spec' => 'list<AdCreativePromotionMetadataSpec>',
      'site_links_data_consented' => 'Object',
      'site_links_spec' => 'list<AdCreativeSiteLinksSpec>',
      'source_url' => 'string',
      'website_media_spec' => 'Object',
      'website_summary_spec' => 'Object',
    );
  }
}
