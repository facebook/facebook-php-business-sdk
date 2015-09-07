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

use FacebookAds\Object\AdAccount;
use FacebookAds\Object\AdsPixel;
use FacebookAds\Object\Fields\AdsPixelsFields;
use FacebookAds\Object\Fields\AdAccountFields;
use FacebookAds\Object\Fields\BusinessFields;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$business_id = $config->businessId;

$account = new AdAccount($ad_account_id);
$pixels = $account->getAdsPixels();

if (!$pixels->count()) {

// _DOC open [ADSPIXEL_CREATE]
// _DOC vars [ad_account_id:s]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\AdsPixelsFields;

$pixel = new AdsPixel(null, $ad_account_id);
$pixel->{AdsPixelsFields::NAME} = 'My WCA Pixel';
$pixel->create();
// _DOC close [ADSPIXEL_CREATE]

} else {
  $pixel = $pixels->current();
}

$pixel_id = $pixel->{AdsPixelsFields::ID};

// _DOC open [ADSPIXEL_READ_PIXEL_CODE]
// _DOC vars [ad_account_id:s, pixel_id]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\AdsPixelsFields;

$pixel = new AdsPixel($pixel_id, $ad_account_id);
$pixel->read(array(AdsPixelsFields::CODE));

echo $pixel->{AdsPixelsFields::CODE}.PHP_EOL;
// _DOC close [ADSPIXEL_READ_PIXEL_CODE]

$destination_account_id = $config->secondaryAccountId;
// _DOC open [ADSPIXEL_SHARE_ADACCOUNT]
// _DOC vars [business_id:s, destination_account_id:s, pixel_id, account_id:s]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\AdsPixelsFields;

$pixel = new AdsPixel($pixel_id, $ad_account_id);
$pixel->read();

//  destination ad account id without 'act_'
$destination_account_id = substr($destination_account_id, 4);
$pixel->sharePixelWithAdAccount($business_id, $destination_account_id);
// _DOC close [ADSPIXEL_SHARE_ADACCOUNT]

// _DOC open [ADSPIXEL_GET_ADACCOUNTS]
// _DOC vars [business_id:s, pixel_id, account_id:s]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\AdsPixelsFields;

$pixel = new AdsPixel($pixel_id, $ad_account_id);

$shared_accounts = $pixel->getAdAccounts(
  array(),
  array(
    'business' => $business_id,
  ));
foreach ($shared_accounts as $shared_account) {
  echo $shared_account->{AdAccountFields::ID}.PHP_EOL;
}
// _DOC close [ADSPIXEL_GET_ADACCOUNTS]

$destination_business_id = $config->secondaryBusinessId;
// _DOC open [ADSPIXEL_SHARE_BUSINESS]
// _DOC vars [business_id:s, destination_business_id:s, pixel_id, account_id:s]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\AdsPixelsFields;

$pixel = new AdsPixel($pixel_id, $ad_account_id);
$pixel->read();

$pixel->sharePixelWithAgency($business_id, $destination_business_id);
// _DOC close [ADSPIXEL_SHARE_BUSINESS]

// _DOC open [ADSPIXEL_GET_BUSINNES]
// _DOC vars [pixel_id, account_id:s]
// use FacebookAds\Object\AdsPixel;
// use FacebookAds\Object\Fields\BusinessFields;

$pixel = new AdsPixel($pixel_id, $ad_account_id);

$shared_business = $pixel->getAgencies();
foreach ($shared_business as $business) {
  echo $business->{BusinessFields::ID}.PHP_EOL;
}
// _DOC close [ADSPIXEL_GET_BUSINNES]

$pixel->unsharePixelWithAdAccount($business_id, $destination_account_id);
$pixel->unsharePixelWithAgency($business_id, $destination_business_id);
