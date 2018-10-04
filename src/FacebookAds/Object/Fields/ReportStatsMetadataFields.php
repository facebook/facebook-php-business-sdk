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

class ReportStatsMetadataFields extends AbstractEnum {

  const CUTOFF_DATE_ACCOUNT_DATA = 'cutoff_date_account_data';
  const CUTOFF_DATE_ACTIONS = 'cutoff_date_actions';
  const CUTOFF_DATE_CAROUSEL_ACTION_BREAKDOWN = 'cutoff_date_carousel_action_breakdown';
  const CUTOFF_DATE_CAROUSEL_CARD_NAME = 'cutoff_date_carousel_card_name';
  const CUTOFF_DATE_DEMOGRAPHICS = 'cutoff_date_demographics';
  const CUTOFF_DATE_GENERAL = 'cutoff_date_general';
  const CUTOFF_DATE_PLACEMENT = 'cutoff_date_placement';
  const CUTOFF_DATE_RELEVANCE_SCORE = 'cutoff_date_relevance_score';
  const CUTOFF_DATE_VIDEO_TYPE_BREAKDOWN = 'cutoff_date_video_type_breakdown';
  const CUTOFF_DATE_WEBSITE_CTR = 'cutoff_date_website_ctr';
  const ID = 'id';

  public function getFieldTypes() {
    return array(
      'cutoff_date_account_data' => 'string',
      'cutoff_date_actions' => 'string',
      'cutoff_date_carousel_action_breakdown' => 'string',
      'cutoff_date_carousel_card_name' => 'string',
      'cutoff_date_demographics' => 'string',
      'cutoff_date_general' => 'string',
      'cutoff_date_placement' => 'string',
      'cutoff_date_relevance_score' => 'string',
      'cutoff_date_video_type_breakdown' => 'string',
      'cutoff_date_website_ctr' => 'string',
      'id' => 'string',
    );
  }
}
