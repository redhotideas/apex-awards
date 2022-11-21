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
   *   $adminService = new BackupGuardGoogle_ReportsService(...);
   *   $activities = $adminService->activities;
   *  </code>
   */
  class BackupGuardGoogle_ActivitiesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves a list of activities for a specific customer and application. (activities.list)
     *
     * @param string $userKey Represents the profile id or the user email for which the data should be filtered. When 'all' is specified as the userKey, it returns usageReports for all users.
     * @param string $applicationName Application name for which the events are to be retrieved.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string actorIpAddress IP Address of host where the event was performed. Supports both IPv4 and IPv6 addresses.
     * @opt_param string endTime Return events which occured at or before this time.
     * @opt_param string eventName Name of the event being queried.
     * @opt_param string filters Event parameters in the form [parameter1 name][operator][parameter1 value],[parameter2 name][operator][parameter2 value],...
     * @opt_param int maxResults Number of activity records to be shown in each page.
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string startTime Return events which occured at or after this time.
     * @return BackupGuardGoogle_Activities
     */
    public function listActivities($userKey, $applicationName, $optParams = array()) {
      $params = array('userKey' => $userKey, 'applicationName' => $applicationName);
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
   * The "customerUsageReports" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_ReportsService(...);
   *   $customerUsageReports = $adminService->customerUsageReports;
   *  </code>
   */
  class BackupGuardGoogle_CustomerUsageReportsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves a report which is a collection of properties / statistics for a specific customer.
     * (customerUsageReports.get)
     *
     * @param string $date Represents the date in yyyy-mm-dd format for which the data is to be fetched.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string parameters Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
     * @return BackupGuardGoogle_UsageReports
     */
    public function get($date, $optParams = array()) {
      $params = array('date' => $date);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UsageReports($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "userUsageReport" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_ReportsService(...);
   *   $userUsageReport = $adminService->userUsageReport;
   *  </code>
   */
  class BackupGuardGoogle_UserUsageReportServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves a report which is a collection of properties / statistics for a set of users.
     * (userUsageReport.get)
     *
     * @param string $userKey Represents the profile id or the user email for which the data should be filtered.
     * @param string $date Represents the date in yyyy-mm-dd format for which the data is to be fetched.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filters Represents the set of filters including parameter operator value.
     * @opt_param string maxResults Maximum number of results to return. Maximum allowed is 1000
     * @opt_param string pageToken Token to specify next page.
     * @opt_param string parameters Represents the application name, parameter name pairs to fetch in csv as app_name1:param_name1, app_name2:param_name2.
     * @return BackupGuardGoogle_UsageReports
     */
    public function get($userKey, $date, $optParams = array()) {
      $params = array('userKey' => $userKey, 'date' => $date);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UsageReports($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Reports (reports_v1).
 *
 * <p>
 * Allows the administrators of Google Apps customers to fetch reports about the usage, collaboration, security and risk for their users.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/admin-sdk/reports/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_ReportsService extends BackupGuardGoogle_Service {
  public $activities;
  public $customerUsageReports;
  public $userUsageReport;
  /**
   * Constructs the internal representation of the Reports service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'admin/reports/v1/';
    $this->version = 'reports_v1';
    $this->serviceName = 'admin';

    $client->addService($this->serviceName, $this->version);
    $this->activities = new BackupGuardGoogle_ActivitiesServiceResource($this, $this->serviceName, 'activities', json_decode('{"methods": {"list": {"id": "reports.activities.list", "path": "activity/users/{userKey}/applications/{applicationName}", "httpMethod": "GET", "parameters": {"actorIpAddress": {"type": "string", "location": "query"}, "applicationName": {"type": "string", "required": true, "location": "path"}, "endTime": {"type": "string", "location": "query"}, "eventName": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startTime": {"type": "string", "location": "query"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Activities"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.audit.readonly"]}}}', true));
    $this->customerUsageReports = new BackupGuardGoogle_CustomerUsageReportsServiceResource($this, $this->serviceName, 'customerUsageReports', json_decode('{"methods": {"get": {"id": "reports.customerUsageReports.get", "path": "usage/dates/{date}", "httpMethod": "GET", "parameters": {"date": {"type": "string", "required": true, "location": "path"}, "pageToken": {"type": "string", "location": "query"}, "parameters": {"type": "string", "location": "query"}}, "response": {"$ref": "UsageReports"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.usage.readonly"]}}}', true));
    $this->userUsageReport = new BackupGuardGoogle_UserUsageReportServiceResource($this, $this->serviceName, 'userUsageReport', json_decode('{"methods": {"get": {"id": "reports.userUsageReport.get", "path": "usage/users/{userKey}/dates/{date}", "httpMethod": "GET", "parameters": {"date": {"type": "string", "required": true, "location": "path"}, "filters": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "parameters": {"type": "string", "location": "query"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "UsageReports"}, "scopes": ["https://www.googleapis.com/auth/admin.reports.usage.readonly"]}}}', true));

  }
}



class BackupGuardGoogle_Activities extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Activity';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
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
  public function setNextPageToken( $nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
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
  public $callerType;
  public $email;
  public $key;
  public $profileId;
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
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
}

class BackupGuardGoogle_ActivityEvents extends BackupGuardGoogle_Model {
  public $name;
  protected $__parametersType = 'BackupGuardGoogle_ActivityEventsParameters';
  protected $__parametersDataType = 'array';
  public $parameters;
  public $type;
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
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_ActivityEventsParameters extends BackupGuardGoogle_Model {
  public $boolValue;
  public $intValue;
  public $name;
  public $value;
  public function setBoolValue( $boolValue) {
    $this->boolValue = $boolValue;
  }
  public function getBoolValue() {
    return $this->boolValue;
  }
  public function setIntValue( $intValue) {
    $this->intValue = $intValue;
  }
  public function getIntValue() {
    return $this->intValue;
  }
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
  public $applicationName;
  public $customerId;
  public $time;
  public $uniqueQualifier;
  public function setApplicationName( $applicationName) {
    $this->applicationName = $applicationName;
  }
  public function getApplicationName() {
    return $this->applicationName;
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
  public function setUniqueQualifier( $uniqueQualifier) {
    $this->uniqueQualifier = $uniqueQualifier;
  }
  public function getUniqueQualifier() {
    return $this->uniqueQualifier;
  }
}

class BackupGuardGoogle_UsageReport extends BackupGuardGoogle_Model {
  public $date;
  protected $__entityType = 'BackupGuardGoogle_UsageReportEntity';
  protected $__entityDataType = '';
  public $entity;
  public $kind;
  protected $__parametersType = 'BackupGuardGoogle_UsageReportParameters';
  protected $__parametersDataType = 'array';
  public $parameters;
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setEntity(BackupGuardGoogle_UsageReportEntity $entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setParameters(/* array(BackupGuardGoogle_UsageReportParameters) */ $parameters) {
    $this->assertIsArray($parameters, 'BackupGuardGoogle_UsageReportParameters', __METHOD__);
    $this->parameters = $parameters;
  }
  public function getParameters() {
    return $this->parameters;
  }
}

class BackupGuardGoogle_UsageReportEntity extends BackupGuardGoogle_Model {
  public $customerId;
  public $profileId;
  public $type;
  public $userEmail;
  public function setCustomerId( $customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUserEmail( $userEmail) {
    $this->userEmail = $userEmail;
  }
  public function getUserEmail() {
    return $this->userEmail;
  }
}

class BackupGuardGoogle_UsageReportParameters extends BackupGuardGoogle_Model {
  public $boolValue;
  public $datetimeValue;
  public $intValue;
  public $name;
  public $stringValue;
  public function setBoolValue( $boolValue) {
    $this->boolValue = $boolValue;
  }
  public function getBoolValue() {
    return $this->boolValue;
  }
  public function setDatetimeValue( $datetimeValue) {
    $this->datetimeValue = $datetimeValue;
  }
  public function getDatetimeValue() {
    return $this->datetimeValue;
  }
  public function setIntValue( $intValue) {
    $this->intValue = $intValue;
  }
  public function getIntValue() {
    return $this->intValue;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setStringValue( $stringValue) {
    $this->stringValue = $stringValue;
  }
  public function getStringValue() {
    return $this->stringValue;
  }
}

class BackupGuardGoogle_UsageReports extends BackupGuardGoogle_Model {
  public $kind;
  public $nextPageToken;
  protected $__usageReportsType = 'BackupGuardGoogle_UsageReport';
  protected $__usageReportsDataType = 'array';
  public $usageReports;
  protected $__warningsType = 'BackupGuardGoogle_UsageReportsWarnings';
  protected $__warningsDataType = 'array';
  public $warnings;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken( $nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setUsageReports(/* array(BackupGuardGoogle_UsageReport) */ $usageReports) {
    $this->assertIsArray($usageReports, 'BackupGuardGoogle_UsageReport', __METHOD__);
    $this->usageReports = $usageReports;
  }
  public function getUsageReports() {
    return $this->usageReports;
  }
  public function setWarnings(/* array(BackupGuardGoogle_UsageReportsWarnings) */ $warnings) {
    $this->assertIsArray($warnings, 'BackupGuardGoogle_UsageReportsWarnings', __METHOD__);
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
}

class BackupGuardGoogle_UsageReportsWarnings extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_UsageReportsWarningsData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_UsageReportsWarningsData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_UsageReportsWarningsData', __METHOD__);
    $this->data = $data;
  }
  public function getData() {
    return $this->data;
  }
  public function setMessage( $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
}

class BackupGuardGoogle_UsageReportsWarningsData extends BackupGuardGoogle_Model {
  public $key;
  public $value;
  public function setKey( $key) {
    $this->key = $key;
  }
  public function getKey() {
    return $this->key;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}
