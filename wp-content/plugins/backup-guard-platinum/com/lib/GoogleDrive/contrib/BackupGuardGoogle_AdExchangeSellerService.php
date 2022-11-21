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
   * The "accounts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $accounts = $adexchangesellerService->accounts;
   *  </code>
   */
  class BackupGuardGoogle_AccountsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Get information about the selected Ad Exchange account. (accounts.get)
     *
     * @param string $accountId Account to get information about. Tip: 'myaccount' is a valid ID.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Account
     */
    public function get($accountId, $optParams = array()) {
      $params = array('accountId' => $accountId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Account($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adclients" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $adclients = $adexchangesellerService->adclients;
   *  </code>
   */
  class BackupGuardGoogle_AdclientsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List all ad clients in this Ad Exchange account. (adclients.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of ad clients to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_AdClients
     */
    public function listAdclients($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AdClients($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adunits" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $adunits = $adexchangesellerService->adunits;
   *  </code>
   */
  class BackupGuardGoogle_AdunitsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets the specified ad unit in the specified ad client. (adunits.get)
     *
     * @param string $adClientId Ad client for which to get the ad unit.
     * @param string $adUnitId Ad unit to retrieve.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_AdUnit
     */
    public function get($adClientId, $adUnitId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AdUnit($data);
      } else {
        return $data;
      }
    }
    /**
     * List all ad units in the specified ad client for this Ad Exchange account.
     * (adunits.list)
     *
     * @param string $adClientId Ad client for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_AdUnits
     */
    public function listAdunits($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AdUnits($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "customchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $customchannels = $adexchangesellerService->customchannels;
   *  </code>
   */
  class BackupGuardGoogle_AdunitsCustomchannelsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List all custom channels which the specified ad unit belongs to.
     * (customchannels.list)
     *
     * @param string $adClientId Ad client which contains the ad unit.
     * @param string $adUnitId Ad unit for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_CustomChannels
     */
    public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_CustomChannels($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "alerts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $alerts = $adexchangesellerService->alerts;
   *  </code>
   */
  class BackupGuardGoogle_AlertsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List the alerts for this Ad Exchange account. (alerts.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale The locale to use for translating alert messages. The account locale will be used if this is not supplied. The AdSense default (English) will be used if the supplied locale is invalid or unsupported.
     * @return BackupGuardGoogle_Alerts
     */
    public function listAlerts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Alerts($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "customchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $customchannels = $adexchangesellerService->customchannels;
   *  </code>
   */
  class BackupGuardGoogle_CustomchannelsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Get the specified custom channel from the specified ad client.
     * (customchannels.get)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel to retrieve.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_CustomChannel
     */
    public function get($adClientId, $customChannelId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_CustomChannel($data);
      } else {
        return $data;
      }
    }
    /**
     * List all custom channels in the specified ad client for this Ad Exchange
     * account. (customchannels.list)
     *
     * @param string $adClientId Ad client for which to list custom channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of custom channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through custom channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_CustomChannels
     */
    public function listCustomchannels($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_CustomChannels($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "adunits" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $adunits = $adexchangesellerService->adunits;
   *  </code>
   */
  class BackupGuardGoogle_CustomchannelsAdunitsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List all ad units in the specified custom channel. (adunits.list)
     *
     * @param string $adClientId Ad client which contains the custom channel.
     * @param string $customChannelId Custom channel for which to list ad units.
     * @param array $optParams Optional parameters.
     *
     * @opt_param bool includeInactive Whether to include inactive ad units. Default: true.
     * @opt_param string maxResults The maximum number of ad units to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through ad units. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_AdUnits
     */
    public function listCustomchannelsAdunits($adClientId, $customChannelId, $optParams = array()) {
      $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AdUnits($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "metadata" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $metadata = $adexchangesellerService->metadata;
   *  </code>
   */
  class BackupGuardGoogle_MetadataServiceResource extends BackupGuardGoogle_ServiceResource {

  }

  /**
   * The "dimensions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $dimensions = $adexchangesellerService->dimensions;
   *  </code>
   */
  class BackupGuardGoogle_MetadataDimensionsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List the metadata for the dimensions available to this AdExchange account.
     * (dimensions.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Metadata
     */
    public function listMetadataDimensions($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Metadata($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "metrics" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $metrics = $adexchangesellerService->metrics;
   *  </code>
   */
  class BackupGuardGoogle_MetadataMetricsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List the metadata for the metrics available to this AdExchange account.
     * (metrics.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Metadata
     */
    public function listMetadataMetrics($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Metadata($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "preferreddeals" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $preferreddeals = $adexchangesellerService->preferreddeals;
   *  </code>
   */
  class BackupGuardGoogle_PreferreddealsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Get information about the selected Ad Exchange Preferred Deal.
     * (preferreddeals.get)
     *
     * @param string $dealId Preferred deal to get information about.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_PreferredDeal
     */
    public function get($dealId, $optParams = array()) {
      $params = array('dealId' => $dealId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_PreferredDeal($data);
      } else {
        return $data;
      }
    }
    /**
     * List the preferred deals for this Ad Exchange account. (preferreddeals.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_PreferredDeals
     */
    public function listPreferreddeals($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_PreferredDeals($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "reports" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $reports = $adexchangesellerService->reports;
   *  </code>
   */
  class BackupGuardGoogle_ReportsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Generate an Ad Exchange report based on the report request sent in the query
     * parameters. Returns the result as JSON; to retrieve output in CSV format
     * specify "alt=csv" as a query parameter. (reports.generate)
     *
     * @param string $startDate Start of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param string $endDate End of the date range to report on in "YYYY-MM-DD" format, inclusive.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string dimension Dimensions to base the report on.
     * @opt_param string filter Filters to be run on the report.
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param string maxResults The maximum number of rows of report data to return.
     * @opt_param string metric Numeric columns to include in the report.
     * @opt_param string sort The name of a dimension or metric to sort the resulting report on, optionally prefixed with "+" to sort ascending or "-" to sort descending. If no prefix is specified, the column is sorted ascending.
     * @opt_param string startIndex Index of the first row of report data to return.
     * @return BackupGuardGoogle_Report
     */
    public function generate($startDate, $endDate, $optParams = array()) {
      $params = array('startDate' => $startDate, 'endDate' => $endDate);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Report($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "saved" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $saved = $adexchangesellerService->saved;
   *  </code>
   */
  class BackupGuardGoogle_ReportsSavedServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Generate an Ad Exchange report based on the saved report ID sent in the query
     * parameters. (saved.generate)
     *
     * @param string $savedReportId The saved report to retrieve.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string locale Optional locale to use for translating report output to a local language. Defaults to "en_US" if not specified.
     * @opt_param int maxResults The maximum number of rows of report data to return.
     * @opt_param int startIndex Index of the first row of report data to return.
     * @return BackupGuardGoogle_Report
     */
    public function generate($savedReportId, $optParams = array()) {
      $params = array('savedReportId' => $savedReportId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('generate', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Report($data);
      } else {
        return $data;
      }
    }
    /**
     * List all saved reports in this Ad Exchange account. (saved.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param int maxResults The maximum number of saved reports to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through saved reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_SavedReports
     */
    public function listReportsSaved($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SavedReports($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "urlchannels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangesellerService = new BackupGuardGoogle_AdExchangeSellerService(...);
   *   $urlchannels = $adexchangesellerService->urlchannels;
   *  </code>
   */
  class BackupGuardGoogle_UrlchannelsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List all URL channels in the specified ad client for this Ad Exchange
     * account. (urlchannels.list)
     *
     * @param string $adClientId Ad client for which to list URL channels.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults The maximum number of URL channels to include in the response, used for paging.
     * @opt_param string pageToken A continuation token, used to page through URL channels. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response.
     * @return BackupGuardGoogle_UrlChannels
     */
    public function listUrlchannels($adClientId, $optParams = array()) {
      $params = array('adClientId' => $adClientId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UrlChannels($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_AdExchangeSeller (v1.1).
 *
 * <p>
 * Gives Ad Exchange seller users access to their inventory and the ability to generate reports
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/seller-rest/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_AdExchangeSellerService extends BackupGuardGoogle_Service {
  public $accounts;
  public $adclients;
  public $adunits;
  public $adunits_customchannels;
  public $alerts;
  public $customchannels;
  public $customchannels_adunits;
  public $metadata_dimensions;
  public $metadata_metrics;
  public $preferreddeals;
  public $reports;
  public $reports_saved;
  public $urlchannels;
  /**
   * Constructs the internal representation of the AdExchangeSeller service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'adexchangeseller/v1.1/';
    $this->version = 'v1.1';
    $this->serviceName = 'adexchangeseller';

    $client->addService($this->serviceName, $this->version);
    $this->accounts = new BackupGuardGoogle_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adexchangeseller.accounts.get", "path": "accounts/{accountId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->adclients = new BackupGuardGoogle_AdclientsServiceResource($this, $this->serviceName, 'adclients', json_decode('{"methods": {"list": {"id": "adexchangeseller.adclients.list", "path": "adclients", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdClients"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->adunits = new BackupGuardGoogle_AdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"get": {"id": "adexchangeseller.adunits.get", "path": "adclients/{adClientId}/adunits/{adUnitId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AdUnit"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.adunits.list", "path": "adclients/{adClientId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->adunits_customchannels = new BackupGuardGoogle_AdunitsCustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.adunits.customchannels.list", "path": "adclients/{adClientId}/adunits/{adUnitId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "adUnitId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->alerts = new BackupGuardGoogle_AlertsServiceResource($this, $this->serviceName, 'alerts', json_decode('{"methods": {"list": {"id": "adexchangeseller.alerts.list", "path": "alerts", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}}, "response": {"$ref": "Alerts"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->customchannels = new BackupGuardGoogle_CustomchannelsServiceResource($this, $this->serviceName, 'customchannels', json_decode('{"methods": {"get": {"id": "adexchangeseller.customchannels.get", "path": "adclients/{adClientId}/customchannels/{customChannelId}", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "CustomChannel"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.customchannels.list", "path": "adclients/{adClientId}/customchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "CustomChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->customchannels_adunits = new BackupGuardGoogle_CustomchannelsAdunitsServiceResource($this, $this->serviceName, 'adunits', json_decode('{"methods": {"list": {"id": "adexchangeseller.customchannels.adunits.list", "path": "adclients/{adClientId}/customchannels/{customChannelId}/adunits", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "customChannelId": {"type": "string", "required": true, "location": "path"}, "includeInactive": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "AdUnits"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->metadata_dimensions = new BackupGuardGoogle_MetadataDimensionsServiceResource($this, $this->serviceName, 'dimensions', json_decode('{"methods": {"list": {"id": "adexchangeseller.metadata.dimensions.list", "path": "metadata/dimensions", "httpMethod": "GET", "response": {"$ref": "Metadata"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->metadata_metrics = new BackupGuardGoogle_MetadataMetricsServiceResource($this, $this->serviceName, 'metrics', json_decode('{"methods": {"list": {"id": "adexchangeseller.metadata.metrics.list", "path": "metadata/metrics", "httpMethod": "GET", "response": {"$ref": "Metadata"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->preferreddeals = new BackupGuardGoogle_PreferreddealsServiceResource($this, $this->serviceName, 'preferreddeals', json_decode('{"methods": {"get": {"id": "adexchangeseller.preferreddeals.get", "path": "preferreddeals/{dealId}", "httpMethod": "GET", "parameters": {"dealId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "PreferredDeal"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.preferreddeals.list", "path": "preferreddeals", "httpMethod": "GET", "response": {"$ref": "PreferredDeals"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->reports = new BackupGuardGoogle_ReportsServiceResource($this, $this->serviceName, 'reports', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.generate", "path": "reports", "httpMethod": "GET", "parameters": {"dimension": {"type": "string", "repeated": true, "location": "query"}, "endDate": {"type": "string", "required": true, "location": "query"}, "filter": {"type": "string", "repeated": true, "location": "query"}, "locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "50000", "location": "query"}, "metric": {"type": "string", "repeated": true, "location": "query"}, "sort": {"type": "string", "repeated": true, "location": "query"}, "startDate": {"type": "string", "required": true, "location": "query"}, "startIndex": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"], "supportsMediaDownload": true}}}', true));
    $this->reports_saved = new BackupGuardGoogle_ReportsSavedServiceResource($this, $this->serviceName, 'saved', json_decode('{"methods": {"generate": {"id": "adexchangeseller.reports.saved.generate", "path": "reports/{savedReportId}", "httpMethod": "GET", "parameters": {"locale": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "50000", "location": "query"}, "savedReportId": {"type": "string", "required": true, "location": "path"}, "startIndex": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "5000", "location": "query"}}, "response": {"$ref": "Report"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}, "list": {"id": "adexchangeseller.reports.saved.list", "path": "reports/saved", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "int32", "minimum": "0", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "SavedReports"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));
    $this->urlchannels = new BackupGuardGoogle_UrlchannelsServiceResource($this, $this->serviceName, 'urlchannels', json_decode('{"methods": {"list": {"id": "adexchangeseller.urlchannels.list", "path": "adclients/{adClientId}/urlchannels", "httpMethod": "GET", "parameters": {"adClientId": {"type": "string", "required": true, "location": "path"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "maximum": "10000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlChannels"}, "scopes": ["https://www.googleapis.com/auth/adexchange.seller", "https://www.googleapis.com/auth/adexchange.seller.readonly"]}}}', true));

  }
}



class BackupGuardGoogle_Account extends BackupGuardGoogle_Model {
  public $id;
  public $kind;
  public $name;
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

class BackupGuardGoogle_AdClient extends BackupGuardGoogle_Model {
  public $arcOptIn;
  public $id;
  public $kind;
  public $productCode;
  public $supportsReporting;
  public function setArcOptIn( $arcOptIn) {
    $this->arcOptIn = $arcOptIn;
  }
  public function getArcOptIn() {
    return $this->arcOptIn;
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
  public function setProductCode( $productCode) {
    $this->productCode = $productCode;
  }
  public function getProductCode() {
    return $this->productCode;
  }
  public function setSupportsReporting( $supportsReporting) {
    $this->supportsReporting = $supportsReporting;
  }
  public function getSupportsReporting() {
    return $this->supportsReporting;
  }
}

class BackupGuardGoogle_AdClients extends BackupGuardGoogle_Model {
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_AdClient';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(BackupGuardGoogle_AdClient) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_AdClient', __METHOD__);
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

class BackupGuardGoogle_AdUnit extends BackupGuardGoogle_Model {
  public $code;
  public $id;
  public $kind;
  public $name;
  public $status;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
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
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_AdUnits extends BackupGuardGoogle_Model {
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_AdUnit';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(BackupGuardGoogle_AdUnit) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_AdUnit', __METHOD__);
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

class BackupGuardGoogle_Alert extends BackupGuardGoogle_Model {
  public $id;
  public $kind;
  public $message;
  public $severity;
  public $type;
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
  public function setMessage( $message) {
    $this->message = $message;
  }
  public function getMessage() {
    return $this->message;
  }
  public function setSeverity( $severity) {
    $this->severity = $severity;
  }
  public function getSeverity() {
    return $this->severity;
  }
  public function setType( $type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class BackupGuardGoogle_Alerts extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Alert';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Alert) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Alert', __METHOD__);
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

class BackupGuardGoogle_CustomChannel extends BackupGuardGoogle_Model {
  public $code;
  public $id;
  public $kind;
  public $name;
  protected $__targetingInfoType = 'BackupGuardGoogle_CustomChannelTargetingInfo';
  protected $__targetingInfoDataType = '';
  public $targetingInfo;
  public function setCode( $code) {
    $this->code = $code;
  }
  public function getCode() {
    return $this->code;
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
  public function setTargetingInfo(BackupGuardGoogle_CustomChannelTargetingInfo $targetingInfo) {
    $this->targetingInfo = $targetingInfo;
  }
  public function getTargetingInfo() {
    return $this->targetingInfo;
  }
}

class BackupGuardGoogle_CustomChannelTargetingInfo extends BackupGuardGoogle_Model {
  public $adsAppearOn;
  public $description;
  public $location;
  public $siteLanguage;
  public function setAdsAppearOn( $adsAppearOn) {
    $this->adsAppearOn = $adsAppearOn;
  }
  public function getAdsAppearOn() {
    return $this->adsAppearOn;
  }
  public function setDescription( $description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setLocation( $location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setSiteLanguage( $siteLanguage) {
    $this->siteLanguage = $siteLanguage;
  }
  public function getSiteLanguage() {
    return $this->siteLanguage;
  }
}

class BackupGuardGoogle_CustomChannels extends BackupGuardGoogle_Model {
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_CustomChannel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(BackupGuardGoogle_CustomChannel) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_CustomChannel', __METHOD__);
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

class BackupGuardGoogle_Metadata extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_ReportingMetadataEntry';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_ReportingMetadataEntry) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_ReportingMetadataEntry', __METHOD__);
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

class BackupGuardGoogle_PreferredDeal extends BackupGuardGoogle_Model {
  public $advertiserName;
  public $buyerNetworkName;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $startTime;
  public function setAdvertiserName( $advertiserName) {
    $this->advertiserName = $advertiserName;
  }
  public function getAdvertiserName() {
    return $this->advertiserName;
  }
  public function setBuyerNetworkName( $buyerNetworkName) {
    $this->buyerNetworkName = $buyerNetworkName;
  }
  public function getBuyerNetworkName() {
    return $this->buyerNetworkName;
  }
  public function setCurrencyCode( $currencyCode) {
    $this->currencyCode = $currencyCode;
  }
  public function getCurrencyCode() {
    return $this->currencyCode;
  }
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setFixedCpm( $fixedCpm) {
    $this->fixedCpm = $fixedCpm;
  }
  public function getFixedCpm() {
    return $this->fixedCpm;
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

class BackupGuardGoogle_PreferredDeals extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_PreferredDeal';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_PreferredDeal) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_PreferredDeal', __METHOD__);
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

class BackupGuardGoogle_Report extends BackupGuardGoogle_Model {
  public $averages;
  protected $__headersType = 'BackupGuardGoogle_ReportHeaders';
  protected $__headersDataType = 'array';
  public $headers;
  public $kind;
  public $rows;
  public $totalMatchedRows;
  public $totals;
  public $warnings;
  public function setAverages(/* array(BackupGuardGoogle_string) */ $averages) {
    $this->assertIsArray($averages, 'BackupGuardGoogle_string', __METHOD__);
    $this->averages = $averages;
  }
  public function getAverages() {
    return $this->averages;
  }
  public function setHeaders(/* array(BackupGuardGoogle_ReportHeaders) */ $headers) {
    $this->assertIsArray($headers, 'BackupGuardGoogle_ReportHeaders', __METHOD__);
    $this->headers = $headers;
  }
  public function getHeaders() {
    return $this->headers;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRows(/* array(BackupGuardGoogle_string) */ $rows) {
    $this->assertIsArray($rows, 'BackupGuardGoogle_string', __METHOD__);
    $this->rows = $rows;
  }
  public function getRows() {
    return $this->rows;
  }
  public function setTotalMatchedRows( $totalMatchedRows) {
    $this->totalMatchedRows = $totalMatchedRows;
  }
  public function getTotalMatchedRows() {
    return $this->totalMatchedRows;
  }
  public function setTotals(/* array(BackupGuardGoogle_string) */ $totals) {
    $this->assertIsArray($totals, 'BackupGuardGoogle_string', __METHOD__);
    $this->totals = $totals;
  }
  public function getTotals() {
    return $this->totals;
  }
  public function setWarnings(/* array(BackupGuardGoogle_string) */ $warnings) {
    $this->assertIsArray($warnings, 'BackupGuardGoogle_string', __METHOD__);
    $this->warnings = $warnings;
  }
  public function getWarnings() {
    return $this->warnings;
  }
}

class BackupGuardGoogle_ReportHeaders extends BackupGuardGoogle_Model {
  public $currency;
  public $name;
  public $type;
  public function setCurrency( $currency) {
    $this->currency = $currency;
  }
  public function getCurrency() {
    return $this->currency;
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

class BackupGuardGoogle_ReportingMetadataEntry extends BackupGuardGoogle_Model {
  public $compatibleDimensions;
  public $compatibleMetrics;
  public $id;
  public $kind;
  public $requiredDimensions;
  public $requiredMetrics;
  public $supportedProducts;
  public function setCompatibleDimensions(/* array(BackupGuardGoogle_string) */ $compatibleDimensions) {
    $this->assertIsArray($compatibleDimensions, 'BackupGuardGoogle_string', __METHOD__);
    $this->compatibleDimensions = $compatibleDimensions;
  }
  public function getCompatibleDimensions() {
    return $this->compatibleDimensions;
  }
  public function setCompatibleMetrics(/* array(BackupGuardGoogle_string) */ $compatibleMetrics) {
    $this->assertIsArray($compatibleMetrics, 'BackupGuardGoogle_string', __METHOD__);
    $this->compatibleMetrics = $compatibleMetrics;
  }
  public function getCompatibleMetrics() {
    return $this->compatibleMetrics;
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
  public function setRequiredDimensions(/* array(BackupGuardGoogle_string) */ $requiredDimensions) {
    $this->assertIsArray($requiredDimensions, 'BackupGuardGoogle_string', __METHOD__);
    $this->requiredDimensions = $requiredDimensions;
  }
  public function getRequiredDimensions() {
    return $this->requiredDimensions;
  }
  public function setRequiredMetrics(/* array(BackupGuardGoogle_string) */ $requiredMetrics) {
    $this->assertIsArray($requiredMetrics, 'BackupGuardGoogle_string', __METHOD__);
    $this->requiredMetrics = $requiredMetrics;
  }
  public function getRequiredMetrics() {
    return $this->requiredMetrics;
  }
  public function setSupportedProducts(/* array(BackupGuardGoogle_string) */ $supportedProducts) {
    $this->assertIsArray($supportedProducts, 'BackupGuardGoogle_string', __METHOD__);
    $this->supportedProducts = $supportedProducts;
  }
  public function getSupportedProducts() {
    return $this->supportedProducts;
  }
}

class BackupGuardGoogle_SavedReport extends BackupGuardGoogle_Model {
  public $id;
  public $kind;
  public $name;
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

class BackupGuardGoogle_SavedReports extends BackupGuardGoogle_Model {
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_SavedReport';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(BackupGuardGoogle_SavedReport) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_SavedReport', __METHOD__);
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

class BackupGuardGoogle_UrlChannel extends BackupGuardGoogle_Model {
  public $id;
  public $kind;
  public $urlPattern;
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
  public function setUrlPattern( $urlPattern) {
    $this->urlPattern = $urlPattern;
  }
  public function getUrlPattern() {
    return $this->urlPattern;
  }
}

class BackupGuardGoogle_UrlChannels extends BackupGuardGoogle_Model {
  public $etag;
  protected $__itemsType = 'BackupGuardGoogle_UrlChannel';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setEtag( $etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setItems(/* array(BackupGuardGoogle_UrlChannel) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_UrlChannel', __METHOD__);
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
