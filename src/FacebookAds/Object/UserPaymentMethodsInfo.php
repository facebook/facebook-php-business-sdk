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
use FacebookAds\Object\Fields\UserPaymentMethodsInfoFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class UserPaymentMethodsInfo extends AbstractCrudObject {

  /**
   * @return UserPaymentMethodsInfoFields
   */
  public static function getFieldsEnum() {
    return UserPaymentMethodsInfoFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'account_id' => 'unsigned int',
      'country_code' => 'string',
      'extra_data' => 'string',
      'nmor_order_type' => 'nmor_order_type_enum',
      'payment_type' => 'payment_type_enum',
    );
    $enums = array(
      'nmor_order_type_enum' => array(
        'unknown',
        'none',
        'pages_commerce',
        'nmor_pages_commerce',
        'component_flow',
        'business_platform_commerce',
        'synchronous_component_flow',
        'event_ticketing',
        'platform_self_serve',
        'messenger_platform',
        'messenger_omnim',
        'billing_engine',
        'tip_jar',
        'instant_experiences',
        'checkout_experiences',
        'buy_on_facebook',
        'payment_app',
        'donation_p4p',
        'whatsapp_p2p',
        'p2p',
        'mobile_top_up',
        'shipping_label',
        'marketplace_dropoff',
        'pages_solution',
        'blackbaud_rwr_donation',
        'instagram_p2b',
        'marketplace_shipping',
        'facebook_incentive_seller',
        'facebook_incentive_buyer',
        'dummy',
        'ppgf_donation',
        'advertiser_subscription',
        'whatsapp_p2m',
        'movie_ticketing',
      ),
      'payment_type_enum' => array(
        'none',
        'ads_invoice',
        'donations',
        'donations_matching_confirmation',
        'donations_matching_pledge',
        'facebook_shop',
        'fan_funding',
        'group_subscription',
        'game_tipping_token',
        'instant_games',
        'oculus_cv1',
        'oculus_launch_v1',
        'oculus_launch_v2',
        'ozone',
        'open_graph_product',
        'messenger_commerce',
        'p2p_transfer',
        'dummy_first_party',
        'dummy_third_party',
        'gifts',
        'bill',
        'airmail',
        'event_ticketing',
        'payment_lite',
        'messenger_api_fee',
        'workplace',
        'nmor_pages_commerce',
        'stored_balance',
        'third_party_bundle',
      ),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new UserPaymentMethodsInfo(),
      'NODE',
      UserPaymentMethodsInfo::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
