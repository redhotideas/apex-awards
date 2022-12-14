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
   *   $adexchangebuyerService = new BackupGuardGoogle_AdexchangebuyerService(...);
   *   $accounts = $adexchangebuyerService->accounts;
   *  </code>
   */
  class BackupGuardGoogle_AccountsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets one account by ID. (accounts.get)
     *
     * @param int $id The account id
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Account
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Account($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the authenticated user's list of accounts. (accounts.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_AccountsList
     */
    public function listAccounts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_AccountsList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing account. This method supports patch semantics.
     * (accounts.patch)
     *
     * @param int $id The account id
     * @param BackupGuardGoogle_Account $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Account
     */
    public function patch($id, BackupGuardGoogle_Account $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Account($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing account. (accounts.update)
     *
     * @param int $id The account id
     * @param BackupGuardGoogle_Account $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Account
     */
    public function update($id, BackupGuardGoogle_Account $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Account($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "creatives" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new BackupGuardGoogle_AdexchangebuyerService(...);
   *   $creatives = $adexchangebuyerService->creatives;
   *  </code>
   */
  class BackupGuardGoogle_CreativesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets the status for a single creative. (creatives.get)
     *
     * @param int $accountId The id for the account that will serve this creative.
     * @param string $buyerCreativeId The buyer-specific id for this creative.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Creative
     */
    public function get($accountId, $buyerCreativeId, $optParams = array()) {
      $params = array('accountId' => $accountId, 'buyerCreativeId' => $buyerCreativeId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Creative($data);
      } else {
        return $data;
      }
    }
    /**
     * Submit a new creative. (creatives.insert)
     *
     * @param BackupGuardGoogle_Creative $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Creative
     */
    public function insert(BackupGuardGoogle_Creative $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Creative($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of the authenticated user's active creatives.
     * (creatives.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
     * @opt_param string pageToken A continuation token, used to page through ad clients. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional.
     * @opt_param string statusFilter When specified, only creatives having the given status are returned.
     * @return BackupGuardGoogle_CreativesList
     */
    public function listCreatives($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_CreativesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "directDeals" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new BackupGuardGoogle_AdexchangebuyerService(...);
   *   $directDeals = $adexchangebuyerService->directDeals;
   *  </code>
   */
  class BackupGuardGoogle_DirectDealsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets one direct deal by ID. (directDeals.get)
     *
     * @param string $id The direct deal id
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_DirectDeal
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DirectDeal($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves the authenticated user's list of direct deals. (directDeals.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_DirectDealsList
     */
    public function listDirectDeals($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DirectDealsList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "performanceReport" collection of methods.
   * Typical usage is:
   *  <code>
   *   $adexchangebuyerService = new BackupGuardGoogle_AdexchangebuyerService(...);
   *   $performanceReport = $adexchangebuyerService->performanceReport;
   *  </code>
   */
  class BackupGuardGoogle_PerformanceReportServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Retrieves the authenticated user's list of performance metrics.
     * (performanceReport.list)
     *
     * @param string $accountId The account id to get the reports.
     * @param string $endDateTime The end time of the report in ISO 8601 timestamp format using UTC.
     * @param string $startDateTime The start time of the report in ISO 8601 timestamp format using UTC.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of entries returned on one result page. If not set, the default is 100. Optional.
     * @opt_param string pageToken A continuation token, used to page through performance reports. To retrieve the next page, set this parameter to the value of "nextPageToken" from the previous response. Optional.
     * @return BackupGuardGoogle_PerformanceReportList
     */
    public function listPerformanceReport($accountId, $endDateTime, $startDateTime, $optParams = array()) {
      $params = array('accountId' => $accountId, 'endDateTime' => $endDateTime, 'startDateTime' => $startDateTime);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_PerformanceReportList($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Adexchangebuyer (v1.3).
 *
 * <p>
 * Lets you manage your Ad Exchange Buyer account.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/ad-exchange/buyer-rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_AdexchangebuyerService extends BackupGuardGoogle_Service {
  public $accounts;
  public $creatives;
  public $directDeals;
  public $performanceReport;
  /**
   * Constructs the internal representation of the Adexchangebuyer service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'adexchangebuyer/v1.3/';
    $this->version = 'v1.3';
    $this->serviceName = 'adexchangebuyer';

    $client->addService($this->serviceName, $this->version);
    $this->accounts = new BackupGuardGoogle_AccountsServiceResource($this, $this->serviceName, 'accounts', json_decode('{"methods": {"get": {"id": "adexchangebuyer.accounts.get", "path": "accounts/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.accounts.list", "path": "accounts", "httpMethod": "GET", "response": {"$ref": "AccountsList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "patch": {"id": "adexchangebuyer.accounts.patch", "path": "accounts/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "update": {"id": "adexchangebuyer.accounts.update", "path": "accounts/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "integer", "required": true, "format": "int32", "location": "path"}}, "request": {"$ref": "Account"}, "response": {"$ref": "Account"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
    $this->creatives = new BackupGuardGoogle_CreativesServiceResource($this, $this->serviceName, 'creatives', json_decode('{"methods": {"get": {"id": "adexchangebuyer.creatives.get", "path": "creatives/{accountId}/{buyerCreativeId}", "httpMethod": "GET", "parameters": {"accountId": {"type": "integer", "required": true, "format": "int32", "location": "path"}, "buyerCreativeId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Creative"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "insert": {"id": "adexchangebuyer.creatives.insert", "path": "creatives", "httpMethod": "POST", "request": {"$ref": "Creative"}, "response": {"$ref": "Creative"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.creatives.list", "path": "creatives", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "statusFilter": {"type": "string", "enum": ["approved", "disapproved", "not_checked"], "location": "query"}}, "response": {"$ref": "CreativesList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
    $this->directDeals = new BackupGuardGoogle_DirectDealsServiceResource($this, $this->serviceName, 'directDeals', json_decode('{"methods": {"get": {"id": "adexchangebuyer.directDeals.get", "path": "directdeals/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "format": "int64", "location": "path"}}, "response": {"$ref": "DirectDeal"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}, "list": {"id": "adexchangebuyer.directDeals.list", "path": "directdeals", "httpMethod": "GET", "response": {"$ref": "DirectDealsList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));
    $this->performanceReport = new BackupGuardGoogle_PerformanceReportServiceResource($this, $this->serviceName, 'performanceReport', json_decode('{"methods": {"list": {"id": "adexchangebuyer.performanceReport.list", "path": "performancereport", "httpMethod": "GET", "parameters": {"accountId": {"type": "string", "required": true, "format": "int64", "location": "query"}, "endDateTime": {"type": "string", "required": true, "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "1000", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "startDateTime": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "PerformanceReportList"}, "scopes": ["https://www.googleapis.com/auth/adexchange.buyer"]}}}', true));

  }
}



class BackupGuardGoogle_Account extends BackupGuardGoogle_Model {
  protected $__bidderLocationType = 'BackupGuardGoogle_AccountBidderLocation';
  protected $__bidderLocationDataType = 'array';
  public $bidderLocation;
  public $cookieMatchingNid;
  public $cookieMatchingUrl;
  public $id;
  public $kind;
  public $maximumTotalQps;
  public function setBidderLocation(/* array(BackupGuardGoogle_AccountBidderLocation) */ $bidderLocation) {
    $this->assertIsArray($bidderLocation, 'BackupGuardGoogle_AccountBidderLocation', __METHOD__);
    $this->bidderLocation = $bidderLocation;
  }
  public function getBidderLocation() {
    return $this->bidderLocation;
  }
  public function setCookieMatchingNid( $cookieMatchingNid) {
    $this->cookieMatchingNid = $cookieMatchingNid;
  }
  public function getCookieMatchingNid() {
    return $this->cookieMatchingNid;
  }
  public function setCookieMatchingUrl( $cookieMatchingUrl) {
    $this->cookieMatchingUrl = $cookieMatchingUrl;
  }
  public function getCookieMatchingUrl() {
    return $this->cookieMatchingUrl;
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
  public function setMaximumTotalQps( $maximumTotalQps) {
    $this->maximumTotalQps = $maximumTotalQps;
  }
  public function getMaximumTotalQps() {
    return $this->maximumTotalQps;
  }
}

class BackupGuardGoogle_AccountBidderLocation extends BackupGuardGoogle_Model {
  public $maximumQps;
  public $region;
  public $url;
  public function setMaximumQps( $maximumQps) {
    $this->maximumQps = $maximumQps;
  }
  public function getMaximumQps() {
    return $this->maximumQps;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setUrl( $url) {
    $this->url = $url;
  }
  public function getUrl() {
    return $this->url;
  }
}

class BackupGuardGoogle_AccountsList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Account';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Account) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Account', __METHOD__);
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

class BackupGuardGoogle_Creative extends BackupGuardGoogle_Model {
  public $HTMLSnippet;
  public $accountId;
  public $advertiserId;
  public $advertiserName;
  public $agencyId;
  public $attribute;
  public $buyerCreativeId;
  public $clickThroughUrl;
  protected $__correctionsType = 'BackupGuardGoogle_CreativeCorrections';
  protected $__correctionsDataType = 'array';
  public $corrections;
  protected $__disapprovalReasonsType = 'BackupGuardGoogle_CreativeDisapprovalReasons';
  protected $__disapprovalReasonsDataType = 'array';
  public $disapprovalReasons;
  protected $__filteringReasonsType = 'BackupGuardGoogle_CreativeFilteringReasons';
  protected $__filteringReasonsDataType = '';
  public $filteringReasons;
  public $height;
  public $kind;
  public $productCategories;
  public $restrictedCategories;
  public $sensitiveCategories;
  public $status;
  public $vendorType;
  public $videoURL;
  public $width;
  public function setHTMLSnippet( $HTMLSnippet) {
    $this->HTMLSnippet = $HTMLSnippet;
  }
  public function getHTMLSnippet() {
    return $this->HTMLSnippet;
  }
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAdvertiserId(/* array(BackupGuardGoogle_string) */ $advertiserId) {
    $this->assertIsArray($advertiserId, 'BackupGuardGoogle_string', __METHOD__);
    $this->advertiserId = $advertiserId;
  }
  public function getAdvertiserId() {
    return $this->advertiserId;
  }
  public function setAdvertiserName( $advertiserName) {
    $this->advertiserName = $advertiserName;
  }
  public function getAdvertiserName() {
    return $this->advertiserName;
  }
  public function setAgencyId( $agencyId) {
    $this->agencyId = $agencyId;
  }
  public function getAgencyId() {
    return $this->agencyId;
  }
  public function setAttribute(/* array(BackupGuardGoogle_int) */ $attribute) {
    $this->assertIsArray($attribute, 'BackupGuardGoogle_int', __METHOD__);
    $this->attribute = $attribute;
  }
  public function getAttribute() {
    return $this->attribute;
  }
  public function setBuyerCreativeId( $buyerCreativeId) {
    $this->buyerCreativeId = $buyerCreativeId;
  }
  public function getBuyerCreativeId() {
    return $this->buyerCreativeId;
  }
  public function setClickThroughUrl(/* array(BackupGuardGoogle_string) */ $clickThroughUrl) {
    $this->assertIsArray($clickThroughUrl, 'BackupGuardGoogle_string', __METHOD__);
    $this->clickThroughUrl = $clickThroughUrl;
  }
  public function getClickThroughUrl() {
    return $this->clickThroughUrl;
  }
  public function setCorrections(/* array(BackupGuardGoogle_CreativeCorrections) */ $corrections) {
    $this->assertIsArray($corrections, 'BackupGuardGoogle_CreativeCorrections', __METHOD__);
    $this->corrections = $corrections;
  }
  public function getCorrections() {
    return $this->corrections;
  }
  public function setDisapprovalReasons(/* array(BackupGuardGoogle_CreativeDisapprovalReasons) */ $disapprovalReasons) {
    $this->assertIsArray($disapprovalReasons, 'BackupGuardGoogle_CreativeDisapprovalReasons', __METHOD__);
    $this->disapprovalReasons = $disapprovalReasons;
  }
  public function getDisapprovalReasons() {
    return $this->disapprovalReasons;
  }
  public function setFilteringReasons(BackupGuardGoogle_CreativeFilteringReasons $filteringReasons) {
    $this->filteringReasons = $filteringReasons;
  }
  public function getFilteringReasons() {
    return $this->filteringReasons;
  }
  public function setHeight( $height) {
    $this->height = $height;
  }
  public function getHeight() {
    return $this->height;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setProductCategories(/* array(BackupGuardGoogle_int) */ $productCategories) {
    $this->assertIsArray($productCategories, 'BackupGuardGoogle_int', __METHOD__);
    $this->productCategories = $productCategories;
  }
  public function getProductCategories() {
    return $this->productCategories;
  }
  public function setRestrictedCategories(/* array(BackupGuardGoogle_int) */ $restrictedCategories) {
    $this->assertIsArray($restrictedCategories, 'BackupGuardGoogle_int', __METHOD__);
    $this->restrictedCategories = $restrictedCategories;
  }
  public function getRestrictedCategories() {
    return $this->restrictedCategories;
  }
  public function setSensitiveCategories(/* array(BackupGuardGoogle_int) */ $sensitiveCategories) {
    $this->assertIsArray($sensitiveCategories, 'BackupGuardGoogle_int', __METHOD__);
    $this->sensitiveCategories = $sensitiveCategories;
  }
  public function getSensitiveCategories() {
    return $this->sensitiveCategories;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setVendorType(/* array(BackupGuardGoogle_int) */ $vendorType) {
    $this->assertIsArray($vendorType, 'BackupGuardGoogle_int', __METHOD__);
    $this->vendorType = $vendorType;
  }
  public function getVendorType() {
    return $this->vendorType;
  }
  public function setVideoURL( $videoURL) {
    $this->videoURL = $videoURL;
  }
  public function getVideoURL() {
    return $this->videoURL;
  }
  public function setWidth( $width) {
    $this->width = $width;
  }
  public function getWidth() {
    return $this->width;
  }
}

class BackupGuardGoogle_CreativeCorrections extends BackupGuardGoogle_Model {
  public $details;
  public $reason;
  public function setDetails(/* array(BackupGuardGoogle_string) */ $details) {
    $this->assertIsArray($details, 'BackupGuardGoogle_string', __METHOD__);
    $this->details = $details;
  }
  public function getDetails() {
    return $this->details;
  }
  public function setReason( $reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
}

class BackupGuardGoogle_CreativeDisapprovalReasons extends BackupGuardGoogle_Model {
  public $details;
  public $reason;
  public function setDetails(/* array(BackupGuardGoogle_string) */ $details) {
    $this->assertIsArray($details, 'BackupGuardGoogle_string', __METHOD__);
    $this->details = $details;
  }
  public function getDetails() {
    return $this->details;
  }
  public function setReason( $reason) {
    $this->reason = $reason;
  }
  public function getReason() {
    return $this->reason;
  }
}

class BackupGuardGoogle_CreativeFilteringReasons extends BackupGuardGoogle_Model {
  public $date;
  protected $__reasonsType = 'BackupGuardGoogle_CreativeFilteringReasonsReasons';
  protected $__reasonsDataType = 'array';
  public $reasons;
  public function setDate( $date) {
    $this->date = $date;
  }
  public function getDate() {
    return $this->date;
  }
  public function setReasons(/* array(BackupGuardGoogle_CreativeFilteringReasonsReasons) */ $reasons) {
    $this->assertIsArray($reasons, 'BackupGuardGoogle_CreativeFilteringReasonsReasons', __METHOD__);
    $this->reasons = $reasons;
  }
  public function getReasons() {
    return $this->reasons;
  }
}

class BackupGuardGoogle_CreativeFilteringReasonsReasons extends BackupGuardGoogle_Model {
  public $filteringCount;
  public $filteringStatus;
  public function setFilteringCount( $filteringCount) {
    $this->filteringCount = $filteringCount;
  }
  public function getFilteringCount() {
    return $this->filteringCount;
  }
  public function setFilteringStatus( $filteringStatus) {
    $this->filteringStatus = $filteringStatus;
  }
  public function getFilteringStatus() {
    return $this->filteringStatus;
  }
}

class BackupGuardGoogle_CreativesList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Creative';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems(/* array(BackupGuardGoogle_Creative) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Creative', __METHOD__);
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

class BackupGuardGoogle_DirectDeal extends BackupGuardGoogle_Model {
  public $accountId;
  public $advertiser;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $privateExchangeMinCpm;
  public $sellerNetwork;
  public $startTime;
  public function setAccountId( $accountId) {
    $this->accountId = $accountId;
  }
  public function getAccountId() {
    return $this->accountId;
  }
  public function setAdvertiser( $advertiser) {
    $this->advertiser = $advertiser;
  }
  public function getAdvertiser() {
    return $this->advertiser;
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
  public function setPrivateExchangeMinCpm( $privateExchangeMinCpm) {
    $this->privateExchangeMinCpm = $privateExchangeMinCpm;
  }
  public function getPrivateExchangeMinCpm() {
    return $this->privateExchangeMinCpm;
  }
  public function setSellerNetwork( $sellerNetwork) {
    $this->sellerNetwork = $sellerNetwork;
  }
  public function getSellerNetwork() {
    return $this->sellerNetwork;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
}

class BackupGuardGoogle_DirectDealsList extends BackupGuardGoogle_Model {
  protected $__directDealsType = 'BackupGuardGoogle_DirectDeal';
  protected $__directDealsDataType = 'array';
  public $directDeals;
  public $kind;
  public function setDirectDeals(/* array(BackupGuardGoogle_DirectDeal) */ $directDeals) {
    $this->assertIsArray($directDeals, 'BackupGuardGoogle_DirectDeal', __METHOD__);
    $this->directDeals = $directDeals;
  }
  public function getDirectDeals() {
    return $this->directDeals;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_PerformanceReport extends BackupGuardGoogle_Model {
  public $calloutStatusRate;
  public $cookieMatcherStatusRate;
  public $creativeStatusRate;
  public $hostedMatchStatusRate;
  public $kind;
  public $latency50thPercentile;
  public $latency85thPercentile;
  public $latency95thPercentile;
  public $noQuotaInRegion;
  public $outOfQuota;
  public $pixelMatchRequests;
  public $pixelMatchResponses;
  public $quotaConfiguredLimit;
  public $quotaThrottledLimit;
  public $region;
  public $timestamp;
  public function setCalloutStatusRate(/* array(BackupGuardGoogle_object) */ $calloutStatusRate) {
    $this->assertIsArray($calloutStatusRate, 'BackupGuardGoogle_object', __METHOD__);
    $this->calloutStatusRate = $calloutStatusRate;
  }
  public function getCalloutStatusRate() {
    return $this->calloutStatusRate;
  }
  public function setCookieMatcherStatusRate(/* array(BackupGuardGoogle_object) */ $cookieMatcherStatusRate) {
    $this->assertIsArray($cookieMatcherStatusRate, 'BackupGuardGoogle_object', __METHOD__);
    $this->cookieMatcherStatusRate = $cookieMatcherStatusRate;
  }
  public function getCookieMatcherStatusRate() {
    return $this->cookieMatcherStatusRate;
  }
  public function setCreativeStatusRate(/* array(BackupGuardGoogle_object) */ $creativeStatusRate) {
    $this->assertIsArray($creativeStatusRate, 'BackupGuardGoogle_object', __METHOD__);
    $this->creativeStatusRate = $creativeStatusRate;
  }
  public function getCreativeStatusRate() {
    return $this->creativeStatusRate;
  }
  public function setHostedMatchStatusRate(/* array(BackupGuardGoogle_object) */ $hostedMatchStatusRate) {
    $this->assertIsArray($hostedMatchStatusRate, 'BackupGuardGoogle_object', __METHOD__);
    $this->hostedMatchStatusRate = $hostedMatchStatusRate;
  }
  public function getHostedMatchStatusRate() {
    return $this->hostedMatchStatusRate;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLatency50thPercentile( $latency50thPercentile) {
    $this->latency50thPercentile = $latency50thPercentile;
  }
  public function getLatency50thPercentile() {
    return $this->latency50thPercentile;
  }
  public function setLatency85thPercentile( $latency85thPercentile) {
    $this->latency85thPercentile = $latency85thPercentile;
  }
  public function getLatency85thPercentile() {
    return $this->latency85thPercentile;
  }
  public function setLatency95thPercentile( $latency95thPercentile) {
    $this->latency95thPercentile = $latency95thPercentile;
  }
  public function getLatency95thPercentile() {
    return $this->latency95thPercentile;
  }
  public function setNoQuotaInRegion( $noQuotaInRegion) {
    $this->noQuotaInRegion = $noQuotaInRegion;
  }
  public function getNoQuotaInRegion() {
    return $this->noQuotaInRegion;
  }
  public function setOutOfQuota( $outOfQuota) {
    $this->outOfQuota = $outOfQuota;
  }
  public function getOutOfQuota() {
    return $this->outOfQuota;
  }
  public function setPixelMatchRequests( $pixelMatchRequests) {
    $this->pixelMatchRequests = $pixelMatchRequests;
  }
  public function getPixelMatchRequests() {
    return $this->pixelMatchRequests;
  }
  public function setPixelMatchResponses( $pixelMatchResponses) {
    $this->pixelMatchResponses = $pixelMatchResponses;
  }
  public function getPixelMatchResponses() {
    return $this->pixelMatchResponses;
  }
  public function setQuotaConfiguredLimit( $quotaConfiguredLimit) {
    $this->quotaConfiguredLimit = $quotaConfiguredLimit;
  }
  public function getQuotaConfiguredLimit() {
    return $this->quotaConfiguredLimit;
  }
  public function setQuotaThrottledLimit( $quotaThrottledLimit) {
    $this->quotaThrottledLimit = $quotaThrottledLimit;
  }
  public function getQuotaThrottledLimit() {
    return $this->quotaThrottledLimit;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
  public function setTimestamp( $timestamp) {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp() {
    return $this->timestamp;
  }
}

class BackupGuardGoogle_PerformanceReportList extends BackupGuardGoogle_Model {
  public $kind;
  protected $__performanceReportType = 'BackupGuardGoogle_PerformanceReport';
  protected $__performanceReportDataType = 'array';
  public $performanceReport;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPerformanceReport(/* array(BackupGuardGoogle_PerformanceReport) */ $performanceReport) {
    $this->assertIsArray($performanceReport, 'BackupGuardGoogle_PerformanceReport', __METHOD__);
    $this->performanceReport = $performanceReport;
  }
  public function getPerformanceReport() {
    return $this->performanceReport;
  }
}
