<?php
/**
 * Copyright 2014 Facebook, Inc.
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

namespace FacebookAds\Object;

use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\Traits\FieldValidation;

class TargetingSpecs extends AbstractObject {
  use FieldValidation;

  /**
   * @var string[]
   */
  protected static $fields = array(
    TargetingSpecsFields::GENDERS,
    TargetingSpecsFields::AGE_MIN,
    TargetingSpecsFields::AGE_MAX,
    TargetingSpecsFields::GEO_LOCATIONS,
    TargetingSpecsFields::EXCLUDED_GEO_LOCATIONS,
    TargetingSpecsFields::USER_ADCLUSTERS,
    TargetingSpecsFields::EXCLUDED_USER_ADCLUSTERS,
    TargetingSpecsFields::INTERESTS,
    TargetingSpecsFields::USER_OS,
    TargetingSpecsFields::USER_DEVICE,
    TargetingSpecsFields::WIRELESS_CARRIER,
    TargetingSpecsFields::PAGE_TYPES,
    TargetingSpecsFields::CONNECTIONS,
    TargetingSpecsFields::EXCLUDED_CONNECTIONS,
    TargetingSpecsFields::FRIENDS_OF_CONNECTIONS,
    TargetingSpecsFields::BEHAVIORS,
    TargetingSpecsFields::RELATIONSHIP_STATUSES,
    TargetingSpecsFields::INTERESTED_IN,
    TargetingSpecsFields::LIFE_EVENTS,
    TargetingSpecsFields::POLITICS,
    TargetingSpecsFields::MARKETS,
    TargetingSpecsFields::INDUSTRIES,
    TargetingSpecsFields::INCOME,
    TargetingSpecsFields::NET_WORTH,
    TargetingSpecsFields::HOME_TYPE,
    TargetingSpecsFields::HOME_OWNERSHIP,
    TargetingSpecsFields::HOME_VALUE,
    TargetingSpecsFields::ETHNIC_AFFINITY,
    TargetingSpecsFields::GENERATION,
    TargetingSpecsFields::HOUSEHOLD_COMPOSITION,
    TargetingSpecsFields::MOMS,
    TargetingSpecsFields::OFFICE_TYPE,
    TargetingSpecsFields::EDUCATION_SCHOOLS,
    TargetingSpecsFields::EDUCATION_STATUSES,
    TargetingSpecsFields::COLLEGE_YEARS,
    TargetingSpecsFields::EDUCATION_MAJORS,
    TargetingSpecsFields::WORK_EMPLOYERS,
    TargetingSpecsFields::WORK_POSITIONS,
    TargetingSpecsFields::LOCALES,
    TargetingSpecsFields::ZIPS,
    TargetingSpecsFields::CUSTOM_AUDIENCES,
    TargetingSpecsFields::EXCLUDED_CUSTOM_AUDIENCES,
    TargetingSpecsFields::CONJUNCTIVE_USER_ADCLUSTERS,
  );
}
