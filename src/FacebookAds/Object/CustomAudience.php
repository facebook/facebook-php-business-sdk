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

use FacebookAds\Api;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceTypes;

class CustomAudience extends AbstractCrudObject {

  /**
   * @var string
   */
  const HASH_TYPE_MD5 = 'md5';

  /**
   * @var string
   */
  const HASH_TYPE_SHA256 = 'sha256';

  /**
   * @var string
   */
  const LAL_TYPE_SIMILARITY = 'similarity';

  /**
   * @var string
   */
  const LAL_TYPE_REACH = 'reach';

  /**
   * @var string[]
   **/
  protected static $fields = array(
    CustomAudienceFields::ID,
    CustomAudienceFields::ACCOUNT_ID,
    CustomAudienceFields::APPROXIMATE_COUNT,
    CustomAudienceFields::LOOKALIKE_AUDIENCE_IDS,
    CustomAudienceFields::NAME,
    CustomAudienceFields::PARENT_AUDIENCE_ID,
    CustomAudienceFields::PARENT_CATEGORY,
    CustomAudienceFields::RULE,
    CustomAudienceFields::RETENTION_DAYS,
    CustomAudienceFields::STATUS,
    CustomAudienceFields::SUBTYPE,
    CustomAudienceFields::TYPE,
    CustomAudienceFields::TYPE_NAME,
    CustomAudienceFields::TIME_UPDATED,
    CustomAudienceFields::DESCRIPTION,
    CustomAudienceFields::OPT_OUT_LINK,
    CustomAudienceFields::ORIGIN_AUDIENCE_ID,
    CustomAudienceFields::LOOKALIKE_SPEC,
  );

  /**
   * @return string
   */
  protected function getEndpoint() {
    return 'customaudiences';
  }

  /**
   * Add users to the AdCustomAudiences. There is no max on the total number of
   * users that can be added to an audience, but up to 10000 users can be added
   * at a given time.
   * Hash type should only be used on email and phone
   *
   * @param array $users
   * @param string $type
   * @param string $hash_type  the algorithm to use when hasing
   * @return boolean Returns true on success
   */
  public function addUsers(array $users, $type, $hash_type = null) {
    $params = $this->formatParams($users, $type, $hash_type);
    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      Api::HTTP_METHOD_POST,
      $params)->getResponse();
  }

  /**
   * Delete users from AdCustomAudiences
   * Hash type should only be used on email and phone
   *
   * @param array $users
   * @param string $type
   * @param string $hash_type  the algorithm to use when hasing
   * @return boolean Returns true on success
   */
  public function removeUsers(array $users, $type, $hash_type = null) {
    $params = $this->formatParams($users, $type, $hash_type);
    return $this->getApi()->call(
      '/'.$this->assureId().'/users',
      Api::HTTP_METHOD_DELETE,
      $params)->getResponse();
  }

  /**
   * Remove list of users decided to opt-out from all custom audiences
   * Hash type should only be used on email and phone
   *
   * @param array $users
   * @param string $type
   * @param string $hash_type  the algorithm to use when hasing
   * @return boolean Returns true on success
   */
  public function optOutUsers(array $users, $type, $hash_type = null) {
    $params = $this->formatParams($users, $type, $hash_type);
    return $this->getApi()->call(
      '/'.$this->assureParentId().'/usersofanyaudience',
      Api::HTTP_METHOD_DELETE,
      $params)->getResponse();
  }

  /**
   * Take users and format them correctly for the request
   *
   * @param array $users
   * @param string $type
   * @param string $hash_type  the algorithm to use when hasing
   */
  protected function formatParams(array $users, $type, $hash_type = null) {
    $request = array();
    if ($type == CustomAudienceTypes::EMAIL
        || $type == CustomAudienceTypes::PHONE || $hash_type !== null) {
      $hash_type = is_null($hash_type) ?: self::HASH_TYPE_SHA256;
      $request['hash_type'] = $hash_type;
    }

    foreach ($users as $u) {
      if (!is_null($hash_type)) {
        $u = hash(self::HASH_TYPE_SHA256, $u);
      }
      $request['users'][] = array($type => $u);
    }
    return $request;
  }

  /**
   * Share this AdCustomAudiences to other accounts
   *
   * @param array $act_ids Array of account IDs
   * @return boolean Returns true on success
   */
  public function addSharedAccounts($act_ids) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts',
      Api::HTTP_METHOD_POST,
      array('adaccounts' => $act_ids))->getResponse();
  }

  /**
   * Remove accounts from the shared AdCustomAudiences
   *
   * @param  array $act_ids       Array of Account IDs to remove
   * @return boolean              Returns true on success
   */
  public function removeSharedAccounts($act_ids) {
    return $this->getApi()->call(
      '/'.$this->assureId().'/adaccounts',
      Api::HTTP_METHOD_DELETE,
      array('adaccounts' => $act_ids))->getResponse();
  }

}
