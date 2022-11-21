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
   * The "webfonts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $webfontsService = new BackupGuardGoogle_WebfontsService(...);
   *   $webfonts = $webfontsService->webfonts;
   *  </code>
   */
  class BackupGuardGoogle_WebfontsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of fonts currently served by the Google Fonts Developer API (webfonts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sort Enables sorting of the list
     * @return BackupGuardGoogle_WebfontList
     */
    public function listWebfonts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_WebfontList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Webfonts (v1).
 *
 * <p>
 * The Google Fonts Developer API.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/fonts/docs/developer_api" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_WebfontsService extends BackupGuardGoogle_Service {
  public $webfonts;
  /**
   * Constructs the internal representation of the Webfonts service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'webfonts/v1/';
    $this->version = 'v1';
    $this->serviceName = 'webfonts';

    $client->addService($this->serviceName, $this->version);
    $this->webfonts = new BackupGuardGoogle_WebfontsServiceResource($this, $this->serviceName, 'webfonts', json_decode('{"methods": {"list": {"id": "webfonts.webfonts.list", "path": "webfonts", "httpMethod": "GET", "parameters": {"sort": {"type": "string", "enum": ["alpha", "date", "popularity", "style", "trending"], "location": "query"}}, "response": {"$ref": "WebfontList"}}}}', true));

  }
}



class BackupGuardGoogle_Webfont extends BackupGuardGoogle_Model {
  public $family;
  public $files;
  public $kind;
  public $lastModified;
  public $subsets;
  public $variants;
  public $version;
  public function setFamily( $family) {
    $this->family = $family;
  }
  public function getFamily() {
    return $this->family;
  }
  public function setFiles( $files) {
    $this->files = $files;
  }
  public function getFiles() {
    return $this->files;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastModified( $lastModified) {
    $this->lastModified = $lastModified;
  }
  public function getLastModified() {
    return $this->lastModified;
  }
  public function setSubsets(/* array(BackupGuardGoogle_string) */ $subsets) {
    $this->assertIsArray($subsets, 'BackupGuardGoogle_string', __METHOD__);
    $this->subsets = $subsets;
  }
  public function getSubsets() {
    return $this->subsets;
  }
  public function setVariants(/* array(BackupGuardGoogle_string) */ $variants) {
    $this->assertIsArray($variants, 'BackupGuardGoogle_string', __METHOD__);
    $this->variants = $variants;
  }
  public function getVariants() {
    return $this->variants;
  }
  public function setVersion( $version) {
    $this->version = $version;
  }
  public function getVersion() {
    return $this->version;
  }
}

class BackupGuardGoogle_WebfontList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Webfont';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Webfont) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Webfont', __METHOD__);
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
