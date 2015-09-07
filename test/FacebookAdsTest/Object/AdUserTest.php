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

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdUser;
use FacebookAds\Object\Fields\AdUserFields;

class AdUserTest extends AbstractCrudObjectTestCase {

  public function testCrudAccess() {
    $ad_account = new AdAccount($this->getConfig()->accountId);
    $ad_users = $ad_account->getAdUsers();

    $this->assertGreaterThan(0, $ad_users->count());

    $uid = (new AdUser('me'))->read()->{AdUserFields::ID};
    $found = false;
    foreach ($ad_users as $ad_user) {
      if ($ad_user->id === $uid) {
        $this->assertCanFetchConnection($ad_user, 'getAdAccounts');
        $this->assertCanFetchConnection($ad_user, 'getAdAccountGroups');
        $found = true;
        break;
      }
    }

    $this->assertTrue($found);
  }
}
