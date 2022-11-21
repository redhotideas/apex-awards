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
   * The "url" collection of methods.
   * Typical usage is:
   *  <code>
   *   $urlshortenerService = new BackupGuardGoogle_UrlshortenerService(...);
   *   $url = $urlshortenerService->url;
   *  </code>
   */
  class BackupGuardGoogle_UrlServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Expands a short URL or gets creation time and analytics. (url.get)
     *
     * @param string $shortUrl The short URL, including the protocol.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @return BackupGuardGoogle_Url
     */
    public function get($shortUrl, $optParams = array()) {
      $params = array('shortUrl' => $shortUrl);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Url($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a new short URL. (url.insert)
     *
     * @param BackupGuardGoogle_Url $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Url
     */
    public function insert(BackupGuardGoogle_Url $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Url($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of URLs shortened by a user. (url.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string projection Additional information to return.
     * @opt_param string start-token Token for requesting successive pages of results.
     * @return BackupGuardGoogle_UrlHistory
     */
    public function listUrl($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_UrlHistory($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Urlshortener (v1).
 *
 * <p>
 * Lets you create, inspect, and manage goo.gl short URLs
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/urlshortener/v1/getting_started.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_UrlshortenerService extends BackupGuardGoogle_Service {
  public $url;
  /**
   * Constructs the internal representation of the Urlshortener service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'urlshortener/v1/';
    $this->version = 'v1';
    $this->serviceName = 'urlshortener';

    $client->addService($this->serviceName, $this->version);
    $this->url = new BackupGuardGoogle_UrlServiceResource($this, $this->serviceName, 'url', json_decode('{"methods": {"get": {"id": "urlshortener.url.get", "path": "url", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "ANALYTICS_TOP_STRINGS", "FULL"], "location": "query"}, "shortUrl": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "Url"}}, "insert": {"id": "urlshortener.url.insert", "path": "url", "httpMethod": "POST", "request": {"$ref": "Url"}, "response": {"$ref": "Url"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}, "list": {"id": "urlshortener.url.list", "path": "url/history", "httpMethod": "GET", "parameters": {"projection": {"type": "string", "enum": ["ANALYTICS_CLICKS", "FULL"], "location": "query"}, "start-token": {"type": "string", "location": "query"}}, "response": {"$ref": "UrlHistory"}, "scopes": ["https://www.googleapis.com/auth/urlshortener"]}}}', true));

  }
}



class BackupGuardGoogle_AnalyticsSnapshot extends BackupGuardGoogle_Model {
  protected $__browsersType = 'BackupGuardGoogle_StringCount';
  protected $__browsersDataType = 'array';
  public $browsers;
  protected $__countriesType = 'BackupGuardGoogle_StringCount';
  protected $__countriesDataType = 'array';
  public $countries;
  public $longUrlClicks;
  protected $__platformsType = 'BackupGuardGoogle_StringCount';
  protected $__platformsDataType = 'array';
  public $platforms;
  protected $__referrersType = 'BackupGuardGoogle_StringCount';
  protected $__referrersDataType = 'array';
  public $referrers;
  public $shortUrlClicks;
  public function setBrowsers(/* array(BackupGuardGoogle_StringCount) */ $browsers) {
    $this->assertIsArray($browsers, 'BackupGuardGoogle_StringCount', __METHOD__);
    $this->browsers = $browsers;
  }
  public function getBrowsers() {
    return $this->browsers;
  }
  public function setCountries(/* array(BackupGuardGoogle_StringCount) */ $countries) {
    $this->assertIsArray($countries, 'BackupGuardGoogle_StringCount', __METHOD__);
    $this->countries = $countries;
  }
  public function getCountries() {
    return $this->countries;
  }
  public function setLongUrlClicks( $longUrlClicks) {
    $this->longUrlClicks = $longUrlClicks;
  }
  public function getLongUrlClicks() {
    return $this->longUrlClicks;
  }
  public function setPlatforms(/* array(BackupGuardGoogle_StringCount) */ $platforms) {
    $this->assertIsArray($platforms, 'BackupGuardGoogle_StringCount', __METHOD__);
    $this->platforms = $platforms;
  }
  public function getPlatforms() {
    return $this->platforms;
  }
  public function setReferrers(/* array(BackupGuardGoogle_StringCount) */ $referrers) {
    $this->assertIsArray($referrers, 'BackupGuardGoogle_StringCount', __METHOD__);
    $this->referrers = $referrers;
  }
  public function getReferrers() {
    return $this->referrers;
  }
  public function setShortUrlClicks( $shortUrlClicks) {
    $this->shortUrlClicks = $shortUrlClicks;
  }
  public function getShortUrlClicks() {
    return $this->shortUrlClicks;
  }
}

class BackupGuardGoogle_AnalyticsSummary extends BackupGuardGoogle_Model {
  protected $__allTimeType = 'BackupGuardGoogle_AnalyticsSnapshot';
  protected $__allTimeDataType = '';
  public $allTime;
  protected $__dayType = 'BackupGuardGoogle_AnalyticsSnapshot';
  protected $__dayDataType = '';
  public $day;
  protected $__monthType = 'BackupGuardGoogle_AnalyticsSnapshot';
  protected $__monthDataType = '';
  public $month;
  protected $__twoHoursType = 'BackupGuardGoogle_AnalyticsSnapshot';
  protected $__twoHoursDataType = '';
  public $twoHours;
  protected $__weekType = 'BackupGuardGoogle_AnalyticsSnapshot';
  protected $__weekDataType = '';
  public $week;
  public function setAllTime(BackupGuardGoogle_AnalyticsSnapshot $allTime) {
    $this->allTime = $allTime;
  }
  public function getAllTime() {
    return $this->allTime;
  }
  public function setDay(BackupGuardGoogle_AnalyticsSnapshot $day) {
    $this->day = $day;
  }
  public function getDay() {
    return $this->day;
  }
  public function setMonth(BackupGuardGoogle_AnalyticsSnapshot $month) {
    $this->month = $month;
  }
  public function getMonth() {
    return $this->month;
  }
  public function setTwoHours(BackupGuardGoogle_AnalyticsSnapshot $twoHours) {
    $this->twoHours = $twoHours;
  }
  public function getTwoHours() {
    return $this->twoHours;
  }
  public function setWeek(BackupGuardGoogle_AnalyticsSnapshot $week) {
    $this->week = $week;
  }
  public function getWeek() {
    return $this->week;
  }
}

class BackupGuardGoogle_StringCount extends BackupGuardGoogle_Model {
  public $count;
  public $id;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class BackupGuardGoogle_Url extends BackupGuardGoogle_Model {
  protected $__analyticsType = 'BackupGuardGoogle_AnalyticsSummary';
  protected $__analyticsDataType = '';
  public $analytics;
  public $created;
  public $id;
  public $kind;
  public $longUrl;
  public $status;
  public function setAnalytics(BackupGuardGoogle_AnalyticsSummary $analytics) {
    $this->analytics = $analytics;
  }
  public function getAnalytics() {
    return $this->analytics;
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
  public function setLongUrl( $longUrl) {
    $this->longUrl = $longUrl;
  }
  public function getLongUrl() {
    return $this->longUrl;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
}

class BackupGuardGoogle_UrlHistory extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Url';
  protected $__itemsDataType = 'array';
  public $items;
  public $itemsPerPage;
  public $kind;
  public $nextPageToken;
  public $totalItems;
  public function setItems(/* array(BackupGuardGoogle_Url) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Url', __METHOD__);
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
