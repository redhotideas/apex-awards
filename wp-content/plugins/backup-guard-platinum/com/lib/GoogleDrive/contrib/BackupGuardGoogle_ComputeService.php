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
   * The "addresses" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $addresses = $computeService->addresses;
   *  </code>
   */
  class BackupGuardGoogle_AddressesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of addresses grouped by scope. (addresses.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_AddressAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AddressAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified address resource. (addresses.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $address Name of the address resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $region, $address, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'address' => $address);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified address resource. (addresses.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $address Name of the address resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Address
     */
    public function get($project, $region, $address, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'address' => $address);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Address($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an address resource in the specified project using the data included
     * in the request. (addresses.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param BackupGuardGoogle_Address $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $region, BackupGuardGoogle_Address $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of address resources contained within the specified
     * region. (addresses.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_AddressList
     */
    public function listAddresses($project, $region, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AddressList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "disks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $disks = $computeService->disks;
   *  </code>
   */
  class BackupGuardGoogle_DisksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of disks grouped by scope. (disks.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_DiskAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DiskAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * (disks.createSnapshot)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @param BackupGuardGoogle_Snapshot $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function createSnapshot($project, $zone, $disk, BackupGuardGoogle_Snapshot $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('createSnapshot', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified persistent disk resource. (disks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $zone, $disk, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk resource. (disks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $disk Name of the persistent disk resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Disk
     */
    public function get($project, $zone, $disk, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'disk' => $disk);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Disk($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a persistent disk resource in the specified project using the data
     * included in the request. (disks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param BackupGuardGoogle_Disk $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string sourceImage Optional. Source image to restore onto a disk.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $zone, BackupGuardGoogle_Disk $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk resources contained within the
     * specified zone. (disks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_DiskList
     */
    public function listDisks($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DiskList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "firewalls" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $firewalls = $computeService->firewalls;
   *  </code>
   */
  class BackupGuardGoogle_FirewallsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified firewall resource. (firewalls.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified firewall resource. (firewalls.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Firewall
     */
    public function get($project, $firewall, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Firewall($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a firewall resource in the specified project using the data included
     * in the request. (firewalls.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, BackupGuardGoogle_Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of firewall resources available to the specified project.
     * (firewalls.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_FirewallList
     */
    public function listFirewalls($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_FirewallList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the
     * request. This method supports patch semantics. (firewalls.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param BackupGuardGoogle_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function patch($project, $firewall, BackupGuardGoogle_Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified firewall resource with the data included in the
     * request. (firewalls.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $firewall Name of the firewall resource to update.
     * @param BackupGuardGoogle_Firewall $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function update($project, $firewall, BackupGuardGoogle_Firewall $postBody, $optParams = array()) {
      $params = array('project' => $project, 'firewall' => $firewall, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "forwardingRules" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $forwardingRules = $computeService->forwardingRules;
   *  </code>
   */
  class BackupGuardGoogle_ForwardingRulesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of forwarding rules grouped by scope.
     * (forwardingRules.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_ForwardingRuleAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ForwardingRuleAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified ForwardingRule resource. (forwardingRules.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $region, $forwardingRule, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified ForwardingRule resource. (forwardingRules.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_ForwardingRule
     */
    public function get($project, $region, $forwardingRule, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ForwardingRule($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a ForwardingRule resource in the specified project and region using
     * the data included in the request. (forwardingRules.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param BackupGuardGoogle_ForwardingRule $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $region, BackupGuardGoogle_ForwardingRule $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of ForwardingRule resources available to the specified
     * project and region. (forwardingRules.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_ForwardingRuleList
     */
    public function listForwardingRules($project, $region, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ForwardingRuleList($data);
      } else {
        return $data;
      }
    }
    /**
     * Changes target url for forwarding rule. (forwardingRules.setTarget)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $forwardingRule Name of the ForwardingRule resource in which target is to be set.
     * @param BackupGuardGoogle_TargetReference $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function setTarget($project, $region, $forwardingRule, BackupGuardGoogle_TargetReference $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'forwardingRule' => $forwardingRule, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setTarget', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "globalOperations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $globalOperations = $computeService->globalOperations;
   *  </code>
   */
  class BackupGuardGoogle_GlobalOperationsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of all operations grouped by scope.
     * (globalOperations.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_OperationAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OperationAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified operation resource. (globalOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves the specified operation resource. (globalOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function get($project, $operation, $optParams = array()) {
      $params = array('project' => $project, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified
     * project. (globalOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_OperationList
     */
    public function listGlobalOperations($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OperationList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "httpHealthChecks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $httpHealthChecks = $computeService->httpHealthChecks;
   *  </code>
   */
  class BackupGuardGoogle_HttpHealthChecksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified HttpHealthCheck resource. (httpHealthChecks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $httpHealthCheck, $optParams = array()) {
      $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified HttpHealthCheck resource. (httpHealthChecks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_HttpHealthCheck
     */
    public function get($project, $httpHealthCheck, $optParams = array()) {
      $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_HttpHealthCheck($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, BackupGuardGoogle_HttpHealthCheck $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of HttpHealthCheck resources available to the specified
     * project. (httpHealthChecks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_HttpHealthCheckList
     */
    public function listHttpHealthChecks($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_HttpHealthCheckList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. This method supports patch semantics.
     * (httpHealthChecks.patch)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to update.
     * @param BackupGuardGoogle_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function patch($project, $httpHealthCheck, BackupGuardGoogle_HttpHealthCheck $postBody, $optParams = array()) {
      $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a HttpHealthCheck resource in the specified project using the data
     * included in the request. (httpHealthChecks.update)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $httpHealthCheck Name of the HttpHealthCheck resource to update.
     * @param BackupGuardGoogle_HttpHealthCheck $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function update($project, $httpHealthCheck, BackupGuardGoogle_HttpHealthCheck $postBody, $optParams = array()) {
      $params = array('project' => $project, 'httpHealthCheck' => $httpHealthCheck, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "images" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $images = $computeService->images;
   *  </code>
   */
  class BackupGuardGoogle_ImagesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified image resource. (images.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets the deprecation status of an image. If no message body is given, clears
     * the deprecation status instead. (images.deprecate)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Image name.
     * @param BackupGuardGoogle_DeprecationStatus $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function deprecate($project, $image, BackupGuardGoogle_DeprecationStatus $postBody, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deprecate', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified image resource. (images.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $image Name of the image resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Image
     */
    public function get($project, $image, $optParams = array()) {
      $params = array('project' => $project, 'image' => $image);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Image($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an image resource in the specified project using the data included in
     * the request. (images.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_Image $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, BackupGuardGoogle_Image $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of image resources available to the specified project.
     * (images.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_ImageList
     */
    public function listImages($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ImageList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "instances" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $instances = $computeService->instances;
   *  </code>
   */
  class BackupGuardGoogle_InstancesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Adds an access config to an instance's network interface.
     * (instances.addAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $networkInterface Network interface name.
     * @param BackupGuardGoogle_AccessConfig $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function addAccessConfig($project, $zone, $instance, $networkInterface, BackupGuardGoogle_AccessConfig $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'networkInterface' => $networkInterface, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addAccessConfig', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * (instances.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_InstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstanceAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Attaches a disk resource to an instance. (instances.attachDisk)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param BackupGuardGoogle_AttachedDisk $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function attachDisk($project, $zone, $instance, BackupGuardGoogle_AttachedDisk $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('attachDisk', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified instance resource. (instances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes an access config from an instance's network interface.
     * (instances.deleteAccessConfig)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $accessConfig Access config name.
     * @param string $networkInterface Network interface name.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function deleteAccessConfig($project, $zone, $instance, $accessConfig, $networkInterface, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'accessConfig' => $accessConfig, 'networkInterface' => $networkInterface);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deleteAccessConfig', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Detaches a disk from an instance. (instances.detachDisk)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param string $deviceName Disk device name to detach.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function detachDisk($project, $zone, $instance, $deviceName, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'deviceName' => $deviceName);
      $params = array_merge($params, $optParams);
      $data = $this->__call('detachDisk', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified instance resource. (instances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Instance
     */
    public function get($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Instance($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified instance's serial port output.
     * (instances.getSerialPortOutput)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_SerialPortOutput
     */
    public function getSerialPortOutput($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('getSerialPortOutput', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SerialPortOutput($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates an instance resource in the specified project using the data included
     * in the request. (instances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param BackupGuardGoogle_Instance $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $zone, BackupGuardGoogle_Instance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of instance resources contained within the specified zone.
     * (instances.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_InstanceList
     */
    public function listInstances($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_InstanceList($data);
      } else {
        return $data;
      }
    }
    /**
     * Performs a hard reset on the instance. (instances.reset)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function reset($project, $zone, $instance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('reset', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets metadata for the specified instance to the data included in the request.
     * (instances.setMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param BackupGuardGoogle_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function setMetadata($project, $zone, $instance, BackupGuardGoogle_Metadata $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setMetadata', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets an instance's scheduling options. (instances.setScheduling)
     *
     * @param string $project Project name.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Instance name.
     * @param BackupGuardGoogle_Scheduling $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function setScheduling($project, $zone, $instance, BackupGuardGoogle_Scheduling $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setScheduling', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets tags for the specified instance to the data included in the request.
     * (instances.setTags)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $instance Name of the instance scoping this request.
     * @param BackupGuardGoogle_Tags $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function setTags($project, $zone, $instance, BackupGuardGoogle_Tags $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'instance' => $instance, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setTags', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "machineTypes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $machineTypes = $computeService->machineTypes;
   *  </code>
   */
  class BackupGuardGoogle_MachineTypesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of machine type resources grouped by scope.
     * (machineTypes.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_MachineTypeAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_MachineTypeAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified machine type resource. (machineTypes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $machineType Name of the machine type resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_MachineType
     */
    public function get($project, $zone, $machineType, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'machineType' => $machineType);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_MachineType($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of machine type resources available to the specified
     * project. (machineTypes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_MachineTypeList
     */
    public function listMachineTypes($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_MachineTypeList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "networks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $networks = $computeService->networks;
   *  </code>
   */
  class BackupGuardGoogle_NetworksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified network resource. (networks.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified network resource. (networks.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $network Name of the network resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Network
     */
    public function get($project, $network, $optParams = array()) {
      $params = array('project' => $project, 'network' => $network);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Network($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a network resource in the specified project using the data included
     * in the request. (networks.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_Network $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, BackupGuardGoogle_Network $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of network resources available to the specified project.
     * (networks.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_NetworkList
     */
    public function listNetworks($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_NetworkList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "projects" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $projects = $computeService->projects;
   *  </code>
   */
  class BackupGuardGoogle_ProjectsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns the specified project resource. (projects.get)
     *
     * @param string $project Name of the project resource to retrieve.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Project
     */
    public function get($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Project($data);
      } else {
        return $data;
      }
    }
    /**
     * Sets metadata common to all instances within the specified project using the
     * data included in the request. (projects.setCommonInstanceMetadata)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_Metadata $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function setCommonInstanceMetadata($project, BackupGuardGoogle_Metadata $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setCommonInstanceMetadata', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "regionOperations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $regionOperations = $computeService->regionOperations;
   *  </code>
   */
  class BackupGuardGoogle_RegionOperationsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified region-specific operation resource.
     * (regionOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $region, $operation, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves the specified region-specific operation resource.
     * (regionOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function get($project, $region, $operation, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified
     * region. (regionOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_OperationList
     */
    public function listRegionOperations($project, $region, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OperationList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "regions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $regions = $computeService->regions;
   *  </code>
   */
  class BackupGuardGoogle_RegionsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns the specified region resource. (regions.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Region
     */
    public function get($project, $region, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Region($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of region resources available to the specified project.
     * (regions.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_RegionList
     */
    public function listRegions($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_RegionList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "routes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $routes = $computeService->routes;
   *  </code>
   */
  class BackupGuardGoogle_RoutesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified route resource. (routes.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $route Name of the route resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $route, $optParams = array()) {
      $params = array('project' => $project, 'route' => $route);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified route resource. (routes.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $route Name of the route resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Route
     */
    public function get($project, $route, $optParams = array()) {
      $params = array('project' => $project, 'route' => $route);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Route($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a route resource in the specified project using the data included in
     * the request. (routes.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param BackupGuardGoogle_Route $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, BackupGuardGoogle_Route $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of route resources available to the specified project.
     * (routes.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_RouteList
     */
    public function listRoutes($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_RouteList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "snapshots" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $snapshots = $computeService->snapshots;
   *  </code>
   */
  class BackupGuardGoogle_SnapshotsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified persistent disk snapshot resource. (snapshots.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified persistent disk snapshot resource. (snapshots.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $snapshot Name of the persistent disk snapshot resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Snapshot
     */
    public function get($project, $snapshot, $optParams = array()) {
      $params = array('project' => $project, 'snapshot' => $snapshot);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Snapshot($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of persistent disk snapshot resources contained within the
     * specified project. (snapshots.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_SnapshotList
     */
    public function listSnapshots($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SnapshotList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "targetInstances" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $targetInstances = $computeService->targetInstances;
   *  </code>
   */
  class BackupGuardGoogle_TargetInstancesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the list of target instances grouped by scope.
     * (targetInstances.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_TargetInstanceAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetInstanceAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified TargetInstance resource. (targetInstances.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $zone, $targetInstance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified TargetInstance resource. (targetInstances.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $targetInstance Name of the TargetInstance resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_TargetInstance
     */
    public function get($project, $zone, $targetInstance, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetInstance($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a TargetInstance resource in the specified project and zone using the
     * data included in the request. (targetInstances.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param BackupGuardGoogle_TargetInstance $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $zone, BackupGuardGoogle_TargetInstance $postBody, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of TargetInstance resources available to the specified
     * project and zone. (targetInstances.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_TargetInstanceList
     */
    public function listTargetInstances($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetInstanceList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "targetPools" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $targetPools = $computeService->targetPools;
   *  </code>
   */
  class BackupGuardGoogle_TargetPoolsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Adds health check URL to targetPool. (targetPools.addHealthCheck)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which health_check_url is to be added.
     * @param BackupGuardGoogle_TargetPoolsAddHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function addHealthCheck($project, $region, $targetPool, BackupGuardGoogle_TargetPoolsAddHealthCheckRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addHealthCheck', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds instance url to targetPool. (targetPools.addInstance)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which instance_url is to be added.
     * @param BackupGuardGoogle_TargetPoolsAddInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function addInstance($project, $region, $targetPool, BackupGuardGoogle_TargetPoolsAddInstanceRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('addInstance', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of target pools grouped by scope.
     * (targetPools.aggregatedList)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_TargetPoolAggregatedList
     */
    public function aggregatedList($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('aggregatedList', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetPoolAggregatedList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified TargetPool resource. (targetPools.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to delete.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function delete($project, $region, $targetPool, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified TargetPool resource. (targetPools.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_TargetPool
     */
    public function get($project, $region, $targetPool, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetPool($data);
      } else {
        return $data;
      }
    }
    /**
     * Gets the most recent health check results for each IP for the given instance
     * that is referenced by given TargetPool. (targetPools.getHealth)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which the queried instance belongs.
     * @param BackupGuardGoogle_InstanceReference $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_TargetPoolInstanceHealth
     */
    public function getHealth($project, $region, $targetPool, BackupGuardGoogle_InstanceReference $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('getHealth', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetPoolInstanceHealth($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a TargetPool resource in the specified project and region using the
     * data included in the request. (targetPools.insert)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param BackupGuardGoogle_TargetPool $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function insert($project, $region, BackupGuardGoogle_TargetPool $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of TargetPool resources available to the specified project
     * and region. (targetPools.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_TargetPoolList
     */
    public function listTargetPools($project, $region, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TargetPoolList($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes health check URL from targetPool. (targetPools.removeHealthCheck)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which health_check_url is to be removed.
     * @param BackupGuardGoogle_TargetPoolsRemoveHealthCheckRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function removeHealthCheck($project, $region, $targetPool, BackupGuardGoogle_TargetPoolsRemoveHealthCheckRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('removeHealthCheck', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Removes instance URL from targetPool. (targetPools.removeInstance)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource to which instance_url is to be removed.
     * @param BackupGuardGoogle_TargetPoolsRemoveInstanceRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function removeInstance($project, $region, $targetPool, BackupGuardGoogle_TargetPoolsRemoveInstanceRequest $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('removeInstance', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Changes backup pool configurations. (targetPools.setBackup)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $region Name of the region scoping this request.
     * @param string $targetPool Name of the TargetPool resource for which the backup is to be set.
     * @param BackupGuardGoogle_TargetReference $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param float failoverRatio New failoverRatio value for the containing target pool.
     * @return BackupGuardGoogle_Operation
     */
    public function setBackup($project, $region, $targetPool, BackupGuardGoogle_TargetReference $postBody, $optParams = array()) {
      $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('setBackup', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "zoneOperations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $zoneOperations = $computeService->zoneOperations;
   *  </code>
   */
  class BackupGuardGoogle_ZoneOperationsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes the specified zone-specific operation resource.
     * (zoneOperations.delete)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $zone, $operation, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves the specified zone-specific operation resource.
     * (zoneOperations.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param string $operation Name of the operation resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Operation
     */
    public function get($project, $zone, $operation, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone, 'operation' => $operation);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Operation($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of operation resources contained within the specified
     * zone. (zoneOperations.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_OperationList
     */
    public function listZoneOperations($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OperationList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "zones" collection of methods.
   * Typical usage is:
   *  <code>
   *   $computeService = new BackupGuardGoogle_ComputeService(...);
   *   $zones = $computeService->zones;
   *  </code>
   */
  class BackupGuardGoogle_ZonesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns the specified zone resource. (zones.get)
     *
     * @param string $project Name of the project scoping this request.
     * @param string $zone Name of the zone resource to return.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Zone
     */
    public function get($project, $zone, $optParams = array()) {
      $params = array('project' => $project, 'zone' => $zone);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Zone($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the list of zone resources available to the specified project.
     * (zones.list)
     *
     * @param string $project Name of the project scoping this request.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string filter Optional. Filter expression for filtering listed resources.
     * @opt_param string maxResults Optional. Maximum count of results to be returned. Maximum value is 500 and default value is 100.
     * @opt_param string pageToken Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a previous list request.
     * @return BackupGuardGoogle_ZoneList
     */
    public function listZones($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ZoneList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Compute (v1).
 *
 * <p>
 * API for the Google Compute Engine service.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.Google.com/compute/docs/reference/latest/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_ComputeService extends BackupGuardGoogle_Service {
  public $addresses;
  public $disks;
  public $firewalls;
  public $forwardingRules;
  public $globalOperations;
  public $httpHealthChecks;
  public $images;
  public $instances;
  public $machineTypes;
  public $networks;
  public $projects;
  public $regionOperations;
  public $regions;
  public $routes;
  public $snapshots;
  public $targetInstances;
  public $targetPools;
  public $zoneOperations;
  public $zones;
  /**
   * Constructs the internal representation of the Compute service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'compute/v1/projects/';
    $this->version = 'v1';
    $this->serviceName = 'compute';

    $client->addService($this->serviceName, $this->version);
    $this->addresses = new BackupGuardGoogle_AddressesServiceResource($this, $this->serviceName, 'addresses', json_decode('{"methods": {"aggregatedList": {"id": "compute.addresses.aggregatedList", "path": "{project}/aggregated/addresses", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AddressAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.addresses.delete", "path": "{project}/regions/{region}/addresses/{address}", "httpMethod": "DELETE", "parameters": {"address": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.addresses.get", "path": "{project}/regions/{region}/addresses/{address}", "httpMethod": "GET", "parameters": {"address": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Address"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.addresses.insert", "path": "{project}/regions/{region}/addresses", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Address"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.addresses.list", "path": "{project}/regions/{region}/addresses", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AddressList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->disks = new BackupGuardGoogle_DisksServiceResource($this, $this->serviceName, 'disks', json_decode('{"methods": {"aggregatedList": {"id": "compute.disks.aggregatedList", "path": "{project}/aggregated/disks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DiskAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "createSnapshot": {"id": "compute.disks.createSnapshot", "path": "{project}/zones/{zone}/disks/{disk}/createSnapshot", "httpMethod": "POST", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Snapshot"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "delete": {"id": "compute.disks.delete", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "DELETE", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.disks.get", "path": "{project}/zones/{zone}/disks/{disk}", "httpMethod": "GET", "parameters": {"disk": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Disk"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.disks.insert", "path": "{project}/zones/{zone}/disks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "sourceImage": {"type": "string", "location": "query"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Disk"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.disks.list", "path": "{project}/zones/{zone}/disks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DiskList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->firewalls = new BackupGuardGoogle_FirewallsServiceResource($this, $this->serviceName, 'firewalls', json_decode('{"methods": {"delete": {"id": "compute.firewalls.delete", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "DELETE", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.firewalls.get", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "GET", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Firewall"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.firewalls.insert", "path": "{project}/global/firewalls", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.firewalls.list", "path": "{project}/global/firewalls", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "FirewallList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "patch": {"id": "compute.firewalls.patch", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PATCH", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "update": {"id": "compute.firewalls.update", "path": "{project}/global/firewalls/{firewall}", "httpMethod": "PUT", "parameters": {"firewall": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Firewall"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->forwardingRules = new BackupGuardGoogle_ForwardingRulesServiceResource($this, $this->serviceName, 'forwardingRules', json_decode('{"methods": {"aggregatedList": {"id": "compute.forwardingRules.aggregatedList", "path": "{project}/aggregated/forwardingRules", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ForwardingRuleAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.forwardingRules.delete", "path": "{project}/regions/{region}/forwardingRules/{forwardingRule}", "httpMethod": "DELETE", "parameters": {"forwardingRule": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.forwardingRules.get", "path": "{project}/regions/{region}/forwardingRules/{forwardingRule}", "httpMethod": "GET", "parameters": {"forwardingRule": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ForwardingRule"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.forwardingRules.insert", "path": "{project}/regions/{region}/forwardingRules", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ForwardingRule"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.forwardingRules.list", "path": "{project}/regions/{region}/forwardingRules", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ForwardingRuleList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "setTarget": {"id": "compute.forwardingRules.setTarget", "path": "{project}/regions/{region}/forwardingRules/{forwardingRule}/setTarget", "httpMethod": "POST", "parameters": {"forwardingRule": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetReference"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->globalOperations = new BackupGuardGoogle_GlobalOperationsServiceResource($this, $this->serviceName, 'globalOperations', json_decode('{"methods": {"aggregatedList": {"id": "compute.globalOperations.aggregatedList", "path": "{project}/aggregated/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.globalOperations.delete", "path": "{project}/global/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.globalOperations.get", "path": "{project}/global/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.globalOperations.list", "path": "{project}/global/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->httpHealthChecks = new BackupGuardGoogle_HttpHealthChecksServiceResource($this, $this->serviceName, 'httpHealthChecks', json_decode('{"methods": {"delete": {"id": "compute.httpHealthChecks.delete", "path": "{project}/global/httpHealthChecks/{httpHealthCheck}", "httpMethod": "DELETE", "parameters": {"httpHealthCheck": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.httpHealthChecks.get", "path": "{project}/global/httpHealthChecks/{httpHealthCheck}", "httpMethod": "GET", "parameters": {"httpHealthCheck": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "HttpHealthCheck"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.httpHealthChecks.insert", "path": "{project}/global/httpHealthChecks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "HttpHealthCheck"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.httpHealthChecks.list", "path": "{project}/global/httpHealthChecks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "HttpHealthCheckList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "patch": {"id": "compute.httpHealthChecks.patch", "path": "{project}/global/httpHealthChecks/{httpHealthCheck}", "httpMethod": "PATCH", "parameters": {"httpHealthCheck": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "HttpHealthCheck"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "update": {"id": "compute.httpHealthChecks.update", "path": "{project}/global/httpHealthChecks/{httpHealthCheck}", "httpMethod": "PUT", "parameters": {"httpHealthCheck": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "HttpHealthCheck"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->images = new BackupGuardGoogle_ImagesServiceResource($this, $this->serviceName, 'images', json_decode('{"methods": {"delete": {"id": "compute.images.delete", "path": "{project}/global/images/{image}", "httpMethod": "DELETE", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deprecate": {"id": "compute.images.deprecate", "path": "{project}/global/images/{image}/deprecate", "httpMethod": "POST", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "DeprecationStatus"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.images.get", "path": "{project}/global/images/{image}", "httpMethod": "GET", "parameters": {"image": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Image"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.images.insert", "path": "{project}/global/images", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Image"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write"]}, "list": {"id": "compute.images.list", "path": "{project}/global/images", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ImageList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->instances = new BackupGuardGoogle_InstancesServiceResource($this, $this->serviceName, 'instances', json_decode('{"methods": {"addAccessConfig": {"id": "compute.instances.addAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/addAccessConfig", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "networkInterface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AccessConfig"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "aggregatedList": {"id": "compute.instances.aggregatedList", "path": "{project}/aggregated/instances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "attachDisk": {"id": "compute.instances.attachDisk", "path": "{project}/zones/{zone}/instances/{instance}/attachDisk", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AttachedDisk"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "delete": {"id": "compute.instances.delete", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "DELETE", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "deleteAccessConfig": {"id": "compute.instances.deleteAccessConfig", "path": "{project}/zones/{zone}/instances/{instance}/deleteAccessConfig", "httpMethod": "POST", "parameters": {"accessConfig": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "networkInterface": {"type": "string", "required": true, "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "detachDisk": {"id": "compute.instances.detachDisk", "path": "{project}/zones/{zone}/instances/{instance}/detachDisk", "httpMethod": "POST", "parameters": {"deviceName": {"type": "string", "required": true, "location": "query"}, "instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.instances.get", "path": "{project}/zones/{zone}/instances/{instance}", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Instance"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "getSerialPortOutput": {"id": "compute.instances.getSerialPortOutput", "path": "{project}/zones/{zone}/instances/{instance}/serialPort", "httpMethod": "GET", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SerialPortOutput"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.instances.insert", "path": "{project}/zones/{zone}/instances", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Instance"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.instances.list", "path": "{project}/zones/{zone}/instances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "InstanceList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "reset": {"id": "compute.instances.reset", "path": "{project}/zones/{zone}/instances/{instance}/reset", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setMetadata": {"id": "compute.instances.setMetadata", "path": "{project}/zones/{zone}/instances/{instance}/setMetadata", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setScheduling": {"id": "compute.instances.setScheduling", "path": "{project}/zones/{zone}/instances/{instance}/setScheduling", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Scheduling"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setTags": {"id": "compute.instances.setTags", "path": "{project}/zones/{zone}/instances/{instance}/setTags", "httpMethod": "POST", "parameters": {"instance": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Tags"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->machineTypes = new BackupGuardGoogle_MachineTypesServiceResource($this, $this->serviceName, 'machineTypes', json_decode('{"methods": {"aggregatedList": {"id": "compute.machineTypes.aggregatedList", "path": "{project}/aggregated/machineTypes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineTypeAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "get": {"id": "compute.machineTypes.get", "path": "{project}/zones/{zone}/machineTypes/{machineType}", "httpMethod": "GET", "parameters": {"machineType": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineType"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.machineTypes.list", "path": "{project}/zones/{zone}/machineTypes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MachineTypeList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->networks = new BackupGuardGoogle_NetworksServiceResource($this, $this->serviceName, 'networks', json_decode('{"methods": {"delete": {"id": "compute.networks.delete", "path": "{project}/global/networks/{network}", "httpMethod": "DELETE", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.networks.get", "path": "{project}/global/networks/{network}", "httpMethod": "GET", "parameters": {"network": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Network"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.networks.insert", "path": "{project}/global/networks", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Network"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.networks.list", "path": "{project}/global/networks", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "NetworkList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->projects = new BackupGuardGoogle_ProjectsServiceResource($this, $this->serviceName, 'projects', json_decode('{"methods": {"get": {"id": "compute.projects.get", "path": "{project}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Project"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "setCommonInstanceMetadata": {"id": "compute.projects.setCommonInstanceMetadata", "path": "{project}/setCommonInstanceMetadata", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Metadata"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->regionOperations = new BackupGuardGoogle_RegionOperationsServiceResource($this, $this->serviceName, 'regionOperations', json_decode('{"methods": {"delete": {"id": "compute.regionOperations.delete", "path": "{project}/regions/{region}/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.regionOperations.get", "path": "{project}/regions/{region}/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.regionOperations.list", "path": "{project}/regions/{region}/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->regions = new BackupGuardGoogle_RegionsServiceResource($this, $this->serviceName, 'regions', json_decode('{"methods": {"get": {"id": "compute.regions.get", "path": "{project}/regions/{region}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Region"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.regions.list", "path": "{project}/regions", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RegionList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->routes = new BackupGuardGoogle_RoutesServiceResource($this, $this->serviceName, 'routes', json_decode('{"methods": {"delete": {"id": "compute.routes.delete", "path": "{project}/global/routes/{route}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "route": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.routes.get", "path": "{project}/global/routes/{route}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "route": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Route"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.routes.insert", "path": "{project}/global/routes", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Route"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.routes.list", "path": "{project}/global/routes", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "RouteList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->snapshots = new BackupGuardGoogle_SnapshotsServiceResource($this, $this->serviceName, 'snapshots', json_decode('{"methods": {"delete": {"id": "compute.snapshots.delete", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.snapshots.get", "path": "{project}/global/snapshots/{snapshot}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "snapshot": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Snapshot"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.snapshots.list", "path": "{project}/global/snapshots", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "SnapshotList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->targetInstances = new BackupGuardGoogle_TargetInstancesServiceResource($this, $this->serviceName, 'targetInstances', json_decode('{"methods": {"aggregatedList": {"id": "compute.targetInstances.aggregatedList", "path": "{project}/aggregated/targetInstances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetInstanceAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.targetInstances.delete", "path": "{project}/zones/{zone}/targetInstances/{targetInstance}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "targetInstance": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.targetInstances.get", "path": "{project}/zones/{zone}/targetInstances/{targetInstance}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "targetInstance": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetInstance"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.targetInstances.insert", "path": "{project}/zones/{zone}/targetInstances", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetInstance"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.targetInstances.list", "path": "{project}/zones/{zone}/targetInstances", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetInstanceList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->targetPools = new BackupGuardGoogle_TargetPoolsServiceResource($this, $this->serviceName, 'targetPools', json_decode('{"methods": {"addHealthCheck": {"id": "compute.targetPools.addHealthCheck", "path": "{project}/regions/{region}/targetPools/{targetPool}/addHealthCheck", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetPoolsAddHealthCheckRequest"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "addInstance": {"id": "compute.targetPools.addInstance", "path": "{project}/regions/{region}/targetPools/{targetPool}/addInstance", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetPoolsAddInstanceRequest"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "aggregatedList": {"id": "compute.targetPools.aggregatedList", "path": "{project}/aggregated/targetPools", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetPoolAggregatedList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "delete": {"id": "compute.targetPools.delete", "path": "{project}/regions/{region}/targetPools/{targetPool}", "httpMethod": "DELETE", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.targetPools.get", "path": "{project}/regions/{region}/targetPools/{targetPool}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetPool"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "getHealth": {"id": "compute.targetPools.getHealth", "path": "{project}/regions/{region}/targetPools/{targetPool}/getHealth", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "InstanceReference"}, "response": {"$ref": "TargetPoolInstanceHealth"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "insert": {"id": "compute.targetPools.insert", "path": "{project}/regions/{region}/targetPools", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetPool"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "list": {"id": "compute.targetPools.list", "path": "{project}/regions/{region}/targetPools", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TargetPoolList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "removeHealthCheck": {"id": "compute.targetPools.removeHealthCheck", "path": "{project}/regions/{region}/targetPools/{targetPool}/removeHealthCheck", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetPoolsRemoveHealthCheckRequest"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "removeInstance": {"id": "compute.targetPools.removeInstance", "path": "{project}/regions/{region}/targetPools/{targetPool}/removeInstance", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetPoolsRemoveInstanceRequest"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "setBackup": {"id": "compute.targetPools.setBackup", "path": "{project}/regions/{region}/targetPools/{targetPool}/setBackup", "httpMethod": "POST", "parameters": {"failoverRatio": {"type": "number", "format": "float", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "region": {"type": "string", "required": true, "location": "path"}, "targetPool": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TargetReference"}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute"]}}}', true));
    $this->zoneOperations = new BackupGuardGoogle_ZoneOperationsServiceResource($this, $this->serviceName, 'zoneOperations', json_decode('{"methods": {"delete": {"id": "compute.zoneOperations.delete", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "DELETE", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/compute"]}, "get": {"id": "compute.zoneOperations.get", "path": "{project}/zones/{zone}/operations/{operation}", "httpMethod": "GET", "parameters": {"operation": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Operation"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zoneOperations.list", "path": "{project}/zones/{zone}/operations", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "OperationList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));
    $this->zones = new BackupGuardGoogle_ZonesServiceResource($this, $this->serviceName, 'zones', json_decode('{"methods": {"get": {"id": "compute.zones.get", "path": "{project}/zones/{zone}", "httpMethod": "GET", "parameters": {"project": {"type": "string", "required": true, "location": "path"}, "zone": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Zone"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}, "list": {"id": "compute.zones.list", "path": "{project}/zones", "httpMethod": "GET", "parameters": {"filter": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "default": "100", "format": "uint32", "minimum": "0", "maximum": "500", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "ZoneList"}, "scopes": ["https://www.googleapis.com/auth/compute", "https://www.googleapis.com/auth/compute.readonly"]}}}', true));

  }
}



class BackupGuardGoogle_AccessConfig extends BackupGuardGoogle_Model {
  public $kind;
  public $name;
  public $natIP;
  public $type;
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
  public function setNatIP( $natIP) {
    $this->natIP = $natIP;
  }
  public function getNatIP() {
    return $this->natIP;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_Address extends BackupGuardGoogle_Model {
  public $address;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $region;
  public $selfLink;
  public $status;
  public $users;
  public function setAddress( $address) {
    $this->address = $address;
  }
  public function getAddress() {
    return $this->address;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setUsers(/* array(BackupGuardGoogle_string) */ $users) {
    $this->assertIsArray($users, 'BackupGuardGoogle_string', __METHOD__);
    $this->users = $users;
  }
  public function getUsers() {
    return $this->users;
  }
}

class BackupGuardGoogle_AddressAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_AddressesScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_AddressesScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_AddressList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Address';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Address) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Address', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_AddressesScopedList extends BackupGuardGoogle_Model {
  protected $__addressesType = 'BackupGuardGoogle_Address';
  protected $__addressesDataType = 'array';
  public $addresses;
  protected $__warningType = 'BackupGuardGoogle_AddressesScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setAddresses(/* array(BackupGuardGoogle_Address) */ $addresses) {
    $this->assertIsArray($addresses, 'BackupGuardGoogle_Address', __METHOD__);
    $this->addresses = $addresses;
  }
  public function getAddresses() {
    return $this->addresses;
  }
  public function setWarning(BackupGuardGoogle_AddressesScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_AddressesScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_AddressesScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_AddressesScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_AddressesScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_AddressesScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_AttachedDisk extends BackupGuardGoogle_Model {
  public $boot;
  public $deviceName;
  public $index;
  public $kind;
  public $mode;
  public $source;
  public $type;
  public function setBoot( $boot) {
    $this->boot = $boot;
  }
  public function getBoot() {
    return $this->boot;
  }
  public function setDeviceName( $deviceName) {
    $this->deviceName = $deviceName;
  }
  public function getDeviceName() {
    return $this->deviceName;
  }
  public function setIndex( $index) {
    $this->index = $index;
  }
  public function getIndex() {
    return $this->index;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMode( $mode) {
    $this->mode = $mode;
  }
  public function getMode() {
    return $this->mode;
  }
  public function setSource( $source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_DeprecationStatus extends BackupGuardGoogle_Model {
  public $deleted;
  public $deprecated;
  public $obsolete;
  public $replacement;
  public $state;
  public function setDeleted( $deleted) {
    $this->deleted = $deleted;
  }
  public function getDeleted() {
    return $this->deleted;
  }
  public function setDeprecated( $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setObsolete( $obsolete) {
    $this->obsolete = $obsolete;
  }
  public function getObsolete() {
    return $this->obsolete;
  }
  public function setReplacement( $replacement) {
    $this->replacement = $replacement;
  }
  public function getReplacement() {
    return $this->replacement;
  }
  public function setState( $state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class BackupGuardGoogle_Disk extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $options;
  public $selfLink;
  public $sizeGb;
  public $sourceImage;
  public $sourceImageId;
  public $sourceSnapshot;
  public $sourceSnapshotId;
  public $status;
  public $zone;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOptions( $options) {
    $this->options = $options;
  }
  public function getOptions() {
    return $this->options;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSizeGb( $sizeGb) {
    $this->sizeGb = $sizeGb;
  }
  public function getSizeGb() {
    return $this->sizeGb;
  }
  public function setSourceImage( $sourceImage) {
    $this->sourceImage = $sourceImage;
  }
  public function getSourceImage() {
    return $this->sourceImage;
  }
  public function setSourceImageId( $sourceImageId) {
    $this->sourceImageId = $sourceImageId;
  }
  public function getSourceImageId() {
    return $this->sourceImageId;
  }
  public function setSourceSnapshot( $sourceSnapshot) {
    $this->sourceSnapshot = $sourceSnapshot;
  }
  public function getSourceSnapshot() {
    return $this->sourceSnapshot;
  }
  public function setSourceSnapshotId( $sourceSnapshotId) {
    $this->sourceSnapshotId = $sourceSnapshotId;
  }
  public function getSourceSnapshotId() {
    return $this->sourceSnapshotId;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setZone( $zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class BackupGuardGoogle_DiskAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_DisksScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_DisksScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_DiskList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Disk';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Disk) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Disk', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_DisksScopedList extends BackupGuardGoogle_Model {
  protected $__disksType = 'BackupGuardGoogle_Disk';
  protected $__disksDataType = 'array';
  public $disks;
  protected $__warningType = 'BackupGuardGoogle_DisksScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setDisks(/* array(BackupGuardGoogle_Disk) */ $disks) {
    $this->assertIsArray($disks, 'BackupGuardGoogle_Disk', __METHOD__);
    $this->disks = $disks;
  }
  public function getDisks() {
    return $this->disks;
  }
  public function setWarning(BackupGuardGoogle_DisksScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_DisksScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_DisksScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_DisksScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_DisksScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_DisksScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_Firewall extends BackupGuardGoogle_Model {
  protected $__allowedType = 'BackupGuardGoogle_FirewallAllowed';
  protected $__allowedDataType = 'array';
  public $allowed;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $selfLink;
  public $sourceRanges;
  public $sourceTags;
  public $targetTags;
  public function setAllowed(/* array(BackupGuardGoogle_FirewallAllowed) */ $allowed) {
    $this->assertIsArray($allowed, 'BackupGuardGoogle_FirewallAllowed', __METHOD__);
    $this->allowed = $allowed;
  }
  public function getAllowed() {
    return $this->allowed;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetwork( $network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceRanges(/* array(BackupGuardGoogle_string) */ $sourceRanges) {
    $this->assertIsArray($sourceRanges, 'BackupGuardGoogle_string', __METHOD__);
    $this->sourceRanges = $sourceRanges;
  }
  public function getSourceRanges() {
    return $this->sourceRanges;
  }
  public function setSourceTags(/* array(BackupGuardGoogle_string) */ $sourceTags) {
    $this->assertIsArray($sourceTags, 'BackupGuardGoogle_string', __METHOD__);
    $this->sourceTags = $sourceTags;
  }
  public function getSourceTags() {
    return $this->sourceTags;
  }
  public function setTargetTags(/* array(BackupGuardGoogle_string) */ $targetTags) {
    $this->assertIsArray($targetTags, 'BackupGuardGoogle_string', __METHOD__);
    $this->targetTags = $targetTags;
  }
  public function getTargetTags() {
    return $this->targetTags;
  }
}

class BackupGuardGoogle_FirewallAllowed extends BackupGuardGoogle_Model {
  public $IPProtocol;
  public $ports;
  public function setIPProtocol( $IPProtocol) {
    $this->IPProtocol = $IPProtocol;
  }
  public function getIPProtocol() {
    return $this->IPProtocol;
  }
  public function setPorts(/* array(BackupGuardGoogle_string) */ $ports) {
    $this->assertIsArray($ports, 'BackupGuardGoogle_string', __METHOD__);
    $this->ports = $ports;
  }
  public function getPorts() {
    return $this->ports;
  }
}

class BackupGuardGoogle_FirewallList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Firewall';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Firewall) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Firewall', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_ForwardingRule extends BackupGuardGoogle_Model {
  public $IPAddress;
  public $IPProtocol;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $portRange;
  public $region;
  public $selfLink;
  public $target;
  public function setIPAddress( $IPAddress) {
    $this->IPAddress = $IPAddress;
  }
  public function getIPAddress() {
    return $this->IPAddress;
  }
  public function setIPProtocol( $IPProtocol) {
    $this->IPProtocol = $IPProtocol;
  }
  public function getIPProtocol() {
    return $this->IPProtocol;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPortRange( $portRange) {
    $this->portRange = $portRange;
  }
  public function getPortRange() {
    return $this->portRange;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTarget( $target) {
    $this->target = $target;
  }
  public function getTarget() {
    return $this->target;
  }
}

class BackupGuardGoogle_ForwardingRuleAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_ForwardingRulesScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_ForwardingRulesScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_ForwardingRuleList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_ForwardingRule';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_ForwardingRule) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_ForwardingRule', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_ForwardingRulesScopedList extends BackupGuardGoogle_Model {
  protected $__forwardingRulesType = 'BackupGuardGoogle_ForwardingRule';
  protected $__forwardingRulesDataType = 'array';
  public $forwardingRules;
  protected $__warningType = 'BackupGuardGoogle_ForwardingRulesScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setForwardingRules(/* array(BackupGuardGoogle_ForwardingRule) */ $forwardingRules) {
    $this->assertIsArray($forwardingRules, 'BackupGuardGoogle_ForwardingRule', __METHOD__);
    $this->forwardingRules = $forwardingRules;
  }
  public function getForwardingRules() {
    return $this->forwardingRules;
  }
  public function setWarning(BackupGuardGoogle_ForwardingRulesScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_ForwardingRulesScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_ForwardingRulesScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_ForwardingRulesScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_ForwardingRulesScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_ForwardingRulesScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_HealthCheckReference extends BackupGuardGoogle_Model {
  public $healthCheck;
  public function setHealthCheck( $healthCheck) {
    $this->healthCheck = $healthCheck;
  }
  public function getHealthCheck() {
    return $this->healthCheck;
  }
}

class BackupGuardGoogle_HealthStatus extends BackupGuardGoogle_Model {
  public $healthState;
  public $instance;
  public $ipAddress;
  public function setHealthState( $healthState) {
    $this->healthState = $healthState;
  }
  public function getHealthState() {
    return $this->healthState;
  }
  public function setInstance( $instance) {
    $this->instance = $instance;
  }
  public function getInstance() {
    return $this->instance;
  }
  public function setIpAddress( $ipAddress) {
    $this->ipAddress = $ipAddress;
  }
  public function getIpAddress() {
    return $this->ipAddress;
  }
}

class BackupGuardGoogle_HttpHealthCheck extends BackupGuardGoogle_Model {
  public $checkIntervalSec;
  public $creationTimestamp;
  public $description;
  public $healthyThreshold;
  public $host;
  public $id;
  public $kind;
  public $name;
  public $port;
  public $requestPath;
  public $selfLink;
  public $timeoutSec;
  public $unhealthyThreshold;
  public function setCheckIntervalSec( $checkIntervalSec) {
    $this->checkIntervalSec = $checkIntervalSec;
  }
  public function getCheckIntervalSec() {
    return $this->checkIntervalSec;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setHealthyThreshold( $healthyThreshold) {
    $this->healthyThreshold = $healthyThreshold;
  }
  public function getHealthyThreshold() {
    return $this->healthyThreshold;
  }
  public function setHost( $host) {
    $this->host = $host;
  }
  public function getHost() {
    return $this->host;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPort( $port) {
    $this->port = $port;
  }
  public function getPort() {
    return $this->port;
  }
  public function setRequestPath( $requestPath) {
    $this->requestPath = $requestPath;
  }
  public function getRequestPath() {
    return $this->requestPath;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTimeoutSec( $timeoutSec) {
    $this->timeoutSec = $timeoutSec;
  }
  public function getTimeoutSec() {
    return $this->timeoutSec;
  }
  public function setUnhealthyThreshold( $unhealthyThreshold) {
    $this->unhealthyThreshold = $unhealthyThreshold;
  }
  public function getUnhealthyThreshold() {
    return $this->unhealthyThreshold;
  }
}

class BackupGuardGoogle_HttpHealthCheckList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_HttpHealthCheck';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_HttpHealthCheck) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_HttpHealthCheck', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_Image extends BackupGuardGoogle_Model {
  public $archiveSizeBytes;
  public $creationTimestamp;
  protected $__deprecatedType = 'BackupGuardGoogle_DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $__rawDiskType = 'BackupGuardGoogle_ImageRawDisk';
  protected $__rawDiskDataType = '';
  public $rawDisk;
  public $selfLink;
  public $sourceType;
  public $status;
  public function setArchiveSizeBytes( $archiveSizeBytes) {
    $this->archiveSizeBytes = $archiveSizeBytes;
  }
  public function getArchiveSizeBytes() {
    return $this->archiveSizeBytes;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(BackupGuardGoogle_DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setRawDisk(BackupGuardGoogle_ImageRawDisk $rawDisk) {
    $this->rawDisk = $rawDisk;
  }
  public function getRawDisk() {
    return $this->rawDisk;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceType( $sourceType) {
    $this->sourceType = $sourceType;
  }
  public function getSourceType() {
    return $this->sourceType;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_ImageList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Image';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Image) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Image', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_ImageRawDisk extends BackupGuardGoogle_Model {
  public $containerType;
  public $sha1Checksum;
  public $source;
  public function setContainerType( $containerType) {
    $this->containerType = $containerType;
  }
  public function getContainerType() {
    return $this->containerType;
  }
  public function setSha1Checksum( $sha1Checksum) {
    $this->sha1Checksum = $sha1Checksum;
  }
  public function getSha1Checksum() {
    return $this->sha1Checksum;
  }
  public function setSource( $source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
}

class BackupGuardGoogle_Instance extends BackupGuardGoogle_Model {
  public $canIpForward;
  public $creationTimestamp;
  public $description;
  protected $__disksType = 'BackupGuardGoogle_AttachedDisk';
  protected $__disksDataType = 'array';
  public $disks;
  public $id;
  public $kind;
  public $machineType;
  protected $__metadataType = 'BackupGuardGoogle_Metadata';
  protected $__metadataDataType = '';
  public $metadata;
  public $name;
  protected $__networkInterfacesType = 'BackupGuardGoogle_NetworkInterface';
  protected $__networkInterfacesDataType = 'array';
  public $networkInterfaces;
  protected $__schedulingType = 'BackupGuardGoogle_Scheduling';
  protected $__schedulingDataType = '';
  public $scheduling;
  public $selfLink;
  protected $__serviceAccountsType = 'BackupGuardGoogle_ServiceAccount';
  protected $__serviceAccountsDataType = 'array';
  public $serviceAccounts;
  public $status;
  public $statusMessage;
  protected $__tagsType = 'BackupGuardGoogle_Tags';
  protected $__tagsDataType = '';
  public $tags;
  public $zone;
  public function setCanIpForward( $canIpForward) {
    $this->canIpForward = $canIpForward;
  }
  public function getCanIpForward() {
    return $this->canIpForward;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDisks(/* array(BackupGuardGoogle_AttachedDisk) */ $disks) {
    $this->assertIsArray($disks, 'BackupGuardGoogle_AttachedDisk', __METHOD__);
    $this->disks = $disks;
  }
  public function getDisks() {
    return $this->disks;
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
  public function setMachineType( $machineType) {
    $this->machineType = $machineType;
  }
  public function getMachineType() {
    return $this->machineType;
  }
  public function setMetadata(BackupGuardGoogle_Metadata $metadata) {
    $this->metadata = $metadata;
  }
  public function getMetadata() {
    return $this->metadata;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetworkInterfaces(/* array(BackupGuardGoogle_NetworkInterface) */ $networkInterfaces) {
    $this->assertIsArray($networkInterfaces, 'BackupGuardGoogle_NetworkInterface', __METHOD__);
    $this->networkInterfaces = $networkInterfaces;
  }
  public function getNetworkInterfaces() {
    return $this->networkInterfaces;
  }
  public function setScheduling(BackupGuardGoogle_Scheduling $scheduling) {
    $this->scheduling = $scheduling;
  }
  public function getScheduling() {
    return $this->scheduling;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setServiceAccounts(/* array(BackupGuardGoogle_ServiceAccount) */ $serviceAccounts) {
    $this->assertIsArray($serviceAccounts, 'BackupGuardGoogle_ServiceAccount', __METHOD__);
    $this->serviceAccounts = $serviceAccounts;
  }
  public function getServiceAccounts() {
    return $this->serviceAccounts;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setStatusMessage( $statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setTags(BackupGuardGoogle_Tags $tags) {
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setZone( $zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class BackupGuardGoogle_InstanceAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_InstancesScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_InstancesScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_InstanceList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Instance';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Instance) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Instance', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_InstanceReference extends BackupGuardGoogle_Model {
  public $instance;
  public function setInstance( $instance) {
    $this->instance = $instance;
  }
  public function getInstance() {
    return $this->instance;
  }
}

class BackupGuardGoogle_InstancesScopedList extends BackupGuardGoogle_Model {
  protected $__instancesType = 'BackupGuardGoogle_Instance';
  protected $__instancesDataType = 'array';
  public $instances;
  protected $__warningType = 'BackupGuardGoogle_InstancesScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setInstances(/* array(BackupGuardGoogle_Instance) */ $instances) {
    $this->assertIsArray($instances, 'BackupGuardGoogle_Instance', __METHOD__);
    $this->instances = $instances;
  }
  public function getInstances() {
    return $this->instances;
  }
  public function setWarning(BackupGuardGoogle_InstancesScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_InstancesScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_InstancesScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_InstancesScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_InstancesScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_InstancesScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_MachineType extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  protected $__deprecatedType = 'BackupGuardGoogle_DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $guestCpus;
  public $id;
  public $imageSpaceGb;
  public $kind;
  public $maximumPersistentDisks;
  public $maximumPersistentDisksSizeGb;
  public $memoryMb;
  public $name;
  protected $__scratchDisksType = 'BackupGuardGoogle_MachineTypeScratchDisks';
  protected $__scratchDisksDataType = 'array';
  public $scratchDisks;
  public $selfLink;
  public $zone;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(BackupGuardGoogle_DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setGuestCpus( $guestCpus) {
    $this->guestCpus = $guestCpus;
  }
  public function getGuestCpus() {
    return $this->guestCpus;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageSpaceGb( $imageSpaceGb) {
    $this->imageSpaceGb = $imageSpaceGb;
  }
  public function getImageSpaceGb() {
    return $this->imageSpaceGb;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaximumPersistentDisks( $maximumPersistentDisks) {
    $this->maximumPersistentDisks = $maximumPersistentDisks;
  }
  public function getMaximumPersistentDisks() {
    return $this->maximumPersistentDisks;
  }
  public function setMaximumPersistentDisksSizeGb( $maximumPersistentDisksSizeGb) {
    $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
  }
  public function getMaximumPersistentDisksSizeGb() {
    return $this->maximumPersistentDisksSizeGb;
  }
  public function setMemoryMb( $memoryMb) {
    $this->memoryMb = $memoryMb;
  }
  public function getMemoryMb() {
    return $this->memoryMb;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setScratchDisks(/* array(BackupGuardGoogle_MachineTypeScratchDisks) */ $scratchDisks) {
    $this->assertIsArray($scratchDisks, 'BackupGuardGoogle_MachineTypeScratchDisks', __METHOD__);
    $this->scratchDisks = $scratchDisks;
  }
  public function getScratchDisks() {
    return $this->scratchDisks;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setZone( $zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class BackupGuardGoogle_MachineTypeAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_MachineTypesScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_MachineTypesScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_MachineTypeList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_MachineType';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_MachineType) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_MachineType', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_MachineTypeScratchDisks extends BackupGuardGoogle_Model {
  public $diskGb;
  public function setDiskGb( $diskGb) {
    $this->diskGb = $diskGb;
  }
  public function getDiskGb() {
    return $this->diskGb;
  }
}

class BackupGuardGoogle_MachineTypesScopedList extends BackupGuardGoogle_Model {
  protected $__machineTypesType = 'BackupGuardGoogle_MachineType';
  protected $__machineTypesDataType = 'array';
  public $machineTypes;
  protected $__warningType = 'BackupGuardGoogle_MachineTypesScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setMachineTypes(/* array(BackupGuardGoogle_MachineType) */ $machineTypes) {
    $this->assertIsArray($machineTypes, 'BackupGuardGoogle_MachineType', __METHOD__);
    $this->machineTypes = $machineTypes;
  }
  public function getMachineTypes() {
    return $this->machineTypes;
  }
  public function setWarning(BackupGuardGoogle_MachineTypesScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_MachineTypesScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_MachineTypesScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_MachineTypesScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_MachineTypesScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_MachineTypesScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_Metadata extends BackupGuardGoogle_Model {
  public $fingerprint;
  protected $__itemsType = 'BackupGuardGoogle_MetadataItems';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setFingerprint( $fingerprint) {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint() {
    return $this->fingerprint;
  }
  public function setItems(/* array(BackupGuardGoogle_MetadataItems) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_MetadataItems', __METHOD__);
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

class BackupGuardGoogle_MetadataItems extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_Network extends BackupGuardGoogle_Model {
  public $IPv4Range;
  public $creationTimestamp;
  public $description;
  public $gatewayIPv4;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public function setIPv4Range( $IPv4Range) {
    $this->IPv4Range = $IPv4Range;
  }
  public function getIPv4Range() {
    return $this->IPv4Range;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setGatewayIPv4( $gatewayIPv4) {
    $this->gatewayIPv4 = $gatewayIPv4;
  }
  public function getGatewayIPv4() {
    return $this->gatewayIPv4;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_NetworkInterface extends BackupGuardGoogle_Model {
  protected $__accessConfigsType = 'BackupGuardGoogle_AccessConfig';
  protected $__accessConfigsDataType = 'array';
  public $accessConfigs;
  public $name;
  public $network;
  public $networkIP;
  public function setAccessConfigs(/* array(BackupGuardGoogle_AccessConfig) */ $accessConfigs) {
    $this->assertIsArray($accessConfigs, 'BackupGuardGoogle_AccessConfig', __METHOD__);
    $this->accessConfigs = $accessConfigs;
  }
  public function getAccessConfigs() {
    return $this->accessConfigs;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetwork( $network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setNetworkIP( $networkIP) {
    $this->networkIP = $networkIP;
  }
  public function getNetworkIP() {
    return $this->networkIP;
  }
}

class BackupGuardGoogle_NetworkList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Network';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Network) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Network', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_Operation extends BackupGuardGoogle_Model {
  public $clientOperationId;
  public $creationTimestamp;
  public $endTime;
  protected $__errorType = 'BackupGuardGoogle_OperationError';
  protected $__errorDataType = '';
  public $error;
  public $httpErrorMessage;
  public $httpErrorStatusCode;
  public $id;
  public $insertTime;
  public $kind;
  public $name;
  public $operationType;
  public $progress;
  public $region;
  public $selfLink;
  public $startTime;
  public $status;
  public $statusMessage;
  public $targetId;
  public $targetLink;
  public $user;
  protected $__warningsType = 'BackupGuardGoogle_OperationWarnings';
  protected $__warningsDataType = 'array';
  public $warnings;
  public $zone;
  public function setClientOperationId( $clientOperationId) {
    $this->clientOperationId = $clientOperationId;
  }
  public function getClientOperationId() {
    return $this->clientOperationId;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setError(BackupGuardGoogle_OperationError $error) {
    $this->error = $error;
  }
  public function getError() {
    return $this->error;
  }
  public function setHttpErrorMessage( $httpErrorMessage) {
    $this->httpErrorMessage = $httpErrorMessage;
  }
  public function getHttpErrorMessage() {
    return $this->httpErrorMessage;
  }
  public function setHttpErrorStatusCode( $httpErrorStatusCode) {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }
  public function getHttpErrorStatusCode() {
    return $this->httpErrorStatusCode;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInsertTime( $insertTime) {
    $this->insertTime = $insertTime;
  }
  public function getInsertTime() {
    return $this->insertTime;
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
  public function setOperationType( $operationType) {
    $this->operationType = $operationType;
  }
  public function getOperationType() {
    return $this->operationType;
  }
  public function setProgress( $progress) {
    $this->progress = $progress;
  }
  public function getProgress() {
    return $this->progress;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
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
  public function setStatusMessage( $statusMessage) {
    $this->statusMessage = $statusMessage;
  }
  public function getStatusMessage() {
    return $this->statusMessage;
  }
  public function setTargetId( $targetId) {
    $this->targetId = $targetId;
  }
  public function getTargetId() {
    return $this->targetId;
  }
  public function setTargetLink( $targetLink) {
    $this->targetLink = $targetLink;
  }
  public function getTargetLink() {
    return $this->targetLink;
  }
  public function setUser( $user) {
    $this->user = $user;
  }
  public function getUser() {
    return $this->user;
  }
  public function setWarnings(/* array(BackupGuardGoogle_OperationWarnings) */ $warnings) {
    $this->assertIsArray($warnings, 'BackupGuardGoogle_OperationWarnings', __METHOD__);
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
  public function setZone( $zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class BackupGuardGoogle_OperationAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_OperationsScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_OperationsScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_OperationError extends BackupGuardGoogle_Model {
  protected $__errorsType = 'BackupGuardGoogle_OperationErrorErrors';
  protected $__errorsDataType = 'array';
  public $errors;
  public function setErrors(/* array(BackupGuardGoogle_OperationErrorErrors) */ $errors) {
    $this->assertIsArray($errors, 'BackupGuardGoogle_OperationErrorErrors', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
  }
}

class BackupGuardGoogle_OperationErrorErrors extends BackupGuardGoogle_Model {
  public $code;
  public $location;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
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
}

class BackupGuardGoogle_OperationList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Operation';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Operation) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Operation', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_OperationWarnings extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_OperationWarningsData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_OperationWarningsData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_OperationWarningsData', __METHOD__);
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

class BackupGuardGoogle_OperationWarningsData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_OperationsScopedList extends BackupGuardGoogle_Model {
  protected $__operationsType = 'BackupGuardGoogle_Operation';
  protected $__operationsDataType = 'array';
  public $operations;
  protected $__warningType = 'BackupGuardGoogle_OperationsScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setOperations(/* array(BackupGuardGoogle_Operation) */ $operations) {
    $this->assertIsArray($operations, 'BackupGuardGoogle_Operation', __METHOD__);
    $this->operations = $operations;
  }
  public function getOperations() {
    return $this->operations;
  }
  public function setWarning(BackupGuardGoogle_OperationsScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_OperationsScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_OperationsScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_OperationsScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_OperationsScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_OperationsScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_Project extends BackupGuardGoogle_Model {
  protected $__commonInstanceMetadataType = 'BackupGuardGoogle_Metadata';
  protected $__commonInstanceMetadataDataType = '';
  public $commonInstanceMetadata;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $__quotasType = 'BackupGuardGoogle_Quota';
  protected $__quotasDataType = 'array';
  public $quotas;
  public $selfLink;
  public function setCommonInstanceMetadata(BackupGuardGoogle_Metadata $commonInstanceMetadata) {
    $this->commonInstanceMetadata = $commonInstanceMetadata;
  }
  public function getCommonInstanceMetadata() {
    return $this->commonInstanceMetadata;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setQuotas(/* array(BackupGuardGoogle_Quota) */ $quotas) {
    $this->assertIsArray($quotas, 'BackupGuardGoogle_Quota', __METHOD__);
    $this->quotas = $quotas;
  }
  public function getQuotas() {
    return $this->quotas;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_Quota extends BackupGuardGoogle_Model {
  public $limit;
  public $metric;
  public $usage;
  public function setLimit( $limit) {
    $this->limit = $limit;
  }
  public function getLimit() {
    return $this->limit;
  }
  public function setMetric( $metric) {
    $this->metric = $metric;
  }
  public function getMetric() {
    return $this->metric;
  }
  public function setUsage( $usage) {
    $this->usage = $usage;
  }
  public function getUsage() {
    return $this->usage;
  }
}

class BackupGuardGoogle_Region extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  protected $__deprecatedType = 'BackupGuardGoogle_DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $__quotasType = 'BackupGuardGoogle_Quota';
  protected $__quotasDataType = 'array';
  public $quotas;
  public $selfLink;
  public $status;
  public $zones;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(BackupGuardGoogle_DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setQuotas(/* array(BackupGuardGoogle_Quota) */ $quotas) {
    $this->assertIsArray($quotas, 'BackupGuardGoogle_Quota', __METHOD__);
    $this->quotas = $quotas;
  }
  public function getQuotas() {
    return $this->quotas;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setZones(/* array(BackupGuardGoogle_string) */ $zones) {
    $this->assertIsArray($zones, 'BackupGuardGoogle_string', __METHOD__);
    $this->zones = $zones;
  }
  public function getZones() {
    return $this->zones;
  }
}

class BackupGuardGoogle_RegionList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Region';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Region) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Region', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_Route extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  public $description;
  public $destRange;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $nextHopGateway;
  public $nextHopInstance;
  public $nextHopIp;
  public $nextHopNetwork;
  public $priority;
  public $selfLink;
  public $tags;
  protected $__warningsType = 'BackupGuardGoogle_RouteWarnings';
  protected $__warningsDataType = 'array';
  public $warnings;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDestRange( $destRange) {
    $this->destRange = $destRange;
  }
  public function getDestRange() {
    return $this->destRange;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNetwork( $network) {
    $this->network = $network;
  }
  public function getNetwork() {
    return $this->network;
  }
  public function setNextHopGateway( $nextHopGateway) {
    $this->nextHopGateway = $nextHopGateway;
  }
  public function getNextHopGateway() {
    return $this->nextHopGateway;
  }
  public function setNextHopInstance( $nextHopInstance) {
    $this->nextHopInstance = $nextHopInstance;
  }
  public function getNextHopInstance() {
    return $this->nextHopInstance;
  }
  public function setNextHopIp( $nextHopIp) {
    $this->nextHopIp = $nextHopIp;
  }
  public function getNextHopIp() {
    return $this->nextHopIp;
  }
  public function setNextHopNetwork( $nextHopNetwork) {
    $this->nextHopNetwork = $nextHopNetwork;
  }
  public function getNextHopNetwork() {
    return $this->nextHopNetwork;
  }
  public function setPriority( $priority) {
    $this->priority = $priority;
  }
  public function getPriority() {
    return $this->priority;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTags(/* array(BackupGuardGoogle_string) */ $tags) {
    $this->assertIsArray($tags, 'BackupGuardGoogle_string', __METHOD__);
    $this->tags = $tags;
  }
  public function getTags() {
    return $this->tags;
  }
  public function setWarnings(/* array(BackupGuardGoogle_RouteWarnings) */ $warnings) {
    $this->assertIsArray($warnings, 'BackupGuardGoogle_RouteWarnings', __METHOD__);
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
}

class BackupGuardGoogle_RouteList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Route';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Route) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Route', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_RouteWarnings extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_RouteWarningsData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_RouteWarningsData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_RouteWarningsData', __METHOD__);
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

class BackupGuardGoogle_RouteWarningsData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_Scheduling extends BackupGuardGoogle_Model {
  public $automaticRestart;
  public $onHostMaintenance;
  public function setAutomaticRestart( $automaticRestart) {
    $this->automaticRestart = $automaticRestart;
  }
  public function getAutomaticRestart() {
    return $this->automaticRestart;
  }
  public function setOnHostMaintenance( $onHostMaintenance) {
    $this->onHostMaintenance = $onHostMaintenance;
  }
  public function getOnHostMaintenance() {
    return $this->onHostMaintenance;
  }
}

class BackupGuardGoogle_SerialPortOutput extends BackupGuardGoogle_Model {
  public $contents;
  public $kind;
  public $selfLink;
  public function setContents( $contents) {
    $this->contents = $contents;
  }
  public function getContents() {
    return $this->contents;
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
}

class BackupGuardGoogle_ServiceAccount extends BackupGuardGoogle_Model {
  public $email;
  public $scopes;
  public function setEmail( $email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setScopes(/* array(BackupGuardGoogle_string) */ $scopes) {
    $this->assertIsArray($scopes, 'BackupGuardGoogle_string', __METHOD__);
    $this->scopes = $scopes;
  }
  public function getScopes() {
    return $this->scopes;
  }
}

class BackupGuardGoogle_Snapshot extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  public $description;
  public $diskSizeGb;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public $sourceDisk;
  public $sourceDiskId;
  public $status;
  public $storageBytes;
  public $storageBytesStatus;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDiskSizeGb( $diskSizeGb) {
    $this->diskSizeGb = $diskSizeGb;
  }
  public function getDiskSizeGb() {
    return $this->diskSizeGb;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceDisk( $sourceDisk) {
    $this->sourceDisk = $sourceDisk;
  }
  public function getSourceDisk() {
    return $this->sourceDisk;
  }
  public function setSourceDiskId( $sourceDiskId) {
    $this->sourceDiskId = $sourceDiskId;
  }
  public function getSourceDiskId() {
    return $this->sourceDiskId;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setStorageBytes( $storageBytes) {
    $this->storageBytes = $storageBytes;
  }
  public function getStorageBytes() {
    return $this->storageBytes;
  }
  public function setStorageBytesStatus( $storageBytesStatus) {
    $this->storageBytesStatus = $storageBytesStatus;
  }
  public function getStorageBytesStatus() {
    return $this->storageBytesStatus;
  }
}

class BackupGuardGoogle_SnapshotList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Snapshot';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Snapshot) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Snapshot', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_Tags extends BackupGuardGoogle_Model {
  public $fingerprint;
  public $items;
  public function setFingerprint( $fingerprint) {
    $this->fingerprint = $fingerprint;
  }
  public function getFingerprint() {
    return $this->fingerprint;
  }
  public function setItems(/* array(BackupGuardGoogle_string) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_string', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
}

class BackupGuardGoogle_TargetInstance extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  public $description;
  public $id;
  public $instance;
  public $kind;
  public $name;
  public $natPolicy;
  public $selfLink;
  public $zone;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
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
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNatPolicy( $natPolicy) {
    $this->natPolicy = $natPolicy;
  }
  public function getNatPolicy() {
    return $this->natPolicy;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setZone( $zone) {
    $this->zone = $zone;
  }
  public function getZone() {
    return $this->zone;
  }
}

class BackupGuardGoogle_TargetInstanceAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_TargetInstancesScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_TargetInstancesScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_TargetInstanceList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_TargetInstance';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_TargetInstance) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_TargetInstance', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_TargetInstancesScopedList extends BackupGuardGoogle_Model {
  protected $__targetInstancesType = 'BackupGuardGoogle_TargetInstance';
  protected $__targetInstancesDataType = 'array';
  public $targetInstances;
  protected $__warningType = 'BackupGuardGoogle_TargetInstancesScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setTargetInstances(/* array(BackupGuardGoogle_TargetInstance) */ $targetInstances) {
    $this->assertIsArray($targetInstances, 'BackupGuardGoogle_TargetInstance', __METHOD__);
    $this->targetInstances = $targetInstances;
  }
  public function getTargetInstances() {
    return $this->targetInstances;
  }
  public function setWarning(BackupGuardGoogle_TargetInstancesScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_TargetInstancesScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_TargetInstancesScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_TargetInstancesScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_TargetInstancesScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_TargetInstancesScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_TargetPool extends BackupGuardGoogle_Model {
  public $backupPool;
  public $creationTimestamp;
  public $description;
  public $failoverRatio;
  public $healthChecks;
  public $id;
  public $instances;
  public $kind;
  public $name;
  public $region;
  public $selfLink;
  public $sessionAffinity;
  public function setBackupPool( $backupPool) {
    $this->backupPool = $backupPool;
  }
  public function getBackupPool() {
    return $this->backupPool;
  }
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setFailoverRatio( $failoverRatio) {
    $this->failoverRatio = $failoverRatio;
  }
  public function getFailoverRatio() {
    return $this->failoverRatio;
  }
  public function setHealthChecks(/* array(BackupGuardGoogle_string) */ $healthChecks) {
    $this->assertIsArray($healthChecks, 'BackupGuardGoogle_string', __METHOD__);
    $this->healthChecks = $healthChecks;
  }
  public function getHealthChecks() {
    return $this->healthChecks;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInstances(/* array(BackupGuardGoogle_string) */ $instances) {
    $this->assertIsArray($instances, 'BackupGuardGoogle_string', __METHOD__);
    $this->instances = $instances;
  }
  public function getInstances() {
    return $this->instances;
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
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSessionAffinity( $sessionAffinity) {
    $this->sessionAffinity = $sessionAffinity;
  }
  public function getSessionAffinity() {
    return $this->sessionAffinity;
  }
}

class BackupGuardGoogle_TargetPoolAggregatedList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_TargetPoolsScopedList';
  protected $__itemsDataType = 'map';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(BackupGuardGoogle_TargetPoolsScopedList $items) {
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_TargetPoolInstanceHealth extends BackupGuardGoogle_Model {
  protected $__healthStatusType = 'BackupGuardGoogle_HealthStatus';
  protected $__healthStatusDataType = 'array';
  public $healthStatus;
  public $kind;
  public function setHealthStatus(/* array(BackupGuardGoogle_HealthStatus) */ $healthStatus) {
    $this->assertIsArray($healthStatus, 'BackupGuardGoogle_HealthStatus', __METHOD__);
    $this->healthStatus = $healthStatus;
  }
  public function getHealthStatus() {
    return $this->healthStatus;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_TargetPoolList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_TargetPool';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_TargetPool) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_TargetPool', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_TargetPoolsAddHealthCheckRequest extends BackupGuardGoogle_Model {
  protected $__healthChecksType = 'BackupGuardGoogle_HealthCheckReference';
  protected $__healthChecksDataType = 'array';
  public $healthChecks;
  public function setHealthChecks(/* array(BackupGuardGoogle_HealthCheckReference) */ $healthChecks) {
    $this->assertIsArray($healthChecks, 'BackupGuardGoogle_HealthCheckReference', __METHOD__);
    $this->healthChecks = $healthChecks;
  }
  public function getHealthChecks() {
    return $this->healthChecks;
  }
}

class BackupGuardGoogle_TargetPoolsAddInstanceRequest extends BackupGuardGoogle_Model {
  protected $__instancesType = 'BackupGuardGoogle_InstanceReference';
  protected $__instancesDataType = 'array';
  public $instances;
  public function setInstances(/* array(BackupGuardGoogle_InstanceReference) */ $instances) {
    $this->assertIsArray($instances, 'BackupGuardGoogle_InstanceReference', __METHOD__);
    $this->instances = $instances;
  }
  public function getInstances() {
    return $this->instances;
  }
}

class BackupGuardGoogle_TargetPoolsRemoveHealthCheckRequest extends BackupGuardGoogle_Model {
  protected $__healthChecksType = 'BackupGuardGoogle_HealthCheckReference';
  protected $__healthChecksDataType = 'array';
  public $healthChecks;
  public function setHealthChecks(/* array(BackupGuardGoogle_HealthCheckReference) */ $healthChecks) {
    $this->assertIsArray($healthChecks, 'BackupGuardGoogle_HealthCheckReference', __METHOD__);
    $this->healthChecks = $healthChecks;
  }
  public function getHealthChecks() {
    return $this->healthChecks;
  }
}

class BackupGuardGoogle_TargetPoolsRemoveInstanceRequest extends BackupGuardGoogle_Model {
  protected $__instancesType = 'BackupGuardGoogle_InstanceReference';
  protected $__instancesDataType = 'array';
  public $instances;
  public function setInstances(/* array(BackupGuardGoogle_InstanceReference) */ $instances) {
    $this->assertIsArray($instances, 'BackupGuardGoogle_InstanceReference', __METHOD__);
    $this->instances = $instances;
  }
  public function getInstances() {
    return $this->instances;
  }
}

class BackupGuardGoogle_TargetPoolsScopedList extends BackupGuardGoogle_Model {
  protected $__targetPoolsType = 'BackupGuardGoogle_TargetPool';
  protected $__targetPoolsDataType = 'array';
  public $targetPools;
  protected $__warningType = 'BackupGuardGoogle_TargetPoolsScopedListWarning';
  protected $__warningDataType = '';
  public $warning;
  public function setTargetPools(/* array(BackupGuardGoogle_TargetPool) */ $targetPools) {
    $this->assertIsArray($targetPools, 'BackupGuardGoogle_TargetPool', __METHOD__);
    $this->targetPools = $targetPools;
  }
  public function getTargetPools() {
    return $this->targetPools;
  }
  public function setWarning(BackupGuardGoogle_TargetPoolsScopedListWarning $warning) {
    $this->warning = $warning;
  }
  public function getWarning() {
    return $this->warning;
  }
}

class BackupGuardGoogle_TargetPoolsScopedListWarning extends BackupGuardGoogle_Model {
  public $code;
  protected $__dataType = 'BackupGuardGoogle_TargetPoolsScopedListWarningData';
  protected $__dataDataType = 'array';
  public $data;
  public $message;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
  }
  public function setData(/* array(BackupGuardGoogle_TargetPoolsScopedListWarningData) */ $data) {
    $this->assertIsArray($data, 'BackupGuardGoogle_TargetPoolsScopedListWarningData', __METHOD__);
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

class BackupGuardGoogle_TargetPoolsScopedListWarningData extends BackupGuardGoogle_Model {
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

class BackupGuardGoogle_TargetReference extends BackupGuardGoogle_Model {
  public $target;
  public function setTarget( $target) {
    $this->target = $target;
  }
  public function getTarget() {
    return $this->target;
  }
}

class BackupGuardGoogle_Zone extends BackupGuardGoogle_Model {
  public $creationTimestamp;
  protected $__deprecatedType = 'BackupGuardGoogle_DeprecationStatus';
  protected $__deprecatedDataType = '';
  public $deprecated;
  public $description;
  public $id;
  public $kind;
  protected $__maintenanceWindowsType = 'BackupGuardGoogle_ZoneMaintenanceWindows';
  protected $__maintenanceWindowsDataType = 'array';
  public $maintenanceWindows;
  public $name;
  public $region;
  public $selfLink;
  public $status;
  public function setCreationTimestamp( $creationTimestamp) {
    $this->creationTimestamp = $creationTimestamp;
  }
  public function getCreationTimestamp() {
    return $this->creationTimestamp;
  }
  public function setDeprecated(BackupGuardGoogle_DeprecationStatus $deprecated) {
    $this->deprecated = $deprecated;
  }
  public function getDeprecated() {
    return $this->deprecated;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
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
  public function setMaintenanceWindows(/* array(BackupGuardGoogle_ZoneMaintenanceWindows) */ $maintenanceWindows) {
    $this->assertIsArray($maintenanceWindows, 'BackupGuardGoogle_ZoneMaintenanceWindows', __METHOD__);
    $this->maintenanceWindows = $maintenanceWindows;
  }
  public function getMaintenanceWindows() {
    return $this->maintenanceWindows;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_ZoneList extends BackupGuardGoogle_Model {
  public $id;
  protected $__itemsType = 'BackupGuardGoogle_Zone';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItems(/* array(BackupGuardGoogle_Zone) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Zone', __METHOD__);
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
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_ZoneMaintenanceWindows extends BackupGuardGoogle_Model {
  public $beginTime;
  public $description;
  public $endTime;
  public $name;
  public function setBeginTime( $beginTime) {
    $this->beginTime = $beginTime;
  }
  public function getBeginTime() {
    return $this->beginTime;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}
