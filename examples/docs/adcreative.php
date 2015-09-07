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

use FacebookAds\Api;
use FacebookAds\Http\RequestInterface;
use FacebookAds\Object\AdCampaign;
use FacebookAds\Object\AdSet;
use FacebookAds\Object\AdCreative;
use FacebookAds\Object\AdImage;
use FacebookAds\Object\AdPreview;
use FacebookAds\Object\AdVideo;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\ProductFeed;
use FacebookAds\Object\ProductFeedUpload;
use FacebookAds\Object\ProductSet;
use FacebookAds\Object\Fields\TargetingSpecsFields;
use FacebookAds\Object\ObjectStory\AttachmentData;
use FacebookAds\Object\ObjectStory\LinkData;
use FacebookAds\Object\ObjectStorySpec;
use FacebookAds\Object\ObjectStory\TemplateData;
use FacebookAds\Object\ObjectStory\VideoData;
use FacebookAds\Object\Fields\AdSetFields;
use FacebookAds\Object\Fields\AdCampaignFields;
use FacebookAds\Object\Fields\AdImageFields;
use FacebookAds\Object\Fields\AdCreativeFields;
use FacebookAds\Object\Fields\AdPreviewFields;
use FacebookAds\Object\Fields\AdVideoFields;
use FacebookAds\Object\Fields\ObjectStory\AttachmentDataFields;
use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
use FacebookAds\Object\Fields\ObjectStorySpecFields;
use FacebookAds\Object\Fields\ObjectStory\VideoDataFields;
use FacebookAds\Object\Values\CallToActionTypes;
use FacebookAds\Object\Fields\ProductCatalogFields;
use FacebookAds\Object\Fields\ProductFeedFields;
use FacebookAds\Object\Fields\ProductFeedUploadFields;
use FacebookAds\Object\Fields\ProductFields;
use FacebookAds\Object\Fields\ProductSetFields;
use FacebookAds\Object\Values\AdFormats;
use FacebookAds\Object\TargetingSpecs;
use FacebookAds\Object\Values\AdObjectives;
use FacebookAds\Object\Values\BillingEvents;
use FacebookAds\Object\Values\OptimizationGoals;
use FacebookAds\Session;
use FacebookAdsTest\Config\Config;

/** @var Config $config */

$ad_account_id = $config->accountId;
$page_id = $config->pageId;
$app_url = $config->appUrl;
$business_id = $config->businessId;

$api = Api::instance();

$response = $api->call('/me/accounts');
$data = $response->getContent();

$page_token = '';
foreach ($data['data'] as $page) {
  if ($page['id'] == $page_id) {
    $page_token = $page['access_token'];
    break;
  }
}
if ($page_token === '') {
  throw new \InvalidArgumentException(
    'Page access token for the page id ' . $page_id . ' cannot be found.'
  );
}

$page_session = new Session($config->appId, $config->appSecret, $page_token);
$page_api = new Api($api->getHttpClient(), $page_session);
$page_api->setLogger($api->getLogger());

$data = $page_api->call(
  '/'.$page_id.'/promotable_posts',
  RequestInterface::METHOD_GET)->getContent();
if (is_null($data)
  || !is_array($data['data'])
  || count($data['data']) === 0) {
  throw new \RuntimeException(
    "no promotable posts available for page ".$page_id);
}
$post_id = $data['data'][0]['id'];

// create Ad Image
$zip_path = $config->testZippedImagesPath;
$images = AdImage::createFromZip($zip_path, $ad_account_id);
$image_1_hash = $images[0]->{AdImageFields::HASH};
$image_2_hash = $images[1]->{AdImageFields::HASH};
$image_3_hash = $images[1]->{AdImageFields::HASH};

// create Ad Video
$retry_delay = 3;
$max_retry = 4;
$video_name = $config->testRunId;
$video_path = $config->testVideoPath;
$video = new AdVideo(null, $ad_account_id);
$video->setData(array(
  AdVideoFields::NAME => $video_name,
  AdVideoFields::SOURCE => $video_path,
));
$video->create();
$video_id = $video->{AdVideoFields::ID};
$video_thumbnails = null;
while (--$max_retry >= 0) {
  sleep($retry_delay);
  $video_thumbnails = $video->getApi()->call(
    '/'.$video_id.'/thumbnails',
    RequestInterface::METHOD_GET)->getContent();
  if ($video_thumbnails && count($video_thumbnails['data']) > 0) {
    break;
  }
}
if (is_null($video_thumbnails)
  || !is_array($video_thumbnails['data'])
  || count($video_thumbnails['data']) === 0) {
  throw new \RuntimeException(
    "no thumbnails available for video ".$video_id.", please try again");
}
$video_image_url = $video_thumbnails['data'][0]['uri'];

