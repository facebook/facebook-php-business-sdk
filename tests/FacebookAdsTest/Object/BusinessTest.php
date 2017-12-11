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

use FacebookAds\Object\AdUser;
use FacebookAds\Object\Business;
use FacebookAds\Object\Fields\AdUserFields;
use FacebookAds\Object\Fields\BusinessFields;
use FacebookAds\Object\Values\AdAccountRoles;
use FacebookAdsTest\Config\SkippableFeatureTestInterface;
use FacebookAds\Object\Values\BusinessRoles;

class BusinessTest extends AbstractCrudObjectTestCase
  implements SkippableFeatureTestInterface {

  /**
   * @return array
   */
  public function skipIfAny() {
    return array('no_business_manager');
  }

  public function testCrud() {
    $business = new Business($this->getConfig()->businessId);
    $this->assertCanRead($business);
    $this->assertCannotDelete($business);


    $name = $business->read(array(BusinessFields::NAME))
      ->{BusinessFields::NAME};

    $this->assertCanUpdate($business, array(
      BusinessFields::NAME => "My Awesome Business"
    ));

    $business->{BusinessFields::NAME} = $name;
    $business->save();


    if ($this->getConfig()->secondaryPageId) {
      $business->claimPage(
        $this->getConfig()->secondaryPageId,
        BusinessRoles::OWNER);
      $business->deletePage($this->getConfig()->secondaryPageId);
    }

    $business->inviteUserByEmail('test@example.com', BusinessRoles::EMPLOYEE);
    $business->deleteUserByEmail('test@example.com');

    $user = (new AdUser('me'))->read(array('id'));
    $business->addUserPermissionById(
      $user->{AdUserFields::ID},
      BusinessRoles::ADMIN);

    if ($this->getConfig()->secondaryAccountId) {
      $business->claimAdAccount(
        $this->getConfig()->secondaryAccountId,
        BusinessRoles::AGENCY,
        array(AdAccountRoles::ADMIN));
      $business->deleteAdAccount(
        $this->getConfig()->secondaryAccountId);
    }

    if ($this->getConfig()->secondaryAppId) {
      $business->claimApp(
        $this->getConfig()->secondaryAppId,
        BusinessRoles::OWNER);
      $business->deleteApp($this->getConfig()->secondaryAppId);
    }
  }

  public function testConnections() {
    $business = new Business($this->getConfig()->businessId);
    $this->assertCanFetchConnection($business, 'getAdAccounts');
    $this->assertCanFetchConnection($business, 'getUserPermissions');
    $this->assertCanFetchConnection($business, 'getProjects');
    $this->assertCanFetchConnection($business, 'getPages');
    $this->assertCanFetchConnection($business, 'getApps');
    $this->assertCanFetchConnection($business, 'getClients');
    $this->assertCanFetchConnection($business, 'getAgencies');
    $this->assertCanFetchConnection($business, 'getCreditCards');
    $this->assertCanFetchConnection($business, 'getExtendedCredits');
    $this->assertCanFetchConnection($business, 'getProductCatalogues');
    $this->assertCanFetchConnection($business, 'getSystemUsers');
    $this->assertCanFetchConnection($business, 'getAdsPixels');
  }
}
