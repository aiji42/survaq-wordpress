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
 * Service definition for Analytics (v3).
 *
 * <p>
 * View and manage your Google Analytics data</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/analytics/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Analytics extends GoogleGAL_Service {

	/** View and manage your Google Analytics data. */
	const ANALYTICS =
	  'https://www.googleapis.com/auth/analytics';
	/** Edit Google Analytics management entities. */
	const ANALYTICS_EDIT =
	  'https://www.googleapis.com/auth/analytics.edit';
	/** Manage Google Analytics Account users by email address. */
	const ANALYTICS_MANAGE_USERS =
	  'https://www.googleapis.com/auth/analytics.manage.users';
	/** View Google Analytics user permissions. */
	const ANALYTICS_MANAGE_USERS_READONLY =
	  'https://www.googleapis.com/auth/analytics.manage.users.readonly';
	/** Create a new Google Analytics account along with its default property and view. */
	const ANALYTICS_PROVISION =
	  'https://www.googleapis.com/auth/analytics.provision';
	/** View your Google Analytics data. */
	const ANALYTICS_READONLY =
	  'https://www.googleapis.com/auth/analytics.readonly';

	public $data_ga;
	public $data_mcf;
	public $data_realtime;
	public $management_accountSummaries;
	public $management_accountUserLinks;
	public $management_accounts;
	public $management_customDataSources;
	public $management_dailyUploads;
	public $management_experiments;
	public $management_filters;
	public $management_goals;
	public $management_profileFilterLinks;
	public $management_profileUserLinks;
	public $management_profiles;
	public $management_segments;
	public $management_unsampledReports;
	public $management_uploads;
	public $management_webPropertyAdWordsLinks;
	public $management_webproperties;
	public $management_webpropertyUserLinks;
	public $metadata_columns;
	public $provisioning;


	/**
	 * Constructs the internal representation of the Analytics service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'analytics/v3/';
		$this->version     = 'v3';
		$this->serviceName = 'analytics';

		$this->data_ga                            = new GoogleGAL_Service_Analytics_DataGa_Resource(
			$this,
			$this->serviceName,
			'ga',
			array(
				'methods' => array(
					'get' => array(
						'path'       => 'data/ga',
						'httpMethod' => 'GET',
						'parameters' => array(
							'ids'           => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'start-date'    => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'end-date'      => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'metrics'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'sort'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'dimensions'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'segment'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'samplingLevel' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'filters'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'output'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->data_mcf                           = new GoogleGAL_Service_Analytics_DataMcf_Resource(
			$this,
			$this->serviceName,
			'mcf',
			array(
				'methods' => array(
					'get' => array(
						'path'       => 'data/mcf',
						'httpMethod' => 'GET',
						'parameters' => array(
							'ids'           => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'start-date'    => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'end-date'      => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'metrics'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'sort'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'dimensions'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'samplingLevel' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'filters'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->data_realtime                      = new GoogleGAL_Service_Analytics_DataRealtime_Resource(
			$this,
			$this->serviceName,
			'realtime',
			array(
				'methods' => array(
					'get' => array(
						'path'       => 'data/realtime',
						'httpMethod' => 'GET',
						'parameters' => array(
							'ids'         => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'metrics'     => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'sort'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'dimensions'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'filters'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->management_accountSummaries        = new GoogleGAL_Service_Analytics_ManagementAccountSummaries_Resource(
			$this,
			$this->serviceName,
			'accountSummaries',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'management/accountSummaries',
						'httpMethod' => 'GET',
						'parameters' => array(
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->management_accountUserLinks        = new GoogleGAL_Service_Analytics_ManagementAccountUserLinks_Resource(
			$this,
			$this->serviceName,
			'accountUserLinks',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/entityUserLinks',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/entityUserLinks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/entityUserLinks/{linkId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_accounts                = new GoogleGAL_Service_Analytics_ManagementAccounts_Resource(
			$this,
			$this->serviceName,
			'accounts',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'management/accounts',
						'httpMethod' => 'GET',
						'parameters' => array(
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->management_customDataSources       = new GoogleGAL_Service_Analytics_ManagementCustomDataSources_Resource(
			$this,
			$this->serviceName,
			'customDataSources',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->management_dailyUploads            = new GoogleGAL_Service_Analytics_ManagementDailyUploads_Resource(
			$this,
			$this->serviceName,
			'dailyUploads',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'date'               => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'type'               => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'start-date'         => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'end-date'           => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'        => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'        => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'upload' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/dailyUploads/{date}/uploads',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'date'               => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'appendNumber'       => array(
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							),
							'type'               => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'reset'              => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
						),
					),
				),
			)
		);
		$this->management_experiments             = new GoogleGAL_Service_Analytics_ManagementExperiments_Resource(
			$this,
			$this->serviceName,
			'experiments',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'experimentId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'experimentId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'experimentId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/experiments/{experimentId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'experimentId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_filters                 = new GoogleGAL_Service_Analytics_ManagementFilters_Resource(
			$this,
			$this->serviceName,
			'filters',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/filters/{filterId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'filterId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/filters/{filterId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'filterId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/filters',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/filters',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/filters/{filterId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'filterId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/filters/{filterId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'filterId'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_goals                   = new GoogleGAL_Service_Analytics_ManagementGoals_Resource(
			$this,
			$this->serviceName,
			'goals',
			array(
				'methods' => array(
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'goalId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'goalId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/goals/{goalId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'goalId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_profileFilterLinks      = new GoogleGAL_Service_Analytics_ManagementProfileFilterLinks_Resource(
			$this,
			$this->serviceName,
			'profileFilterLinks',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/profileFilterLinks/{linkId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_profileUserLinks        = new GoogleGAL_Service_Analytics_ManagementProfileUserLinks_Resource(
			$this,
			$this->serviceName,
			'profileUserLinks',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/entityUserLinks/{linkId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_profiles                = new GoogleGAL_Service_Analytics_ManagementProfiles_Resource(
			$this,
			$this->serviceName,
			'profiles',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_segments                = new GoogleGAL_Service_Analytics_ManagementSegments_Resource(
			$this,
			$this->serviceName,
			'segments',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'management/segments',
						'httpMethod' => 'GET',
						'parameters' => array(
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->management_unsampledReports        = new GoogleGAL_Service_Analytics_ManagementUnsampledReports_Resource(
			$this,
			$this->serviceName,
			'unsampledReports',
			array(
				'methods' => array(
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports/{unsampledReportId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'         => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'         => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'unsampledReportId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/profiles/{profileId}/unsampledReports',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'profileId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->management_uploads                 = new GoogleGAL_Service_Analytics_ManagementUploads_Resource(
			$this,
			$this->serviceName,
			'uploads',
			array(
				'methods' => array(
					'deleteUploadData'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/deleteUploadData',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'               => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads/{uploadId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'uploadId'           => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'              => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'        => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'        => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'migrateDataImport' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/migrateDataImport',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'uploadData'        => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/customDataSources/{customDataSourceId}/uploads',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'customDataSourceId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_webPropertyAdWordsLinks = new GoogleGAL_Service_Analytics_ManagementWebPropertyAdWordsLinks_Resource(
			$this,
			$this->serviceName,
			'webPropertyAdWordsLinks',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'                => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'            => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyAdWordsLinkId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'                => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'            => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyAdWordsLinkId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'                => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'            => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyAdWordsLinkId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityAdWordsLinks/{webPropertyAdWordsLinkId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'                => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId'            => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyAdWordsLinkId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_webproperties           = new GoogleGAL_Service_Analytics_ManagementWebproperties_Resource(
			$this,
			$this->serviceName,
			'webproperties',
			array(
				'methods' => array(
					'get'    => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'patch'  => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
						'httpMethod' => 'PATCH',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->management_webpropertyUserLinks    = new GoogleGAL_Service_Analytics_ManagementWebpropertyUserLinks_Resource(
			$this,
			$this->serviceName,
			'webpropertyUserLinks',
			array(
				'methods' => array(
					'delete' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'insert' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
						'httpMethod' => 'POST',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'list'   => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'max-results'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'start-index'   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'update' => array(
						'path'       => 'management/accounts/{accountId}/webproperties/{webPropertyId}/entityUserLinks/{linkId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'accountId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'webPropertyId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'linkId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->metadata_columns                   = new GoogleGAL_Service_Analytics_MetadataColumns_Resource(
			$this,
			$this->serviceName,
			'columns',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'metadata/{reportType}/columns',
						'httpMethod' => 'GET',
						'parameters' => array(
							'reportType' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->provisioning                       = new GoogleGAL_Service_Analytics_Provisioning_Resource(
			$this,
			$this->serviceName,
			'provisioning',
			array(
				'methods' => array(
					'createAccountTicket' => array(
						'path'       => 'provisioning/createAccountTicket',
						'httpMethod' => 'POST',
						'parameters' => array(),
					),
				),
			)
		);
	}
}


/**
 * The "data" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $data = $analyticsService->data;
 *  </code>
 */
class GoogleGAL_Service_Analytics_Data_Resource extends GoogleGAL_Service_Resource {

}

/**
 * The "ga" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $ga = $analyticsService->ga;
 *  </code>
 */
class GoogleGAL_Service_Analytics_DataGa_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Returns Analytics data for a view (profile). (ga.get)
	 *
	 * @param string $ids Unique table ID for retrieving Analytics data. Table ID is
	 * of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
	 * @param string $startDate Start date for fetching Analytics data. Requests can
	 * specify a start date formatted as YYYY-MM-DD, or as a relative date (e.g.,
	 * today, yesterday, or 7daysAgo). The default value is 7daysAgo.
	 * @param string $endDate End date for fetching Analytics data. Request can
	 * should specify an end date formatted as YYYY-MM-DD, or as a relative date
	 * (e.g., today, yesterday, or 7daysAgo). The default value is yesterday.
	 * @param string $metrics A comma-separated list of Analytics metrics. E.g.,
	 * 'ga:sessions,ga:pageviews'. At least one metric must be specified.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of entries to include in this
	 * feed.
	 * @opt_param string sort A comma-separated list of dimensions or metrics that
	 * determine the sort order for Analytics data.
	 * @opt_param string dimensions A comma-separated list of Analytics dimensions.
	 * E.g., 'ga:browser,ga:city'.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @opt_param string segment An Analytics segment to be applied to data.
	 * @opt_param string samplingLevel The desired sampling level.
	 * @opt_param string filters A comma-separated list of dimension or metric
	 * filters to be applied to Analytics data.
	 * @opt_param string output The selected format for the response. Default format
	 * is JSON.
	 * @return GoogleGAL_Service_Analytics_GaData
	 */
	public function get( $ids, $startDate, $endDate, $metrics, $optParams = array() ) {
		$params = array(
			'ids'        => $ids,
			'start-date' => $startDate,
			'end-date'   => $endDate,
			'metrics'    => $metrics,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_GaData' );
	}
}
/**
 * The "mcf" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $mcf = $analyticsService->mcf;
 *  </code>
 */
class GoogleGAL_Service_Analytics_DataMcf_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Returns Analytics Multi-Channel Funnels data for a view (profile). (mcf.get)
	 *
	 * @param string $ids Unique table ID for retrieving Analytics data. Table ID is
	 * of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
	 * @param string $startDate Start date for fetching Analytics data. Requests can
	 * specify a start date formatted as YYYY-MM-DD, or as a relative date (e.g.,
	 * today, yesterday, or 7daysAgo). The default value is 7daysAgo.
	 * @param string $endDate End date for fetching Analytics data. Requests can
	 * specify a start date formatted as YYYY-MM-DD, or as a relative date (e.g.,
	 * today, yesterday, or 7daysAgo). The default value is 7daysAgo.
	 * @param string $metrics A comma-separated list of Multi-Channel Funnels
	 * metrics. E.g., 'mcf:totalConversions,mcf:totalConversionValue'. At least one
	 * metric must be specified.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of entries to include in this
	 * feed.
	 * @opt_param string sort A comma-separated list of dimensions or metrics that
	 * determine the sort order for the Analytics data.
	 * @opt_param string dimensions A comma-separated list of Multi-Channel Funnels
	 * dimensions. E.g., 'mcf:source,mcf:medium'.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @opt_param string samplingLevel The desired sampling level.
	 * @opt_param string filters A comma-separated list of dimension or metric
	 * filters to be applied to the Analytics data.
	 * @return GoogleGAL_Service_Analytics_McfData
	 */
	public function get( $ids, $startDate, $endDate, $metrics, $optParams = array() ) {
		$params = array(
			'ids'        => $ids,
			'start-date' => $startDate,
			'end-date'   => $endDate,
			'metrics'    => $metrics,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_McfData' );
	}
}
/**
 * The "realtime" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $realtime = $analyticsService->realtime;
 *  </code>
 */
class GoogleGAL_Service_Analytics_DataRealtime_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Returns real time data for a view (profile). (realtime.get)
	 *
	 * @param string $ids Unique table ID for retrieving real time data. Table ID is
	 * of the form ga:XXXX, where XXXX is the Analytics view (profile) ID.
	 * @param string $metrics A comma-separated list of real time metrics. E.g.,
	 * 'rt:activeUsers'. At least one metric must be specified.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of entries to include in this
	 * feed.
	 * @opt_param string sort A comma-separated list of dimensions or metrics that
	 * determine the sort order for real time data.
	 * @opt_param string dimensions A comma-separated list of real time dimensions.
	 * E.g., 'rt:medium,rt:city'.
	 * @opt_param string filters A comma-separated list of dimension or metric
	 * filters to be applied to real time data.
	 * @return GoogleGAL_Service_Analytics_RealtimeData
	 */
	public function get( $ids, $metrics, $optParams = array() ) {
		$params = array(
			'ids'     => $ids,
			'metrics' => $metrics,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_RealtimeData' );
	}
}

/**
 * The "management" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $management = $analyticsService->management;
 *  </code>
 */
class GoogleGAL_Service_Analytics_Management_Resource extends GoogleGAL_Service_Resource {

}

/**
 * The "accountSummaries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $accountSummaries = $analyticsService->accountSummaries;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementAccountSummaries_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Lists account summaries (lightweight tree comprised of
	 * accounts/properties/profiles) to which the user has access.
	 * (accountSummaries.listManagementAccountSummaries)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of account summaries to include
	 * in this response, where the largest acceptable value is 1000.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_AccountSummaries
	 */
	public function listManagementAccountSummaries( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_AccountSummaries' );
	}
}
/**
 * The "accountUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $accountUserLinks = $analyticsService->accountUserLinks;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementAccountUserLinks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Removes a user from the given account. (accountUserLinks.delete)
	 *
	 * @param string $accountId Account ID to delete the user link for.
	 * @param string $linkId Link ID to delete the user link for.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $linkId, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'linkId'    => $linkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Adds a new user to the given account. (accountUserLinks.insert)
	 *
	 * @param string                   $accountId Account ID to create the user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function insert( $accountId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}

	/**
	 * Lists account-user links for a given account.
	 * (accountUserLinks.listManagementAccountUserLinks)
	 *
	 * @param string $accountId Account ID to retrieve the user links for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of account-user links to
	 * include in this response.
	 * @opt_param int start-index An index of the first account-user link to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_EntityUserLinks
	 */
	public function listManagementAccountUserLinks( $accountId, $optParams = array() ) {
		$params = array( 'accountId' => $accountId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLinks' );
	}

	/**
	 * Updates permissions for an existing user on the given account.
	 * (accountUserLinks.update)
	 *
	 * @param string                   $accountId Account ID to update the account-user link for.
	 * @param string                   $linkId Link ID to update the account-user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function update( $accountId, $linkId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'linkId'    => $linkId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}
}
/**
 * The "accounts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $accounts = $analyticsService->accounts;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementAccounts_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Lists all accounts to which the user has access.
	 * (accounts.listManagementAccounts)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of accounts to include in this
	 * response.
	 * @opt_param int start-index An index of the first account to retrieve. Use
	 * this parameter as a pagination mechanism along with the max-results
	 * parameter.
	 * @return GoogleGAL_Service_Analytics_Accounts
	 */
	public function listManagementAccounts( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Accounts' );
	}
}
/**
 * The "customDataSources" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $customDataSources = $analyticsService->customDataSources;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementCustomDataSources_Resource extends GoogleGAL_Service_Resource {


	/**
	 * List custom data sources to which the user has access.
	 * (customDataSources.listManagementCustomDataSources)
	 *
	 * @param string $accountId Account Id for the custom data sources to retrieve.
	 * @param string $webPropertyId Web property Id for the custom data sources to
	 * retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of custom data sources to
	 * include in this response.
	 * @opt_param int start-index A 1-based index of the first custom data source to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_CustomDataSources
	 */
	public function listManagementCustomDataSources( $accountId, $webPropertyId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_CustomDataSources' );
	}
}
/**
 * The "dailyUploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $dailyUploads = $analyticsService->dailyUploads;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementDailyUploads_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Delete uploaded data for the given date. (dailyUploads.delete)
	 *
	 * @param string $accountId Account Id associated with daily upload delete.
	 * @param string $webPropertyId Web property Id associated with daily upload
	 * delete.
	 * @param string $customDataSourceId Custom data source Id associated with daily
	 * upload delete.
	 * @param string $date Date for which data is to be deleted. Date should be
	 * formatted as YYYY-MM-DD.
	 * @param string $type Type of data for this delete.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $customDataSourceId, $date, $type, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
			'date'               => $date,
			'type'               => $type,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * List daily uploads to which the user has access.
	 * (dailyUploads.listManagementDailyUploads)
	 *
	 * @param string $accountId Account Id for the daily uploads to retrieve.
	 * @param string $webPropertyId Web property Id for the daily uploads to
	 * retrieve.
	 * @param string $customDataSourceId Custom data source Id for daily uploads to
	 * retrieve.
	 * @param string $startDate Start date of the form YYYY-MM-DD.
	 * @param string $endDate End date of the form YYYY-MM-DD.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of custom data sources to
	 * include in this response.
	 * @opt_param int start-index A 1-based index of the first daily upload to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_DailyUploads
	 */
	public function listManagementDailyUploads( $accountId, $webPropertyId, $customDataSourceId, $startDate, $endDate, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
			'start-date'         => $startDate,
			'end-date'           => $endDate,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_DailyUploads' );
	}

	/**
	 * Update/Overwrite data for a custom data source. (dailyUploads.upload)
	 *
	 * @param string $accountId Account Id associated with daily upload.
	 * @param string $webPropertyId Web property Id associated with daily upload.
	 * @param string $customDataSourceId Custom data source Id to which the data
	 * being uploaded belongs.
	 * @param string $date Date for which data is uploaded. Date should be formatted
	 * as YYYY-MM-DD.
	 * @param int    $appendNumber Append number for this upload indexed from 1.
	 * @param string $type Type of data for this upload.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param bool reset Reset/Overwrite all previous appends for this date and
	 * start over with this file as the first upload.
	 * @return GoogleGAL_Service_Analytics_DailyUploadAppend
	 */
	public function upload( $accountId, $webPropertyId, $customDataSourceId, $date, $appendNumber, $type, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
			'date'               => $date,
			'appendNumber'       => $appendNumber,
			'type'               => $type,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'upload', array( $params ), 'GoogleGAL_Service_Analytics_DailyUploadAppend' );
	}
}
/**
 * The "experiments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $experiments = $analyticsService->experiments;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementExperiments_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Delete an experiment. (experiments.delete)
	 *
	 * @param string $accountId Account ID to which the experiment belongs
	 * @param string $webPropertyId Web property ID to which the experiment belongs
	 * @param string $profileId View (Profile) ID to which the experiment belongs
	 * @param string $experimentId ID of the experiment to delete
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $profileId, $experimentId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'experimentId'  => $experimentId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Returns an experiment to which the user has access. (experiments.get)
	 *
	 * @param string $accountId Account ID to retrieve the experiment for.
	 * @param string $webPropertyId Web property ID to retrieve the experiment for.
	 * @param string $profileId View (Profile) ID to retrieve the experiment for.
	 * @param string $experimentId Experiment ID to retrieve the experiment for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Experiment
	 */
	public function get( $accountId, $webPropertyId, $profileId, $experimentId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'experimentId'  => $experimentId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Experiment' );
	}

	/**
	 * Create a new experiment. (experiments.insert)
	 *
	 * @param string               $accountId Account ID to create the experiment for.
	 * @param string               $webPropertyId Web property ID to create the experiment for.
	 * @param string               $profileId View (Profile) ID to create the experiment for.
	 * @param GoogleGAL_Experiment $postBody
	 * @param array                $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Experiment
	 */
	public function insert( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_Experiment $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_Experiment' );
	}

	/**
	 * Lists experiments to which the user has access.
	 * (experiments.listManagementExperiments)
	 *
	 * @param string $accountId Account ID to retrieve experiments for.
	 * @param string $webPropertyId Web property ID to retrieve experiments for.
	 * @param string $profileId View (Profile) ID to retrieve experiments for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of experiments to include in
	 * this response.
	 * @opt_param int start-index An index of the first experiment to retrieve. Use
	 * this parameter as a pagination mechanism along with the max-results
	 * parameter.
	 * @return GoogleGAL_Service_Analytics_Experiments
	 */
	public function listManagementExperiments( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Experiments' );
	}

	/**
	 * Update an existing experiment. This method supports patch semantics.
	 * (experiments.patch)
	 *
	 * @param string               $accountId Account ID of the experiment to update.
	 * @param string               $webPropertyId Web property ID of the experiment to update.
	 * @param string               $profileId View (Profile) ID of the experiment to update.
	 * @param string               $experimentId Experiment ID of the experiment to update.
	 * @param GoogleGAL_Experiment $postBody
	 * @param array                $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Experiment
	 */
	public function patch( $accountId, $webPropertyId, $profileId, $experimentId, GoogleGAL_Service_Analytics_Experiment $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'experimentId'  => $experimentId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_Experiment' );
	}

	/**
	 * Update an existing experiment. (experiments.update)
	 *
	 * @param string               $accountId Account ID of the experiment to update.
	 * @param string               $webPropertyId Web property ID of the experiment to update.
	 * @param string               $profileId View (Profile) ID of the experiment to update.
	 * @param string               $experimentId Experiment ID of the experiment to update.
	 * @param GoogleGAL_Experiment $postBody
	 * @param array                $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Experiment
	 */
	public function update( $accountId, $webPropertyId, $profileId, $experimentId, GoogleGAL_Service_Analytics_Experiment $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'experimentId'  => $experimentId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_Experiment' );
	}
}
/**
 * The "filters" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $filters = $analyticsService->filters;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementFilters_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Delete a filter. (filters.delete)
	 *
	 * @param string $accountId Account ID to delete the filter for.
	 * @param string $filterId ID of the filter to be deleted.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Filter
	 */
	public function delete( $accountId, $filterId, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'filterId'  => $filterId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ), 'GoogleGAL_Service_Analytics_Filter' );
	}

	/**
	 * Returns a filters to which the user has access. (filters.get)
	 *
	 * @param string $accountId Account ID to retrieve filters for.
	 * @param string $filterId Filter ID to retrieve filters for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Filter
	 */
	public function get( $accountId, $filterId, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'filterId'  => $filterId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Filter' );
	}

	/**
	 * Create a new filter. (filters.insert)
	 *
	 * @param string           $accountId Account ID to create filter for.
	 * @param GoogleGAL_Filter $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Filter
	 */
	public function insert( $accountId, GoogleGAL_Service_Analytics_Filter $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_Filter' );
	}

	/**
	 * Lists all filters for an account (filters.listManagementFilters)
	 *
	 * @param string $accountId Account ID to retrieve filters for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of filters to include in this
	 * response.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_Filters
	 */
	public function listManagementFilters( $accountId, $optParams = array() ) {
		$params = array( 'accountId' => $accountId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Filters' );
	}

	/**
	 * Updates an existing filter. This method supports patch semantics.
	 * (filters.patch)
	 *
	 * @param string           $accountId Account ID to which the filter belongs.
	 * @param string           $filterId ID of the filter to be updated.
	 * @param GoogleGAL_Filter $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Filter
	 */
	public function patch( $accountId, $filterId, GoogleGAL_Service_Analytics_Filter $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'filterId'  => $filterId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_Filter' );
	}

	/**
	 * Updates an existing filter. (filters.update)
	 *
	 * @param string           $accountId Account ID to which the filter belongs.
	 * @param string           $filterId ID of the filter to be updated.
	 * @param GoogleGAL_Filter $postBody
	 * @param array            $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Filter
	 */
	public function update( $accountId, $filterId, GoogleGAL_Service_Analytics_Filter $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'filterId'  => $filterId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_Filter' );
	}
}
/**
 * The "goals" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $goals = $analyticsService->goals;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementGoals_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets a goal to which the user has access. (goals.get)
	 *
	 * @param string $accountId Account ID to retrieve the goal for.
	 * @param string $webPropertyId Web property ID to retrieve the goal for.
	 * @param string $profileId View (Profile) ID to retrieve the goal for.
	 * @param string $goalId Goal ID to retrieve the goal for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Goal
	 */
	public function get( $accountId, $webPropertyId, $profileId, $goalId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'goalId'        => $goalId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Goal' );
	}

	/**
	 * Create a new goal. (goals.insert)
	 *
	 * @param string         $accountId Account ID to create the goal for.
	 * @param string         $webPropertyId Web property ID to create the goal for.
	 * @param string         $profileId View (Profile) ID to create the goal for.
	 * @param GoogleGAL_Goal $postBody
	 * @param array          $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Goal
	 */
	public function insert( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_Goal $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_Goal' );
	}

	/**
	 * Lists goals to which the user has access. (goals.listManagementGoals)
	 *
	 * @param string $accountId Account ID to retrieve goals for. Can either be a
	 * specific account ID or '~all', which refers to all the accounts that user has
	 * access to.
	 * @param string $webPropertyId Web property ID to retrieve goals for. Can
	 * either be a specific web property ID or '~all', which refers to all the web
	 * properties that user has access to.
	 * @param string $profileId View (Profile) ID to retrieve goals for. Can either
	 * be a specific view (profile) ID or '~all', which refers to all the views
	 * (profiles) that user has access to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of goals to include in this
	 * response.
	 * @opt_param int start-index An index of the first goal to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_Goals
	 */
	public function listManagementGoals( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Goals' );
	}

	/**
	 * Updates an existing view (profile). This method supports patch semantics.
	 * (goals.patch)
	 *
	 * @param string         $accountId Account ID to update the goal.
	 * @param string         $webPropertyId Web property ID to update the goal.
	 * @param string         $profileId View (Profile) ID to update the goal.
	 * @param string         $goalId Index of the goal to be updated.
	 * @param GoogleGAL_Goal $postBody
	 * @param array          $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Goal
	 */
	public function patch( $accountId, $webPropertyId, $profileId, $goalId, GoogleGAL_Service_Analytics_Goal $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'goalId'        => $goalId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_Goal' );
	}

	/**
	 * Updates an existing view (profile). (goals.update)
	 *
	 * @param string         $accountId Account ID to update the goal.
	 * @param string         $webPropertyId Web property ID to update the goal.
	 * @param string         $profileId View (Profile) ID to update the goal.
	 * @param string         $goalId Index of the goal to be updated.
	 * @param GoogleGAL_Goal $postBody
	 * @param array          $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Goal
	 */
	public function update( $accountId, $webPropertyId, $profileId, $goalId, GoogleGAL_Service_Analytics_Goal $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'goalId'        => $goalId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_Goal' );
	}
}
/**
 * The "profileFilterLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $profileFilterLinks = $analyticsService->profileFilterLinks;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementProfileFilterLinks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Delete a profile filter link. (profileFilterLinks.delete)
	 *
	 * @param string $accountId Account ID to which the profile filter link belongs.
	 * @param string $webPropertyId Web property Id to which the profile filter link
	 * belongs.
	 * @param string $profileId Profile ID to which the filter link belongs.
	 * @param string $linkId ID of the profile filter link to delete.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $profileId, $linkId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Returns a single profile filter link. (profileFilterLinks.get)
	 *
	 * @param string $accountId Account ID to retrieve profile filter link for.
	 * @param string $webPropertyId Web property Id to retrieve profile filter link
	 * for.
	 * @param string $profileId Profile ID to retrieve filter link for.
	 * @param string $linkId ID of the profile filter link.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_ProfileFilterLink
	 */
	public function get( $accountId, $webPropertyId, $profileId, $linkId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_ProfileFilterLink' );
	}

	/**
	 * Create a new profile filter link. (profileFilterLinks.insert)
	 *
	 * @param string                      $accountId Account ID to create profile filter link for.
	 * @param string                      $webPropertyId Web property Id to create profile filter link
	 *                      for.
	 * @param string                      $profileId Profile ID to create filter link for.
	 * @param GoogleGAL_ProfileFilterLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_ProfileFilterLink
	 */
	public function insert( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_ProfileFilterLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_ProfileFilterLink' );
	}

	/**
	 * Lists all profile filter links for a profile.
	 * (profileFilterLinks.listManagementProfileFilterLinks)
	 *
	 * @param string $accountId Account ID to retrieve profile filter links for.
	 * @param string $webPropertyId Web property Id for profile filter links for.
	 * Can either be a specific web property ID or '~all', which refers to all the
	 * web properties that user has access to.
	 * @param string $profileId Profile ID to retrieve filter links for. Can either
	 * be a specific profile ID or '~all', which refers to all the profiles that
	 * user has access to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of profile filter links to
	 * include in this response.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_ProfileFilterLinks
	 */
	public function listManagementProfileFilterLinks( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_ProfileFilterLinks' );
	}

	/**
	 * Update an existing profile filter link. This method supports patch semantics.
	 * (profileFilterLinks.patch)
	 *
	 * @param string                      $accountId Account ID to which profile filter link belongs.
	 * @param string                      $webPropertyId Web property Id to which profile filter link
	 *                      belongs
	 * @param string                      $profileId Profile ID to which filter link belongs
	 * @param string                      $linkId ID of the profile filter link to be updated.
	 * @param GoogleGAL_ProfileFilterLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_ProfileFilterLink
	 */
	public function patch( $accountId, $webPropertyId, $profileId, $linkId, GoogleGAL_Service_Analytics_ProfileFilterLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_ProfileFilterLink' );
	}

	/**
	 * Update an existing profile filter link. (profileFilterLinks.update)
	 *
	 * @param string                      $accountId Account ID to which profile filter link belongs.
	 * @param string                      $webPropertyId Web property Id to which profile filter link
	 *                      belongs
	 * @param string                      $profileId Profile ID to which filter link belongs
	 * @param string                      $linkId ID of the profile filter link to be updated.
	 * @param GoogleGAL_ProfileFilterLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_ProfileFilterLink
	 */
	public function update( $accountId, $webPropertyId, $profileId, $linkId, GoogleGAL_Service_Analytics_ProfileFilterLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_ProfileFilterLink' );
	}
}
/**
 * The "profileUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $profileUserLinks = $analyticsService->profileUserLinks;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementProfileUserLinks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Removes a user from the given view (profile). (profileUserLinks.delete)
	 *
	 * @param string $accountId Account ID to delete the user link for.
	 * @param string $webPropertyId Web Property ID to delete the user link for.
	 * @param string $profileId View (Profile) ID to delete the user link for.
	 * @param string $linkId Link ID to delete the user link for.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $profileId, $linkId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Adds a new user to the given view (profile). (profileUserLinks.insert)
	 *
	 * @param string                   $accountId Account ID to create the user link for.
	 * @param string                   $webPropertyId Web Property ID to create the user link for.
	 * @param string                   $profileId View (Profile) ID to create the user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function insert( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}

	/**
	 * Lists profile-user links for a given view (profile).
	 * (profileUserLinks.listManagementProfileUserLinks)
	 *
	 * @param string $accountId Account ID which the given view (profile) belongs
	 * to.
	 * @param string $webPropertyId Web Property ID which the given view (profile)
	 * belongs to. Can either be a specific web property ID or '~all', which refers
	 * to all the web properties that user has access to.
	 * @param string $profileId View (Profile) ID to retrieve the profile-user links
	 * for. Can either be a specific profile ID or '~all', which refers to all the
	 * profiles that user has access to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of profile-user links to
	 * include in this response.
	 * @opt_param int start-index An index of the first profile-user link to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_EntityUserLinks
	 */
	public function listManagementProfileUserLinks( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLinks' );
	}

	/**
	 * Updates permissions for an existing user on the given view (profile).
	 * (profileUserLinks.update)
	 *
	 * @param string                   $accountId Account ID to update the user link for.
	 * @param string                   $webPropertyId Web Property ID to update the user link for.
	 * @param string                   $profileId View (Profile ID) to update the user link for.
	 * @param string                   $linkId Link ID to update the user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function update( $accountId, $webPropertyId, $profileId, $linkId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'linkId'        => $linkId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}
}
/**
 * The "profiles" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $profiles = $analyticsService->profiles;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementProfiles_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Deletes a view (profile). (profiles.delete)
	 *
	 * @param string $accountId Account ID to delete the view (profile) for.
	 * @param string $webPropertyId Web property ID to delete the view (profile)
	 * for.
	 * @param string $profileId ID of the view (profile) to be deleted.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Gets a view (profile) to which the user has access. (profiles.get)
	 *
	 * @param string $accountId Account ID to retrieve the goal for.
	 * @param string $webPropertyId Web property ID to retrieve the goal for.
	 * @param string $profileId View (Profile) ID to retrieve the goal for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Profile
	 */
	public function get( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Profile' );
	}

	/**
	 * Create a new view (profile). (profiles.insert)
	 *
	 * @param string            $accountId Account ID to create the view (profile) for.
	 * @param string            $webPropertyId Web property ID to create the view (profile)
	 *            for.
	 * @param GoogleGAL_Profile $postBody
	 * @param array             $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Profile
	 */
	public function insert( $accountId, $webPropertyId, GoogleGAL_Service_Analytics_Profile $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_Profile' );
	}

	/**
	 * Lists views (profiles) to which the user has access.
	 * (profiles.listManagementProfiles)
	 *
	 * @param string $accountId Account ID for the view (profiles) to retrieve. Can
	 * either be a specific account ID or '~all', which refers to all the accounts
	 * to which the user has access.
	 * @param string $webPropertyId Web property ID for the views (profiles) to
	 * retrieve. Can either be a specific web property ID or '~all', which refers to
	 * all the web properties to which the user has access.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of views (profiles) to include
	 * in this response.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_Profiles
	 */
	public function listManagementProfiles( $accountId, $webPropertyId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Profiles' );
	}

	/**
	 * Updates an existing view (profile). This method supports patch semantics.
	 * (profiles.patch)
	 *
	 * @param string            $accountId Account ID to which the view (profile) belongs
	 * @param string            $webPropertyId Web property ID to which the view (profile)
	 *            belongs
	 * @param string            $profileId ID of the view (profile) to be updated.
	 * @param GoogleGAL_Profile $postBody
	 * @param array             $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Profile
	 */
	public function patch( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_Profile $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_Profile' );
	}

	/**
	 * Updates an existing view (profile). (profiles.update)
	 *
	 * @param string            $accountId Account ID to which the view (profile) belongs
	 * @param string            $webPropertyId Web property ID to which the view (profile)
	 *            belongs
	 * @param string            $profileId ID of the view (profile) to be updated.
	 * @param GoogleGAL_Profile $postBody
	 * @param array             $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Profile
	 */
	public function update( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_Profile $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_Profile' );
	}
}
/**
 * The "segments" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $segments = $analyticsService->segments;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementSegments_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Lists segments to which the user has access.
	 * (segments.listManagementSegments)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of segments to include in this
	 * response.
	 * @opt_param int start-index An index of the first segment to retrieve. Use
	 * this parameter as a pagination mechanism along with the max-results
	 * parameter.
	 * @return GoogleGAL_Service_Analytics_Segments
	 */
	public function listManagementSegments( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Segments' );
	}
}
/**
 * The "unsampledReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $unsampledReports = $analyticsService->unsampledReports;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementUnsampledReports_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Returns a single unsampled report. (unsampledReports.get)
	 *
	 * @param string $accountId Account ID to retrieve unsampled report for.
	 * @param string $webPropertyId Web property ID to retrieve unsampled reports
	 * for.
	 * @param string $profileId View (Profile) ID to retrieve unsampled report for.
	 * @param string $unsampledReportId ID of the unsampled report to retrieve.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_UnsampledReport
	 */
	public function get( $accountId, $webPropertyId, $profileId, $unsampledReportId, $optParams = array() ) {
		$params = array(
			'accountId'         => $accountId,
			'webPropertyId'     => $webPropertyId,
			'profileId'         => $profileId,
			'unsampledReportId' => $unsampledReportId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_UnsampledReport' );
	}

	/**
	 * Create a new unsampled report. (unsampledReports.insert)
	 *
	 * @param string                    $accountId Account ID to create the unsampled report for.
	 * @param string                    $webPropertyId Web property ID to create the unsampled report
	 *                    for.
	 * @param string                    $profileId View (Profile) ID to create the unsampled report
	 *                    for.
	 * @param GoogleGAL_UnsampledReport $postBody
	 * @param array                     $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_UnsampledReport
	 */
	public function insert( $accountId, $webPropertyId, $profileId, GoogleGAL_Service_Analytics_UnsampledReport $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_UnsampledReport' );
	}

	/**
	 * Lists unsampled reports to which the user has access.
	 * (unsampledReports.listManagementUnsampledReports)
	 *
	 * @param string $accountId Account ID to retrieve unsampled reports for. Must
	 * be a specific account ID, ~all is not supported.
	 * @param string $webPropertyId Web property ID to retrieve unsampled reports
	 * for. Must be a specific web property ID, ~all is not supported.
	 * @param string $profileId View (Profile) ID to retrieve unsampled reports for.
	 * Must be a specific view (profile) ID, ~all is not supported.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of unsampled reports to include
	 * in this response.
	 * @opt_param int start-index An index of the first unsampled report to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_UnsampledReports
	 */
	public function listManagementUnsampledReports( $accountId, $webPropertyId, $profileId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'profileId'     => $profileId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_UnsampledReports' );
	}
}
/**
 * The "uploads" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $uploads = $analyticsService->uploads;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementUploads_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Delete data associated with a previous upload. (uploads.deleteUploadData)
	 *
	 * @param string                                               $accountId Account Id for the uploads to be deleted.
	 * @param string                                               $webPropertyId Web property Id for the uploads to be deleted.
	 * @param string                                               $customDataSourceId Custom data source Id for the uploads to be
	 *                                               deleted.
	 * @param GoogleGAL_AnalyticsDataimportDeleteUploadDataRequest $postBody
	 * @param array                                                $optParams Optional parameters.
	 */
	public function deleteUploadData( $accountId, $webPropertyId, $customDataSourceId, GoogleGAL_Service_Analytics_AnalyticsDataimportDeleteUploadDataRequest $postBody, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
			'postBody'           => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'deleteUploadData', array( $params ) );
	}

	/**
	 * List uploads to which the user has access. (uploads.get)
	 *
	 * @param string $accountId Account Id for the upload to retrieve.
	 * @param string $webPropertyId Web property Id for the upload to retrieve.
	 * @param string $customDataSourceId Custom data source Id for upload to
	 * retrieve.
	 * @param string $uploadId Upload Id to retrieve.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Upload
	 */
	public function get( $accountId, $webPropertyId, $customDataSourceId, $uploadId, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
			'uploadId'           => $uploadId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Upload' );
	}

	/**
	 * List uploads to which the user has access. (uploads.listManagementUploads)
	 *
	 * @param string $accountId Account Id for the uploads to retrieve.
	 * @param string $webPropertyId Web property Id for the uploads to retrieve.
	 * @param string $customDataSourceId Custom data source Id for uploads to
	 * retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of uploads to include in this
	 * response.
	 * @opt_param int start-index A 1-based index of the first upload to retrieve.
	 * Use this parameter as a pagination mechanism along with the max-results
	 * parameter.
	 * @return GoogleGAL_Service_Analytics_Uploads
	 */
	public function listManagementUploads( $accountId, $webPropertyId, $customDataSourceId, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Uploads' );
	}

	/**
	 * Migrate custom data source and data imports to latest version.
	 * (uploads.migrateDataImport)
	 *
	 * @param string $accountId Account Id for migration.
	 * @param string $webPropertyId Web property Id for migration.
	 * @param string $customDataSourceId Custom data source Id for migration.
	 * @param array  $optParams Optional parameters.
	 */
	public function migrateDataImport( $accountId, $webPropertyId, $customDataSourceId, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'migrateDataImport', array( $params ) );
	}

	/**
	 * Upload data for a custom data source. (uploads.uploadData)
	 *
	 * @param string $accountId Account Id associated with the upload.
	 * @param string $webPropertyId Web property UA-string associated with the
	 * upload.
	 * @param string $customDataSourceId Custom data source Id to which the data
	 * being uploaded belongs.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Upload
	 */
	public function uploadData( $accountId, $webPropertyId, $customDataSourceId, $optParams = array() ) {
		$params = array(
			'accountId'          => $accountId,
			'webPropertyId'      => $webPropertyId,
			'customDataSourceId' => $customDataSourceId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'uploadData', array( $params ), 'GoogleGAL_Service_Analytics_Upload' );
	}
}
/**
 * The "webPropertyAdWordsLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $webPropertyAdWordsLinks = $analyticsService->webPropertyAdWordsLinks;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementWebPropertyAdWordsLinks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Deletes a web property-AdWords link. (webPropertyAdWordsLinks.delete)
	 *
	 * @param string $accountId ID of the account which the given web property
	 * belongs to.
	 * @param string $webPropertyId Web property ID to delete the AdWords link for.
	 * @param string $webPropertyAdWordsLinkId Web property AdWords link ID.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array() ) {
		$params = array(
			'accountId'                => $accountId,
			'webPropertyId'            => $webPropertyId,
			'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Returns a web property-AdWords link to which the user has access.
	 * (webPropertyAdWordsLinks.get)
	 *
	 * @param string $accountId ID of the account which the given web property
	 * belongs to.
	 * @param string $webPropertyId Web property ID to retrieve the AdWords link
	 * for.
	 * @param string $webPropertyAdWordsLinkId Web property-AdWords link ID.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityAdWordsLink
	 */
	public function get( $accountId, $webPropertyId, $webPropertyAdWordsLinkId, $optParams = array() ) {
		$params = array(
			'accountId'                => $accountId,
			'webPropertyId'            => $webPropertyId,
			'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_EntityAdWordsLink' );
	}

	/**
	 * Creates a webProperty-AdWords link. (webPropertyAdWordsLinks.insert)
	 *
	 * @param string                      $accountId ID of the Google Analytics account to create the
	 *                      link for.
	 * @param string                      $webPropertyId Web property ID to create the link for.
	 * @param GoogleGAL_EntityAdWordsLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityAdWordsLink
	 */
	public function insert( $accountId, $webPropertyId, GoogleGAL_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_EntityAdWordsLink' );
	}

	/**
	 * Lists webProperty-AdWords links for a given web property.
	 * (webPropertyAdWordsLinks.listManagementWebPropertyAdWordsLinks)
	 *
	 * @param string $accountId ID of the account which the given web property
	 * belongs to.
	 * @param string $webPropertyId Web property ID to retrieve the AdWords links
	 * for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of webProperty-AdWords links to
	 * include in this response.
	 * @opt_param int start-index An index of the first webProperty-AdWords link to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_EntityAdWordsLinks
	 */
	public function listManagementWebPropertyAdWordsLinks( $accountId, $webPropertyId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_EntityAdWordsLinks' );
	}

	/**
	 * Updates an existing webProperty-AdWords link. This method supports patch
	 * semantics. (webPropertyAdWordsLinks.patch)
	 *
	 * @param string                      $accountId ID of the account which the given web property
	 *                      belongs to.
	 * @param string                      $webPropertyId Web property ID to retrieve the AdWords link
	 *                      for.
	 * @param string                      $webPropertyAdWordsLinkId Web property-AdWords link ID.
	 * @param GoogleGAL_EntityAdWordsLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityAdWordsLink
	 */
	public function patch( $accountId, $webPropertyId, $webPropertyAdWordsLinkId, GoogleGAL_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'                => $accountId,
			'webPropertyId'            => $webPropertyId,
			'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId,
			'postBody'                 => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_EntityAdWordsLink' );
	}

	/**
	 * Updates an existing webProperty-AdWords link.
	 * (webPropertyAdWordsLinks.update)
	 *
	 * @param string                      $accountId ID of the account which the given web property
	 *                      belongs to.
	 * @param string                      $webPropertyId Web property ID to retrieve the AdWords link
	 *                      for.
	 * @param string                      $webPropertyAdWordsLinkId Web property-AdWords link ID.
	 * @param GoogleGAL_EntityAdWordsLink $postBody
	 * @param array                       $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityAdWordsLink
	 */
	public function update( $accountId, $webPropertyId, $webPropertyAdWordsLinkId, GoogleGAL_Service_Analytics_EntityAdWordsLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'                => $accountId,
			'webPropertyId'            => $webPropertyId,
			'webPropertyAdWordsLinkId' => $webPropertyAdWordsLinkId,
			'postBody'                 => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_EntityAdWordsLink' );
	}
}
/**
 * The "webproperties" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $webproperties = $analyticsService->webproperties;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementWebproperties_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets a web property to which the user has access. (webproperties.get)
	 *
	 * @param string $accountId Account ID to retrieve the web property for.
	 * @param string $webPropertyId ID to retrieve the web property for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Webproperty
	 */
	public function get( $accountId, $webPropertyId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Analytics_Webproperty' );
	}

	/**
	 * Create a new property if the account has fewer than 20 properties. Web
	 * properties are visible in the Google Analytics interface only if they have at
	 * least one profile. (webproperties.insert)
	 *
	 * @param string                $accountId Account ID to create the web property for.
	 * @param GoogleGAL_Webproperty $postBody
	 * @param array                 $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Webproperty
	 */
	public function insert( $accountId, GoogleGAL_Service_Analytics_Webproperty $postBody, $optParams = array() ) {
		$params = array(
			'accountId' => $accountId,
			'postBody'  => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_Webproperty' );
	}

	/**
	 * Lists web properties to which the user has access.
	 * (webproperties.listManagementWebproperties)
	 *
	 * @param string $accountId Account ID to retrieve web properties for. Can
	 * either be a specific account ID or '~all', which refers to all the accounts
	 * that user has access to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of web properties to include in
	 * this response.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter.
	 * @return GoogleGAL_Service_Analytics_Webproperties
	 */
	public function listManagementWebproperties( $accountId, $optParams = array() ) {
		$params = array( 'accountId' => $accountId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Webproperties' );
	}

	/**
	 * Updates an existing web property. This method supports patch semantics.
	 * (webproperties.patch)
	 *
	 * @param string                $accountId Account ID to which the web property belongs
	 * @param string                $webPropertyId Web property ID
	 * @param GoogleGAL_Webproperty $postBody
	 * @param array                 $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Webproperty
	 */
	public function patch( $accountId, $webPropertyId, GoogleGAL_Service_Analytics_Webproperty $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'patch', array( $params ), 'GoogleGAL_Service_Analytics_Webproperty' );
	}

	/**
	 * Updates an existing web property. (webproperties.update)
	 *
	 * @param string                $accountId Account ID to which the web property belongs
	 * @param string                $webPropertyId Web property ID
	 * @param GoogleGAL_Webproperty $postBody
	 * @param array                 $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Webproperty
	 */
	public function update( $accountId, $webPropertyId, GoogleGAL_Service_Analytics_Webproperty $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_Webproperty' );
	}
}
/**
 * The "webpropertyUserLinks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $webpropertyUserLinks = $analyticsService->webpropertyUserLinks;
 *  </code>
 */