$image_hash = $image_1_hash;
// _DOC open [ADCREATIVE_CREATE_LINK_AD]
// _DOC vars [app_url:s, page_id, ad_account_id:s, image_hash:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStory\LinkData;
// use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$link_data = new LinkData();
$link_data->setData(array(
  LinkDataFields::MESSAGE => 'try it out',
  LinkDataFields::LINK => $app_url,
  LinkDataFields::CAPTION => 'My caption',
  LinkDataFields::IMAGE_HASH => $image_hash,
));

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::LINK_DATA => $link_data,
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_LINK_AD]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_LINK_AD_CALL_TO_ACTION]
// _DOC vars [app_url:s, page_id, ad_account_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStory\LinkData;
// use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$link_data = new LinkData();
$link_data->setData(array(
  LinkDataFields::MESSAGE => 'try it out',
  LinkDataFields::LINK => $app_url,
  LinkDataFields::CAPTION => 'My caption',
  LinkDataFields::CALL_TO_ACTION => array(
    'type' => 'SIGN_UP',
    'value' => array(
      'link' => $app_url,
      'link_caption' => 'Sign up!',
    ),
  ),
));

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::LINK_DATA => $link_data,
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_LINK_AD_CALL_TO_ACTION]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_VIDEO_PAGE_LIKE_AD]
// _DOC vars [video_image_url:s, video_id, page_id, ad_account_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStory\VideoData;
// use FacebookAds\Object\Fields\ObjectStory\VideoDataFields;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$video_data = new VideoData();
$video_data->setData(array(
  VideoDataFields::DESCRIPTION => 'try it out',
  VideoDataFields::IMAGE_URL => $video_image_url,
  VideoDataFields::VIDEO_ID => $video_id,
  VideoDataFields::CALL_TO_ACTION => array(
    'type' => 'LIKE_PAGE',
    'value' => array(
      'page' => $page_id,
    ),
  ),
));

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::VIDEO_DATA => $video_data,
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_VIDEO_PAGE_LIKE_AD]
$creative->delete();


// _DOC open [ADCREATIVE_CREATE_PAGE_POST]
// _DOC vars [ad_account_id:s, post_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Promoted Post',
  AdCreativeFields::OBJECT_STORY_ID => $post_id,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_PAGE_POST]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_URL_TAG]
// _DOC vars [ad_account_id:s, post_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::OBJECT_STORY_ID => $post_id,
  AdCreativeFields::URL_TAGS => 'key1=val1&key2=val2',
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_URL_TAG]
$creative->delete();


// _DOC open [ADCREATIVE_CREATE_MULTI_PRODUCT_AD]
// _DOC vars [image_1_hash:s, image_2_hash:s, image_3_hash:s, app_url:s, page_id, ad_account_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStory\LinkData;
// use FacebookAds\Object\Fields\ObjectStory\LinkDataFields;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\ObjectStory\AttachmentData;
// use FacebookAds\Object\Fields\ObjectStory\AttachmentDataFields;

$product1 = new AttachmentData();
$product1->setData(array(
  AttachmentDataFields::LINK => 'https://www.link.com/product1',
  AttachmentDataFields::NAME => 'Product 1',
  AttachmentDataFields::DESCRIPTION => '$8.99',
  AttachmentDataFields::IMAGE_HASH => $image_1_hash,
));

$product2 = new AttachmentData();
$product2->setData(array(
  AttachmentDataFields::LINK => 'https://www.link.com/product2',
  AttachmentDataFields::NAME => 'Product 2',
  AttachmentDataFields::DESCRIPTION => '$9.99',
  AttachmentDataFields::IMAGE_HASH => $image_2_hash,
));

$product3 = new AttachmentData();
$product3->setData(array(
  AttachmentDataFields::LINK => 'https://www.link.com/product3',
  AttachmentDataFields::NAME => 'Product 3',
  AttachmentDataFields::DESCRIPTION => '$10.99',
  AttachmentDataFields::IMAGE_HASH => $image_3_hash,
));

$link_data = new LinkData();
$link_data->setData(array(
  LinkDataFields::LINK => $app_url,
  LinkDataFields::CAPTION => 'My caption',
  LinkDataFields::CHILD_ATTACHMENTS => array($product1, $product2, $product3),
));


$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::LINK_DATA => $link_data,
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Sample Creative',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_MULTI_PRODUCT_AD]

