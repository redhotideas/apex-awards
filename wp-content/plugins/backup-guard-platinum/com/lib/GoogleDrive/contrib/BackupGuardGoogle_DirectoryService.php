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
   * The "chromeosdevices" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $chromeosdevices = $adminService->chromeosdevices;
   *  </code>
   */
  class BackupGuardGoogle_ChromeosdevicesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Retrieve Chrome OS Device (chromeosdevices.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @return BackupGuardGoogle_ChromeOsDevice
     */
    public function get($customerId, $deviceId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'deviceId' => $deviceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ChromeOsDevice($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve all Chrome OS Devices of a customer (paginated) (chromeosdevices.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return. Default is 100
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string query Search string in the format given at http://support.google.com/chromeos/a/bin/answer.py?hl=en=1698333
     * @opt_param string sortOrder Whether to return results in ascending or descending order. Only of use when orderBy is also used
     * @return BackupGuardGoogle_ChromeOsDevices
     */
    public function listChromeosdevices($customerId, $optParams = array()) {
      $params = array('customerId' => $customerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ChromeOsDevices($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Chrome OS Device. This method supports patch semantics. (chromeosdevices.patch)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param BackupGuardGoogle_ChromeOsDevice $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @return BackupGuardGoogle_ChromeOsDevice
     */
    public function patch($customerId, $deviceId, BackupGuardGoogle_ChromeOsDevice $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ChromeOsDevice($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Chrome OS Device (chromeosdevices.update)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $deviceId Immutable id of Chrome OS Device
     * @param BackupGuardGoogle_ChromeOsDevice $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @return BackupGuardGoogle_ChromeOsDevice
     */
    public function update($customerId, $deviceId, BackupGuardGoogle_ChromeOsDevice $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_ChromeOsDevice($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "groups" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $groups = $adminService->groups;
   *  </code>
   */
  class BackupGuardGoogle_GroupsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Delete Group (groups.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     */
    public function delete($groupKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieve Group (groups.get)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Group
     */
    public function get($groupKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Group($data);
      } else {
        return $data;
      }
    }
    /**
     * Create Group (groups.insert)
     *
     * @param BackupGuardGoogle_Group $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Group
     */
    public function insert(BackupGuardGoogle_Group $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Group($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve all groups in a domain (paginated) (groups.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string customer Immutable id of the Google Apps account. In case of multi-domain, to fetch all groups for a customer, fill this field instead of domain.
     * @opt_param string domain Name of the domain. Fill this field to get groups from only this domain. To return all groups in a multi-domain fill customer field instead.
     * @opt_param int maxResults Maximum number of results to return. Default is 200
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string userKey Email or immutable Id of the user if only those groups are to be listed, the given user is a member of. If Id, it should match with id of user object
     * @return BackupGuardGoogle_Groups
     */
    public function listGroups($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Groups($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Group. This method supports patch semantics. (groups.patch)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param BackupGuardGoogle_Group $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Group
     */
    public function patch($groupKey, BackupGuardGoogle_Group $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Group($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Group (groups.update)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param BackupGuardGoogle_Group $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Group
     */
    public function update($groupKey, BackupGuardGoogle_Group $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Group($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "aliases" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $aliases = $adminService->aliases;
   *  </code>
   */
  class BackupGuardGoogle_GroupsAliasesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Remove a alias for the group (aliases.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $alias The alias to be removed
     * @param array $optParams Optional parameters.
     */
    public function delete($groupKey, $alias, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'alias' => $alias);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Add a alias for the group (aliases.insert)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param BackupGuardGoogle_Alias $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Alias
     */
    public function insert($groupKey, BackupGuardGoogle_Alias $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Alias($data);
      } else {
        return $data;
      }
    }
    /**
     * List all aliases for a group (aliases.list)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Aliases
     */
    public function listGroupsAliases($groupKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Aliases($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "members" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $members = $adminService->members;
   *  </code>
   */
  class BackupGuardGoogle_MembersServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Remove membership. (members.delete)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $memberKey Email or immutable Id of the member
     * @param array $optParams Optional parameters.
     */
    public function delete($groupKey, $memberKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieve Group Member (members.get)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param string $memberKey Email or immutable Id of the member
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Member
     */
    public function get($groupKey, $memberKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Member($data);
      } else {
        return $data;
      }
    }
    /**
     * Add user to the specified group. (members.insert)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param BackupGuardGoogle_Member $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Member
     */
    public function insert($groupKey, BackupGuardGoogle_Member $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Member($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve all members in a group (paginated) (members.list)
     *
     * @param string $groupKey Email or immutable Id of the group
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return. Default is 200
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string roles Comma separated role values to filter list results on.
     * @return BackupGuardGoogle_Members
     */
    public function listMembers($groupKey, $optParams = array()) {
      $params = array('groupKey' => $groupKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Members($data);
      } else {
        return $data;
      }
    }
    /**
     * Update membership of a user in the specified group. This method supports patch semantics.
     * (members.patch)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param string $memberKey Email or immutable Id of the user. If Id, it should match with id of member object
     * @param BackupGuardGoogle_Member $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Member
     */
    public function patch($groupKey, $memberKey, BackupGuardGoogle_Member $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Member($data);
      } else {
        return $data;
      }
    }
    /**
     * Update membership of a user in the specified group. (members.update)
     *
     * @param string $groupKey Email or immutable Id of the group. If Id, it should match with id of group object
     * @param string $memberKey Email or immutable Id of the user. If Id, it should match with id of member object
     * @param BackupGuardGoogle_Member $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Member
     */
    public function update($groupKey, $memberKey, BackupGuardGoogle_Member $postBody, $optParams = array()) {
      $params = array('groupKey' => $groupKey, 'memberKey' => $memberKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Member($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "mobiledevices" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $mobiledevices = $adminService->mobiledevices;
   *  </code>
   */
  class BackupGuardGoogle_MobiledevicesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Take action on Mobile Device (mobiledevices.action)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param BackupGuardGoogle_MobileDeviceAction $postBody
     * @param array $optParams Optional parameters.
     */
    public function action($customerId, $resourceId, BackupGuardGoogle_MobileDeviceAction $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'resourceId' => $resourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('action', array($params));
      return $data;
    }
    /**
     * Delete Mobile Device (mobiledevices.delete)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     */
    public function delete($customerId, $resourceId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieve Mobile Device (mobiledevices.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $resourceId Immutable id of Mobile Device
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @return BackupGuardGoogle_MobileDevice
     */
    public function get($customerId, $resourceId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'resourceId' => $resourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_MobileDevice($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve all Mobile Devices of a customer (paginated) (mobiledevices.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults Maximum number of results to return. Default is 100
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string projection Restrict information returned to a set of selected fields.
     * @opt_param string query Search string in the format given at http://support.google.com/a/bin/answer.py?hl=en=1408863#search
     * @opt_param string sortOrder Whether to return results in ascending or descending order. Only of use when orderBy is also used
     * @return BackupGuardGoogle_MobileDevices
     */
    public function listMobiledevices($customerId, $optParams = array()) {
      $params = array('customerId' => $customerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_MobileDevices($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "orgunits" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $orgunits = $adminService->orgunits;
   *  </code>
   */
  class BackupGuardGoogle_OrgunitsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Remove Organization Unit (orgunits.delete)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param array $optParams Optional parameters.
     */
    public function delete($customerId, $orgUnitPath, $optParams = array()) {
      $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieve Organization Unit (orgunits.get)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_OrgUnit
     */
    public function get($customerId, $orgUnitPath, $optParams = array()) {
      $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OrgUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * Add Organization Unit (orgunits.insert)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param BackupGuardGoogle_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_OrgUnit
     */
    public function insert($customerId, BackupGuardGoogle_OrgUnit $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OrgUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve all Organization Units (orgunits.list)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param array $optParams Optional parameters.
     *
     * @opt_param string orgUnitPath the URL-encoded organization unit
     * @opt_param string type Whether to return all sub-organizations or just immediate children
     * @return BackupGuardGoogle_OrgUnits
     */
    public function listOrgunits($customerId, $optParams = array()) {
      $params = array('customerId' => $customerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OrgUnits($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Organization Unit. This method supports patch semantics. (orgunits.patch)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param BackupGuardGoogle_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_OrgUnit
     */
    public function patch($customerId, $orgUnitPath, BackupGuardGoogle_OrgUnit $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OrgUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * Update Organization Unit (orgunits.update)
     *
     * @param string $customerId Immutable id of the Google Apps account
     * @param string $orgUnitPath Full path of the organization unit
     * @param BackupGuardGoogle_OrgUnit $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_OrgUnit
     */
    public function update($customerId, $orgUnitPath, BackupGuardGoogle_OrgUnit $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'orgUnitPath' => $orgUnitPath, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_OrgUnit($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "users" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $users = $adminService->users;
   *  </code>
   */
  class BackupGuardGoogle_UsersServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Delete user (users.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     */
    public function delete($userKey, $optParams = array()) {
      $params = array('userKey' => $userKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * retrieve user (users.get)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_User
     */
    public function get($userKey, $optParams = array()) {
      $params = array('userKey' => $userKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_User($data);
      } else {
        return $data;
      }
    }
    /**
     * create user. (users.insert)
     *
     * @param BackupGuardGoogle_User $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_User
     */
    public function insert(BackupGuardGoogle_User $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_User($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieve either deleted users or all users in a domain (paginated) (users.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string customer Immutable id of the Google Apps account. In case of multi-domain, to fetch all users for a customer, fill this field instead of domain.
     * @opt_param string domain Name of the domain. Fill this field to get users from only this domain. To return all users in a multi-domain fill customer field instead.
     * @opt_param int maxResults Maximum number of results to return. Default is 100. Max allowed is 500
     * @opt_param string orderBy Column to use for sorting results
     * @opt_param string pageToken Token to specify next page in the list
     * @opt_param string query Query string for prefix matching searches. Should be of the form "key:value*" where key can be "email", "givenName" or "familyName". The asterisk is required, for example: "givenName:Ann*" is a valid query.
     * @opt_param string showDeleted If set to true retrieves the list of deleted users. Default is false
     * @opt_param string sortOrder Whether to return results in ascending or descending order.
     * @return BackupGuardGoogle_Users
     */
    public function listUsers($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Users($data);
      } else {
        return $data;
      }
    }
    /**
     * change admin status of a user (users.makeAdmin)
     *
     * @param string $userKey Email or immutable Id of the user as admin
     * @param BackupGuardGoogle_UserMakeAdmin $postBody
     * @param array $optParams Optional parameters.
     */
    public function makeAdmin($userKey, BackupGuardGoogle_UserMakeAdmin $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('makeAdmin', array($params));
      return $data;
    }
    /**
     * update user. This method supports patch semantics. (users.patch)
     *
     * @param string $userKey Email or immutable Id of the user. If Id, it should match with id of user object
     * @param BackupGuardGoogle_User $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_User
     */
    public function patch($userKey, BackupGuardGoogle_User $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_User($data);
      } else {
        return $data;
      }
    }
    /**
     * Undelete a deleted user (users.undelete)
     *
     * @param string $userKey The immutable id of the user
     * @param BackupGuardGoogle_UserUndelete $postBody
     * @param array $optParams Optional parameters.
     */
    public function undelete($userKey, BackupGuardGoogle_UserUndelete $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('undelete', array($params));
      return $data;
    }
    /**
     * update user (users.update)
     *
     * @param string $userKey Email or immutable Id of the user. If Id, it should match with id of user object
     * @param BackupGuardGoogle_User $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_User
     */
    public function update($userKey, BackupGuardGoogle_User $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_User($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "aliases" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $aliases = $adminService->aliases;
   *  </code>
   */
  class BackupGuardGoogle_UsersAliasesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Remove a alias for the user (aliases.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param string $alias The alias to be removed
     * @param array $optParams Optional parameters.
     */
    public function delete($userKey, $alias, $optParams = array()) {
      $params = array('userKey' => $userKey, 'alias' => $alias);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Add a alias for the user (aliases.insert)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param BackupGuardGoogle_Alias $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Alias
     */
    public function insert($userKey, BackupGuardGoogle_Alias $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Alias($data);
      } else {
        return $data;
      }
    }
    /**
     * List all aliases for a user (aliases.list)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Aliases
     */
    public function listUsersAliases($userKey, $optParams = array()) {
      $params = array('userKey' => $userKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Aliases($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "photos" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adminService = new BackupGuardGoogle_DirectoryService(...);
   *   $photos = $adminService->photos;
   *  </code>
   */
  class BackupGuardGoogle_UsersPhotosServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Remove photos for the user (photos.delete)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     */
    public function delete($userKey, $optParams = array()) {
      $params = array('userKey' => $userKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieve photo of a user (photos.get)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_UserPhoto
     */
    public function get($userKey, $optParams = array()) {
      $params = array('userKey' => $userKey);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UserPhoto($data);
      } else {
        return $data;
      }
    }
    /**
     * Add a photo for the user. This method supports patch semantics. (photos.patch)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param BackupGuardGoogle_UserPhoto $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_UserPhoto
     */
    public function patch($userKey, BackupGuardGoogle_UserPhoto $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UserPhoto($data);
      } else {
        return $data;
      }
    }
    /**
     * Add a photo for the user (photos.update)
     *
     * @param string $userKey Email or immutable Id of the user
     * @param BackupGuardGoogle_UserPhoto $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_UserPhoto
     */
    public function update($userKey, BackupGuardGoogle_UserPhoto $postBody, $optParams = array()) {
      $params = array('userKey' => $userKey, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UserPhoto($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Directory (directory_v1).
 *
 * <p>
 * Apps Directory API lets you view and manage enterprise resources like user, groups, OrgUnit, devices.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/admin-sdk/directory/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_DirectoryService extends BackupGuardGoogle_Service {
  public $chromeosdevices;
  public $groups;
  public $groups_aliases;
  public $members;
  public $mobiledevices;
  public $orgunits;
  public $users;
  public $users_aliases;
  public $users_photos;
  /**
   * Constructs the internal representation of the Directory service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'admin/directory/v1/';
    $this->version = 'directory_v1';
    $this->serviceName = 'admin';

    $client->addService($this->serviceName, $this->version);
    $this->chromeosdevices = new BackupGuardGoogle_ChromeosdevicesServiceResource($this, $this->serviceName, 'chromeosdevices', json_decode('{"methods": {"get": {"id": "directory.chromeosdevices.get", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos", "https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly"]}, "list": {"id": "directory.chromeosdevices.list", "path": "customer/{customerId}/devices/chromeos", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["annotatedLocation", "annotatedUser", "lastSync", "notes", "serialNumber", "status", "supportEndDate"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "query": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "ChromeOsDevices"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos", "https://www.googleapis.com/auth/admin.directory.device.chromeos.readonly"]}, "patch": {"id": "directory.chromeosdevices.patch", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "request": {"$ref": "ChromeOsDevice"}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos"]}, "update": {"id": "directory.chromeosdevices.update", "path": "customer/{customerId}/devices/chromeos/{deviceId}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deviceId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}}, "request": {"$ref": "ChromeOsDevice"}, "response": {"$ref": "ChromeOsDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.chromeos"]}}}', true));
    $this->groups = new BackupGuardGoogle_GroupsServiceResource($this, $this->serviceName, 'groups', json_decode('{"methods": {"delete": {"id": "directory.groups.delete", "path": "groups/{groupKey}", "httpMethod": "DELETE", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "get": {"id": "directory.groups.get", "path": "groups/{groupKey}", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "insert": {"id": "directory.groups.insert", "path": "groups", "httpMethod": "POST", "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "list": {"id": "directory.groups.list", "path": "groups", "httpMethod": "GET", "parameters": {"customer": {"type": "string", "location": "query"}, "domain": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "userKey": {"type": "string", "location": "query"}}, "response": {"$ref": "Groups"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "patch": {"id": "directory.groups.patch", "path": "groups/{groupKey}", "httpMethod": "PATCH", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "update": {"id": "directory.groups.update", "path": "groups/{groupKey}", "httpMethod": "PUT", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Group"}, "response": {"$ref": "Group"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}}}', true));
    $this->groups_aliases = new BackupGuardGoogle_GroupsAliasesServiceResource($this, $this->serviceName, 'aliases', json_decode('{"methods": {"delete": {"id": "directory.groups.aliases.delete", "path": "groups/{groupKey}/aliases/{alias}", "httpMethod": "DELETE", "parameters": {"alias": {"type": "string", "required": true, "location": "path"}, "groupKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "insert": {"id": "directory.groups.aliases.insert", "path": "groups/{groupKey}/aliases", "httpMethod": "POST", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Alias"}, "response": {"$ref": "Alias"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group"]}, "list": {"id": "directory.groups.aliases.list", "path": "groups/{groupKey}/aliases", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Aliases"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}}}', true));
    $this->members = new BackupGuardGoogle_MembersServiceResource($this, $this->serviceName, 'members', json_decode('{"methods": {"delete": {"id": "directory.members.delete", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "DELETE", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "get": {"id": "directory.members.get", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member", "https://www.googleapis.com/auth/admin.directory.group.member.readonly", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "insert": {"id": "directory.members.insert", "path": "groups/{groupKey}/members", "httpMethod": "POST", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "list": {"id": "directory.members.list", "path": "groups/{groupKey}/members", "httpMethod": "GET", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "roles": {"type": "string", "location": "query"}}, "response": {"$ref": "Members"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member", "https://www.googleapis.com/auth/admin.directory.group.member.readonly", "https://www.googleapis.com/auth/admin.directory.group.readonly"]}, "patch": {"id": "directory.members.patch", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "PATCH", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}, "update": {"id": "directory.members.update", "path": "groups/{groupKey}/members/{memberKey}", "httpMethod": "PUT", "parameters": {"groupKey": {"type": "string", "required": true, "location": "path"}, "memberKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Member"}, "response": {"$ref": "Member"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.group", "https://www.googleapis.com/auth/admin.directory.group.member"]}}}', true));
    $this->mobiledevices = new BackupGuardGoogle_MobiledevicesServiceResource($this, $this->serviceName, 'mobiledevices', json_decode('{"methods": {"action": {"id": "directory.mobiledevices.action", "path": "customer/{customerId}/devices/mobile/{resourceId}/action", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "MobileDeviceAction"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action"]}, "delete": {"id": "directory.mobiledevices.delete", "path": "customer/{customerId}/devices/mobile/{resourceId}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile"]}, "get": {"id": "directory.mobiledevices.get", "path": "customer/{customerId}/devices/mobile/{resourceId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "resourceId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "MobileDevice"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action", "https://www.googleapis.com/auth/admin.directory.device.mobile.readonly"]}, "list": {"id": "directory.mobiledevices.list", "path": "customer/{customerId}/devices/mobile", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "orderBy": {"type": "string", "enum": ["deviceId", "email", "lastSync", "model", "name", "os", "status", "type"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "projection": {"type": "string", "enum": ["BASIC", "FULL"], "location": "query"}, "query": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "MobileDevices"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.device.mobile", "https://www.googleapis.com/auth/admin.directory.device.mobile.action", "https://www.googleapis.com/auth/admin.directory.device.mobile.readonly"]}}}', true));
    $this->orgunits = new BackupGuardGoogle_OrgunitsServiceResource($this, $this->serviceName, 'orgunits', json_decode('{"methods": {"delete": {"id": "directory.orgunits.delete", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "get": {"id": "directory.orgunits.get", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit", "https://www.googleapis.com/auth/admin.directory.orgunit.readonly"]}, "insert": {"id": "directory.orgunits.insert", "path": "customer/{customerId}/orgunits", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "list": {"id": "directory.orgunits.list", "path": "customer/{customerId}/orgunits", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "default": "", "location": "query"}, "type": {"type": "string", "enum": ["all", "children"], "location": "query"}}, "response": {"$ref": "OrgUnits"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit", "https://www.googleapis.com/auth/admin.directory.orgunit.readonly"]}, "patch": {"id": "directory.orgunits.patch", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}, "update": {"id": "directory.orgunits.update", "path": "customer/{customerId}/orgunits{/orgUnitPath*}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "orgUnitPath": {"type": "string", "required": true, "repeated": true, "location": "path"}}, "request": {"$ref": "OrgUnit"}, "response": {"$ref": "OrgUnit"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.orgunit"]}}}', true));
    $this->users = new BackupGuardGoogle_UsersServiceResource($this, $this->serviceName, 'users', json_decode('{"methods": {"delete": {"id": "directory.users.delete", "path": "users/{userKey}", "httpMethod": "DELETE", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "get": {"id": "directory.users.get", "path": "users/{userKey}", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "insert": {"id": "directory.users.insert", "path": "users", "httpMethod": "POST", "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "list": {"id": "directory.users.list", "path": "users", "httpMethod": "GET", "parameters": {"customer": {"type": "string", "location": "query"}, "domain": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "1", "maximum": "500", "location": "query"}, "orderBy": {"type": "string", "enum": ["email", "familyName", "givenName"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "query": {"type": "string", "location": "query"}, "showDeleted": {"type": "string", "location": "query"}, "sortOrder": {"type": "string", "enum": ["ASCENDING", "DESCENDING"], "location": "query"}}, "response": {"$ref": "Users"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "makeAdmin": {"id": "directory.users.makeAdmin", "path": "users/{userKey}/makeAdmin", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserMakeAdmin"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "patch": {"id": "directory.users.patch", "path": "users/{userKey}", "httpMethod": "PATCH", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "undelete": {"id": "directory.users.undelete", "path": "users/{userKey}/undelete", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserUndelete"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "update": {"id": "directory.users.update", "path": "users/{userKey}", "httpMethod": "PUT", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "User"}, "response": {"$ref": "User"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}}}', true));
    $this->users_aliases = new BackupGuardGoogle_UsersAliasesServiceResource($this, $this->serviceName, 'aliases', json_decode('{"methods": {"delete": {"id": "directory.users.aliases.delete", "path": "users/{userKey}/aliases/{alias}", "httpMethod": "DELETE", "parameters": {"alias": {"type": "string", "required": true, "location": "path"}, "userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias"]}, "insert": {"id": "directory.users.aliases.insert", "path": "users/{userKey}/aliases", "httpMethod": "POST", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Alias"}, "response": {"$ref": "Alias"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias"]}, "list": {"id": "directory.users.aliases.list", "path": "users/{userKey}/aliases", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Aliases"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.alias", "https://www.googleapis.com/auth/admin.directory.user.alias.readonly", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}}}', true));
    $this->users_photos = new BackupGuardGoogle_UsersPhotosServiceResource($this, $this->serviceName, 'photos', json_decode('{"methods": {"delete": {"id": "directory.users.photos.delete", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "DELETE", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "get": {"id": "directory.users.photos.get", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "GET", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user", "https://www.googleapis.com/auth/admin.directory.user.readonly"]}, "patch": {"id": "directory.users.photos.patch", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "PATCH", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserPhoto"}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}, "update": {"id": "directory.users.photos.update", "path": "users/{userKey}/photos/thumbnail", "httpMethod": "PUT", "parameters": {"userKey": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "UserPhoto"}, "response": {"$ref": "UserPhoto"}, "scopes": ["https://www.googleapis.com/auth/admin.directory.user"]}}}', true));

  }
}



class BackupGuardGoogle_Alias extends BackupGuardGoogle_Model {
  public $alias;
  public $id;
  public $kind;
  public $primaryEmail;
  public function setAlias($alias) {
    $this->alias = $alias;
  }
  public function getAlias() {
    return $this->alias;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPrimaryEmail($primaryEmail) {
    $this->primaryEmail = $primaryEmail;
  }
  public function getPrimaryEmail() {
    return $this->primaryEmail;
  }
}

class BackupGuardGoogle_Aliases extends BackupGuardGoogle_Model {
  protected $__aliasesType = 'BackupGuardGoogle_Alias';
  protected $__aliasesDataType = 'array';
  public $aliases;
  public $kind;
  public function setAliases(/* array(BackupGuardGoogle_Alias) */ $aliases) {
    $this->assertIsArray($aliases, 'BackupGuardGoogle_Alias', __METHOD__);
    $this->aliases = $aliases;
  }
  public function getAliases() {
    return $this->aliases;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_ChromeOsDevice extends BackupGuardGoogle_Model {
  public $annotatedLocation;
  public $annotatedUser;
  public $bootMode;
  public $deviceId;
  public $firmwareVersion;
  public $kind;
  public $lastEnrollmentTime;
  public $lastSync;
  public $macAddress;
  public $meid;
  public $model;
  public $notes;
  public $orderNumber;
  public $orgUnitPath;
  public $osVersion;
  public $platformVersion;
  public $serialNumber;
  public $status;
  public $supportEndDate;
  public $willAutoRenew;
  public function setAnnotatedLocation($annotatedLocation) {
    $this->annotatedLocation = $annotatedLocation;
  }
  public function getAnnotatedLocation() {
    return $this->annotatedLocation;
  }
  public function setAnnotatedUser($annotatedUser) {
    $this->annotatedUser = $annotatedUser;
  }
  public function getAnnotatedUser() {
    return $this->annotatedUser;
  }
  public function setBootMode($bootMode) {
    $this->bootMode = $bootMode;
  }
  public function getBootMode() {
    return $this->bootMode;
  }
  public function setDeviceId($deviceId) {
    $this->deviceId = $deviceId;
  }
  public function getDeviceId() {
    return $this->deviceId;
  }
  public function setFirmwareVersion($firmwareVersion) {
    $this->firmwareVersion = $firmwareVersion;
  }
  public function getFirmwareVersion() {
    return $this->firmwareVersion;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastEnrollmentTime($lastEnrollmentTime) {
    $this->lastEnrollmentTime = $lastEnrollmentTime;
  }
  public function getLastEnrollmentTime() {
    return $this->lastEnrollmentTime;
  }
  public function setLastSync($lastSync) {
    $this->lastSync = $lastSync;
  }
  public function getLastSync() {
    return $this->lastSync;
  }
  public function setMacAddress($macAddress) {
    $this->macAddress = $macAddress;
  }
  public function getMacAddress() {
    return $this->macAddress;
  }
  public function setMeid($meid) {
    $this->meid = $meid;
  }
  public function getMeid() {
    return $this->meid;
  }
  public function setModel($model) {
    $this->model = $model;
  }
  public function getModel() {
    return $this->model;
  }
  public function setNotes($notes) {
    $this->notes = $notes;
  }
  public function getNotes() {
    return $this->notes;
  }
  public function setOrderNumber($orderNumber) {
    $this->orderNumber = $orderNumber;
  }
  public function getOrderNumber() {
    return $this->orderNumber;
  }
  public function setOrgUnitPath($orgUnitPath) {
    $this->orgUnitPath = $orgUnitPath;
  }
  public function getOrgUnitPath() {
    return $this->orgUnitPath;
  }
  public function setOsVersion($osVersion) {
    $this->osVersion = $osVersion;
  }
  public function getOsVersion() {
    return $this->osVersion;
  }
  public function setPlatformVersion($platformVersion) {
    $this->platformVersion = $platformVersion;
  }
  public function getPlatformVersion() {
    return $this->platformVersion;
  }
  public function setSerialNumber($serialNumber) {
    $this->serialNumber = $serialNumber;
  }
  public function getSerialNumber() {
    return $this->serialNumber;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setSupportEndDate($supportEndDate) {
    $this->supportEndDate = $supportEndDate;
  }
  public function getSupportEndDate() {
    return $this->supportEndDate;
  }
  public function setWillAutoRenew($willAutoRenew) {
    $this->willAutoRenew = $willAutoRenew;
  }
  public function getWillAutoRenew() {
    return $this->willAutoRenew;
  }
}

class BackupGuardGoogle_ChromeOsDevices extends BackupGuardGoogle_Model {
  protected $__chromeosdevicesType = 'BackupGuardGoogle_ChromeOsDevice';
  protected $__chromeosdevicesDataType = 'array';
  public $chromeosdevices;
  public $kind;
  public $nextPageToken;
  public function setChromeosdevices(/* array(BackupGuardGoogle_ChromeOsDevice) */ $chromeosdevices) {
    $this->assertIsArray($chromeosdevices, 'BackupGuardGoogle_ChromeOsDevice', __METHOD__);
    $this->chromeosdevices = $chromeosdevices;
  }
  public function getChromeosdevices() {
    return $this->chromeosdevices;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class BackupGuardGoogle_Group extends BackupGuardGoogle_Model {
  public $adminCreated;
  public $aliases;
  public $description;
  public $email;
  public $id;
  public $kind;
  public $name;
  public $nonEditableAliases;
  public function setAdminCreated($adminCreated) {
    $this->adminCreated = $adminCreated;
  }
  public function getAdminCreated() {
    return $this->adminCreated;
  }
  public function setAliases(/* array(BackupGuardGoogle_string) */ $aliases) {
    $this->assertIsArray($aliases, 'BackupGuardGoogle_string', __METHOD__);
    $this->aliases = $aliases;
  }
  public function getAliases() {
    return $this->aliases;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNonEditableAliases(/* array(BackupGuardGoogle_string) */ $nonEditableAliases) {
    $this->assertIsArray($nonEditableAliases, 'BackupGuardGoogle_string', __METHOD__);
    $this->nonEditableAliases = $nonEditableAliases;
  }
  public function getNonEditableAliases() {
    return $this->nonEditableAliases;
  }
}

class BackupGuardGoogle_Groups extends BackupGuardGoogle_Model {
  protected $__groupsType = 'BackupGuardGoogle_Group';
  protected $__groupsDataType = 'array';
  public $groups;
  public $kind;
  public $nextPageToken;
  public function setGroups(/* array(BackupGuardGoogle_Group) */ $groups) {
    $this->assertIsArray($groups, 'BackupGuardGoogle_Group', __METHOD__);
    $this->groups = $groups;
  }
  public function getGroups() {
    return $this->groups;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class BackupGuardGoogle_Member extends BackupGuardGoogle_Model {
  public $email;
  public $id;
  public $kind;
  public $role;
  public $type;
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRole($role) {
    $this->role = $role;
  }
  public function getRole() {
    return $this->role;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_Members extends BackupGuardGoogle_Model {
  public $kind;
  protected $__membersType = 'BackupGuardGoogle_Member';
  protected $__membersDataType = 'array';
  public $members;
  public $nextPageToken;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMembers(/* array(BackupGuardGoogle_Member) */ $members) {
    $this->assertIsArray($members, 'BackupGuardGoogle_Member', __METHOD__);
    $this->members = $members;
  }
  public function getMembers() {
    return $this->members;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class BackupGuardGoogle_MobileDevice extends BackupGuardGoogle_Model {
  protected $__applicationsType = 'BackupGuardGoogle_MobileDeviceApplications';
  protected $__applicationsDataType = 'array';
  public $applications;
  public $deviceId;
  public $email;
  public $firstSync;
  public $hardwareId;
  public $kind;
  public $lastSync;
  public $model;
  public $name;
  public $os;
  public $resourceId;
  public $status;
  public $type;
  public $userAgent;
  public function setApplications(/* array(BackupGuardGoogle_MobileDeviceApplications) */ $applications) {
    $this->assertIsArray($applications, 'BackupGuardGoogle_MobileDeviceApplications', __METHOD__);
    $this->applications = $applications;
  }
  public function getApplications() {
    return $this->applications;
  }
  public function setDeviceId($deviceId) {
    $this->deviceId = $deviceId;
  }
  public function getDeviceId() {
    return $this->deviceId;
  }
  public function setEmail(/* array(BackupGuardGoogle_string) */ $email) {
    $this->assertIsArray($email, 'BackupGuardGoogle_string', __METHOD__);
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  public function setFirstSync($firstSync) {
    $this->firstSync = $firstSync;
  }
  public function getFirstSync() {
    return $this->firstSync;
  }
  public function setHardwareId($hardwareId) {
    $this->hardwareId = $hardwareId;
  }
  public function getHardwareId() {
    return $this->hardwareId;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastSync($lastSync) {
    $this->lastSync = $lastSync;
  }
  public function getLastSync() {
    return $this->lastSync;
  }
  public function setModel($model) {
    $this->model = $model;
  }
  public function getModel() {
    return $this->model;
  }
  public function setName(/* array(BackupGuardGoogle_string) */ $name) {
    $this->assertIsArray($name, 'BackupGuardGoogle_string', __METHOD__);
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOs($os) {
    $this->os = $os;
  }
  public function getOs() {
    return $this->os;
  }
  public function setResourceId($resourceId) {
    $this->resourceId = $resourceId;
  }
  public function getResourceId() {
    return $this->resourceId;
  }
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUserAgent($userAgent) {
    $this->userAgent = $userAgent;
  }
  public function getUserAgent() {
    return $this->userAgent;
  }
}

class BackupGuardGoogle_MobileDeviceAction extends BackupGuardGoogle_Model {
  public $action;
  public function setAction($action) {
    $this->action = $action;
  }
  public function getAction() {
    return $this->action;
  }
}

class BackupGuardGoogle_MobileDeviceApplications extends BackupGuardGoogle_Model {
  public $displayName;
  public $packageName;
  public $permission;
  public $versionCode;
  public $versionName;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setPackageName($packageName) {
    $this->packageName = $packageName;
  }
  public function getPackageName() {
    return $this->packageName;
  }
  public function setPermission(/* array(BackupGuardGoogle_string) */ $permission) {
    $this->assertIsArray($permission, 'BackupGuardGoogle_string', __METHOD__);
    $this->permission = $permission;
  }
  public function getPermission() {
    return $this->permission;
  }
  public function setVersionCode($versionCode) {
    $this->versionCode = $versionCode;
  }
  public function getVersionCode() {
    return $this->versionCode;
  }
  public function setVersionName($versionName) {
    $this->versionName = $versionName;
  }
  public function getVersionName() {
    return $this->versionName;
  }
}

class BackupGuardGoogle_MobileDevices extends BackupGuardGoogle_Model {
  public $kind;
  protected $__mobiledevicesType = 'BackupGuardGoogle_MobileDevice';
  protected $__mobiledevicesDataType = 'array';
  public $mobiledevices;
  public $nextPageToken;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMobiledevices(/* array(BackupGuardGoogle_MobileDevice) */ $mobiledevices) {
    $this->assertIsArray($mobiledevices, 'BackupGuardGoogle_MobileDevice', __METHOD__);
    $this->mobiledevices = $mobiledevices;
  }
  public function getMobiledevices() {
    return $this->mobiledevices;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class BackupGuardGoogle_OrgUnit extends BackupGuardGoogle_Model {
  public $blockInheritance;
  public $description;
  public $kind;
  public $name;
  public $orgUnitPath;
  public $parentOrgUnitPath;
  public function setBlockInheritance($blockInheritance) {
    $this->blockInheritance = $blockInheritance;
  }
  public function getBlockInheritance() {
    return $this->blockInheritance;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setOrgUnitPath($orgUnitPath) {
    $this->orgUnitPath = $orgUnitPath;
  }
  public function getOrgUnitPath() {
    return $this->orgUnitPath;
  }
  public function setParentOrgUnitPath($parentOrgUnitPath) {
    $this->parentOrgUnitPath = $parentOrgUnitPath;
  }
  public function getParentOrgUnitPath() {
    return $this->parentOrgUnitPath;
  }
}

class BackupGuardGoogle_OrgUnits extends BackupGuardGoogle_Model {
  public $kind;
  protected $__organizationUnitsType = 'BackupGuardGoogle_OrgUnit';
  protected $__organizationUnitsDataType = 'array';
  public $organizationUnits;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setOrganizationUnits(/* array(BackupGuardGoogle_OrgUnit) */ $organizationUnits) {
    $this->assertIsArray($organizationUnits, 'BackupGuardGoogle_OrgUnit', __METHOD__);
    $this->organizationUnits = $organizationUnits;
  }
  public function getOrganizationUnits() {
    return $this->organizationUnits;
  }
}

class BackupGuardGoogle_User extends BackupGuardGoogle_Model {
  protected $__addressesType = 'BackupGuardGoogle_UserAddress';
  protected $__addressesDataType = 'array';
  public $addresses;
  public $agreedToTerms;
  public $aliases;
  public $changePasswordAtNextLogin;
  public $creationTime;
  public $customerId;
  protected $__emailsType = 'BackupGuardGoogle_UserEmail';
  protected $__emailsDataType = 'array';
  public $emails;
  protected $__externalIdsType = 'BackupGuardGoogle_UserExternalId';
  protected $__externalIdsDataType = 'array';
  public $externalIds;
  public $hashFunction;
  public $id;
  protected $__imsType = 'BackupGuardGoogle_UserIm';
  protected $__imsDataType = 'array';
  public $ims;
  public $includeInGlobalAddressList;
  public $ipWhitelisted;
  public $isAdmin;
  public $isDelegatedAdmin;
  public $isMailboxSetup;
  public $kind;
  public $lastLoginTime;
  protected $__nameType = 'BackupGuardGoogle_UserName';
  protected $__nameDataType = '';
  public $name;
  public $nonEditableAliases;
  public $orgUnitPath;
  protected $__organizationsType = 'BackupGuardGoogle_UserOrganization';
  protected $__organizationsDataType = 'array';
  public $organizations;
  public $password;
  protected $__phonesType = 'BackupGuardGoogle_UserPhone';
  protected $__phonesDataType = 'array';
  public $phones;
  public $primaryEmail;
  protected $__relationsType = 'BackupGuardGoogle_UserRelation';
  protected $__relationsDataType = 'array';
  public $relations;
  public $suspended;
  public $suspensionReason;
  public $thumbnailPhotoUrl;
  public function setAddresses(/* array(BackupGuardGoogle_UserAddress) */ $addresses) {
    $this->assertIsArray($addresses, 'BackupGuardGoogle_UserAddress', __METHOD__);
    $this->addresses = $addresses;
  }
  public function getAddresses() {
    return $this->addresses;
  }
  public function setAgreedToTerms($agreedToTerms) {
    $this->agreedToTerms = $agreedToTerms;
  }
  public function getAgreedToTerms() {
    return $this->agreedToTerms;
  }
  public function setAliases(/* array(BackupGuardGoogle_string) */ $aliases) {
    $this->assertIsArray($aliases, 'BackupGuardGoogle_string', __METHOD__);
    $this->aliases = $aliases;
  }
  public function getAliases() {
    return $this->aliases;
  }
  public function setChangePasswordAtNextLogin($changePasswordAtNextLogin) {
    $this->changePasswordAtNextLogin = $changePasswordAtNextLogin;
  }
  public function getChangePasswordAtNextLogin() {
    return $this->changePasswordAtNextLogin;
  }
  public function setCreationTime($creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setCustomerId($customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setEmails(/* array(BackupGuardGoogle_UserEmail) */ $emails) {
    $this->assertIsArray($emails, 'BackupGuardGoogle_UserEmail', __METHOD__);
    $this->emails = $emails;
  }
  public function getEmails() {
    return $this->emails;
  }
  public function setExternalIds(/* array(BackupGuardGoogle_UserExternalId) */ $externalIds) {
    $this->assertIsArray($externalIds, 'BackupGuardGoogle_UserExternalId', __METHOD__);
    $this->externalIds = $externalIds;
  }
  public function getExternalIds() {
    return $this->externalIds;
  }
  public function setHashFunction($hashFunction) {
    $this->hashFunction = $hashFunction;
  }
  public function getHashFunction() {
    return $this->hashFunction;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIms(/* array(BackupGuardGoogle_UserIm) */ $ims) {
    $this->assertIsArray($ims, 'BackupGuardGoogle_UserIm', __METHOD__);
    $this->ims = $ims;
  }
  public function getIms() {
    return $this->ims;
  }
  public function setIncludeInGlobalAddressList($includeInGlobalAddressList) {
    $this->includeInGlobalAddressList = $includeInGlobalAddressList;
  }
  public function getIncludeInGlobalAddressList() {
    return $this->includeInGlobalAddressList;
  }
  public function setIpWhitelisted($ipWhitelisted) {
    $this->ipWhitelisted = $ipWhitelisted;
  }
  public function getIpWhitelisted() {
    return $this->ipWhitelisted;
  }
  public function setIsAdmin($isAdmin) {
    $this->isAdmin = $isAdmin;
  }
  public function getIsAdmin() {
    return $this->isAdmin;
  }
  public function setIsDelegatedAdmin($isDelegatedAdmin) {
    $this->isDelegatedAdmin = $isDelegatedAdmin;
  }
  public function getIsDelegatedAdmin() {
    return $this->isDelegatedAdmin;
  }
  public function setIsMailboxSetup($isMailboxSetup) {
    $this->isMailboxSetup = $isMailboxSetup;
  }
  public function getIsMailboxSetup() {
    return $this->isMailboxSetup;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLastLoginTime($lastLoginTime) {
    $this->lastLoginTime = $lastLoginTime;
  }
  public function getLastLoginTime() {
    return $this->lastLoginTime;
  }
  public function setName(BackupGuardGoogle_UserName $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNonEditableAliases(/* array(BackupGuardGoogle_string) */ $nonEditableAliases) {
    $this->assertIsArray($nonEditableAliases, 'BackupGuardGoogle_string', __METHOD__);
    $this->nonEditableAliases = $nonEditableAliases;
  }
  public function getNonEditableAliases() {
    return $this->nonEditableAliases;
  }
  public function setOrgUnitPath($orgUnitPath) {
    $this->orgUnitPath = $orgUnitPath;
  }
  public function getOrgUnitPath() {
    return $this->orgUnitPath;
  }
  public function setOrganizations(/* array(BackupGuardGoogle_UserOrganization) */ $organizations) {
    $this->assertIsArray($organizations, 'BackupGuardGoogle_UserOrganization', __METHOD__);
    $this->organizations = $organizations;
  }
  public function getOrganizations() {
    return $this->organizations;
  }
  public function setPassword($password) {
    $this->password = $password;
  }
  public function getPassword() {
    return $this->password;
  }
  public function setPhones(/* array(BackupGuardGoogle_UserPhone) */ $phones) {
    $this->assertIsArray($phones, 'BackupGuardGoogle_UserPhone', __METHOD__);
    $this->phones = $phones;
  }
  public function getPhones() {
    return $this->phones;
  }
  public function setPrimaryEmail($primaryEmail) {
    $this->primaryEmail = $primaryEmail;
  }
  public function getPrimaryEmail() {
    return $this->primaryEmail;
  }
  public function setRelations(/* array(BackupGuardGoogle_UserRelation) */ $relations) {
    $this->assertIsArray($relations, 'BackupGuardGoogle_UserRelation', __METHOD__);
    $this->relations = $relations;
  }
  public function getRelations() {
    return $this->relations;
  }
  public function setSuspended($suspended) {
    $this->suspended = $suspended;
  }
  public function getSuspended() {
    return $this->suspended;
  }
  public function setSuspensionReason($suspensionReason) {
    $this->suspensionReason = $suspensionReason;
  }
  public function getSuspensionReason() {
    return $this->suspensionReason;
  }
  public function setThumbnailPhotoUrl($thumbnailPhotoUrl) {
    $this->thumbnailPhotoUrl = $thumbnailPhotoUrl;
  }
  public function getThumbnailPhotoUrl() {
    return $this->thumbnailPhotoUrl;
  }
}

class BackupGuardGoogle_UserAddress extends BackupGuardGoogle_Model {
  public $country;
  public $countryCode;
  public $customType;
  public $extendedAddress;
  public $formatted;
  public $locality;
  public $poBox;
  public $postalCode;
  public $primary;
  public $region;
  public $sourceIsStructured;
  public $streetAddress;
  public $type;
  public function setCountry($country) {
    $this->country = $country;
  }
  public function getCountry() {
    return $this->country;
  }
  public function setCountryCode($countryCode) {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode() {
    return $this->countryCode;
  }
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setExtendedAddress($extendedAddress) {
    $this->extendedAddress = $extendedAddress;
  }
  public function getExtendedAddress() {
    return $this->extendedAddress;
  }
  public function setFormatted($formatted) {
    $this->formatted = $formatted;
  }
  public function getFormatted() {
    return $this->formatted;
  }
  public function setLocality($locality) {
    $this->locality = $locality;
  }
  public function getLocality() {
    return $this->locality;
  }
  public function setPoBox($poBox) {
    $this->poBox = $poBox;
  }
  public function getPoBox() {
    return $this->poBox;
  }
  public function setPostalCode($postalCode) {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode() {
    return $this->postalCode;
  }
  public function setPrimary($primary) {
    $this->primary = $primary;
  }
  public function getPrimary() {
    return $this->primary;
  }
  public function setRegion($region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setSourceIsStructured($sourceIsStructured) {
    $this->sourceIsStructured = $sourceIsStructured;
  }
  public function getSourceIsStructured() {
    return $this->sourceIsStructured;
  }
  public function setStreetAddress($streetAddress) {
    $this->streetAddress = $streetAddress;
  }
  public function getStreetAddress() {
    return $this->streetAddress;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_UserEmail extends BackupGuardGoogle_Model {
  public $address;
  public $customType;
  public $primary;
  public $type;
  public function setAddress($address) {
    $this->address = $address;
  }
  public function getAddress() {
    return $this->address;
  }
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setPrimary($primary) {
    $this->primary = $primary;
  }
  public function getPrimary() {
    return $this->primary;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_UserExternalId extends BackupGuardGoogle_Model {
  public $customType;
  public $type;
  public $value;
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_UserIm extends BackupGuardGoogle_Model {
  public $customProtocol;
  public $customType;
  public $im;
  public $primary;
  public $protocol;
  public $type;
  public function setCustomProtocol($customProtocol) {
    $this->customProtocol = $customProtocol;
  }
  public function getCustomProtocol() {
    return $this->customProtocol;
  }
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setIm($im) {
    $this->im = $im;
  }
  public function getIm() {
    return $this->im;
  }
  public function setPrimary($primary) {
    $this->primary = $primary;
  }
  public function getPrimary() {
    return $this->primary;
  }
  public function setProtocol($protocol) {
    $this->protocol = $protocol;
  }
  public function getProtocol() {
    return $this->protocol;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_UserMakeAdmin extends BackupGuardGoogle_Model {
  public $status;
  public function setStatus($status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_UserName extends BackupGuardGoogle_Model {
  public $familyName;
  public $fullName;
  public $givenName;
  public function setFamilyName($familyName) {
    $this->familyName = $familyName;
  }
  public function getFamilyName() {
    return $this->familyName;
  }
  public function setFullName($fullName) {
    $this->fullName = $fullName;
  }
  public function getFullName() {
    return $this->fullName;
  }
  public function setGivenName($givenName) {
    $this->givenName = $givenName;
  }
  public function getGivenName() {
    return $this->givenName;
  }
}

class BackupGuardGoogle_UserOrganization extends BackupGuardGoogle_Model {
  public $costCenter;
  public $customType;
  public $department;
  public $description;
  public $domain;
  public $location;
  public $name;
  public $primary;
  public $symbol;
  public $title;
  public $type;
  public function setCostCenter($costCenter) {
    $this->costCenter = $costCenter;
  }
  public function getCostCenter() {
    return $this->costCenter;
  }
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setDepartment($department) {
    $this->department = $department;
  }
  public function getDepartment() {
    return $this->department;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setDomain($domain) {
    $this->domain = $domain;
  }
  public function getDomain() {
    return $this->domain;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setPrimary($primary) {
    $this->primary = $primary;
  }
  public function getPrimary() {
    return $this->primary;
  }
  public function setSymbol($symbol) {
    $this->symbol = $symbol;
  }
  public function getSymbol() {
    return $this->symbol;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_UserPhone extends BackupGuardGoogle_Model {
  public $customType;
  public $primary;
  public $type;
  public $value;
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setPrimary($primary) {
    $this->primary = $primary;
  }
  public function getPrimary() {
    return $this->primary;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_UserPhoto extends BackupGuardGoogle_Model {
  public $height;
  public $id;
  public $kind;
  public $mimeType;
  public $photoData;
  public $primaryEmail;
  public $width;
  public function setHeight($height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMimeType($mimeType) {
    $this->mimeType = $mimeType;
  }
  public function getMimeType() {
    return $this->mimeType;
  }
  public function setPhotoData($photoData) {
    $this->photoData = $photoData;
  }
  public function getPhotoData() {
    return $this->photoData;
  }
  public function setPrimaryEmail($primaryEmail) {
    $this->primaryEmail = $primaryEmail;
  }
  public function getPrimaryEmail() {
    return $this->primaryEmail;
  }
  public function setWidth($width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
}

class BackupGuardGoogle_UserRelation extends BackupGuardGoogle_Model {
  public $customType;
  public $type;
  public $value;
  public function setCustomType($customType) {
    $this->customType = $customType;
  }
  public function getCustomType() {
    return $this->customType;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setValue($value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_UserUndelete extends BackupGuardGoogle_Model {
  public $orgUnitPath;
  public function setOrgUnitPath($orgUnitPath) {
    $this->orgUnitPath = $orgUnitPath;
  }
  public function getOrgUnitPath() {
    return $this->orgUnitPath;
  }
}

class BackupGuardGoogle_Users extends BackupGuardGoogle_Model {
  public $kind;
  public $nextPageToken;
  public $trigger_event;
  protected $__usersType = 'BackupGuardGoogle_User';
  protected $__usersDataType = 'array';
  public $users;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
  public function setTrigger_event($trigger_event) {
    $this->trigger_event = $trigger_event;
  }
  public function getTrigger_event() {
    return $this->trigger_event;
  }
  public function setUsers(/* array(BackupGuardGoogle_User) */ $users) {
    $this->assertIsArray($users, 'BackupGuardGoogle_User', __METHOD__);
    $this->users = $users;
  }
  public function getUsers() {
    return $this->users;
  }
}
