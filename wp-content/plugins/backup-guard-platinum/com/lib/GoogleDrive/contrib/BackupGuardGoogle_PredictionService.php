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
   * The "hostedmodels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $predictionService = new BackupGuardGoogle_PredictionService(...);
   *   $hostedmodels = $predictionService->hostedmodels;
   *  </code>
   */
  class BackupGuardGoogle_HostedmodelsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Submit input and request an output against a hosted model. (hostedmodels.predict)
     *
     * @param string $project The project associated with the model.
     * @param string $hostedModelName The name of a hosted model.
     * @param BackupGuardGoogle_Input $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Output
     */
    public function predict($project, $hostedModelName, BackupGuardGoogle_Input $postBody, $optParams = array()) {
      $params = array('project' => $project, 'hostedModelName' => $hostedModelName, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('predict', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Output($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "trainedmodels" collection of methods.
   * Typical usage is:
   *  <code>
   *   $predictionService = new BackupGuardGoogle_PredictionService(...);
   *   $trainedmodels = $predictionService->trainedmodels;
   *  </code>
   */
  class BackupGuardGoogle_TrainedmodelsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Get analysis of the model and the data the model was trained on. (trainedmodels.analyze)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Analyze
     */
    public function analyze($project, $id, $optParams = array()) {
      $params = array('project' => $project, 'id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('analyze', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Analyze($data);
      } else {
        return $data;
      }
    }
    /**
     * Delete a trained model. (trainedmodels.delete)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     */
    public function delete($project, $id, $optParams = array()) {
      $params = array('project' => $project, 'id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Check training status of your model. (trainedmodels.get)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Insert2
     */
    public function get($project, $id, $optParams = array()) {
      $params = array('project' => $project, 'id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Insert2($data);
      } else {
        return $data;
      }
    }
    /**
     * Train a Prediction API model. (trainedmodels.insert)
     *
     * @param string $project The project associated with the model.
     * @param BackupGuardGoogle_Insert $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Insert2
     */
    public function insert($project, BackupGuardGoogle_Insert $postBody, $optParams = array()) {
      $params = array('project' => $project, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Insert2($data);
      } else {
        return $data;
      }
    }
    /**
     * List available models. (trainedmodels.list)
     *
     * @param string $project The project associated with the model.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string maxResults Maximum number of results to return.
     * @opt_param string pageToken Pagination token.
     * @return BackupGuardGoogle_PredictionList
     */
    public function listTrainedmodels($project, $optParams = array()) {
      $params = array('project' => $project);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_PredictionList($data);
      } else {
        return $data;
      }
    }
    /**
     * Submit model id and request a prediction. (trainedmodels.predict)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param BackupGuardGoogle_Input $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Output
     */
    public function predict($project, $id, BackupGuardGoogle_Input $postBody, $optParams = array()) {
      $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('predict', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Output($data);
      } else {
        return $data;
      }
    }
    /**
     * Add new data to a trained model. (trainedmodels.update)
     *
     * @param string $project The project associated with the model.
     * @param string $id The unique name for the predictive model.
     * @param BackupGuardGoogle_Update $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Insert2
     */
    public function update($project, $id, BackupGuardGoogle_Update $postBody, $optParams = array()) {
      $params = array('project' => $project, 'id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Insert2($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Prediction (v1.6).
 *
 * <p>
 * Lets you access a cloud hosted machine learning service that makes it easy to build smart apps
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/prediction/docs/developer-guide" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_PredictionService extends BackupGuardGoogle_Service {
  public $hostedmodels;
  public $trainedmodels;
  /**
   * Constructs the internal representation of the Prediction service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'prediction/v1.6/projects/';
    $this->version = 'v1.6';
    $this->serviceName = 'prediction';

    $client->addService($this->serviceName, $this->version);
    $this->hostedmodels = new BackupGuardGoogle_HostedmodelsServiceResource($this, $this->serviceName, 'hostedmodels', json_decode('{"methods": {"predict": {"id": "prediction.hostedmodels.predict", "path": "{project}/hostedmodels/{hostedModelName}/predict", "httpMethod": "POST", "parameters": {"hostedModelName": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Input"}, "response": {"$ref": "Output"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}}}', true));
    $this->trainedmodels = new BackupGuardGoogle_TrainedmodelsServiceResource($this, $this->serviceName, 'trainedmodels', json_decode('{"methods": {"analyze": {"id": "prediction.trainedmodels.analyze", "path": "{project}/trainedmodels/{id}/analyze", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Analyze"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "delete": {"id": "prediction.trainedmodels.delete", "path": "{project}/trainedmodels/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "get": {"id": "prediction.trainedmodels.get", "path": "{project}/trainedmodels/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "insert": {"id": "prediction.trainedmodels.insert", "path": "{project}/trainedmodels", "httpMethod": "POST", "parameters": {"project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Insert"}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/devstorage.full_control", "https://www.googleapis.com/auth/devstorage.read_only", "https://www.googleapis.com/auth/devstorage.read_write", "https://www.googleapis.com/auth/prediction"]}, "list": {"id": "prediction.trainedmodels.list", "path": "{project}/trainedmodels/list", "httpMethod": "GET", "parameters": {"maxResults": {"type": "integer", "format": "uint32", "minimum": "0", "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "project": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "List"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "predict": {"id": "prediction.trainedmodels.predict", "path": "{project}/trainedmodels/{id}/predict", "httpMethod": "POST", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Input"}, "response": {"$ref": "Output"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}, "update": {"id": "prediction.trainedmodels.update", "path": "{project}/trainedmodels/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}, "project": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Update"}, "response": {"$ref": "Insert2"}, "scopes": ["https://www.googleapis.com/auth/prediction"]}}}', true));

  }
}



class BackupGuardGoogle_Analyze extends BackupGuardGoogle_Model {
  protected $__dataDescriptionType = 'BackupGuardGoogle_AnalyzeDataDescription';
  protected $__dataDescriptionDataType = '';
  public $dataDescription;
  public $errors;
  public $id;
  public $kind;
  protected $__modelDescriptionType = 'BackupGuardGoogle_AnalyzeModelDescription';
  protected $__modelDescriptionDataType = '';
  public $modelDescription;
  public $selfLink;
  public function setDataDescription(BackupGuardGoogle_AnalyzeDataDescription $dataDescription) {
    $this->dataDescription = $dataDescription;
  }
  public function getDataDescription() {
    return $this->dataDescription;
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
  public function setModelDescription(BackupGuardGoogle_AnalyzeModelDescription $modelDescription) {
    $this->modelDescription = $modelDescription;
  }
  public function getModelDescription() {
    return $this->modelDescription;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_AnalyzeDataDescription extends BackupGuardGoogle_Model {
  protected $__featuresType = 'BackupGuardGoogle_AnalyzeDataDescriptionFeatures';
  protected $__featuresDataType = 'array';
  public $features;
  protected $__outputFeatureType = 'BackupGuardGoogle_AnalyzeDataDescriptionOutputFeature';
  protected $__outputFeatureDataType = '';
  public $outputFeature;
  public function setFeatures(/* array(BackupGuardGoogle_AnalyzeDataDescriptionFeatures) */ $features) {
    $this->assertIsArray($features, 'BackupGuardGoogle_AnalyzeDataDescriptionFeatures', __METHOD__);
    $this->features = $features;
  }
  public function getFeatures() {
    return $this->features;
  }
  public function setOutputFeature(BackupGuardGoogle_AnalyzeDataDescriptionOutputFeature $outputFeature) {
    $this->outputFeature = $outputFeature;
  }
  public function getOutputFeature() {
    return $this->outputFeature;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionFeatures extends BackupGuardGoogle_Model {
  protected $__categoricalType = 'BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategorical';
  protected $__categoricalDataType = '';
  public $categorical;
  public $index;
  protected $__numericType = 'BackupGuardGoogle_AnalyzeDataDescriptionFeaturesNumeric';
  protected $__numericDataType = '';
  public $numeric;
  protected $__textType = 'BackupGuardGoogle_AnalyzeDataDescriptionFeaturesText';
  protected $__textDataType = '';
  public $text;
  public function setCategorical(BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategorical $categorical) {
    $this->categorical = $categorical;
  }
  public function getCategorical() {
    return $this->categorical;
  }
  public function setIndex( $index) {
    $this->index = $index;
  }
  public function getIndex() {
    return $this->index;
  }
  public function setNumeric(BackupGuardGoogle_AnalyzeDataDescriptionFeaturesNumeric $numeric) {
    $this->numeric = $numeric;
  }
  public function getNumeric() {
    return $this->numeric;
  }
  public function setText(BackupGuardGoogle_AnalyzeDataDescriptionFeaturesText $text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategorical extends BackupGuardGoogle_Model {
  public $count;
  protected $__valuesType = 'BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategoricalValues';
  protected $__valuesDataType = 'array';
  public $values;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setValues(/* array(BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategoricalValues) */ $values) {
    $this->assertIsArray($values, 'BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategoricalValues', __METHOD__);
    $this->values = $values;
  }
  public function getValues() {
    return $this->values;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionFeaturesCategoricalValues extends BackupGuardGoogle_Model {
  public $count;
  public $value;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionFeaturesNumeric extends BackupGuardGoogle_Model {
  public $count;
  public $mean;
  public $variance;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setMean( $mean) {
    $this->mean = $mean;
  }
  public function getMean() {
    return $this->mean;
  }
  public function setVariance( $variance) {
    $this->variance = $variance;
  }
  public function getVariance() {
    return $this->variance;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionFeaturesText extends BackupGuardGoogle_Model {
  public $count;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionOutputFeature extends BackupGuardGoogle_Model {
  protected $__numericType = 'BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureNumeric';
  protected $__numericDataType = '';
  public $numeric;
  protected $__textType = 'BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureText';
  protected $__textDataType = 'array';
  public $text;
  public function setNumeric(BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureNumeric $numeric) {
    $this->numeric = $numeric;
  }
  public function getNumeric() {
    return $this->numeric;
  }
  public function setText(/* array(BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureText) */ $text) {
    $this->assertIsArray($text, 'BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureText', __METHOD__);
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureNumeric extends BackupGuardGoogle_Model {
  public $count;
  public $mean;
  public $variance;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setMean( $mean) {
    $this->mean = $mean;
  }
  public function getMean() {
    return $this->mean;
  }
  public function setVariance( $variance) {
    $this->variance = $variance;
  }
  public function getVariance() {
    return $this->variance;
  }
}

class BackupGuardGoogle_AnalyzeDataDescriptionOutputFeatureText extends BackupGuardGoogle_Model {
  public $count;
  public $value;
  public function setCount( $count) {
    $this->count = $count;
  }
  public function getCount() {
    return $this->count;
  }
  public function setValue( $value) {
    $this->value = $value;
  }
  public function getValue() {
    return $this->value;
  }
}

class BackupGuardGoogle_AnalyzeModelDescription extends BackupGuardGoogle_Model {
  public $confusionMatrix;
  public $confusionMatrixRowTotals;
  protected $__modelinfoType = 'BackupGuardGoogle_Insert2';
  protected $__modelinfoDataType = '';
  public $modelinfo;
  public function setConfusionMatrix( $confusionMatrix) {
    $this->confusionMatrix = $confusionMatrix;
  }
  public function getConfusionMatrix() {
    return $this->confusionMatrix;
  }
  public function setConfusionMatrixRowTotals( $confusionMatrixRowTotals) {
    $this->confusionMatrixRowTotals = $confusionMatrixRowTotals;
  }
  public function getConfusionMatrixRowTotals() {
    return $this->confusionMatrixRowTotals;
  }
  public function setModelinfo(BackupGuardGoogle_Insert2 $modelinfo) {
    $this->modelinfo = $modelinfo;
  }
  public function getModelinfo() {
    return $this->modelinfo;
  }
}

class BackupGuardGoogle_Input extends BackupGuardGoogle_Model {
  protected $__inputType = 'BackupGuardGoogle_InputInput';
  protected $__inputDataType = '';
  public $input;
  public function setInput(BackupGuardGoogle_InputInput $input) {
    $this->input = $input;
  }
  public function getInput() {
    return $this->input;
  }
}

class BackupGuardGoogle_InputInput extends BackupGuardGoogle_Model {
  public $csvInstance;
  public function setCsvInstance(/* array(BackupGuardGoogle_object) */ $csvInstance) {
    $this->assertIsArray($csvInstance, 'BackupGuardGoogle_object', __METHOD__);
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance() {
    return $this->csvInstance;
  }
}

class BackupGuardGoogle_Insert extends BackupGuardGoogle_Model {
  public $id;
  public $modelType;
  public $sourceModel;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  protected $__trainingInstancesType = 'BackupGuardGoogle_InsertTrainingInstances';
  protected $__trainingInstancesDataType = 'array';
  public $trainingInstances;
  public $utility;
  public function setId( $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setModelType( $modelType) {
    $this->modelType = $modelType;
  }
  public function getModelType() {
    return $this->modelType;
  }
  public function setSourceModel( $sourceModel) {
    $this->sourceModel = $sourceModel;
  }
  public function getSourceModel() {
    return $this->sourceModel;
  }
  public function setStorageDataLocation( $storageDataLocation) {
    $this->storageDataLocation = $storageDataLocation;
  }
  public function getStorageDataLocation() {
    return $this->storageDataLocation;
  }
  public function setStoragePMMLLocation( $storagePMMLLocation) {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }
  public function getStoragePMMLLocation() {
    return $this->storagePMMLLocation;
  }
  public function setStoragePMMLModelLocation( $storagePMMLModelLocation) {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }
  public function getStoragePMMLModelLocation() {
    return $this->storagePMMLModelLocation;
  }
  public function setTrainingInstances(/* array(BackupGuardGoogle_InsertTrainingInstances) */ $trainingInstances) {
    $this->assertIsArray($trainingInstances, 'BackupGuardGoogle_InsertTrainingInstances', __METHOD__);
    $this->trainingInstances = $trainingInstances;
  }
  public function getTrainingInstances() {
    return $this->trainingInstances;
  }
  public function setUtility(/* array(BackupGuardGoogle_double) */ $utility) {
    $this->assertIsArray($utility, 'BackupGuardGoogle_double', __METHOD__);
    $this->utility = $utility;
  }
  public function getUtility() {
    return $this->utility;
  }
}

class BackupGuardGoogle_Insert2 extends BackupGuardGoogle_Model {
  public $created;
  public $id;
  public $kind;
  protected $__modelInfoType = 'BackupGuardGoogle_Insert2ModelInfo';
  protected $__modelInfoDataType = '';
  public $modelInfo;
  public $modelType;
  public $selfLink;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  public $trainingComplete;
  public $trainingStatus;
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
  public function setModelInfo(BackupGuardGoogle_Insert2ModelInfo $modelInfo) {
    $this->modelInfo = $modelInfo;
  }
  public function getModelInfo() {
    return $this->modelInfo;
  }
  public function setModelType( $modelType) {
    $this->modelType = $modelType;
  }
  public function getModelType() {
    return $this->modelType;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setStorageDataLocation( $storageDataLocation) {
    $this->storageDataLocation = $storageDataLocation;
  }
  public function getStorageDataLocation() {
    return $this->storageDataLocation;
  }
  public function setStoragePMMLLocation( $storagePMMLLocation) {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }
  public function getStoragePMMLLocation() {
    return $this->storagePMMLLocation;
  }
  public function setStoragePMMLModelLocation( $storagePMMLModelLocation) {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }
  public function getStoragePMMLModelLocation() {
    return $this->storagePMMLModelLocation;
  }
  public function setTrainingComplete( $trainingComplete) {
    $this->trainingComplete = $trainingComplete;
  }
  public function getTrainingComplete() {
    return $this->trainingComplete;
  }
  public function setTrainingStatus( $trainingStatus) {
    $this->trainingStatus = $trainingStatus;
  }
  public function getTrainingStatus() {
    return $this->trainingStatus;
  }
}

class BackupGuardGoogle_Insert2ModelInfo extends BackupGuardGoogle_Model {
  public $classWeightedAccuracy;
  public $classificationAccuracy;
  public $meanSquaredError;
  public $modelType;
  public $numberInstances;
  public $numberLabels;
  public function setClassWeightedAccuracy( $classWeightedAccuracy) {
    $this->classWeightedAccuracy = $classWeightedAccuracy;
  }
  public function getClassWeightedAccuracy() {
    return $this->classWeightedAccuracy;
  }
  public function setClassificationAccuracy( $classificationAccuracy) {
    $this->classificationAccuracy = $classificationAccuracy;
  }
  public function getClassificationAccuracy() {
    return $this->classificationAccuracy;
  }
  public function setMeanSquaredError( $meanSquaredError) {
    $this->meanSquaredError = $meanSquaredError;
  }
  public function getMeanSquaredError() {
    return $this->meanSquaredError;
  }
  public function setModelType( $modelType) {
    $this->modelType = $modelType;
  }
  public function getModelType() {
    return $this->modelType;
  }
  public function setNumberInstances( $numberInstances) {
    $this->numberInstances = $numberInstances;
  }
  public function getNumberInstances() {
    return $this->numberInstances;
  }
  public function setNumberLabels( $numberLabels) {
    $this->numberLabels = $numberLabels;
  }
  public function getNumberLabels() {
    return $this->numberLabels;
  }
}

class BackupGuardGoogle_InsertTrainingInstances extends BackupGuardGoogle_Model {
  public $csvInstance;
  public $output;
  public function setCsvInstance(/* array(BackupGuardGoogle_object) */ $csvInstance) {
    $this->assertIsArray($csvInstance, 'BackupGuardGoogle_object', __METHOD__);
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance() {
    return $this->csvInstance;
  }
  public function setOutput( $output) {
    $this->output = $output;
  }
  public function getOutput() {
    return $this->output;
  }
}

class BackupGuardGoogle_Output extends BackupGuardGoogle_Model {
  public $id;
  public $kind;
  public $outputLabel;
  protected $__outputMultiType = 'BackupGuardGoogle_OutputOutputMulti';
  protected $__outputMultiDataType = 'array';
  public $outputMulti;
  public $outputValue;
  public $selfLink;
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
  public function setOutputLabel( $outputLabel) {
    $this->outputLabel = $outputLabel;
  }
  public function getOutputLabel() {
    return $this->outputLabel;
  }
  public function setOutputMulti(/* array(BackupGuardGoogle_OutputOutputMulti) */ $outputMulti) {
    $this->assertIsArray($outputMulti, 'BackupGuardGoogle_OutputOutputMulti', __METHOD__);
    $this->outputMulti = $outputMulti;
  }
  public function getOutputMulti() {
    return $this->outputMulti;
  }
  public function setOutputValue( $outputValue) {
    $this->outputValue = $outputValue;
  }
  public function getOutputValue() {
    return $this->outputValue;
  }
  public function setSelfLink( $selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
}

class BackupGuardGoogle_OutputOutputMulti extends BackupGuardGoogle_Model {
  public $label;
  public $score;
  public function setLabel( $label) {
    $this->label = $label;
  }
  public function getLabel() {
    return $this->label;
  }
  public function setScore( $score) {
    $this->score = $score;
  }
  public function getScore() {
    return $this->score;
  }
}

class BackupGuardGoogle_PredictionList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Insert2';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public $selfLink;
  public function setItems(/* array(BackupGuardGoogle_Insert2) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Insert2', __METHOD__);
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

class BackupGuardGoogle_Update extends BackupGuardGoogle_Model {
  public $csvInstance;
  public $output;
  public function setCsvInstance(/* array(BackupGuardGoogle_object) */ $csvInstance) {
    $this->assertIsArray($csvInstance, 'BackupGuardGoogle_object', __METHOD__);
    $this->csvInstance = $csvInstance;
  }
  public function getCsvInstance() {
    return $this->csvInstance;
  }
  public function setOutput( $output) {
    $this->output = $output;
  }
  public function getOutput() {
    return $this->output;
  }
}
