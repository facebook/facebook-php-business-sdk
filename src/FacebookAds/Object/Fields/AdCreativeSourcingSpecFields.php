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
  const PROMOTION_METADATA_SPEC = 'promotion_metadata_spec';
  const SITE_LINKS_SPEC = 'site_links_spec';
  const SOURCE_URL = 'source_url';

  public function getFieldTypes() {
    return array(
      'associated_product_set_id' => 'string',
      'promotion_metadata_spec' => 'list<AdCreativePromotionMetadataSpec>',
      'site_links_spec' => 'list<AdCreativeSiteLinksSpec>',
      'source_url' => 'string',
    );
  }
}