class GoogleGAL_Service_Analytics_ManagementWebpropertyUserLinks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Removes a user from the given web property. (webpropertyUserLinks.delete)
	 *
	 * @param string $accountId Account ID to delete the user link for.
	 * @param string $webPropertyId Web Property ID to delete the user link for.
	 * @param string $linkId Link ID to delete the user link for.
	 * @param array  $optParams Optional parameters.
	 */
	public function delete( $accountId, $webPropertyId, $linkId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'linkId'        => $linkId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Adds a new user to the given web property. (webpropertyUserLinks.insert)
	 *
	 * @param string                   $accountId Account ID to create the user link for.
	 * @param string                   $webPropertyId Web Property ID to create the user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function insert( $accountId, $webPropertyId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}

	/**
	 * Lists webProperty-user links for a given web property.
	 * (webpropertyUserLinks.listManagementWebpropertyUserLinks)
	 *
	 * @param string $accountId Account ID which the given web property belongs to.
	 * @param string $webPropertyId Web Property ID for the webProperty-user links
	 * to retrieve. Can either be a specific web property ID or '~all', which refers
	 * to all the web properties that user has access to.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of webProperty-user Links to
	 * include in this response.
	 * @opt_param int start-index An index of the first webProperty-user link to
	 * retrieve. Use this parameter as a pagination mechanism along with the max-
	 * results parameter.
	 * @return GoogleGAL_Service_Analytics_EntityUserLinks
	 */
	public function listManagementWebpropertyUserLinks( $accountId, $webPropertyId, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLinks' );
	}

	/**
	 * Updates permissions for an existing user on the given web property.
	 * (webpropertyUserLinks.update)
	 *
	 * @param string                   $accountId Account ID to update the account-user link for.
	 * @param string                   $webPropertyId Web property ID to update the account-user link
	 *                   for.
	 * @param string                   $linkId Link ID to update the account-user link for.
	 * @param GoogleGAL_EntityUserLink $postBody
	 * @param array                    $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_EntityUserLink
	 */
	public function update( $accountId, $webPropertyId, $linkId, GoogleGAL_Service_Analytics_EntityUserLink $postBody, $optParams = array() ) {
		$params = array(
			'accountId'     => $accountId,
			'webPropertyId' => $webPropertyId,
			'linkId'        => $linkId,
			'postBody'      => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Analytics_EntityUserLink' );
	}
}

/**
 * The "metadata" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $metadata = $analyticsService->metadata;
 *  </code>
 */
class GoogleGAL_Service_Analytics_Metadata_Resource extends GoogleGAL_Service_Resource {

}

/**
 * The "columns" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $columns = $analyticsService->columns;
 *  </code>
 */
class GoogleGAL_Service_Analytics_MetadataColumns_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Lists all columns for a report type (columns.listMetadataColumns)
	 *
	 * @param string $reportType Report type. Allowed Values: 'ga'. Where 'ga'
	 * corresponds to the Core Reporting API
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_Columns
	 */
	public function listMetadataColumns( $reportType, $optParams = array() ) {
		$params = array( 'reportType' => $reportType );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Analytics_Columns' );
	}
}

