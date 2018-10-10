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

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\UserPaymentModulesOptionsFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class UserPaymentModulesOptions extends AbstractCrudObject {

  /**
   * @return UserPaymentModulesOptionsFields
   */
  public static function getFieldsEnum() {
    return UserPaymentModulesOptionsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'country_code' => 'string',
      'extra_data' => 'string',
      'order_id' => 'string',
      'payment_type' => 'payment_type_enum',
      'receiver_id' => 'Object',
      'session_id' => 'string',
    );
    $enums = array(
      'payment_type_enum' => array(
        'PAYMENT_SETTINGS',
        'IG_PAYMENT_SETTINGS',
        'UNKNOWN',
        'MP_PAYMENT_SETTINGS',
        'IAP_INSTANT_GAME',
        'IAP_FAN_FUNDING',
        'IAP_GROUP_SUBSCRIPTION',
        'MOR_NONE',
        'MOR_ADS_INVOICE',
        'MOR_DONATIONS',
        'MOR_DONATIONS_MATCHING_CONFIRMATION',
        'MOR_DONATIONS_MATCHING_PLEDGE',
        'MOR_OCULUS_CV1',
        'MOR_OCULUS_LAUNCH_V1',
        'MOR_OCULUS_LAUNCH_V2',
        'MOR_OZONE',
        'MOR_OPEN_GRAPH_PRODUCT',
        'MOR_MESSENGER_COMMERCE',
        'MOR_P2P_TRANSFER',
        'MOR_DUMMY_FIRST_PARTY',
        'MOR_DUMMY_THIRD_PARTY',
        'MOR_GIFTS',
        'MOR_BILL',
        'MOR_AIRMAIL',
        'MOR_EVENT_TICKETING',
        'MOR_PAYMENT_LITE',
        'MOR_MESSENGER_API_FEE',
        'MOR_WORKPLACE_USAGE',
        'MOR_FACEBOOK_SHOP',
        'MOR_FAN_FUNDING',
        'MOR_GAME_TIPPING_TOKEN',
        'MOR_INSTANT_GAMES',
        'MOR_BLUEBIRD',
        'MOR_GROUP_SUBSCRIPTION',
        'NMOR_UNKNOWN',
        'NMOR_NONE',
        'NMOR_PAGES_COMMERCE',
        'NMOR_COMPONENT_FLOW',
        'NMOR_BUSINESS_PLATFORM_COMMERCE',
        'NMOR_SYNCHRONOUS_COMPONENT_FLOW',
        'NMOR_EVENT_TICKETING',
        'NMOR_PLATFORM_SELF_SERVE',
        'NMOR_MESSENGER_PLATFORM',
        'NMOR_MESSENGER_OMNIM',
        'NMOR_BILLING_ENGINE',
        'NMOR_TIP_JAR',
        'NMOR_INSTANT_EXPERIENCES',
        'NMOR_CHECKOUT_EXPERIENCES',
        'NMOR_BUY_ON_FACEBOOK',
        'NMOR_PAYMENT_APP',
        'NMOR_DONATION_P4P',
        'NMOR_WHATSAPP_P2P',
        'NMOR_P2P',
        'NMOR_MOBILE_TOP_UP',
        'NMOR_MFS',
        'NMOR_SHIPPING_LABEL',
        'NMOR_MARKETPLACE_DROPOFF',
        'NMOR_PAGES_SOLUTION',
        'NMOR_BLACKBAUD_RWR_DONATION',
        'NMOR_MARKETPLACE_SHIPPING',
        'NMOR_DUMMY',
        'NMOR_PPGF_DONATION',
        'NMOR_ADVERTISER_SUBSCRIPTION',
        'NMOR_WHATSAPP_P2M',
        'NMOR_MOVIE_TICKETING',
        'IG_NMOR_P2B',
        'NMOR_INSTAGRAM_P2B',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new UserPaymentModulesOptions(),
      'NODE',
      UserPaymentModulesOptions::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
