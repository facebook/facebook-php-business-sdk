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

namespace FacebookAds\Object\ServerSide;

use InvalidArgumentException;

/**
 * Normalizer Class
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class Normalizer {
  /**
   * @param string $field to be normalized.
   * @param string $data value to be normalized
   * @return string
   */
  public static function normalize($field, $data) {
    if ($data == null || strlen($data) == 0) {
      return null;
    }

    // Check if already hashed. If yes, don't try to normalize an already hashed data.
    if (Util::isHashed($data)) {
      return $data;
    }

    $data = trim(strtolower($data));
    $normalized_data = $data;

    switch ($field) {
      case 'em':
        $normalized_data = Normalizer::normalizeEmail($data);
        break;

      case 'ph':
        $normalized_data = Normalizer::normalizePhone($data);
        break;

      case 'zp':
        $normalized_data = Normalizer::normalizeZipCode($data);
        break;

      case 'ct':
        $normalized_data = Normalizer::normalizeCity($data);
        break;

      case 'st':
        $normalized_data = Normalizer::normalizeState($data);
        break;

      case 'country':
        $normalized_data = Normalizer::normalizeCountry($data);
        break;

      case 'currency':
        $normalized_data = Normalizer::normalizeCurrency($data);
        break;

      case 'f5first':
        $normalized_data = Normalizer::normalizeF5($data);
        break;

      case 'f5last':
        $normalized_data = Normalizer::normalizeF5($data);
        break;

      case 'fi':
        $normalized_data = Normalizer::normalizeFi($data);
        break;

      case 'dobd':
        $normalized_data = Normalizer::normalizeDobd($data);
        break;

      case 'dobm':
        $normalized_data = Normalizer::normalizeDobm($data);
        break;

      case 'doby':
        $normalized_data = Normalizer::normalizeDoby($data);
        break;

      case 'delivery_category':
        $normalized_data = Normalizer::normalizeDeliveryCategory($data);
        break;

      case 'action_source':
        $normalized_data = Normalizer::normalizeActionSource($data);
        break;

      default:
    }

    return $normalized_data;
  }

  /**
   * @param string $email Email address to be normalized.
   * @return string
   */
  private static function normalizeEmail($email) {
    // Validates email against RFC 822
    $result = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($result, FILTER_VALIDATE_EMAIL)) {
      throw new InvalidArgumentException('Invalid email format for the passed email: ' . $email . 'Please check the passed email format.');
    }

    return $result;
  }

  /**
   * @param string $city city name to be normalized.
   * @return string
   */
  private static function normalizeCity($city) {
    return trim(preg_replace('/[0-9.\s\-()]/', '', $city));
  }

  /**
   * @param string $state state name to be normalized.
   * @return string
   */
  private static function normalizeState($state) {
    return preg_replace('/[^a-z]/', '', $state);
  }

  /**
   * @param string $country country code to be normalized(ISO 3166-2).
   * @return string
   */
  private static function normalizeCountry($country) {
    $result = preg_replace('/[^a-z]/i', '', $country);

    if (strlen($result) != 2) {
      throw new InvalidArgumentException('Invalid country format passed(' . $country . '). Country Code should be a two-letter ISO Country Code');
    }

    return $result;
  }

  /**
   * @param string $zip postal code to be normalized.
   * @return string
   */
  private static function normalizeZipCode($zip) {
    // Removing the spaces from the zip code. Eg:
    $zip = preg_replace('/[ ]/', '', $zip);

    // If the code has more than one part, retain the first part.
    $zip = explode('-', $zip)[0];
    return $zip;
  }

  /**
   * @param string $phone phone number to be normalized.
   * @return string
   */
  private static function normalizePhone($phone) {
    $result = trim(preg_replace('/[a-z()-]/', '', $phone));

    if (Normalizer::isInternationalNumber($result)) {
      $result = preg_replace('/[\-\s+]/', '', $result);
    }

    return $result;
  }

  /**
   * @param string $currency currency code to be normalized(ISO 4217).
   * @return string
   */
  private static function normalizeCurrency($currency) {
    $result = preg_replace('/[^a-z]/i', '', $currency);

    if (strlen($result) != 3) {
      throw new InvalidArgumentException('Invalid currency format passed(' . $currency . '). Currency Code should be a three-letter ISO Currency Code');
    }

    return $result;
  }

  /**
   *  @param string $name A first or last name to be normalized.
   *  @return string
   */
  private static function normalizeF5($name) {
    return substr($name, 0, 5);
  }

  /**
   *  @param string $fi A first initial to be normalized.
   *  @return string
   */
  private static function normalizeFi($fi) {
    return substr($fi, 0, 1);
  }

  /**
   *  @param string $dobd A date of birth day to be normalized.
   *  @return string
   */
  private static function normalizeDobd($dobd) {
    if (strlen($dobd) == 1) {
      $dobd = '0' . $dobd;
    }

    if (!preg_match('/^[0-9]{2}$/', $dobd)) {
      throw new InvalidArgumentException('Invalid dobd passed(' . $dobd . '). Date of birth day should be in format "DD".');
    }

    $dobd_int = intval($dobd);
    $in_day_range = ($dobd_int >= 1) && ($dobd_int <= 31);
    if (!$in_day_range) {
      throw new InvalidArgumentException('Invalid dobd passed(' . $dobd . '). Date of birth day should be in format "DD".');
    }

    return $dobd;
  }

  /**
   *  @param string $dobm A date of birth month to be normalized.
   *  @return string
   */
  private static function normalizeDobm($dobm) {
    if (strlen($dobm) == 1) {
      $dobm = '0' . $dobm;
    }

    if (!preg_match('/^[0-9]{2}$/', $dobm)) {
      throw new InvalidArgumentException('Invalid dobm passed(' . $dobm . '). Date of birth month should be in format "MM".');
    }

    $dobm_int = intval($dobm);
    $in_month_range = ($dobm_int >= 1) && ($dobm_int <= 12);
    if (!$in_month_range) {
      throw new InvalidArgumentException('Invalid dobm passed(' . $dobm . '). Date of birth month should be in format "MM".');
    }

    return $dobm;
  }

  /**
   *  @param string $doby A date of birth year to be normalized.
   *  @return string
   */
  private static function normalizeDoby($doby) {
    if (!preg_match('/^[0-9]{4}$/', $doby)) {
      throw new InvalidArgumentException('Invalid doby passed(' . $doby . '). Date of birth year should be in format "YYYY".');
    }

    return $doby;
  }

  /**
   * Normalizes the type of DeliveryCategory and throws error if invalid.
   * @param string $delivery_category type of DeliveryCategory.
   * @return string
   */
  private static function normalizeDeliveryCategory($delivery_category) {

    $delivery_categories = DeliveryCategory::getInstance()->getValues();
      if(!DeliveryCategory::getInstance()->isValidValue($delivery_category))
        throw new InvalidArgumentException('Invalid delivery_category passed: ' . $delivery_category .
                          '.Allowed values are one of ' . implode(",",$delivery_categories));

    return $delivery_category;
  }

  /**
   * @param string $phone_number Phone number to be normalized.
   * @return bool
   */
  private static function isInternationalNumber($phone_number) {
    // Remove spaces and hyphens
    $phone_number = preg_replace('/[\-\s]/', '', $phone_number);

    // Strip + and up to 2 leading 0s
    $phone_number = preg_replace('/^\+?0{0,2}/', '', $phone_number);

    if (substr($phone_number, 0, 1) === '0') {
      return false;
    }

    // International Phone number with country calling code.
    $international_number_regex = '/^\d{1,4}\(?\d{2,3}\)?\d{4,}$/';

    return preg_match($international_number_regex, $phone_number);
  }

  /**
   * Normalizes the action_source and throws an error if invalid.
   * @param string $action_source type of DeliveryCategory.
   * @return string
   */
  private static function normalizeActionSource($action_source) {
    $action_sources = ActionSource::getInstance()->getValues();
      if (!ActionSource::getInstance()->isValidValue($action_source)) {
        throw new InvalidArgumentException(sprintf(
          'Invalid action_source passed: %s. Allowed values are one of %s',
          $action_source,
          implode(",", $action_sources)
        ));
      }

    return $action_source;
  }
}
