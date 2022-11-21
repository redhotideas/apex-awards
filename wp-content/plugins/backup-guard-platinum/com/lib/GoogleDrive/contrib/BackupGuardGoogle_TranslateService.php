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
   * The "detections" collection of methods.
   * Typical usage is:
   *  <code>
   *   $translateService = new BackupGuardGoogle_TranslateService(...);
   *   $detections = $translateService->detections;
   *  </code>
   */
  class BackupGuardGoogle_DetectionsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Detect the language of text. (detections.list)
     *
     * @param string $q The text to detect
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_DetectionsListResponse
     */
    public function listDetections($q, $optParams = array()) {
      $params = array('q' => $q);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_DetectionsListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "languages" collection of methods.
   * Typical usage is:
   *  <code>
   *   $translateService = new BackupGuardGoogle_TranslateService(...);
   *   $languages = $translateService->languages;
   *  </code>
   */
  class BackupGuardGoogle_LanguagesServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * List the source/target languages supported by the API (languages.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string target the language and collation in which the localized results should be returned
     * @return BackupGuardGoogle_LanguagesListResponse
     */
    public function listLanguages($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_LanguagesListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "translations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $translateService = new BackupGuardGoogle_TranslateService(...);
   *   $translations = $translateService->translations;
   *  </code>
   */
  class BackupGuardGoogle_TranslationsServiceResource extends BackupGuardGoogle_ServiceResource {

    /**
     * Returns text translations from one language to another. (translations.list)
     *
     * @param string $q The text to translate
     * @param string $target The target language into which the text should be translated
     * @param array $optParams Optional parameters.
     *
     * @opt_param string cid The customization id for translate
     * @opt_param string format The format of the text
     * @opt_param string source The source language of the text
     * @return BackupGuardGoogle_TranslationsListResponse
     */
    public function listTranslations($q, $target, $optParams = array()) {
      $params = array('q' => $q, 'target' => $target);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TranslationsListResponse($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Translate (v2).
 *
 * <p>
 * Lets you translate text from one language to another
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/translate/v2/using_rest" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_TranslateService extends BackupGuardGoogle_Service {
  public $detections;
  public $languages;
  public $translations;
  /**
   * Constructs the internal representation of the Translate service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'language/translate/';
    $this->version = 'v2';
    $this->serviceName = 'translate';

    $client->addService($this->serviceName, $this->version);
    $this->detections = new BackupGuardGoogle_DetectionsServiceResource($this, $this->serviceName, 'detections', json_decode('{"methods": {"list": {"id": "language.detections.list", "path": "v2/detect", "httpMethod": "GET", "parameters": {"q": {"type": "string", "required": true, "repeated": true, "location": "query"}}, "response": {"$ref": "DetectionsListResponse"}}}}', true));
    $this->languages = new BackupGuardGoogle_LanguagesServiceResource($this, $this->serviceName, 'languages', json_decode('{"methods": {"list": {"id": "language.languages.list", "path": "v2/languages", "httpMethod": "GET", "parameters": {"target": {"type": "string", "location": "query"}}, "response": {"$ref": "LanguagesListResponse"}}}}', true));
    $this->translations = new BackupGuardGoogle_TranslationsServiceResource($this, $this->serviceName, 'translations', json_decode('{"methods": {"list": {"id": "language.translations.list", "path": "v2", "httpMethod": "GET", "parameters": {"cid": {"type": "string", "repeated": true, "location": "query"}, "format": {"type": "string", "enum": ["html", "text"], "location": "query"}, "q": {"type": "string", "required": true, "repeated": true, "location": "query"}, "source": {"type": "string", "location": "query"}, "target": {"type": "string", "required": true, "location": "query"}}, "response": {"$ref": "TranslationsListResponse"}}}}', true));

  }
}



class BackupGuardGoogle_DetectionsListResponse extends BackupGuardGoogle_Model {
  protected $__detectionsType = 'BackupGuardGoogle_DetectionsResourceItems';
  protected $__detectionsDataType = 'array';
  public $detections;
  public function setDetections(/* array(BackupGuardGoogle_DetectionsResourceItems) */ $detections) {
    $this->assertIsArray($detections, 'BackupGuardGoogle_DetectionsResourceItems', __METHOD__);
    $this->detections = $detections;
  }
  public function getDetections() {
    return $this->detections;
  }
}

class BackupGuardGoogle_DetectionsResourceItems extends BackupGuardGoogle_Model {
  public $confidence;
  public $isReliable;
  public $language;
  public function setConfidence( $confidence) {
    $this->confidence = $confidence;
  }
  public function getConfidence() {
    return $this->confidence;
  }
  public function setIsReliable( $isReliable) {
    $this->isReliable = $isReliable;
  }
  public function getIsReliable() {
    return $this->isReliable;
  }
  public function setLanguage( $language) {
    $this->language = $language;
  }
  public function getLanguage() {
    return $this->language;
  }
}

class BackupGuardGoogle_LanguagesListResponse extends BackupGuardGoogle_Model {
  protected $__languagesType = 'BackupGuardGoogle_LanguagesResource';
  protected $__languagesDataType = 'array';
  public $languages;
  public function setLanguages(/* array(BackupGuardGoogle_LanguagesResource) */ $languages) {
    $this->assertIsArray($languages, 'BackupGuardGoogle_LanguagesResource', __METHOD__);
    $this->languages = $languages;
  }
  public function getLanguages() {
    return $this->languages;
  }
}

class BackupGuardGoogle_LanguagesResource extends BackupGuardGoogle_Model {
  public $language;
  public $name;
  public function setLanguage( $language) {
    $this->language = $language;
  }
  public function getLanguage() {
    return $this->language;
  }
  public function setName( $name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class BackupGuardGoogle_TranslationsListResponse extends BackupGuardGoogle_Model {
  protected $__translationsType = 'BackupGuardGoogle_TranslationsResource';
  protected $__translationsDataType = 'array';
  public $translations;
  public function setTranslations(/* array(BackupGuardGoogle_TranslationsResource) */ $translations) {
    $this->assertIsArray($translations, 'BackupGuardGoogle_TranslationsResource', __METHOD__);
    $this->translations = $translations;
  }
  public function getTranslations() {
    return $this->translations;
  }
}

class BackupGuardGoogle_TranslationsResource extends BackupGuardGoogle_Model {
  public $detectedSourceLanguage;
  public $translatedText;
  public function setDetectedSourceLanguage( $detectedSourceLanguage) {
    $this->detectedSourceLanguage = $detectedSourceLanguage;
  }
  public function getDetectedSourceLanguage() {
    return $this->detectedSourceLanguage;
  }
  public function setTranslatedText( $translatedText) {
    $this->translatedText = $translatedText;
  }
  public function getTranslatedText() {
    return $this->translatedText;
  }
}
