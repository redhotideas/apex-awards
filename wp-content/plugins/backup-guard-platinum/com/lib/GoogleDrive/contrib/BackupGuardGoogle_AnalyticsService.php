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
   * The "data" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $data = $analyticsService->data;
   *  </code>
   */
  class BackupGuardGoogle_DataServiceResource extends BackupGuardGoogle_ServiceResource {

  }

  /**
   * The "ga" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $ga = $analyticsService->ga;
   *  </code>
   */
  class BackupGuardGoogle_DataGaServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns Analytics data for a view (profile). (ga.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Analytics metrics. E.g., 'ga:visits,ga:pageviews'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of Analytics dimensions. E.g., 'ga:browser,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string segment An Analytics advanced segment to be applied to data.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_GaData
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = array()) {
      $params = array('ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_GaData($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "mcf" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $mcf = $analyticsService->mcf;
   *  </code>
   */
  class BackupGuardGoogle_DataMcfServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns Analytics Multi-Channel Funnels data for a view (profile). (mcf.get)
     *
     * @param string $ids Unique table ID for retrieving Analytics data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $start_date Start date for fetching Analytics data. All requests should specify a start date formatted as YYYY-MM-DD.
     * @param string $end_date End date for fetching Analytics data. All requests should specify an end date formatted as YYYY-MM-DD.
     * @param string $metrics A comma-separated list of Multi-Channel Funnels metrics. E.g., 'mcf:totalConversions,mcf:totalConversionValue'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of Multi-Channel Funnels dimensions. E.g., 'mcf:source,mcf:medium'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to the Analytics data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for the Analytics data.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_McfData
     */
    public function get($ids, $start_date, $end_date, $metrics, $optParams = array()) {
      $params = array('ids' => $ids, 'start-date' => $start_date, 'end-date' => $end_date, 'metrics' => $metrics);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_McfData($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "realtime" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $realtime = $analyticsService->realtime;
   *  </code>
   */
  class BackupGuardGoogle_DataRealtimeServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns real time data for a view (profile). (realtime.get)
     *
     * @param string $ids Unique table ID for retrieving real time data. Table ID is of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
     * @param string $metrics A comma-separated list of real time metrics. E.g., 'ga:activeVisitors'. At least one metric must be specified.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimensions A comma-separated list of real time dimensions. E.g., 'ga:medium,ga:city'.
     * @opt_param string filters A comma-separated list of dimension or metric filters to be applied to real time data.
     * @opt_param int max-results The maximum number of entries to include in this feed.
     * @opt_param string sort A comma-separated list of dimensions or metrics that determine the sort order for real time data.
     * @return BackupGuardGoogle_RealtimeData
     */
    public function get($ids, $metrics, $optParams = array()) {
      $params = array('ids' => $ids, 'metrics' => $metrics);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_RealtimeData($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "management" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $management = $analyticsService->management;
   *  </code>
   */
  class BackupGuardGoogle_ManagementServiceResource extends BackupGuardGoogle_ServiceResource {

  }

  /**
   * The "accountUserLinks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $accountUserLinks = $analyticsService->accountUserLinks;
   *  </code>
   */
  class BackupGuardGoogle_ManagementAccountUserLinksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Removes a user from the given account. (accountUserLinks.delete)
     *
     * @param string $accountId Account ID to delete the user link for.
     * @param string $linkId Link ID to delete the user link for.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $linkId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'linkId' => $linkId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Adds a new user to the given account. (accountUserLinks.insert)
     *
     * @param string $accountId Account ID to create the user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function insert($accountId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists account-user links for a given account. (accountUserLinks.list)
     *
     * @param string $accountId Account ID to retrieve the user links for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of account-user links to include in this response.
     * @opt_param int start-index An index of the first account-user link to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_EntityUserLinks
     */
    public function listManagementAccountUserLinks($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLinks($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates permissions for an existing user on the given account.
     * (accountUserLinks.update)
     *
     * @param string $accountId Account ID to update the account-user link for.
     * @param string $linkId Link ID to update the account-user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function update($accountId, $linkId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'linkId' => $linkId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "accounts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $accounts = $analyticsService->accounts;
   *  </code>
   */
  class BackupGuardGoogle_ManagementAccountsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Lists all accounts to which the user has access. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of accounts to include in this response.
     * @opt_param int start-index An index of the first account to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Accounts
     */
    public function listManagementAccounts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Accounts($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "customDataSources" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $customDataSources = $analyticsService->customDataSources;
   *  </code>
   */
  class BackupGuardGoogle_ManagementCustomDataSourcesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List custom data sources to which the user has access.
     * (customDataSources.list)
     *
     * @param string $accountId Account Id for the custom data sources to retrieve.
     * @param string $webPropertyId Web property Id for the custom data sources to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first custom data source to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_CustomDataSources
     */
    public function listManagementCustomDataSources($accountId, $webPropertyId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_CustomDataSources($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "dailyUploads" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $dailyUploads = $analyticsService->dailyUploads;
   *  </code>
   */
  class BackupGuardGoogle_ManagementDailyUploadsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Delete uploaded data for the given date. (dailyUploads.delete)
     *
     * @param string $accountId Account Id associated with daily upload delete.
     * @param string $webPropertyId Web property Id associated with daily upload delete.
     * @param string $customDataSourceId Custom data source Id associated with daily upload delete.
     * @param string $date Date for which data is to be deleted. Date should be formatted as YYYY-MM-DD.
     * @param string $type Type of data for this delete.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $customDataSourceId, $date, $type, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'type' => $type);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * List daily uploads to which the user has access. (dailyUploads.list)
     *
     * @param string $accountId Account Id for the daily uploads to retrieve.
     * @param string $webPropertyId Web property Id for the daily uploads to retrieve.
     * @param string $customDataSourceId Custom data source Id for daily uploads to retrieve.
     * @param string $start_date Start date of the form YYYY-MM-DD.
     * @param string $end_date End date of the form YYYY-MM-DD.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of custom data sources to include in this response.
     * @opt_param int start-index A 1-based index of the first daily upload to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_DailyUploads
     */
    public function listManagementDailyUploads($accountId, $webPropertyId, $customDataSourceId, $start_date, $end_date, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'start-date' => $start_date, 'end-date' => $end_date);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DailyUploads($data);
      } else {
        return $data;
      }
    }
    /**
     * Update/Overwrite data for a custom data source. (dailyUploads.upload)
     *
     * @param string $accountId Account Id associated with daily upload.
     * @param string $webPropertyId Web property Id associated with daily upload.
     * @param string $customDataSourceId Custom data source Id to which the data being uploaded belongs.
     * @param string $date Date for which data is uploaded. Date should be formatted as YYYY-MM-DD.
     * @param int $appendNumber Append number for this upload indexed from 1.
     * @param string $type Type of data for this upload.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool reset Reset/Overwrite all previous appends for this date and start over with this file as the first upload.
     * @return BackupGuardGoogle_DailyUploadAppend
     */
    public function upload($accountId, $webPropertyId, $customDataSourceId, $date, $appendNumber, $type, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'date' => $date, 'appendNumber' => $appendNumber, 'type' => $type);
      $params = array_merge($params, $optParams);
      $data = $this->__call('upload', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DailyUploadAppend($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "experiments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $experiments = $analyticsService->experiments;
   *  </code>
   */
  class BackupGuardGoogle_ManagementExperimentsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Delete an experiment. (experiments.delete)
     *
     * @param string $accountId Account ID to which the experiment belongs
     * @param string $webPropertyId Web property ID to which the experiment belongs
     * @param string $profileId View (Profile) ID to which the experiment belongs
     * @param string $experimentId ID of the experiment to delete
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Returns an experiment to which the user has access. (experiments.get)
     *
     * @param string $accountId Account ID to retrieve the experiment for.
     * @param string $webPropertyId Web property ID to retrieve the experiment for.
     * @param string $profileId View (Profile) ID to retrieve the experiment for.
     * @param string $experimentId Experiment ID to retrieve the experiment for.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Experiment
     */
    public function get($accountId, $webPropertyId, $profileId, $experimentId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Experiment($data);
      } else {
        return $data;
      }
    }
    /**
     * Create a new experiment. (experiments.insert)
     *
     * @param string $accountId Account ID to create the experiment for.
     * @param string $webPropertyId Web property ID to create the experiment for.
     * @param string $profileId View (Profile) ID to create the experiment for.
     * @param BackupGuardGoogle_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Experiment
     */
    public function insert($accountId, $webPropertyId, $profileId, BackupGuardGoogle_Experiment $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Experiment($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists experiments to which the user has access. (experiments.list)
     *
     * @param string $accountId Account ID to retrieve experiments for.
     * @param string $webPropertyId Web property ID to retrieve experiments for.
     * @param string $profileId View (Profile) ID to retrieve experiments for.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of experiments to include in this response.
     * @opt_param int start-index An index of the first experiment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Experiments
     */
    public function listManagementExperiments($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Experiments($data);
      } else {
        return $data;
      }
    }
    /**
     * Update an existing experiment. This method supports patch semantics.
     * (experiments.patch)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param BackupGuardGoogle_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Experiment
     */
    public function patch($accountId, $webPropertyId, $profileId, $experimentId, BackupGuardGoogle_Experiment $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Experiment($data);
      } else {
        return $data;
      }
    }
    /**
     * Update an existing experiment. (experiments.update)
     *
     * @param string $accountId Account ID of the experiment to update.
     * @param string $webPropertyId Web property ID of the experiment to update.
     * @param string $profileId View (Profile) ID of the experiment to update.
     * @param string $experimentId Experiment ID of the experiment to update.
     * @param BackupGuardGoogle_Experiment $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Experiment
     */
    public function update($accountId, $webPropertyId, $profileId, $experimentId, BackupGuardGoogle_Experiment $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'experimentId' => $experimentId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Experiment($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "goals" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $goals = $analyticsService->goals;
   *  </code>
   */
  class BackupGuardGoogle_ManagementGoalsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets a goal to which the user has access. (goals.get)
     *
     * @param string $accountId Account ID to retrieve the goal for.
     * @param string $webPropertyId Web property ID to retrieve the goal for.
     * @param string $profileId View (Profile) ID to retrieve the goal for.
     * @param string $goalId Goal ID to retrieve the goal for.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Goal
     */
    public function get($accountId, $webPropertyId, $profileId, $goalId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'goalId' => $goalId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Goal($data);
      } else {
        return $data;
      }
    }
    /**
     * Create a new goal. (goals.insert)
     *
     * @param string $accountId Account ID to create the goal for.
     * @param string $webPropertyId Web property ID to create the goal for.
     * @param string $profileId View (Profile) ID to create the goal for.
     * @param BackupGuardGoogle_Goal $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Goal
     */
    public function insert($accountId, $webPropertyId, $profileId, BackupGuardGoogle_Goal $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Goal($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists goals to which the user has access. (goals.list)
     *
     * @param string $accountId Account ID to retrieve goals for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param string $webPropertyId Web property ID to retrieve goals for. Can either be a specific web property ID or '~all', which refers to all the web properties that user has access to.
     * @param string $profileId View (Profile) ID to retrieve goals for. Can either be a specific view (profile) ID or '~all', which refers to all the views (profiles) that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of goals to include in this response.
     * @opt_param int start-index An index of the first goal to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Goals
     */
    public function listManagementGoals($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Goals($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing view (profile). This method supports patch semantics.
     * (goals.patch)
     *
     * @param string $accountId Account ID to update the goal.
     * @param string $webPropertyId Web property ID to update the goal.
     * @param string $profileId View (Profile) ID to update the goal.
     * @param string $goalId Index of the goal to be updated.
     * @param BackupGuardGoogle_Goal $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Goal
     */
    public function patch($accountId, $webPropertyId, $profileId, $goalId, BackupGuardGoogle_Goal $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'goalId' => $goalId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Goal($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing view (profile). (goals.update)
     *
     * @param string $accountId Account ID to update the goal.
     * @param string $webPropertyId Web property ID to update the goal.
     * @param string $profileId View (Profile) ID to update the goal.
     * @param string $goalId Index of the goal to be updated.
     * @param BackupGuardGoogle_Goal $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Goal
     */
    public function update($accountId, $webPropertyId, $profileId, $goalId, BackupGuardGoogle_Goal $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'goalId' => $goalId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Goal($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "profileUserLinks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $profileUserLinks = $analyticsService->profileUserLinks;
   *  </code>
   */
  class BackupGuardGoogle_ManagementProfileUserLinksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Removes a user from the given view (profile). (profileUserLinks.delete)
     *
     * @param string $accountId Account ID to delete the user link for.
     * @param string $webPropertyId Web Property ID to delete the user link for.
     * @param string $profileId View (Profile) ID to delete the user link for.
     * @param string $linkId Link ID to delete the user link for.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $profileId, $linkId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'linkId' => $linkId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Adds a new user to the given view (profile). (profileUserLinks.insert)
     *
     * @param string $accountId Account ID to create the user link for.
     * @param string $webPropertyId Web Property ID to create the user link for.
     * @param string $profileId View (Profile) ID to create the user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function insert($accountId, $webPropertyId, $profileId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists profile-user links for a given view (profile). (profileUserLinks.list)
     *
     * @param string $accountId Account ID which the given view (profile) belongs to.
     * @param string $webPropertyId Web Property ID which the given view (profile) belongs to.
     * @param string $profileId View (Profile) ID to retrieve the profile-user links for
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of profile-user links to include in this response.
     * @opt_param int start-index An index of the first profile-user link to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_EntityUserLinks
     */
    public function listManagementProfileUserLinks($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLinks($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates permissions for an existing user on the given view (profile).
     * (profileUserLinks.update)
     *
     * @param string $accountId Account ID to update the user link for.
     * @param string $webPropertyId Web Property ID to update the user link for.
     * @param string $profileId View (Profile ID) to update the user link for.
     * @param string $linkId Link ID to update the user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function update($accountId, $webPropertyId, $profileId, $linkId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'linkId' => $linkId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "profiles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $profiles = $analyticsService->profiles;
   *  </code>
   */
  class BackupGuardGoogle_ManagementProfilesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Deletes a view (profile). (profiles.delete)
     *
     * @param string $accountId Account ID to delete the view (profile) for.
     * @param string $webPropertyId Web property ID to delete the view (profile) for.
     * @param string $profileId ID of the view (profile) to be deleted.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a view (profile) to which the user has access. (profiles.get)
     *
     * @param string $accountId Account ID to retrieve the goal for.
     * @param string $webPropertyId Web property ID to retrieve the goal for.
     * @param string $profileId View (Profile) ID to retrieve the goal for.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function get($accountId, $webPropertyId, $profileId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
    /**
     * Create a new view (profile). (profiles.insert)
     *
     * @param string $accountId Account ID to create the view (profile) for.
     * @param string $webPropertyId Web property ID to create the view (profile) for.
     * @param BackupGuardGoogle_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function insert($accountId, $webPropertyId, BackupGuardGoogle_Profile $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists views (profiles) to which the user has access. (profiles.list)
     *
     * @param string $accountId Account ID for the view (profiles) to retrieve. Can either be a specific account ID or '~all', which refers to all the accounts to which the user has access.
     * @param string $webPropertyId Web property ID for the views (profiles) to retrieve. Can either be a specific web property ID or '~all', which refers to all the web properties to which the user has access.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of views (profiles) to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Profiles
     */
    public function listManagementProfiles($accountId, $webPropertyId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profiles($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing view (profile). This method supports patch semantics.
     * (profiles.patch)
     *
     * @param string $accountId Account ID to which the view (profile) belongs
     * @param string $webPropertyId Web property ID to which the view (profile) belongs
     * @param string $profileId ID of the view (profile) to be updated.
     * @param BackupGuardGoogle_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function patch($accountId, $webPropertyId, $profileId, BackupGuardGoogle_Profile $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing view (profile). (profiles.update)
     *
     * @param string $accountId Account ID to which the view (profile) belongs
     * @param string $webPropertyId Web property ID to which the view (profile) belongs
     * @param string $profileId ID of the view (profile) to be updated.
     * @param BackupGuardGoogle_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function update($accountId, $webPropertyId, $profileId, BackupGuardGoogle_Profile $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'profileId' => $profileId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "segments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $segments = $analyticsService->segments;
   *  </code>
   */
  class BackupGuardGoogle_ManagementSegmentsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Lists advanced segments to which the user has access. (segments.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of advanced segments to include in this response.
     * @opt_param int start-index An index of the first advanced segment to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Segments
     */
    public function listManagementSegments($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Segments($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "uploads" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $uploads = $analyticsService->uploads;
   *  </code>
   */
  class BackupGuardGoogle_ManagementUploadsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Delete data associated with a previous upload. (uploads.deleteUploadData)
     *
     * @param string $accountId Account Id for the uploads to be deleted.
     * @param string $webPropertyId Web property Id for the uploads to be deleted.
     * @param string $customDataSourceId Custom data source Id for the uploads to be deleted.
     * @param BackupGuardGoogle_AnalyticsDataimportDeleteUploadDataRequest $postBody
     * @param array $optParams Optional parameters.
     */
    public function deleteUploadData($accountId, $webPropertyId, $customDataSourceId, BackupGuardGoogle_AnalyticsDataimportDeleteUploadDataRequest $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('deleteUploadData', array($params));
      return $data;
    }
    /**
     * List uploads to which the user has access. (uploads.get)
     *
     * @param string $accountId Account Id for the upload to retrieve.
     * @param string $webPropertyId Web property Id for the upload to retrieve.
     * @param string $customDataSourceId Custom data source Id for upload to retrieve.
     * @param string $uploadId Upload Id to retrieve.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Upload
     */
    public function get($accountId, $webPropertyId, $customDataSourceId, $uploadId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId, 'uploadId' => $uploadId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Upload($data);
      } else {
        return $data;
      }
    }
    /**
     * List uploads to which the user has access. (uploads.list)
     *
     * @param string $accountId Account Id for the uploads to retrieve.
     * @param string $webPropertyId Web property Id for the uploads to retrieve.
     * @param string $customDataSourceId Custom data source Id for uploads to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of uploads to include in this response.
     * @opt_param int start-index A 1-based index of the first upload to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Uploads
     */
    public function listManagementUploads($accountId, $webPropertyId, $customDataSourceId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Uploads($data);
      } else {
        return $data;
      }
    }
    /**
     * Upload/Overwrite data for a custom data source. (uploads.uploadData)
     *
     * @param string $accountId Account Id associated with the upload.
     * @param string $webPropertyId Web property UA-string associated with the upload.
     * @param string $customDataSourceId Custom data source Id to which the data being uploaded belongs.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Upload
     */
    public function uploadData($accountId, $webPropertyId, $customDataSourceId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'customDataSourceId' => $customDataSourceId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('uploadData', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Upload($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "webproperties" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $webproperties = $analyticsService->webproperties;
   *  </code>
   */
  class BackupGuardGoogle_ManagementWebpropertiesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets a web property to which the user has access. (webproperties.get)
     *
     * @param string $accountId Account ID to retrieve the web property for.
     * @param string $webPropertyId ID to retrieve the web property for.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Webproperty
     */
    public function get($accountId, $webPropertyId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Webproperty($data);
      } else {
        return $data;
      }
    }
    /**
     * Create a new property if the account has fewer than 20 properties.
     * (webproperties.insert)
     *
     * @param string $accountId Account ID to create the web property for.
     * @param BackupGuardGoogle_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Webproperty
     */
    public function insert($accountId, BackupGuardGoogle_Webproperty $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Webproperty($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists web properties to which the user has access. (webproperties.list)
     *
     * @param string $accountId Account ID to retrieve web properties for. Can either be a specific account ID or '~all', which refers to all the accounts that user has access to.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of web properties to include in this response.
     * @opt_param int start-index An index of the first entity to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_Webproperties
     */
    public function listManagementWebproperties($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Webproperties($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing web property. This method supports patch semantics.
     * (webproperties.patch)
     *
     * @param string $accountId Account ID to which the web property belongs
     * @param string $webPropertyId Web property ID
     * @param BackupGuardGoogle_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Webproperty
     */
    public function patch($accountId, $webPropertyId, BackupGuardGoogle_Webproperty $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Webproperty($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing web property. (webproperties.update)
     *
     * @param string $accountId Account ID to which the web property belongs
     * @param string $webPropertyId Web property ID
     * @param BackupGuardGoogle_Webproperty $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Webproperty
     */
    public function update($accountId, $webPropertyId, BackupGuardGoogle_Webproperty $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Webproperty($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "webpropertyUserLinks" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $webpropertyUserLinks = $analyticsService->webpropertyUserLinks;
   *  </code>
   */
  class BackupGuardGoogle_ManagementWebpropertyUserLinksServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Removes a user from the given web property. (webpropertyUserLinks.delete)
     *
     * @param string $accountId Account ID to delete the user link for.
     * @param string $webPropertyId Web Property ID to delete the user link for.
     * @param string $linkId Link ID to delete the user link for.
     * @param array $optParams Optional parameters.
     */
    public function delete($accountId, $webPropertyId, $linkId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'linkId' => $linkId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Adds a new user to the given web property. (webpropertyUserLinks.insert)
     *
     * @param string $accountId Account ID to create the user link for.
     * @param string $webPropertyId Web Property ID to create the user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function insert($accountId, $webPropertyId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists webProperty-user links for a given web property.
     * (webpropertyUserLinks.list)
     *
     * @param string $accountId Account ID which the given web property belongs to.
     * @param string $webPropertyId Web Property ID for the webProperty-user links to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param int max-results The maximum number of webProperty-user Links to include in this response.
     * @opt_param int start-index An index of the first webProperty-user link to retrieve. Use this parameter as a pagination mechanism along with the max-results parameter.
     * @return BackupGuardGoogle_EntityUserLinks
     */
    public function listManagementWebpropertyUserLinks($accountId, $webPropertyId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLinks($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates permissions for an existing user on the given web property.
     * (webpropertyUserLinks.update)
     *
     * @param string $accountId Account ID to update the account-user link for.
     * @param string $webPropertyId Web property ID to update the account-user link for.
     * @param string $linkId Link ID to update the account-user link for.
     * @param BackupGuardGoogle_EntityUserLink $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_EntityUserLink
     */
    public function update($accountId, $webPropertyId, $linkId, BackupGuardGoogle_EntityUserLink $postBody, $optParams = array()) {
      $params = array('accountId' => $accountId, 'webPropertyId' => $webPropertyId, 'linkId' => $linkId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_EntityUserLink($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "metadata" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $metadata = $analyticsService->metadata;
   *  </code>
   */
  class BackupGuardGoogle_MetadataServiceResource extends BackupGuardGoogle_ServiceResource {

  }

  /**
   * The "columns" collection of methods.
   * Typical usage is:
   *  <code>
   *   $analyticsService = new BackupGuardGoogle_AnalyticsService(...);
   *   $columns = $analyticsService->columns;
   *  </code>
   */
  class BackupGuardGoogle_MetadataColumnsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Lists all columns for a report type (columns.list)
     *
     * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga' corresponds to the Core Reporting API
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Columns
     */
    public function listMetadataColumns($reportType, $optParams = array()) {
      $params = array('reportType' => $reportType);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Columns($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/analytics/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_AnalyticsService extends BackupGuardGoogle_Service {
  public $data_ga;
  public $data_mcf;
  public $data_realtime;
  public $management_accountUserLinks;
  public $management_accounts;
  public $management_customDataSources;
  public $management_dailyUploads;
  public $management_experiments;
  public $management_goals;
  public $management_profileUserLinks;
  public $management_profiles;
  public $management_segments;
  public $management_uploads;
  public $management_webproperties;
  public $management_webpropertyUserLinks;
  public $metadata_columns;
  /**
   * Constructs the internal representation of the Analytics service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'analytics/v3/';
    $this->version = 'v3';
    $this->serviceName = 'analytics';

    $client->addService($this->serviceName, $this->version);
    $this->data_ga = new BackupGuardGoogle_DataGaServiceResource($this, $this->serviceName, 'ga', json_decode('{"methods": {"get": {"id": "analytics.data.ga.get", "path": "data/ga", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "segment": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "GaData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->data_mcf = new BackupGuardGoogle_DataMcfServiceResource($this, $this->serviceName, 'mcf', json_decode('{"methods": {"get": {"id": "analytics.data.mcf.get", "path": "data/mcf", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "end-date": {"type": "string", "required": true, "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "McfData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->data_realtime = new BackupGuardGoogle_DataRealtimeServiceResource($this, $this->serviceName, 'realtime', json_decode('{"methods": {"get": {"id": "analytics.data.realtime.get", "path": "data/realtime", "httpMethod": "GET", "parameters": {"dimensions": {"type": "string", "location": "query"}, "filters": {"type": "string", "location": "query"}, "ids": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "metrics": {"type": "string", "required": true, "location": "query"}, "sort": {"type": "string", "location": "query"}}, "response": {"$ref": "RealtimeData"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_accountUserLinks = new BackupGuardGoogle_ManagementAccountUserLinksServiceResource($this, $this->serviceName, 'accountUserLinks', json_decode('{"methods": {"delete": {"id": "analytics.management.accountUserLinks.delete", "path": "management/accounts/{accountId}/entityUserLinks/{linkId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "insert": {"id": "analytics.management.accountUserLinks.insert", "path": "management/accounts/{accountId}/entityUserLinks", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "list": {"id": "analytics.management.accountUserLinks.list", "path": "management/accounts/{accountId}/entityUserLinks", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "EntityUserLinks"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "update": {"id": "analytics.management.accountUserLinks.update", "path": "management/accounts/{accountId}/entityUserLinks/{linkId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}}}', true));
    $this->management_accounts = new BackupGuardGoogle_ManagementAccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"list": {"id": "analytics.management.accounts.list", "path": "management/accounts", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Accounts"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_customDataSources = new BackupGuardGoogle_ManagementCustomDataSourcesServiceResource($this, $this->serviceName, 'customDataSources', json_decode('{"methods": {"list": {"id": "analytics.management.customDataSources.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomDataSources"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_dailyUploads = new BackupGuardGoogle_ManagementDailyUploadsServiceResource($this, $this->serviceName, 'dailyUploads', json_decode('{"methods": {"delete": {"id": "analytics.management.dailyUploads.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.dailyUploads.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "end-date": {"type": "string", "required": true, "location": "query"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-date": {"type": "string", "required": true, "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploads"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "upload": {"id": "analytics.management.dailyUploads.upload", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "appendNumber": {"type": "integer", "required": true, "format": "int32", "minimum": "1", "maximum": "20", "location": "query"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "date": {"type": "string", "required": true, "location": "path"}, "reset": {"type": "boolean", "default": "false", "location": "query"}, "type": {"type": "string", "required": true, "enum": ["cost"], "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "DailyUploadAppend"}, "scopes": ["https://www.googleapis.com/auth/analytics"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "5MB", "protocols": {"simple": {"multipart": true, "path": "/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}, "resumable": {"multipart": true, "path": "/resumable/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads"}}}}}}', true));
    $this->management_experiments = new BackupGuardGoogle_ManagementExperimentsServiceResource($this, $this->serviceName, 'experiments', json_decode('{"methods": {"delete": {"id": "analytics.management.experiments.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.experiments.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.experiments.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.experiments.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Experiments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.experiments.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.experiments.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "experimentId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Experiment"}, "response": {"$ref": "Experiment"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
    $this->management_goals = new BackupGuardGoogle_ManagementGoalsServiceResource($this, $this->serviceName, 'goals', json_decode('{"methods": {"get": {"id": "analytics.management.goals.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "goalId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Goal"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.goals.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Goal"}, "response": {"$ref": "Goal"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.goals.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Goals"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.goals.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "goalId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Goal"}, "response": {"$ref": "Goal"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.goals.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "goalId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Goal"}, "response": {"$ref": "Goal"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
    $this->management_profileUserLinks = new BackupGuardGoogle_ManagementProfileUserLinksServiceResource($this, $this->serviceName, 'profileUserLinks', json_decode('{"methods": {"delete": {"id": "analytics.management.profileUserLinks.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "insert": {"id": "analytics.management.profileUserLinks.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "list": {"id": "analytics.management.profileUserLinks.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "profileId": {"type": "string", "required": true, "location": "path"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "EntityUserLinks"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "update": {"id": "analytics.management.profileUserLinks.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}}}', true));
    $this->management_profiles = new BackupGuardGoogle_ManagementProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"delete": {"id": "analytics.management.profiles.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.profiles.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Profile"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.profiles.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.profiles.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Profiles"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.profiles.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.profiles.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "profileId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
    $this->management_segments = new BackupGuardGoogle_ManagementSegmentsServiceResource($this, $this->serviceName, 'segments', json_decode('{"methods": {"list": {"id": "analytics.management.segments.list", "path": "management/segments", "httpMethod": "GET", "parameters": {"max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Segments"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));
    $this->management_uploads = new BackupGuardGoogle_ManagementUploadsServiceResource($this, $this->serviceName, 'uploads', json_decode('{"methods": {"deleteUploadData": {"id": "analytics.management.uploads.deleteUploadData", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/deleteUploadData", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "AnalyticsDataimportDeleteUploadDataRequest"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "get": {"id": "analytics.management.uploads.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads/{uploadId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "uploadId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Upload"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "list": {"id": "analytics.management.uploads.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Uploads"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "uploadData": {"id": "analytics.management.uploads.uploadData", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "customDataSourceId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Upload"}, "scopes": ["https://www.googleapis.com/auth/analytics"], "supportsMediaUpload": true, "mediaUpload": {"accept": ["application/octet-stream"], "maxSize": "1GB", "protocols": {"simple": {"multipart": true, "path": "/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads"}, "resumable": {"multipart": true, "path": "/resumable/upload/analytics/v3/management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads"}}}}}}', true));
    $this->management_webproperties = new BackupGuardGoogle_ManagementWebpropertiesServiceResource($this, $this->serviceName, 'webproperties', json_decode('{"methods": {"get": {"id": "analytics.management.webproperties.get", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Webproperty"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "insert": {"id": "analytics.management.webproperties.insert", "path": "management/accounts/{accountId}/webproperties", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Webproperty"}, "response": {"$ref": "Webproperty"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "list": {"id": "analytics.management.webproperties.list", "path": "management/accounts/{accountId}/webproperties", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}}, "response": {"$ref": "Webproperties"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}, "patch": {"id": "analytics.management.webproperties.patch", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}", "httpMethod": "PATCH", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Webproperty"}, "response": {"$ref": "Webproperty"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}, "update": {"id": "analytics.management.webproperties.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Webproperty"}, "response": {"$ref": "Webproperty"}, "scopes": ["https://www.googleapis.com/auth/analytics"]}}}', true));
    $this->management_webpropertyUserLinks = new BackupGuardGoogle_ManagementWebpropertyUserLinksServiceResource($this, $this->serviceName, 'webpropertyUserLinks', json_decode('{"methods": {"delete": {"id": "analytics.management.webpropertyUserLinks.delete", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}", "httpMethod": "DELETE", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "insert": {"id": "analytics.management.webpropertyUserLinks.insert", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks", "httpMethod": "POST", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "list": {"id": "analytics.management.webpropertyUserLinks.list", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "max-results": {"type": "integer", "format": "int32", "location": "query"}, "start-index": {"type": "integer", "format": "int32", "minimum": "1", "location": "query"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "EntityUserLinks"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}, "update": {"id": "analytics.management.webpropertyUserLinks.update", "path": "management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}", "httpMethod": "PUT", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}, "linkId": {"type": "string", "required": true, "location": "path"}, "webPropertyId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "EntityUserLink"}, "response": {"$ref": "EntityUserLink"}, "scopes": ["https://www.googleapis.com/auth/analytics.manage.users"]}}}', true));
    $this->metadata_columns = new BackupGuardGoogle_MetadataColumnsServiceResource($this, $this->serviceName, 'columns', json_decode('{"methods": {"list": {"id": "analytics.metadata.columns.list", "path": "metadata/{reportType}/columns", "httpMethod": "GET", "parameters": {"reportType": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Columns"}, "scopes": ["https://www.googleapis.com/auth/analytics", "https://www.googleapis.com/auth/analytics.readonly"]}}}', true));

  }
}



class BackupGuardGoogle_Account extends BackupGuardGoogle_Model {
  protected $__childLinkType = 'BackupGuardGoogle_AccountChildLink';
  protected $__childLinkDataType = '';
  public $childLink;
  public $created;
  public $id;
  public $kind;
  public $name;
  protected $__permissionsType = 'BackupGuardGoogle_AccountPermissions';
  protected $__permissionsDataType = '';
  public $permissions;
  public $selfLink;
  public $updated;
  public function setChildLink(BackupGuardGoogle_AccountChildLink $childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
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
  public function setPermissions(BackupGuardGoogle_AccountPermissions $permissions) {
    $this->permissions = $permissions;
  }
  public function getPermissions() {
    return $this->permissions;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
}

class BackupGuardGoogle_AccountChildLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_AccountPermissions extends BackupGuardGoogle_Model {
  public $effective;
  public function setEffective(/* array(BackupGuardGoogle_string) */ $effective) {
    $this->assertIsArray($effective, 'BackupGuardGoogle_string', __METHOD__);
    $this->effective = $effective;
  }
  public function getEffective() {
    return $this->effective;
  }
}

class BackupGuardGoogle_AccountRef extends BackupGuardGoogle_Model {
  public $href;
  public $id;
  public $kind;
  public $name;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
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
}

class BackupGuardGoogle_Accounts extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Account';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Account) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Account', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_AnalyticsDataimportDeleteUploadDataRequest extends BackupGuardGoogle_Model {
  public $customDataImportUids;
  public function setCustomDataImportUids(/* array(BackupGuardGoogle_string) */ $customDataImportUids) {
    $this->assertIsArray($customDataImportUids, 'BackupGuardGoogle_string', __METHOD__);
    $this->customDataImportUids = $customDataImportUids;
  }
  public function getCustomDataImportUids() {
    return $this->customDataImportUids;
  }
}

class BackupGuardGoogle_Column extends BackupGuardGoogle_Model {
  public $attributes;
  public $id;
  public $kind;
  public function setAttributes( $attributes) {
    $this->attributes = $attributes;
  }
  public function getAttributes() {
    return $this->attributes;
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

class BackupGuardGoogle_Columns extends BackupGuardGoogle_Model {
  public $attributeNames;
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_Column';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $totalResults;
  public function setAttributeNames(/* array(BackupGuardGoogle_string) */ $attributeNames) {
    $this->assertIsArray($attributeNames, 'BackupGuardGoogle_string', __METHOD__);
    $this->attributeNames = $attributeNames;
  }
  public function getAttributeNames() {
    return $this->attributeNames;
  }
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
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
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
}

class BackupGuardGoogle_CustomDataSource extends BackupGuardGoogle_Model {
  public $accountId;
  protected $__childLinkType = 'BackupGuardGoogle_CustomDataSourceChildLink';
  protected $__childLinkDataType = '';
  public $childLink;
  public $created;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $__parentLinkType = 'BackupGuardGoogle_CustomDataSourceParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  public $profilesLinked;
  public $selfLink;
  public $type;
  public $updated;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setChildLink(BackupGuardGoogle_CustomDataSourceChildLink $childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
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
  public function setParentLink(BackupGuardGoogle_CustomDataSourceParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setProfilesLinked(/* array(BackupGuardGoogle_string) */ $profilesLinked) {
    $this->assertIsArray($profilesLinked, 'BackupGuardGoogle_string', __METHOD__);
    $this->profilesLinked = $profilesLinked;
  }
  public function getProfilesLinked() {
    return $this->profilesLinked;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_CustomDataSourceChildLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_CustomDataSourceParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_CustomDataSources extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_CustomDataSource';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_CustomDataSource) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_CustomDataSource', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_DailyUpload extends BackupGuardGoogle_Model {
  public $accountId;
  public $appendCount;
  public $createdTime;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $modifiedTime;
  protected $__parentLinkType = 'BackupGuardGoogle_DailyUploadParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  protected $__recentChangesType = 'BackupGuardGoogle_DailyUploadRecentChanges';
  protected $__recentChangesDataType = 'array';
  public $recentChanges;
  public $selfLink;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAppendCount( $appendCount) {
    $this->appendCount = $appendCount;
  }
  public function getAppendCount() {
    return $this->appendCount;
  }
  public function setCreatedTime( $createdTime) {
    $this->createdTime = $createdTime;
  }
  public function getCreatedTime() {
    return $this->createdTime;
  }
  public function setCustomDataSourceId( $customDataSourceId) {
    $this->customDataSourceId = $customDataSourceId;
  }
  public function getCustomDataSourceId() {
    return $this->customDataSourceId;
  }
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setModifiedTime( $modifiedTime) {
    $this->modifiedTime = $modifiedTime;
  }
  public function getModifiedTime() {
    return $this->modifiedTime;
  }
  public function setParentLink(BackupGuardGoogle_DailyUploadParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setRecentChanges(/* array(BackupGuardGoogle_DailyUploadRecentChanges) */ $recentChanges) {
    $this->assertIsArray($recentChanges, 'BackupGuardGoogle_DailyUploadRecentChanges', __METHOD__);
    $this->recentChanges = $recentChanges;
  }
  public function getRecentChanges() {
    return $this->recentChanges;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_DailyUploadAppend extends BackupGuardGoogle_Model {
  public $accountId;
  public $appendNumber;
  public $customDataSourceId;
  public $date;
  public $kind;
  public $nextAppendLink;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAppendNumber( $appendNumber) {
    $this->appendNumber = $appendNumber;
  }
  public function getAppendNumber() {
    return $this->appendNumber;
  }
  public function setCustomDataSourceId( $customDataSourceId) {
    $this->customDataSourceId = $customDataSourceId;
  }
  public function getCustomDataSourceId() {
    return $this->customDataSourceId;
  }
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextAppendLink( $nextAppendLink) {
    $this->nextAppendLink = $nextAppendLink;
  }
  public function getNextAppendLink() {
    return $this->nextAppendLink;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_DailyUploadParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_DailyUploadRecentChanges extends BackupGuardGoogle_Model {
  public $change;
  public $time;
  public function setChange( $change) {
    $this->change = $change;
  }
  public function getChange() {
    return $this->change;
  }
  public function setTime( $time) {
    $this->time = $time;
  }
  public function getTime() {
    return $this->time;
  }
}

class BackupGuardGoogle_DailyUploads extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_DailyUpload';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_DailyUpload) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_DailyUpload', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_EntityUserLink extends BackupGuardGoogle_Model {
  protected $__entityType = 'BackupGuardGoogle_EntityUserLinkEntity';
  protected $__entityDataType = '';
  public $entity;
  public $id;
  public $kind;
  protected $__permissionsType = 'BackupGuardGoogle_EntityUserLinkPermissions';
  protected $__permissionsDataType = '';
  public $permissions;
  public $selfLink;
  protected $__userRefType = 'BackupGuardGoogle_UserRef';
  protected $__userRefDataType = '';
  public $userRef;
  public function setEntity(BackupGuardGoogle_EntityUserLinkEntity $entity) {
    $this->entity = $entity;
  }
  public function getEntity() {
    return $this->entity;
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
  public function setPermissions(BackupGuardGoogle_EntityUserLinkPermissions $permissions) {
    $this->permissions = $permissions;
  }
  public function getPermissions() {
    return $this->permissions;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setUserRef(BackupGuardGoogle_UserRef $userRef) {
    $this->userRef = $userRef;
  }
  public function getUserRef() {
    return $this->userRef;
  }
}

class BackupGuardGoogle_EntityUserLinkEntity extends BackupGuardGoogle_Model {
  protected $__accountRefType = 'BackupGuardGoogle_AccountRef';
  protected $__accountRefDataType = '';
  public $accountRef;
  protected $__profileRefType = 'BackupGuardGoogle_ProfileRef';
  protected $__profileRefDataType = '';
  public $profileRef;
  protected $__webPropertyRefType = 'BackupGuardGoogle_WebPropertyRef';
  protected $__webPropertyRefDataType = '';
  public $webPropertyRef;
  public function setAccountRef(BackupGuardGoogle_AccountRef $accountRef) {
    $this->accountRef = $accountRef;
  }
  public function getAccountRef() {
    return $this->accountRef;
  }
  public function setProfileRef(BackupGuardGoogle_ProfileRef $profileRef) {
    $this->profileRef = $profileRef;
  }
  public function getProfileRef() {
    return $this->profileRef;
  }
  public function setWebPropertyRef(BackupGuardGoogle_WebPropertyRef $webPropertyRef) {
    $this->webPropertyRef = $webPropertyRef;
  }
  public function getWebPropertyRef() {
    return $this->webPropertyRef;
  }
}

class BackupGuardGoogle_EntityUserLinkPermissions extends BackupGuardGoogle_Model {
  public $effective;
  public $local;
  public function setEffective(/* array(BackupGuardGoogle_string) */ $effective) {
    $this->assertIsArray($effective, 'BackupGuardGoogle_string', __METHOD__);
    $this->effective = $effective;
  }
  public function getEffective() {
    return $this->effective;
  }
  public function setLocal(/* array(BackupGuardGoogle_string) */ $local) {
    $this->assertIsArray($local, 'BackupGuardGoogle_string', __METHOD__);
    $this->local = $local;
  }
  public function getLocal() {
    return $this->local;
  }
}

class BackupGuardGoogle_EntityUserLinks extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_EntityUserLink';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public function setItems(/* array(BackupGuardGoogle_EntityUserLink) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_EntityUserLink', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
}

class BackupGuardGoogle_Experiment extends BackupGuardGoogle_Model {
  public $accountId;
  public $created;
  public $description;
  public $editableInGaUi;
  public $endTime;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $minimumExperimentLengthInDays;
  public $name;
  public $objectiveMetric;
  public $optimizationType;
  protected $__parentLinkType = 'BackupGuardGoogle_ExperimentParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  public $profileId;
  public $reasonExperimentEnded;
  public $rewriteVariationUrlsAsOriginal;
  public $selfLink;
  public $servingFramework;
  public $snippet;
  public $startTime;
  public $status;
  public $trafficCoverage;
  public $updated;
  protected $__variationsType = 'BackupGuardGoogle_ExperimentVariations';
  protected $__variationsDataType = 'array';
  public $variations;
  public $webPropertyId;
  public $winnerConfidenceLevel;
  public $winnerFound;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setEditableInGaUi( $editableInGaUi) {
    $this->editableInGaUi = $editableInGaUi;
  }
  public function getEditableInGaUi() {
    return $this->editableInGaUi;
  }
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMinimumExperimentLengthInDays( $minimumExperimentLengthInDays) {
    $this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
  }
  public function getMinimumExperimentLengthInDays() {
    return $this->minimumExperimentLengthInDays;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setObjectiveMetric( $objectiveMetric) {
    $this->objectiveMetric = $objectiveMetric;
  }
  public function getObjectiveMetric() {
    return $this->objectiveMetric;
  }
  public function setOptimizationType( $optimizationType) {
    $this->optimizationType = $optimizationType;
  }
  public function getOptimizationType() {
    return $this->optimizationType;
  }
  public function setParentLink(BackupGuardGoogle_ExperimentParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setReasonExperimentEnded( $reasonExperimentEnded) {
    $this->reasonExperimentEnded = $reasonExperimentEnded;
  }
  public function getReasonExperimentEnded() {
    return $this->reasonExperimentEnded;
  }
  public function setRewriteVariationUrlsAsOriginal( $rewriteVariationUrlsAsOriginal) {
    $this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
  }
  public function getRewriteVariationUrlsAsOriginal() {
    return $this->rewriteVariationUrlsAsOriginal;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setServingFramework( $servingFramework) {
    $this->servingFramework = $servingFramework;
  }
  public function getServingFramework() {
    return $this->servingFramework;
  }
  public function setSnippet( $snippet) {
    $this->snippet = $snippet;
  }
  public function getSnippet() {
    return $this->snippet;
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
  public function setTrafficCoverage( $trafficCoverage) {
    $this->trafficCoverage = $trafficCoverage;
  }
  public function getTrafficCoverage() {
    return $this->trafficCoverage;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setVariations(/* array(BackupGuardGoogle_ExperimentVariations) */ $variations) {
    $this->assertIsArray($variations, 'BackupGuardGoogle_ExperimentVariations', __METHOD__);
    $this->variations = $variations;
  }
  public function getVariations() {
    return $this->variations;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
  public function setWinnerConfidenceLevel( $winnerConfidenceLevel) {
    $this->winnerConfidenceLevel = $winnerConfidenceLevel;
  }
  public function getWinnerConfidenceLevel() {
    return $this->winnerConfidenceLevel;
  }
  public function setWinnerFound( $winnerFound) {
    $this->winnerFound = $winnerFound;
  }
  public function getWinnerFound() {
    return $this->winnerFound;
  }
}

class BackupGuardGoogle_ExperimentParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_ExperimentVariations extends BackupGuardGoogle_Model {
  public $name;
  public $status;
  public $url;
  public $weight;
  public $won;
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setUrl( $url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
  public function setWeight( $weight) {
    $this->weight = $weight;
  }
  public function getWeight() {
    return $this->weight;
  }
  public function setWon( $won) {
    $this->won = $won;
  }
  public function getWon() {
    return $this->won;
  }
}

class BackupGuardGoogle_Experiments extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Experiment';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Experiment) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Experiment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_GaData extends BackupGuardGoogle_Model {
  protected $__columnHeadersType = 'BackupGuardGoogle_GaDataColumnHeaders';
  protected $__columnHeadersDataType = 'array';
  public $columnHeaders;
  public $containsSampledData;
  public $id;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  protected $__profileInfoType = 'BackupGuardGoogle_GaDataProfileInfo';
  protected $__profileInfoDataType = '';
  public $profileInfo;
  protected $__queryType = 'BackupGuardGoogle_GaDataQuery';
  protected $__queryDataType = '';
  public $query;
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;
  public function setColumnHeaders(/* array(BackupGuardGoogle_GaDataColumnHeaders) */ $columnHeaders) {
    $this->assertIsArray($columnHeaders, 'BackupGuardGoogle_GaDataColumnHeaders', __METHOD__);
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders() {
    return $this->columnHeaders;
  }
  public function setContainsSampledData( $containsSampledData) {
    $this->containsSampledData = $containsSampledData;
  }
  public function getContainsSampledData() {
    return $this->containsSampledData;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setProfileInfo(BackupGuardGoogle_GaDataProfileInfo $profileInfo) {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo() {
    return $this->profileInfo;
  }
  public function setQuery(BackupGuardGoogle_GaDataQuery $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setRows(/* array(BackupGuardGoogle_string) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_string', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setTotalsForAllResults( $totalsForAllResults) {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  public function getTotalsForAllResults() {
    return $this->totalsForAllResults;
  }
}

class BackupGuardGoogle_GaDataColumnHeaders extends BackupGuardGoogle_Model {
  public $columnType;
  public $dataType;
  public $name;
  public function setColumnType( $columnType) {
    $this->columnType = $columnType;
  }
  public function getColumnType() {
    return $this->columnType;
  }
  public function setDataType( $dataType) {
    $this->dataType = $dataType;
  }
  public function getDataType() {
    return $this->dataType;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class BackupGuardGoogle_GaDataProfileInfo extends BackupGuardGoogle_Model {
  public $accountId;
  public $internalWebPropertyId;
  public $profileId;
  public $profileName;
  public $tableId;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setProfileName( $profileName) {
    $this->profileName = $profileName;
  }
  public function getProfileName() {
    return $this->profileName;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_GaDataQuery extends BackupGuardGoogle_Model {
  public $dimensions;
  public $end_date;
  public $filters;
  public $ids;
  public $max_results;
  public $metrics;
  public $segment;
  public $sort;
  public $start_date;
  public $start_index;
  public function setDimensions( $dimensions) {
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setEnd_date( $end_date) {
    $this->end_date = $end_date;
  }
  public function getEnd_date() {
    return $this->end_date;
  }
  public function setFilters( $filters) {
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setIds( $ids) {
    $this->ids = $ids;
  }
  public function getIds() {
    return $this->ids;
  }
  public function setMax_results( $max_results) {
    $this->max_results = $max_results;
  }
  public function getMax_results() {
    return $this->max_results;
  }
  public function setMetrics(/* array(BackupGuardGoogle_string) */ $metrics) {
    $this->assertIsArray($metrics, 'BackupGuardGoogle_string', __METHOD__);
    $this->metrics = $metrics;
  }
  public function getMetrics() {
    return $this->metrics;
  }
  public function setSegment( $segment) {
    $this->segment = $segment;
  }
  public function getSegment() {
    return $this->segment;
  }
  public function setSort(/* array(BackupGuardGoogle_string) */ $sort) {
    $this->assertIsArray($sort, 'BackupGuardGoogle_string', __METHOD__);
    $this->sort = $sort;
  }
  public function getSort() {
    return $this->sort;
  }
  public function setStart_date( $start_date) {
    $this->start_date = $start_date;
  }
  public function getStart_date() {
    return $this->start_date;
  }
  public function setStart_index( $start_index) {
    $this->start_index = $start_index;
  }
  public function getStart_index() {
    return $this->start_index;
  }
}

class BackupGuardGoogle_Goal extends BackupGuardGoogle_Model {
  public $accountId;
  public $active;
  public $created;
  protected $__eventDetailsType = 'BackupGuardGoogle_GoalEventDetails';
  protected $__eventDetailsDataType = '';
  public $eventDetails;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $name;
  protected $__parentLinkType = 'BackupGuardGoogle_GoalParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  public $profileId;
  public $selfLink;
  public $type;
  public $updated;
  protected $__urlDestinationDetailsType = 'BackupGuardGoogle_GoalUrlDestinationDetails';
  protected $__urlDestinationDetailsDataType = '';
  public $urlDestinationDetails;
  public $value;
  protected $__visitNumPagesDetailsType = 'BackupGuardGoogle_GoalVisitNumPagesDetails';
  protected $__visitNumPagesDetailsDataType = '';
  public $visitNumPagesDetails;
  protected $__visitTimeOnSiteDetailsType = 'BackupGuardGoogle_GoalVisitTimeOnSiteDetails';
  protected $__visitTimeOnSiteDetailsDataType = '';
  public $visitTimeOnSiteDetails;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setActive( $active) {
    $this->active = $active;
  }
  public function getActive() {
    return $this->active;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setEventDetails(BackupGuardGoogle_GoalEventDetails $eventDetails) {
    $this->eventDetails = $eventDetails;
  }
  public function getEventDetails() {
    return $this->eventDetails;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
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
  public function setParentLink(BackupGuardGoogle_GoalParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setUrlDestinationDetails(BackupGuardGoogle_GoalUrlDestinationDetails $urlDestinationDetails) {
    $this->urlDestinationDetails = $urlDestinationDetails;
  }
  public function getUrlDestinationDetails() {
    return $this->urlDestinationDetails;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
  public function setVisitNumPagesDetails(BackupGuardGoogle_GoalVisitNumPagesDetails $visitNumPagesDetails) {
    $this->visitNumPagesDetails = $visitNumPagesDetails;
  }
  public function getVisitNumPagesDetails() {
    return $this->visitNumPagesDetails;
  }
  public function setVisitTimeOnSiteDetails(BackupGuardGoogle_GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails) {
    $this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
  }
  public function getVisitTimeOnSiteDetails() {
    return $this->visitTimeOnSiteDetails;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_GoalEventDetails extends BackupGuardGoogle_Model {
  protected $__eventConditionsType = 'BackupGuardGoogle_GoalEventDetailsEventConditions';
  protected $__eventConditionsDataType = 'array';
  public $eventConditions;
  public $useEventValue;
  public function setEventConditions(/* array(BackupGuardGoogle_GoalEventDetailsEventConditions) */ $eventConditions) {
    $this->assertIsArray($eventConditions, 'BackupGuardGoogle_GoalEventDetailsEventConditions', __METHOD__);
    $this->eventConditions = $eventConditions;
  }
  public function getEventConditions() {
    return $this->eventConditions;
  }
  public function setUseEventValue( $useEventValue) {
    $this->useEventValue = $useEventValue;
  }
  public function getUseEventValue() {
    return $this->useEventValue;
  }
}

class BackupGuardGoogle_GoalEventDetailsEventConditions extends BackupGuardGoogle_Model {
  public $comparisonType;
  public $comparisonValue;
  public $expression;
  public $matchType;
  public $type;
  public function setComparisonType( $comparisonType) {
    $this->comparisonType = $comparisonType;
  }
  public function getComparisonType() {
    return $this->comparisonType;
  }
  public function setComparisonValue( $comparisonValue) {
    $this->comparisonValue = $comparisonValue;
  }
  public function getComparisonValue() {
    return $this->comparisonValue;
  }
  public function setExpression( $expression) {
    $this->expression = $expression;
  }
  public function getExpression() {
    return $this->expression;
  }
  public function setMatchType( $matchType) {
    $this->matchType = $matchType;
  }
  public function getMatchType() {
    return $this->matchType;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_GoalParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_GoalUrlDestinationDetails extends BackupGuardGoogle_Model {
  public $caseSensitive;
  public $firstStepRequired;
  public $matchType;
  protected $__stepsType = 'BackupGuardGoogle_GoalUrlDestinationDetailsSteps';
  protected $__stepsDataType = 'array';
  public $steps;
  public $url;
  public function setCaseSensitive( $caseSensitive) {
    $this->caseSensitive = $caseSensitive;
  }
  public function getCaseSensitive() {
    return $this->caseSensitive;
  }
  public function setFirstStepRequired( $firstStepRequired) {
    $this->firstStepRequired = $firstStepRequired;
  }
  public function getFirstStepRequired() {
    return $this->firstStepRequired;
  }
  public function setMatchType( $matchType) {
    $this->matchType = $matchType;
  }
  public function getMatchType() {
    return $this->matchType;
  }
  public function setSteps(/* array(BackupGuardGoogle_GoalUrlDestinationDetailsSteps) */ $steps) {
    $this->assertIsArray($steps, 'BackupGuardGoogle_GoalUrlDestinationDetailsSteps', __METHOD__);
    $this->steps = $steps;
  }
  public function getSteps() {
    return $this->steps;
  }
  public function setUrl( $url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class BackupGuardGoogle_GoalUrlDestinationDetailsSteps extends BackupGuardGoogle_Model {
  public $name;
  public $number;
  public $url;
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNumber( $number) {
    $this->number = $number;
  }
  public function getNumber() {
    return $this->number;
  }
  public function setUrl( $url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class BackupGuardGoogle_GoalVisitNumPagesDetails extends BackupGuardGoogle_Model {
  public $comparisonType;
  public $comparisonValue;
  public function setComparisonType( $comparisonType) {
    $this->comparisonType = $comparisonType;
  }
  public function getComparisonType() {
    return $this->comparisonType;
  }
  public function setComparisonValue( $comparisonValue) {
    $this->comparisonValue = $comparisonValue;
  }
  public function getComparisonValue() {
    return $this->comparisonValue;
  }
}

class BackupGuardGoogle_GoalVisitTimeOnSiteDetails extends BackupGuardGoogle_Model {
  public $comparisonType;
  public $comparisonValue;
  public function setComparisonType( $comparisonType) {
    $this->comparisonType = $comparisonType;
  }
  public function getComparisonType() {
    return $this->comparisonType;
  }
  public function setComparisonValue( $comparisonValue) {
    $this->comparisonValue = $comparisonValue;
  }
  public function getComparisonValue() {
    return $this->comparisonValue;
  }
}

class BackupGuardGoogle_Goals extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Goal';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Goal) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Goal', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_McfData extends BackupGuardGoogle_Model {
  protected $__columnHeadersType = 'BackupGuardGoogle_McfDataColumnHeaders';
  protected $__columnHeadersDataType = 'array';
  public $columnHeaders;
  public $containsSampledData;
  public $id;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  protected $__profileInfoType = 'BackupGuardGoogle_McfDataProfileInfo';
  protected $__profileInfoDataType = '';
  public $profileInfo;
  protected $__queryType = 'BackupGuardGoogle_McfDataQuery';
  protected $__queryDataType = '';
  public $query;
  protected $__rowsType = 'BackupGuardGoogle_McfDataRows';
  protected $__rowsDataType = 'array';
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;
  public function setColumnHeaders(/* array(BackupGuardGoogle_McfDataColumnHeaders) */ $columnHeaders) {
    $this->assertIsArray($columnHeaders, 'BackupGuardGoogle_McfDataColumnHeaders', __METHOD__);
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders() {
    return $this->columnHeaders;
  }
  public function setContainsSampledData( $containsSampledData) {
    $this->containsSampledData = $containsSampledData;
  }
  public function getContainsSampledData() {
    return $this->containsSampledData;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setProfileInfo(BackupGuardGoogle_McfDataProfileInfo $profileInfo) {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo() {
    return $this->profileInfo;
  }
  public function setQuery(BackupGuardGoogle_McfDataQuery $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setRows(/* array(BackupGuardGoogle_McfDataRows) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_McfDataRows', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setTotalsForAllResults( $totalsForAllResults) {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  public function getTotalsForAllResults() {
    return $this->totalsForAllResults;
  }
}

class BackupGuardGoogle_McfDataColumnHeaders extends BackupGuardGoogle_Model {
  public $columnType;
  public $dataType;
  public $name;
  public function setColumnType( $columnType) {
    $this->columnType = $columnType;
  }
  public function getColumnType() {
    return $this->columnType;
  }
  public function setDataType( $dataType) {
    $this->dataType = $dataType;
  }
  public function getDataType() {
    return $this->dataType;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class BackupGuardGoogle_McfDataProfileInfo extends BackupGuardGoogle_Model {
  public $accountId;
  public $internalWebPropertyId;
  public $profileId;
  public $profileName;
  public $tableId;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setProfileName( $profileName) {
    $this->profileName = $profileName;
  }
  public function getProfileName() {
    return $this->profileName;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_McfDataQuery extends BackupGuardGoogle_Model {
  public $dimensions;
  public $end_date;
  public $filters;
  public $ids;
  public $max_results;
  public $metrics;
  public $segment;
  public $sort;
  public $start_date;
  public $start_index;
  public function setDimensions( $dimensions) {
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setEnd_date( $end_date) {
    $this->end_date = $end_date;
  }
  public function getEnd_date() {
    return $this->end_date;
  }
  public function setFilters( $filters) {
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setIds( $ids) {
    $this->ids = $ids;
  }
  public function getIds() {
    return $this->ids;
  }
  public function setMax_results( $max_results) {
    $this->max_results = $max_results;
  }
  public function getMax_results() {
    return $this->max_results;
  }
  public function setMetrics(/* array(BackupGuardGoogle_string) */ $metrics) {
    $this->assertIsArray($metrics, 'BackupGuardGoogle_string', __METHOD__);
    $this->metrics = $metrics;
  }
  public function getMetrics() {
    return $this->metrics;
  }
  public function setSegment( $segment) {
    $this->segment = $segment;
  }
  public function getSegment() {
    return $this->segment;
  }
  public function setSort(/* array(BackupGuardGoogle_string) */ $sort) {
    $this->assertIsArray($sort, 'BackupGuardGoogle_string', __METHOD__);
    $this->sort = $sort;
  }
  public function getSort() {
    return $this->sort;
  }
  public function setStart_date( $start_date) {
    $this->start_date = $start_date;
  }
  public function getStart_date() {
    return $this->start_date;
  }
  public function setStart_index( $start_index) {
    $this->start_index = $start_index;
  }
  public function getStart_index() {
    return $this->start_index;
  }
}

class BackupGuardGoogle_McfDataRows extends BackupGuardGoogle_Model {
  protected $__conversionPathValueType = 'BackupGuardGoogle_McfDataRowsConversionPathValue';
  protected $__conversionPathValueDataType = 'array';
  public $conversionPathValue;
  public $primitiveValue;
  public function setConversionPathValue(/* array(BackupGuardGoogle_McfDataRowsConversionPathValue) */ $conversionPathValue) {
    $this->assertIsArray($conversionPathValue, 'BackupGuardGoogle_McfDataRowsConversionPathValue', __METHOD__);
    $this->conversionPathValue = $conversionPathValue;
  }
  public function getConversionPathValue() {
    return $this->conversionPathValue;
  }
  public function setPrimitiveValue( $primitiveValue) {
    $this->primitiveValue = $primitiveValue;
  }
  public function getPrimitiveValue() {
    return $this->primitiveValue;
  }
}

class BackupGuardGoogle_McfDataRowsConversionPathValue extends BackupGuardGoogle_Model {
  public $interactionType;
  public $nodeValue;
  public function setInteractionType( $interactionType) {
    $this->interactionType = $interactionType;
  }
  public function getInteractionType() {
    return $this->interactionType;
  }
  public function setNodeValue( $nodeValue) {
    $this->nodeValue = $nodeValue;
  }
  public function getNodeValue() {
    return $this->nodeValue;
  }
}

class BackupGuardGoogle_Profile extends BackupGuardGoogle_Model {
  public $accountId;
  protected $__childLinkType = 'BackupGuardGoogle_ProfileChildLink';
  protected $__childLinkDataType = '';
  public $childLink;
  public $created;
  public $currency;
  public $defaultPage;
  public $eCommerceTracking;
  public $excludeQueryParameters;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $name;
  protected $__parentLinkType = 'BackupGuardGoogle_ProfileParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  protected $__permissionsType = 'BackupGuardGoogle_ProfilePermissions';
  protected $__permissionsDataType = '';
  public $permissions;
  public $selfLink;
  public $siteSearchCategoryParameters;
  public $siteSearchQueryParameters;
  public $timezone;
  public $type;
  public $updated;
  public $webPropertyId;
  public $websiteUrl;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setChildLink(BackupGuardGoogle_ProfileChildLink $childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setCurrency( $currency) {
    $this->currency = $currency;
  }
  public function getCurrency() {
    return $this->currency;
  }
  public function setDefaultPage( $defaultPage) {
    $this->defaultPage = $defaultPage;
  }
  public function getDefaultPage() {
    return $this->defaultPage;
  }
  public function setECommerceTracking( $eCommerceTracking) {
    $this->eCommerceTracking = $eCommerceTracking;
  }
  public function getECommerceTracking() {
    return $this->eCommerceTracking;
  }
  public function setExcludeQueryParameters( $excludeQueryParameters) {
    $this->excludeQueryParameters = $excludeQueryParameters;
  }
  public function getExcludeQueryParameters() {
    return $this->excludeQueryParameters;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
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
  public function setParentLink(BackupGuardGoogle_ProfileParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setPermissions(BackupGuardGoogle_ProfilePermissions $permissions) {
    $this->permissions = $permissions;
  }
  public function getPermissions() {
    return $this->permissions;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSiteSearchCategoryParameters( $siteSearchCategoryParameters) {
    $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
  }
  public function getSiteSearchCategoryParameters() {
    return $this->siteSearchCategoryParameters;
  }
  public function setSiteSearchQueryParameters( $siteSearchQueryParameters) {
    $this->siteSearchQueryParameters = $siteSearchQueryParameters;
  }
  public function getSiteSearchQueryParameters() {
    return $this->siteSearchQueryParameters;
  }
  public function setTimezone( $timezone) {
    $this->timezone = $timezone;
  }
  public function getTimezone() {
    return $this->timezone;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
  public function setWebsiteUrl( $websiteUrl) {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl() {
    return $this->websiteUrl;
  }
}

class BackupGuardGoogle_ProfileChildLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_ProfileParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_ProfilePermissions extends BackupGuardGoogle_Model {
  public $effective;
  public function setEffective(/* array(BackupGuardGoogle_string) */ $effective) {
    $this->assertIsArray($effective, 'BackupGuardGoogle_string', __METHOD__);
    $this->effective = $effective;
  }
  public function getEffective() {
    return $this->effective;
  }
}

class BackupGuardGoogle_ProfileRef extends BackupGuardGoogle_Model {
  public $accountId;
  public $href;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $name;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
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
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_Profiles extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Profile';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Profile) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Profile', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_RealtimeData extends BackupGuardGoogle_Model {
  protected $__columnHeadersType = 'BackupGuardGoogle_RealtimeDataColumnHeaders';
  protected $__columnHeadersDataType = 'array';
  public $columnHeaders;
  public $id;
  public $kind;
  protected $__profileInfoType = 'BackupGuardGoogle_RealtimeDataProfileInfo';
  protected $__profileInfoDataType = '';
  public $profileInfo;
  protected $__queryType = 'BackupGuardGoogle_RealtimeDataQuery';
  protected $__queryDataType = '';
  public $query;
  public $rows;
  public $selfLink;
  public $totalResults;
  public $totalsForAllResults;
  public function setColumnHeaders(/* array(BackupGuardGoogle_RealtimeDataColumnHeaders) */ $columnHeaders) {
    $this->assertIsArray($columnHeaders, 'BackupGuardGoogle_RealtimeDataColumnHeaders', __METHOD__);
    $this->columnHeaders = $columnHeaders;
  }
  public function getColumnHeaders() {
    return $this->columnHeaders;
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
  public function setProfileInfo(BackupGuardGoogle_RealtimeDataProfileInfo $profileInfo) {
    $this->profileInfo = $profileInfo;
  }
  public function getProfileInfo() {
    return $this->profileInfo;
  }
  public function setQuery(BackupGuardGoogle_RealtimeDataQuery $query) {
    $this->query = $query;
  }
  public function getQuery() {
    return $this->query;
  }
  public function setRows(/* array(BackupGuardGoogle_string) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_string', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setTotalsForAllResults( $totalsForAllResults) {
    $this->totalsForAllResults = $totalsForAllResults;
  }
  public function getTotalsForAllResults() {
    return $this->totalsForAllResults;
  }
}

class BackupGuardGoogle_RealtimeDataColumnHeaders extends BackupGuardGoogle_Model {
  public $columnType;
  public $dataType;
  public $name;
  public function setColumnType( $columnType) {
    $this->columnType = $columnType;
  }
  public function getColumnType() {
    return $this->columnType;
  }
  public function setDataType( $dataType) {
    $this->dataType = $dataType;
  }
  public function getDataType() {
    return $this->dataType;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class BackupGuardGoogle_RealtimeDataProfileInfo extends BackupGuardGoogle_Model {
  public $accountId;
  public $internalWebPropertyId;
  public $profileId;
  public $profileName;
  public $tableId;
  public $webPropertyId;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
  }
  public function setProfileId( $profileId) {
    $this->profileId = $profileId;
  }
  public function getProfileId() {
    return $this->profileId;
  }
  public function setProfileName( $profileName) {
    $this->profileName = $profileName;
  }
  public function getProfileName() {
    return $this->profileName;
  }
  public function setTableId( $tableId) {
    $this->tableId = $tableId;
  }
  public function getTableId() {
    return $this->tableId;
  }
  public function setWebPropertyId( $webPropertyId) {
    $this->webPropertyId = $webPropertyId;
  }
  public function getWebPropertyId() {
    return $this->webPropertyId;
  }
}

class BackupGuardGoogle_RealtimeDataQuery extends BackupGuardGoogle_Model {
  public $dimensions;
  public $filters;
  public $ids;
  public $max_results;
  public $metrics;
  public $sort;
  public function setDimensions( $dimensions) {
    $this->dimensions = $dimensions;
  }
  public function getDimensions() {
    return $this->dimensions;
  }
  public function setFilters( $filters) {
    $this->filters = $filters;
  }
  public function getFilters() {
    return $this->filters;
  }
  public function setIds( $ids) {
    $this->ids = $ids;
  }
  public function getIds() {
    return $this->ids;
  }
  public function setMax_results( $max_results) {
    $this->max_results = $max_results;
  }
  public function getMax_results() {
    return $this->max_results;
  }
  public function setMetrics(/* array(BackupGuardGoogle_string) */ $metrics) {
    $this->assertIsArray($metrics, 'BackupGuardGoogle_string', __METHOD__);
    $this->metrics = $metrics;
  }
  public function getMetrics() {
    return $this->metrics;
  }
  public function setSort(/* array(BackupGuardGoogle_string) */ $sort) {
    $this->assertIsArray($sort, 'BackupGuardGoogle_string', __METHOD__);
    $this->sort = $sort;
  }
  public function getSort() {
    return $this->sort;
  }
}

class BackupGuardGoogle_Segment extends BackupGuardGoogle_Model {
  public $created;
  public $definition;
  public $id;
  public $kind;
  public $name;
  public $segmentId;
  public $selfLink;
  public $updated;
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setDefinition( $definition) {
    $this->definition = $definition;
  }
  public function getDefinition() {
    return $this->definition;
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
  public function setSegmentId( $segmentId) {
    $this->segmentId = $segmentId;
  }
  public function getSegmentId() {
    return $this->segmentId;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
}

class BackupGuardGoogle_Segments extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Segment';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Segment) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Segment', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_Upload extends BackupGuardGoogle_Model {
  public $accountId;
  public $customDataSourceId;
  public $errors;
  public $id;
  public $kind;
  public $status;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setCustomDataSourceId( $customDataSourceId) {
    $this->customDataSourceId = $customDataSourceId;
  }
  public function getCustomDataSourceId() {
    return $this->customDataSourceId;
  }
  public function setErrors(/* array(BackupGuardGoogle_string) */ $errors) {
    $this->assertIsArray($errors, 'BackupGuardGoogle_string', __METHOD__);
    $this->errors = $errors;
  }
  public function getErrors() {
    return $this->errors;
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
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_Uploads extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Upload';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public function setItems(/* array(BackupGuardGoogle_Upload) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Upload', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
}

class BackupGuardGoogle_UserRef extends BackupGuardGoogle_Model {
  public $email;
  public $id;
  public $kind;
  public function setEmail( $email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
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

class BackupGuardGoogle_WebPropertyRef extends BackupGuardGoogle_Model {
  public $accountId;
  public $href;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $name;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
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
}

class BackupGuardGoogle_Webproperties extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Webproperty';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextLink;
  public $previousLink;
  public $startIndex;
  public $totalResults;
  public $username;
  public function setItems(/* array(BackupGuardGoogle_Webproperty) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Webproperty', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setItemsPerPage( $itemsPerPage) {
    $this->itemsPerPage = $itemsPerPage;
  }
  public function getItemsPerPage() {
    return $this->itemsPerPage;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextLink( $nextLink) {
    $this->nextLink = $nextLink;
  }
  public function getNextLink() {
    return $this->nextLink;
  }
  public function setPreviousLink( $previousLink) {
    $this->previousLink = $previousLink;
  }
  public function getPreviousLink() {
    return $this->previousLink;
  }
  public function setStartIndex( $startIndex) {
    $this->startIndex = $startIndex;
  }
  public function getStartIndex() {
    return $this->startIndex;
  }
  public function setTotalResults( $totalResults) {
    $this->totalResults = $totalResults;
  }
  public function getTotalResults() {
    return $this->totalResults;
  }
  public function setUsername( $username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
}

class BackupGuardGoogle_Webproperty extends BackupGuardGoogle_Model {
  public $accountId;
  protected $__childLinkType = 'BackupGuardGoogle_WebpropertyChildLink';
  protected $__childLinkDataType = '';
  public $childLink;
  public $created;
  public $defaultProfileId;
  public $id;
  public $industryVertical;
  public $internalWebPropertyId;
  public $kind;
  public $level;
  public $name;
  protected $__parentLinkType = 'BackupGuardGoogle_WebpropertyParentLink';
  protected $__parentLinkDataType = '';
  public $parentLink;
  protected $__permissionsType = 'BackupGuardGoogle_WebpropertyPermissions';
  protected $__permissionsDataType = '';
  public $permissions;
  public $profileCount;
  public $selfLink;
  public $updated;
  public $websiteUrl;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setChildLink(BackupGuardGoogle_WebpropertyChildLink $childLink) {
    $this->childLink = $childLink;
  }
  public function getChildLink() {
    return $this->childLink;
  }
  public function setCreated( $created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setDefaultProfileId( $defaultProfileId) {
    $this->defaultProfileId = $defaultProfileId;
  }
  public function getDefaultProfileId() {
    return $this->defaultProfileId;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIndustryVertical( $industryVertical) {
    $this->industryVertical = $industryVertical;
  }
  public function getIndustryVertical() {
    return $this->industryVertical;
  }
  public function setInternalWebPropertyId( $internalWebPropertyId) {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }
  public function getInternalWebPropertyId() {
    return $this->internalWebPropertyId;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLevel( $level) {
    $this->level = $level;
  }
  public function getLevel() {
    return $this->level;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setParentLink(BackupGuardGoogle_WebpropertyParentLink $parentLink) {
    $this->parentLink = $parentLink;
  }
  public function getParentLink() {
    return $this->parentLink;
  }
  public function setPermissions(BackupGuardGoogle_WebpropertyPermissions $permissions) {
    $this->permissions = $permissions;
  }
  public function getPermissions() {
    return $this->permissions;
  }
  public function setProfileCount( $profileCount) {
    $this->profileCount = $profileCount;
  }
  public function getProfileCount() {
    return $this->profileCount;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setUpdated( $updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setWebsiteUrl( $websiteUrl) {
    $this->websiteUrl = $websiteUrl;
  }
  public function getWebsiteUrl() {
    return $this->websiteUrl;
  }
}

class BackupGuardGoogle_WebpropertyChildLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_WebpropertyParentLink extends BackupGuardGoogle_Model {
  public $href;
  public $type;
  public function setHref( $href) {
    $this->href = $href;
  }
  public function getHref() {
    return $this->href;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_WebpropertyPermissions extends BackupGuardGoogle_Model {
  public $effective;
  public function setEffective(/* array(BackupGuardGoogle_string) */ $effective) {
    $this->assertIsArray($effective, 'BackupGuardGoogle_string', __METHOD__);
    $this->effective = $effective;
  }
  public function getEffective() {
    return $this->effective;
  }
}
