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

class AudioVisualReferenceMatchFields extends AbstractEnum {

  const AUDIO_CONFLICTING_SEGMENTS = 'audio_conflicting_segments';
  const AUDIO_CURRENT_CONFLICT_RESOLVED_SEGMENTS = 'audio_current_conflict_resolved_segments';
  const AUDIO_SEGMENT_RESOLUTION_HISTORY = 'audio_segment_resolution_history';
  const CONFLICT_TYPE = 'conflict_type';
  const CONFLICTING_COUNTRIES = 'conflicting_countries';
  const COUNTRY_RESOLUTION_HISTORY = 'country_resolution_history';
  const CREATION_TIME = 'creation_time';
  const CURRENT_CONFLICT_RESOLVED_COUNTRIES = 'current_conflict_resolved_countries';
  const DISPLAYED_MATCH_STATE = 'displayed_match_state';
  const DISPUTE_FORM_DATA_ENTRIES_WITH_TRANSLATIONS = 'dispute_form_data_entries_with_translations';
  const EXPIRATION_TIME = 'expiration_time';
  const ID = 'id';
  const IS_DISPUTABLE = 'is_disputable';
  const MATCH_STATE = 'match_state';
  const MATCHED_OVERLAP_PERCENTAGE = 'matched_overlap_percentage';
  const MATCHED_OWNER_MATCH_DURATION_IN_SEC = 'matched_owner_match_duration_in_sec';
  const MATCHED_REFERENCE_OWNER = 'matched_reference_owner';
  const MODIFICATION_HISTORY = 'modification_history';
  const NUM_MATCHES_ON_MATCHED_SIDE = 'num_matches_on_matched_side';
  const NUM_MATCHES_ON_REF_SIDE = 'num_matches_on_ref_side';
  const REF_OWNER_MATCH_DURATION_IN_SEC = 'ref_owner_match_duration_in_sec';
  const REFERENCE_OVERLAP_PERCENTAGE = 'reference_overlap_percentage';
  const REFERENCE_OWNER = 'reference_owner';
  const REJECTION_FORM_DATA_ENTRIES_WITH_TRANSLATIONS = 'rejection_form_data_entries_with_translations';
  const RESOLUTION_DETAILS = 'resolution_details';
  const RESOLUTION_REASON = 'resolution_reason';
  const UPDATE_TIME = 'update_time';
  const VIEWS_ON_MATCHED_SIDE = 'views_on_matched_side';
  const VISUAL_CONFLICTING_SEGMENTS = 'visual_conflicting_segments';
  const VISUAL_CURRENT_CONFLICT_RESOLVED_SEGMENTS = 'visual_current_conflict_resolved_segments';
  const VISUAL_SEGMENT_RESOLUTION_HISTORY = 'visual_segment_resolution_history';

  public function getFieldTypes() {
    return array(
      'audio_conflicting_segments' => 'list<Object>',
      'audio_current_conflict_resolved_segments' => 'list<Object>',
      'audio_segment_resolution_history' => 'list<Object>',
      'conflict_type' => 'string',
      'conflicting_countries' => 'list<string>',
      'country_resolution_history' => 'list<map<string, list<Object>>>',
      'creation_time' => 'datetime',
      'current_conflict_resolved_countries' => 'list<map<string, Object>>',
      'displayed_match_state' => 'string',
      'dispute_form_data_entries_with_translations' => 'list<Object>',
      'expiration_time' => 'datetime',
      'id' => 'string',
      'is_disputable' => 'bool',
      'match_state' => 'string',
      'matched_overlap_percentage' => 'float',
      'matched_owner_match_duration_in_sec' => 'float',
      'matched_reference_owner' => 'Profile',
      'modification_history' => 'list<Object>',
      'num_matches_on_matched_side' => 'unsigned int',
      'num_matches_on_ref_side' => 'unsigned int',
      'ref_owner_match_duration_in_sec' => 'float',
      'reference_overlap_percentage' => 'float',
      'reference_owner' => 'Profile',
      'rejection_form_data_entries_with_translations' => 'list<Object>',
      'resolution_details' => 'string',
      'resolution_reason' => 'string',
      'update_time' => 'datetime',
      'views_on_matched_side' => 'unsigned int',
      'visual_conflicting_segments' => 'list<Object>',
      'visual_current_conflict_resolved_segments' => 'list<Object>',
      'visual_segment_resolution_history' => 'list<Object>',
    );
  }
}
