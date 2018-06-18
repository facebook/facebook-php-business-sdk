<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

namespace FacebookAdsTest\Object;

use FacebookAds\Object\CustomAudience;
use FacebookAds\Object\Fields\CustomAudienceFields;
use FacebookAds\Object\Values\CustomAudienceSubtypes;
use FacebookAds\Object\Values\CustomAudienceTypes;

class CustomAudienceTest extends AbstractCrudObjectTestCase {

  protected function assertClusterChangesResponse(
    CustomAudience $ca, array $users, $response) {

    $this->assertTrue(is_array($response));

    $this->assertArrayHasKey('audience_id', $response);
    $this->assertEquals(
      $response['audience_id'], $ca->{CustomAudienceFields::ID});
    $this->assertArrayHasKey('num_received', $response);
    $this->assertEquals($response['num_received'], count($users));
    $this->assertArrayHasKey('num_invalid_entries', $response);
    $this->assertEquals($response['num_invalid_entries'], 0);
  }

  public function testCustomAudiences() {
    $ca = new CustomAudience(null, $this->getConfig()->accountId);
    $ca->{CustomAudienceFields::NAME} = $this->getConfig()->testRunId;
    $ca->{CustomAudienceFields::SUBTYPE} = CustomAudienceSubtypes::CUSTOM;

    $this->assertCanCreate($ca);

    $this->assertCanRead($ca);
    $this->assertCanUpdate(
      $ca,
      array(
        CustomAudienceFields::NAME => $this->getConfig()->testRunId.' updated',
      ));

    $users = array('someone@example.com');

    $add = $ca->addUsers($users, CustomAudienceTypes::EMAIL);
    $this->assertClusterChangesResponse($ca, $users, $add);

    $remove = $ca->removeUsers($users, CustomAudienceTypes::EMAIL);
    $this->assertClusterChangesResponse($ca, $users, $remove);

    $optout = $ca->optOutUsers($users, CustomAudienceTypes::EMAIL);
    $this->assertSuccessResponse($optout);

    $this->assertCanDelete($ca);
  }

  /**
   * @depends testCustomAudiences
   */
  public function testAppIdsPayload() {
    $ca = new CustomAudience(null, $this->getConfig()->accountId);
    $ca->{CustomAudienceFields::NAME} = $this->getConfig()->testRunId;
    $ca->{CustomAudienceFields::SUBTYPE} = CustomAudienceSubtypes::CUSTOM;
    $ca->create();

    $users = array($this->getApi()->call('/me')->getContent()['id']);

    $add = $ca->addUsers(
      $users, CustomAudienceTypes::ID, array($this->getConfig()->appId));
    $this->assertClusterChangesResponse($ca, $users, $add);

    $remove = $ca->removeUsers(
      $users, CustomAudienceTypes::ID, array($this->getConfig()->appId));
    $this->assertClusterChangesResponse($ca, $users, $remove);

    $optout = $ca->optOutUsers(
      $users, CustomAudienceTypes::ID, array($this->getConfig()->appId));
    $this->assertSuccessResponse($optout);

    $ca->deleteSelf();
  }
}
