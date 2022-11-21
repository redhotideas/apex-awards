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
   * The "column" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new BackupGuardGoogle_FusiontablesService(...);
   *   $column = $fusiontablesService->column;
   *  </code>
   */
  class BackupGuardGoogle_ColumnServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the column. (column.delete)
     *
     * @param string $tableId Table from which the column is being deleted.
     * @param string $columnId Name or identifier for the column being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves a specific column by its id. (column.get)
     *
     * @param string $tableId Table to which the column belongs.
     * @param string $columnId Name or identifier for the column that is being requested.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Column
     */
    public function get($tableId, $columnId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds a new column to the table. (column.insert)
     *
     * @param string $tableId Table for which a new column is being added.
     * @param BackupGuardGoogle_Column $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Column
     */
    public function insert($tableId, BackupGuardGoogle_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of columns. (column.list)
     *
     * @param string $tableId Table whose columns are being listed.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of columns to return. Optional. Default is 5.
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @return BackupGuardGoogle_ColumnList
     */
    public function listColumn($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ColumnList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. This method supports patch semantics.
     * (column.patch)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param BackupGuardGoogle_Column $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Column
     */
    public function patch($tableId, $columnId, BackupGuardGoogle_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Column($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the name or type of an existing column. (column.update)
     *
     * @param string $tableId Table for which the column is being updated.
     * @param string $columnId Name or identifier for the column that is being updated.
     * @param BackupGuardGoogle_Column $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Column
     */
    public function update($tableId, $columnId, BackupGuardGoogle_Column $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'columnId' => $columnId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Column($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "query" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new BackupGuardGoogle_FusiontablesService(...);
   *   $query = $fusiontablesService->query;
   *  </code>
   */
  class BackupGuardGoogle_QueryServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE/CREATE statement. (query.sql)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE/CREATE statement.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @return BackupGuardGoogle_Sqlresponse
     */
    public function sql($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sql', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Sqlresponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
     *
     * @param string $sql An SQL SELECT/SHOW/DESCRIBE statement.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool hdrs Should column names be included (in the first row)?. Default is true.
     * @opt_param bool typed Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed geometries for KML values? Default is true.
     * @return BackupGuardGoogle_Sqlresponse
     */
    public function sqlGet($sql, $optParams = array()) {
      $params = array('sql' => $sql);
      $params = array_merge($params, $optParams);
      $data = $this->__call('sqlGet', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Sqlresponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "style" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new BackupGuardGoogle_FusiontablesService(...);
   *   $style = $fusiontablesService->style;
   *  </code>
   */
  class BackupGuardGoogle_StyleServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes a style. (style.delete)
     *
     * @param string $tableId Table from which the style is being deleted
     * @param int $styleId Identifier (within a table) for the style being deleted
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a specific style. (style.get)
     *
     * @param string $tableId Table to which the requested style belongs
     * @param int $styleId Identifier (integer) for a specific style in a table
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_StyleSetting
     */
    public function get($tableId, $styleId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds a new style for the table. (style.insert)
     *
     * @param string $tableId Table for which a new style is being added
     * @param BackupGuardGoogle_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_StyleSetting
     */
    public function insert($tableId, BackupGuardGoogle_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of styles. (style.list)
     *
     * @param string $tableId Table whose styles are being listed
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @return BackupGuardGoogle_StyleSettingList
     */
    public function listStyle($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_StyleSettingList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. This method supports patch semantics. (style.patch)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param BackupGuardGoogle_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_StyleSetting
     */
    public function patch($tableId, $styleId, BackupGuardGoogle_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_StyleSetting($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing style. (style.update)
     *
     * @param string $tableId Table whose style is being updated.
     * @param int $styleId Identifier (within a table) for the style being updated.
     * @param BackupGuardGoogle_StyleSetting $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_StyleSetting
     */
    public function update($tableId, $styleId, BackupGuardGoogle_StyleSetting $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'styleId' => $styleId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_StyleSetting($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "table" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new BackupGuardGoogle_FusiontablesService(...);
   *   $table = $fusiontablesService->table;
   *  </code>
   */
  class BackupGuardGoogle_TableServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Copies a table. (table.copy)
     *
     * @param string $tableId ID of the table that is being copied.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool copyPresentation Whether to also copy tabs, styles, and templates. Default is false.
     * @return BackupGuardGoogle_Table
     */
    public function copy($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('copy', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes a table. (table.delete)
     *
     * @param string $tableId ID of the table that is being deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves a specific table by its id. (table.get)
     *
     * @param string $tableId Identifier(ID) for the table being requested.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function get($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Import more rows into a table. (table.importRows)
     *
     * @param string $tableId The table into which new rows are being imported.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string delimiter The delimiter used to separate cell values. This can only consist of a single character. Default is ','.
     * @opt_param string encoding The encoding of the content. Default is UTF-8. Use 'auto-detect' if you are unsure of the encoding.
     * @opt_param int endLine The index of the last line from which to start importing, exclusive. Thus, the number of imported lines is endLine - startLine. If this parameter is not provided, the file will be imported until the last line of the file. If endLine is negative, then the imported content will exclude the last endLine lines. That is, if endline is negative, no line will be imported whose index is greater than N + endLine where N is the number of lines in the file, and the number of imported lines will be N + endLine - startLine.
     * @opt_param bool isStrict Whether the CSV must have the same number of values for each row. If false, rows with fewer values will be padded with empty values. Default is true.
     * @opt_param int startLine The index of the first line from which to start importing, inclusive. Default is 0.
     * @return BackupGuardGoogle_Import
     */
    public function importRows($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('importRows', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Import($data);
      } else {
        return $data;
      }
    }
    /**
     * Import a new table. (table.importTable)
     *
     * @param string $name The name to be assigned to the new table.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string delimiter The delimiter used to separate cell values. This can only consist of a single character. Default is ','.
     * @opt_param string encoding The encoding of the content. Default is UTF-8. Use 'auto-detect' if you are unsure of the encoding.
     * @return BackupGuardGoogle_Table
     */
    public function importTable($name, $optParams = array()) {
      $params = array('name' => $name);
      $params = array_merge($params, $optParams);
      $data = $this->__call('importTable', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new table. (table.insert)
     *
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Table
     */
    public function insert(BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of tables a user owns. (table.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of styles to return. Optional. Default is 5.
     * @opt_param string pageToken Continuation token specifying which result page to return. Optional.
     * @return BackupGuardGoogle_TableList
     */
    public function listTable($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TableList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. This method supports patch semantics. (table.patch)
     *
     * @param string $tableId ID of the table that is being updated.
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return BackupGuardGoogle_Table
     */
    public function patch($tableId, BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Table($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing table. Unless explicitly requested, only the name, description, and
     * attribution will be updated. (table.update)
     *
     * @param string $tableId ID of the table that is being updated.
     * @param BackupGuardGoogle_Table $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool replaceViewDefinition Should the view definition also be updated? The specified view definition replaces the existing one. Only a view can be updated with a new definition.
     * @return BackupGuardGoogle_Table
     */
    public function update($tableId, BackupGuardGoogle_Table $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
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
   * The "template" collection of methods.
   * Typical usage is:
   *  <code>
   *   $fusiontablesService = new BackupGuardGoogle_FusiontablesService(...);
   *   $template = $fusiontablesService->template;
   *  </code>
   */
  class BackupGuardGoogle_TemplateServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes a template (template.delete)
     *
     * @param string $tableId Table from which the template is being deleted
     * @param int $templateId Identifier for the template which is being deleted
     * @param array $optParams Optional parameters.
     */
    public function delete($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves a specific template by its id (template.get)
     *
     * @param string $tableId Table to which the template belongs
     * @param int $templateId Identifier for the template that is being requested
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Template
     */
    public function get($tableId, $templateId, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new template for the table. (template.insert)
     *
     * @param string $tableId Table for which a new template is being created
     * @param BackupGuardGoogle_Template $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Template
     */
    public function insert($tableId, BackupGuardGoogle_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of templates. (template.list)
     *
     * @param string $tableId Identifier for the table whose templates are being requested
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of templates to return. Optional. Default is 5.
     * @opt_param string pageToken Continuation token specifying which results page to return. Optional.
     * @return BackupGuardGoogle_TemplateList
     */
    public function listTemplate($tableId, $optParams = array()) {
      $params = array('tableId' => $tableId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TemplateList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template. This method supports patch semantics. (template.patch)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param BackupGuardGoogle_Template $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Template
     */
    public function patch($tableId, $templateId, BackupGuardGoogle_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Template($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing template (template.update)
     *
     * @param string $tableId Table to which the updated template belongs
     * @param int $templateId Identifier for the template that is being updated
     * @param BackupGuardGoogle_Template $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Template
     */
    public function update($tableId, $templateId, BackupGuardGoogle_Template $postBody, $optParams = array()) {
      $params = array('tableId' => $tableId, 'templateId' => $templateId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Template($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Fusiontables (v1).
 *
 * <p>
 * API for working with Fusion Tables data.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/fusiontables" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_FusiontablesService extends BackupGuardGoogle_Service {
  public $column;
  public $query;
  public $style;
  public $table;
  public $template;
  /**
   * Constructs the internal representation of the Fusiontables service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'fusiontables/v1/';
    $this->version = 'v1';
    $this->serviceName = 'fusiontables';

    $client->addService($this->serviceName, $this->version);
    $this->column = new BackupGuardGoogle_ColumnServiceResource($this, $this->serviceName, 'column', json_decode('{"methods": {"delete": {"id": "fusiontables.column.delete", "path": "tables/{tableId}/columns/{columnId}", "httpMethod": "DELETE", "parameters": {"columnId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "get": {"id": "fusiontables.column.get", "path": "tables/{tableId}/columns/{columnId}", "httpMethod": "GET", "parameters": {"columnId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Column"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "insert": {"id": "fusiontables.column.insert", "path": "tables/{tableId}/columns", "httpMethod": "POST", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "list": {"id": "fusiontables.column.list", "path": "tables/{tableId}/columns", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ColumnList"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "patch": {"id": "fusiontables.column.patch", "path": "tables/{tableId}/columns/{columnId}", "httpMethod": "PATCH", "parameters": {"columnId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "update": {"id": "fusiontables.column.update", "path": "tables/{tableId}/columns/{columnId}", "httpMethod": "PUT", "parameters": {"columnId": {"type": "string", "required": true, "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Column"}, "response": {"$ref": "Column"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}}}', true));
    $this->query = new BackupGuardGoogle_QueryServiceResource($this, $this->serviceName, 'query', json_decode('{"methods": {"sql": {"id": "fusiontables.query.sql", "path": "query", "httpMethod": "POST", "parameters": {"hdrs": {"type": "boolean", "location": "query"}, "sql": {"type": "string", "required": true, "location": "query"}, "typed": {"type": "boolean", "location": "query"}}, "response": {"$ref": "Sqlresponse"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "sqlGet": {"id": "fusiontables.query.sqlGet", "path": "query", "httpMethod": "GET", "parameters": {"hdrs": {"type": "boolean", "location": "query"}, "sql": {"type": "string", "required": true, "location": "query"}, "typed": {"type": "boolean", "location": "query"}}, "response": {"$ref": "Sqlresponse"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}}}', true));
    $this->style = new BackupGuardGoogle_StyleServiceResource($this, $this->serviceName, 'style', json_decode('{"methods": {"delete": {"id": "fusiontables.style.delete", "path": "tables/{tableId}/styles/{styleId}", "httpMethod": "DELETE", "parameters": {"styleId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "get": {"id": "fusiontables.style.get", "path": "tables/{tableId}/styles/{styleId}", "httpMethod": "GET", "parameters": {"styleId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "StyleSetting"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "insert": {"id": "fusiontables.style.insert", "path": "tables/{tableId}/styles", "httpMethod": "POST", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "list": {"id": "fusiontables.style.list", "path": "tables/{tableId}/styles", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "StyleSettingList"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "patch": {"id": "fusiontables.style.patch", "path": "tables/{tableId}/styles/{styleId}", "httpMethod": "PATCH", "parameters": {"styleId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "update": {"id": "fusiontables.style.update", "path": "tables/{tableId}/styles/{styleId}", "httpMethod": "PUT", "parameters": {"styleId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "StyleSetting"}, "response": {"$ref": "StyleSetting"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}}}', true));
    $this->table = new BackupGuardGoogle_TableServiceResource($this, $this->serviceName, 'table', json_decode('{"methods": {"copy": {"id": "fusiontables.table.copy", "path": "tables/{tableId}/copy", "httpMethod": "POST", "parameters": {"copyPresentation": {"type": "boolean", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "delete": {"id": "fusiontables.table.delete", "path": "tables/{tableId}", "httpMethod": "DELETE", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "get": {"id": "fusiontables.table.get", "path": "tables/{tableId}", "httpMethod": "GET", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "importRows": {"id": "fusiontables.table.importRows", "path": "tables/{tableId}/import", "httpMethod": "POST", "parameters": {"delimiter": {"type": "string", "location": "query"}, "encoding": {"type": "string", "location": "query"}, "endLine": {"type": "integer", "format": "int32", "location": "query"}, "isStrict": {"type": "boolean", "location": "query"}, "startLine": {"type": "integer", "format": "int32", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Import"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "100MB", "protocols": {"simple": {"multipart": true, "path": "/upload/fusiontables/v1/tables/{tableId}/import"}, "resumable": {"multipart": true, "path": "/resumable/upload/fusiontables/v1/tables/{tableId}/import"}}}}, "importTable": {"id": "fusiontables.table.importTable", "path": "tables/import", "httpMethod": "POST", "parameters": {"delimiter": {"type": "string", "location": "query"}, "encoding": {"type": "string", "location": "query"}, "name": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "100MB", "protocols": {"simple": {"multipart": true, "path": "/upload/fusiontables/v1/tables/import"}, "resumable": {"multipart": true, "path": "/resumable/upload/fusiontables/v1/tables/import"}}}}, "insert": {"id": "fusiontables.table.insert", "path": "tables", "httpMethod": "POST", "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "list": {"id": "fusiontables.table.list", "path": "tables", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "TableList"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "patch": {"id": "fusiontables.table.patch", "path": "tables/{tableId}", "httpMethod": "PATCH", "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "update": {"id": "fusiontables.table.update", "path": "tables/{tableId}", "httpMethod": "PUT", "parameters": {"replaceViewDefinition": {"type": "boolean", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Table"}, "response": {"$ref": "Table"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}}}', true));
    $this->template = new BackupGuardGoogle_TemplateServiceResource($this, $this->serviceName, 'template', json_decode('{"methods": {"delete": {"id": "fusiontables.template.delete", "path": "tables/{tableId}/templates/{templateId}", "httpMethod": "DELETE", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}, "templateId": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "get": {"id": "fusiontables.template.get", "path": "tables/{tableId}/templates/{templateId}", "httpMethod": "GET", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}, "templateId": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "response": {"$ref": "Template"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "insert": {"id": "fusiontables.template.insert", "path": "tables/{tableId}/templates", "httpMethod": "POST", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "list": {"id": "fusiontables.template.list", "path": "tables/{tableId}/templates", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "tableId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TemplateList"}, "scopes": ["https://www.googleapis.com/auth/fusiontables", "https://www.googleapis.com/auth/fusiontables.readonly"]}, "patch": {"id": "fusiontables.template.patch", "path": "tables/{tableId}/templates/{templateId}", "httpMethod": "PATCH", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}, "templateId": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}, "update": {"id": "fusiontables.template.update", "path": "tables/{tableId}/templates/{templateId}", "httpMethod": "PUT", "parameters": {"tableId": {"type": "string", "required": true, "location": "path"}, "templateId": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Template"}, "response": {"$ref": "Template"}, "scopes": ["https://www.googleapis.com/auth/fusiontables"]}}}', true));

  }
}



class BackupGuardGoogle_Bucket extends BackupGuardGoogle_Model {
  public $color;
  public $icon;
  public $max;
  public $min;
  public $opacity;
  public $weight;
  public function setColor( $color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setIcon( $icon) {
    $this->icon = $icon;
  }
  public function getIcon() {
    return $this->icon;
  }
  public function setMax( $max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setMin( $min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
  public function setOpacity( $opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
  public function setWeight( $weight) {
    $this->weight = $weight;
  }
  public function getWeight() {
    return $this->weight;
  }
}

class BackupGuardGoogle_Column extends BackupGuardGoogle_Model {
  protected $__baseColumnType = 'BackupGuardGoogle_ColumnBaseColumn';
  protected $__baseColumnDataType = '';
  public $baseColumn;
  public $columnId;
  public $kind;
  public $name;
  public $type;
  public function setBaseColumn(BackupGuardGoogle_ColumnBaseColumn $baseColumn) {
    $this->baseColumn = $baseColumn;
  }
  public function getBaseColumn() {
    return $this->baseColumn;
  }
  public function setColumnId( $columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
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

class BackupGuardGoogle_ColumnBaseColumn extends BackupGuardGoogle_Model {
  public $columnId;
  public $tableIndex;
  public function setColumnId( $columnId) {
    $this->columnId = $columnId;
  }
  public function getColumnId() {
    return $this->columnId;
  }
  public function setTableIndex( $tableIndex) {
    $this->tableIndex = $tableIndex;
  }
  public function getTableIndex() {
    return $this->tableIndex;
  }
}

class BackupGuardGoogle_ColumnList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Column';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setItems(/* array(BackupGuardGoogle_Column) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Column', __METHOD__);
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
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class BackupGuardGoogle_Geometry extends BackupGuardGoogle_Model {
  public $geometries;
  public $geometry;
  public $type;
  public function setGeometries(/* array(BackupGuardGoogle_object) */ $geometries) {
    $this->assertIsArray($geometries, 'BackupGuardGoogle_object', __METHOD__);
    $this->geometries = $geometries;
  }
  public function getGeometries() {
    return $this->geometries;
  }
  public function setGeometry( $geometry) {
    $this->geometry = $geometry;
  }
  public function getGeometry() {
    return $this->geometry;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_Import extends BackupGuardGoogle_Model {
  public $kind;
  public $numRowsReceived;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNumRowsReceived( $numRowsReceived) {
    $this->numRowsReceived = $numRowsReceived;
  }
  public function getNumRowsReceived() {
    return $this->numRowsReceived;
  }
}

class BackupGuardGoogle_Line extends BackupGuardGoogle_Model {
  public $coordinates;
  public $type;
  public function setCoordinates(/* array(BackupGuardGoogle_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'BackupGuardGoogle_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_LineStyle extends BackupGuardGoogle_Model {
  public $strokeColor;
  protected $__strokeColorStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public $strokeOpacity;
  public $strokeWeight;
  protected $__strokeWeightStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  public function setStrokeColor( $strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setStrokeColorStyler(BackupGuardGoogle_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
  public function setStrokeOpacity( $strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeWeight( $strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeWeightStyler(BackupGuardGoogle_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
}

class BackupGuardGoogle_Point extends BackupGuardGoogle_Model {
  public $coordinates;
  public $type;
  public function setCoordinates(/* array(BackupGuardGoogle_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'BackupGuardGoogle_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_PointStyle extends BackupGuardGoogle_Model {
  public $iconName;
  protected $__iconStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__iconStylerDataType = '';
  public $iconStyler;
  public function setIconName( $iconName) {
    $this->iconName = $iconName;
  }
  public function getIconName() {
    return $this->iconName;
  }
  public function setIconStyler(BackupGuardGoogle_StyleFunction $iconStyler) {
    $this->iconStyler = $iconStyler;
  }
  public function getIconStyler() {
    return $this->iconStyler;
  }
}

class BackupGuardGoogle_Polygon extends BackupGuardGoogle_Model {
  public $coordinates;
  public $type;
  public function setCoordinates(/* array(BackupGuardGoogle_double) */ $coordinates) {
    $this->assertIsArray($coordinates, 'BackupGuardGoogle_double', __METHOD__);
    $this->coordinates = $coordinates;
  }
  public function getCoordinates() {
    return $this->coordinates;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_PolygonStyle extends BackupGuardGoogle_Model {
  public $fillColor;
  protected $__fillColorStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__fillColorStylerDataType = '';
  public $fillColorStyler;
  public $fillOpacity;
  public $strokeColor;
  protected $__strokeColorStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__strokeColorStylerDataType = '';
  public $strokeColorStyler;
  public $strokeOpacity;
  public $strokeWeight;
  protected $__strokeWeightStylerType = 'BackupGuardGoogle_StyleFunction';
  protected $__strokeWeightStylerDataType = '';
  public $strokeWeightStyler;
  public function setFillColor( $fillColor) {
    $this->fillColor = $fillColor;
  }
  public function getFillColor() {
    return $this->fillColor;
  }
  public function setFillColorStyler(BackupGuardGoogle_StyleFunction $fillColorStyler) {
    $this->fillColorStyler = $fillColorStyler;
  }
  public function getFillColorStyler() {
    return $this->fillColorStyler;
  }
  public function setFillOpacity( $fillOpacity) {
    $this->fillOpacity = $fillOpacity;
  }
  public function getFillOpacity() {
    return $this->fillOpacity;
  }
  public function setStrokeColor( $strokeColor) {
    $this->strokeColor = $strokeColor;
  }
  public function getStrokeColor() {
    return $this->strokeColor;
  }
  public function setStrokeColorStyler(BackupGuardGoogle_StyleFunction $strokeColorStyler) {
    $this->strokeColorStyler = $strokeColorStyler;
  }
  public function getStrokeColorStyler() {
    return $this->strokeColorStyler;
  }
  public function setStrokeOpacity( $strokeOpacity) {
    $this->strokeOpacity = $strokeOpacity;
  }
  public function getStrokeOpacity() {
    return $this->strokeOpacity;
  }
  public function setStrokeWeight( $strokeWeight) {
    $this->strokeWeight = $strokeWeight;
  }
  public function getStrokeWeight() {
    return $this->strokeWeight;
  }
  public function setStrokeWeightStyler(BackupGuardGoogle_StyleFunction $strokeWeightStyler) {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }
  public function getStrokeWeightStyler() {
    return $this->strokeWeightStyler;
  }
}

class BackupGuardGoogle_Sqlresponse extends BackupGuardGoogle_Model {
  public $columns;
  public $kind;
  public $rows;
  public function setColumns(/* array(BackupGuardGoogle_string) */ $columns) {
    $this->assertIsArray($columns, 'BackupGuardGoogle_string', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows(/* array(BackupGuardGoogle_object) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_object', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
}

class BackupGuardGoogle_StyleFunction extends BackupGuardGoogle_Model {
  protected $__bucketsType = 'BackupGuardGoogle_Bucket';
  protected $__bucketsDataType = 'array';
  public $buckets;
  public $columnName;
  protected $__gradientType = 'BackupGuardGoogle_StyleFunctionGradient';
  protected $__gradientDataType = '';
  public $gradient;
  public $kind;
  public function setBuckets(/* array(BackupGuardGoogle_Bucket) */ $buckets) {
    $this->assertIsArray($buckets, 'BackupGuardGoogle_Bucket', __METHOD__);
    $this->buckets = $buckets;
  }
  public function getBuckets() {
    return $this->buckets;
  }
  public function setColumnName( $columnName) {
    $this->columnName = $columnName;
  }
  public function getColumnName() {
    return $this->columnName;
  }
  public function setGradient(BackupGuardGoogle_StyleFunctionGradient $gradient) {
    $this->gradient = $gradient;
  }
  public function getGradient() {
    return $this->gradient;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_StyleFunctionGradient extends BackupGuardGoogle_Model {
  protected $__colorsType = 'BackupGuardGoogle_StyleFunctionGradientColors';
  protected $__colorsDataType = 'array';
  public $colors;
  public $max;
  public $min;
  public function setColors(/* array(BackupGuardGoogle_StyleFunctionGradientColors) */ $colors) {
    $this->assertIsArray($colors, 'BackupGuardGoogle_StyleFunctionGradientColors', __METHOD__);
    $this->colors = $colors;
  }
  public function getColors() {
    return $this->colors;
  }
  public function setMax( $max) {
    $this->max = $max;
  }
  public function getMax() {
    return $this->max;
  }
  public function setMin( $min) {
    $this->min = $min;
  }
  public function getMin() {
    return $this->min;
  }
}

class BackupGuardGoogle_StyleFunctionGradientColors extends BackupGuardGoogle_Model {
  public $color;
  public $opacity;
  public function setColor( $color) {
    $this->color = $color;
  }
  public function getColor() {
    return $this->color;
  }
  public function setOpacity( $opacity) {
    $this->opacity = $opacity;
  }
  public function getOpacity() {
    return $this->opacity;
  }
}

class BackupGuardGoogle_StyleSetting extends BackupGuardGoogle_Model {
  public $kind;
  protected $__markerOptionsType = 'BackupGuardGoogle_PointStyle';
  protected $__markerOptionsDataType = '';
  public $markerOptions;
  public $name;
  protected $__polygonOptionsType = 'BackupGuardGoogle_PolygonStyle';
  protected $__polygonOptionsDataType = '';
  public $polygonOptions;
  protected $__polylineOptionsType = 'BackupGuardGoogle_LineStyle';
  protected $__polylineOptionsDataType = '';
  public $polylineOptions;
  public $styleId;
  public $tableId;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMarkerOptions(BackupGuardGoogle_PointStyle $markerOptions) {
    $this->markerOptions = $markerOptions;
  }
  public function getMarkerOptions() {
    return $this->markerOptions;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPolygonOptions(BackupGuardGoogle_PolygonStyle $polygonOptions) {
    $this->polygonOptions = $polygonOptions;
  }
  public function getPolygonOptions() {
    return $this->polygonOptions;
  }
  public function setPolylineOptions(BackupGuardGoogle_LineStyle $polylineOptions) {
    $this->polylineOptions = $polylineOptions;
  }
  public function getPolylineOptions() {
    return $this->polylineOptions;
  }
  public function setStyleId( $styleId) {
    $this->styleId = $styleId;
  }
  public function getStyleId() {
    return $this->styleId;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
}

class BackupGuardGoogle_StyleSettingList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_StyleSetting';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setItems(/* array(BackupGuardGoogle_StyleSetting) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_StyleSetting', __METHOD__);
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
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}

class BackupGuardGoogle_Table extends BackupGuardGoogle_Model {
  public $attribution;
  public $attributionLink;
  public $baseTableIds;
  protected $__columnsType = 'BackupGuardGoogle_Column';
  protected $__columnsDataType = 'array';
  public $columns;
  public $description;
  public $isExportable;
  public $kind;
  public $name;
  public $sql;
  public $tableId;
  public function setAttribution( $attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setAttributionLink( $attributionLink) {
    $this->attributionLink = $attributionLink;
  }
  public function getAttributionLink() {
    return $this->attributionLink;
  }
  public function setBaseTableIds(/* array(BackupGuardGoogle_string) */ $baseTableIds) {
    $this->assertIsArray($baseTableIds, 'BackupGuardGoogle_string', __METHOD__);
    $this->baseTableIds = $baseTableIds;
  }
  public function getBaseTableIds() {
    return $this->baseTableIds;
  }
  public function setColumns(/* array(BackupGuardGoogle_Column) */ $columns) {
    $this->assertIsArray($columns, 'BackupGuardGoogle_Column', __METHOD__);
    $this->columns = $columns;
  }
  public function getColumns() {
    return $this->columns;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setIsExportable( $isExportable) {
    $this->isExportable = $isExportable;
  }
  public function getIsExportable() {
    return $this->isExportable;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSql( $sql) {
    $this->sql = $sql;
  }
  public function getSql() {
    return $this->sql;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
}

class BackupGuardGoogle_TableList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Table';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(BackupGuardGoogle_Table) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Table', __METHOD__);
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

class BackupGuardGoogle_Template extends BackupGuardGoogle_Model {
  public $automaticColumnNames;
  public $body;
  public $kind;
  public $name;
  public $tableId;
  public $templateId;
  public function setAutomaticColumnNames(/* array(BackupGuardGoogle_string) */ $automaticColumnNames) {
    $this->assertIsArray($automaticColumnNames, 'BackupGuardGoogle_string', __METHOD__);
    $this->automaticColumnNames = $automaticColumnNames;
  }
  public function getAutomaticColumnNames() {
    return $this->automaticColumnNames;
  }
  public function setBody( $body) {
    $this->body = $body;
  }
  public function getBody() {
    return $this->body;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setTemplateId( $templateId) {
    $this->templateId = $templateId;
  }
  public function getTemplateId() {
    return $this->templateId;
  }
}

class BackupGuardGoogle_TemplateList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Template';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setItems(/* array(BackupGuardGoogle_Template) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Template', __METHOD__);
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
  public function setTotalItems( $totalItems) {
    $this->totalItems = $totalItems;
  }
  public function getTotalItems() {
    return $this->totalItems;
  }
}