/**
 * The "provisioning" collection of methods.
 * Typical usage is:
 *  <code>
 *   $analyticsService = new GoogleGAL_Service_Analytics(...);
 *   $provisioning = $analyticsService->provisioning;
 *  </code>
 */
class GoogleGAL_Service_Analytics_Provisioning_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Creates an account ticket. (provisioning.createAccountTicket)
	 *
	 * @param GoogleGAL_AccountTicket $postBody
	 * @param array                   $optParams Optional parameters.
	 * @return GoogleGAL_Service_Analytics_AccountTicket
	 */
	public function createAccountTicket( GoogleGAL_Service_Analytics_AccountTicket $postBody, $optParams = array() ) {
		$params = array( 'postBody' => $postBody );
		$params = array_merge( $params, $optParams );
		return $this->call( 'createAccountTicket', array( $params ), 'GoogleGAL_Service_Analytics_AccountTicket' );
	}
}




class GoogleGAL_Service_Analytics_Account extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $childLinkType          = 'GoogleGAL_Service_Analytics_AccountChildLink';
	protected $childLinkDataType      = '';
	public $created;
	public $id;
	public $kind;
	public $name;
	protected $permissionsType     = 'GoogleGAL_Service_Analytics_AccountPermissions';
	protected $permissionsDataType = '';
	public $selfLink;
	public $updated;


	public function setChildLink( GoogleGAL_Service_Analytics_AccountChildLink $childLink ) {
		$this->childLink = $childLink;
	}
	public function getChildLink() {
		return $this->childLink;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setPermissions( GoogleGAL_Service_Analytics_AccountPermissions $permissions ) {
		$this->permissions = $permissions;
	}
	public function getPermissions() {
		return $this->permissions;
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
}

class GoogleGAL_Service_Analytics_AccountChildLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_AccountPermissions extends GoogleGAL_Collection {

	protected $collection_key         = 'effective';
	protected $internal_gapi_mappings = array();
	public $effective;


	public function setEffective( $effective ) {
		$this->effective = $effective;
	}
	public function getEffective() {
		return $this->effective;
	}
}

class GoogleGAL_Service_Analytics_AccountRef extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $id;
	public $kind;
	public $name;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_AccountSummaries extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_AccountSummary';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_AccountSummary extends GoogleGAL_Collection {

	protected $collection_key         = 'webProperties';
	protected $internal_gapi_mappings = array();
	public $id;
	public $kind;
	public $name;
	protected $webPropertiesType     = 'GoogleGAL_Service_Analytics_WebPropertySummary';
	protected $webPropertiesDataType = 'array';


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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setWebProperties( $webProperties ) {
		$this->webProperties = $webProperties;
	}
	public function getWebProperties() {
		return $this->webProperties;
	}
}

