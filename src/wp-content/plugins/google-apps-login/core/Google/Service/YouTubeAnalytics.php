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
 * Service definition for YouTubeAnalytics (v1).
 *
 * <p>
 * Retrieve your YouTube Analytics reports.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://developers.google.com/youtube/analytics/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_YouTubeAnalytics extends GoogleGAL_Service {

	/** View YouTube Analytics monetary reports for your YouTube content. */
	const YT_ANALYTICS_MONETARY_READONLY =
	  'https://www.googleapis.com/auth/yt-analytics-monetary.readonly';
	/** View YouTube Analytics reports for your YouTube content. */
	const YT_ANALYTICS_READONLY =
	  'https://www.googleapis.com/auth/yt-analytics.readonly';

	public $batchReportDefinitions;
	public $batchReports;
	public $reports;


	/**
	 * Constructs the internal representation of the YouTubeAnalytics service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'youtube/analytics/v1/';
		$this->version     = 'v1';
		$this->serviceName = 'youtubeAnalytics';

		$this->batchReportDefinitions = new GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitions_Resource(
			$this,
			$this->serviceName,
			'batchReportDefinitions',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'batchReportDefinitions',
						'httpMethod' => 'GET',
						'parameters' => array(
							'onBehalfOfContentOwner' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->batchReports           = new GoogleGAL_Service_YouTubeAnalytics_BatchReports_Resource(
			$this,
			$this->serviceName,
			'batchReports',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'batchReports',
						'httpMethod' => 'GET',
						'parameters' => array(
							'batchReportDefinitionId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'onBehalfOfContentOwner'  => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->reports                = new GoogleGAL_Service_YouTubeAnalytics_Reports_Resource(
			$this,
			$this->serviceName,
			'reports',
			array(
				'methods' => array(
					'query' => array(
						'path'       => 'reports',
						'httpMethod' => 'GET',
						'parameters' => array(
							'ids'         => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'start-date'  => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'end-date'    => array(
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
							'start-index' => array(
								'location' => 'query',
								'type'     => 'integer',
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
	}
}


/**
 * The "batchReportDefinitions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeAnalyticsService = new GoogleGAL_Service_YouTubeAnalytics(...);
 *   $batchReportDefinitions = $youtubeAnalyticsService->batchReportDefinitions;
 *  </code>
 */
class GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitions_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieves a list of available batch report definitions.
	 * (batchReportDefinitions.listBatchReportDefinitions)
	 *
	 * @param string $onBehalfOfContentOwner The onBehalfOfContentOwner parameter
	 * identifies the content owner that the user is acting on behalf of.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionList
	 */
	public function listBatchReportDefinitions( $onBehalfOfContentOwner, $optParams = array() ) {
		$params = array( 'onBehalfOfContentOwner' => $onBehalfOfContentOwner );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionList' );
	}
}

/**
 * The "batchReports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeAnalyticsService = new GoogleGAL_Service_YouTubeAnalytics(...);
 *   $batchReports = $youtubeAnalyticsService->batchReports;
 *  </code>
 */
class GoogleGAL_Service_YouTubeAnalytics_BatchReports_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieves a list of processed batch reports. (batchReports.listBatchReports)
	 *
	 * @param string $batchReportDefinitionId The batchReportDefinitionId parameter
	 * specifies the ID of the batch reportort definition for which you are
	 * retrieving reports.
	 * @param string $onBehalfOfContentOwner The onBehalfOfContentOwner parameter
	 * identifies the content owner that the user is acting on behalf of.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_YouTubeAnalytics_BatchReportList
	 */
	public function listBatchReports( $batchReportDefinitionId, $onBehalfOfContentOwner, $optParams = array() ) {
		$params = array(
			'batchReportDefinitionId' => $batchReportDefinitionId,
			'onBehalfOfContentOwner'  => $onBehalfOfContentOwner,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_YouTubeAnalytics_BatchReportList' );
	}
}

/**
 * The "reports" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeAnalyticsService = new GoogleGAL_Service_YouTubeAnalytics(...);
 *   $reports = $youtubeAnalyticsService->reports;
 *  </code>
 */
