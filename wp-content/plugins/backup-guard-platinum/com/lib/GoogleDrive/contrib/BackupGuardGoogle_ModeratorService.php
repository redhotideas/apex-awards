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
   * The "votes" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $votes = $moderatorService->votes;
   *  </code>
   */
  class BackupGuardGoogle_VotesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a new vote by the authenticated user for the specified submission within the specified
     * series. (votes.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param BackupGuardGoogle_Vote $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @return BackupGuardGoogle_Vote
     */
    public function insert($seriesId, $submissionId, BackupGuardGoogle_Vote $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Vote($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the votes by the authenticated user for the specified submission within the specified
     * series. This method supports patch semantics. (votes.patch)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param BackupGuardGoogle_Vote $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @return BackupGuardGoogle_Vote
     */
    public function patch($seriesId, $submissionId, BackupGuardGoogle_Vote $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Vote($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists the votes by the authenticated user for the given series. (votes.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @return BackupGuardGoogle_VoteList
     */
    public function listVotes($seriesId, $optParams = array()) {
      $params = array('seriesId' => $seriesId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_VoteList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the votes by the authenticated user for the specified submission within the specified
     * series. (votes.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param BackupGuardGoogle_Vote $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @return BackupGuardGoogle_Vote
     */
    public function update($seriesId, $submissionId, BackupGuardGoogle_Vote $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Vote($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the votes by the authenticated user for the specified submission within the specified
     * series. (votes.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string userId
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @return BackupGuardGoogle_Vote
     */
    public function get($seriesId, $submissionId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Vote($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "responses" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $responses = $moderatorService->responses;
   *  </code>
   */
  class BackupGuardGoogle_ResponsesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a response for the specified submission in the specified topic within the specified
     * series. (responses.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param string $parentSubmissionId The decimal ID of the parent Submission within the Series.
     * @param BackupGuardGoogle_Submission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @opt_param bool anonymous Set to true to mark the new submission as anonymous.
     * @return BackupGuardGoogle_Submission
     */
    public function insert($seriesId, $topicId, $parentSubmissionId, BackupGuardGoogle_Submission $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'topicId' => $topicId, 'parentSubmissionId' => $parentSubmissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Submission($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists or searches the responses for the specified submission within the specified series and
     * returns the search results. (responses.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string sort Sort order.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     * @return BackupGuardGoogle_SubmissionList
     */
    public function listResponses($seriesId, $submissionId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SubmissionList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "tags" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $tags = $moderatorService->tags;
   *  </code>
   */
  class BackupGuardGoogle_TagsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a new tag for the specified submission within the specified series. (tags.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param BackupGuardGoogle_Tag $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Tag
     */
    public function insert($seriesId, $submissionId, BackupGuardGoogle_Tag $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Tag($data);
      } else {
        return $data;
      }
    }
    /**
     * Lists all tags for the specified submission within the specified series. (tags.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_TagList
     */
    public function listTags($seriesId, $submissionId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TagList($data);
      } else {
        return $data;
      }
    }
    /**
     * Deletes the specified tag from the specified submission within the specified series.
     * (tags.delete)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param string $tagId
     * @param array $optParams Optional parameters.
     */
    public function delete($seriesId, $submissionId, $tagId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId, 'tagId' => $tagId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
  }

  /**
   * The "series" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $series = $moderatorService->series;
   *  </code>
   */
  class BackupGuardGoogle_SeriesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a new series. (series.insert)
     *
     * @param BackupGuardGoogle_Series $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Series
     */
    public function insert(BackupGuardGoogle_Series $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Series($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified series. This method supports patch semantics. (series.patch)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param BackupGuardGoogle_Series $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Series
     */
    public function patch($seriesId, BackupGuardGoogle_Series $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Series($data);
      } else {
        return $data;
      }
    }
    /**
     * Searches the series and returns the search results. (series.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listSeries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified series. (series.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param BackupGuardGoogle_Series $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Series
     */
    public function update($seriesId, BackupGuardGoogle_Series $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Series($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified series. (series.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Series
     */
    public function get($seriesId, $optParams = array()) {
      $params = array('seriesId' => $seriesId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Series($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "submissions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $submissions = $moderatorService->submissions;
   *  </code>
   */
  class BackupGuardGoogle_SeriesSubmissionsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Searches the submissions for the specified series and returns the search results.
     * (submissions.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string lang The language code for the language the client prefers results in.
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string sort Sort order.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     * @return BackupGuardGoogle_SubmissionList
     */
    public function listSeriesSubmissions($seriesId, $optParams = array()) {
      $params = array('seriesId' => $seriesId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SubmissionList($data);
      } else {
        return $data;
      }
    }
  }
  /**
   * The "responses" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $responses = $moderatorService->responses;
   *  </code>
   */
  class BackupGuardGoogle_SeriesResponsesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Searches the responses for the specified series and returns the search results. (responses.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string sort Sort order.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listSeriesResponses($seriesId, $optParams = array()) {
      $params = array('seriesId' => $seriesId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "topics" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $topics = $moderatorService->topics;
   *  </code>
   */
  class BackupGuardGoogle_TopicsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a new topic into the specified series. (topics.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param BackupGuardGoogle_Topic $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Topic
     */
    public function insert($seriesId, BackupGuardGoogle_Topic $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Topic($data);
      } else {
        return $data;
      }
    }
    /**
     * Searches the topics within the specified series and returns the search results. (topics.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string mode
     * @return BackupGuardGoogle_TopicList
     */
    public function listTopics($seriesId, $optParams = array()) {
      $params = array('seriesId' => $seriesId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_TopicList($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the specified topic within the specified series. (topics.update)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param BackupGuardGoogle_Topic $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Topic
     */
    public function update($seriesId, $topicId, BackupGuardGoogle_Topic $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'topicId' => $topicId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Topic($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified topic from the specified series. (topics.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Topic
     */
    public function get($seriesId, $topicId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Topic($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "submissions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $submissions = $moderatorService->submissions;
   *  </code>
   */
  class BackupGuardGoogle_TopicsSubmissionsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Searches the submissions for the specified topic within the specified series and returns the
     * search results. (submissions.list)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     * @opt_param string start-index Index of the first result to be retrieved.
     * @opt_param string author Restricts the results to submissions by a specific author.
     * @opt_param string sort Sort order.
     * @opt_param string q Search query.
     * @opt_param bool hasAttachedVideo Specifies whether to restrict to submissions that have videos attached.
     * @return BackupGuardGoogle_SubmissionList
     */
    public function listTopicsSubmissions($seriesId, $topicId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'topicId' => $topicId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SubmissionList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "global" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $global = $moderatorService->global;
   *  </code>
   */
  class BackupGuardGoogle_ModeratorGlobalServiceResource extends BackupGuardGoogle_ServiceResource {


  }

  /**
   * The "series" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $series = $moderatorService->series;
   *  </code>
   */
  class BackupGuardGoogle_ModeratorGlobalSeriesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Searches the public series and returns the search results. (series.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string max-results Maximum number of results to return.
     * @opt_param string q Search query.
     * @opt_param string start-index Index of the first result to be retrieved.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listModeratorGlobalSeries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "profiles" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $profiles = $moderatorService->profiles;
   *  </code>
   */
  class BackupGuardGoogle_ProfilesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Updates the profile information for the authenticated user. This method supports patch semantics.
     * (profiles.patch)
     *
     * @param BackupGuardGoogle_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function patch(BackupGuardGoogle_Profile $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates the profile information for the authenticated user. (profiles.update)
     *
     * @param BackupGuardGoogle_Profile $postBody
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function update(BackupGuardGoogle_Profile $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the profile information for the authenticated user. (profiles.get)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_Profile
     */
    public function get($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Profile($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "featured" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $featured = $moderatorService->featured;
   *  </code>
   */
  class BackupGuardGoogle_FeaturedServiceResource extends BackupGuardGoogle_ServiceResource {


  }

  /**
   * The "series" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $series = $moderatorService->series;
   *  </code>
   */
  class BackupGuardGoogle_FeaturedSeriesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Lists the featured series. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listFeaturedSeries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "myrecent" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $myrecent = $moderatorService->myrecent;
   *  </code>
   */
  class BackupGuardGoogle_MyrecentServiceResource extends BackupGuardGoogle_ServiceResource {


  }

  /**
   * The "series" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $series = $moderatorService->series;
   *  </code>
   */
  class BackupGuardGoogle_MyrecentSeriesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Lists the series the authenticated user has visited. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listMyrecentSeries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "my" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $my = $moderatorService->my;
   *  </code>
   */
  class BackupGuardGoogle_MyServiceResource extends BackupGuardGoogle_ServiceResource {


  }

  /**
   * The "series" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $series = $moderatorService->series;
   *  </code>
   */
  class BackupGuardGoogle_MySeriesServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Lists all series created by the authenticated user. (series.list)
     *
     * @param array $optParams Optional parameters.
     * @return BackupGuardGoogle_SeriesList
     */
    public function listMySeries($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_SeriesList($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "submissions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $moderatorService = new BackupGuardGoogle_ModeratorService(...);
   *   $submissions = $moderatorService->submissions;
   *  </code>
   */
  class BackupGuardGoogle_SubmissionsServiceResource extends BackupGuardGoogle_ServiceResource {


    /**
     * Inserts a new submission in the specified topic within the specified series. (submissions.insert)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $topicId The decimal ID of the Topic within the Series.
     * @param BackupGuardGoogle_Submission $postBody
     * @param array $optParams Optional parameters.
     *
     * @opt_param string unauthToken User identifier for unauthenticated usage mode
     * @opt_param bool anonymous Set to true to mark the new submission as anonymous.
     * @return BackupGuardGoogle_Submission
     */
    public function insert($seriesId, $topicId, BackupGuardGoogle_Submission $postBody, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'topicId' => $topicId, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Submission($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns the specified submission within the specified series. (submissions.get)
     *
     * @param string $seriesId The decimal ID of the Series.
     * @param string $submissionId The decimal ID of the Submission within the Series.
     * @param array $optParams Optional parameters.
     *
     * @opt_param string lang The language code for the language the client prefers results in.
     * @opt_param bool includeVotes Specifies whether to include the current user's vote
     * @return BackupGuardGoogle_Submission
     */
    public function get($seriesId, $submissionId, $optParams = array()) {
      $params = array('seriesId' => $seriesId, 'submissionId' => $submissionId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new BackupGuardGoogle_Submission($data);
      } else {
        return $data;
      }
    }
  }

/**
 * Service definition for BackupGuardGoogle_Moderator (v1).
 *
 * <p>
 * Moderator API
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="http://code.google.com/apis/moderator/v1/using_rest.html" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class BackupGuardGoogle_ModeratorService extends BackupGuardGoogle_Service {
  public $votes;
  public $responses;
  public $tags;
  public $series;
  public $series_submissions;
  public $series_responses;
  public $topics;
  public $topics_submissions;
  public $global_series;
  public $profiles;
  public $featured_series;
  public $myrecent_series;
  public $my_series;
  public $submissions;
  /**
   * Constructs the internal representation of the Moderator service.
   *
   * @param BackupGuardGoogle_Client $client
   */
  public function __construct(BackupGuardGoogle_Client $client) {
    $this->servicePath = 'moderator/v1/';
    $this->version = 'v1';
    $this->serviceName = 'moderator';

    $client->addService($this->serviceName, $this->version);
    $this->votes = new BackupGuardGoogle_VotesServiceResource($this, $this->serviceName, 'votes', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "POST", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.insert"}, "patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "PATCH", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "id": "moderator.votes.list", "httpMethod": "GET", "path": "series/{seriesId}/votes/@me", "response": {"$ref": "VoteList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Vote"}, "response": {"$ref": "Vote"}, "httpMethod": "PUT", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "id": "moderator.votes.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "userId": {"type": "string", "location": "query"}, "unauthToken": {"type": "string", "location": "query"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.votes.get", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/votes/@me", "response": {"$ref": "Vote"}}}}', true));
    $this->responses = new BackupGuardGoogle_ResponsesServiceResource($this, $this->serviceName, 'responses', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "parentSubmissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "anonymous": {"type": "boolean", "location": "query"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Submission"}, "response": {"$ref": "Submission"}, "httpMethod": "POST", "path": "series/{seriesId}/topics/{topicId}/submissions/{parentSubmissionId}/responses", "id": "moderator.responses.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "sort": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.responses.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/responses", "response": {"$ref": "SubmissionList"}}}}', true));
    $this->tags = new BackupGuardGoogle_TagsServiceResource($this, $this->serviceName, 'tags', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Tag"}, "response": {"$ref": "Tag"}, "httpMethod": "POST", "path": "series/{seriesId}/submissions/{submissionId}/tags", "id": "moderator.tags.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.tags.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}/tags", "response": {"$ref": "TagList"}}, "delete": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/{seriesId}/submissions/{submissionId}/tags/{tagId}", "id": "moderator.tags.delete", "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "tagId": {"required": true, "type": "string", "location": "path"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "httpMethod": "DELETE"}}}', true));
    $this->series = new BackupGuardGoogle_SeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "POST", "path": "series", "id": "moderator.series.insert"}, "patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "PATCH", "path": "series/{seriesId}", "id": "moderator.series.patch"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "SeriesList"}, "httpMethod": "GET", "path": "series", "id": "moderator.series.list"}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Series"}, "response": {"$ref": "Series"}, "httpMethod": "PUT", "path": "series/{seriesId}", "id": "moderator.series.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.series.get", "httpMethod": "GET", "path": "series/{seriesId}", "response": {"$ref": "Series"}}}}', true));
    $this->series_submissions = new BackupGuardGoogle_SeriesSubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"lang": {"type": "string", "location": "query"}, "max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.series.submissions.list", "httpMethod": "GET", "path": "series/{seriesId}/submissions", "response": {"$ref": "SubmissionList"}}}}', true));
    $this->series_responses = new BackupGuardGoogle_SeriesResponsesServiceResource($this, $this->serviceName, 'responses', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "sort": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.series.responses.list", "httpMethod": "GET", "path": "series/{seriesId}/responses", "response": {"$ref": "SeriesList"}}}}', true));
    $this->topics = new BackupGuardGoogle_TopicsServiceResource($this, $this->serviceName, 'topics', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Topic"}, "response": {"$ref": "Topic"}, "httpMethod": "POST", "path": "series/{seriesId}/topics", "id": "moderator.topics.insert"}, "list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "mode": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.topics.list", "httpMethod": "GET", "path": "series/{seriesId}/topics", "response": {"$ref": "TopicList"}}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "request": {"$ref": "Topic"}, "response": {"$ref": "Topic"}, "httpMethod": "PUT", "path": "series/{seriesId}/topics/{topicId}", "id": "moderator.topics.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}}, "id": "moderator.topics.get", "httpMethod": "GET", "path": "series/{seriesId}/topics/{topicId}", "response": {"$ref": "Topic"}}}}', true));
    $this->topics_submissions = new BackupGuardGoogle_TopicsSubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}, "author": {"type": "string", "location": "query"}, "sort": {"type": "string", "location": "query"}, "q": {"type": "string", "location": "query"}, "hasAttachedVideo": {"type": "boolean", "location": "query"}}, "id": "moderator.topics.submissions.list", "httpMethod": "GET", "path": "series/{seriesId}/topics/{topicId}/submissions", "response": {"$ref": "SubmissionList"}}}}', true));
    $this->global_series = new BackupGuardGoogle_ModeratorGlobalSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"max-results": {"type": "integer", "location": "query", "format": "uint32"}, "q": {"type": "string", "location": "query"}, "start-index": {"type": "integer", "location": "query", "format": "uint32"}}, "response": {"$ref": "SeriesList"}, "httpMethod": "GET", "path": "search", "id": "moderator.global.series.list"}}}', true));
    $this->profiles = new BackupGuardGoogle_ProfilesServiceResource($this, $this->serviceName, 'profiles', json_decode('{"methods": {"patch": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "httpMethod": "PATCH", "path": "profiles/@me", "id": "moderator.profiles.patch"}, "update": {"scopes": ["https://www.googleapis.com/auth/moderator"], "request": {"$ref": "Profile"}, "response": {"$ref": "Profile"}, "httpMethod": "PUT", "path": "profiles/@me", "id": "moderator.profiles.update"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "profiles/@me", "response": {"$ref": "Profile"}, "id": "moderator.profiles.get", "httpMethod": "GET"}}}', true));
    $this->featured_series = new BackupGuardGoogle_FeaturedSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/featured", "response": {"$ref": "SeriesList"}, "id": "moderator.featured.series.list", "httpMethod": "GET"}}}', true));
    $this->myrecent_series = new BackupGuardGoogle_MyrecentSeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/@me/recent", "response": {"$ref": "SeriesList"}, "id": "moderator.myrecent.series.list", "httpMethod": "GET"}}}', true));
    $this->my_series = new BackupGuardGoogle_MySeriesServiceResource($this, $this->serviceName, 'series', json_decode('{"methods": {"list": {"scopes": ["https://www.googleapis.com/auth/moderator"], "path": "series/@me/mine", "response": {"$ref": "SeriesList"}, "id": "moderator.my.series.list", "httpMethod": "GET"}}}', true));
    $this->submissions = new BackupGuardGoogle_SubmissionsServiceResource($this, $this->serviceName, 'submissions', json_decode('{"methods": {"insert": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "topicId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "unauthToken": {"type": "string", "location": "query"}, "anonymous": {"type": "boolean", "location": "query"}}, "request": {"$ref": "Submission"}, "response": {"$ref": "Submission"}, "httpMethod": "POST", "path": "series/{seriesId}/topics/{topicId}/submissions", "id": "moderator.submissions.insert"}, "get": {"scopes": ["https://www.googleapis.com/auth/moderator"], "parameters": {"lang": {"type": "string", "location": "query"}, "seriesId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "submissionId": {"required": true, "type": "integer", "location": "path", "format": "uint32"}, "includeVotes": {"type": "boolean", "location": "query"}}, "id": "moderator.submissions.get", "httpMethod": "GET", "path": "series/{seriesId}/submissions/{submissionId}", "response": {"$ref": "Submission"}}}}', true));

  }
}

class BackupGuardGoogle_ModeratorTopicsResourcePartial extends BackupGuardGoogle_Model {
  protected $__idType = 'BackupGuardGoogle_ModeratorTopicsResourcePartialId';
  protected $__idDataType = '';
  public $id;
  public function setId(BackupGuardGoogle_ModeratorTopicsResourcePartialId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class BackupGuardGoogle_ModeratorTopicsResourcePartialId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $topicId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setTopicId($topicId) {
    $this->topicId = $topicId;
  }
  public function getTopicId() {
    return $this->topicId;
  }
}

class BackupGuardGoogle_ModeratorVotesResourcePartial extends BackupGuardGoogle_Model {
  public $vote;
  public $flag;
  public function setVote($vote) {
    $this->vote = $vote;
  }
  public function getVote() {
    return $this->vote;
  }
  public function setFlag($flag) {
    $this->flag = $flag;
  }
  public function getFlag() {
    return $this->flag;
  }
}

class BackupGuardGoogle_Profile extends BackupGuardGoogle_Model {
  public $kind;
  protected $__attributionType = 'BackupGuardGoogle_ProfileAttribution';
  protected $__attributionDataType = '';
  public $attribution;
  protected $__idType = 'BackupGuardGoogle_ProfileId';
  protected $__idDataType = '';
  public $id;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAttribution(BackupGuardGoogle_ProfileAttribution $attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setId(BackupGuardGoogle_ProfileId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class BackupGuardGoogle_ProfileAttribution extends BackupGuardGoogle_Model {
  protected $__geoType = 'BackupGuardGoogle_ProfileAttributionGeo';
  protected $__geoDataType = '';
  public $geo;
  public $displayName;
  public $location;
  public $avatarUrl;
  public function setGeo(BackupGuardGoogle_ProfileAttributionGeo $geo) {
    $this->geo = $geo;
  }
  public function getGeo() {
    return $this->geo;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setAvatarUrl($avatarUrl) {
    $this->avatarUrl = $avatarUrl;
  }
  public function getAvatarUrl() {
    return $this->avatarUrl;
  }
}

class BackupGuardGoogle_ProfileAttributionGeo extends BackupGuardGoogle_Model {
  public $latitude;
  public $location;
  public $longitude;
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
}

class BackupGuardGoogle_ProfileId extends BackupGuardGoogle_Model {
  public $user;
  public function setUser($user) {
    $this->user = $user;
  }
  public function getUser() {
    return $this->user;
  }
}

class BackupGuardGoogle_Series extends BackupGuardGoogle_Model {
  public $kind;
  public $description;
  protected $__rulesType = 'BackupGuardGoogle_SeriesRules';
  protected $__rulesDataType = '';
  public $rules;
  public $unauthVotingAllowed;
  public $videoSubmissionAllowed;
  public $name;
  public $numTopics;
  public $anonymousSubmissionAllowed;
  public $unauthSubmissionAllowed;
  protected $__idType = 'BackupGuardGoogle_SeriesId';
  protected $__idDataType = '';
  public $id;
  protected $__countersType = 'BackupGuardGoogle_SeriesCounters';
  protected $__countersDataType = '';
  public $counters;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setRules(BackupGuardGoogle_SeriesRules $rules) {
    $this->rules = $rules;
  }
  public function getRules() {
    return $this->rules;
  }
  public function setUnauthVotingAllowed($unauthVotingAllowed) {
    $this->unauthVotingAllowed = $unauthVotingAllowed;
  }
  public function getUnauthVotingAllowed() {
    return $this->unauthVotingAllowed;
  }
  public function setVideoSubmissionAllowed($videoSubmissionAllowed) {
    $this->videoSubmissionAllowed = $videoSubmissionAllowed;
  }
  public function getVideoSubmissionAllowed() {
    return $this->videoSubmissionAllowed;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
  public function setNumTopics($numTopics) {
    $this->numTopics = $numTopics;
  }
  public function getNumTopics() {
    return $this->numTopics;
  }
  public function setAnonymousSubmissionAllowed($anonymousSubmissionAllowed) {
    $this->anonymousSubmissionAllowed = $anonymousSubmissionAllowed;
  }
  public function getAnonymousSubmissionAllowed() {
    return $this->anonymousSubmissionAllowed;
  }
  public function setUnauthSubmissionAllowed($unauthSubmissionAllowed) {
    $this->unauthSubmissionAllowed = $unauthSubmissionAllowed;
  }
  public function getUnauthSubmissionAllowed() {
    return $this->unauthSubmissionAllowed;
  }
  public function setId(BackupGuardGoogle_SeriesId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setCounters(BackupGuardGoogle_SeriesCounters $counters) {
    $this->counters = $counters;
  }
  public function getCounters() {
    return $this->counters;
  }
}

class BackupGuardGoogle_SeriesCounters extends BackupGuardGoogle_Model {
  public $users;
  public $noneVotes;
  public $videoSubmissions;
  public $minusVotes;
  public $anonymousSubmissions;
  public $submissions;
  public $plusVotes;
  public function setUsers($users) {
    $this->users = $users;
  }
  public function getUsers() {
    return $this->users;
  }
  public function setNoneVotes($noneVotes) {
    $this->noneVotes = $noneVotes;
  }
  public function getNoneVotes() {
    return $this->noneVotes;
  }
  public function setVideoSubmissions($videoSubmissions) {
    $this->videoSubmissions = $videoSubmissions;
  }
  public function getVideoSubmissions() {
    return $this->videoSubmissions;
  }
  public function setMinusVotes($minusVotes) {
    $this->minusVotes = $minusVotes;
  }
  public function getMinusVotes() {
    return $this->minusVotes;
  }
  public function setAnonymousSubmissions($anonymousSubmissions) {
    $this->anonymousSubmissions = $anonymousSubmissions;
  }
  public function getAnonymousSubmissions() {
    return $this->anonymousSubmissions;
  }
  public function setSubmissions($submissions) {
    $this->submissions = $submissions;
  }
  public function getSubmissions() {
    return $this->submissions;
  }
  public function setPlusVotes($plusVotes) {
    $this->plusVotes = $plusVotes;
  }
  public function getPlusVotes() {
    return $this->plusVotes;
  }
}

class BackupGuardGoogle_SeriesId extends BackupGuardGoogle_Model {
  public $seriesId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
}

class BackupGuardGoogle_SeriesList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Series';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Series) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Series', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_SeriesRules extends BackupGuardGoogle_Model {
  protected $__votesType = 'BackupGuardGoogle_SeriesRulesVotes';
  protected $__votesDataType = '';
  public $votes;
  protected $__submissionsType = 'BackupGuardGoogle_SeriesRulesSubmissions';
  protected $__submissionsDataType = '';
  public $submissions;
  public function setVotes(BackupGuardGoogle_SeriesRulesVotes $votes) {
    $this->votes = $votes;
  }
  public function getVotes() {
    return $this->votes;
  }
  public function setSubmissions(BackupGuardGoogle_SeriesRulesSubmissions $submissions) {
    $this->submissions = $submissions;
  }
  public function getSubmissions() {
    return $this->submissions;
  }
}

class BackupGuardGoogle_SeriesRulesSubmissions extends BackupGuardGoogle_Model {
  public $close;
  public $open;
  public function setClose($close) {
    $this->close = $close;
  }
  public function getClose() {
    return $this->close;
  }
  public function setOpen($open) {
    $this->open = $open;
  }
  public function getOpen() {
    return $this->open;
  }
}

class BackupGuardGoogle_SeriesRulesVotes extends BackupGuardGoogle_Model {
  public $close;
  public $open;
  public function setClose($close) {
    $this->close = $close;
  }
  public function getClose() {
    return $this->close;
  }
  public function setOpen($open) {
    $this->open = $open;
  }
  public function getOpen() {
    return $this->open;
  }
}

class BackupGuardGoogle_Submission extends BackupGuardGoogle_Model {
  public $kind;
  protected $__attributionType = 'BackupGuardGoogle_SubmissionAttribution';
  protected $__attributionDataType = '';
  public $attribution;
  public $created;
  public $text;
  protected $__topicsType = 'BackupGuardGoogle_ModeratorTopicsResourcePartial';
  protected $__topicsDataType = 'array';
  public $topics;
  public $author;
  protected $__translationsType = 'BackupGuardGoogle_SubmissionTranslations';
  protected $__translationsDataType = 'array';
  public $translations;
  protected $__parentSubmissionIdType = 'BackupGuardGoogle_SubmissionParentSubmissionId';
  protected $__parentSubmissionIdDataType = '';
  public $parentSubmissionId;
  protected $__voteType = 'BackupGuardGoogle_ModeratorVotesResourcePartial';
  protected $__voteDataType = '';
  public $vote;
  public $attachmentUrl;
  protected $__geoType = 'BackupGuardGoogle_SubmissionGeo';
  protected $__geoDataType = '';
  public $geo;
  protected $__idType = 'BackupGuardGoogle_SubmissionId';
  protected $__idDataType = '';
  public $id;
  protected $__countersType = 'BackupGuardGoogle_SubmissionCounters';
  protected $__countersDataType = '';
  public $counters;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setAttribution(BackupGuardGoogle_SubmissionAttribution $attribution) {
    $this->attribution = $attribution;
  }
  public function getAttribution() {
    return $this->attribution;
  }
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
  public function setTopics(/* array(BackupGuardGoogle_ModeratorTopicsResourcePartial) */ $topics) {
    $this->assertIsArray($topics, 'BackupGuardGoogle_ModeratorTopicsResourcePartial', __METHOD__);
    $this->topics = $topics;
  }
  public function getTopics() {
    return $this->topics;
  }
  public function setAuthor($author) {
    $this->author = $author;
  }
  public function getAuthor() {
    return $this->author;
  }
  public function setTranslations(/* array(BackupGuardGoogle_SubmissionTranslations) */ $translations) {
    $this->assertIsArray($translations, 'BackupGuardGoogle_SubmissionTranslations', __METHOD__);
    $this->translations = $translations;
  }
  public function getTranslations() {
    return $this->translations;
  }
  public function setParentSubmissionId(BackupGuardGoogle_SubmissionParentSubmissionId $parentSubmissionId) {
    $this->parentSubmissionId = $parentSubmissionId;
  }
  public function getParentSubmissionId() {
    return $this->parentSubmissionId;
  }
  public function setVote(BackupGuardGoogle_ModeratorVotesResourcePartial $vote) {
    $this->vote = $vote;
  }
  public function getVote() {
    return $this->vote;
  }
  public function setAttachmentUrl($attachmentUrl) {
    $this->attachmentUrl = $attachmentUrl;
  }
  public function getAttachmentUrl() {
    return $this->attachmentUrl;
  }
  public function setGeo(BackupGuardGoogle_SubmissionGeo $geo) {
    $this->geo = $geo;
  }
  public function getGeo() {
    return $this->geo;
  }
  public function setId(BackupGuardGoogle_SubmissionId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setCounters(BackupGuardGoogle_SubmissionCounters $counters) {
    $this->counters = $counters;
  }
  public function getCounters() {
    return $this->counters;
  }
}

class BackupGuardGoogle_SubmissionAttribution extends BackupGuardGoogle_Model {
  public $displayName;
  public $location;
  public $avatarUrl;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setAvatarUrl($avatarUrl) {
    $this->avatarUrl = $avatarUrl;
  }
  public function getAvatarUrl() {
    return $this->avatarUrl;
  }
}

class BackupGuardGoogle_SubmissionCounters extends BackupGuardGoogle_Model {
  public $noneVotes;
  public $minusVotes;
  public $plusVotes;
  public function setNoneVotes($noneVotes) {
    $this->noneVotes = $noneVotes;
  }
  public function getNoneVotes() {
    return $this->noneVotes;
  }
  public function setMinusVotes($minusVotes) {
    $this->minusVotes = $minusVotes;
  }
  public function getMinusVotes() {
    return $this->minusVotes;
  }
  public function setPlusVotes($plusVotes) {
    $this->plusVotes = $plusVotes;
  }
  public function getPlusVotes() {
    return $this->plusVotes;
  }
}

class BackupGuardGoogle_SubmissionGeo extends BackupGuardGoogle_Model {
  public $latitude;
  public $location;
  public $longitude;
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLocation($location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
}

class BackupGuardGoogle_SubmissionId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $submissionId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setSubmissionId($submissionId) {
    $this->submissionId = $submissionId;
  }
  public function getSubmissionId() {
    return $this->submissionId;
  }
}

class BackupGuardGoogle_SubmissionList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Submission';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Submission) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Submission', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_SubmissionParentSubmissionId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $submissionId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setSubmissionId($submissionId) {
    $this->submissionId = $submissionId;
  }
  public function getSubmissionId() {
    return $this->submissionId;
  }
}

class BackupGuardGoogle_SubmissionTranslations extends BackupGuardGoogle_Model {
  public $lang;
  public $text;
  public function setLang($lang) {
    $this->lang = $lang;
  }
  public function getLang() {
    return $this->lang;
  }
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
}

class BackupGuardGoogle_Tag extends BackupGuardGoogle_Model {
  public $text;
  public $kind;
  protected $__idType = 'BackupGuardGoogle_TagId';
  protected $__idDataType = '';
  public $id;
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setId(BackupGuardGoogle_TagId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
}

class BackupGuardGoogle_TagId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $tagId;
  public $submissionId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setTagId($tagId) {
    $this->tagId = $tagId;
  }
  public function getTagId() {
    return $this->tagId;
  }
  public function setSubmissionId($submissionId) {
    $this->submissionId = $submissionId;
  }
  public function getSubmissionId() {
    return $this->submissionId;
  }
}

class BackupGuardGoogle_TagList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Tag';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Tag) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Tag', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_Topic extends BackupGuardGoogle_Model {
  public $kind;
  public $description;
  protected $__rulesType = 'BackupGuardGoogle_TopicRules';
  protected $__rulesDataType = '';
  public $rules;
  protected $__featuredSubmissionType = 'BackupGuardGoogle_Submission';
  protected $__featuredSubmissionDataType = '';
  public $featuredSubmission;
  public $presenter;
  protected $__countersType = 'BackupGuardGoogle_TopicCounters';
  protected $__countersDataType = '';
  public $counters;
  protected $__idType = 'BackupGuardGoogle_TopicId';
  protected $__idDataType = '';
  public $id;
  public $name;
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setDescription($description) {
    $this->description = $description;
  }
  public function getDescription() {
    return $this->description;
  }
  public function setRules(BackupGuardGoogle_TopicRules $rules) {
    $this->rules = $rules;
  }
  public function getRules() {
    return $this->rules;
  }
  public function setFeaturedSubmission(BackupGuardGoogle_Submission $featuredSubmission) {
    $this->featuredSubmission = $featuredSubmission;
  }
  public function getFeaturedSubmission() {
    return $this->featuredSubmission;
  }
  public function setPresenter($presenter) {
    $this->presenter = $presenter;
  }
  public function getPresenter() {
    return $this->presenter;
  }
  public function setCounters(BackupGuardGoogle_TopicCounters $counters) {
    $this->counters = $counters;
  }
  public function getCounters() {
    return $this->counters;
  }
  public function setId(BackupGuardGoogle_TopicId $id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }
}

class BackupGuardGoogle_TopicCounters extends BackupGuardGoogle_Model {
  public $users;
  public $noneVotes;
  public $videoSubmissions;
  public $minusVotes;
  public $submissions;
  public $plusVotes;
  public function setUsers($users) {
    $this->users = $users;
  }
  public function getUsers() {
    return $this->users;
  }
  public function setNoneVotes($noneVotes) {
    $this->noneVotes = $noneVotes;
  }
  public function getNoneVotes() {
    return $this->noneVotes;
  }
  public function setVideoSubmissions($videoSubmissions) {
    $this->videoSubmissions = $videoSubmissions;
  }
  public function getVideoSubmissions() {
    return $this->videoSubmissions;
  }
  public function setMinusVotes($minusVotes) {
    $this->minusVotes = $minusVotes;
  }
  public function getMinusVotes() {
    return $this->minusVotes;
  }
  public function setSubmissions($submissions) {
    $this->submissions = $submissions;
  }
  public function getSubmissions() {
    return $this->submissions;
  }
  public function setPlusVotes($plusVotes) {
    $this->plusVotes = $plusVotes;
  }
  public function getPlusVotes() {
    return $this->plusVotes;
  }
}

class BackupGuardGoogle_TopicId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $topicId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setTopicId($topicId) {
    $this->topicId = $topicId;
  }
  public function getTopicId() {
    return $this->topicId;
  }
}

class BackupGuardGoogle_TopicList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Topic';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Topic) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Topic', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class BackupGuardGoogle_TopicRules extends BackupGuardGoogle_Model {
  protected $__votesType = 'BackupGuardGoogle_TopicRulesVotes';
  protected $__votesDataType = '';
  public $votes;
  protected $__submissionsType = 'BackupGuardGoogle_TopicRulesSubmissions';
  protected $__submissionsDataType = '';
  public $submissions;
  public function setVotes(BackupGuardGoogle_TopicRulesVotes $votes) {
    $this->votes = $votes;
  }
  public function getVotes() {
    return $this->votes;
  }
  public function setSubmissions(BackupGuardGoogle_TopicRulesSubmissions $submissions) {
    $this->submissions = $submissions;
  }
  public function getSubmissions() {
    return $this->submissions;
  }
}

class BackupGuardGoogle_TopicRulesSubmissions extends BackupGuardGoogle_Model {
  public $close;
  public $open;
  public function setClose($close) {
    $this->close = $close;
  }
  public function getClose() {
    return $this->close;
  }
  public function setOpen($open) {
    $this->open = $open;
  }
  public function getOpen() {
    return $this->open;
  }
}

class BackupGuardGoogle_TopicRulesVotes extends BackupGuardGoogle_Model {
  public $close;
  public $open;
  public function setClose($close) {
    $this->close = $close;
  }
  public function getClose() {
    return $this->close;
  }
  public function setOpen($open) {
    $this->open = $open;
  }
  public function getOpen() {
    return $this->open;
  }
}

class BackupGuardGoogle_Vote extends BackupGuardGoogle_Model {
  public $vote;
  public $flag;
  protected $__idType = 'BackupGuardGoogle_VoteId';
  protected $__idDataType = '';
  public $id;
  public $kind;
  public function setVote($vote) {
    $this->vote = $vote;
  }
  public function getVote() {
    return $this->vote;
  }
  public function setFlag($flag) {
    $this->flag = $flag;
  }
  public function getFlag() {
    return $this->flag;
  }
  public function setId(BackupGuardGoogle_VoteId $id) {
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
}

class BackupGuardGoogle_VoteId extends BackupGuardGoogle_Model {
  public $seriesId;
  public $submissionId;
  public function setSeriesId($seriesId) {
    $this->seriesId = $seriesId;
  }
  public function getSeriesId() {
    return $this->seriesId;
  }
  public function setSubmissionId($submissionId) {
    $this->submissionId = $submissionId;
  }
  public function getSubmissionId() {
    return $this->submissionId;
  }
}

class BackupGuardGoogle_VoteList extends BackupGuardGoogle_Model {
  protected $__itemsType = 'BackupGuardGoogle_Vote';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems(/* array(BackupGuardGoogle_Vote) */ $items) {
    $this->assertIsArray($items, 'BackupGuardGoogle_Vote', __METHOD__);
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}
