<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


  /**
   * The "activities" collection of methods.
   * Typical usage is:
   *  <code>
   *   $auditService = new BackupGuardGoogle_AuditService(...);
   *   $activities = $auditService->activities;
   *  </code>
   */
  class BackupGuardGoogle_ActivitiesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves a list of activities for a specific customer and application. (activities.list)
     *
     * @param string $customerId Represents the customer who is the owner of target object on which action was performed.
     * @param string $applicationId Application ID of the application on which the event was performed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string actorApplicationId Application ID of the application which interacted on behalf of the user while performing the event.
     * @opt_param string actorEmail Email address of the user who performed the action.
     * @opt_param string actorIpAddress IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string caller Type of the caller.
     * @opt_param string continuationToken Next page URL.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param int maxResults Number of activity records to be shown in each page.
     * @opt_param string startTime Return events which occured at or after this time.
     * @return BackupGuardGoogle_Activities
     */
    public function listActivities($customerId, $applicationId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'applicationId' => $applicationId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Activities($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Audit (v1).
 *
 * <p>
 * Lets you access user activities in your enterprise made through various applications.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/admin-audit/get_started" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_AuditService extends BackupGuardGoogle_Service {
  public $activities;
  /**
   * Constructs the internal representation of the Audit service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'apps/reporting/audit/v1/';
    $this->version = 'v1';
    $this->serviceName = 'audit';

    $client->addService($this->serviceName, $this->version);
    $this->activities = new BackupGuardGoogle_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"id": "audit.activities.list", "path": "{customerId}/{applicationId}", "httpMethod": "GET", "parameters": {"actorApplicationId": {"type": "string", "format": "int64", "location": "query"}, "actorEmail": {"type": "string", "location": "query"}, "actorIpAddress": {"type": "string", "location": "query"}, "applicationId": {"type": "string", "required": true, "format": "int64", "location": "path"}, "caller": {"type": "string", "enum": ["application_owner", "customer"], "location": "query"}, "continuationToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "required": true, "location": "path"}, "endTime": {"type": "string", "location": "query"}, "eventName": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "1000", "location": "query"}, "startTime": {"type": "string", "location": "query"}}, "response": {"$ref": "Activities"}}}}', true));

  }
}



class BackupGuardGoogle_Activities extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $next;
  public function setItems(/* array(BackupGuardGoogle_Activity) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Activity', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNext( $next) {
    $this->next = $next;
  }
  public function getNext() {
    return $this->next;
  }
}

class BackupGuardGoogle_Activity extends BackupGuardGoogle_Model {
  protected $__actorType = 'BackupGuardGoogle_ActivityActor';
  protected $__actorDataType = '';
  public $actor;
  protected $__eventsType = 'BackupGuardGoogle_ActivityEvents';
  protected $__eventsDataType = 'array';
  public $events;
  protected $__idType = 'BackupGuardGoogle_ActivityId';
  protected $__idDataType = '';
  public $id;
  public $ipAddress;
  public $kind;
  public $ownerDomain;
  public function setActor(BackupGuardGoogle_ActivityActor $actor) {
    $this->actor = $actor;
  }
  public function getActor() {
    return $this->actor;
  }
  public function setEvents(/* array(BackupGuardGoogle_ActivityEvents) */ $events) {
    $this->assertIsArray($events, 'BackupGuardGoogle_ActivityEvents', __METHOD__);
    $this->events = $events;
  }
  public function getEvents() {
    return $this->events;
  }
  public function setId(BackupGuardGoogle_ActivityId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIpAddress( $ipAddress) {
    $this->ipAddress = $ipAddress;
  }
  public function getIpAddress() {
    return $this->ipAddress;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOwnerDomain( $ownerDomain) {
    $this->ownerDomain = $ownerDomain;
  }
  public function getOwnerDomain() {
    return $this->ownerDomain;
  }
}

class BackupGuardGoogle_ActivityActor extends BackupGuardGoogle_Model {
  public $applicationId;
  public $callerType;
  public $email;
  public $key;
  public function setApplicationId( $applicationId) {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId() {
    return $this->applicationId;
  }
  public function setCallerType( $callerType) {
    $this->callerType = $callerType;
  }
  public function getCallerType() {
    return $this->callerType;
  }
  public function setEmail( $email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setKey( $key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
}

class BackupGuardGoogle_ActivityEvents extends BackupGuardGoogle_Model {
  public $eventType;
  public $name;
  protected $__parametersType = 'BackupGuardGoogle_ActivityEventsParameters';
  protected $__parametersDataType = 'array';
  public $parameters;
  public function setEventType( $eventType) {
    $this->eventType = $eventType;
  }
  public function getEventType() {
    return $this->eventType;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setParameters(/* array(BackupGuardGoogle_ActivityEventsParameters) */ $parameters) {
    $this->assertIsArray($parameters, 'BackupGuardGoogle_ActivityEventsParameters', __METHOD__);
    $this->parameters = $parameters;
  }
  public function getParameters() {
    return $this->parameters;
  }
}

class BackupGuardGoogle_ActivityEventsParameters extends BackupGuardGoogle_Model {
  public $name;
  public $value;
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_ActivityId extends BackupGuardGoogle_Model {
  public $applicationId;
  public $customerId;
  public $time;
  public $uniqQualifier;
  public function setApplicationId( $applicationId) {
    $this->applicationId = $applicationId;
  }
  public function getApplicationId() {
    return $this->applicationId;
  }
  public function setCustomerId( $customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setTime( $time) {
    $this->time = $time;
  }
  public function getTime() {
    return $this->time;
  }
  public function setUniqQualifier( $uniqQualifier) {
    $this->uniqQualifier = $uniqQualifier;
  }
  public function getUniqQualifier() {
    return $this->uniqQualifier;
  }
}