class GoogleGAL_Service_YouTubeAnalytics_Reports_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieve your YouTube Analytics reports. (reports.query)
	 *
	 * @param string $ids Identifies the YouTube channel or content owner for which
	 * you are retrieving YouTube Analytics data. - To request data for a YouTube
	 * user, set the ids parameter value to channel==CHANNEL_ID, where CHANNEL_ID
	 * specifies the unique YouTube channel ID. - To request data for a YouTube CMS
	 * content owner, set the ids parameter value to contentOwner==OWNER_NAME, where
	 * OWNER_NAME is the CMS name of the content owner.
	 * @param string $startDate The start date for fetching YouTube Analytics data.
	 * The value should be in YYYY-MM-DD format.
	 * @param string $endDate The end date for fetching YouTube Analytics data. The
	 * value should be in YYYY-MM-DD format.
	 * @param string $metrics A comma-separated list of YouTube Analytics metrics,
	 * such as views or likes,dislikes. See the Available Reports document for a
	 * list of the reports that you can retrieve and the metrics available in each
	 * report, and see the Metrics document for definitions of those metrics.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int max-results The maximum number of rows to include in the
	 * response.
	 * @opt_param string sort A comma-separated list of dimensions or metrics that
	 * determine the sort order for YouTube Analytics data. By default the sort
	 * order is ascending. The '-' prefix causes descending sort order.
	 * @opt_param string dimensions A comma-separated list of YouTube Analytics
	 * dimensions, such as views or ageGroup,gender. See the Available Reports
	 * document for a list of the reports that you can retrieve and the dimensions
	 * used for those reports. Also see the Dimensions document for definitions of
	 * those dimensions.
	 * @opt_param int start-index An index of the first entity to retrieve. Use this
	 * parameter as a pagination mechanism along with the max-results parameter
	 * (one-based, inclusive).
	 * @opt_param string filters A list of filters that should be applied when
	 * retrieving YouTube Analytics data. The Available Reports document identifies
	 * the dimensions that can be used to filter each report, and the Dimensions
	 * document defines those dimensions. If a request uses multiple filters, join
	 * them together with a semicolon (;), and the returned result table will
	 * satisfy both filters. For example, a filters parameter value of
	 * video==dMH0bHeiRNg;country==IT restricts the result set to include data for
	 * the given video in Italy.
	 * @return GoogleGAL_Service_YouTubeAnalytics_ResultTable
	 */
	public function query( $ids, $startDate, $endDate, $metrics, $optParams = array() ) {
		$params = array(
			'ids'        => $ids,
			'start-date' => $startDate,
			'end-date'   => $endDate,
			'metrics'    => $metrics,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'query', array( $params ), 'GoogleGAL_Service_YouTubeAnalytics_ResultTable' );
	}
}




class GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionList extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionTemplate';
	protected $itemsDataType          = 'array';
	public $kind;


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

class GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionTemplate extends GoogleGAL_Collection {

	protected $collection_key         = 'defaultOutput';
	protected $internal_gapi_mappings = array();
	protected $defaultOutputType      = 'GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionTemplateDefaultOutput';
	protected $defaultOutputDataType  = 'array';
	public $id;
	public $name;
	public $status;
	public $type;


	public function setDefaultOutput( $defaultOutput ) {
		$this->defaultOutput = $defaultOutput;
	}
	public function getDefaultOutput() {
		return $this->defaultOutput;
	}
	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
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
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_BatchReportDefinitionTemplateDefaultOutput extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $format;
	public $type;


	public function setFormat( $format ) {
		$this->format = $format;
	}
	public function getFormat() {
		return $this->format;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_BatchReportList extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplate';
	protected $itemsDataType          = 'array';
	public $kind;


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

class GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplate extends GoogleGAL_Collection {

	protected $collection_key         = 'outputs';
	protected $internal_gapi_mappings = array(
		'reportId' => 'report_id',
	);
	public $id;
	protected $outputsType     = 'GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplateOutputs';
	protected $outputsDataType = 'array';
	public $reportId;
	protected $timeSpanType     = 'GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplateTimeSpan';
	protected $timeSpanDataType = '';
	public $timeUpdated;


	public function setId( $id ) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	public function setOutputs( $outputs ) {
		$this->outputs = $outputs;
	}
	public function getOutputs() {
		return $this->outputs;
	}
	public function setReportId( $reportId ) {
		$this->reportId = $reportId;
	}
	public function getReportId() {
		return $this->reportId;
	}
	public function setTimeSpan( GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplateTimeSpan $timeSpan ) {
		$this->timeSpan = $timeSpan;
	}
	public function getTimeSpan() {
		return $this->timeSpan;
	}
	public function setTimeUpdated( $timeUpdated ) {
		$this->timeUpdated = $timeUpdated;
	}
	public function getTimeUpdated() {
		return $this->timeUpdated;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplateOutputs extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $downloadUrl;
	public $format;
	public $type;


	public function setDownloadUrl( $downloadUrl ) {
		$this->downloadUrl = $downloadUrl;
	}
	public function getDownloadUrl() {
		return $this->downloadUrl;
	}
	public function setFormat( $format ) {
		$this->format = $format;
	}
	public function getFormat() {
		return $this->format;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_BatchReportTemplateTimeSpan extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $endTime;
	public $startTime;


	public function setEndTime( $endTime ) {
		$this->endTime = $endTime;
	}
	public function getEndTime() {
		return $this->endTime;
	}
	public function setStartTime( $startTime ) {
		$this->startTime = $startTime;
	}
	public function getStartTime() {
		return $this->startTime;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_ResultTable extends GoogleGAL_Collection {

	protected $collection_key         = 'rows';
	protected $internal_gapi_mappings = array();
	protected $columnHeadersType      = 'GoogleGAL_Service_YouTubeAnalytics_ResultTableColumnHeaders';
	protected $columnHeadersDataType  = 'array';
	public $kind;
	public $rows;


	public function setColumnHeaders( $columnHeaders ) {
		$this->columnHeaders = $columnHeaders;
	}
	public function getColumnHeaders() {
		return $this->columnHeaders;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setRows( $rows ) {
		$this->rows = $rows;
	}
	public function getRows() {
		return $this->rows;
	}
}

class GoogleGAL_Service_YouTubeAnalytics_ResultTableColumnHeaders extends GoogleGAL_Model {

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