$creative_id = $creative->{AdCreativeFields::ID};

// _DOC open [ADCREATIVE_READ]
// _DOC vars [creative_id]
// use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative($creative_id);
$creative->read(array(
  AdCreativeFields::NAME,
  AdCreativeFields::OBJECT_STORY_ID
));
// _DOC close [ADCREATIVE_READ]

// _DOC open [ADCREATIVE_READ_THUMBNAIL_WITH_DIMENSIONS]
// _DOC vars [creative_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative($creative_id);
$fields = array(
  AdCreativeFields::THUMBNAIL_URL
);
$params = array(
  'thumbnail_width' => 150,
  'thumbnail_height' => 120,
);
$creative->read($fields, $params);

echo $creative->{AdCreativeFields::THUMBNAIL_URL}.PHP_EOL;
// _DOC close [ADCREATIVE_READ_THUMBNAIL_WITH_DIMENSIONS]

// _DOC open [ADCREATIVE_UPDATE]
// _DOC vars [creative_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\Fields\AdCreativeFields;

$creative = new AdCreative($creative_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'New creative name',
));

$creative->update();
// _DOC close [ADCREATIVE_UPDATE]

// _DOC open [ADCREATIVE_DELETE]
// _DOC vars [creative_id]
// use FacebookAds\Object\AdCreative;

$creative = new AdCreative($creative_id);
$creative->delete();
// _DOC close [ADCREATIVE_DELETE]

// _DOC open [ADCREATIVE_CREATE_GET_DIRECTIONS_VIDEO]
// _DOC vars [video_image_url:s, video_id, page_id, ad_account_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStory\VideoData;
// use FacebookAds\Object\Fields\ObjectStory\VideoDataFields;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;
// use FacebookAds\Object\Fields\AdCreativeFields;

$video_data = new VideoData();
$video_data->setData(array(
  VideoDataFields::IMAGE_URL => $video_image_url,
  VideoDataFields::VIDEO_ID => $video_id,
  VideoDataFields::DESCRIPTION => "Come check out our new store in Menlo Park!",
  VideoDataFields::CALL_TO_ACTION => array(
    'type' => CallToActionTypes::GET_DIRECTIONS,
    'value' => array(
      'link' => 'fbgeo://37.48327, -122.15033, "1601 Willow Rd Menlo Park CA"',
    ),
  ),
));

$story = new ObjectStorySpec();
$story->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::VIDEO_DATA => $video_data,
));

$creative = new AdCreative(null, $ad_account_id);
$creative->{AdCreativeFields::OBJECT_STORY_SPEC} = $story;
$creative->create();
// _DOC close [ADCREATIVE_CREATE_GET_DIRECTIONS_VIDEO]
$creative->delete();

/** @var AdImage $image */
foreach ($images as $image) {
  $image->delete();
}

$link = $app_url;
$product_catalog = new ProductCatalog(null, $business_id);
$product_catalog->setData(array(
  ProductCatalogFields::NAME => 'Test Catalog',
));
$product_catalog->create();
$catalog_id = $product_catalog->{ProductCatalogFields::ID};

$product_set = new ProductSet(null, $catalog_id);
$product_set->setData(array(
  ProductSetFields::NAME => 'Test Catalog Set',
));
$product_set->create();
$product_set_id = $product_set->{ProductSetFields::ID};

$feed = new ProductFeed(null, $catalog_id);
$feed->setData(array(
  ProductFeedFields::FILE_NAME => 'my_product_feed.tsv',
  ProductFeedFields::NAME => 'Test Feed',
));
$feed->create();
$feed_id = $feed->{ProductFeedFields::ID};

// _DOC open [ADCREATIVE_CREATE_DPA_CAROUSEL]
// _DOC vars [ad_account_id:s, page_id, link:s, product_set_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\ObjectStory\TemplateData;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::TEMPLATE_DATA => (new TemplateData())->setData(array(
      'message' => 'Test {{product.name | titleize}}',
      'link' => $link,
      'name' => 'Headline {{product.price}}',
      'description' => 'Description {{product.description}}',
      'max_product_count' => 3,
  )),
));

$creative = new AdCreative(null, $ad_account_id);
$creative->setData(array(
  AdCreativeFields::NAME => 'Dynamic Ad Template Creative Sample',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
  AdCreativeFields::PRODUCT_SET_ID => $product_set_id,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_DPA_CAROUSEL]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_DPA_SINGLE_PRODUCT_CTA]
