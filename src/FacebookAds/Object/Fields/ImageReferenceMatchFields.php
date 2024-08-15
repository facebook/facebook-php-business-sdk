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

class ImageReferenceMatchFields extends AbstractEnum {

  const CONFLICTING_COUNTRIES = 'conflicting_countries';
  const COUNTRY_RESOLUTION_HISTORY = 'country_resolution_history';
  const CREATION_TIME = 'creation_time';
  const CURRENT_CONFLICT_RESOLVED_COUNTRIES = 'current_conflict_resolved_countries';
  const DISPLAYED_MATCH_STATE = 'displayed_match_state';
  const DISPUTE_FORM_DATA_ENTRIES_WITH_TRANSLATIONS = 'dispute_form_data_entries_with_translations';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const MATCH_STATE = 'match_state';
  const MATCHED_REFERENCE_COPYRIGHT = 'matched_reference_copyright';
  const MATCHED_REFERENCE_OWNER = 'matched_reference_owner';
  const MODIFICATION_HISTORY = 'modification_history';
  const REFERENCE_COPYRIGHT = 'reference_copyright';
  const REFERENCE_OWNER = 'reference_owner';
  const REJECTION_FORM_DATA_ENTRIES_WITH_TRANSLATIONS = 'rejection_form_data_entries_with_translations';
  const RESOLUTION_REASON = 'resolution_reason';
  const UPDATE_TIME = 'update_time';

  public function getFieldTypes() {
    return array(
      'conflicting_countries' => 'list<string>',
      'country_resolution_history' => 'list<map<string, list<Object>>>',
      'creation_time' => 'datetime',
      'current_conflict_resolved_countries' => 'list<map<string, Object>>',
      'displayed_match_state' => 'string',
      'dispute_form_data_entries_with_translations' => 'list<Object>',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'match_state' => 'string',
      'matched_reference_copyright' => 'ImageCopyright',
      'matched_reference_owner' => 'Profile',
      'modification_history' => 'list<Object>',
      'reference_copyright' => 'ImageCopyright',
      'reference_owner' => 'Profile',
      'rejection_form_data_entries_with_translations' => 'list<Object>',
      'resolution_reason' => 'string',
      'update_time' => 'datetime',
    );
  }
}
