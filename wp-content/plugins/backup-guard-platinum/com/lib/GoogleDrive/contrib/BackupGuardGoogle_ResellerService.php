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
   * The "customers" collection of methods.
   * Typical usage is:
   *  <code>
   *   $resellerService = new BackupGuardGoogle_ResellerService(...);
   *   $customers = $resellerService->customers;
   *  </code>
   */
  class BackupGuardGoogle_CustomersServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Gets a customer resource if one exists and is owned by the reseller. (customers.get)
     *
     * @param string $customerId Id of the Customer
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Customer
     */
    public function get($customerId, $optParams = array()) {
      $params = array('customerId' => $customerId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Customer($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates a customer resource if one does not already exist. (customers.insert)
     *
     * @param BackupGuardGoogle_Customer $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string customerAuthToken An auth token needed for inserting a customer for which domain already exists. Can be generated at https://www.google.com/a/cpanel//TransferToken. Optional.
     * @return BackupGuardGoogle_Customer
     */
    public function insert(BackupGuardGoogle_Customer $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Customer($data);
      } else {
        return $data;
      }
    }
    /**
     * Update a customer resource if one it exists and is owned by the reseller. This method supports
     * patch semantics. (customers.patch)
     *
     * @param string $customerId Id of the Customer
     * @param BackupGuardGoogle_Customer $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Customer
     */
    public function patch($customerId, BackupGuardGoogle_Customer $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Customer($data);
      } else {
        return $data;
      }
    }
    /**
     * Update a customer resource if one it exists and is owned by the reseller. (customers.update)
     *
     * @param string $customerId Id of the Customer
     * @param BackupGuardGoogle_Customer $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Customer
     */
    public function update($customerId, BackupGuardGoogle_Customer $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Customer($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "subscriptions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $resellerService = new BackupGuardGoogle_ResellerService(...);
   *   $subscriptions = $resellerService->subscriptions;
   *  </code>
   */
  class BackupGuardGoogle_SubscriptionsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Changes the plan of a subscription (subscriptions.changePlan)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param BackupGuardGoogle_ChangePlanRequest $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Subscription
     */
    public function changePlan($customerId, $subscriptionId, BackupGuardGoogle_ChangePlanRequest $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('changePlan', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Changes the renewal settings of a subscription (subscriptions.changeRenewalSettings)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param BackupGuardGoogle_RenewalSettings $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Subscription
     */
    public function changeRenewalSettings($customerId, $subscriptionId, BackupGuardGoogle_RenewalSettings $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('changeRenewalSettings', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Changes the seats configuration of a subscription (subscriptions.changeSeats)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param BackupGuardGoogle_Seats $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Subscription
     */
    public function changeSeats($customerId, $subscriptionId, BackupGuardGoogle_Seats $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('changeSeats', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Cancels/Downgrades a subscription. (subscriptions.delete)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param string $deletionType Whether the subscription is to be fully cancelled or downgraded
     * @param array $optParams Optional parameters.
     */
    public function delete($customerId, $subscriptionId, $deletionType, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'deletionType' => $deletionType);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a subscription of the customer. (subscriptions.get)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Subscription
     */
    public function get($customerId, $subscriptionId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Creates/Transfers a subscription for the customer. (subscriptions.insert)
     *
     * @param string $customerId Id of the Customer
     * @param BackupGuardGoogle_Subscription $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string customerAuthToken An auth token needed for transferring a subscription. Can be generated at https://www.google.com/a/cpanel/customer-domain/TransferToken. Optional.
     * @return BackupGuardGoogle_Subscription
     */
    public function insert($customerId, BackupGuardGoogle_Subscription $postBody, $optParams = array()) {
      $params = array('customerId' => $customerId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists subscriptions of a reseller, optionally filtered by a customer name prefix.
     * (subscriptions.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string customerAuthToken An auth token needed if the customer is not a resold customer of this reseller. Can be generated at https://www.google.com/a/cpanel/customer-domain/TransferToken.Optional.
     * @opt_param string customerId Id of the Customer
     * @opt_param string customerNamePrefix Prefix of the customer's domain name by which the subscriptions should be filtered. Optional
     * @opt_param string maxResults Maximum number of results to return
     * @opt_param string pageToken Token to specify next page in the list
     * @return BackupGuardGoogle_Subscriptions
     */
    public function listSubscriptions($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscriptions($data);
      } else {
        return $data;
      }
    }
    /**
     * Starts paid service of a trial subscription (subscriptions.startPaidService)
     *
     * @param string $customerId Id of the Customer
     * @param string $subscriptionId Id of the subscription, which is unique for a customer
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Subscription
     */
    public function startPaidService($customerId, $subscriptionId, $optParams = array()) {
      $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('startPaidService', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Subscription($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Reseller (v1).
 *
 * <p>
 * Lets you create and manage your customers and their subscriptions.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/google-apps/reseller/" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_ResellerService extends BackupGuardGoogle_Service {
  public $customers;
  public $subscriptions;
  /**
   * Constructs the internal representation of the Reseller service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'apps/reseller/v1/';
    $this->version = 'v1';
    $this->serviceName = 'reseller';

    $client->addService($this->serviceName, $this->version);
    $this->customers = new BackupGuardGoogle_CustomersServiceResource($this, $this->serviceName, 'customers', json_decode('{"methods": {"get": {"id": "reseller.customers.get", "path": "customers/{customerId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Customer"}}, "insert": {"id": "reseller.customers.insert", "path": "customers", "httpMethod": "POST", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}, "patch": {"id": "reseller.customers.patch", "path": "customers/{customerId}", "httpMethod": "PATCH", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}, "update": {"id": "reseller.customers.update", "path": "customers/{customerId}", "httpMethod": "PUT", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Customer"}, "response": {"$ref": "Customer"}}}}', true));
    $this->subscriptions = new BackupGuardGoogle_SubscriptionsServiceResource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"changePlan": {"id": "reseller.subscriptions.changePlan", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changePlan", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "ChangePlanRequest"}, "response": {"$ref": "Subscription"}}, "changeRenewalSettings": {"id": "reseller.subscriptions.changeRenewalSettings", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changeRenewalSettings", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "RenewalSettings"}, "response": {"$ref": "Subscription"}}, "changeSeats": {"id": "reseller.subscriptions.changeSeats", "path": "customers/{customerId}/subscriptions/{subscriptionId}/changeSeats", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Seats"}, "response": {"$ref": "Subscription"}}, "delete": {"id": "reseller.subscriptions.delete", "path": "customers/{customerId}/subscriptions/{subscriptionId}", "httpMethod": "DELETE", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "deletionType": {"type": "string", "required": true, "enum": ["cancel", "downgrade", "suspend"], "location": "query"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "reseller.subscriptions.get", "path": "customers/{customerId}/subscriptions/{subscriptionId}", "httpMethod": "GET", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Subscription"}}, "insert": {"id": "reseller.subscriptions.insert", "path": "customers/{customerId}/subscriptions", "httpMethod": "POST", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}, "list": {"id": "reseller.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "parameters": {"customerAuthToken": {"type": "string", "location": "query"}, "customerId": {"type": "string", "location": "query"}, "customerNamePrefix": {"type": "string", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "minimum": "1", "maximum": "100", "location": "query"}, "pageToken": {"type": "string", "location": "query"}}, "response": {"$ref": "Subscriptions"}}, "startPaidService": {"id": "reseller.subscriptions.startPaidService", "path": "customers/{customerId}/subscriptions/{subscriptionId}/startPaidService", "httpMethod": "POST", "parameters": {"customerId": {"type": "string", "required": true, "location": "path"}, "subscriptionId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Subscription"}}}}', true));

  }
}



class BackupGuardGoogle_Address extends BackupGuardGoogle_Model {
  public $addressLine1;
  public $addressLine2;
  public $addressLine3;
  public $contactName;
  public $countryCode;
  public $kind;
  public $locality;
  public $organizationName;
  public $postalCode;
  public $region;
  public function setAddressLine1( $addressLine1) {
    $this->addressLine1 = $addressLine1;
  }
  public function getAddressLine1() {
    return $this->addressLine1;
  }
  public function setAddressLine2( $addressLine2) {
    $this->addressLine2 = $addressLine2;
  }
  public function getAddressLine2() {
    return $this->addressLine2;
  }
  public function setAddressLine3( $addressLine3) {
    $this->addressLine3 = $addressLine3;
  }
  public function getAddressLine3() {
    return $this->addressLine3;
  }
  public function setContactName( $contactName) {
    $this->contactName = $contactName;
  }
  public function getContactName() {
    return $this->contactName;
  }
  public function setCountryCode( $countryCode) {
    $this->countryCode = $countryCode;
  }
  public function getCountryCode() {
    return $this->countryCode;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocality( $locality) {
    $this->locality = $locality;
  }
  public function getLocality() {
    return $this->locality;
  }
  public function setOrganizationName( $organizationName) {
    $this->organizationName = $organizationName;
  }
  public function getOrganizationName() {
    return $this->organizationName;
  }
  public function setPostalCode( $postalCode) {
    $this->postalCode = $postalCode;
  }
  public function getPostalCode() {
    return $this->postalCode;
  }
  public function setRegion( $region) {
    $this->region = $region;
  }
  public function getRegion() {
    return $this->region;
  }
}

class BackupGuardGoogle_ChangePlanRequest extends BackupGuardGoogle_Model {
  public $kind;
  public $planName;
  public $purchaseOrderId;
  protected $__seatsType = 'BackupGuardGoogle_Seats';
  protected $__seatsDataType = '';
  public $seats;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPlanName( $planName) {
    $this->planName = $planName;
  }
  public function getPlanName() {
    return $this->planName;
  }
  public function setPurchaseOrderId( $purchaseOrderId) {
    $this->purchaseOrderId = $purchaseOrderId;
  }
  public function getPurchaseOrderId() {
    return $this->purchaseOrderId;
  }
  public function setSeats(BackupGuardGoogle_Seats $seats) {
    $this->seats = $seats;
  }
  public function getSeats() {
    return $this->seats;
  }
}

class BackupGuardGoogle_Customer extends BackupGuardGoogle_Model {
  public $alternateEmail;
  public $customerDomain;
  public $customerId;
  public $kind;
  public $phoneNumber;
  protected $__postalAddressType = 'BackupGuardGoogle_Address';
  protected $__postalAddressDataType = '';
  public $postalAddress;
  public $resourceUiUrl;
  public function setAlternateEmail( $alternateEmail) {
    $this->alternateEmail = $alternateEmail;
  }
  public function getAlternateEmail() {
    return $this->alternateEmail;
  }
  public function setCustomerDomain( $customerDomain) {
    $this->customerDomain = $customerDomain;
  }
  public function getCustomerDomain() {
    return $this->customerDomain;
  }
  public function setCustomerId( $customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPhoneNumber( $phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber() {
    return $this->phoneNumber;
  }
  public function setPostalAddress(BackupGuardGoogle_Address $postalAddress) {
    $this->postalAddress = $postalAddress;
  }
  public function getPostalAddress() {
    return $this->postalAddress;
  }
  public function setResourceUiUrl( $resourceUiUrl) {
    $this->resourceUiUrl = $resourceUiUrl;
  }
  public function getResourceUiUrl() {
    return $this->resourceUiUrl;
  }
}

class BackupGuardGoogle_RenewalSettings extends BackupGuardGoogle_Model {
  public $kind;
  public $renewalType;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setRenewalType( $renewalType) {
    $this->renewalType = $renewalType;
  }
  public function getRenewalType() {
    return $this->renewalType;
  }
}

class BackupGuardGoogle_Seats extends BackupGuardGoogle_Model {
  public $kind;
  public $maximumNumberOfSeats;
  public $numberOfSeats;
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setMaximumNumberOfSeats( $maximumNumberOfSeats) {
    $this->maximumNumberOfSeats = $maximumNumberOfSeats;
  }
  public function getMaximumNumberOfSeats() {
    return $this->maximumNumberOfSeats;
  }
  public function setNumberOfSeats( $numberOfSeats) {
    $this->numberOfSeats = $numberOfSeats;
  }
  public function getNumberOfSeats() {
    return $this->numberOfSeats;
  }
}

class BackupGuardGoogle_Subscription extends BackupGuardGoogle_Model {
  public $creationTime;
  public $customerId;
  public $kind;
  protected $__planType = 'BackupGuardGoogle_SubscriptionPlan';
  protected $__planDataType = '';
  public $plan;
  public $purchaseOrderId;
  protected $__renewalSettingsType = 'BackupGuardGoogle_RenewalSettings';
  protected $__renewalSettingsDataType = '';
  public $renewalSettings;
  public $resourceUiUrl;
  protected $__seatsType = 'BackupGuardGoogle_Seats';
  protected $__seatsDataType = '';
  public $seats;
  public $skuId;
  public $status;
  public $subscriptionId;
  protected $__transferInfoType = 'BackupGuardGoogle_SubscriptionTransferInfo';
  protected $__transferInfoDataType = '';
  public $transferInfo;
  protected $__trialSettingsType = 'BackupGuardGoogle_SubscriptionTrialSettings';
  protected $__trialSettingsDataType = '';
  public $trialSettings;
  public function setCreationTime( $creationTime) {
    $this->creationTime = $creationTime;
  }
  public function getCreationTime() {
    return $this->creationTime;
  }
  public function setCustomerId( $customerId) {
    $this->customerId = $customerId;
  }
  public function getCustomerId() {
    return $this->customerId;
  }
  public function setKind( $kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPlan(BackupGuardGoogle_SubscriptionPlan $plan) {
    $this->plan = $plan;
  }
  public function getPlan() {
    return $this->plan;
  }
  public function setPurchaseOrderId( $purchaseOrderId) {
    $this->purchaseOrderId = $purchaseOrderId;
  }
  public function getPurchaseOrderId() {
    return $this->purchaseOrderId;
  }
  public function setRenewalSettings(BackupGuardGoogle_RenewalSettings $renewalSettings) {
    $this->renewalSettings = $renewalSettings;
  }
  public function getRenewalSettings() {
    return $this->renewalSettings;
  }
  public function setResourceUiUrl( $resourceUiUrl) {
    $this->resourceUiUrl = $resourceUiUrl;
  }
  public function getResourceUiUrl() {
    return $this->resourceUiUrl;
  }
  public function setSeats(BackupGuardGoogle_Seats $seats) {
    $this->seats = $seats;
  }
  public function getSeats() {
    return $this->seats;
  }
  public function setSkuId( $skuId) {
    $this->skuId = $skuId;
  }
  public function getSkuId() {
    return $this->skuId;
  }
  public function setStatus( $status) {
    $this->status = $status;
  }
  public function getStatus() {
    return $this->status;
  }
  public function setSubscriptionId( $subscriptionId) {
    $this->subscriptionId = $subscriptionId;
  }
  public function getSubscriptionId() {
    return $this->subscriptionId;
  }
  public function setTransferInfo(BackupGuardGoogle_SubscriptionTransferInfo $transferInfo) {
    $this->transferInfo = $transferInfo;
  }
  public function getTransferInfo() {
    return $this->transferInfo;
  }
  public function setTrialSettings(BackupGuardGoogle_SubscriptionTrialSettings $trialSettings) {
    $this->trialSettings = $trialSettings;
  }
  public function getTrialSettings() {
    return $this->trialSettings;
  }
}

class BackupGuardGoogle_SubscriptionPlan extends BackupGuardGoogle_Model {
  protected $__commitmentIntervalType = 'BackupGuardGoogle_SubscriptionPlanCommitmentInterval';
  protected $__commitmentIntervalDataType = '';
  public $commitmentInterval;
  public $isCommitmentPlan;
  public $planName;
  public function setCommitmentInterval(BackupGuardGoogle_SubscriptionPlanCommitmentInterval $commitmentInterval) {
    $this->commitmentInterval = $commitmentInterval;
  }
  public function getCommitmentInterval() {
    return $this->commitmentInterval;
  }
  public function setIsCommitmentPlan( $isCommitmentPlan) {
    $this->isCommitmentPlan = $isCommitmentPlan;
  }
  public function getIsCommitmentPlan() {
    return $this->isCommitmentPlan;
  }
  public function setPlanName( $planName) {
    $this->planName = $planName;
  }
  public function getPlanName() {
    return $this->planName;
  }
}

class BackupGuardGoogle_SubscriptionPlanCommitmentInterval extends BackupGuardGoogle_Model {
  public $endTime;
  public $startTime;
  public function setEndTime( $endTime) {
    $this->endTime = $endTime;
  }
  public function getEndTime() {
    return $this->endTime;
  }
  public function setStartTime( $startTime) {
    $this->startTime = $startTime;
  }
  public function getStartTime() {
    return $this->startTime;
  }
}

class BackupGuardGoogle_SubscriptionTransferInfo extends BackupGuardGoogle_Model {
  public $transferabilityExpirationTime;
  public function setTransferabilityExpirationTime( $transferabilityExpirationTime) {
    $this->transferabilityExpirationTime = $transferabilityExpirationTime;
  }
  public function getTransferabilityExpirationTime() {
    return $this->transferabilityExpirationTime;
  }
}

class BackupGuardGoogle_SubscriptionTrialSettings extends BackupGuardGoogle_Model {
  public $isInTrial;
  public $trialEndTime;
  public function setIsInTrial( $isInTrial) {
    $this->isInTrial = $isInTrial;
  }
  public function getIsInTrial() {
    return $this->isInTrial;
  }
  public function setTrialEndTime( $trialEndTime) {
    $this->trialEndTime = $trialEndTime;
  }
  public function getTrialEndTime() {
    return $this->trialEndTime;
  }
}

class BackupGuardGoogle_Subscriptions extends BackupGuardGoogle_Model {
  public $kind;
  public $nextPageToken;
  protected $__subscriptionsType = 'BackupGuardGoogle_Subscription';
  protected $__subscriptionsDataType = 'array';
  public $subscriptions;
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
  public function setSubscriptions(/* array(BackupGuardGoogle_Subscription) */ $subscriptions) {
    $this->assertIsArray($subscriptions, 'BackupGuardGoogle_Subscription', __METHOD__);
    $this->subscriptions = $subscriptions;
  }
  public function getSubscriptions() {
    return $this->subscriptions;
  }
}
