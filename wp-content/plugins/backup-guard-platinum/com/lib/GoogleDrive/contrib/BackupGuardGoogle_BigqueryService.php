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
   * The "datasets" collection of methods.
   * Typical usage is:
   *  <code>
   *   $bigqueryService = new BackupGuardGoogle_BigqueryService(...);
   *   $datasets = $bigqueryService->datasets;
   *  </code>
   */
  class BackupGuardGoogle_DatasetsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the dataset specified by datasetId value. Before you can delete a dataset, you must
     * delete all its tables, either manually or by specifying deleteContents. Immediately after
     * deletion, you can create another dataset with the same name. (datasets.delete)
     *
     * @param string $projectId Project ID of the dataset being deleted
     * @param string $datasetId Dataset ID of dataset being deleted
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool deleteContents If True, delete all the tables in the dataset. If False and the dataset contains tables, the request will fail. Default is False
     */
    public function delete($projectId, $datasetId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Returns the dataset specified by datasetID. (datasets.get)
     *
     * @param string $projectId Project ID of the requested dataset
     * @param string $datasetId Dataset ID of the requested dataset
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Dataset
     */
    public function get($projectId, $datasetId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Dataset($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new empty dataset. (datasets.insert)
     *
     * @param string $projectId Project ID of the new dataset
     * @param BackupGuardGoogle_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Dataset
     */
    public function insert($projectId, BackupGuardGoogle_Dataset $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Dataset($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all the datasets in the specified project to which the caller has read access; however, a
     * project owner can list (but not necessarily get) all datasets in his project. (datasets.list)
     *
     * @param string $projectId Project ID of the datasets to be listed
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @return BackupGuardGoogle_DatasetList
     */
    public function listDatasets($projectId, $optParams = array()) {
      $params = array('projectId' => $projectId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DatasetList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates information in an existing dataset, specified by datasetId. Properties not included in
     * the submitted resource will not be changed. If you include the access property without any values
     * assigned, the request will fail as you must specify at least one owner for a dataset. This method
     * supports patch semantics. (datasets.patch)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param BackupGuardGoogle_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Dataset
     */
    public function patch($projectId, $datasetId, BackupGuardGoogle_Dataset $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Dataset($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates information in an existing dataset, specified by datasetId. Properties not included in
     * the submitted resource will not be changed. If you include the access property without any values
     * assigned, the request will fail as you must specify at least one owner for a dataset.
     * (datasets.update)
     *
     * @param string $projectId Project ID of the dataset being updated
     * @param string $datasetId Dataset ID of the dataset being updated
     * @param BackupGuardGoogle_Dataset $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Dataset
     */
    public function update($projectId, $datasetId, BackupGuardGoogle_Dataset $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Dataset($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "jobs" collection of methods.
   * Typical usage is:
   *  <code>
   *   $bigqueryService = new BackupGuardGoogle_BigqueryService(...);
   *   $jobs = $bigqueryService->jobs;
   *  </code>
   */
  class BackupGuardGoogle_JobsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the specified job by ID. (jobs.get)
     *
     * @param string $projectId Project ID of the requested job
     * @param string $jobId Job ID of the requested job
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Job
     */
    public function get($projectId, $jobId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'jobId' => $jobId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Job($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the results of a query job. (jobs.getQueryResults)
     *
     * @param string $projectId Project ID of the query job
     * @param string $jobId Job ID of the query job
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to read
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @opt_param string startIndex Zero-based index of the starting row
     * @opt_param string timeoutMs How long to wait for the query to complete, in milliseconds, before returning. Default is to return immediately. If the timeout passes before the job completes, the request will fail with a TIMEOUT error
     * @return BackupGuardGoogle_GetQueryResultsResponse
     */
    public function getQueryResults($projectId, $jobId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'jobId' => $jobId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('getQueryResults', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_GetQueryResultsResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Starts a new asynchronous job. (jobs.insert)
     *
     * @param string $projectId Project ID of the project that will be billed for the job
     * @param BackupGuardGoogle_Job $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Job
     */
    public function insert($projectId, BackupGuardGoogle_Job $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Job($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all the Jobs in the specified project that were started by the user. (jobs.list)
     *
     * @param string $projectId Project ID of the jobs to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool allUsers Whether to display jobs owned by all users in the project. Default false
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @opt_param string projection Restrict information returned to a set of selected fields
     * @opt_param string stateFilter Filter for job state
     * @return BackupGuardGoogle_JobList
     */
    public function listJobs($projectId, $optParams = array()) {
      $params = array('projectId' => $projectId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_JobList($data);
      } else {
        return $data;
      }
    }
    /**
     * Runs a BigQuery SQL query synchronously and returns query results if the query completes within a
     * specified timeout. (jobs.query)
     *
     * @param string $projectId Project ID of the project billed for the query
     * @param BackupGuardGoogle_QueryRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_QueryResponse
     */
    public function query($projectId, BackupGuardGoogle_QueryRequest $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('query', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_QueryResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "projects" collection of methods.
   * Typical usage is:
   *  <code>
   *   $bigqueryService = new BackupGuardGoogle_BigqueryService(...);
   *   $projects = $bigqueryService->projects;
   *  </code>
   */
  class BackupGuardGoogle_ProjectsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Lists the projects to which you have at least read access. (projects.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @return BackupGuardGoogle_ProjectList
     */
    public function listProjects($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ProjectList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "tabledata" collection of methods.
   * Typical usage is:
   *  <code>
   *   $bigqueryService = new BackupGuardGoogle_BigqueryService(...);
   *   $tabledata = $bigqueryService->tabledata;
   *  </code>
   */
  class BackupGuardGoogle_TabledataServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves table data from a specified set of rows. (tabledata.list)
     *
     * @param string $projectId Project ID of the table to read
     * @param string $datasetId Dataset ID of the table to read
     * @param string $tableId Table ID of the table to read
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, identifying the result set
     * @opt_param string startIndex Zero-based index of the starting row to read
     * @return BackupGuardGoogle_TableDataList
     */
    public function listTabledata($projectId, $datasetId, $tableId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TableDataList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "tables" collection of methods.
   * Typical usage is:
   *  <code>
   *   $bigqueryService = new BackupGuardGoogle_BigqueryService(...);
   *   $tables = $bigqueryService->tables;
   *  </code>
   */
  class BackupGuardGoogle_TablesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the table specified by tableId from the dataset. If the table contains data, all the data
     * will be deleted. (tables.delete)
     *
     * @param string $projectId Project ID of the table to delete
     * @param string $datasetId Dataset ID of the table to delete
     * @param string $tableId Table ID of the table to delete
     * @param array $optParams Optional parameters.
     */
    public function delete($projectId, $datasetId, $tableId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets the specified table resource by table ID. This method does not return the data in the table,
     * it only returns the table resource, which describes the structure of this table. (tables.get)
     *
     * @param string $projectId Project ID of the requested table
     * @param string $datasetId Dataset ID of the requested table
     * @param string $tableId Table ID of the requested table
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function get($projectId, $datasetId, $tableId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new, empty table in the dataset. (tables.insert)
     *
     * @param string $projectId Project ID of the new table
     * @param string $datasetId Dataset ID of the new table
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function insert($projectId, $datasetId, BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all tables in the specified dataset. (tables.list)
     *
     * @param string $projectId Project ID of the tables to list
     * @param string $datasetId Dataset ID of the tables to list
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Page token, returned by a previous call, to request the next page of results
     * @return BackupGuardGoogle_TableList
     */
    public function listTables($projectId, $datasetId, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TableList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates information in an existing table, specified by tableId. This method supports patch
     * semantics. (tables.patch)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function patch($projectId, $datasetId, $tableId, BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates information in an existing table, specified by tableId. (tables.update)
     *
     * @param string $projectId Project ID of the table to update
     * @param string $datasetId Dataset ID of the table to update
     * @param string $tableId Table ID of the table to update
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function update($projectId, $datasetId, $tableId, BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Bigquery (v2).
 *
 * <p>
 * A data platform for customers to create, manage, share and query data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/bigquery/docs/overview" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_BigqueryService extends BackupGuardGoogle_Service {
  public $datasets;
  public $jobs;
  public $projects;
  public $tabledata;
  public $tables;
  /**
   * Constructs the internal representation of the Bigquery service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'bigquery/v2/';
    $this->version = 'v2';
    $this->serviceName = 'bigquery';

    $client->addService($this->serviceName, $this->version);
    $this->datasets = new BackupGuardGoogle_DatasetsServiceResource($this, $this->serviceName, 'datasets', json_decode('{"methods": {"delete": {"id": "bigquery.datasets.delete", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "DELETE", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "deleteContents": {"type": "boolean", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "get": {"id": "bigquery.datasets.get", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.datasets.insert", "path": "projects/{projectId}/datasets", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "list": {"id": "bigquery.datasets.list", "path": "projects/{projectId}/datasets", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DatasetList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "patch": {"id": "bigquery.datasets.patch", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "PATCH", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "update": {"id": "bigquery.datasets.update", "path": "projects/{projectId}/datasets/{datasetId}", "httpMethod": "PUT", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Dataset"}, "response": {"$ref": "Dataset"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
    $this->jobs = new BackupGuardGoogle_JobsServiceResource($this, $this->serviceName, 'jobs', json_decode('{"methods": {"get": {"id": "bigquery.jobs.get", "path": "projects/{projectId}/jobs/{jobId}", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "getQueryResults": {"id": "bigquery.jobs.getQueryResults", "path": "projects/{projectId}/queries/{jobId}", "httpMethod": "GET", "parameters": {"jobId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "string", "format": "uint64", "location": "query"}, "timeoutMs": {"type": "integer", "format": "uint32", "location": "query"}}, "response": {"$ref": "GetQueryResultsResponse"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.jobs.insert", "path": "projects/{projectId}/jobs", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Job"}, "response": {"$ref": "Job"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform", "https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "protocols": {"simple": {"multipart": true, "path": "/upload/bigquery/v2/projects/{projectId}/jobs"}, "resumable": {"multipart": true, "path": "/resumable/upload/bigquery/v2/projects/{projectId}/jobs"}}}}, "list": {"id": "bigquery.jobs.list", "path": "projects/{projectId}/jobs", "httpMethod": "GET", "parameters": {"allUsers": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["full", "minimal"], "location": "query"}, "stateFilter": {"type": "string", "enum": ["done", "pending", "running"], "repeated": true, "location": "query"}}, "response": {"$ref": "JobList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "query": {"id": "bigquery.jobs.query", "path": "projects/{projectId}/queries", "httpMethod": "POST", "parameters": {"projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "QueryRequest"}, "response": {"$ref": "QueryResponse"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
    $this->projects = new BackupGuardGoogle_ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"list": {"id": "bigquery.projects.list", "path": "projects", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "ProjectList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
    $this->tabledata = new BackupGuardGoogle_TabledataServiceResource($this, $this->serviceName, 'tabledata', json_decode('{"methods": {"list": {"id": "bigquery.tabledata.list", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}/data", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "string", "format": "uint64", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TableDataList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));
    $this->tables = new BackupGuardGoogle_TablesServiceResource($this, $this->serviceName, 'tables', json_decode('{"methods": {"delete": {"id": "bigquery.tables.delete", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "DELETE", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "get": {"id": "bigquery.tables.get", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "insert": {"id": "bigquery.tables.insert", "path": "projects/{projectId}/datasets/{datasetId}/tables", "httpMethod": "POST", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "list": {"id": "bigquery.tables.list", "path": "projects/{projectId}/datasets/{datasetId}/tables", "httpMethod": "GET", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projectId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TableList"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "patch": {"id": "bigquery.tables.patch", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "PATCH", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}, "update": {"id": "bigquery.tables.update", "path": "projects/{projectId}/datasets/{datasetId}/tables/{tableId}", "httpMethod": "PUT", "parameters": {"datasetId": {"type": "string", "required": true, "location": "path"}, "projectId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/bigquery", "https://www.googleapis.com/auth/cloud-platform"]}}}', true));

  }
}



class BackupGuardGoogle_Dataset extends BackupGuardGoogle_Model {
  protected $__accessType = 'BackupGuardGoogle_DatasetAccess';
  protected $__accessDataType = 'array';
  public $access;
  public $creationTime;
  protected $__datasetReferenceType = 'BackupGuardGoogle_DatasetReference';
  protected $__datasetReferenceDataType = '';
  public $datasetReference;
  public $description;
  public $etag;
  public $friendlyName;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $selfLink;
  public function setAccess(/* array(BackupGuardGoogle_DatasetAccess) */ $access) {
    $this->assertIsArray($access, 'BackupGuardGoogle_DatasetAccess', __METHOD__);
    $this->access = $access;
  }
  public function getAccess() {
    return $this->access;
  }
  public function setCreationTime( $creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setDatasetReference(BackupGuardGoogle_DatasetReference $datasetReference) {
    $this->datasetReference = $datasetReference;
  }
  public function getDatasetReference() {
    return $this->datasetReference;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setFriendlyName( $friendlyName) {
    $this->friendlyName = $friendlyName;
  }
  public function getFriendlyName() {
    return $this->friendlyName;
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
  public function setLastModifiedTime( $lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_DatasetAccess extends BackupGuardGoogle_Model {
  public $domain;
  public $groupByEmail;
  public $role;
  public $specialGroup;
  public $userByEmail;
  public function setDomain( $domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setGroupByEmail( $groupByEmail) {
    $this->groupByEmail = $groupByEmail;
  }
  public function getGroupByEmail() {
    return $this->groupByEmail;
  }
  public function setRole( $role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setSpecialGroup( $specialGroup) {
    $this->specialGroup = $specialGroup;
  }
  public function getSpecialGroup() {
    return $this->specialGroup;
  }
  public function setUserByEmail( $userByEmail) {
    $this->userByEmail = $userByEmail;
  }
  public function getUserByEmail() {
    return $this->userByEmail;
  }
}

class BackupGuardGoogle_DatasetList extends BackupGuardGoogle_Model {
  protected $__datasetsType = 'BackupGuardGoogle_DatasetListDatasets';
  protected $__datasetsDataType = 'array';
  public $datasets;
  public $etag;
  public $kind;
  public $nextPageToken;
  public function setDatasets(/* array(BackupGuardGoogle_DatasetListDatasets) */ $datasets) {
    $this->assertIsArray($datasets, 'BackupGuardGoogle_DatasetListDatasets', __METHOD__);
    $this->datasets = $datasets;
  }
  public function getDatasets() {
    return $this->datasets;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
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

class BackupGuardGoogle_DatasetListDatasets extends BackupGuardGoogle_Model {
  protected $__datasetReferenceType = 'BackupGuardGoogle_DatasetReference';
  protected $__datasetReferenceDataType = '';
  public $datasetReference;
  public $friendlyName;
  public $id;
  public $kind;
  public function setDatasetReference(BackupGuardGoogle_DatasetReference $datasetReference) {
    $this->datasetReference = $datasetReference;
  }
  public function getDatasetReference() {
    return $this->datasetReference;
  }
  public function setFriendlyName( $friendlyName) {
    $this->friendlyName = $friendlyName;
  }
  public function getFriendlyName() {
    return $this->friendlyName;
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
}

class BackupGuardGoogle_DatasetReference extends BackupGuardGoogle_Model {
  public $datasetId;
  public $projectId;
  public function setDatasetId( $datasetId) {
    $this->datasetId = $datasetId;
  }
  public function getDatasetId() {
    return $this->datasetId;
  }
  public function setProjectId( $projectId) {
    $this->projectId = $projectId;
  }
  public function getProjectId() {
    return $this->projectId;
  }
}

class BackupGuardGoogle_ErrorProto extends BackupGuardGoogle_Model {
  public $debugInfo;
  public $location;
  public $message;
  public $reason;
  public function setDebugInfo( $debugInfo) {
    $this->debugInfo = $debugInfo;
  }
  public function getDebugInfo() {
    return $this->debugInfo;
  }
  public function setLocation( $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setMessage( $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setReason( $reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
}

class BackupGuardGoogle_GetQueryResultsResponse extends BackupGuardGoogle_Model {
  public $cacheHit;
  public $etag;
  public $jobComplete;
  protected $__jobReferenceType = 'BackupGuardGoogle_JobReference';
  protected $__jobReferenceDataType = '';
  public $jobReference;
  public $kind;
  public $pageToken;
  protected $__rowsType = 'BackupGuardGoogle_TableRow';
  protected $__rowsDataType = 'array';
  public $rows;
  protected $__schemaType = 'BackupGuardGoogle_TableSchema';
  protected $__schemaDataType = '';
  public $schema;
  public $totalRows;
  public function setCacheHit( $cacheHit) {
    $this->cacheHit = $cacheHit;
  }
  public function getCacheHit() {
    return $this->cacheHit;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setJobComplete( $jobComplete) {
    $this->jobComplete = $jobComplete;
  }
  public function getJobComplete() {
    return $this->jobComplete;
  }
  public function setJobReference(BackupGuardGoogle_JobReference $jobReference) {
    $this->jobReference = $jobReference;
  }
  public function getJobReference() {
    return $this->jobReference;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPageToken( $pageToken) {
    $this->pageToken = $pageToken;
  }
  public function getPageToken() {
    return $this->pageToken;
  }
  public function setRows(/* array(BackupGuardGoogle_TableRow) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_TableRow', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSchema(BackupGuardGoogle_TableSchema $schema) {
    $this->schema = $schema;
  }
  public function getSchema() {
    return $this->schema;
  }
  public function setTotalRows( $totalRows) {
    $this->totalRows = $totalRows;
  }
  public function getTotalRows() {
    return $this->totalRows;
  }
}

class BackupGuardGoogle_Job extends BackupGuardGoogle_Model {
  protected $__configurationType = 'BackupGuardGoogle_JobConfiguration';
  protected $__configurationDataType = '';
  public $configuration;
  public $etag;
  public $id;
  protected $__jobReferenceType = 'BackupGuardGoogle_JobReference';
  protected $__jobReferenceDataType = '';
  public $jobReference;
  public $kind;
  public $selfLink;
  protected $__statisticsType = 'BackupGuardGoogle_JobStatistics';
  protected $__statisticsDataType = '';
  public $statistics;
  protected $__statusType = 'BackupGuardGoogle_JobStatus';
  protected $__statusDataType = '';
  public $status;
  public function setConfiguration(BackupGuardGoogle_JobConfiguration $configuration) {
    $this->configuration = $configuration;
  }
  public function getConfiguration() {
    return $this->configuration;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setJobReference(BackupGuardGoogle_JobReference $jobReference) {
    $this->jobReference = $jobReference;
  }
  public function getJobReference() {
    return $this->jobReference;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatistics(BackupGuardGoogle_JobStatistics $statistics) {
    $this->statistics = $statistics;
  }
  public function getStatistics() {
    return $this->statistics;
  }
  public function setStatus(BackupGuardGoogle_JobStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_JobConfiguration extends BackupGuardGoogle_Model {
  protected $__copyType = 'BackupGuardGoogle_JobConfigurationTableCopy';
  protected $__copyDataType = '';
  public $copy;
  public $dryRun;
  protected $__extractType = 'BackupGuardGoogle_JobConfigurationExtract';
  protected $__extractDataType = '';
  public $extract;
  protected $__linkType = 'BackupGuardGoogle_JobConfigurationLink';
  protected $__linkDataType = '';
  public $link;
  protected $__loadType = 'BackupGuardGoogle_JobConfigurationLoad';
  protected $__loadDataType = '';
  public $load;
  protected $__queryType = 'BackupGuardGoogle_JobConfigurationQuery';
  protected $__queryDataType = '';
  public $query;
  public function setCopy(BackupGuardGoogle_JobConfigurationTableCopy $copy) {
    $this->copy = $copy;
  }
  public function getCopy() {
    return $this->copy;
  }
  public function setDryRun( $dryRun) {
    $this->dryRun = $dryRun;
  }
  public function getDryRun() {
    return $this->dryRun;
  }
  public function setExtract(BackupGuardGoogle_JobConfigurationExtract $extract) {
    $this->extract = $extract;
  }
  public function getExtract() {
    return $this->extract;
  }
  public function setLink(BackupGuardGoogle_JobConfigurationLink $link) {
    $this->link = $link;
  }
  public function getLink() {
    return $this->link;
  }
  public function setLoad(BackupGuardGoogle_JobConfigurationLoad $load) {
    $this->load = $load;
  }
  public function getLoad() {
    return $this->load;
  }
  public function setQuery(BackupGuardGoogle_JobConfigurationQuery $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
}

class BackupGuardGoogle_JobConfigurationExtract extends BackupGuardGoogle_Model {
  public $destinationFormat;
  public $destinationUri;
  public $fieldDelimiter;
  public $printHeader;
  protected $__sourceTableType = 'BackupGuardGoogle_TableReference';
  protected $__sourceTableDataType = '';
  public $sourceTable;
  public function setDestinationFormat( $destinationFormat) {
    $this->destinationFormat = $destinationFormat;
  }
  public function getDestinationFormat() {
    return $this->destinationFormat;
  }
  public function setDestinationUri( $destinationUri) {
    $this->destinationUri = $destinationUri;
  }
  public function getDestinationUri() {
    return $this->destinationUri;
  }
  public function setFieldDelimiter( $fieldDelimiter) {
    $this->fieldDelimiter = $fieldDelimiter;
  }
  public function getFieldDelimiter() {
    return $this->fieldDelimiter;
  }
  public function setPrintHeader( $printHeader) {
    $this->printHeader = $printHeader;
  }
  public function getPrintHeader() {
    return $this->printHeader;
  }
  public function setSourceTable(BackupGuardGoogle_TableReference $sourceTable) {
    $this->sourceTable = $sourceTable;
  }
  public function getSourceTable() {
    return $this->sourceTable;
  }
}

class BackupGuardGoogle_JobConfigurationLink extends BackupGuardGoogle_Model {
  public $createDisposition;
  protected $__destinationTableType = 'BackupGuardGoogle_TableReference';
  protected $__destinationTableDataType = '';
  public $destinationTable;
  public $sourceUri;
  public $writeDisposition;
  public function setCreateDisposition( $createDisposition) {
    $this->createDisposition = $createDisposition;
  }
  public function getCreateDisposition() {
    return $this->createDisposition;
  }
  public function setDestinationTable(BackupGuardGoogle_TableReference $destinationTable) {
    $this->destinationTable = $destinationTable;
  }
  public function getDestinationTable() {
    return $this->destinationTable;
  }
  public function setSourceUri(/* array(BackupGuardGoogle_string) */ $sourceUri) {
    $this->assertIsArray($sourceUri, 'BackupGuardGoogle_string', __METHOD__);
    $this->sourceUri = $sourceUri;
  }
  public function getSourceUri() {
    return $this->sourceUri;
  }
  public function setWriteDisposition( $writeDisposition) {
    $this->writeDisposition = $writeDisposition;
  }
  public function getWriteDisposition() {
    return $this->writeDisposition;
  }
}

class BackupGuardGoogle_JobConfigurationLoad extends BackupGuardGoogle_Model {
  public $allowJaggedRows;
  public $allowQuotedNewlines;
  public $createDisposition;
  protected $__destinationTableType = 'BackupGuardGoogle_TableReference';
  protected $__destinationTableDataType = '';
  public $destinationTable;
  public $encoding;
  public $fieldDelimiter;
  public $maxBadRecords;
  public $quote;
  protected $__schemaType = 'BackupGuardGoogle_TableSchema';
  protected $__schemaDataType = '';
  public $schema;
  public $schemaInline;
  public $schemaInlineFormat;
  public $skipLeadingRows;
  public $sourceFormat;
  public $sourceUris;
  public $writeDisposition;
  public function setAllowJaggedRows( $allowJaggedRows) {
    $this->allowJaggedRows = $allowJaggedRows;
  }
  public function getAllowJaggedRows() {
    return $this->allowJaggedRows;
  }
  public function setAllowQuotedNewlines( $allowQuotedNewlines) {
    $this->allowQuotedNewlines = $allowQuotedNewlines;
  }
  public function getAllowQuotedNewlines() {
    return $this->allowQuotedNewlines;
  }
  public function setCreateDisposition( $createDisposition) {
    $this->createDisposition = $createDisposition;
  }
  public function getCreateDisposition() {
    return $this->createDisposition;
  }
  public function setDestinationTable(BackupGuardGoogle_TableReference $destinationTable) {
    $this->destinationTable = $destinationTable;
  }
  public function getDestinationTable() {
    return $this->destinationTable;
  }
  public function setEncoding( $encoding) {
    $this->encoding = $encoding;
  }
  public function getEncoding() {
    return $this->encoding;
  }
  public function setFieldDelimiter( $fieldDelimiter) {
    $this->fieldDelimiter = $fieldDelimiter;
  }
  public function getFieldDelimiter() {
    return $this->fieldDelimiter;
  }
  public function setMaxBadRecords( $maxBadRecords) {
    $this->maxBadRecords = $maxBadRecords;
  }
  public function getMaxBadRecords() {
    return $this->maxBadRecords;
  }
  public function setQuote( $quote) {
    $this->quote = $quote;
  }
  public function getQuote() {
    return $this->quote;
  }
  public function setSchema(BackupGuardGoogle_TableSchema $schema) {
    $this->schema = $schema;
  }
  public function getSchema() {
    return $this->schema;
  }
  public function setSchemaInline( $schemaInline) {
    $this->schemaInline = $schemaInline;
  }
  public function getSchemaInline() {
    return $this->schemaInline;
  }
  public function setSchemaInlineFormat( $schemaInlineFormat) {
    $this->schemaInlineFormat = $schemaInlineFormat;
  }
  public function getSchemaInlineFormat() {
    return $this->schemaInlineFormat;
  }
  public function setSkipLeadingRows( $skipLeadingRows) {
    $this->skipLeadingRows = $skipLeadingRows;
  }
  public function getSkipLeadingRows() {
    return $this->skipLeadingRows;
  }
  public function setSourceFormat( $sourceFormat) {
    $this->sourceFormat = $sourceFormat;
  }
  public function getSourceFormat() {
    return $this->sourceFormat;
  }
  public function setSourceUris(/* array(BackupGuardGoogle_string) */ $sourceUris) {
    $this->assertIsArray($sourceUris, 'BackupGuardGoogle_string', __METHOD__);
    $this->sourceUris = $sourceUris;
  }
  public function getSourceUris() {
    return $this->sourceUris;
  }
  public function setWriteDisposition( $writeDisposition) {
    $this->writeDisposition = $writeDisposition;
  }
  public function getWriteDisposition() {
    return $this->writeDisposition;
  }
}

class BackupGuardGoogle_JobConfigurationQuery extends BackupGuardGoogle_Model {
  public $allowLargeResults;
  public $createDisposition;
  protected $__defaultDatasetType = 'BackupGuardGoogle_DatasetReference';
  protected $__defaultDatasetDataType = '';
  public $defaultDataset;
  protected $__destinationTableType = 'BackupGuardGoogle_TableReference';
  protected $__destinationTableDataType = '';
  public $destinationTable;
  public $minCompletionRatio;
  public $preserveNulls;
  public $priority;
  public $query;
  public $useQueryCache;
  public $writeDisposition;
  public function setAllowLargeResults( $allowLargeResults) {
    $this->allowLargeResults = $allowLargeResults;
  }
  public function getAllowLargeResults() {
    return $this->allowLargeResults;
  }
  public function setCreateDisposition( $createDisposition) {
    $this->createDisposition = $createDisposition;
  }
  public function getCreateDisposition() {
    return $this->createDisposition;
  }
  public function setDefaultDataset(BackupGuardGoogle_DatasetReference $defaultDataset) {
    $this->defaultDataset = $defaultDataset;
  }
  public function getDefaultDataset() {
    return $this->defaultDataset;
  }
  public function setDestinationTable(BackupGuardGoogle_TableReference $destinationTable) {
    $this->destinationTable = $destinationTable;
  }
  public function getDestinationTable() {
    return $this->destinationTable;
  }
  public function setMinCompletionRatio( $minCompletionRatio) {
    $this->minCompletionRatio = $minCompletionRatio;
  }
  public function getMinCompletionRatio() {
    return $this->minCompletionRatio;
  }
  public function setPreserveNulls( $preserveNulls) {
    $this->preserveNulls = $preserveNulls;
  }
  public function getPreserveNulls() {
    return $this->preserveNulls;
  }
  public function setPriority( $priority) {
    $this->priority = $priority;
  }
  public function getPriority() {
    return $this->priority;
  }
  public function setQuery( $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setUseQueryCache( $useQueryCache) {
    $this->useQueryCache = $useQueryCache;
  }
  public function getUseQueryCache() {
    return $this->useQueryCache;
  }
  public function setWriteDisposition( $writeDisposition) {
    $this->writeDisposition = $writeDisposition;
  }
  public function getWriteDisposition() {
    return $this->writeDisposition;
  }
}

class BackupGuardGoogle_JobConfigurationTableCopy extends BackupGuardGoogle_Model {
  public $createDisposition;
  protected $__destinationTableType = 'BackupGuardGoogle_TableReference';
  protected $__destinationTableDataType = '';
  public $destinationTable;
  protected $__sourceTableType = 'BackupGuardGoogle_TableReference';
  protected $__sourceTableDataType = '';
  public $sourceTable;
  public $writeDisposition;
  public function setCreateDisposition( $createDisposition) {
    $this->createDisposition = $createDisposition;
  }
  public function getCreateDisposition() {
    return $this->createDisposition;
  }
  public function setDestinationTable(BackupGuardGoogle_TableReference $destinationTable) {
    $this->destinationTable = $destinationTable;
  }
  public function getDestinationTable() {
    return $this->destinationTable;
  }
  public function setSourceTable(BackupGuardGoogle_TableReference $sourceTable) {
    $this->sourceTable = $sourceTable;
  }
  public function getSourceTable() {
    return $this->sourceTable;
  }
  public function setWriteDisposition( $writeDisposition) {
    $this->writeDisposition = $writeDisposition;
  }
  public function getWriteDisposition() {
    return $this->writeDisposition;
  }
}

class BackupGuardGoogle_JobList extends BackupGuardGoogle_Model {
  public $etag;
  protected $__jobsType = 'BackupGuardGoogle_JobListJobs';
  protected $__jobsDataType = 'array';
  public $jobs;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setJobs(/* array(BackupGuardGoogle_JobListJobs) */ $jobs) {
    $this->assertIsArray($jobs, 'BackupGuardGoogle_JobListJobs', __METHOD__);
    $this->jobs = $jobs;
  }
  public function getJobs() {
    return $this->jobs;
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
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class BackupGuardGoogle_JobListJobs extends BackupGuardGoogle_Model {
  protected $__configurationType = 'BackupGuardGoogle_JobConfiguration';
  protected $__configurationDataType = '';
  public $configuration;
  protected $__errorResultType = 'BackupGuardGoogle_ErrorProto';
  protected $__errorResultDataType = '';
  public $errorResult;
  public $id;
  protected $__jobReferenceType = 'BackupGuardGoogle_JobReference';
  protected $__jobReferenceDataType = '';
  public $jobReference;
  public $kind;
  public $state;
  protected $__statisticsType = 'BackupGuardGoogle_JobStatistics';
  protected $__statisticsDataType = '';
  public $statistics;
  protected $__statusType = 'BackupGuardGoogle_JobStatus';
  protected $__statusDataType = '';
  public $status;
  public function setConfiguration(BackupGuardGoogle_JobConfiguration $configuration) {
    $this->configuration = $configuration;
  }
  public function getConfiguration() {
    return $this->configuration;
  }
  public function setErrorResult(BackupGuardGoogle_ErrorProto $errorResult) {
    $this->errorResult = $errorResult;
  }
  public function getErrorResult() {
    return $this->errorResult;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setJobReference(BackupGuardGoogle_JobReference $jobReference) {
    $this->jobReference = $jobReference;
  }
  public function getJobReference() {
    return $this->jobReference;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
  public function setStatistics(BackupGuardGoogle_JobStatistics $statistics) {
    $this->statistics = $statistics;
  }
  public function getStatistics() {
    return $this->statistics;
  }
  public function setStatus(BackupGuardGoogle_JobStatus $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_JobReference extends BackupGuardGoogle_Model {
  public $jobId;
  public $projectId;
  public function setJobId( $jobId) {
    $this->jobId = $jobId;
  }
  public function getJobId() {
    return $this->jobId;
  }
  public function setProjectId( $projectId) {
    $this->projectId = $projectId;
  }
  public function getProjectId() {
    return $this->projectId;
  }
}

class BackupGuardGoogle_JobStatistics extends BackupGuardGoogle_Model {
  public $endTime;
  protected $__loadType = 'BackupGuardGoogle_JobStatistics3';
  protected $__loadDataType = '';
  public $load;
  protected $__queryType = 'BackupGuardGoogle_JobStatistics2';
  protected $__queryDataType = '';
  public $query;
  public $startTime;
  public $totalBytesProcessed;
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setLoad(BackupGuardGoogle_JobStatistics3 $load) {
    $this->load = $load;
  }
  public function getLoad() {
    return $this->load;
  }
  public function setQuery(BackupGuardGoogle_JobStatistics2 $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
  public function setTotalBytesProcessed( $totalBytesProcessed) {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  public function getTotalBytesProcessed() {
    return $this->totalBytesProcessed;
  }
}

class BackupGuardGoogle_JobStatistics2 extends BackupGuardGoogle_Model {
  public $cacheHit;
  public $completionRatio;
  public $totalBytesProcessed;
  public function setCacheHit( $cacheHit) {
    $this->cacheHit = $cacheHit;
  }
  public function getCacheHit() {
    return $this->cacheHit;
  }
  public function setCompletionRatio( $completionRatio) {
    $this->completionRatio = $completionRatio;
  }
  public function getCompletionRatio() {
    return $this->completionRatio;
  }
  public function setTotalBytesProcessed( $totalBytesProcessed) {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  public function getTotalBytesProcessed() {
    return $this->totalBytesProcessed;
  }
}

class BackupGuardGoogle_JobStatistics3 extends BackupGuardGoogle_Model {
  public $inputFileBytes;
  public $inputFiles;
  public $outputBytes;
  public $outputRows;
  public function setInputFileBytes( $inputFileBytes) {
    $this->inputFileBytes = $inputFileBytes;
  }
  public function getInputFileBytes() {
    return $this->inputFileBytes;
  }
  public function setInputFiles( $inputFiles) {
    $this->inputFiles = $inputFiles;
  }
  public function getInputFiles() {
    return $this->inputFiles;
  }
  public function setOutputBytes( $outputBytes) {
    $this->outputBytes = $outputBytes;
  }
  public function getOutputBytes() {
    return $this->outputBytes;
  }
  public function setOutputRows( $outputRows) {
    $this->outputRows = $outputRows;
  }
  public function getOutputRows() {
    return $this->outputRows;
  }
}

class BackupGuardGoogle_JobStatus extends BackupGuardGoogle_Model {
  protected $__errorResultType = 'BackupGuardGoogle_ErrorProto';
  protected $__errorResultDataType = '';
  public $errorResult;
  protected $__errorsType = 'BackupGuardGoogle_ErrorProto';
  protected $__errorsDataType = 'array';
  public $errors;
  public $state;
  public function setErrorResult(BackupGuardGoogle_ErrorProto $errorResult) {
    $this->errorResult = $errorResult;
  }
  public function getErrorResult() {
    return $this->errorResult;
  }
  public function setErrors(/* array(BackupGuardGoogle_ErrorProto) */ $errors) {
    $this->assertIsArray($errors, 'BackupGuardGoogle_ErrorProto', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class BackupGuardGoogle_ProjectList extends BackupGuardGoogle_Model {
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $__projectsType = 'BackupGuardGoogle_ProjectListProjects';
  protected $__projectsDataType = 'array';
  public $projects;
  public $totalItems;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
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
  public function setProjects(/* array(BackupGuardGoogle_ProjectListProjects) */ $projects) {
    $this->assertIsArray($projects, 'BackupGuardGoogle_ProjectListProjects', __METHOD__);
    $this->projects = $projects;
  }
  public function getProjects() {
    return $this->projects;
  }
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class BackupGuardGoogle_ProjectListProjects extends BackupGuardGoogle_Model {
  public $friendlyName;
  public $id;
  public $kind;
  public $numericId;
  protected $__projectReferenceType = 'BackupGuardGoogle_ProjectReference';
  protected $__projectReferenceDataType = '';
  public $projectReference;
  public function setFriendlyName( $friendlyName) {
    $this->friendlyName = $friendlyName;
  }
  public function getFriendlyName() {
    return $this->friendlyName;
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
  public function setNumericId( $numericId) {
    $this->numericId = $numericId;
  }
  public function getNumericId() {
    return $this->numericId;
  }
  public function setProjectReference(BackupGuardGoogle_ProjectReference $projectReference) {
    $this->projectReference = $projectReference;
  }
  public function getProjectReference() {
    return $this->projectReference;
  }
}

class BackupGuardGoogle_ProjectReference extends BackupGuardGoogle_Model {
  public $projectId;
  public function setProjectId( $projectId) {
    $this->projectId = $projectId;
  }
  public function getProjectId() {
    return $this->projectId;
  }
}

class BackupGuardGoogle_QueryRequest extends BackupGuardGoogle_Model {
  protected $__defaultDatasetType = 'BackupGuardGoogle_DatasetReference';
  protected $__defaultDatasetDataType = '';
  public $defaultDataset;
  public $dryRun;
  public $kind;
  public $maxResults;
  public $minCompletionRatio;
  public $preserveNulls;
  public $query;
  public $timeoutMs;
  public $useQueryCache;
  public function setDefaultDataset(BackupGuardGoogle_DatasetReference $defaultDataset) {
    $this->defaultDataset = $defaultDataset;
  }
  public function getDefaultDataset() {
    return $this->defaultDataset;
  }
  public function setDryRun( $dryRun) {
    $this->dryRun = $dryRun;
  }
  public function getDryRun() {
    return $this->dryRun;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaxResults( $maxResults) {
    $this->maxResults = $maxResults;
  }
  public function getMaxResults() {
    return $this->maxResults;
  }
  public function setMinCompletionRatio( $minCompletionRatio) {
    $this->minCompletionRatio = $minCompletionRatio;
  }
  public function getMinCompletionRatio() {
    return $this->minCompletionRatio;
  }
  public function setPreserveNulls( $preserveNulls) {
    $this->preserveNulls = $preserveNulls;
  }
  public function getPreserveNulls() {
    return $this->preserveNulls;
  }
  public function setQuery( $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setTimeoutMs( $timeoutMs) {
    $this->timeoutMs = $timeoutMs;
  }
  public function getTimeoutMs() {
    return $this->timeoutMs;
  }
  public function setUseQueryCache( $useQueryCache) {
    $this->useQueryCache = $useQueryCache;
  }
  public function getUseQueryCache() {
    return $this->useQueryCache;
  }
}

class BackupGuardGoogle_QueryResponse extends BackupGuardGoogle_Model {
  public $cacheHit;
  public $jobComplete;
  protected $__jobReferenceType = 'BackupGuardGoogle_JobReference';
  protected $__jobReferenceDataType = '';
  public $jobReference;
  public $kind;
  public $pageToken;
  protected $__rowsType = 'BackupGuardGoogle_TableRow';
  protected $__rowsDataType = 'array';
  public $rows;
  protected $__schemaType = 'BackupGuardGoogle_TableSchema';
  protected $__schemaDataType = '';
  public $schema;
  public $totalBytesProcessed;
  public $totalRows;
  public function setCacheHit( $cacheHit) {
    $this->cacheHit = $cacheHit;
  }
  public function getCacheHit() {
    return $this->cacheHit;
  }
  public function setJobComplete( $jobComplete) {
    $this->jobComplete = $jobComplete;
  }
  public function getJobComplete() {
    return $this->jobComplete;
  }
  public function setJobReference(BackupGuardGoogle_JobReference $jobReference) {
    $this->jobReference = $jobReference;
  }
  public function getJobReference() {
    return $this->jobReference;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPageToken( $pageToken) {
    $this->pageToken = $pageToken;
  }
  public function getPageToken() {
    return $this->pageToken;
  }
  public function setRows(/* array(BackupGuardGoogle_TableRow) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_TableRow', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSchema(BackupGuardGoogle_TableSchema $schema) {
    $this->schema = $schema;
  }
  public function getSchema() {
    return $this->schema;
  }
  public function setTotalBytesProcessed( $totalBytesProcessed) {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }
  public function getTotalBytesProcessed() {
    return $this->totalBytesProcessed;
  }
  public function setTotalRows( $totalRows) {
    $this->totalRows = $totalRows;
  }
  public function getTotalRows() {
    return $this->totalRows;
  }
}

class BackupGuardGoogle_Table extends BackupGuardGoogle_Model {
  public $creationTime;
  public $description;
  public $etag;
  public $expirationTime;
  public $friendlyName;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $numBytes;
  public $numRows;
  protected $__schemaType = 'BackupGuardGoogle_TableSchema';
  protected $__schemaDataType = '';
  public $schema;
  public $selfLink;
  protected $__tableReferenceType = 'BackupGuardGoogle_TableReference';
  protected $__tableReferenceDataType = '';
  public $tableReference;
  public function setCreationTime( $creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setExpirationTime( $expirationTime) {
    $this->expirationTime = $expirationTime;
  }
  public function getExpirationTime() {
    return $this->expirationTime;
  }
  public function setFriendlyName( $friendlyName) {
    $this->friendlyName = $friendlyName;
  }
  public function getFriendlyName() {
    return $this->friendlyName;
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
  public function setLastModifiedTime( $lastModifiedTime) {
    $this->lastModifiedTime = $lastModifiedTime;
  }
  public function getLastModifiedTime() {
    return $this->lastModifiedTime;
  }
  public function setNumBytes( $numBytes) {
    $this->numBytes = $numBytes;
  }
  public function getNumBytes() {
    return $this->numBytes;
  }
  public function setNumRows( $numRows) {
    $this->numRows = $numRows;
  }
  public function getNumRows() {
    return $this->numRows;
  }
  public function setSchema(BackupGuardGoogle_TableSchema $schema) {
    $this->schema = $schema;
  }
  public function getSchema() {
    return $this->schema;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTableReference(BackupGuardGoogle_TableReference $tableReference) {
    $this->tableReference = $tableReference;
  }
  public function getTableReference() {
    return $this->tableReference;
  }
}

class BackupGuardGoogle_TableCell extends BackupGuardGoogle_Model {
  public $v;
  public function setV( $v) {
    $this->v = $v;
  }
  public function getV() {
    return $this->v;
  }
}

class BackupGuardGoogle_TableDataList extends BackupGuardGoogle_Model {
  public $etag;
  public $kind;
  public $pageToken;
  protected $__rowsType = 'BackupGuardGoogle_TableRow';
  protected $__rowsDataType = 'array';
  public $rows;
  public $totalRows;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPageToken( $pageToken) {
    $this->pageToken = $pageToken;
  }
  public function getPageToken() {
    return $this->pageToken;
  }
  public function setRows(/* array(BackupGuardGoogle_TableRow) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_TableRow', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setTotalRows( $totalRows) {
    $this->totalRows = $totalRows;
  }
  public function getTotalRows() {
    return $this->totalRows;
  }
}

class BackupGuardGoogle_TableFieldSchema extends BackupGuardGoogle_Model {
  protected $__fieldsType = 'BackupGuardGoogle_TableFieldSchema';
  protected $__fieldsDataType = 'array';
  public $fields;
  public $mode;
  public $name;
  public $type;
  public function setFields(/* array(BackupGuardGoogle_TableFieldSchema) */ $fields) {
    $this->assertIsArray($fields, 'BackupGuardGoogle_TableFieldSchema', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
  public function setMode( $mode) {
    $this->mode = $mode;
  }
  public function getMode() {
    return $this->mode;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_TableList extends BackupGuardGoogle_Model {
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $__tablesType = 'BackupGuardGoogle_TableListTables';
  protected $__tablesDataType = 'array';
  public $tables;
  public $totalItems;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
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
  public function setTables(/* array(BackupGuardGoogle_TableListTables) */ $tables) {
    $this->assertIsArray($tables, 'BackupGuardGoogle_TableListTables', __METHOD__);
    $this->tables = $tables;
  }
  public function getTables() {
    return $this->tables;
  }
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class BackupGuardGoogle_TableListTables extends BackupGuardGoogle_Model {
  public $friendlyName;
  public $id;
  public $kind;
  protected $__tableReferenceType = 'BackupGuardGoogle_TableReference';
  protected $__tableReferenceDataType = '';
  public $tableReference;
  public function setFriendlyName( $friendlyName) {
    $this->friendlyName = $friendlyName;
  }
  public function getFriendlyName() {
    return $this->friendlyName;
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
  public function setTableReference(BackupGuardGoogle_TableReference $tableReference) {
    $this->tableReference = $tableReference;
  }
  public function getTableReference() {
    return $this->tableReference;
  }
}

class BackupGuardGoogle_TableReference extends BackupGuardGoogle_Model {
  public $datasetId;
  public $projectId;
  public $tableId;
  public function setDatasetId( $datasetId) {
    $this->datasetId = $datasetId;
  }
  public function getDatasetId() {
    return $this->datasetId;
  }
  public function setProjectId( $projectId) {
    $this->projectId = $projectId;
  }
  public function getProjectId() {
    return $this->projectId;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
}

class BackupGuardGoogle_TableRow extends BackupGuardGoogle_Model {
  protected $__fType = 'BackupGuardGoogle_TableCell';
  protected $__fDataType = 'array';
  public $f;
  public function setF(/* array(BackupGuardGoogle_TableCell) */ $f) {
    $this->assertIsArray($f, 'BackupGuardGoogle_TableCell', __METHOD__);
    $this->f = $f;
  }
  public function getF() {
    return $this->f;
  }
}

class BackupGuardGoogle_TableSchema extends BackupGuardGoogle_Model {
  protected $__fieldsType = 'BackupGuardGoogle_TableFieldSchema';
  protected $__fieldsDataType = 'array';
  public $fields;
  public function setFields(/* array(BackupGuardGoogle_TableFieldSchema) */ $fields) {
    $this->assertIsArray($fields, 'BackupGuardGoogle_TableFieldSchema', __METHOD__);
    $this->fields = $fields;
  }
  public function getFields() {
    return $this->fields;
  }
}