class GoogleGAL_Service_Analytics_AccountTicket extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $accountType            = 'GoogleGAL_Service_Analytics_Account';
	protected $accountDataType        = '';
	public $id;
	public $kind;
	protected $profileType     = 'GoogleGAL_Service_Analytics_Profile';
	protected $profileDataType = '';
	public $redirectUri;
	protected $webpropertyType     = 'GoogleGAL_Service_Analytics_Webproperty';
	protected $webpropertyDataType = '';


	public function setAccount( GoogleGAL_Service_Analytics_Account $account ) {
		$this->account = $account;
	}
	public function getAccount() {
		return $this->account;
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
	public function setProfile( GoogleGAL_Service_Analytics_Profile $profile ) {
		$this->profile = $profile;
	}
	public function getProfile() {
		return $this->profile;
	}
	public function setRedirectUri( $redirectUri ) {
		$this->redirectUri = $redirectUri;
	}
	public function getRedirectUri() {
		return $this->redirectUri;
	}
	public function setWebproperty( GoogleGAL_Service_Analytics_Webproperty $webproperty ) {
		$this->webproperty = $webproperty;
	}
	public function getWebproperty() {
		return $this->webproperty;
	}
}

class GoogleGAL_Service_Analytics_Accounts extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Account';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_AdWordsAccount extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $autoTaggingEnabled;
	public $customerId;
	public $kind;


	public function setAutoTaggingEnabled( $autoTaggingEnabled ) {
		$this->autoTaggingEnabled = $autoTaggingEnabled;
	}
	public function getAutoTaggingEnabled() {
		return $this->autoTaggingEnabled;
	}
	public function setCustomerId( $customerId ) {
		$this->customerId = $customerId;
	}
	public function getCustomerId() {
		return $this->customerId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_Analytics_AnalyticsDataimportDeleteUploadDataRequest extends GoogleGAL_Collection {

	protected $collection_key         = 'customDataImportUids';
	protected $internal_gapi_mappings = array();
	public $customDataImportUids;


	public function setCustomDataImportUids( $customDataImportUids ) {
		$this->customDataImportUids = $customDataImportUids;
	}
	public function getCustomDataImportUids() {
		return $this->customDataImportUids;
	}
}

class GoogleGAL_Service_Analytics_Column extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attributes;
	public $id;
	public $kind;


	public function setAttributes( $attributes ) {
		$this->attributes = $attributes;
	}
	public function getAttributes() {
		return $this->attributes;
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
}

class GoogleGAL_Service_Analytics_ColumnAttributes extends GoogleGAL_Model {

}

class GoogleGAL_Service_Analytics_Columns extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $attributeNames;
	public $etag;
	protected $itemsType     = 'GoogleGAL_Service_Analytics_Column';
	protected $itemsDataType = 'array';
	public $kind;
	public $totalResults;


	public function setAttributeNames( $attributeNames ) {
		$this->attributeNames = $attributeNames;
	}
	public function getAttributeNames() {
		return $this->attributeNames;
	}
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
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
}

class GoogleGAL_Service_Analytics_CustomDataSource extends GoogleGAL_Collection {

