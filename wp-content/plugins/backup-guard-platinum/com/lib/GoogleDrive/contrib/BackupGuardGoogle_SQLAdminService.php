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
   * The "backupRuns" collection of methods.
   * Typical usage is:
   *  <code>
   *   $sqladminService = new BackupGuardGoogle_SQLAdminService(...);
   *   $backupRuns = $sqladminService->backupRuns;
   *  </code>
   */
  class BackupGuardGoogle_BackupRunsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves a resource containing information about a backup run. (backupRuns.get)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param string $backupConfiguration Identifier for the backup configuration. This gets generated automatically when a backup configuration is created.
     * @param string $dueTime The time when this run is due to start in RFC 3339 format, for example 2012-11-15T16:19:00.094Z.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_BackupRun
     */
    public function get($project, $instance, $backupConfiguration, $dueTime, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration, 'dueTime' => $dueTime);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_BackupRun($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all backup runs associated with a given instance and configuration in the reverse
     * chronological order of the enqueued time. (backupRuns.list)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param string $backupConfiguration Identifier for the backup configuration. This gets generated automatically when a backup configuration is created.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of backup runs per response.
     * @opt_param string pageToken A previously-returned page token representing part of the larger set of results to view.
     * @return BackupGuardGoogle_BackupRunsListResponse
     */
    public function listBackupRuns($project, $instance, $backupConfiguration, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_BackupRunsListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "instances" collection of methods.
   * Typical usage is:
   *  <code>
   *   $sqladminService = new BackupGuardGoogle_SQLAdminService(...);
   *   $instances = $sqladminService->instances;
   *  </code>
   */
  class BackupGuardGoogle_InstancesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes a database instance. (instances.delete)
     *
     * @param string $project Project ID of the project that contains the instance to be deleted. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesDeleteResponse
     */
    public function delete($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesDeleteResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Exports data from a database instance to a Google Cloud Storage bucket as a MySQL dump file.
     * (instances.export)
     *
     * @param string $project Project ID of the project that contains the instance to be exported. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param BackupGuardGoogle_InstancesExportRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesExportResponse
     */
    public function export($project, $instance, BackupGuardGoogle_InstancesExportRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('export', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesExportResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a resource containing information about a database instance. (instances.get)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_DatabaseInstance
     */
    public function get($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DatabaseInstance($data);
      } else {
        return $data;
      }
    }
    /**
     * Imports data into a database instance from a MySQL dump file in Google Cloud Storage.
     * (instances.import)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param BackupGuardGoogle_InstancesImportRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesImportResponse
     */
    public function import($project, $instance, BackupGuardGoogle_InstancesImportRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('import', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesImportResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new database instance. (instances.insert)
     *
     * @param string $project Project ID of the project to which the newly created database instances should belong. You can find this on the project summary page of the Google APIs Console.
     * @param BackupGuardGoogle_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesInsertResponse
     */
    public function insert($project, BackupGuardGoogle_DatabaseInstance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesInsertResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists instances under a given project in the alphabetical order of the instance name.
     * (instances.list)
     *
     * @param string $project Project ID of the project for which to list database instances. You can find this on the project summary page of the Google APIs Console.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of results to return per response.
     * @opt_param string pageToken A previously-returned page token representing part of the larger set of results to view.
     * @return BackupGuardGoogle_InstancesListResponse
     */
    public function listInstances($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates settings of a database instance. Caution: This is not a partial update, so you must
     * include values for all the settings that you want to retain. For partial updates, use patch..
     * This method supports patch semantics. (instances.patch)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param BackupGuardGoogle_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesUpdateResponse
     */
    public function patch($project, $instance, BackupGuardGoogle_DatabaseInstance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesUpdateResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Restarts a database instance. (instances.restart)
     *
     * @param string $project Project ID of the project that contains the instance to be restarted. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesRestartResponse
     */
    public function restart($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('restart', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesRestartResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Restores a backup of a database instance. (instances.restoreBackup)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param string $backupConfiguration The identifier of the backup configuration. This gets generated automatically when a backup configuration is created.
     * @param string $dueTime The time when this run is due to start in RFC 3339 format, for example 2012-11-15T16:19:00.094Z.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesRestoreBackupResponse
     */
    public function restoreBackup($project, $instance, $backupConfiguration, $dueTime, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'backupConfiguration' => $backupConfiguration, 'dueTime' => $dueTime);
      $params = array_merge($params, $optParams);
      $data = $this->__call('restoreBackup', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesRestoreBackupResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates settings of a database instance. Caution: This is not a partial update, so you must
     * include values for all the settings that you want to retain. For partial updates, use patch.
     * (instances.update)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param BackupGuardGoogle_DatabaseInstance $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstancesUpdateResponse
     */
    public function update($project, $instance, BackupGuardGoogle_DatabaseInstance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstancesUpdateResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "operations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $sqladminService = new BackupGuardGoogle_SQLAdminService(...);
   *   $operations = $sqladminService->operations;
   *  </code>
   */
  class BackupGuardGoogle_OperationsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves an instance operation that has been performed on an instance. (operations.get)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param string $operation Instance operation ID.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_InstanceOperation
     */
    public function get($project, $instance, $operation, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstanceOperation($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all instance operations that have been performed on the given database instance in the
     * reverse chronological order of the start time. (operations.list)
     *
     * @param string $project Project ID of the project that contains the instance. You can find this on the project summary page of the Google APIs Console.
     * @param string $instance Database instance ID. This does not include the project ID.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of operations per response.
     * @opt_param string pageToken A previously-returned page token representing part of the larger set of results to view.
     * @return BackupGuardGoogle_OperationsListResponse
     */
    public function listOperations($project, $instance, $optParams = array()) {
      $params = array('project' => $project, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OperationsListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "tiers" collection of methods.
   * Typical usage is:
   *  <code>
   *   $sqladminService = new BackupGuardGoogle_SQLAdminService(...);
   *   $tiers = $sqladminService->tiers;
   *  </code>
   */
  class BackupGuardGoogle_TiersServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Lists all available service tiers for Google Cloud SQL, for example D1, D2. For related
     * information, see Pricing. (tiers.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_TiersListResponse
     */
    public function listTiers($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TiersListResponse($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_SQLAdmin (v1beta1).
 *
 * <p>
 * API for Cloud SQL database instance management.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/cloud-sql/docs/admin-api/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_SQLAdminService extends BackupGuardGoogle_Service {
  public $backupRuns;
  public $instances;
  public $operations;
  public $tiers;
  /**
   * Constructs the internal representation of the SQLAdmin service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'sql/v1beta1/';
    $this->version = 'v1beta1';
    $this->serviceName = 'sqladmin';

    $client->addService($this->serviceName, $this->version);
    $this->backupRuns = new BackupGuardGoogle_BackupRunsServiceResource($this, $this->serviceName, 'backupRuns', json_decode('{"methods": {"get": {"id": "sql.backupRuns.get", "path": "projects/{project}/instances/{instance}/backupRuns/{backupConfiguration}", "httpMethod": "GET", "parameters": {"backupConfiguration": {"type": "string", "required": true, "location": "path"}, "dueTime": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "BackupRun"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "list": {"id": "sql.backupRuns.list", "path": "projects/{project}/instances/{instance}/backupRuns", "httpMethod": "GET", "parameters": {"backupConfiguration": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "BackupRunsListResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}}}', true));
    $this->instances = new BackupGuardGoogle_InstancesServiceResource($this, $this->serviceName, 'instances', json_decode('{"methods": {"delete": {"id": "sql.instances.delete", "path": "projects/{project}/instances/{instance}", "httpMethod": "DELETE", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstancesDeleteResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "export": {"id": "sql.instances.export", "path": "projects/{project}/instances/{instance}/export", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "InstancesExportRequest"}, "response": {"$ref": "InstancesExportResponse"}, "scopes": ["https://www.googleapis.com/auth/cloud-platform"]}, "get": {"id": "sql.instances.get", "path": "projects/{project}/instances/{instance}", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DatabaseInstance"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "import": {"id": "sql.instances.import", "path": "projects/{project}/instances/{instance}/import", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "InstancesImportRequest"}, "response": {"$ref": "InstancesImportResponse"}, "scopes": ["https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "sql.instances.insert", "path": "projects/{project}/instances", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "DatabaseInstance"}, "response": {"$ref": "InstancesInsertResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "list": {"id": "sql.instances.list", "path": "projects/{project}/instances", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstancesListResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "patch": {"id": "sql.instances.patch", "path": "projects/{project}/instances/{instance}", "httpMethod": "PATCH", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "DatabaseInstance"}, "response": {"$ref": "InstancesUpdateResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "restart": {"id": "sql.instances.restart", "path": "projects/{project}/instances/{instance}/restart", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstancesRestartResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "restoreBackup": {"id": "sql.instances.restoreBackup", "path": "projects/{project}/instances/{instance}/restoreBackup", "httpMethod": "POST", "parameters": {"backupConfiguration": {"type": "string", "required": true, "location": "query"}, "dueTime": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstancesRestoreBackupResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "update": {"id": "sql.instances.update", "path": "projects/{project}/instances/{instance}", "httpMethod": "PUT", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "etagRequired": true, "request": {"$ref": "DatabaseInstance"}, "response": {"$ref": "InstancesUpdateResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}}}', true));
    $this->operations = new BackupGuardGoogle_OperationsServiceResource($this, $this->serviceName, 'operations', json_decode('{"methods": {"get": {"id": "sql.operations.get", "path": "projects/{project}/instances/{instance}/operations/{operation}", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceOperation"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}, "list": {"id": "sql.operations.list", "path": "projects/{project}/instances/{instance}/operations", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationsListResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}}}', true));
    $this->tiers = new BackupGuardGoogle_TiersServiceResource($this, $this->serviceName, 'tiers', json_decode('{"methods": {"list": {"id": "sql.tiers.list", "path": "tiers", "httpMethod": "GET", "response": {"$ref": "TiersListResponse"}, "scopes": ["https://www.googleapis.com/auth/sqlservice.admin"]}}}', true));

  }
}



class BackupGuardGoogle_BackupConfiguration extends BackupGuardGoogle_Model {
  public $enabled;
  public $id;
  public $kind;
  public $startTime;
  public function setEnabled( $enabled) {
    $this->enabled = $enabled;
  }
  public function getEnabled() {
    return $this->enabled;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
}

class BackupGuardGoogle_BackupRun extends BackupGuardGoogle_Model {
  public $backupConfiguration;
  public $dueTime;
  public $endTime;
  public $enqueuedTime;
  protected $__errorType = 'BackupGuardGoogle_OperationError';
  protected $__errorDataType = '';
  public $error;
  public $instance;
  public $kind;
  public $startTime;
  public $status;
  public function setBackupConfiguration( $backupConfiguration) {
    $this->backupConfiguration = $backupConfiguration;
  }
  public function getBackupConfiguration() {
    return $this->backupConfiguration;
  }
  public function setDueTime( $dueTime) {
    $this->dueTime = $dueTime;
  }
  public function getDueTime() {
    return $this->dueTime;
  }
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setEnqueuedTime( $enqueuedTime) {
    $this->enqueuedTime = $enqueuedTime;
  }
  public function getEnqueuedTime() {
    return $this->enqueuedTime;
  }
  public function setError(BackupGuardGoogle_OperationError $error) {
    $this->error = $error;
  }
  public function getError() {
    return $this->error;
  }
  public function setInstance( $instance) {
    $this->instance = $instance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_BackupRunsListResponse extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_BackupRun';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(BackupGuardGoogle_BackupRun) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_BackupRun', __METHOD__);
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

class BackupGuardGoogle_DatabaseInstance extends BackupGuardGoogle_Model {
  public $currentDiskSize;
  public $databaseVersion;
  public $etag;
  public $instance;
  public $kind;
  public $maxDiskSize;
  public $project;
  public $region;
  protected $__settingsType = 'BackupGuardGoogle_Settings';
  protected $__settingsDataType = '';
  public $settings;
  public $state;
  public function setCurrentDiskSize( $currentDiskSize) {
    $this->currentDiskSize = $currentDiskSize;
  }
  public function getCurrentDiskSize() {
    return $this->currentDiskSize;
  }
  public function setDatabaseVersion( $databaseVersion) {
    $this->databaseVersion = $databaseVersion;
  }
  public function getDatabaseVersion() {
    return $this->databaseVersion;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setInstance( $instance) {
    $this->instance = $instance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaxDiskSize( $maxDiskSize) {
    $this->maxDiskSize = $maxDiskSize;
  }
  public function getMaxDiskSize() {
    return $this->maxDiskSize;
  }
  public function setProject( $project) {
    $this->project = $project;
  }
  public function getProject() {
    return $this->project;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSettings(BackupGuardGoogle_Settings $settings) {
    $this->settings = $settings;
  }
  public function getSettings() {
    return $this->settings;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class BackupGuardGoogle_ExportContext extends BackupGuardGoogle_Model {
  public $database;
  public $kind;
  public $table;
  public $uri;
  public function setDatabase(/* array(BackupGuardGoogle_string) */ $database) {
    $this->assertIsArray($database, 'BackupGuardGoogle_string', __METHOD__);
    $this->database = $database;
  }
  public function getDatabase() {
    return $this->database;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setTable(/* array(BackupGuardGoogle_string) */ $table) {
    $this->assertIsArray($table, 'BackupGuardGoogle_string', __METHOD__);
    $this->table = $table;
  }
  public function getTable() {
    return $this->table;
  }
  public function setUri( $uri) {
    $this->uri = $uri;
  }
  public function getUri() {
    return $this->uri;
  }
}

class BackupGuardGoogle_ImportContext extends BackupGuardGoogle_Model {
  public $database;
  public $kind;
  public $uri;
  public function setDatabase( $database) {
    $this->database = $database;
  }
  public function getDatabase() {
    return $this->database;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setUri(/* array(BackupGuardGoogle_string) */ $uri) {
    $this->assertIsArray($uri, 'BackupGuardGoogle_string', __METHOD__);
    $this->uri = $uri;
  }
  public function getUri() {
    return $this->uri;
  }
}

class BackupGuardGoogle_InstanceOperation extends BackupGuardGoogle_Model {
  public $endTime;
  public $enqueuedTime;
  protected $__errorType = 'BackupGuardGoogle_OperationError';
  protected $__errorDataType = 'array';
  public $error;
  protected $__exportContextType = 'BackupGuardGoogle_ExportContext';
  protected $__exportContextDataType = '';
  public $exportContext;
  protected $__importContextType = 'BackupGuardGoogle_ImportContext';
  protected $__importContextDataType = '';
  public $importContext;
  public $instance;
  public $kind;
  public $operation;
  public $operationType;
  public $startTime;
  public $state;
  public $userEmailAddress;
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setEnqueuedTime( $enqueuedTime) {
    $this->enqueuedTime = $enqueuedTime;
  }
  public function getEnqueuedTime() {
    return $this->enqueuedTime;
  }
  public function setError(/* array(BackupGuardGoogle_OperationError) */ $error) {
    $this->assertIsArray($error, 'BackupGuardGoogle_OperationError', __METHOD__);
    $this->error = $error;
  }
  public function getError() {
    return $this->error;
  }
  public function setExportContext(BackupGuardGoogle_ExportContext $exportContext) {
    $this->exportContext = $exportContext;
  }
  public function getExportContext() {
    return $this->exportContext;
  }
  public function setImportContext(BackupGuardGoogle_ImportContext $importContext) {
    $this->importContext = $importContext;
  }
  public function getImportContext() {
    return $this->importContext;
  }
  public function setInstance( $instance) {
    $this->instance = $instance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
  public function setOperationType( $operationType) {
    $this->operationType = $operationType;
  }
  public function getOperationType() {
    return $this->operationType;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setUserEmailAddress( $userEmailAddress) {
    $this->userEmailAddress = $userEmailAddress;
  }
  public function getUserEmailAddress() {
    return $this->userEmailAddress;
  }
}

class BackupGuardGoogle_InstancesDeleteResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesExportRequest extends BackupGuardGoogle_Model {
  protected $__exportContextType = 'BackupGuardGoogle_ExportContext';
  protected $__exportContextDataType = '';
  public $exportContext;
  public function setExportContext(BackupGuardGoogle_ExportContext $exportContext) {
    $this->exportContext = $exportContext;
  }
  public function getExportContext() {
    return $this->exportContext;
  }
}

class BackupGuardGoogle_InstancesExportResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesImportRequest extends BackupGuardGoogle_Model {
  protected $__importContextType = 'BackupGuardGoogle_ImportContext';
  protected $__importContextDataType = '';
  public $importContext;
  public function setImportContext(BackupGuardGoogle_ImportContext $importContext) {
    $this->importContext = $importContext;
  }
  public function getImportContext() {
    return $this->importContext;
  }
}

class BackupGuardGoogle_InstancesImportResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesInsertResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesListResponse extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_DatabaseInstance';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(BackupGuardGoogle_DatabaseInstance) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_DatabaseInstance', __METHOD__);
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

class BackupGuardGoogle_InstancesRestartResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesRestoreBackupResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_InstancesUpdateResponse extends BackupGuardGoogle_Model {
  public $kind;
  public $operation;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOperation( $operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
}

class BackupGuardGoogle_OperationError extends BackupGuardGoogle_Model {
  public $code;
  public $kind;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_OperationsListResponse extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_InstanceOperation';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(BackupGuardGoogle_InstanceOperation) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_InstanceOperation', __METHOD__);
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

class BackupGuardGoogle_Settings extends BackupGuardGoogle_Model {
  public $activationPolicy;
  public $authorizedGaeApplications;
  protected $__backupConfigurationType = 'BackupGuardGoogle_BackupConfiguration';
  protected $__backupConfigurationDataType = 'array';
  public $backupConfiguration;
  public $kind;
  public $pricingPlan;
  public $replicationType;
  public $tier;
  public function setActivationPolicy( $activationPolicy) {
    $this->activationPolicy = $activationPolicy;
  }
  public function getActivationPolicy() {
    return $this->activationPolicy;
  }
  public function setAuthorizedGaeApplications(/* array(BackupGuardGoogle_string) */ $authorizedGaeApplications) {
    $this->assertIsArray($authorizedGaeApplications, 'BackupGuardGoogle_string', __METHOD__);
    $this->authorizedGaeApplications = $authorizedGaeApplications;
  }
  public function getAuthorizedGaeApplications() {
    return $this->authorizedGaeApplications;
  }
  public function setBackupConfiguration(/* array(BackupGuardGoogle_BackupConfiguration) */ $backupConfiguration) {
    $this->assertIsArray($backupConfiguration, 'BackupGuardGoogle_BackupConfiguration', __METHOD__);
    $this->backupConfiguration = $backupConfiguration;
  }
  public function getBackupConfiguration() {
    return $this->backupConfiguration;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPricingPlan( $pricingPlan) {
    $this->pricingPlan = $pricingPlan;
  }
  public function getPricingPlan() {
    return $this->pricingPlan;
  }
  public function setReplicationType( $replicationType) {
    $this->replicationType = $replicationType;
  }
  public function getReplicationType() {
    return $this->replicationType;
  }
  public function setTier( $tier) {
    $this->tier = $tier;
  }
  public function getTier() {
    return $this->tier;
  }
}

class BackupGuardGoogle_Tier extends BackupGuardGoogle_Model {
  public $DiskQuota;
  public $RAM;
  public $kind;
  public $region;
  public $tier;
  public function setDiskQuota( $DiskQuota) {
    $this->DiskQuota = $DiskQuota;
  }
  public function getDiskQuota() {
    return $this->DiskQuota;
  }
  public function setRAM( $RAM) {
    $this->RAM = $RAM;
  }
  public function getRAM() {
    return $this->RAM;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRegion(/* array(BackupGuardGoogle_string) */ $region) {
    $this->assertIsArray($region, 'BackupGuardGoogle_string', __METHOD__);
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setTier( $tier) {
    $this->tier = $tier;
  }
  public function getTier() {
    return $this->tier;
  }
}

class BackupGuardGoogle_TiersListResponse extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Tier';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Tier) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Tier', __METHOD__);
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
}
