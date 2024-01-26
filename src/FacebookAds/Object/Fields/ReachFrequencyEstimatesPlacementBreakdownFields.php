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

class ReachFrequencyEstimatesPlacementBreakdownFields extends AbstractEnum {

  const ANDROID = 'android';
  const AUDIENCE_NETWORK = 'audience_network';
  const DESKTOP = 'desktop';
  const FACEBOOK_SEARCH = 'facebook_search';
  const FB_REELS = 'fb_reels';
  const FB_REELS_OVERLAY = 'fb_reels_overlay';
  const IG_ANDROID = 'ig_android';
  const IG_IOS = 'ig_ios';
  const IG_OTHER = 'ig_other';
  const IG_REELS = 'ig_reels';
  const IG_STORY = 'ig_story';
  const INSTANT_ARTICLES = 'instant_articles';
  const INSTREAM_VIDEOS = 'instream_videos';
  const IOS = 'ios';
  const MSITE = 'msite';
  const SUGGESTED_VIDEOS = 'suggested_videos';

  public function getFieldTypes() {
    return array(
      'android' => 'list<float>',
      'audience_network' => 'list<float>',
      'desktop' => 'list<float>',
      'facebook_search' => 'list<float>',
      'fb_reels' => 'list<float>',
      'fb_reels_overlay' => 'list<float>',
      'ig_android' => 'list<float>',
      'ig_ios' => 'list<float>',
      'ig_other' => 'list<float>',
      'ig_reels' => 'list<float>',
      'ig_story' => 'list<float>',
      'instant_articles' => 'list<float>',
      'instream_videos' => 'list<float>',
      'ios' => 'list<float>',
      'msite' => 'list<float>',
      'suggested_videos' => 'list<float>',
    );
  }
}
