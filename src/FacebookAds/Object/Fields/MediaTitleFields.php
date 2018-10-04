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

class MediaTitleFields extends AbstractEnum {

  const APPLINKS = 'applinks';
  const CONTENT_CATEGORY = 'content_category';
  const CONTENT_COUNTRIES = 'content_countries';
  const CONTENT_LOCALE = 'content_locale';
  const CREW = 'crew';
  const CURRENCY = 'currency';
  const DESCRIPTION = 'description';
  const EPISODE = 'episode';
  const FB_PAGE_ALIAS = 'fb_page_alias';
  const FB_PAGE_ID = 'fb_page_id';
  const GENRES = 'genres';
  const ID = 'id';
  const IMAGES = 'images';
  const INSTAGRAM_USERNAME = 'instagram_username';
  const MEDIA_SOURCE = 'media_source';
  const MEDIA_TITLE_ID = 'media_title_id';
  const MPAA_RATING = 'mpaa_rating';
  const PERFORMERS = 'performers';
  const PRICE = 'price';
  const RELEASE_DATE = 'release_date';
  const SANITIZED_IMAGES = 'sanitized_images';
  const SEASON = 'season';
  const SIMILAR_TITLES = 'similar_titles';
  const SUBTITLE_LOCALE = 'subtitle_locale';
  const TITLE = 'title';
  const URL = 'url';
  const VIEW_COUNT_EIGHTY_FOUR_DAYS = 'view_count_eighty_four_days';
  const VIEW_COUNT_FOURTEEN_DAYS = 'view_count_fourteen_days';
  const VIEW_COUNT_ONE_DAY = 'view_count_one_day';
  const VIEW_COUNT_SEVEN_DAYS = 'view_count_seven_days';
  const VIEW_COUNT_TWENTY_EIGHT_DAYS = 'view_count_twenty_eight_days';
  const WIKI_DATA_ITEM = 'wiki_data_item';
  const WIKIPEDIA_URL = 'wikipedia_url';

  public function getFieldTypes() {
    return array(
      'applinks' => 'AppLinks',
      'content_category' => 'string',
      'content_countries' => 'list<string>',
      'content_locale' => 'string',
      'crew' => 'list<string>',
      'currency' => 'string',
      'description' => 'string',
      'episode' => 'unsigned int',
      'fb_page_alias' => 'string',
      'fb_page_id' => 'Page',
      'genres' => 'list<string>',
      'id' => 'string',
      'images' => 'list<string>',
      'instagram_username' => 'string',
      'media_source' => 'string',
      'media_title_id' => 'string',
      'mpaa_rating' => 'string',
      'performers' => 'list<string>',
      'price' => 'string',
      'release_date' => 'string',
      'sanitized_images' => 'list<string>',
      'season' => 'unsigned int',
      'similar_titles' => 'list<string>',
      'subtitle_locale' => 'string',
      'title' => 'string',
      'url' => 'string',
      'view_count_eighty_four_days' => 'Object',
      'view_count_fourteen_days' => 'Object',
      'view_count_one_day' => 'Object',
      'view_count_seven_days' => 'Object',
      'view_count_twenty_eight_days' => 'Object',
      'wiki_data_item' => 'string',
      'wikipedia_url' => 'string',
    );
  }
}
