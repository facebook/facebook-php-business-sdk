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

namespace FacebookAdsDocs;

use FacebookAds\Object\AdAccountGroup;
use FacebookAds\Object\AdAccountGroupUser;
use FacebookAds\Object\Fields\AdAccountGroupFields;
use FacebookAds\Object\Fields\AdUserFields;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

// _DOC open [ADACCOUNTGROUP_CREATE]
// use FacebookAds\Object\AdAccountGroup;
// use FacebookAds\Object\Fields\AdAccountGroupFields;

$adaccountgroup = new AdAccountGroup();
$adaccountgroup->setData(array(
  AdAccountGroupFields::NAME => 'My AdAccountGroup',
  AdAccountGroupFields::STATUS => 1,
));
$adaccountgroup->create();
// _DOC close [ADACCOUNTGROUP_CREATE]


$adaccountgroup_id = $adaccountgroup->{AdAccountGroupFields::ID};


// _DOC open [ADACCOUNTGROUP_READ]
// _DOC vars [adaccountgroup_id]
// use FacebookAds\Object\AdAccountGroup;
// use FacebookAds\Object\Fields\AdAccountGroupFields;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->read(array(
  AdAccountGroupFields::NAME,
));

echo $adaccountgroup->{AdAccountGroupFields::NAME}.PHP_EOL;
// _DOC close [ADACCOUNTGROUP_READ]


// _DOC open [ADACCOUNTGROUP_UPDATE]
// _DOC vars [adaccountgroup_id]
// use FacebookAds\Object\AdAccountGroup;
// use FacebookAds\Object\Fields\AdAccountGroupFields;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->{AdAccountGroupFields::NAME} = 'New AdAccountGroup Name';
$adaccountgroup->update();

echo $adaccountgroup->{AdAccountGroupFields::NAME}.PHP_EOL;
// _DOC close [ADACCOUNTGROUP_UPDATE]


// _DOC open [ADACCOUNTGROUP_GET_USERS]
// _DOC vars [adaccountgroup_id]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$users = $adaccountgroup->getUsers();

echo count($users).' users'.PHP_EOL;
// _DOC close [ADACCOUNTGROUP_GET_USERS]

/**
 * To be added to the AdAccountGroup users must have approved
 * ads_management permission request
 * Using the same user_id (me) as workaround
 */
$user_id_1 = $user_id_2 = $users[0]->getAdUser()->{AdUserFields::ID};

// _DOC open [ADACCOUNTGROUP_ADD_USERS]
// _DOC vars [adaccountgroup_id, user_id_1, user_id_2]
// use FacebookAds\Object\AdAccountGroup;
// use FacebookAds\Object\AdAccountGroupUser;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->addUsers(
  array(
    $user_id_1 => AdAccountGroupUser::ROLE_GENERAL_USER,
    $user_id_2 => AdAccountGroupUser::ROLE_ADMINISTRATOR,
  ));
// _DOC close [ADACCOUNTGROUP_ADD_USERS]


$user_id = $user_id_1;

// _DOC open [ADACCOUNTGROUP_UPDATE_USERS]
// _DOC vars [adaccountgroup_id, user_id]
// use FacebookAds\Object\AdAccountGroup;
// use FacebookAds\Object\AdAccountGroupUser;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->updateUsers(
  array(
    $user_id => AdAccountGroupUser::ROLE_ADMINISTRATOR,
  ));
// _DOC close [ADACCOUNTGROUP_UPDATE_USERS]

/**
 * We can't remove a real user otherwise we can't edit/delete
 * the AdAcoountGroup later
 *
 */
$user_id = 123456;

// _DOC open [ADACCOUNTGROUP_REMOVE_USER]
// _DOC vars [adaccountgroup_id, user_id]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->removeUser($user_id);
// _DOC close [ADACCOUNTGROUP_REMOVE_USER]


// _DOC open [ADACCOUNTGROUP_GET_ADACCOUNTS]
// _DOC vars [adaccountgroup_id]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$accounts = $adaccountgroup->getAdAccounts();

echo count($accounts).' accounts'.PHP_EOL;
// _DOC close [ADACCOUNTGROUP_GET_ADACCOUNTS]

/**
 * To be added to the AdAccountGroup user must have approved
 * admin access to the ad accounts
 * Using the same account_id as workaround
 */
$account_id_1 = $account_id_2 = $config->accountId;

// _DOC open [ADACCOUNTGROUP_ADD_ADACCOUNTS]
// _DOC vars [adaccountgroup_id, account_id_1, account_id_2]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->addAdAccounts(array($account_id_1, $account_id_2));
// _DOC close [ADACCOUNTGROUP_ADD_ADACCOUNTS]


$account_id_without_act = $config->accountId;

// _DOC open [ADACCOUNTGROUP_REMOVE_ADACCOUNT]
// _DOC vars [adaccountgroup_id, account_id_without_act]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->removeAdaccount($account_id_without_act);
// _DOC close [ADACCOUNTGROUP_REMOVE_ADACCOUNT]


// _DOC open [ADACCOUNTGROUP_DELETE]
// _DOC vars [adaccountgroup_id]
// use FacebookAds\Object\AdAccountGroup;

$adaccountgroup = new AdAccountGroup($adaccountgroup_id);
$adaccountgroup->delete();
// _DOC close [ADACCOUNTGROUP_DELETE]
