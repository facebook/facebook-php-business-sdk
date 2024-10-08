<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object;

use FacebookAds\ApiRequest;
use FacebookAds\Cursor;
use FacebookAds\Http\RequestInterface;
use FacebookAds\TypeChecker;
use FacebookAds\Object\Fields\IGUpcomingEventFields;
use FacebookAds\Object\Values\IGUpcomingEventNotificationSubtypesValues;
use FacebookAds\Object\Values\IGUpcomingEventNotificationTargetTimeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class IGUpcomingEvent extends AbstractCrudObject {

  /**
   * @return IGUpcomingEventFields
   */
  public static function getFieldsEnum() {
    return IGUpcomingEventFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['NotificationSubtypes'] = IGUpcomingEventNotificationSubtypesValues::getInstance()->getValues();
    $ref_enums['NotificationTargetTime'] = IGUpcomingEventNotificationTargetTimeValues::getInstance()->getValues();
    return $ref_enums;
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
      new IGUpcomingEvent(),
      'NODE',
      IGUpcomingEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function updateSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
      'end_time' => 'datetime',
      'notification_subtypes' => 'list<notification_subtypes_enum>',
      'notification_target_time' => 'notification_target_time_enum',
      'start_time' => 'datetime',
      'title' => 'string',
    );
    $enums = array(
      'notification_subtypes_enum' => IGUpcomingEventNotificationSubtypesValues::getInstance()->getValues(),
      'notification_target_time_enum' => IGUpcomingEventNotificationTargetTimeValues::getInstance()->getValues(),
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_POST,
      '/',
      new IGUpcomingEvent(),
      'NODE',
      IGUpcomingEvent::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