	protected $collection_key         = 'profilesLinked';
	protected $internal_gapi_mappings = array();
	public $accountId;
	protected $childLinkType     = 'GoogleGAL_Service_Analytics_CustomDataSourceChildLink';
	protected $childLinkDataType = '';
	public $created;
	public $description;
	public $id;
	public $importBehavior;
	public $kind;
	public $name;
	protected $parentLinkType     = 'GoogleGAL_Service_Analytics_CustomDataSourceParentLink';
	protected $parentLinkDataType = '';
	public $profilesLinked;
	public $selfLink;
	public $type;
	public $updated;
	public $uploadType;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setChildLink( GoogleGAL_Service_Analytics_CustomDataSourceChildLink $childLink ) {
		$this->childLink = $childLink;
	}
	public function getChildLink() {
		return $this->childLink;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setImportBehavior( $importBehavior ) {
		$this->importBehavior = $importBehavior;
	}
	public function getImportBehavior() {
		return $this->importBehavior;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_CustomDataSourceParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setProfilesLinked( $profilesLinked ) {
		$this->profilesLinked = $profilesLinked;
	}
	public function getProfilesLinked() {
		return $this->profilesLinked;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUploadType( $uploadType ) {
		$this->uploadType = $uploadType;
	}
	public function getUploadType() {
		return $this->uploadType;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_CustomDataSourceChildLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_CustomDataSourceParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_CustomDataSources extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_CustomDataSource';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_DailyUpload extends GoogleGAL_Collection {

	protected $collection_key         = 'recentChanges';
	protected $internal_gapi_mappings = array();
	public $accountId;
	public $appendCount;
	public $createdTime;
	public $customDataSourceId;
	public $date;
	public $kind;
	public $modifiedTime;
	protected $parentLinkType        = 'GoogleGAL_Service_Analytics_DailyUploadParentLink';
	protected $parentLinkDataType    = '';
	protected $recentChangesType     = 'GoogleGAL_Service_Analytics_DailyUploadRecentChanges';
	protected $recentChangesDataType = 'array';
	public $selfLink;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setAppendCount( $appendCount ) {
		$this->appendCount = $appendCount;
	}
	public function getAppendCount() {
		return $this->appendCount;
	}
	public function setCreatedTime( $createdTime ) {
		$this->createdTime = $createdTime;
	}
	public function getCreatedTime() {
		return $this->createdTime;
	}
	public function setCustomDataSourceId( $customDataSourceId ) {
		$this->customDataSourceId = $customDataSourceId;
	}
	public function getCustomDataSourceId() {
		return $this->customDataSourceId;
	}
	public function setDate( $date ) {
		$this->date = $date;
	}
	public function getDate() {
		return $this->date;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setModifiedTime( $modifiedTime ) {
		$this->modifiedTime = $modifiedTime;
	}
	public function getModifiedTime() {
		return $this->modifiedTime;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_DailyUploadParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setRecentChanges( $recentChanges ) {
		$this->recentChanges = $recentChanges;
	}
	public function getRecentChanges() {
		return $this->recentChanges;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_DailyUploadAppend extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $appendNumber;
	public $customDataSourceId;
	public $date;
	public $kind;
	public $nextAppendLink;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setAppendNumber( $appendNumber ) {
		$this->appendNumber = $appendNumber;
	}
	public function getAppendNumber() {
		return $this->appendNumber;
	}
	public function setCustomDataSourceId( $customDataSourceId ) {
		$this->customDataSourceId = $customDataSourceId;
	}
	public function getCustomDataSourceId() {
		return $this->customDataSourceId;
	}
	public function setDate( $date ) {
		$this->date = $date;
	}
	public function getDate() {
		return $this->date;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setNextAppendLink( $nextAppendLink ) {
		$this->nextAppendLink = $nextAppendLink;
	}
	public function getNextAppendLink() {
		return $this->nextAppendLink;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_DailyUploadParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_DailyUploadRecentChanges extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $change;
	public $time;


	public function setChange( $change ) {
		$this->change = $change;
	}
	public function getChange() {
		return $this->change;
	}
	public function setTime( $time ) {
		$this->time = $time;
	}
	public function getTime() {
		return $this->time;
	}
}

class GoogleGAL_Service_Analytics_DailyUploads extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_DailyUpload';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_EntityAdWordsLink extends GoogleGAL_Collection {

	protected $collection_key          = 'profileIds';
	protected $internal_gapi_mappings  = array();
	protected $adWordsAccountsType     = 'GoogleGAL_Service_Analytics_AdWordsAccount';
	protected $adWordsAccountsDataType = 'array';
	protected $entityType              = 'GoogleGAL_Service_Analytics_EntityAdWordsLinkEntity';
	protected $entityDataType          = '';
	public $id;
	public $kind;
	public $name;
	public $profileIds;
	public $selfLink;


	public function setAdWordsAccounts( $adWordsAccounts ) {
		$this->adWordsAccounts = $adWordsAccounts;
	}
	public function getAdWordsAccounts() {
		return $this->adWordsAccounts;
	}
	public function setEntity( GoogleGAL_Service_Analytics_EntityAdWordsLinkEntity $entity ) {
		$this->entity = $entity;
	}
	public function getEntity() {
		return $this->entity;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setProfileIds( $profileIds ) {
		$this->profileIds = $profileIds;
	}
	public function getProfileIds() {
		return $this->profileIds;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
}

class GoogleGAL_Service_Analytics_EntityAdWordsLinkEntity extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $webPropertyRefType     = 'GoogleGAL_Service_Analytics_WebPropertyRef';
	protected $webPropertyRefDataType = '';


	public function setWebPropertyRef( GoogleGAL_Service_Analytics_WebPropertyRef $webPropertyRef ) {
		$this->webPropertyRef = $webPropertyRef;
	}
	public function getWebPropertyRef() {
		return $this->webPropertyRef;
	}
}

class GoogleGAL_Service_Analytics_EntityAdWordsLinks extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_EntityAdWordsLink';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
}

class GoogleGAL_Service_Analytics_EntityUserLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $entityType             = 'GoogleGAL_Service_Analytics_EntityUserLinkEntity';
	protected $entityDataType         = '';
	public $id;
	public $kind;
	protected $permissionsType     = 'GoogleGAL_Service_Analytics_EntityUserLinkPermissions';
	protected $permissionsDataType = '';
	public $selfLink;
	protected $userRefType     = 'GoogleGAL_Service_Analytics_UserRef';
	protected $userRefDataType = '';


	public function setEntity( GoogleGAL_Service_Analytics_EntityUserLinkEntity $entity ) {
		$this->entity = $entity;
	}
	public function getEntity() {
		return $this->entity;
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
	public function setPermissions( GoogleGAL_Service_Analytics_EntityUserLinkPermissions $permissions ) {
		$this->permissions = $permissions;
	}
	public function getPermissions() {
		return $this->permissions;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setUserRef( GoogleGAL_Service_Analytics_UserRef $userRef ) {
		$this->userRef = $userRef;
	}
	public function getUserRef() {
		return $this->userRef;
	}
}

class GoogleGAL_Service_Analytics_EntityUserLinkEntity extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $accountRefType         = 'GoogleGAL_Service_Analytics_AccountRef';
	protected $accountRefDataType     = '';
	protected $profileRefType         = 'GoogleGAL_Service_Analytics_ProfileRef';
	protected $profileRefDataType     = '';
	protected $webPropertyRefType     = 'GoogleGAL_Service_Analytics_WebPropertyRef';
	protected $webPropertyRefDataType = '';


	public function setAccountRef( GoogleGAL_Service_Analytics_AccountRef $accountRef ) {
		$this->accountRef = $accountRef;
	}
	public function getAccountRef() {
		return $this->accountRef;
	}
	public function setProfileRef( GoogleGAL_Service_Analytics_ProfileRef $profileRef ) {
		$this->profileRef = $profileRef;
	}
	public function getProfileRef() {
		return $this->profileRef;
	}
	public function setWebPropertyRef( GoogleGAL_Service_Analytics_WebPropertyRef $webPropertyRef ) {
		$this->webPropertyRef = $webPropertyRef;
	}
	public function getWebPropertyRef() {
		return $this->webPropertyRef;
	}
}

class GoogleGAL_Service_Analytics_EntityUserLinkPermissions extends GoogleGAL_Collection {

	protected $collection_key         = 'local';
	protected $internal_gapi_mappings = array();
	public $effective;
	public $local;


	public function setEffective( $effective ) {
		$this->effective = $effective;
	}
	public function getEffective() {
		return $this->effective;
	}
	public function setLocal( $local ) {
		$this->local = $local;
	}
	public function getLocal() {
		return $this->local;
	}
}

class GoogleGAL_Service_Analytics_EntityUserLinks extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_EntityUserLink';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
}

class GoogleGAL_Service_Analytics_Experiment extends GoogleGAL_Collection {

	protected $collection_key         = 'variations';
	protected $internal_gapi_mappings = array();
	public $accountId;
	public $created;
	public $description;
	public $editableInGaUi;
	public $endTime;
	public $equalWeighting;
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $minimumExperimentLengthInDays;
	public $name;
	public $objectiveMetric;
	public $optimizationType;
	protected $parentLinkType     = 'GoogleGAL_Service_Analytics_ExperimentParentLink';
	protected $parentLinkDataType = '';
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
	protected $variationsType     = 'GoogleGAL_Service_Analytics_ExperimentVariations';
	protected $variationsDataType = 'array';
	public $webPropertyId;
	public $winnerConfidenceLevel;
	public $winnerFound;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setEditableInGaUi( $editableInGaUi ) {
		$this->editableInGaUi = $editableInGaUi;
	}
	public function getEditableInGaUi() {
		return $this->editableInGaUi;
	}
	public function setEndTime( $endTime ) {
		$this->endTime = $endTime;
	}
	public function getEndTime() {
		return $this->endTime;
	}
	public function setEqualWeighting( $equalWeighting ) {
		$this->equalWeighting = $equalWeighting;
	}
	public function getEqualWeighting() {
		return $this->equalWeighting;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMinimumExperimentLengthInDays( $minimumExperimentLengthInDays ) {
		$this->minimumExperimentLengthInDays = $minimumExperimentLengthInDays;
	}
	public function getMinimumExperimentLengthInDays() {
		return $this->minimumExperimentLengthInDays;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setObjectiveMetric( $objectiveMetric ) {
		$this->objectiveMetric = $objectiveMetric;
	}
	public function getObjectiveMetric() {
		return $this->objectiveMetric;
	}
	public function setOptimizationType( $optimizationType ) {
		$this->optimizationType = $optimizationType;
	}
	public function getOptimizationType() {
		return $this->optimizationType;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_ExperimentParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setReasonExperimentEnded( $reasonExperimentEnded ) {
		$this->reasonExperimentEnded = $reasonExperimentEnded;
	}
	public function getReasonExperimentEnded() {
		return $this->reasonExperimentEnded;
	}
	public function setRewriteVariationUrlsAsOriginal( $rewriteVariationUrlsAsOriginal ) {
		$this->rewriteVariationUrlsAsOriginal = $rewriteVariationUrlsAsOriginal;
	}
	public function getRewriteVariationUrlsAsOriginal() {
		return $this->rewriteVariationUrlsAsOriginal;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setServingFramework( $servingFramework ) {
		$this->servingFramework = $servingFramework;
	}
	public function getServingFramework() {
		return $this->servingFramework;
	}
	public function setSnippet( $snippet ) {
		$this->snippet = $snippet;
	}
	public function getSnippet() {
		return $this->snippet;
	}
	public function setStartTime( $startTime ) {
		$this->startTime = $startTime;
	}
	public function getStartTime() {
		return $this->startTime;
	}
	public function setStatus( $status ) {
		$this->status = $status;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setTrafficCoverage( $trafficCoverage ) {
		$this->trafficCoverage = $trafficCoverage;
	}
	public function getTrafficCoverage() {
		return $this->trafficCoverage;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setVariations( $variations ) {
		$this->variations = $variations;
	}
	public function getVariations() {
		return $this->variations;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
	public function setWinnerConfidenceLevel( $winnerConfidenceLevel ) {
		$this->winnerConfidenceLevel = $winnerConfidenceLevel;
	}
	public function getWinnerConfidenceLevel() {
		return $this->winnerConfidenceLevel;
	}
	public function setWinnerFound( $winnerFound ) {
		$this->winnerFound = $winnerFound;
	}
	public function getWinnerFound() {
		return $this->winnerFound;
	}
}

class GoogleGAL_Service_Analytics_ExperimentParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_ExperimentVariations extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $name;
	public $status;
	public $url;
	public $weight;
	public $won;


	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setStatus( $status ) {
		$this->status = $status;
	}
	public function getStatus() {
		return $this->status;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
	public function setWeight( $weight ) {
		$this->weight = $weight;
	}
	public function getWeight() {
		return $this->weight;
	}
	public function setWon( $won ) {
		$this->won = $won;
	}
	public function getWon() {
		return $this->won;
	}
}

class GoogleGAL_Service_Analytics_Experiments extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Experiment';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_Filter extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	protected $advancedDetailsType     = 'GoogleGAL_Service_Analytics_FilterAdvancedDetails';
	protected $advancedDetailsDataType = '';
	public $created;
	protected $excludeDetailsType     = 'GoogleGAL_Service_Analytics_FilterExpression';
	protected $excludeDetailsDataType = '';
	public $id;
	protected $includeDetailsType     = 'GoogleGAL_Service_Analytics_FilterExpression';
	protected $includeDetailsDataType = '';
	public $kind;
	protected $lowercaseDetailsType     = 'GoogleGAL_Service_Analytics_FilterLowercaseDetails';
	protected $lowercaseDetailsDataType = '';
	public $name;
	protected $parentLinkType                  = 'GoogleGAL_Service_Analytics_FilterParentLink';
	protected $parentLinkDataType              = '';
	protected $searchAndReplaceDetailsType     = 'GoogleGAL_Service_Analytics_FilterSearchAndReplaceDetails';
	protected $searchAndReplaceDetailsDataType = '';
	public $selfLink;
	public $type;
	public $updated;
	protected $uppercaseDetailsType     = 'GoogleGAL_Service_Analytics_FilterUppercaseDetails';
	protected $uppercaseDetailsDataType = '';


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setAdvancedDetails( GoogleGAL_Service_Analytics_FilterAdvancedDetails $advancedDetails ) {
		$this->advancedDetails = $advancedDetails;
	}
	public function getAdvancedDetails() {
		return $this->advancedDetails;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setExcludeDetails( GoogleGAL_Service_Analytics_FilterExpression $excludeDetails ) {
		$this->excludeDetails = $excludeDetails;
	}
	public function getExcludeDetails() {
		return $this->excludeDetails;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setIncludeDetails( GoogleGAL_Service_Analytics_FilterExpression $includeDetails ) {
		$this->includeDetails = $includeDetails;
	}
	public function getIncludeDetails() {
		return $this->includeDetails;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLowercaseDetails( GoogleGAL_Service_Analytics_FilterLowercaseDetails $lowercaseDetails ) {
		$this->lowercaseDetails = $lowercaseDetails;
	}
	public function getLowercaseDetails() {
		return $this->lowercaseDetails;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_FilterParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setSearchAndReplaceDetails( GoogleGAL_Service_Analytics_FilterSearchAndReplaceDetails $searchAndReplaceDetails ) {
		$this->searchAndReplaceDetails = $searchAndReplaceDetails;
	}
	public function getSearchAndReplaceDetails() {
		return $this->searchAndReplaceDetails;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUppercaseDetails( GoogleGAL_Service_Analytics_FilterUppercaseDetails $uppercaseDetails ) {
		$this->uppercaseDetails = $uppercaseDetails;
	}
	public function getUppercaseDetails() {
		return $this->uppercaseDetails;
	}
}

class GoogleGAL_Service_Analytics_FilterAdvancedDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $caseSensitive;
	public $extractA;
	public $extractB;
	public $fieldA;
	public $fieldARequired;
	public $fieldB;
	public $fieldBRequired;
	public $outputConstructor;
	public $outputToField;
	public $overrideOutputField;


	public function setCaseSensitive( $caseSensitive ) {
		$this->caseSensitive = $caseSensitive;
	}
	public function getCaseSensitive() {
		return $this->caseSensitive;
	}
	public function setExtractA( $extractA ) {
		$this->extractA = $extractA;
	}
	public function getExtractA() {
		return $this->extractA;
	}
	public function setExtractB( $extractB ) {
		$this->extractB = $extractB;
	}
	public function getExtractB() {
		return $this->extractB;
	}
	public function setFieldA( $fieldA ) {
		$this->fieldA = $fieldA;
	}
	public function getFieldA() {
		return $this->fieldA;
	}
	public function setFieldARequired( $fieldARequired ) {
		$this->fieldARequired = $fieldARequired;
	}
	public function getFieldARequired() {
		return $this->fieldARequired;
	}
	public function setFieldB( $fieldB ) {
		$this->fieldB = $fieldB;
	}
	public function getFieldB() {
		return $this->fieldB;
	}
	public function setFieldBRequired( $fieldBRequired ) {
		$this->fieldBRequired = $fieldBRequired;
	}
	public function getFieldBRequired() {
		return $this->fieldBRequired;
	}
	public function setOutputConstructor( $outputConstructor ) {
		$this->outputConstructor = $outputConstructor;
	}
	public function getOutputConstructor() {
		return $this->outputConstructor;
	}
	public function setOutputToField( $outputToField ) {
		$this->outputToField = $outputToField;
	}
	public function getOutputToField() {
		return $this->outputToField;
	}
	public function setOverrideOutputField( $overrideOutputField ) {
		$this->overrideOutputField = $overrideOutputField;
	}
	public function getOverrideOutputField() {
		return $this->overrideOutputField;
	}
}

class GoogleGAL_Service_Analytics_FilterExpression extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $caseSensitive;
	public $expressionValue;
	public $field;
	public $kind;
	public $matchType;


	public function setCaseSensitive( $caseSensitive ) {
		$this->caseSensitive = $caseSensitive;
	}
	public function getCaseSensitive() {
		return $this->caseSensitive;
	}
	public function setExpressionValue( $expressionValue ) {
		$this->expressionValue = $expressionValue;
	}
	public function getExpressionValue() {
		return $this->expressionValue;
	}
	public function setField( $field ) {
		$this->field = $field;
	}
	public function getField() {
		return $this->field;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMatchType( $matchType ) {
		$this->matchType = $matchType;
	}
	public function getMatchType() {
		return $this->matchType;
	}
}

class GoogleGAL_Service_Analytics_FilterLowercaseDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $field;


	public function setField( $field ) {
		$this->field = $field;
	}
	public function getField() {
		return $this->field;
	}
}

class GoogleGAL_Service_Analytics_FilterParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_FilterRef extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $href;
	public $id;
	public $kind;
	public $name;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_FilterSearchAndReplaceDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $caseSensitive;
	public $field;
	public $replaceString;
	public $searchString;


	public function setCaseSensitive( $caseSensitive ) {
		$this->caseSensitive = $caseSensitive;
	}
	public function getCaseSensitive() {
		return $this->caseSensitive;
	}
	public function setField( $field ) {
		$this->field = $field;
	}
	public function getField() {
		return $this->field;
	}
	public function setReplaceString( $replaceString ) {
		$this->replaceString = $replaceString;
	}
	public function getReplaceString() {
		return $this->replaceString;
	}
	public function setSearchString( $searchString ) {
		$this->searchString = $searchString;
	}
	public function getSearchString() {
		return $this->searchString;
	}
}

class GoogleGAL_Service_Analytics_FilterUppercaseDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $field;


	public function setField( $field ) {
		$this->field = $field;
	}
	public function getField() {
		return $this->field;
	}
}

class GoogleGAL_Service_Analytics_Filters extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Filter';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_GaData extends GoogleGAL_Collection {

	protected $collection_key         = 'rows';
	protected $internal_gapi_mappings = array();
	protected $columnHeadersType      = 'GoogleGAL_Service_Analytics_GaDataColumnHeaders';
	protected $columnHeadersDataType  = 'array';
	public $containsSampledData;
	protected $dataTableType     = 'GoogleGAL_Service_Analytics_GaDataDataTable';
	protected $dataTableDataType = '';
	public $id;
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	protected $profileInfoType     = 'GoogleGAL_Service_Analytics_GaDataProfileInfo';
	protected $profileInfoDataType = '';
	protected $queryType           = 'GoogleGAL_Service_Analytics_GaDataQuery';
	protected $queryDataType       = '';
	public $rows;
	public $sampleSize;
	public $sampleSpace;
	public $selfLink;
	public $totalResults;
	public $totalsForAllResults;


	public function setColumnHeaders( $columnHeaders ) {
		$this->columnHeaders = $columnHeaders;
	}
	public function getColumnHeaders() {
		return $this->columnHeaders;
	}
	public function setContainsSampledData( $containsSampledData ) {
		$this->containsSampledData = $containsSampledData;
	}
	public function getContainsSampledData() {
		return $this->containsSampledData;
	}
	public function setDataTable( GoogleGAL_Service_Analytics_GaDataDataTable $dataTable ) {
		$this->dataTable = $dataTable;
	}
	public function getDataTable() {
		return $this->dataTable;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setProfileInfo( GoogleGAL_Service_Analytics_GaDataProfileInfo $profileInfo ) {
		$this->profileInfo = $profileInfo;
	}
	public function getProfileInfo() {
		return $this->profileInfo;
	}
	public function setQuery( GoogleGAL_Service_Analytics_GaDataQuery $query ) {
		$this->query = $query;
	}
	public function getQuery() {
		return $this->query;
	}
	public function setRows( $rows ) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
	public function setSampleSize( $sampleSize ) {
		$this->sampleSize = $sampleSize;
	}
	public function getSampleSize() {
		return $this->sampleSize;
	}
	public function setSampleSpace( $sampleSpace ) {
		$this->sampleSpace = $sampleSpace;
	}
	public function getSampleSpace() {
		return $this->sampleSpace;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setTotalsForAllResults( $totalsForAllResults ) {
		$this->totalsForAllResults = $totalsForAllResults;
	}
	public function getTotalsForAllResults() {
		return $this->totalsForAllResults;
	}
}

class GoogleGAL_Service_Analytics_GaDataColumnHeaders extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $columnType;
	public $dataType;
	public $name;


	public function setColumnType( $columnType ) {
		$this->columnType = $columnType;
	}
	public function getColumnType() {
		return $this->columnType;
	}
	public function setDataType( $dataType ) {
		$this->dataType = $dataType;
	}
	public function getDataType() {
		return $this->dataType;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_GaDataDataTable extends GoogleGAL_Collection {

	protected $collection_key         = 'rows';
	protected $internal_gapi_mappings = array();
	protected $colsType               = 'GoogleGAL_Service_Analytics_GaDataDataTableCols';
	protected $colsDataType           = 'array';
	protected $rowsType               = 'GoogleGAL_Service_Analytics_GaDataDataTableRows';
	protected $rowsDataType           = 'array';


	public function setCols( $cols ) {
		$this->cols = $cols;
	}
	public function getCols() {
		return $this->cols;
	}
	public function setRows( $rows ) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
}

class GoogleGAL_Service_Analytics_GaDataDataTableCols extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $id;
	public $label;
	public $type;


	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
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
}

class GoogleGAL_Service_Analytics_GaDataDataTableRows extends GoogleGAL_Collection {

	protected $collection_key         = 'c';
	protected $internal_gapi_mappings = array();
	protected $cType                  = 'GoogleGAL_Service_Analytics_GaDataDataTableRowsC';
	protected $cDataType              = 'array';


	public function setC( $c ) {
		$this->c = $c;
	}
	public function getC() {
		return $this->c;
	}
}

class GoogleGAL_Service_Analytics_GaDataDataTableRowsC extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $v;


	public function setV( $v ) {
		$this->v = $v;
	}
	public function getV() {
		return $this->v;
	}
}

class GoogleGAL_Service_Analytics_GaDataProfileInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $internalWebPropertyId;
	public $profileId;
	public $profileName;
	public $tableId;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setProfileName( $profileName ) {
		$this->profileName = $profileName;
	}
	public function getProfileName() {
		return $this->profileName;
	}
	public function setTableId( $tableId ) {
		$this->tableId = $tableId;
	}
	public function getTableId() {
		return $this->tableId;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_GaDataQuery extends GoogleGAL_Collection {

	protected $collection_key         = 'sort';
	protected $internal_gapi_mappings = array(
		'endDate'    => 'end-date',
		'maxResults' => 'max-results',
		'startDate'  => 'start-date',
		'startIndex' => 'start-index',
	);
	public $dimensions;
	public $endDate;
	public $filters;
	public $ids;
	public $maxResults;
	public $metrics;
	public $samplingLevel;
	public $segment;
	public $sort;
	public $startDate;
	public $startIndex;


	public function setDimensions( $dimensions ) {
		$this->dimensions = $dimensions;
	}
	public function getDimensions() {
		return $this->dimensions;
	}
	public function setEndDate( $endDate ) {
		$this->endDate = $endDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function setFilters( $filters ) {
		$this->filters = $filters;
	}
	public function getFilters() {
		return $this->filters;
	}
	public function setIds( $ids ) {
		$this->ids = $ids;
	}
	public function getIds() {
		return $this->ids;
	}
	public function setMaxResults( $maxResults ) {
		$this->maxResults = $maxResults;
	}
	public function getMaxResults() {
		return $this->maxResults;
	}
	public function setMetrics( $metrics ) {
		$this->metrics = $metrics;
	}
	public function getMetrics() {
		return $this->metrics;
	}
	public function setSamplingLevel( $samplingLevel ) {
		$this->samplingLevel = $samplingLevel;
	}
	public function getSamplingLevel() {
		return $this->samplingLevel;
	}
	public function setSegment( $segment ) {
		$this->segment = $segment;
	}
	public function getSegment() {
		return $this->segment;
	}
	public function setSort( $sort ) {
		$this->sort = $sort;
	}
	public function getSort() {
		return $this->sort;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
}

class GoogleGAL_Service_Analytics_GaDataTotalsForAllResults extends GoogleGAL_Model {

}

class GoogleGAL_Service_Analytics_Goal extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $active;
	public $created;
	protected $eventDetailsType     = 'GoogleGAL_Service_Analytics_GoalEventDetails';
	protected $eventDetailsDataType = '';
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $name;
	protected $parentLinkType     = 'GoogleGAL_Service_Analytics_GoalParentLink';
	protected $parentLinkDataType = '';
	public $profileId;
	public $selfLink;
	public $type;
	public $updated;
	protected $urlDestinationDetailsType     = 'GoogleGAL_Service_Analytics_GoalUrlDestinationDetails';
	protected $urlDestinationDetailsDataType = '';
	public $value;
	protected $visitNumPagesDetailsType       = 'GoogleGAL_Service_Analytics_GoalVisitNumPagesDetails';
	protected $visitNumPagesDetailsDataType   = '';
	protected $visitTimeOnSiteDetailsType     = 'GoogleGAL_Service_Analytics_GoalVisitTimeOnSiteDetails';
	protected $visitTimeOnSiteDetailsDataType = '';
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setActive( $active ) {
		$this->active = $active;
	}
	public function getActive() {
		return $this->active;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setEventDetails( GoogleGAL_Service_Analytics_GoalEventDetails $eventDetails ) {
		$this->eventDetails = $eventDetails;
	}
	public function getEventDetails() {
		return $this->eventDetails;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_GoalParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUrlDestinationDetails( GoogleGAL_Service_Analytics_GoalUrlDestinationDetails $urlDestinationDetails ) {
		$this->urlDestinationDetails = $urlDestinationDetails;
	}
	public function getUrlDestinationDetails() {
		return $this->urlDestinationDetails;
	}
	public function setValue( $value ) {
		$this->value = $value;
	}
	public function getValue() {
		return $this->value;
	}
	public function setVisitNumPagesDetails( GoogleGAL_Service_Analytics_GoalVisitNumPagesDetails $visitNumPagesDetails ) {
		$this->visitNumPagesDetails = $visitNumPagesDetails;
	}
	public function getVisitNumPagesDetails() {
		return $this->visitNumPagesDetails;
	}
	public function setVisitTimeOnSiteDetails( GoogleGAL_Service_Analytics_GoalVisitTimeOnSiteDetails $visitTimeOnSiteDetails ) {
		$this->visitTimeOnSiteDetails = $visitTimeOnSiteDetails;
	}
	public function getVisitTimeOnSiteDetails() {
		return $this->visitTimeOnSiteDetails;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_GoalEventDetails extends GoogleGAL_Collection {

	protected $collection_key          = 'eventConditions';
	protected $internal_gapi_mappings  = array();
	protected $eventConditionsType     = 'GoogleGAL_Service_Analytics_GoalEventDetailsEventConditions';
	protected $eventConditionsDataType = 'array';
	public $useEventValue;


	public function setEventConditions( $eventConditions ) {
		$this->eventConditions = $eventConditions;
	}
	public function getEventConditions() {
		return $this->eventConditions;
	}
	public function setUseEventValue( $useEventValue ) {
		$this->useEventValue = $useEventValue;
	}
	public function getUseEventValue() {
		return $this->useEventValue;
	}
}

class GoogleGAL_Service_Analytics_GoalEventDetailsEventConditions extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $comparisonType;
	public $comparisonValue;
	public $expression;
	public $matchType;
	public $type;


	public function setComparisonType( $comparisonType ) {
		$this->comparisonType = $comparisonType;
	}
	public function getComparisonType() {
		return $this->comparisonType;
	}
	public function setComparisonValue( $comparisonValue ) {
		$this->comparisonValue = $comparisonValue;
	}
	public function getComparisonValue() {
		return $this->comparisonValue;
	}
	public function setExpression( $expression ) {
		$this->expression = $expression;
	}
	public function getExpression() {
		return $this->expression;
	}
	public function setMatchType( $matchType ) {
		$this->matchType = $matchType;
	}
	public function getMatchType() {
		return $this->matchType;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_GoalParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_GoalUrlDestinationDetails extends GoogleGAL_Collection {

	protected $collection_key         = 'steps';
	protected $internal_gapi_mappings = array();
	public $caseSensitive;
	public $firstStepRequired;
	public $matchType;
	protected $stepsType     = 'GoogleGAL_Service_Analytics_GoalUrlDestinationDetailsSteps';
	protected $stepsDataType = 'array';
	public $url;


	public function setCaseSensitive( $caseSensitive ) {
		$this->caseSensitive = $caseSensitive;
	}
	public function getCaseSensitive() {
		return $this->caseSensitive;
	}
	public function setFirstStepRequired( $firstStepRequired ) {
		$this->firstStepRequired = $firstStepRequired;
	}
	public function getFirstStepRequired() {
		return $this->firstStepRequired;
	}
	public function setMatchType( $matchType ) {
		$this->matchType = $matchType;
	}
	public function getMatchType() {
		return $this->matchType;
	}
	public function setSteps( $steps ) {
		$this->steps = $steps;
	}
	public function getSteps() {
		return $this->steps;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Analytics_GoalUrlDestinationDetailsSteps extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $name;
	public $number;
	public $url;


	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setNumber( $number ) {
		$this->number = $number;
	}
	public function getNumber() {
		return $this->number;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Analytics_GoalVisitNumPagesDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $comparisonType;
	public $comparisonValue;


	public function setComparisonType( $comparisonType ) {
		$this->comparisonType = $comparisonType;
	}
	public function getComparisonType() {
		return $this->comparisonType;
	}
	public function setComparisonValue( $comparisonValue ) {
		$this->comparisonValue = $comparisonValue;
	}
	public function getComparisonValue() {
		return $this->comparisonValue;
	}
}

class GoogleGAL_Service_Analytics_GoalVisitTimeOnSiteDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $comparisonType;
	public $comparisonValue;


	public function setComparisonType( $comparisonType ) {
		$this->comparisonType = $comparisonType;
	}
	public function getComparisonType() {
		return $this->comparisonType;
	}
	public function setComparisonValue( $comparisonValue ) {
		$this->comparisonValue = $comparisonValue;
	}
	public function getComparisonValue() {
		return $this->comparisonValue;
	}
}

class GoogleGAL_Service_Analytics_Goals extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Goal';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_McfData extends GoogleGAL_Collection {

	protected $collection_key         = 'rows';
	protected $internal_gapi_mappings = array();
	protected $columnHeadersType      = 'GoogleGAL_Service_Analytics_McfDataColumnHeaders';
	protected $columnHeadersDataType  = 'array';
	public $containsSampledData;
	public $id;
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	protected $profileInfoType     = 'GoogleGAL_Service_Analytics_McfDataProfileInfo';
	protected $profileInfoDataType = '';
	protected $queryType           = 'GoogleGAL_Service_Analytics_McfDataQuery';
	protected $queryDataType       = '';
	protected $rowsType            = 'GoogleGAL_Service_Analytics_McfDataRows';
	protected $rowsDataType        = 'array';
	public $sampleSize;
	public $sampleSpace;
	public $selfLink;
	public $totalResults;
	public $totalsForAllResults;


	public function setColumnHeaders( $columnHeaders ) {
		$this->columnHeaders = $columnHeaders;
	}
	public function getColumnHeaders() {
		return $this->columnHeaders;
	}
	public function setContainsSampledData( $containsSampledData ) {
		$this->containsSampledData = $containsSampledData;
	}
	public function getContainsSampledData() {
		return $this->containsSampledData;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setProfileInfo( GoogleGAL_Service_Analytics_McfDataProfileInfo $profileInfo ) {
		$this->profileInfo = $profileInfo;
	}
	public function getProfileInfo() {
		return $this->profileInfo;
	}
	public function setQuery( GoogleGAL_Service_Analytics_McfDataQuery $query ) {
		$this->query = $query;
	}
	public function getQuery() {
		return $this->query;
	}
	public function setRows( $rows ) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
	public function setSampleSize( $sampleSize ) {
		$this->sampleSize = $sampleSize;
	}
	public function getSampleSize() {
		return $this->sampleSize;
	}
	public function setSampleSpace( $sampleSpace ) {
		$this->sampleSpace = $sampleSpace;
	}
	public function getSampleSpace() {
		return $this->sampleSpace;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setTotalsForAllResults( $totalsForAllResults ) {
		$this->totalsForAllResults = $totalsForAllResults;
	}
	public function getTotalsForAllResults() {
		return $this->totalsForAllResults;
	}
}

class GoogleGAL_Service_Analytics_McfDataColumnHeaders extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $columnType;
	public $dataType;
	public $name;


	public function setColumnType( $columnType ) {
		$this->columnType = $columnType;
	}
	public function getColumnType() {
		return $this->columnType;
	}
	public function setDataType( $dataType ) {
		$this->dataType = $dataType;
	}
	public function getDataType() {
		return $this->dataType;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_McfDataProfileInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $internalWebPropertyId;
	public $profileId;
	public $profileName;
	public $tableId;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setProfileName( $profileName ) {
		$this->profileName = $profileName;
	}
	public function getProfileName() {
		return $this->profileName;
	}
	public function setTableId( $tableId ) {
		$this->tableId = $tableId;
	}
	public function getTableId() {
		return $this->tableId;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_McfDataQuery extends GoogleGAL_Collection {

	protected $collection_key         = 'sort';
	protected $internal_gapi_mappings = array(
		'endDate'    => 'end-date',
		'maxResults' => 'max-results',
		'startDate'  => 'start-date',
		'startIndex' => 'start-index',
	);
	public $dimensions;
	public $endDate;
	public $filters;
	public $ids;
	public $maxResults;
	public $metrics;
	public $samplingLevel;
	public $segment;
	public $sort;
	public $startDate;
	public $startIndex;


	public function setDimensions( $dimensions ) {
		$this->dimensions = $dimensions;
	}
	public function getDimensions() {
		return $this->dimensions;
	}
	public function setEndDate( $endDate ) {
		$this->endDate = $endDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function setFilters( $filters ) {
		$this->filters = $filters;
	}
	public function getFilters() {
		return $this->filters;
	}
	public function setIds( $ids ) {
		$this->ids = $ids;
	}
	public function getIds() {
		return $this->ids;
	}
	public function setMaxResults( $maxResults ) {
		$this->maxResults = $maxResults;
	}
	public function getMaxResults() {
		return $this->maxResults;
	}
	public function setMetrics( $metrics ) {
		$this->metrics = $metrics;
	}
	public function getMetrics() {
		return $this->metrics;
	}
	public function setSamplingLevel( $samplingLevel ) {
		$this->samplingLevel = $samplingLevel;
	}
	public function getSamplingLevel() {
		return $this->samplingLevel;
	}
	public function setSegment( $segment ) {
		$this->segment = $segment;
	}
	public function getSegment() {
		return $this->segment;
	}
	public function setSort( $sort ) {
		$this->sort = $sort;
	}
	public function getSort() {
		return $this->sort;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
}

class GoogleGAL_Service_Analytics_McfDataRows extends GoogleGAL_Collection {

	protected $collection_key              = 'conversionPathValue';
	protected $internal_gapi_mappings      = array();
	protected $conversionPathValueType     = 'GoogleGAL_Service_Analytics_McfDataRowsConversionPathValue';
	protected $conversionPathValueDataType = 'array';
	public $primitiveValue;


	public function setConversionPathValue( $conversionPathValue ) {
		$this->conversionPathValue = $conversionPathValue;
	}
	public function getConversionPathValue() {
		return $this->conversionPathValue;
	}
	public function setPrimitiveValue( $primitiveValue ) {
		$this->primitiveValue = $primitiveValue;
	}
	public function getPrimitiveValue() {
		return $this->primitiveValue;
	}
}

class GoogleGAL_Service_Analytics_McfDataRowsConversionPathValue extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $interactionType;
	public $nodeValue;


	public function setInteractionType( $interactionType ) {
		$this->interactionType = $interactionType;
	}
	public function getInteractionType() {
		return $this->interactionType;
	}
	public function setNodeValue( $nodeValue ) {
		$this->nodeValue = $nodeValue;
	}
	public function getNodeValue() {
		return $this->nodeValue;
	}
}

class GoogleGAL_Service_Analytics_McfDataTotalsForAllResults extends GoogleGAL_Model {

}

class GoogleGAL_Service_Analytics_Profile extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	protected $childLinkType     = 'GoogleGAL_Service_Analytics_ProfileChildLink';
	protected $childLinkDataType = '';
	public $created;
	public $currency;
	public $defaultPage;
	public $eCommerceTracking;
	public $enhancedECommerceTracking;
	public $excludeQueryParameters;
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $name;
	protected $parentLinkType      = 'GoogleGAL_Service_Analytics_ProfileParentLink';
	protected $parentLinkDataType  = '';
	protected $permissionsType     = 'GoogleGAL_Service_Analytics_ProfilePermissions';
	protected $permissionsDataType = '';
	public $selfLink;
	public $siteSearchCategoryParameters;
	public $siteSearchQueryParameters;
	public $stripSiteSearchCategoryParameters;
	public $stripSiteSearchQueryParameters;
	public $timezone;
	public $type;
	public $updated;
	public $webPropertyId;
	public $websiteUrl;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setChildLink( GoogleGAL_Service_Analytics_ProfileChildLink $childLink ) {
		$this->childLink = $childLink;
	}
	public function getChildLink() {
		return $this->childLink;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setCurrency( $currency ) {
		$this->currency = $currency;
	}
	public function getCurrency() {
		return $this->currency;
	}
	public function setDefaultPage( $defaultPage ) {
		$this->defaultPage = $defaultPage;
	}
	public function getDefaultPage() {
		return $this->defaultPage;
	}
	public function setECommerceTracking( $eCommerceTracking ) {
		$this->eCommerceTracking = $eCommerceTracking;
	}
	public function getECommerceTracking() {
		return $this->eCommerceTracking;
	}
	public function setEnhancedECommerceTracking( $enhancedECommerceTracking ) {
		$this->enhancedECommerceTracking = $enhancedECommerceTracking;
	}
	public function getEnhancedECommerceTracking() {
		return $this->enhancedECommerceTracking;
	}
	public function setExcludeQueryParameters( $excludeQueryParameters ) {
		$this->excludeQueryParameters = $excludeQueryParameters;
	}
	public function getExcludeQueryParameters() {
		return $this->excludeQueryParameters;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_ProfileParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setPermissions( GoogleGAL_Service_Analytics_ProfilePermissions $permissions ) {
		$this->permissions = $permissions;
	}
	public function getPermissions() {
		return $this->permissions;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setSiteSearchCategoryParameters( $siteSearchCategoryParameters ) {
		$this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
	}
	public function getSiteSearchCategoryParameters() {
		return $this->siteSearchCategoryParameters;
	}
	public function setSiteSearchQueryParameters( $siteSearchQueryParameters ) {
		$this->siteSearchQueryParameters = $siteSearchQueryParameters;
	}
	public function getSiteSearchQueryParameters() {
		return $this->siteSearchQueryParameters;
	}
	public function setStripSiteSearchCategoryParameters( $stripSiteSearchCategoryParameters ) {
		$this->stripSiteSearchCategoryParameters = $stripSiteSearchCategoryParameters;
	}
	public function getStripSiteSearchCategoryParameters() {
		return $this->stripSiteSearchCategoryParameters;
	}
	public function setStripSiteSearchQueryParameters( $stripSiteSearchQueryParameters ) {
		$this->stripSiteSearchQueryParameters = $stripSiteSearchQueryParameters;
	}
	public function getStripSiteSearchQueryParameters() {
		return $this->stripSiteSearchQueryParameters;
	}
	public function setTimezone( $timezone ) {
		$this->timezone = $timezone;
	}
	public function getTimezone() {
		return $this->timezone;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
	public function setWebsiteUrl( $websiteUrl ) {
		$this->websiteUrl = $websiteUrl;
	}
	public function getWebsiteUrl() {
		return $this->websiteUrl;
	}
}

class GoogleGAL_Service_Analytics_ProfileChildLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_ProfileFilterLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $filterRefType          = 'GoogleGAL_Service_Analytics_FilterRef';
	protected $filterRefDataType      = '';
	public $id;
	public $kind;
	protected $profileRefType     = 'GoogleGAL_Service_Analytics_ProfileRef';
	protected $profileRefDataType = '';
	public $rank;
	public $selfLink;


	public function setFilterRef( GoogleGAL_Service_Analytics_FilterRef $filterRef ) {
		$this->filterRef = $filterRef;
	}
	public function getFilterRef() {
		return $this->filterRef;
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
	public function setProfileRef( GoogleGAL_Service_Analytics_ProfileRef $profileRef ) {
		$this->profileRef = $profileRef;
	}
	public function getProfileRef() {
		return $this->profileRef;
	}
	public function setRank( $rank ) {
		$this->rank = $rank;
	}
	public function getRank() {
		return $this->rank;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
}

class GoogleGAL_Service_Analytics_ProfileFilterLinks extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_ProfileFilterLink';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_ProfileParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_ProfilePermissions extends GoogleGAL_Collection {

	protected $collection_key         = 'effective';
	protected $internal_gapi_mappings = array();
	public $effective;


	public function setEffective( $effective ) {
		$this->effective = $effective;
	}
	public function getEffective() {
		return $this->effective;
	}
}

class GoogleGAL_Service_Analytics_ProfileRef extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $href;
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $name;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_ProfileSummary extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $id;
	public $kind;
	public $name;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_Profiles extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Profile';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_RealtimeData extends GoogleGAL_Collection {

	protected $collection_key         = 'rows';
	protected $internal_gapi_mappings = array();
	protected $columnHeadersType      = 'GoogleGAL_Service_Analytics_RealtimeDataColumnHeaders';
	protected $columnHeadersDataType  = 'array';
	public $id;
	public $kind;
	protected $profileInfoType     = 'GoogleGAL_Service_Analytics_RealtimeDataProfileInfo';
	protected $profileInfoDataType = '';
	protected $queryType           = 'GoogleGAL_Service_Analytics_RealtimeDataQuery';
	protected $queryDataType       = '';
	public $rows;
	public $selfLink;
	public $totalResults;
	public $totalsForAllResults;


	public function setColumnHeaders( $columnHeaders ) {
		$this->columnHeaders = $columnHeaders;
	}
	public function getColumnHeaders() {
		return $this->columnHeaders;
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
	public function setProfileInfo( GoogleGAL_Service_Analytics_RealtimeDataProfileInfo $profileInfo ) {
		$this->profileInfo = $profileInfo;
	}
	public function getProfileInfo() {
		return $this->profileInfo;
	}
	public function setQuery( GoogleGAL_Service_Analytics_RealtimeDataQuery $query ) {
		$this->query = $query;
	}
	public function getQuery() {
		return $this->query;
	}
	public function setRows( $rows ) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setTotalsForAllResults( $totalsForAllResults ) {
		$this->totalsForAllResults = $totalsForAllResults;
	}
	public function getTotalsForAllResults() {
		return $this->totalsForAllResults;
	}
}

class GoogleGAL_Service_Analytics_RealtimeDataColumnHeaders extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $columnType;
	public $dataType;
	public $name;


	public function setColumnType( $columnType ) {
		$this->columnType = $columnType;
	}
	public function getColumnType() {
		return $this->columnType;
	}
	public function setDataType( $dataType ) {
		$this->dataType = $dataType;
	}
	public function getDataType() {
		return $this->dataType;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_RealtimeDataProfileInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $internalWebPropertyId;
	public $profileId;
	public $profileName;
	public $tableId;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setProfileName( $profileName ) {
		$this->profileName = $profileName;
	}
	public function getProfileName() {
		return $this->profileName;
	}
	public function setTableId( $tableId ) {
		$this->tableId = $tableId;
	}
	public function getTableId() {
		return $this->tableId;
	}
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_RealtimeDataQuery extends GoogleGAL_Collection {

	protected $collection_key         = 'sort';
	protected $internal_gapi_mappings = array(
		'maxResults' => 'max-results',
	);
	public $dimensions;
	public $filters;
	public $ids;
	public $maxResults;
	public $metrics;
	public $sort;


	public function setDimensions( $dimensions ) {
		$this->dimensions = $dimensions;
	}
	public function getDimensions() {
		return $this->dimensions;
	}
	public function setFilters( $filters ) {
		$this->filters = $filters;
	}
	public function getFilters() {
		return $this->filters;
	}
	public function setIds( $ids ) {
		$this->ids = $ids;
	}
	public function getIds() {
		return $this->ids;
	}
	public function setMaxResults( $maxResults ) {
		$this->maxResults = $maxResults;
	}
	public function getMaxResults() {
		return $this->maxResults;
	}
	public function setMetrics( $metrics ) {
		$this->metrics = $metrics;
	}
	public function getMetrics() {
		return $this->metrics;
	}
	public function setSort( $sort ) {
		$this->sort = $sort;
	}
	public function getSort() {
		return $this->sort;
	}
}

class GoogleGAL_Service_Analytics_RealtimeDataTotalsForAllResults extends GoogleGAL_Model {

}

class GoogleGAL_Service_Analytics_Segment extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $created;
	public $definition;
	public $id;
	public $kind;
	public $name;
	public $segmentId;
	public $selfLink;
	public $type;
	public $updated;


	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setDefinition( $definition ) {
		$this->definition = $definition;
	}
	public function getDefinition() {
		return $this->definition;
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
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setSegmentId( $segmentId ) {
		$this->segmentId = $segmentId;
	}
	public function getSegmentId() {
		return $this->segmentId;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
}

class GoogleGAL_Service_Analytics_Segments extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Segment';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_UnsampledReport extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array(
		'endDate'   => 'end-date',
		'startDate' => 'start-date',
	);
	public $accountId;
	protected $cloudStorageDownloadDetailsType     = 'GoogleGAL_Service_Analytics_UnsampledReportCloudStorageDownloadDetails';
	protected $cloudStorageDownloadDetailsDataType = '';
	public $created;
	public $dimensions;
	public $downloadType;
	protected $driveDownloadDetailsType     = 'GoogleGAL_Service_Analytics_UnsampledReportDriveDownloadDetails';
	protected $driveDownloadDetailsDataType = '';
	public $endDate;
	public $filters;
	public $id;
	public $kind;
	public $metrics;
	public $profileId;
	public $segment;
	public $selfLink;
	public $startDate;
	public $status;
	public $title;
	public $updated;
	public $webPropertyId;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setCloudStorageDownloadDetails( GoogleGAL_Service_Analytics_UnsampledReportCloudStorageDownloadDetails $cloudStorageDownloadDetails ) {
		$this->cloudStorageDownloadDetails = $cloudStorageDownloadDetails;
	}
	public function getCloudStorageDownloadDetails() {
		return $this->cloudStorageDownloadDetails;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setDimensions( $dimensions ) {
		$this->dimensions = $dimensions;
	}
	public function getDimensions() {
		return $this->dimensions;
	}
	public function setDownloadType( $downloadType ) {
		$this->downloadType = $downloadType;
	}
	public function getDownloadType() {
		return $this->downloadType;
	}
	public function setDriveDownloadDetails( GoogleGAL_Service_Analytics_UnsampledReportDriveDownloadDetails $driveDownloadDetails ) {
		$this->driveDownloadDetails = $driveDownloadDetails;
	}
	public function getDriveDownloadDetails() {
		return $this->driveDownloadDetails;
	}
	public function setEndDate( $endDate ) {
		$this->endDate = $endDate;
	}
	public function getEndDate() {
		return $this->endDate;
	}
	public function setFilters( $filters ) {
		$this->filters = $filters;
	}
	public function getFilters() {
		return $this->filters;
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
	public function setMetrics( $metrics ) {
		$this->metrics = $metrics;
	}
	public function getMetrics() {
		return $this->metrics;
	}
	public function setProfileId( $profileId ) {
		$this->profileId = $profileId;
	}
	public function getProfileId() {
		return $this->profileId;
	}
	public function setSegment( $segment ) {
		$this->segment = $segment;
	}
	public function getSegment() {
		return $this->segment;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setStartDate( $startDate ) {
		$this->startDate = $startDate;
	}
	public function getStartDate() {
		return $this->startDate;
	}
	public function setStatus( $status ) {
		$this->status = $status;
	}
	public function getStatus() {
		return $this->status;
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
	public function setWebPropertyId( $webPropertyId ) {
		$this->webPropertyId = $webPropertyId;
	}
	public function getWebPropertyId() {
		return $this->webPropertyId;
	}
}

class GoogleGAL_Service_Analytics_UnsampledReportCloudStorageDownloadDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $bucketId;
	public $objectId;


	public function setBucketId( $bucketId ) {
		$this->bucketId = $bucketId;
	}
	public function getBucketId() {
		return $this->bucketId;
	}
	public function setObjectId( $objectId ) {
		$this->objectId = $objectId;
	}
	public function getObjectId() {
		return $this->objectId;
	}
}

class GoogleGAL_Service_Analytics_UnsampledReportDriveDownloadDetails extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $documentId;


	public function setDocumentId( $documentId ) {
		$this->documentId = $documentId;
	}
	public function getDocumentId() {
		return $this->documentId;
	}
}

class GoogleGAL_Service_Analytics_UnsampledReports extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_UnsampledReport';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_Upload extends GoogleGAL_Collection {

	protected $collection_key         = 'errors';
	protected $internal_gapi_mappings = array();
	public $accountId;
	public $customDataSourceId;
	public $errors;
	public $id;
	public $kind;
	public $status;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setCustomDataSourceId( $customDataSourceId ) {
		$this->customDataSourceId = $customDataSourceId;
	}
	public function getCustomDataSourceId() {
		return $this->customDataSourceId;
	}
	public function setErrors( $errors ) {
		$this->errors = $errors;
	}
	public function getErrors() {
		return $this->errors;
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
	public function setStatus( $status ) {
		$this->status = $status;
	}
	public function getStatus() {
		return $this->status;
	}
}

class GoogleGAL_Service_Analytics_Uploads extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Upload';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
}

class GoogleGAL_Service_Analytics_UserRef extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $email;
	public $id;
	public $kind;


	public function setEmail( $email ) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
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
}

class GoogleGAL_Service_Analytics_WebPropertyRef extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	public $href;
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $name;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
}

class GoogleGAL_Service_Analytics_WebPropertySummary extends GoogleGAL_Collection {

	protected $collection_key         = 'profiles';
	protected $internal_gapi_mappings = array();
	public $id;
	public $internalWebPropertyId;
	public $kind;
	public $level;
	public $name;
	protected $profilesType     = 'GoogleGAL_Service_Analytics_ProfileSummary';
	protected $profilesDataType = 'array';
	public $websiteUrl;


	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLevel( $level ) {
		$this->level = $level;
	}
	public function getLevel() {
		return $this->level;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setProfiles( $profiles ) {
		$this->profiles = $profiles;
	}
	public function getProfiles() {
		return $this->profiles;
	}
	public function setWebsiteUrl( $websiteUrl ) {
		$this->websiteUrl = $websiteUrl;
	}
	public function getWebsiteUrl() {
		return $this->websiteUrl;
	}
}

class GoogleGAL_Service_Analytics_Webproperties extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Analytics_Webproperty';
	protected $itemsDataType          = 'array';
	public $itemsPerPage;
	public $kind;
	public $nextLink;
	public $previousLink;
	public $startIndex;
	public $totalResults;
	public $username;


	public function setItems( $items ) {
		$this->items = $items;
	}
	public function getItems() {
		return $this->items;
	}
	public function setItemsPerPage( $itemsPerPage ) {
		$this->itemsPerPage = $itemsPerPage;
	}
	public function getItemsPerPage() {
		return $this->itemsPerPage;
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
	public function setPreviousLink( $previousLink ) {
		$this->previousLink = $previousLink;
	}
	public function getPreviousLink() {
		return $this->previousLink;
	}
	public function setStartIndex( $startIndex ) {
		$this->startIndex = $startIndex;
	}
	public function getStartIndex() {
		return $this->startIndex;
	}
	public function setTotalResults( $totalResults ) {
		$this->totalResults = $totalResults;
	}
	public function getTotalResults() {
		return $this->totalResults;
	}
	public function setUsername( $username ) {
		$this->username = $username;
	}
	public function getUsername() {
		return $this->username;
	}
}

class GoogleGAL_Service_Analytics_Webproperty extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accountId;
	protected $childLinkType     = 'GoogleGAL_Service_Analytics_WebpropertyChildLink';
	protected $childLinkDataType = '';
	public $created;
	public $defaultProfileId;
	public $id;
	public $industryVertical;
	public $internalWebPropertyId;
	public $kind;
	public $level;
	public $name;
	protected $parentLinkType      = 'GoogleGAL_Service_Analytics_WebpropertyParentLink';
	protected $parentLinkDataType  = '';
	protected $permissionsType     = 'GoogleGAL_Service_Analytics_WebpropertyPermissions';
	protected $permissionsDataType = '';
	public $profileCount;
	public $selfLink;
	public $updated;
	public $websiteUrl;


	public function setAccountId( $accountId ) {
		$this->accountId = $accountId;
	}
	public function getAccountId() {
		return $this->accountId;
	}
	public function setChildLink( GoogleGAL_Service_Analytics_WebpropertyChildLink $childLink ) {
		$this->childLink = $childLink;
	}
	public function getChildLink() {
		return $this->childLink;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setDefaultProfileId( $defaultProfileId ) {
		$this->defaultProfileId = $defaultProfileId;
	}
	public function getDefaultProfileId() {
		return $this->defaultProfileId;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setIndustryVertical( $industryVertical ) {
		$this->industryVertical = $industryVertical;
	}
	public function getIndustryVertical() {
		return $this->industryVertical;
	}
	public function setInternalWebPropertyId( $internalWebPropertyId ) {
		$this->internalWebPropertyId = $internalWebPropertyId;
	}
	public function getInternalWebPropertyId() {
		return $this->internalWebPropertyId;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLevel( $level ) {
		$this->level = $level;
	}
	public function getLevel() {
		return $this->level;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setParentLink( GoogleGAL_Service_Analytics_WebpropertyParentLink $parentLink ) {
		$this->parentLink = $parentLink;
	}
	public function getParentLink() {
		return $this->parentLink;
	}
	public function setPermissions( GoogleGAL_Service_Analytics_WebpropertyPermissions $permissions ) {
		$this->permissions = $permissions;
	}
	public function getPermissions() {
		return $this->permissions;
	}
	public function setProfileCount( $profileCount ) {
		$this->profileCount = $profileCount;
	}
	public function getProfileCount() {
		return $this->profileCount;
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
	public function setWebsiteUrl( $websiteUrl ) {
		$this->websiteUrl = $websiteUrl;
	}
	public function getWebsiteUrl() {
		return $this->websiteUrl;
	}
}

class GoogleGAL_Service_Analytics_WebpropertyChildLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_WebpropertyParentLink extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $href;
	public $type;


	public function setHref( $href ) {
		$this->href = $href;
	}
	public function getHref() {
		return $this->href;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Analytics_WebpropertyPermissions extends GoogleGAL_Collection {

	protected $collection_key         = 'effective';
	protected $internal_gapi_mappings = array();
	public $effective;


	public function setEffective( $effective ) {
		$this->effective = $effective;
	}
	public function getEffective() {
		return $this->effective;
	}
}