// _DOC vars [ad_account_id:s, page_id, link:s, product_set_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\ObjectStory\TemplateData;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::TEMPLATE_DATA => (new TemplateData())->setData(array(
    'call_to_action' => array('type' => 'SHOP_NOW'),
    'message' => 'Test {{product.name | titleize}}',
    'link' => $link,
    'name' => 'Headline {{product.price}}',
    'description' => 'Description {{product.description}}',
  )),
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Dynamic Ad Template Creative Sample',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
  AdCreativeFields::PRODUCT_SET_ID => $product_set_id,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_DPA_SINGLE_PRODUCT_CTA]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_DPA_CAROUSEL_TEMPLATE_URL]
// _DOC vars [ad_account_id:s, page_id, link:s, product_set_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\ObjectStory\TemplateData;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::TEMPLATE_DATA => (new TemplateData())->setData(array(
    'message' => 'Test {{product.name | titleize}}',
    'link' => 'http://example.com',
    'name' => 'Headline {{product.price}}',
    'description' => 'Description {{product.description}}',
    'max_product_count' => 3,
  )),
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Dynamic Ad Template Creative Sample',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
  AdCreativeFields::TEMPLATE_URL => 'http://clicktrack.com/cm325?id='.
    '{{product.retailer_id}}&redirect_url={{product.url|urlencode}}',
  AdCreativeFields::PRODUCT_SET_ID => $product_set_id,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_DPA_CAROUSEL_TEMPLATE_URL]
$creative->delete();

// _DOC open [ADCREATIVE_CREATE_DPA_DEEPLINK]
// _DOC vars [ad_account_id:s, page_id, link:s, product_set_id]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\ObjectStory\TemplateData;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::TEMPLATE_DATA => (new TemplateData())->setData(array(
    'call_to_action' => array('type' => 'SHOP_NOW'),
    'message' => 'Test {{product.name | titleize}}',
    'link' => $link,
    'name' => 'Headline {{product.price}}',
    'description' => 'Description {{product.description}}',
  )),
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Dynamic Ad Template Creative Sample',
  AdCreativeFields::APPLINK_TREATMENT => 'deeplink_with_web_fallback',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
  AdCreativeFields::PRODUCT_SET_ID => $product_set_id,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_DPA_DEEPLINK]
$creative->delete();

$product_set_id_1 = $product_set_id;
// _DOC open [ADCREATIVE_CREATE_DPA_RETARGETING]
// _DOC vars [ad_account_id:s, page_id, link:s, product_set_id_1]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\ObjectStorySpec;
// use FacebookAds\Object\ObjectStory\TemplateData;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\ObjectStorySpecFields;

$object_story_spec = new ObjectStorySpec();
$object_story_spec->setData(array(
  ObjectStorySpecFields::PAGE_ID => $page_id,
  ObjectStorySpecFields::TEMPLATE_DATA => (new TemplateData())->setData(array(
    'message' => 'Test {{product.name | titleize}}',
    'link' => $link,
    'name' => 'Headline {{product.price}}',
    'description' => 'Description {{product.description}}',
    'max_product_count' => 3,
  )),
));

$creative = new AdCreative(null, $ad_account_id);

$creative->setData(array(
  AdCreativeFields::NAME => 'Dynamic Ad Template Creative Sample',
  AdCreativeFields::OBJECT_STORY_SPEC => $object_story_spec,
  AdCreativeFields::PRODUCT_SET_ID => $product_set_id_1,
));

$creative->create();
// _DOC close [ADCREATIVE_CREATE_DPA_RETARGETING]

$creative_id = $creative->{AdCreativeFields::ID};

$creative->delete();
$feed->delete();
$product_set->delete();
$product_catalog->delete();

// FIXME excluded from runtime
return;

$retailer_id = 'rid';
// _DOC open [ADCREATIVE_READ_DPA_PREVIEW]
// _DOC vars [creative_id, catalog_id, retailer_id:s]
// use FacebookAds\Object\AdCreative;
// use FacebookAds\Object\AdPreview;
// use FacebookAds\Object\Fields\AdCreativeFields;
// use FacebookAds\Object\Fields\AdPreviewFields;
// use FacebookAds\Object\Values\AdFormats;

// $creative = new AdCreative($creative_id);
$creative = new AdCreative($creative_id);
$preview = $creative->getAdPreviews(array(), array(
  AdPreviewFields::AD_FORMAT => AdFormats::DESKTOP_FEED_STANDARD,
  AdPreviewFields::PRODUCT_ITEM_IDS => array(
    'catalog:'.$catalog_id.':'.base64_encode($retailer_id)
  ),
));
// _DOC close [ADCREATIVE_READ_DPA_PREVIEW]
