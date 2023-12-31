<?php
/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for PlusDomains (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/domains/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_PlusDomains extends GoogleGAL_Service {

	/** View your circles and the people and pages in them. */
	const PLUS_CIRCLES_READ =
	  'https://www.googleapis.com/auth/plus.circles.read';
	/** Manage your circles and add people and pages. People and pages you add to your circles will be notified. Others may see this information publicly. People you add to circles can use Hangouts with you.. */
	const PLUS_CIRCLES_WRITE =
	  'https://www.googleapis.com/auth/plus.circles.write';
	/** Know your basic profile info and list of people in your circles.. */
	const PLUS_LOGIN =
	  'https://www.googleapis.com/auth/plus.login';
	/** Know who you are on Google. */
	const PLUS_ME =
	  'https://www.googleapis.com/auth/plus.me';
	/** Send your photos and videos to Google+. */
	const PLUS_MEDIA_UPLOAD =
	  'https://www.googleapis.com/auth/plus.media.upload';
	/** View your own Google+ profile and profiles visible to you. */
	const PLUS_PROFILES_READ =
	  'https://www.googleapis.com/auth/plus.profiles.read';
	/** View your Google+ posts, comments, and stream. */
	const PLUS_STREAM_READ =
	  'https://www.googleapis.com/auth/plus.stream.read';
	/** Manage your Google+ posts, comments, and stream. */
	const PLUS_STREAM_WRITE =
	  'https://www.googleapis.com/auth/plus.stream.write';
	/** View your email address. */
	const USERINFO_EMAIL =
	  'https://www.googleapis.com/auth/userinfo.email';
	/** View your basic profile info. */
	const USERINFO_PROFILE =
	  'https://www.googleapis.com/auth/userinfo.profile';

	public $activities;
	public $audiences;
	public $circles;
	public $comments;
	public $media;
	public $people;


	/**
	 * Constructs the internal representation of the PlusDomains service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'plusDomains/v1/';
		$this->version     = 'v1';
		$this->serviceName = 'plusDomains';

		$this->activities = new GoogleGAL_Service_PlusDomains_Activities_Resource(
			$this,
			$this->serviceName,
			'activities',
			array(
				'methods' => array(
					'get'    => array(
						'path'       => 'activities/{activityId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'activityId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'people/{userId}/activities',
						'httpMethod' => 'POST',
						'parameters' => array(
							'userId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'preview' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
						),
					),
					'list'   => array(
						'path'       => 'people/{userId}/activities/{collection}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'collection' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->audiences  = new GoogleGAL_Service_PlusDomains_Audiences_Resource(
			$this,
			$this->serviceName,
			'audiences',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'people/{userId}/audiences',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->circles    = new GoogleGAL_Service_PlusDomains_Circles_Resource(
			$this,
			$this->serviceName,
			'circles',
			array(
				'methods' => array(
					'addPeople'    => array(
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'userId'   => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'email'    => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
						),
					),
					'get'          => array(
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert'       => array(
						'path'       => 'people/{userId}/circles',
						'httpMethod' => 'POST',
						'parameters' => array(
							'userId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'         => array(
						'path'       => 'people/{userId}/circles',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'        => array(
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'remove'       => array(
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'removePeople' => array(
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'userId'   => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'email'    => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
						),
					),
					'update'       => array(
						'path'       => 'circles/{circleId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'circleId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->comments   = new GoogleGAL_Service_PlusDomains_Comments_Resource(
			$this,
			$this->serviceName,
			'comments',
			array(
				'methods' => array(
					'get'    => array(
						'path'       => 'comments/{commentId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'commentId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'activities/{activityId}/comments',
						'httpMethod' => 'POST',
						'parameters' => array(
							'activityId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'activities/{activityId}/comments',
						'httpMethod' => 'GET',
						'parameters' => array(
							'activityId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'sortOrder'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->media      = new GoogleGAL_Service_PlusDomains_Media_Resource(
			$this,
			$this->serviceName,
			'media',
			array(
				'methods' => array(
					'insert' => array(
						'path'       => 'people/{userId}/media/{collection}',
						'httpMethod' => 'POST',
						'parameters' => array(
							'userId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'collection' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->people     = new GoogleGAL_Service_PlusDomains_People_Resource(
			$this,
			$this->serviceName,
			'people',
			array(
				'methods' => array(
					'get'            => array(
						'path'       => 'people/{userId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'           => array(
						'path'       => 'people/{userId}/people/{collection}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'collection' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'orderBy'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'listByActivity' => array(
						'path'       => 'activities/{activityId}/people/{collection}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'activityId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'collection' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'listByCircle'   => array(
						'path'       => 'circles/{circleId}/people',
						'httpMethod' => 'GET',
						'parameters' => array(
							'circleId'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
	}
}


/**
 * The "activities" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $activities = $plusDomainsService->activities;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_Activities_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get an activity. (activities.get)
	 *
	 * @param string $activityId The ID of the activity to get.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Activity
	 */
	public function get( $activityId, $optParams = array() ) {
		$params = array( 'activityId' => $activityId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_PlusDomains_Activity' );
	}

	/**
	 * Create a new activity for the authenticated user. (activities.insert)
	 *
	 * @param string             $userId The ID of the user to create the activity on behalf of.
	 *             Its value should be "me", to indicate the authenticated user.
	 * @param GoogleGAL_Activity $postBody
	 * @param array              $optParams Optional parameters.
	 *
	 * @opt_param bool preview If "true", extract the potential media attachments
	 * for a URL. The response will include all possible attachments for a URL,
	 * including video, photos, and articles based on the content of the page.
	 * @return GoogleGAL_Service_PlusDomains_Activity
	 */
	public function insert( $userId, GoogleGAL_Service_PlusDomains_Activity $postBody, $optParams = array() ) {
		$params = array(
			'userId'   => $userId,
			'postBody' => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_PlusDomains_Activity' );
	}

	/**
	 * List all of the activities in the specified collection for a particular user.
	 * (activities.listActivities)
	 *
	 * @param string $userId The ID of the user to get activities for. The special
	 * value "me" can be used to indicate the authenticated user.
	 * @param string $collection The collection of activities to list.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of activities to include in
	 * the response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_ActivityFeed
	 */
	public function listActivities( $userId, $collection, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_PlusDomains_ActivityFeed' );
	}
}

/**
 * The "audiences" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $audiences = $plusDomainsService->audiences;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_Audiences_Resource extends GoogleGAL_Service_Resource {


	/**
	 * List all of the audiences to which a user can share.
	 * (audiences.listAudiences)
	 *
	 * @param string $userId The ID of the user to get audiences for. The special
	 * value "me" can be used to indicate the authenticated user.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of circles to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_AudiencesFeed
	 */
	public function listAudiences( $userId, $optParams = array() ) {
		$params = array( 'userId' => $userId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_PlusDomains_AudiencesFeed' );
	}
}

/**
 * The "circles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $circles = $plusDomainsService->circles;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_Circles_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Add a person to a circle. Google+ limits certain circle operations, including
	 * the number of circle adds. Learn More. (circles.addPeople)
	 *
	 * @param string $circleId The ID of the circle to add the person to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string userId IDs of the people to add to the circle. Optional,
	 * can be repeated.
	 * @opt_param string email Email of the people to add to the circle. Optional,
	 * can be repeated.
	 * @return GoogleGAL_Service_PlusDomains_Circle
	 */
	public function addPeople( $circleId, $optParams = array() ) {
		$params = array( 'circleId' => $circleId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'addPeople', array( $params ), 'GoogleGAL_Service_PlusDomains_Circle' );
	}

	/**
	 * Get a circle. (circles.get)
	 *
	 * @param string $circleId The ID of the circle to get.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Circle
	 */
	public function get( $circleId, $optParams = array() ) {
		$params = array( 'circleId' => $circleId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_PlusDomains_Circle' );
	}

	/**
	 * Create a new circle for the authenticated user. (circles.insert)
	 *
	 * @param string           $userId The ID of the user to create the circle on behalf of.
	 *           The value "me" can be used to indicate the authenticated user.
	 * @param GoogleGAL_Circle $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Circle
	 */
	public function insert( $userId, GoogleGAL_Service_PlusDomains_Circle $postBody, $optParams = array() ) {
		$params = array(
			'userId'   => $userId,
			'postBody' => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_PlusDomains_Circle' );
	}

	/**
	 * List all of the circles for a user. (circles.listCircles)
	 *
	 * @param string $userId The ID of the user to get circles for. The special
	 * value "me" can be used to indicate the authenticated user.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of circles to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_CircleFeed
	 */
	public function listCircles( $userId, $optParams = array() ) {
		$params = array( 'userId' => $userId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_PlusDomains_CircleFeed' );
	}

	/**
	 * Update a circle's description. This method supports patch semantics.
	 * (circles.patch)
	 *
	 * @param string           $circleId The ID of the circle to update.
	 * @param GoogleGAL_Circle $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Circle
	 */
	public function patch( $circleId, GoogleGAL_Service_PlusDomains_Circle $postBody, $optParams = array() ) {
		$params = array(
			'circleId' => $circleId,
			'postBody' => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_PlusDomains_Circle' );
	}

	/**
	 * Delete a circle. (circles.remove)
	 *
	 * @param string $circleId The ID of the circle to delete.
	 * @param array  $optParams Optional parameters.
	 */
	public function remove( $circleId, $optParams = array() ) {
		$params = array( 'circleId' => $circleId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'remove', array( $params ) );
	}

	/**
	 * Remove a person from a circle. (circles.removePeople)
	 *
	 * @param string $circleId The ID of the circle to remove the person from.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string userId IDs of the people to remove from the circle.
	 * Optional, can be repeated.
	 * @opt_param string email Email of the people to add to the circle. Optional,
	 * can be repeated.
	 */
	public function removePeople( $circleId, $optParams = array() ) {
		$params = array( 'circleId' => $circleId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'removePeople', array( $params ) );
	}

	/**
	 * Update a circle's description. (circles.update)
	 *
	 * @param string           $circleId The ID of the circle to update.
	 * @param GoogleGAL_Circle $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Circle
	 */
	public function update( $circleId, GoogleGAL_Service_PlusDomains_Circle $postBody, $optParams = array() ) {
		$params = array(
			'circleId' => $circleId,
			'postBody' => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_PlusDomains_Circle' );
	}
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $comments = $plusDomainsService->comments;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_Comments_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get a comment. (comments.get)
	 *
	 * @param string $commentId The ID of the comment to get.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Comment
	 */
	public function get( $commentId, $optParams = array() ) {
		$params = array( 'commentId' => $commentId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_PlusDomains_Comment' );
	}

	/**
	 * Create a new comment in reply to an activity. (comments.insert)
	 *
	 * @param string            $activityId The ID of the activity to reply to.
	 * @param GoogleGAL_Comment $postBody
	 * @param array             $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Comment
	 */
	public function insert( $activityId, GoogleGAL_Service_PlusDomains_Comment $postBody, $optParams = array() ) {
		$params = array(
			'activityId' => $activityId,
			'postBody'   => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_PlusDomains_Comment' );
	}

	/**
	 * List all of the comments for an activity. (comments.listComments)
	 *
	 * @param string $activityId The ID of the activity to get comments for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string sortOrder The order in which to sort the list of comments.
	 * @opt_param string maxResults The maximum number of comments to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_CommentFeed
	 */
	public function listComments( $activityId, $optParams = array() ) {
		$params = array( 'activityId' => $activityId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_PlusDomains_CommentFeed' );
	}
}

/**
 * The "media" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $media = $plusDomainsService->media;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_Media_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Add a new media item to an album. The current upload size limitations are
	 * 36MB for a photo and 1GB for a video. Uploads do not count against quota if
	 * photos are less than 2048 pixels on their longest side or videos are less
	 * than 15 minutes in length. (media.insert)
	 *
	 * @param string          $userId The ID of the user to create the activity on behalf of.
	 * @param string          $collection
	 * @param GoogleGAL_Media $postBody
	 * @param array           $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Media
	 */
	public function insert( $userId, $collection, GoogleGAL_Service_PlusDomains_Media $postBody, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
			'postBody'   => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_PlusDomains_Media' );
	}
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusDomainsService = new GoogleGAL_Service_PlusDomains(...);
 *   $people = $plusDomainsService->people;
 *  </code>
 */
class GoogleGAL_Service_PlusDomains_People_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get a person's profile. (people.get)
	 *
	 * @param string $userId The ID of the person to get the profile for. The
	 * special value "me" can be used to indicate the authenticated user.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_PlusDomains_Person
	 */
	public function get( $userId, $optParams = array() ) {
		$params = array( 'userId' => $userId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_PlusDomains_Person' );
	}

	/**
	 * List all of the people in the specified collection. (people.listPeople)
	 *
	 * @param string $userId Get the collection of people for the person identified.
	 * Use "me" to indicate the authenticated user.
	 * @param string $collection The collection of people to list.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string orderBy The order to return people in.
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of people to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_PeopleFeed
	 */
	public function listPeople( $userId, $collection, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_PlusDomains_PeopleFeed' );
	}

	/**
	 * List all of the people in the specified collection for a particular activity.
	 * (people.listByActivity)
	 *
	 * @param string $activityId The ID of the activity to get the list of people
	 * for.
	 * @param string $collection The collection of people to list.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of people to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_PeopleFeed
	 */
	public function listByActivity( $activityId, $collection, $optParams = array() ) {
		$params = array(
			'activityId' => $activityId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'listByActivity', array( $params ), 'GoogleGAL_Service_PlusDomains_PeopleFeed' );
	}

	/**
	 * List all of the people who are members of a circle. (people.listByCircle)
	 *
	 * @param string $circleId The ID of the circle to get the members of.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string maxResults The maximum number of people to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @return GoogleGAL_Service_PlusDomains_PeopleFeed
	 */
	public function listByCircle( $circleId, $optParams = array() ) {
		$params = array( 'circleId' => $circleId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'listByCircle', array( $params ), 'GoogleGAL_Service_PlusDomains_PeopleFeed' );
	}
}




class GoogleGAL_Service_PlusDomains_Acl extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $description;
	public $domainRestricted;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_PlusDomainsAclentryResource';
	protected $itemsDataType = 'array';
	public $kind;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setDomainRestricted( $domainRestricted ) {
		$this->domainRestricted = $domainRestricted;
	}
	public function getDomainRestricted() {
		return $this->domainRestricted;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_PlusDomains_Activity extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $accessType             = 'GoogleGAL_Service_PlusDomains_Acl';
	protected $accessDataType         = '';
	protected $actorType              = 'GoogleGAL_Service_PlusDomains_ActivityActor';
	protected $actorDataType          = '';
	public $address;
	public $annotation;
	public $crosspostSource;
	public $etag;
	public $geocode;
	public $id;
	public $kind;
	protected $locationType     = 'GoogleGAL_Service_PlusDomains_Place';
	protected $locationDataType = '';
	protected $objectType       = 'GoogleGAL_Service_PlusDomains_ActivityObject';
	protected $objectDataType   = '';
	public $placeId;
	public $placeName;
	protected $providerType     = 'GoogleGAL_Service_PlusDomains_ActivityProvider';
	protected $providerDataType = '';
	public $published;
	public $radius;
	public $title;
	public $updated;
	public $url;
	public $verb;


	public function setAccess( GoogleGAL_Service_PlusDomains_Acl $access ) {
		$this->access = $access;
	}
	public function getAccess() {
		return $this->access;
	}
	public function setActor( GoogleGAL_Service_PlusDomains_ActivityActor $actor ) {
		$this->actor = $actor;
	}
	public function getActor() {
		return $this->actor;
	}
	public function setAddress( $address ) {
		$this->address = $address;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setAnnotation( $annotation ) {
		$this->annotation = $annotation;
	}
	public function getAnnotation() {
		return $this->annotation;
	}
	public function setCrosspostSource( $crosspostSource ) {
		$this->crosspostSource = $crosspostSource;
	}
	public function getCrosspostSource() {
		return $this->crosspostSource;
	}
	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setGeocode( $geocode ) {
		$this->geocode = $geocode;
	}
	public function getGeocode() {
		return $this->geocode;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLocation( GoogleGAL_Service_PlusDomains_Place $location ) {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
	public function setObject( GoogleGAL_Service_PlusDomains_ActivityObject $object ) {
		$this->object = $object;
	}
	public function getObject() {
		return $this->object;
	}
	public function setPlaceId( $placeId ) {
		$this->placeId = $placeId;
	}
	public function getPlaceId() {
		return $this->placeId;
	}
	public function setPlaceName( $placeName ) {
		$this->placeName = $placeName;
	}
	public function getPlaceName() {
		return $this->placeName;
	}
	public function setProvider( GoogleGAL_Service_PlusDomains_ActivityProvider $provider ) {
		$this->provider = $provider;
	}
	public function getProvider() {
		return $this->provider;
	}
	public function setPublished( $published ) {
		$this->published = $published;
	}
	public function getPublished() {
		return $this->published;
	}
	public function setRadius( $radius ) {
		$this->radius = $radius;
	}
	public function getRadius() {
		return $this->radius;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setVerb( $verb ) {
		$this->verb = $verb;
	}
	public function getVerb() {
		return $this->verb;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_ActivityActorImage';
	protected $imageDataType = '';
	protected $nameType      = 'GoogleGAL_Service_PlusDomains_ActivityActorName';
	protected $nameDataType  = '';
	public $url;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_ActivityActorImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setName( GoogleGAL_Service_PlusDomains_ActivityActorName $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityActorName extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $familyName;
	public $givenName;


	public function setFamilyName( $familyName ) {
		$this->familyName = $familyName;
	}
	public function getFamilyName() {
		return $this->familyName;
	}
	public function setGivenName( $givenName ) {
		$this->givenName = $givenName;
	}
	public function getGivenName() {
		return $this->givenName;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	public $id;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_Activity';
	protected $itemsDataType = 'array';
	public $kind;
	public $nextLink;
	public $nextPageToken;
	public $selfLink;
	public $title;
	public $updated;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextLink( $nextLink ) {
		$this->nextLink = $nextLink;
	}
	public function getNextLink() {
		return $this->nextLink;
	}
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObject extends GoogleGAL_Collection {

	protected $collection_key         = 'attachments';
	protected $internal_gapi_mappings = array();
	protected $actorType              = 'GoogleGAL_Service_PlusDomains_ActivityObjectActor';
	protected $actorDataType          = '';
	protected $attachmentsType        = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachments';
	protected $attachmentsDataType    = 'array';
	public $content;
	public $id;
	public $objectType;
	public $originalContent;
	protected $plusonersType           = 'GoogleGAL_Service_PlusDomains_ActivityObjectPlusoners';
	protected $plusonersDataType       = '';
	protected $repliesType             = 'GoogleGAL_Service_PlusDomains_ActivityObjectReplies';
	protected $repliesDataType         = '';
	protected $resharersType           = 'GoogleGAL_Service_PlusDomains_ActivityObjectResharers';
	protected $resharersDataType       = '';
	protected $statusForViewerType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectStatusForViewer';
	protected $statusForViewerDataType = '';
	public $url;


	public function setActor( GoogleGAL_Service_PlusDomains_ActivityObjectActor $actor ) {
		$this->actor = $actor;
	}
	public function getActor() {
		return $this->actor;
	}
	public function setAttachments( $attachments ) {
		$this->attachments = $attachments;
	}
	public function getAttachments() {
		return $this->attachments;
	}
	public function setContent( $content ) {
		$this->content = $content;
	}
	public function getContent() {
		return $this->content;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setObjectType( $objectType ) {
		$this->objectType = $objectType;
	}
	public function getObjectType() {
		return $this->objectType;
	}
	public function setOriginalContent( $originalContent ) {
		$this->originalContent = $originalContent;
	}
	public function getOriginalContent() {
		return $this->originalContent;
	}
	public function setPlusoners( GoogleGAL_Service_PlusDomains_ActivityObjectPlusoners $plusoners ) {
		$this->plusoners = $plusoners;
	}
	public function getPlusoners() {
		return $this->plusoners;
	}
	public function setReplies( GoogleGAL_Service_PlusDomains_ActivityObjectReplies $replies ) {
		$this->replies = $replies;
	}
	public function getReplies() {
		return $this->replies;
	}
	public function setResharers( GoogleGAL_Service_PlusDomains_ActivityObjectResharers $resharers ) {
		$this->resharers = $resharers;
	}
	public function getResharers() {
		return $this->resharers;
	}
	public function setStatusForViewer( GoogleGAL_Service_PlusDomains_ActivityObjectStatusForViewer $statusForViewer ) {
		$this->statusForViewer = $statusForViewer;
	}
	public function getStatusForViewer() {
		return $this->statusForViewer;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectActorImage';
	protected $imageDataType = '';
	public $url;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_ActivityObjectActorImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachments extends GoogleGAL_Collection {

	protected $collection_key         = 'thumbnails';
	protected $internal_gapi_mappings = array();
	public $content;
	public $displayName;
	protected $embedType         = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsEmbed';
	protected $embedDataType     = '';
	protected $fullImageType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsFullImage';
	protected $fullImageDataType = '';
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsImage';
	protected $imageDataType = '';
	public $objectType;
	protected $previewThumbnailsType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsPreviewThumbnails';
	protected $previewThumbnailsDataType = 'array';
	protected $thumbnailsType            = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsThumbnails';
	protected $thumbnailsDataType        = 'array';
	public $url;


	public function setContent( $content ) {
		$this->content = $content;
	}
	public function getContent() {
		return $this->content;
	}
	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setEmbed( GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsEmbed $embed ) {
		$this->embed = $embed;
	}
	public function getEmbed() {
		return $this->embed;
	}
	public function setFullImage( GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsFullImage $fullImage ) {
		$this->fullImage = $fullImage;
	}
	public function getFullImage() {
		return $this->fullImage;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setObjectType( $objectType ) {
		$this->objectType = $objectType;
	}
	public function getObjectType() {
		return $this->objectType;
	}
	public function setPreviewThumbnails( $previewThumbnails ) {
		$this->previewThumbnails = $previewThumbnails;
	}
	public function getPreviewThumbnails() {
		return $this->previewThumbnails;
	}
	public function setThumbnails( $thumbnails ) {
		$this->thumbnails = $thumbnails;
	}
	public function getThumbnails() {
		return $this->thumbnails;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsEmbed extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $type;
	public $url;


	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsFullImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $type;
	public $url;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $type;
	public $url;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsPreviewThumbnails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsThumbnails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $description;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsThumbnailsImage';
	protected $imageDataType = '';
	public $url;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsThumbnailsImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectAttachmentsThumbnailsImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $type;
	public $url;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectPlusoners extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $selfLink;
	public $totalItems;


	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectReplies extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $selfLink;
	public $totalItems;


	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectResharers extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $selfLink;
	public $totalItems;


	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityObjectStatusForViewer extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $canComment;
	public $canPlusone;
	public $canUpdate;
	public $isPlusOned;
	public $resharingDisabled;


	public function setCanComment( $canComment ) {
		$this->canComment = $canComment;
	}
	public function getCanComment() {
		return $this->canComment;
	}
	public function setCanPlusone( $canPlusone ) {
		$this->canPlusone = $canPlusone;
	}
	public function getCanPlusone() {
		return $this->canPlusone;
	}
	public function setCanUpdate( $canUpdate ) {
		$this->canUpdate = $canUpdate;
	}
	public function getCanUpdate() {
		return $this->canUpdate;
	}
	public function setIsPlusOned( $isPlusOned ) {
		$this->isPlusOned = $isPlusOned;
	}
	public function getIsPlusOned() {
		return $this->isPlusOned;
	}
	public function setResharingDisabled( $resharingDisabled ) {
		$this->resharingDisabled = $resharingDisabled;
	}
	public function getResharingDisabled() {
		return $this->resharingDisabled;
	}
}

class GoogleGAL_Service_PlusDomains_ActivityProvider extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $title;


	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
}

class GoogleGAL_Service_PlusDomains_Audience extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemType     = 'GoogleGAL_Service_PlusDomains_PlusDomainsAclentryResource';
	protected $itemDataType = '';
	public $kind;
	public $memberCount;
	public $visibility;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setItem( GoogleGAL_Service_PlusDomains_PlusDomainsAclentryResource $item ) {
		$this->item = $item;
	}
	public function getItem() {
		return $this->item;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMemberCount( $memberCount ) {
		$this->memberCount = $memberCount;
	}
	public function getMemberCount() {
		return $this->memberCount;
	}
	public function setVisibility( $visibility ) {
		$this->visibility = $visibility;
	}
	public function getVisibility() {
		return $this->visibility;
	}
}

class GoogleGAL_Service_PlusDomains_AudiencesFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_Audience';
	protected $itemsDataType = 'array';
	public $kind;
	public $nextPageToken;
	public $totalItems;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_Circle extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $description;
	public $displayName;
	public $etag;
	public $id;
	public $kind;
	protected $peopleType     = 'GoogleGAL_Service_PlusDomains_CirclePeople';
	protected $peopleDataType = '';
	public $selfLink;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setPeople( GoogleGAL_Service_PlusDomains_CirclePeople $people ) {
		$this->people = $people;
	}
	public function getPeople() {
		return $this->people;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
}

class GoogleGAL_Service_PlusDomains_CircleFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_Circle';
	protected $itemsDataType = 'array';
	public $kind;
	public $nextLink;
	public $nextPageToken;
	public $selfLink;
	public $title;
	public $totalItems;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextLink( $nextLink ) {
		$this->nextLink = $nextLink;
	}
	public function getNextLink() {
		return $this->nextLink;
	}
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_CirclePeople extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $totalItems;


	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_Comment extends GoogleGAL_Collection {

	protected $collection_key         = 'inReplyTo';
	protected $internal_gapi_mappings = array();
	protected $actorType              = 'GoogleGAL_Service_PlusDomains_CommentActor';
	protected $actorDataType          = '';
	public $etag;
	public $id;
	protected $inReplyToType     = 'GoogleGAL_Service_PlusDomains_CommentInReplyTo';
	protected $inReplyToDataType = 'array';
	public $kind;
	protected $objectType        = 'GoogleGAL_Service_PlusDomains_CommentObject';
	protected $objectDataType    = '';
	protected $plusonersType     = 'GoogleGAL_Service_PlusDomains_CommentPlusoners';
	protected $plusonersDataType = '';
	public $published;
	public $selfLink;
	public $updated;
	public $verb;


	public function setActor( GoogleGAL_Service_PlusDomains_CommentActor $actor ) {
		$this->actor = $actor;
	}
	public function getActor() {
		return $this->actor;
	}
	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInReplyTo( $inReplyTo ) {
		$this->inReplyTo = $inReplyTo;
	}
	public function getInReplyTo() {
		return $this->inReplyTo;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setObject( GoogleGAL_Service_PlusDomains_CommentObject $object ) {
		$this->object = $object;
	}
	public function getObject() {
		return $this->object;
	}
	public function setPlusoners( GoogleGAL_Service_PlusDomains_CommentPlusoners $plusoners ) {
		$this->plusoners = $plusoners;
	}
	public function getPlusoners() {
		return $this->plusoners;
	}
	public function setPublished( $published ) {
		$this->published = $published;
	}
	public function getPublished() {
		return $this->published;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setVerb( $verb ) {
		$this->verb = $verb;
	}
	public function getVerb() {
		return $this->verb;
	}
}

class GoogleGAL_Service_PlusDomains_CommentActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_CommentActorImage';
	protected $imageDataType = '';
	public $url;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_CommentActorImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_CommentActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_CommentFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	public $id;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_Comment';
	protected $itemsDataType = 'array';
	public $kind;
	public $nextLink;
	public $nextPageToken;
	public $title;
	public $updated;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextLink( $nextLink ) {
		$this->nextLink = $nextLink;
	}
	public function getNextLink() {
		return $this->nextLink;
	}
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
}

class GoogleGAL_Service_PlusDomains_CommentInReplyTo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $id;
	public $url;


	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_CommentObject extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $content;
	public $objectType;
	public $originalContent;


	public function setContent( $content ) {
		$this->content = $content;
	}
	public function getContent() {
		return $this->content;
	}
	public function setObjectType( $objectType ) {
		$this->objectType = $objectType;
	}
	public function getObjectType() {
		return $this->objectType;
	}
	public function setOriginalContent( $originalContent ) {
		$this->originalContent = $originalContent;
	}
	public function getOriginalContent() {
		return $this->originalContent;
	}
}

class GoogleGAL_Service_PlusDomains_CommentPlusoners extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $totalItems;


	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_Media extends GoogleGAL_Collection {

	protected $collection_key         = 'streams';
	protected $internal_gapi_mappings = array();
	protected $authorType             = 'GoogleGAL_Service_PlusDomains_MediaAuthor';
	protected $authorDataType         = '';
	public $displayName;
	public $etag;
	protected $exifType     = 'GoogleGAL_Service_PlusDomains_MediaExif';
	protected $exifDataType = '';
	public $height;
	public $id;
	public $kind;
	public $mediaCreatedTime;
	public $mediaUrl;
	public $published;
	public $sizeBytes;
	protected $streamsType     = 'GoogleGAL_Service_PlusDomains_Videostream';
	protected $streamsDataType = 'array';
	public $summary;
	public $updated;
	public $url;
	public $videoDuration;
	public $videoStatus;
	public $width;


	public function setAuthor( GoogleGAL_Service_PlusDomains_MediaAuthor $author ) {
		$this->author = $author;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setExif( GoogleGAL_Service_PlusDomains_MediaExif $exif ) {
		$this->exif = $exif;
	}
	public function getExif() {
		return $this->exif;
	}
	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMediaCreatedTime( $mediaCreatedTime ) {
		$this->mediaCreatedTime = $mediaCreatedTime;
	}
	public function getMediaCreatedTime() {
		return $this->mediaCreatedTime;
	}
	public function setMediaUrl( $mediaUrl ) {
		$this->mediaUrl = $mediaUrl;
	}
	public function getMediaUrl() {
		return $this->mediaUrl;
	}
	public function setPublished( $published ) {
		$this->published = $published;
	}
	public function getPublished() {
		return $this->published;
	}
	public function setSizeBytes( $sizeBytes ) {
		$this->sizeBytes = $sizeBytes;
	}
	public function getSizeBytes() {
		return $this->sizeBytes;
	}
	public function setStreams( $streams ) {
		$this->streams = $streams;
	}
	public function getStreams() {
		return $this->streams;
	}
	public function setSummary( $summary ) {
		$this->summary = $summary;
	}
	public function getSummary() {
		return $this->summary;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setVideoDuration( $videoDuration ) {
		$this->videoDuration = $videoDuration;
	}
	public function getVideoDuration() {
		return $this->videoDuration;
	}
	public function setVideoStatus( $videoStatus ) {
		$this->videoStatus = $videoStatus;
	}
	public function getVideoStatus() {
		return $this->videoStatus;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_PlusDomains_MediaAuthor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_MediaAuthorImage';
	protected $imageDataType = '';
	public $url;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_MediaAuthorImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_MediaAuthorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_MediaExif extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $time;


	public function setTime( $time ) {
		$this->time = $time;
	}
	public function getTime() {
		return $this->time;
	}
}

class GoogleGAL_Service_PlusDomains_PeopleFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_PlusDomains_Person';
	protected $itemsDataType = 'array';
	public $kind;
	public $nextPageToken;
	public $selfLink;
	public $title;
	public $totalItems;


	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_PlusDomains_Person extends GoogleGAL_Collection {

	protected $collection_key         = 'urls';
	protected $internal_gapi_mappings = array();
	public $aboutMe;
	public $birthday;
	public $braggingRights;
	public $circledByCount;
	protected $coverType     = 'GoogleGAL_Service_PlusDomains_PersonCover';
	protected $coverDataType = '';
	public $currentLocation;
	public $displayName;
	public $domain;
	protected $emailsType     = 'GoogleGAL_Service_PlusDomains_PersonEmails';
	protected $emailsDataType = 'array';
	public $etag;
	public $gender;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_PlusDomains_PersonImage';
	protected $imageDataType = '';
	public $isPlusUser;
	public $kind;
	protected $nameType     = 'GoogleGAL_Service_PlusDomains_PersonName';
	protected $nameDataType = '';
	public $nickname;
	public $objectType;
	public $occupation;
	protected $organizationsType     = 'GoogleGAL_Service_PlusDomains_PersonOrganizations';
	protected $organizationsDataType = 'array';
	protected $placesLivedType       = 'GoogleGAL_Service_PlusDomains_PersonPlacesLived';
	protected $placesLivedDataType   = 'array';
	public $plusOneCount;
	public $relationshipStatus;
	public $skills;
	public $tagline;
	public $url;
	protected $urlsType     = 'GoogleGAL_Service_PlusDomains_PersonUrls';
	protected $urlsDataType = 'array';
	public $verified;


	public function setAboutMe( $aboutMe ) {
		$this->aboutMe = $aboutMe;
	}
	public function getAboutMe() {
		return $this->aboutMe;
	}
	public function setBirthday( $birthday ) {
		$this->birthday = $birthday;
	}
	public function getBirthday() {
		return $this->birthday;
	}
	public function setBraggingRights( $braggingRights ) {
		$this->braggingRights = $braggingRights;
	}
	public function getBraggingRights() {
		return $this->braggingRights;
	}
	public function setCircledByCount( $circledByCount ) {
		$this->circledByCount = $circledByCount;
	}
	public function getCircledByCount() {
		return $this->circledByCount;
	}
	public function setCover( GoogleGAL_Service_PlusDomains_PersonCover $cover ) {
		$this->cover = $cover;
	}
	public function getCover() {
		return $this->cover;
	}
	public function setCurrentLocation( $currentLocation ) {
		$this->currentLocation = $currentLocation;
	}
	public function getCurrentLocation() {
		return $this->currentLocation;
	}
	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setDomain( $domain ) {
		$this->domain = $domain;
	}
	public function getDomain() {
		return $this->domain;
	}
	public function setEmails( $emails ) {
		$this->emails = $emails;
	}
	public function getEmails() {
		return $this->emails;
	}
	public function setEtag( $etag ) {
		$this->etag = $etag;
	}
	public function getEtag() {
		return $this->etag;
	}
	public function setGender( $gender ) {
		$this->gender = $gender;
	}
	public function getGender() {
		return $this->gender;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImage( GoogleGAL_Service_PlusDomains_PersonImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setIsPlusUser( $isPlusUser ) {
		$this->isPlusUser = $isPlusUser;
	}
	public function getIsPlusUser() {
		return $this->isPlusUser;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( GoogleGAL_Service_PlusDomains_PersonName $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setNickname( $nickname ) {
		$this->nickname = $nickname;
	}
	public function getNickname() {
		return $this->nickname;
	}
	public function setObjectType( $objectType ) {
		$this->objectType = $objectType;
	}
	public function getObjectType() {
		return $this->objectType;
	}
	public function setOccupation( $occupation ) {
		$this->occupation = $occupation;
	}
	public function getOccupation() {
		return $this->occupation;
	}
	public function setOrganizations( $organizations ) {
		$this->organizations = $organizations;
	}
	public function getOrganizations() {
		return $this->organizations;
	}
	public function setPlacesLived( $placesLived ) {
		$this->placesLived = $placesLived;
	}
	public function getPlacesLived() {
		return $this->placesLived;
	}
	public function setPlusOneCount( $plusOneCount ) {
		$this->plusOneCount = $plusOneCount;
	}
	public function getPlusOneCount() {
		return $this->plusOneCount;
	}
	public function setRelationshipStatus( $relationshipStatus ) {
		$this->relationshipStatus = $relationshipStatus;
	}
	public function getRelationshipStatus() {
		return $this->relationshipStatus;
	}
	public function setSkills( $skills ) {
		$this->skills = $skills;
	}
	public function getSkills() {
		return $this->skills;
	}
	public function setTagline( $tagline ) {
		$this->tagline = $tagline;
	}
	public function getTagline() {
		return $this->tagline;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setUrls( $urls ) {
		$this->urls = $urls;
	}
	public function getUrls() {
		return $this->urls;
	}
	public function setVerified( $verified ) {
		$this->verified = $verified;
	}
	public function getVerified() {
		return $this->verified;
	}
}

class GoogleGAL_Service_PlusDomains_PersonCover extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $coverInfoType          = 'GoogleGAL_Service_PlusDomains_PersonCoverCoverInfo';
	protected $coverInfoDataType      = '';
	protected $coverPhotoType         = 'GoogleGAL_Service_PlusDomains_PersonCoverCoverPhoto';
	protected $coverPhotoDataType     = '';
	public $layout;


	public function setCoverInfo( GoogleGAL_Service_PlusDomains_PersonCoverCoverInfo $coverInfo ) {
		$this->coverInfo = $coverInfo;
	}
	public function getCoverInfo() {
		return $this->coverInfo;
	}
	public function setCoverPhoto( GoogleGAL_Service_PlusDomains_PersonCoverCoverPhoto $coverPhoto ) {
		$this->coverPhoto = $coverPhoto;
	}
	public function getCoverPhoto() {
		return $this->coverPhoto;
	}
	public function setLayout( $layout ) {
		$this->layout = $layout;
	}
	public function getLayout() {
		return $this->layout;
	}
}

class GoogleGAL_Service_PlusDomains_PersonCoverCoverInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $leftImageOffset;
	public $topImageOffset;


	public function setLeftImageOffset( $leftImageOffset ) {
		$this->leftImageOffset = $leftImageOffset;
	}
	public function getLeftImageOffset() {
		return $this->leftImageOffset;
	}
	public function setTopImageOffset( $topImageOffset ) {
		$this->topImageOffset = $topImageOffset;
	}
	public function getTopImageOffset() {
		return $this->topImageOffset;
	}
}

class GoogleGAL_Service_PlusDomains_PersonCoverCoverPhoto extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $url;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_PlusDomains_PersonEmails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $type;
	public $value;


	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setValue( $value ) {
		$this->value = $value;
	}
	public function getValue() {
		return $this->value;
	}
}

class GoogleGAL_Service_PlusDomains_PersonImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $isDefault;
	public $url;


	public function setIsDefault( $isDefault ) {
		$this->isDefault = $isDefault;
	}
	public function getIsDefault() {
		return $this->isDefault;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_PlusDomains_PersonName extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $familyName;
	public $formatted;
	public $givenName;
	public $honorificPrefix;
	public $honorificSuffix;
	public $middleName;


	public function setFamilyName( $familyName ) {
		$this->familyName = $familyName;
	}
	public function getFamilyName() {
		return $this->familyName;
	}
	public function setFormatted( $formatted ) {
		$this->formatted = $formatted;
	}
	public function getFormatted() {
		return $this->formatted;
	}
	public function setGivenName( $givenName ) {
		$this->givenName = $givenName;
	}
	public function getGivenName() {
		return $this->givenName;
	}
	public function setHonorificPrefix( $honorificPrefix ) {
		$this->honorificPrefix = $honorificPrefix;
	}
	public function getHonorificPrefix() {
		return $this->honorificPrefix;
	}
	public function setHonorificSuffix( $honorificSuffix ) {
		$this->honorificSuffix = $honorificSuffix;
	}
	public function getHonorificSuffix() {
		return $this->honorificSuffix;
	}
	public function setMiddleName( $middleName ) {
		$this->middleName = $middleName;
	}
	public function getMiddleName() {
		return $this->middleName;
	}
}

class GoogleGAL_Service_PlusDomains_PersonOrganizations extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $department;
	public $description;
	public $endDate;
	public $location;
	public $name;
	public $primary;
	public $startDate;
	public $title;
	public $type;


	public function setDepartment( $department ) {
		$this->department = $department;
	}
	public function getDepartment() {
		return $this->department;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setEndDate( $endDate ) {
		$this->endDate = $endDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function setLocation( $location ) {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setPrimary( $primary ) {
		$this->primary = $primary;
	}
	public function getPrimary() {
		return $this->primary;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_PlusDomains_PersonPlacesLived extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $primary;
	public $value;


	public function setPrimary( $primary ) {
		$this->primary = $primary;
	}
	public function getPrimary() {
		return $this->primary;
	}
	public function setValue( $value ) {
		$this->value = $value;
	}
	public function getValue() {
		return $this->value;
	}
}

class GoogleGAL_Service_PlusDomains_PersonUrls extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $label;
	public $type;
	public $value;


	public function setLabel( $label ) {
		$this->label = $label;
	}
	public function getLabel() {
		return $this->label;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setValue( $value ) {
		$this->value = $value;
	}
	public function getValue() {
		return $this->value;
	}
}

class GoogleGAL_Service_PlusDomains_Place extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $addressType            = 'GoogleGAL_Service_PlusDomains_PlaceAddress';
	protected $addressDataType        = '';
	public $displayName;
	public $id;
	public $kind;
	protected $positionType     = 'GoogleGAL_Service_PlusDomains_PlacePosition';
	protected $positionDataType = '';


	public function setAddress( GoogleGAL_Service_PlusDomains_PlaceAddress $address ) {
		$this->address = $address;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setPosition( GoogleGAL_Service_PlusDomains_PlacePosition $position ) {
		$this->position = $position;
	}
	public function getPosition() {
		return $this->position;
	}
}

class GoogleGAL_Service_PlusDomains_PlaceAddress extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $formatted;


	public function setFormatted( $formatted ) {
		$this->formatted = $formatted;
	}
	public function getFormatted() {
		return $this->formatted;
	}
}

class GoogleGAL_Service_PlusDomains_PlacePosition extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $latitude;
	public $longitude;


	public function setLatitude( $latitude ) {
		$this->latitude = $latitude;
	}
	public function getLatitude() {
		return $this->latitude;
	}
	public function setLongitude( $longitude ) {
		$this->longitude = $longitude;
	}
	public function getLongitude() {
		return $this->longitude;
	}
}

class GoogleGAL_Service_PlusDomains_PlusDomainsAclentryResource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	public $type;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_PlusDomains_Videostream extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $type;
	public $url;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}
