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
use FacebookAds\Object\Fields\StatusFields;
use FacebookAds\Object\Values\CommentCommentPrivacyValueValues;
use FacebookAds\Object\Values\CommentFilterValues;
use FacebookAds\Object\Values\CommentLiveFilterValues;
use FacebookAds\Object\Values\CommentOrderValues;
use FacebookAds\Object\Values\ProfileTypeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class Status extends AbstractCrudObject {

  /**
   * @return StatusFields
   */
  public static function getFieldsEnum() {
    return StatusFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


  public function getComments(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'filter' => 'filter_enum',
      'order' => 'order_enum',
      'live_filter' => 'live_filter_enum',
      'since' => 'datetime',
    );
    $enums = array(
      'filter_enum' => CommentFilterValues::getInstance()->getValues(),
      'order_enum' => CommentOrderValues::getInstance()->getValues(),
      'live_filter_enum' => CommentLiveFilterValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createComment(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'object_id' => 'string',
      'parent_comment_id' => 'Object',
      'nectar_module' => 'string',
      'attachment_id' => 'string',
      'attachment_url' => 'string',
      'attachment_share_url' => 'string',
      'feedback_source' => 'string',
      'facepile_mentioned_ids' => 'list<string>',
      'is_offline' => 'bool',
      'comment_privacy_value' => 'comment_privacy_value_enum',
      'message' => 'string',
      'text' => 'string',
      'tracking' => 'string',
    );
    $enums = array(
      'comment_privacy_value_enum' => CommentCommentPrivacyValueValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/comments',
      new Comment(),
      'EDGE',
      Comment::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function deleteLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'feedback_source' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_DELETE,
      '/likes',
      new AbstractCrudObject(),
      'EDGE',
      array(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getLikes(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/likes',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function createLike(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'tracking' => 'string',
      'nectar_module' => 'string',
      'notify' => 'bool',
      'feedback_source' => 'string',
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/likes',
      new Status(),
      'EDGE',
      Status::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getReactions(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'type' => 'type_enum',
    );
    $enums = array(
      'type_enum' => ProfileTypeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/reactions',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getShareDPosts(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/sharedposts',
      new Post(),
      'EDGE',
      Post::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getTags(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/tags',
      new Profile(),
      'EDGE',
      Profile::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new Status(),
      'NODE',
      Status::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
