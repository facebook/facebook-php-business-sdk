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

class ReachFrequencyEstimatesPlacementBreakdownFields extends AbstractEnum {

  const ANDROID = 'android';
  const AUDIENCE_NETWORK = 'audience_network';
  const DESKTOP = 'desktop';
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
