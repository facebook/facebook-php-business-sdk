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

/**
 * Normalizer Class
 *
 * @category    Class
 * @package     FacebookAds\Object\ServerSide
 */
class Util
{

  /**
   * @param string $field to be normalized.
   * @param string $data value to be normalized
   * @return string
   */
  public static function normalize($field, $data)
  {
    if ($data == null || strlen($data) == 0) {
      return null;
    }

    // Check if already hashed. If yes, don't try to normalize an already hashed data.
    if(Util::isHashed($data)){
      return $data;
    }

    $data = trim(strtolower($data));
    $normalized_data = $data;

    switch ($field) {
      case 'em':
        $normalized_data = Util::normalizeEmail($data);
        break;

      case 'ph':
        $normalized_data = Util::normalizePhone($data);
        break;

      case 'zp':
        $normalized_data = Util::normalizeZipCode($data);
        break;

      case 'ct':
        $normalized_data = Util::normalizeCity($data);
        break;

      case 'st':
        $normalized_data = Util::normalizeState($data);
        break;

      case 'country':
        $normalized_data = Util::normalizeCountry($data);
        break;

      case 'currency':
        $normalized_data = Util::normalizeCurrency($data);
        break;
      default:
    }

    return $normalized_data;
  }

  /**
   * @param string $data hash input data using SHA256 algorithm.
   * @return string
   */
  public static function hash($data)
  {
    if ($data == null || Util::isHashed($data)) {
      return $data;
    }
    return hash('sha256', $data, false);
  }


  /**
   * @param string $pii PII data to check if its hashed.
   * @return bool
   */
  private static function isHashed($pii)
  {
    // it could be sha256 or md5
    return preg_match('/^[A-Fa-f0-9]{64}$/', $pii) ||
      preg_match('/^[a-f0-9]{32}$/', $pii);
  }

  /**
   * @param string $email Email address to be normalized.
   * @return string
   */
  private static function normalizeEmail($email)
  {
    // Validates email against RFC 822
    $result = filter_var($email, FILTER_SANITIZE_EMAIL);

    if (!filter_var($result, FILTER_VALIDATE_EMAIL))
    {
      throw new \InvalidArgumentException('Invalid email format for the passed email: ' . $email . 'Please check the passed email format.');
    }

    return $result;
  }

  /**
   * @param string $city city name to be normalized.
   * @return string
   */
  private static function normalizeCity($city)
  {
    return trim(preg_replace('/[0-9.\s\-()]/', '', $city));
  }

   /**
   * @param string $state state name to be normalized.
   * @return string
   */
  private static function normalizeState($state)
  {
    return preg_replace('/[^a-z]/', '', $state);
  }

  /**
   * @param string $country country code to be normalized(ISO 3166-2).
   * @return string
   */
  private static function normalizeCountry($country)
  {
    $result = preg_replace('/[^a-z]/i', '', $country);

    if (strlen($result) != 2) {
      throw new \InvalidArgumentException('Invalid country format passed(' . $country . '). Country Code should be a two-letter ISO Country Code');
    }

    return $result;
  }

  /**
   * @param string $zip postal code to be normalized.
   * @return string
   */
  private static function normalizeZipCode($zip)
  {
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
  private static function normalizePhone($phone)
  {
    $result = trim(preg_replace('/[a-z()-]/', '', $phone));

    if(Util::isInternationalNumber($result))
    {
      $result = preg_replace('/[\-\s+]/', '', $result);
    }

    return $result;
  }

  /**
   * @param string $currency currency code to be normalized(ISO 4217).
   * @return string
   */
  private static function normalizeCurrency($currency)
  {
    $result = preg_replace('/[^a-z]/i', '', $currency);

    if (strlen($result) != 3) {
      throw new \InvalidArgumentException('Invalid currency format passed(' . $currency . '). Currency Code should be a three-letter ISO Currency Code');
    }

    return $result;
  }

  /**
   * @param string $phone_number Phone number to be normalized.
   * @return bool
   */
  private static function isInternationalNumber($phone_number)
  {
    // Remove spaces and hyphens
    $phone_number = preg_replace('/[\-\s]/', '', $phone_number);

    // Strip + and up to 2 leading 0s
    $phone_number = preg_replace('/^\+?0{0,2}/', '', $phone_number);

    if(substr($phone_number, 0, 1) === '0')
    {
      return false;
    }

    // Internation Phone number with country calling code.
    $internation_number_regex = '/^\d{1,4}\(?\d{2,3}\)?\d{4,}$/';

    return preg_match($internation_number_regex, $phone_number);
  }
}
