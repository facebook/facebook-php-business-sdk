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

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ConversionActionQueryFields extends AbstractEnum {

  const FIELD_ACTION_TYPE = 'action.type';
  const APPLICATION = 'application';
  const CONVERSION_ID = 'conversion_id';
  const CREATIVE = 'creative';
  const DATASET = 'dataset';
  const EVENT = 'event';
  const FIELD_EVENT_CREATOR = 'event.creator';
  const EVENT_TYPE = 'event_type';
  const FB_PIXEL = 'fb_pixel';
  const FB_PIXEL_EVENT = 'fb_pixel_event';
  const LEADGEN = 'leadgen';
  const OBJECT = 'object';
  const FIELD_OBJECT_DOMAIN = 'object.domain';
  const OFFER = 'offer';
  const FIELD_OFFER_CREATOR = 'offer.creator';
  const OFFSITE_PIXEL = 'offsite_pixel';
  const PAGE = 'page';
  const FIELD_PAGE_PARENT = 'page.parent';
  const POST = 'post';
  const FIELD_POST_OBJECT = 'post.object';
  const FIELD_POST_OBJECT_WALL = 'post.object.wall';
  const FIELD_POST_WALL = 'post.wall';
  const QUESTION = 'question';
  const FIELD_QUESTION_CREATOR = 'question.creator';
  const RESPONSE = 'response';
  const SUBTYPE = 'subtype';

  public function getFieldTypes() {
    return array(
      'action.type' => 'list<Object>',
      'application' => 'list<Object>',
      'conversion_id' => 'list<string>',
      'creative' => 'list<Object>',
      'dataset' => 'list<string>',
      'event' => 'list<string>',
      'event.creator' => 'list<string>',
      'event_type' => 'list<string>',
      'fb_pixel' => 'list<string>',
      'fb_pixel_event' => 'list<string>',
      'leadgen' => 'list<string>',
      'object' => 'list<string>',
      'object.domain' => 'list<string>',
      'offer' => 'list<string>',
      'offer.creator' => 'list<string>',
      'offsite_pixel' => 'list<string>',
      'page' => 'list<string>',
      'page.parent' => 'list<string>',
      'post' => 'list<string>',
      'post.object' => 'list<string>',
      'post.object.wall' => 'list<string>',
      'post.wall' => 'list<string>',
      'question' => 'list<string>',
      'question.creator' => 'list<string>',
      'response' => 'list<string>',
      'subtype' => 'list<string>',
    );
  }
}
