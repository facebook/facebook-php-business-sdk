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

class BlindPigFields extends AbstractEnum {

  const ALL_PHONE_NUMBERS = 'all_phone_numbers';
  const ALTERNATELY_NAMED_FIELD = 'alternately_named_field';
  const ALWAYS_NULL = 'always_null';
  const ALWAYS_SECRET_PATTERN_TIME = 'always_secret_pattern_time';
  const ALWAYS_SECRET_TIME = 'always_secret_time';
  const AMBIENCE = 'ambience';
  const ASYNC_DRINKS_INFO = 'async_drinks_info';
  const AVERAGE_CUSTOMER_AGE = 'average_customer_age';
  const AWESOMENESS = 'awesomeness';
  const BAR_GAME_IDS = 'bar_game_ids';
  const BEER_TYPES = 'beer_types';
  const BLIND_PIG_PROFILE = 'blind_pig_profile';
  const CARDS_ACCEPTED = 'cards_accepted';
  const CATEGORY = 'category';
  const CELEBRITY = 'celebrity';
  const CHAIR_COUNT = 'chair_count';
  const COCKTAILS = 'cocktails';
  const COLOR = 'color';
  const COMPANY_NAME = 'company_name';
  const COUNTRY_OF_ORIGIN = 'country_of_origin';
  const CREATION_TIME_FROM_TAO_SERVER = 'creation_time_from_tao_server';
  const CREATOR = 'creator';
  const CREATOR_AS_FIELD = 'creator_as_field';
  const CURRENCY_CODE = 'currency_code';
  const DAYS_OPEN = 'days_open';
  const DRINKS_INFO = 'drinks_info';
  const DYNAMICALLY_NAMED_FIELD = 'dynamically_named_field';
  const EIN = 'ein';
  const EMAIL_ADDRESS_BLACKLIST = 'email_address_blacklist';
  const EMBEDDED_UPDATED_TIME = 'embedded_updated_time';
  const EVEN_NUMBER = 'even_number';
  const FAVORITE_MEAL = 'favorite_meal';
  const FAVORITE_PERSON = 'favorite_person';
  const FAVORITE_PERSON_AGAIN = 'favorite_person_again';
  const FAVORITE_PLACE = 'favorite_place';
  const FEEDBACK_LIST = 'feedback_list';
  const FIELD_ON_SHADOW_ENT_PATTERN = 'field_on_shadow_ent_pattern';
  const FIELD_ON_TRAIT = 'field_on_trait';
  const FOUNDED_TIME = 'founded_time';
  const GEOCITIES_PAGE_URI = 'geocities_page_uri';
  const ID = 'id';
  const INSTRUMENTS = 'instruments';
  const IS_ILLEGAL = 'is_illegal';
  const IS_IN_BLANKET = 'is_in_blanket';
  const LAST_DRINK_BOTTLE_BROKEN_DATE = 'last_drink_bottle_broken_date';
  const LATITUDE = 'latitude';
  const LOCALE = 'locale';
  const LONGITUDE = 'longitude';
  const LUCKY_NUMBERS = 'lucky_numbers';
  const MARKETING_URI = 'marketing_uri';
  const MAX_ALLOWANCE = 'max_allowance';
  const MEALS = 'meals';
  const MOBILE_GITHUB_URI = 'mobile_github_uri';
  const MONTHLY_PROFIT = 'monthly_profit';
  const NAME = 'name';
  const OVERRIDEABLE_THING = 'overrideable_thing';
  const PHONE_DIRECTORY = 'phone_directory';
  const PHONE_NUMBERS = 'phone_numbers';
  const PRICE = 'price';
  const PROPRIETOR = 'proprietor';
  const REQUEST_BOX = 'request_box';
  const REVERT_NAME = 'revert_name';
  const SECOND_FAVORITE_PERSON = 'second_favorite_person';
  const SECRET_EVEN_NUMBER = 'secret_even_number';
  const SECRET_EVEN_PATTERN_NUMBER = 'secret_even_pattern_number';
  const SECRET_ODD_NUMBER = 'secret_odd_number';
  const SECRET_PATTERN_TIME = 'secret_pattern_time';
  const SECRET_TIME = 'secret_time';
  const SEE_ALSO = 'see_also';
  const SNACKS = 'snacks';
  const STORE_NUMBER = 'store_number';
  const STREET_ADDRESS = 'street_address';
  const SUBPATTERN_ADDRESS = 'subpattern_address';
  const SUBPATTERN_DYNAMIC_FIELD = 'subpattern_dynamic_field';
  const SUBPATTERN_NAME = 'subpattern_name';
  const THRONE_CHAIR_ID = 'throne_chair_id';
  const TODAYS_SPECIAL = 'todays_special';
  const UNIQUE_BAR_GAME_IDS = 'unique_bar_game_ids';
  const UPDATE_TIME_FROM_TAO_SERVER = 'update_time_from_tao_server';
  const VIP = 'vip';
  const YEAR_FOUNDED = 'year_founded';

