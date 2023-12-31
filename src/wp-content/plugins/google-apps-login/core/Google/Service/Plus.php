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
 * Service definition for Plus (v1).
 *
 * <p>
 * The Google+ API enables developers to build on top of the Google+ platform.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/+/api/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Plus extends GoogleGAL_Service {

	/** Know your basic profile info and list of people in your circles.. */
	const PLUS_LOGIN =
	  'https://www.googleapis.com/auth/plus.login';
	/** Know who you are on Google. */
	const PLUS_ME =
	  'https://www.googleapis.com/auth/plus.me';
	/** View your email address. */
	const USERINFO_EMAIL =
	  'https://www.googleapis.com/auth/userinfo.email';
	/** View your basic profile info. */
	const USERINFO_PROFILE =
	  'https://www.googleapis.com/auth/userinfo.profile';

	public $activities;
	public $comments;
	public $moments;
	public $people;


	/**
	 * Constructs the internal representation of the Plus service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'plus/v1/';
		$this->version     = 'v1';
		$this->serviceName = 'plus';

		$this->activities = new GoogleGAL_Service_Plus_Activities_Resource(
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
					'search' => array(
						'path'       => 'activities',
						'httpMethod' => 'GET',
						'parameters' => array(
							'query'      => array(
								'location' => 'query',
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
							'language'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->comments   = new GoogleGAL_Service_Plus_Comments_Resource(
			$this,
			$this->serviceName,
			'comments',
			array(
				'methods' => array(
					'get'  => array(
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
					'list' => array(
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
		$this->moments    = new GoogleGAL_Service_Plus_Moments_Resource(
			$this,
			$this->serviceName,
			'moments',
			array(
				'methods' => array(
					'insert' => array(
						'path'       => 'people/{userId}/moments/{collection}',
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
							'debug'      => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
						),
					),
					'list'   => array(
						'path'       => 'people/{userId}/moments/{collection}',
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
							'maxResults' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'pageToken'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'targetUrl'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'type'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'remove' => array(
						'path'       => 'moments/{id}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'id' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->people     = new GoogleGAL_Service_Plus_People_Resource(
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
					'search'         => array(
						'path'       => 'people',
						'httpMethod' => 'GET',
						'parameters' => array(
							'query'      => array(
								'location' => 'query',
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
							'language'   => array(
								'location' => 'query',
								'type'     => 'string',
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
 *   $plusService = new GoogleGAL_Service_Plus(...);
 *   $activities = $plusService->activities;
 *  </code>
 */
class GoogleGAL_Service_Plus_Activities_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get an activity. (activities.get)
	 *
	 * @param string $activityId The ID of the activity to get.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Plus_Activity
	 */
	public function get( $activityId, $optParams = array() ) {
		$params = array( 'activityId' => $activityId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Plus_Activity' );
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
	 * @return GoogleGAL_Service_Plus_ActivityFeed
	 */
	public function listActivities( $userId, $collection, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Plus_ActivityFeed' );
	}

	/**
	 * Search public activities. (activities.search)
	 *
	 * @param string $query Full-text search query string.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string orderBy Specifies how to order search results.
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response. This
	 * token can be of any length.
	 * @opt_param string maxResults The maximum number of activities to include in
	 * the response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @opt_param string language Specify the preferred language to search with. See
	 * search language codes for available values.
	 * @return GoogleGAL_Service_Plus_ActivityFeed
	 */
	public function search( $query, $optParams = array() ) {
		$params = array( 'query' => $query );
		$params = array_merge( $params, $optParams );
		return $this->call( 'search', array( $params ), 'GoogleGAL_Service_Plus_ActivityFeed' );
	}
}

/**
 * The "comments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new GoogleGAL_Service_Plus(...);
 *   $comments = $plusService->comments;
 *  </code>
 */
class GoogleGAL_Service_Plus_Comments_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get a comment. (comments.get)
	 *
	 * @param string $commentId The ID of the comment to get.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Plus_Comment
	 */
	public function get( $commentId, $optParams = array() ) {
		$params = array( 'commentId' => $commentId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Plus_Comment' );
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
	 * @return GoogleGAL_Service_Plus_CommentFeed
	 */
	public function listComments( $activityId, $optParams = array() ) {
		$params = array( 'activityId' => $activityId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Plus_CommentFeed' );
	}
}

/**
 * The "moments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new GoogleGAL_Service_Plus(...);
 *   $moments = $plusService->moments;
 *  </code>
 */
class GoogleGAL_Service_Plus_Moments_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Record a moment representing a user's action such as making a purchase or
	 * commenting on a blog. (moments.insert)
	 *
	 * @param string           $userId The ID of the user to record actions for. The only
	 *           valid values are "me" and the ID of the authenticated user.
	 * @param string           $collection The collection to which to write moments.
	 * @param GoogleGAL_Moment $postBody
	 * @param array            $optParams Optional parameters.
	 *
	 * @opt_param bool debug Return the moment as written. Should be used only for
	 * debugging.
	 * @return GoogleGAL_Service_Plus_Moment
	 */
	public function insert( $userId, $collection, GoogleGAL_Service_Plus_Moment $postBody, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
			'postBody'   => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Plus_Moment' );
	}

	/**
	 * List all of the moments for a particular user. (moments.listMoments)
	 *
	 * @param string $userId The ID of the user to get moments for. The special
	 * value "me" can be used to indicate the authenticated user.
	 * @param string $collection The collection of moments to list.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string maxResults The maximum number of moments to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response.
	 * @opt_param string targetUrl Only moments containing this targetUrl will be
	 * returned.
	 * @opt_param string type Only moments of this type will be returned.
	 * @return GoogleGAL_Service_Plus_MomentsFeed
	 */
	public function listMoments( $userId, $collection, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Plus_MomentsFeed' );
	}

	/**
	 * Delete a moment. (moments.remove)
	 *
	 * @param string $id The ID of the moment to delete.
	 * @param array  $optParams Optional parameters.
	 */
	public function remove( $id, $optParams = array() ) {
		$params = array( 'id' => $id );
		$params = array_merge( $params, $optParams );
		return $this->call( 'remove', array( $params ) );
	}
}

/**
 * The "people" collection of methods.
 * Typical usage is:
 *  <code>
 *   $plusService = new GoogleGAL_Service_Plus(...);
 *   $people = $plusService->people;
 *  </code>
 */
class GoogleGAL_Service_Plus_People_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Get a person's profile. If your app uses scope
	 * https://www.googleapis.com/auth/plus.login, this method is guaranteed to
	 * return ageRange and language. (people.get)
	 *
	 * @param string $userId The ID of the person to get the profile for. The
	 * special value "me" can be used to indicate the authenticated user.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Plus_Person
	 */
	public function get( $userId, $optParams = array() ) {
		$params = array( 'userId' => $userId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Plus_Person' );
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
	 * @return GoogleGAL_Service_Plus_PeopleFeed
	 */
	public function listPeople( $userId, $collection, $optParams = array() ) {
		$params = array(
			'userId'     => $userId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Plus_PeopleFeed' );
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
	 * @return GoogleGAL_Service_Plus_PeopleFeed
	 */
	public function listByActivity( $activityId, $collection, $optParams = array() ) {
		$params = array(
			'activityId' => $activityId,
			'collection' => $collection,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'listByActivity', array( $params ), 'GoogleGAL_Service_Plus_PeopleFeed' );
	}

	/**
	 * Search all public profiles. (people.search)
	 *
	 * @param string $query Specify a query string for full text search of public
	 * text in all profiles.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The continuation token, which is used to page
	 * through large result sets. To get the next page of results, set this
	 * parameter to the value of "nextPageToken" from the previous response. This
	 * token can be of any length.
	 * @opt_param string maxResults The maximum number of people to include in the
	 * response, which is used for paging. For any response, the actual number
	 * returned might be less than the specified maxResults.
	 * @opt_param string language Specify the preferred language to search with. See
	 * search language codes for available values.
	 * @return GoogleGAL_Service_Plus_PeopleFeed
	 */
	public function search( $query, $optParams = array() ) {
		$params = array( 'query' => $query );
		$params = array_merge( $params, $optParams );
		return $this->call( 'search', array( $params ), 'GoogleGAL_Service_Plus_PeopleFeed' );
	}
}




class GoogleGAL_Service_Plus_Acl extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $description;
	protected $itemsType     = 'GoogleGAL_Service_Plus_PlusAclentryResource';
	protected $itemsDataType = 'array';
	public $kind;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
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

class GoogleGAL_Service_Plus_Activity extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $accessType             = 'GoogleGAL_Service_Plus_Acl';
	protected $accessDataType         = '';
	protected $actorType              = 'GoogleGAL_Service_Plus_ActivityActor';
	protected $actorDataType          = '';
	public $address;
	public $annotation;
	public $crosspostSource;
	public $etag;
	public $geocode;
	public $id;
	public $kind;
	protected $locationType     = 'GoogleGAL_Service_Plus_Place';
	protected $locationDataType = '';
	protected $objectType       = 'GoogleGAL_Service_Plus_ActivityObject';
	protected $objectDataType   = '';
	public $placeId;
	public $placeName;
	protected $providerType     = 'GoogleGAL_Service_Plus_ActivityProvider';
	protected $providerDataType = '';
	public $published;
	public $radius;
	public $title;
	public $updated;
	public $url;
	public $verb;


	public function setAccess( GoogleGAL_Service_Plus_Acl $access ) {
		$this->access = $access;
	}
	public function getAccess() {
		return $this->access;
	}
	public function setActor( GoogleGAL_Service_Plus_ActivityActor $actor ) {
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
	public function setLocation( GoogleGAL_Service_Plus_Place $location ) {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
	public function setObject( GoogleGAL_Service_Plus_ActivityObject $object ) {
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
	public function setProvider( GoogleGAL_Service_Plus_ActivityProvider $provider ) {
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

class GoogleGAL_Service_Plus_ActivityActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_Plus_ActivityActorImage';
	protected $imageDataType = '';
	protected $nameType      = 'GoogleGAL_Service_Plus_ActivityActorName';
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
	public function setImage( GoogleGAL_Service_Plus_ActivityActorImage $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setName( GoogleGAL_Service_Plus_ActivityActorName $name ) {
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

class GoogleGAL_Service_Plus_ActivityActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Plus_ActivityActorName extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	public $id;
	protected $itemsType     = 'GoogleGAL_Service_Plus_Activity';
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

class GoogleGAL_Service_Plus_ActivityObject extends GoogleGAL_Collection {

	protected $collection_key         = 'attachments';
	protected $internal_gapi_mappings = array();
	protected $actorType              = 'GoogleGAL_Service_Plus_ActivityObjectActor';
	protected $actorDataType          = '';
	protected $attachmentsType        = 'GoogleGAL_Service_Plus_ActivityObjectAttachments';
	protected $attachmentsDataType    = 'array';
	public $content;
	public $id;
	public $objectType;
	public $originalContent;
	protected $plusonersType     = 'GoogleGAL_Service_Plus_ActivityObjectPlusoners';
	protected $plusonersDataType = '';
	protected $repliesType       = 'GoogleGAL_Service_Plus_ActivityObjectReplies';
	protected $repliesDataType   = '';
	protected $resharersType     = 'GoogleGAL_Service_Plus_ActivityObjectResharers';
	protected $resharersDataType = '';
	public $url;


	public function setActor( GoogleGAL_Service_Plus_ActivityObjectActor $actor ) {
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
	public function setPlusoners( GoogleGAL_Service_Plus_ActivityObjectPlusoners $plusoners ) {
		$this->plusoners = $plusoners;
	}
	public function getPlusoners() {
		return $this->plusoners;
	}
	public function setReplies( GoogleGAL_Service_Plus_ActivityObjectReplies $replies ) {
		$this->replies = $replies;
	}
	public function getReplies() {
		return $this->replies;
	}
	public function setResharers( GoogleGAL_Service_Plus_ActivityObjectResharers $resharers ) {
		$this->resharers = $resharers;
	}
	public function getResharers() {
		return $this->resharers;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Plus_ActivityObjectActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_Plus_ActivityObjectActorImage';
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
	public function setImage( GoogleGAL_Service_Plus_ActivityObjectActorImage $image ) {
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

class GoogleGAL_Service_Plus_ActivityObjectActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Plus_ActivityObjectAttachments extends GoogleGAL_Collection {

	protected $collection_key         = 'thumbnails';
	protected $internal_gapi_mappings = array();
	public $content;
	public $displayName;
	protected $embedType         = 'GoogleGAL_Service_Plus_ActivityObjectAttachmentsEmbed';
	protected $embedDataType     = '';
	protected $fullImageType     = 'GoogleGAL_Service_Plus_ActivityObjectAttachmentsFullImage';
	protected $fullImageDataType = '';
	public $id;
	protected $imageType     = 'GoogleGAL_Service_Plus_ActivityObjectAttachmentsImage';
	protected $imageDataType = '';
	public $objectType;
	protected $thumbnailsType     = 'GoogleGAL_Service_Plus_ActivityObjectAttachmentsThumbnails';
	protected $thumbnailsDataType = 'array';
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
	public function setEmbed( GoogleGAL_Service_Plus_ActivityObjectAttachmentsEmbed $embed ) {
		$this->embed = $embed;
	}
	public function getEmbed() {
		return $this->embed;
	}
	public function setFullImage( GoogleGAL_Service_Plus_ActivityObjectAttachmentsFullImage $fullImage ) {
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
	public function setImage( GoogleGAL_Service_Plus_ActivityObjectAttachmentsImage $image ) {
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

class GoogleGAL_Service_Plus_ActivityObjectAttachmentsEmbed extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectAttachmentsFullImage extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectAttachmentsImage extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectAttachmentsThumbnails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $description;
	protected $imageType     = 'GoogleGAL_Service_Plus_ActivityObjectAttachmentsThumbnailsImage';
	protected $imageDataType = '';
	public $url;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setImage( GoogleGAL_Service_Plus_ActivityObjectAttachmentsThumbnailsImage $image ) {
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

class GoogleGAL_Service_Plus_ActivityObjectAttachmentsThumbnailsImage extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectPlusoners extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectReplies extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityObjectResharers extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_ActivityProvider extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $title;


	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
}

class GoogleGAL_Service_Plus_Comment extends GoogleGAL_Collection {

	protected $collection_key         = 'inReplyTo';
	protected $internal_gapi_mappings = array();
	protected $actorType              = 'GoogleGAL_Service_Plus_CommentActor';
	protected $actorDataType          = '';
	public $etag;
	public $id;
	protected $inReplyToType     = 'GoogleGAL_Service_Plus_CommentInReplyTo';
	protected $inReplyToDataType = 'array';
	public $kind;
	protected $objectType        = 'GoogleGAL_Service_Plus_CommentObject';
	protected $objectDataType    = '';
	protected $plusonersType     = 'GoogleGAL_Service_Plus_CommentPlusoners';
	protected $plusonersDataType = '';
	public $published;
	public $selfLink;
	public $updated;
	public $verb;


	public function setActor( GoogleGAL_Service_Plus_CommentActor $actor ) {
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
	public function setObject( GoogleGAL_Service_Plus_CommentObject $object ) {
		$this->object = $object;
	}
	public function getObject() {
		return $this->object;
	}
	public function setPlusoners( GoogleGAL_Service_Plus_CommentPlusoners $plusoners ) {
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

class GoogleGAL_Service_Plus_CommentActor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_Plus_CommentActorImage';
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
	public function setImage( GoogleGAL_Service_Plus_CommentActorImage $image ) {
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

class GoogleGAL_Service_Plus_CommentActorImage extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $url;


	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Plus_CommentFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	public $id;
	protected $itemsType     = 'GoogleGAL_Service_Plus_Comment';
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

class GoogleGAL_Service_Plus_CommentInReplyTo extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_CommentObject extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_CommentPlusoners extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $totalItems;


	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_Plus_ItemScope extends GoogleGAL_Collection {

	protected $collection_key         = 'performers';
	protected $internal_gapi_mappings = array(
		'associatedMedia' => 'associated_media',
	);
	protected $aboutType              = 'GoogleGAL_Service_Plus_ItemScope';
	protected $aboutDataType          = '';
	public $additionalName;
	protected $addressType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $addressDataType = '';
	public $addressCountry;
	public $addressLocality;
	public $addressRegion;
	protected $associatedMediaType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $associatedMediaDataType = 'array';
	public $attendeeCount;
	protected $attendeesType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $attendeesDataType = 'array';
	protected $audioType         = 'GoogleGAL_Service_Plus_ItemScope';
	protected $audioDataType     = '';
	protected $authorType        = 'GoogleGAL_Service_Plus_ItemScope';
	protected $authorDataType    = 'array';
	public $bestRating;
	public $birthDate;
	protected $byArtistType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $byArtistDataType = '';
	public $caption;
	public $contentSize;
	public $contentUrl;
	protected $contributorType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $contributorDataType = 'array';
	public $dateCreated;
	public $dateModified;
	public $datePublished;
	public $description;
	public $duration;
	public $embedUrl;
	public $endDate;
	public $familyName;
	public $gender;
	protected $geoType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $geoDataType = '';
	public $givenName;
	public $height;
	public $id;
	public $image;
	protected $inAlbumType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $inAlbumDataType = '';
	public $kind;
	public $latitude;
	protected $locationType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $locationDataType = '';
	public $longitude;
	public $name;
	protected $partOfTVSeriesType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $partOfTVSeriesDataType = '';
	protected $performersType         = 'GoogleGAL_Service_Plus_ItemScope';
	protected $performersDataType     = 'array';
	public $playerType;
	public $postOfficeBoxNumber;
	public $postalCode;
	public $ratingValue;
	protected $reviewRatingType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $reviewRatingDataType = '';
	public $startDate;
	public $streetAddress;
	public $text;
	protected $thumbnailType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $thumbnailDataType = '';
	public $thumbnailUrl;
	public $tickerSymbol;
	public $type;
	public $url;
	public $width;
	public $worstRating;


	public function setAbout( GoogleGAL_Service_Plus_ItemScope $about ) {
		$this->about = $about;
	}
	public function getAbout() {
		return $this->about;
	}
	public function setAdditionalName( $additionalName ) {
		$this->additionalName = $additionalName;
	}
	public function getAdditionalName() {
		return $this->additionalName;
	}
	public function setAddress( GoogleGAL_Service_Plus_ItemScope $address ) {
		$this->address = $address;
	}
	public function getAddress() {
		return $this->address;
	}
	public function setAddressCountry( $addressCountry ) {
		$this->addressCountry = $addressCountry;
	}
	public function getAddressCountry() {
		return $this->addressCountry;
	}
	public function setAddressLocality( $addressLocality ) {
		$this->addressLocality = $addressLocality;
	}
	public function getAddressLocality() {
		return $this->addressLocality;
	}
	public function setAddressRegion( $addressRegion ) {
		$this->addressRegion = $addressRegion;
	}
	public function getAddressRegion() {
		return $this->addressRegion;
	}
	public function setAssociatedMedia( $associatedMedia ) {
		$this->associatedMedia = $associatedMedia;
	}
	public function getAssociatedMedia() {
		return $this->associatedMedia;
	}
	public function setAttendeeCount( $attendeeCount ) {
		$this->attendeeCount = $attendeeCount;
	}
	public function getAttendeeCount() {
		return $this->attendeeCount;
	}
	public function setAttendees( $attendees ) {
		$this->attendees = $attendees;
	}
	public function getAttendees() {
		return $this->attendees;
	}
	public function setAudio( GoogleGAL_Service_Plus_ItemScope $audio ) {
		$this->audio = $audio;
	}
	public function getAudio() {
		return $this->audio;
	}
	public function setAuthor( $author ) {
		$this->author = $author;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setBestRating( $bestRating ) {
		$this->bestRating = $bestRating;
	}
	public function getBestRating() {
		return $this->bestRating;
	}
	public function setBirthDate( $birthDate ) {
		$this->birthDate = $birthDate;
	}
	public function getBirthDate() {
		return $this->birthDate;
	}
	public function setByArtist( GoogleGAL_Service_Plus_ItemScope $byArtist ) {
		$this->byArtist = $byArtist;
	}
	public function getByArtist() {
		return $this->byArtist;
	}
	public function setCaption( $caption ) {
		$this->caption = $caption;
	}
	public function getCaption() {
		return $this->caption;
	}
	public function setContentSize( $contentSize ) {
		$this->contentSize = $contentSize;
	}
	public function getContentSize() {
		return $this->contentSize;
	}
	public function setContentUrl( $contentUrl ) {
		$this->contentUrl = $contentUrl;
	}
	public function getContentUrl() {
		return $this->contentUrl;
	}
	public function setContributor( $contributor ) {
		$this->contributor = $contributor;
	}
	public function getContributor() {
		return $this->contributor;
	}
	public function setDateCreated( $dateCreated ) {
		$this->dateCreated = $dateCreated;
	}
	public function getDateCreated() {
		return $this->dateCreated;
	}
	public function setDateModified( $dateModified ) {
		$this->dateModified = $dateModified;
	}
	public function getDateModified() {
		return $this->dateModified;
	}
	public function setDatePublished( $datePublished ) {
		$this->datePublished = $datePublished;
	}
	public function getDatePublished() {
		return $this->datePublished;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setDuration( $duration ) {
		$this->duration = $duration;
	}
	public function getDuration() {
		return $this->duration;
	}
	public function setEmbedUrl( $embedUrl ) {
		$this->embedUrl = $embedUrl;
	}
	public function getEmbedUrl() {
		return $this->embedUrl;
	}
	public function setEndDate( $endDate ) {
		$this->endDate = $endDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function setFamilyName( $familyName ) {
		$this->familyName = $familyName;
	}
	public function getFamilyName() {
		return $this->familyName;
	}
	public function setGender( $gender ) {
		$this->gender = $gender;
	}
	public function getGender() {
		return $this->gender;
	}
	public function setGeo( GoogleGAL_Service_Plus_ItemScope $geo ) {
		$this->geo = $geo;
	}
	public function getGeo() {
		return $this->geo;
	}
	public function setGivenName( $givenName ) {
		$this->givenName = $givenName;
	}
	public function getGivenName() {
		return $this->givenName;
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
	public function setImage( $image ) {
		$this->image = $image;
	}
	public function getImage() {
		return $this->image;
	}
	public function setInAlbum( GoogleGAL_Service_Plus_ItemScope $inAlbum ) {
		$this->inAlbum = $inAlbum;
	}
	public function getInAlbum() {
		return $this->inAlbum;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLatitude( $latitude ) {
		$this->latitude = $latitude;
	}
	public function getLatitude() {
		return $this->latitude;
	}
	public function setLocation( GoogleGAL_Service_Plus_ItemScope $location ) {
		$this->location = $location;
	}
	public function getLocation() {
		return $this->location;
	}
	public function setLongitude( $longitude ) {
		$this->longitude = $longitude;
	}
	public function getLongitude() {
		return $this->longitude;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setPartOfTVSeries( GoogleGAL_Service_Plus_ItemScope $partOfTVSeries ) {
		$this->partOfTVSeries = $partOfTVSeries;
	}
	public function getPartOfTVSeries() {
		return $this->partOfTVSeries;
	}
	public function setPerformers( $performers ) {
		$this->performers = $performers;
	}
	public function getPerformers() {
		return $this->performers;
	}
	public function setPlayerType( $playerType ) {
		$this->playerType = $playerType;
	}
	public function getPlayerType() {
		return $this->playerType;
	}
	public function setPostOfficeBoxNumber( $postOfficeBoxNumber ) {
		$this->postOfficeBoxNumber = $postOfficeBoxNumber;
	}
	public function getPostOfficeBoxNumber() {
		return $this->postOfficeBoxNumber;
	}
	public function setPostalCode( $postalCode ) {
		$this->postalCode = $postalCode;
	}
	public function getPostalCode() {
		return $this->postalCode;
	}
	public function setRatingValue( $ratingValue ) {
		$this->ratingValue = $ratingValue;
	}
	public function getRatingValue() {
		return $this->ratingValue;
	}
	public function setReviewRating( GoogleGAL_Service_Plus_ItemScope $reviewRating ) {
		$this->reviewRating = $reviewRating;
	}
	public function getReviewRating() {
		return $this->reviewRating;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setStreetAddress( $streetAddress ) {
		$this->streetAddress = $streetAddress;
	}
	public function getStreetAddress() {
		return $this->streetAddress;
	}
	public function setText( $text ) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
	public function setThumbnail( GoogleGAL_Service_Plus_ItemScope $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}
	public function getThumbnail() {
		return $this->thumbnail;
	}
	public function setThumbnailUrl( $thumbnailUrl ) {
		$this->thumbnailUrl = $thumbnailUrl;
	}
	public function getThumbnailUrl() {
		return $this->thumbnailUrl;
	}
	public function setTickerSymbol( $tickerSymbol ) {
		$this->tickerSymbol = $tickerSymbol;
	}
	public function getTickerSymbol() {
		return $this->tickerSymbol;
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
	public function setWorstRating( $worstRating ) {
		$this->worstRating = $worstRating;
	}
	public function getWorstRating() {
		return $this->worstRating;
	}
}

class GoogleGAL_Service_Plus_Moment extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $id;
	public $kind;
	protected $objectType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $objectDataType = '';
	protected $resultType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $resultDataType = '';
	public $startDate;
	protected $targetType     = 'GoogleGAL_Service_Plus_ItemScope';
	protected $targetDataType = '';
	public $type;


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
	public function setObject( GoogleGAL_Service_Plus_ItemScope $object ) {
		$this->object = $object;
	}
	public function getObject() {
		return $this->object;
	}
	public function setResult( GoogleGAL_Service_Plus_ItemScope $result ) {
		$this->result = $result;
	}
	public function getResult() {
		return $this->result;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setTarget( GoogleGAL_Service_Plus_ItemScope $target ) {
		$this->target = $target;
	}
	public function getTarget() {
		return $this->target;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Plus_MomentsFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_Plus_Moment';
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

class GoogleGAL_Service_Plus_PeopleFeed extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_Plus_Person';
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

class GoogleGAL_Service_Plus_Person extends GoogleGAL_Collection {

	protected $collection_key         = 'urls';
	protected $internal_gapi_mappings = array();
	public $aboutMe;
	protected $ageRangeType     = 'GoogleGAL_Service_Plus_PersonAgeRange';
	protected $ageRangeDataType = '';
	public $birthday;
	public $braggingRights;
	public $circledByCount;
	protected $coverType     = 'GoogleGAL_Service_Plus_PersonCover';
	protected $coverDataType = '';
	public $currentLocation;
	public $displayName;
	public $domain;
	protected $emailsType     = 'GoogleGAL_Service_Plus_PersonEmails';
	protected $emailsDataType = 'array';
	public $etag;
	public $gender;
	public $id;
	protected $imageType     = 'GoogleGAL_Service_Plus_PersonImage';
	protected $imageDataType = '';
	public $isPlusUser;
	public $kind;
	public $language;
	protected $nameType     = 'GoogleGAL_Service_Plus_PersonName';
	protected $nameDataType = '';
	public $nickname;
	public $objectType;
	public $occupation;
	protected $organizationsType     = 'GoogleGAL_Service_Plus_PersonOrganizations';
	protected $organizationsDataType = 'array';
	protected $placesLivedType       = 'GoogleGAL_Service_Plus_PersonPlacesLived';
	protected $placesLivedDataType   = 'array';
	public $plusOneCount;
	public $relationshipStatus;
	public $skills;
	public $tagline;
	public $url;
	protected $urlsType     = 'GoogleGAL_Service_Plus_PersonUrls';
	protected $urlsDataType = 'array';
	public $verified;


	public function setAboutMe( $aboutMe ) {
		$this->aboutMe = $aboutMe;
	}
	public function getAboutMe() {
		return $this->aboutMe;
	}
	public function setAgeRange( GoogleGAL_Service_Plus_PersonAgeRange $ageRange ) {
		$this->ageRange = $ageRange;
	}
	public function getAgeRange() {
		return $this->ageRange;
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
	public function setCover( GoogleGAL_Service_Plus_PersonCover $cover ) {
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
	public function setImage( GoogleGAL_Service_Plus_PersonImage $image ) {
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
	public function setLanguage( $language ) {
		$this->language = $language;
	}
	public function getLanguage() {
		return $this->language;
	}
	public function setName( GoogleGAL_Service_Plus_PersonName $name ) {
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

class GoogleGAL_Service_Plus_PersonAgeRange extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $max;
	public $min;


	public function setMax( $max ) {
		$this->max = $max;
	}
	public function getMax() {
		return $this->max;
	}
	public function setMin( $min ) {
		$this->min = $min;
	}
	public function getMin() {
		return $this->min;
	}
}

class GoogleGAL_Service_Plus_PersonCover extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $coverInfoType          = 'GoogleGAL_Service_Plus_PersonCoverCoverInfo';
	protected $coverInfoDataType      = '';
	protected $coverPhotoType         = 'GoogleGAL_Service_Plus_PersonCoverCoverPhoto';
	protected $coverPhotoDataType     = '';
	public $layout;


	public function setCoverInfo( GoogleGAL_Service_Plus_PersonCoverCoverInfo $coverInfo ) {
		$this->coverInfo = $coverInfo;
	}
	public function getCoverInfo() {
		return $this->coverInfo;
	}
	public function setCoverPhoto( GoogleGAL_Service_Plus_PersonCoverCoverPhoto $coverPhoto ) {
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

class GoogleGAL_Service_Plus_PersonCoverCoverInfo extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonCoverCoverPhoto extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonEmails extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonImage extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonName extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonOrganizations extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonPlacesLived extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PersonUrls extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_Place extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $addressType            = 'GoogleGAL_Service_Plus_PlaceAddress';
	protected $addressDataType        = '';
	public $displayName;
	public $id;
	public $kind;
	protected $positionType     = 'GoogleGAL_Service_Plus_PlacePosition';
	protected $positionDataType = '';


	public function setAddress( GoogleGAL_Service_Plus_PlaceAddress $address ) {
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
	public function setPosition( GoogleGAL_Service_Plus_PlacePosition $position ) {
		$this->position = $position;
	}
	public function getPosition() {
		return $this->position;
	}
}

class GoogleGAL_Service_Plus_PlaceAddress extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $formatted;


	public function setFormatted( $formatted ) {
		$this->formatted = $formatted;
	}
	public function getFormatted() {
		return $this->formatted;
	}
}

class GoogleGAL_Service_Plus_PlacePosition extends GoogleGAL_Model {

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

class GoogleGAL_Service_Plus_PlusAclentryResource extends GoogleGAL_Model {

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
