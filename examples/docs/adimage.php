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
use FacebookAds\Object\AdImage;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$image_path = $config->testImagePath;
$zip_path = $config->testZippedImagesPath;

// _DOC open [ADIMAGE_CREATE]
// _DOC vars [ad_account_id:s, image_path:s]
// use FacebookAds\Object\AdImage;
// use FacebookAds\Object\Fields\AdImageFields;

$image = new AdImage(null, $ad_account_id);
$image->{AdImageFields::FILENAME} = $image_path;

$image->create();
echo 'Image Hash: '.$image->{AdImageFields::HASH}.PHP_EOL;
// _DOC close [ADIMAGE_CREATE]

$image_id = $image->{AdImageFields::ID};
$image_hash = $image->{AdImageFields::HASH};

// _DOC open [ADIMAGE_DELETE]
// _DOC vars [image_id, ad_account_id:s, image_hash:s]
// use FacebookAds\Object\AdImage;
// use FacebookAds\Object\Fields\AdImageFields;

$image = new AdImage($image_id, $ad_account_id);
$image->{AdImageFields::HASH} = $image_hash;
$image->delete();
// _DOC close [ADIMAGE_DELETE]

// _DOC open [ADIMAGE_CREATE_ZIP]
// _DOC vars [zip_path:s, ad_account_id:s]
// use FacebookAds\Object\AdImage;

$images = AdImage::createFromZip($zip_path, $ad_account_id);

// Output image hashes
foreach ($images as $image) {
  echo $image->{AdImageFields::HASH}.PHP_EOL;
}
// _DOC close [ADIMAGE_CREATE_ZIP]

$image_1_hash = $images[0]->{AdImageFields::HASH};
$image_2_hash = $images[1]->{AdImageFields::HASH};

// _DOC open [ADIMAGE_READ_MULTI_WITH_HASH]
// _DOC vars [ad_account_id:s, image_1_hash:s, image_2_hash:s]
// use FacebookAds\Object\AdAccount;

$account = new AdAccount($ad_account_id);
$images = $account->getAdImages(
  array(), // Fields
  array('hashes' => array(
      $image_1_hash,
      $image_2_hash,
  )) // Params
);
// _DOC close [ADIMAGE_READ_MULTI_WITH_HASH]

foreach ($images as $image) {
    $image->delete();
}