  public function getFieldTypes() {
    return array(
      'all_phone_numbers' => 'list<string>',
      'alternately_named_field' => 'int',
      'always_null' => 'User',
      'always_secret_pattern_time' => 'datetime',
      'always_secret_time' => 'datetime',
      'ambience' => 'string',
      'async_drinks_info' => 'list<Object>',
      'average_customer_age' => 'float',
      'awesomeness' => 'string',
      'bar_game_ids' => 'string',
      'beer_types' => 'list<string>',
      'blind_pig_profile' => 'Profile',
      'cards_accepted' => 'bool',
      'category' => 'string',
      'celebrity' => 'string',
      'chair_count' => 'Object',
      'cocktails' => 'list<string>',
      'color' => 'string',
      'company_name' => 'string',
      'country_of_origin' => 'string',
      'creation_time_from_tao_server' => 'datetime',
      'creator' => 'User',
      'creator_as_field' => 'User',
      'currency_code' => 'string',
      'days_open' => 'string',
      'drinks_info' => 'list<Object>',
      'dynamically_named_field' => 'int',
      'ein' => 'string',
      'email_address_blacklist' => 'list<string>',
      'embedded_updated_time' => 'datetime',
      'even_number' => 'int',
      'favorite_meal' => 'string',
      'favorite_person' => 'User',
      'favorite_person_again' => 'User',
      'favorite_place' => 'string',
      'feedback_list' => 'list<Object>',
      'field_on_shadow_ent_pattern' => 'string',
      'field_on_trait' => 'string',
      'founded_time' => 'datetime',
      'geocities_page_uri' => 'string',
      'id' => 'string',
      'instruments' => 'list<string>',
      'is_illegal' => 'bool',
      'is_in_blanket' => 'bool',
      'last_drink_bottle_broken_date' => 'datetime',
      'latitude' => 'float',
      'locale' => 'string',
      'longitude' => 'float',
      'lucky_numbers' => 'list<int>',
      'marketing_uri' => 'string',
      'max_allowance' => 'Object',
      'meals' => 'list<string>',
      'mobile_github_uri' => 'string',
      'monthly_profit' => 'list<Object>',
      'name' => 'string',
      'overrideable_thing' => 'string',
      'phone_directory' => 'list<Object>',
      'phone_numbers' => 'list<string>',
      'price' => 'list<Object>',
      'proprietor' => 'User',
      'request_box' => 'string',
      'revert_name' => 'string',
      'second_favorite_person' => 'User',
      'secret_even_number' => 'int',
      'secret_even_pattern_number' => 'int',
      'secret_odd_number' => 'int',
      'secret_pattern_time' => 'datetime',
      'secret_time' => 'datetime',
      'see_also' => 'list<string>',
      'snacks' => 'list<string>',
      'store_number' => 'string',
      'street_address' => 'string',
      'subpattern_address' => 'string',
      'subpattern_dynamic_field' => 'int',
      'subpattern_name' => 'string',
      'throne_chair_id' => 'string',
      'todays_special' => 'Object',
      'unique_bar_game_ids' => 'list<string>',
      'update_time_from_tao_server' => 'datetime',
      'vip' => 'User',
      'year_founded' => 'int',
    );
  }
}
