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
 * Service definition for CloudMonitoring (v2beta1).
 *
 * <p>
 * API for accessing Google Cloud and API monitoring data.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/cloud-monitoring/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_CloudMonitoring extends GoogleGAL_Service {

	/** View monitoring data for all of your Google Cloud and API projects. */
	const MONITORING_READONLY =
	  'https://www.googleapis.com/auth/monitoring.readonly';

	public $metricDescriptors;
	public $timeseries;
	public $timeseriesDescriptors;


	/**
	 * Constructs the internal representation of the CloudMonitoring service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'cloudmonitoring/v2beta1/projects/';
		$this->version     = 'v2beta1';
		$this->serviceName = 'cloudmonitoring';

		$this->metricDescriptors     = new GoogleGAL_Service_CloudMonitoring_MetricDescriptors_Resource(
			$this,
			$this->serviceName,
			'metricDescriptors',
			array(
				'methods' => array(
					'list' => array(
						'path'       => '{project}/metricDescriptors',
						'httpMethod' => 'GET',
						'parameters' => array(
							'project'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'count'     => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'pageToken' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'query'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->timeseries            = new GoogleGAL_Service_CloudMonitoring_Timeseries_Resource(
			$this,
			$this->serviceName,
			'timeseries',
			array(
				'methods' => array(
					'list' => array(
						'path'       => '{project}/timeseries/{metric}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'project'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'metric'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'youngest'  => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'count'     => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'timespan'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'labels'    => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'pageToken' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'oldest'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->timeseriesDescriptors = new GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptors_Resource(
			$this,
			$this->serviceName,
			'timeseriesDescriptors',
			array(
				'methods' => array(
					'list' => array(
						'path'       => '{project}/timeseriesDescriptors/{metric}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'project'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'metric'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'youngest'  => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'count'     => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'timespan'  => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'labels'    => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'pageToken' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'oldest'    => array(
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
 * The "metricDescriptors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudmonitoringService = new GoogleGAL_Service_CloudMonitoring(...);
 *   $metricDescriptors = $cloudmonitoringService->metricDescriptors;
 *  </code>
 */
class GoogleGAL_Service_CloudMonitoring_MetricDescriptors_Resource extends GoogleGAL_Service_Resource {


	/**
	 * List metric descriptors that match the query. If the query is not set, then
	 * all of the metric descriptors will be returned. Large responses will be
	 * paginated, use the nextPageToken returned in the response to request
	 * subsequent pages of results by setting the pageToken query parameter to the
	 * value of the nextPageToken. (metricDescriptors.listMetricDescriptors)
	 *
	 * @param string $project The project id. The value can be the numeric project
	 * ID or string-based project name.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int count Maximum number of metric descriptors per page. Used for
	 * pagination. If not specified, count = 100.
	 * @opt_param string pageToken The pagination token, which is used to page
	 * through large result sets. Set this value to the value of the nextPageToken
	 * to retrieve the next page of results.
	 * @opt_param string query The query used to search against existing metrics.
	 * Separate keywords with a space; the service joins all keywords with AND,
	 * meaning that all keywords must match for a metric to be returned. If this
	 * field is omitted, all metrics are returned. If an empty string is passed with
	 * this field, no metrics are returned.
	 * @return GoogleGAL_Service_CloudMonitoring_ListMetricDescriptorsResponse
	 */
	public function listMetricDescriptors( $project, $optParams = array() ) {
		$params = array( 'project' => $project );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_CloudMonitoring_ListMetricDescriptorsResponse' );
	}
}

/**
 * The "timeseries" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudmonitoringService = new GoogleGAL_Service_CloudMonitoring(...);
 *   $timeseries = $cloudmonitoringService->timeseries;
 *  </code>
 */
class GoogleGAL_Service_CloudMonitoring_Timeseries_Resource extends GoogleGAL_Service_Resource {


	/**
	 * List the data points of the time series that match the metric and labels
	 * values and that have data points in the interval. Large responses are
	 * paginated; use the nextPageToken returned in the response to request
	 * subsequent pages of results by setting the pageToken query parameter to the
	 * value of the nextPageToken. (timeseries.listTimeseries)
	 *
	 * @param string $project The project ID to which this time series belongs. The
	 * value can be the numeric project ID or string-based project name.
	 * @param string $metric Metric names are protocol-free URLs as listed in the
	 * Supported Metrics page. For example,
	 * compute.googleapis.com/instance/disk/read_ops_count.
	 * @param string $youngest End of the time interval (inclusive), which is
	 * expressed as an RFC 3339 timestamp.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int count Maximum number of data points per page, which is used
	 * for pagination of results.
	 * @opt_param string timespan Length of the time interval to query, which is an
	 * alternative way to declare the interval: (youngest - timespan, youngest]. The
	 * timespan and oldest parameters should not be used together. Units: - s:
	 * second  - m: minute  - h: hour  - d: day  - w: week  Examples: 2s, 3m, 4w.
	 * Only one unit is allowed, for example: 2w3d is not allowed; you should use
	 * 17d instead.
	 *
	 * If neither oldest nor timespan is specified, the default time interval will
	 * be (youngest - 4 hours, youngest].
	 * @opt_param string labels A collection of labels for the matching time series,
	 * which are represented as: - key==value: key equals the value  - key=~value:
	 * key regex matches the value  - key!=value: key does not equal the value  -
	 * key!~value: key regex does not match the value  For example, to list all of
	 * the time series descriptors for the region us-central1, you could specify:
	 * label=cloud.googleapis.com%2Flocation=~us-central1.*
	 * @opt_param string pageToken The pagination token, which is used to page
	 * through large result sets. Set this value to the value of the nextPageToken
	 * to retrieve the next page of results.
	 * @opt_param string oldest Start of the time interval (exclusive), which is
	 * expressed as an RFC 3339 timestamp. If neither oldest nor timespan is
	 * specified, the default time interval will be (youngest - 4 hours, youngest]
	 * @return GoogleGAL_Service_CloudMonitoring_ListTimeseriesResponse
	 */
	public function listTimeseries( $project, $metric, $youngest, $optParams = array() ) {
		$params = array(
			'project'  => $project,
			'metric'   => $metric,
			'youngest' => $youngest,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_CloudMonitoring_ListTimeseriesResponse' );
	}
}

/**
 * The "timeseriesDescriptors" collection of methods.
 * Typical usage is:
 *  <code>
 *   $cloudmonitoringService = new GoogleGAL_Service_CloudMonitoring(...);
 *   $timeseriesDescriptors = $cloudmonitoringService->timeseriesDescriptors;
 *  </code>
 */
class GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptors_Resource extends GoogleGAL_Service_Resource {


	/**
	 * List the descriptors of the time series that match the metric and labels
	 * values and that have data points in the interval. Large responses are
	 * paginated; use the nextPageToken returned in the response to request
	 * subsequent pages of results by setting the pageToken query parameter to the
	 * value of the nextPageToken. (timeseriesDescriptors.listTimeseriesDescriptors)
	 *
	 * @param string $project The project ID to which this time series belongs. The
	 * value can be the numeric project ID or string-based project name.
	 * @param string $metric Metric names are protocol-free URLs as listed in the
	 * Supported Metrics page. For example,
	 * compute.googleapis.com/instance/disk/read_ops_count.
	 * @param string $youngest End of the time interval (inclusive), which is
	 * expressed as an RFC 3339 timestamp.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int count Maximum number of time series descriptors per page. Used
	 * for pagination. If not specified, count = 100.
	 * @opt_param string timespan Length of the time interval to query, which is an
	 * alternative way to declare the interval: (youngest - timespan, youngest]. The
	 * timespan and oldest parameters should not be used together. Units: - s:
	 * second  - m: minute  - h: hour  - d: day  - w: week  Examples: 2s, 3m, 4w.
	 * Only one unit is allowed, for example: 2w3d is not allowed; you should use
	 * 17d instead.
	 *
	 * If neither oldest nor timespan is specified, the default time interval will
	 * be (youngest - 4 hours, youngest].
	 * @opt_param string labels A collection of labels for the matching time series,
	 * which are represented as: - key==value: key equals the value  - key=~value:
	 * key regex matches the value  - key!=value: key does not equal the value  -
	 * key!~value: key regex does not match the value  For example, to list all of
	 * the time series descriptors for the region us-central1, you could specify:
	 * label=cloud.googleapis.com%2Flocation=~us-central1.*
	 * @opt_param string pageToken The pagination token, which is used to page
	 * through large result sets. Set this value to the value of the nextPageToken
	 * to retrieve the next page of results.
	 * @opt_param string oldest Start of the time interval (exclusive), which is
	 * expressed as an RFC 3339 timestamp. If neither oldest nor timespan is
	 * specified, the default time interval will be (youngest - 4 hours, youngest]
	 * @return GoogleGAL_Service_CloudMonitoring_ListTimeseriesDescriptorsResponse
	 */
	public function listTimeseriesDescriptors( $project, $metric, $youngest, $optParams = array() ) {
		$params = array(
			'project'  => $project,
			'metric'   => $metric,
			'youngest' => $youngest,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_CloudMonitoring_ListTimeseriesDescriptorsResponse' );
	}
}




class GoogleGAL_Service_CloudMonitoring_ListMetricDescriptorsRequest extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $kind;


	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_CloudMonitoring_ListMetricDescriptorsResponse extends GoogleGAL_Collection {

	protected $collection_key         = 'metrics';
	protected $internal_gapi_mappings = array();
	public $kind;
	protected $metricsType     = 'GoogleGAL_Service_CloudMonitoring_MetricDescriptor';
	protected $metricsDataType = 'array';
	public $nextPageToken;


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
	public function setNextPageToken( $nextPageToken ) {
		$this->nextPageToken = $nextPageToken;
	}
	public function getNextPageToken() {
		return $this->nextPageToken;
	}
}

class GoogleGAL_Service_CloudMonitoring_ListTimeseriesDescriptorsRequest extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $kind;


	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_CloudMonitoring_ListTimeseriesDescriptorsResponse extends GoogleGAL_Collection {

	protected $collection_key         = 'timeseries';
	protected $internal_gapi_mappings = array();
	public $kind;
	public $nextPageToken;
	public $oldest;
	protected $timeseriesType     = 'GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptor';
	protected $timeseriesDataType = 'array';
	public $youngest;


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
	public function setOldest( $oldest ) {
		$this->oldest = $oldest;
	}
	public function getOldest() {
		return $this->oldest;
	}
	public function setTimeseries( $timeseries ) {
		$this->timeseries = $timeseries;
	}
	public function getTimeseries() {
		return $this->timeseries;
	}
	public function setYoungest( $youngest ) {
		$this->youngest = $youngest;
	}
	public function getYoungest() {
		return $this->youngest;
	}
}

class GoogleGAL_Service_CloudMonitoring_ListTimeseriesRequest extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $kind;


	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_CloudMonitoring_ListTimeseriesResponse extends GoogleGAL_Collection {

	protected $collection_key         = 'timeseries';
	protected $internal_gapi_mappings = array();
	public $kind;
	public $nextPageToken;
	public $oldest;
	protected $timeseriesType     = 'GoogleGAL_Service_CloudMonitoring_Timeseries';
	protected $timeseriesDataType = 'array';
	public $youngest;


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
	public function setOldest( $oldest ) {
		$this->oldest = $oldest;
	}
	public function getOldest() {
		return $this->oldest;
	}
	public function setTimeseries( $timeseries ) {
		$this->timeseries = $timeseries;
	}
	public function getTimeseries() {
		return $this->timeseries;
	}
	public function setYoungest( $youngest ) {
		$this->youngest = $youngest;
	}
	public function getYoungest() {
		return $this->youngest;
	}
}

class GoogleGAL_Service_CloudMonitoring_MetricDescriptor extends GoogleGAL_Collection {

	protected $collection_key         = 'labels';
	protected $internal_gapi_mappings = array();
	public $description;
	protected $labelsType     = 'GoogleGAL_Service_CloudMonitoring_MetricDescriptorLabelDescriptor';
	protected $labelsDataType = 'array';
	public $name;
	public $project;
	protected $typeDescriptorType     = 'GoogleGAL_Service_CloudMonitoring_MetricDescriptorTypeDescriptor';
	protected $typeDescriptorDataType = '';


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setLabels( $labels ) {
		$this->labels = $labels;
	}
	public function getLabels() {
		return $this->labels;
	}
	public function setName( $name ) {
		$this->name = $name;
	}
	public function getName() {
		return $this->name;
	}
	public function setProject( $project ) {
		$this->project = $project;
	}
	public function getProject() {
		return $this->project;
	}
	public function setTypeDescriptor( GoogleGAL_Service_CloudMonitoring_MetricDescriptorTypeDescriptor $typeDescriptor ) {
		$this->typeDescriptor = $typeDescriptor;
	}
	public function getTypeDescriptor() {
		return $this->typeDescriptor;
	}
}

class GoogleGAL_Service_CloudMonitoring_MetricDescriptorLabelDescriptor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $description;
	public $key;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setKey( $key ) {
		$this->key = $key;
	}
	public function getKey() {
		return $this->key;
	}
}

class GoogleGAL_Service_CloudMonitoring_MetricDescriptorTypeDescriptor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $metricType;
	public $valueType;


	public function setMetricType( $metricType ) {
		$this->metricType = $metricType;
	}
	public function getMetricType() {
		return $this->metricType;
	}
	public function setValueType( $valueType ) {
		$this->valueType = $valueType;
	}
	public function getValueType() {
		return $this->valueType;
	}
}

class GoogleGAL_Service_CloudMonitoring_Point extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $boolValue;
	protected $distributionValueType     = 'GoogleGAL_Service_CloudMonitoring_PointDistribution';
	protected $distributionValueDataType = '';
	public $doubleValue;
	public $end;
	public $int64Value;
	public $start;
	public $stringValue;


	public function setBoolValue( $boolValue ) {
		$this->boolValue = $boolValue;
	}
	public function getBoolValue() {
		return $this->boolValue;
	}
	public function setDistributionValue( GoogleGAL_Service_CloudMonitoring_PointDistribution $distributionValue ) {
		$this->distributionValue = $distributionValue;
	}
	public function getDistributionValue() {
		return $this->distributionValue;
	}
	public function setDoubleValue( $doubleValue ) {
		$this->doubleValue = $doubleValue;
	}
	public function getDoubleValue() {
		return $this->doubleValue;
	}
	public function setEnd( $end ) {
		$this->end = $end;
	}
	public function getEnd() {
		return $this->end;
	}
	public function setInt64Value( $int64Value ) {
		$this->int64Value = $int64Value;
	}
	public function getInt64Value() {
		return $this->int64Value;
	}
	public function setStart( $start ) {
		$this->start = $start;
	}
	public function getStart() {
		return $this->start;
	}
	public function setStringValue( $stringValue ) {
		$this->stringValue = $stringValue;
	}
	public function getStringValue() {
		return $this->stringValue;
	}
}

class GoogleGAL_Service_CloudMonitoring_PointDistribution extends GoogleGAL_Collection {

	protected $collection_key          = 'buckets';
	protected $internal_gapi_mappings  = array();
	protected $bucketsType             = 'GoogleGAL_Service_CloudMonitoring_PointDistributionBucket';
	protected $bucketsDataType         = 'array';
	protected $overflowBucketType      = 'GoogleGAL_Service_CloudMonitoring_PointDistributionOverflowBucket';
	protected $overflowBucketDataType  = '';
	protected $underflowBucketType     = 'GoogleGAL_Service_CloudMonitoring_PointDistributionUnderflowBucket';
	protected $underflowBucketDataType = '';


	public function setBuckets( $buckets ) {
		$this->buckets = $buckets;
	}
	public function getBuckets() {
		return $this->buckets;
	}
	public function setOverflowBucket( GoogleGAL_Service_CloudMonitoring_PointDistributionOverflowBucket $overflowBucket ) {
		$this->overflowBucket = $overflowBucket;
	}
	public function getOverflowBucket() {
		return $this->overflowBucket;
	}
	public function setUnderflowBucket( GoogleGAL_Service_CloudMonitoring_PointDistributionUnderflowBucket $underflowBucket ) {
		$this->underflowBucket = $underflowBucket;
	}
	public function getUnderflowBucket() {
		return $this->underflowBucket;
	}
}

class GoogleGAL_Service_CloudMonitoring_PointDistributionBucket extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $count;
	public $lowerBound;
	public $upperBound;


	public function setCount( $count ) {
		$this->count = $count;
	}
	public function getCount() {
		return $this->count;
	}
	public function setLowerBound( $lowerBound ) {
		$this->lowerBound = $lowerBound;
	}
	public function getLowerBound() {
		return $this->lowerBound;
	}
	public function setUpperBound( $upperBound ) {
		$this->upperBound = $upperBound;
	}
	public function getUpperBound() {
		return $this->upperBound;
	}
}

class GoogleGAL_Service_CloudMonitoring_PointDistributionOverflowBucket extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $count;
	public $lowerBound;


	public function setCount( $count ) {
		$this->count = $count;
	}
	public function getCount() {
		return $this->count;
	}
	public function setLowerBound( $lowerBound ) {
		$this->lowerBound = $lowerBound;
	}
	public function getLowerBound() {
		return $this->lowerBound;
	}
}

class GoogleGAL_Service_CloudMonitoring_PointDistributionUnderflowBucket extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $count;
	public $upperBound;


	public function setCount( $count ) {
		$this->count = $count;
	}
	public function getCount() {
		return $this->count;
	}
	public function setUpperBound( $upperBound ) {
		$this->upperBound = $upperBound;
	}
	public function getUpperBound() {
		return $this->upperBound;
	}
}

class GoogleGAL_Service_CloudMonitoring_Timeseries extends GoogleGAL_Collection {

	protected $collection_key         = 'points';
	protected $internal_gapi_mappings = array();
	protected $pointsType             = 'GoogleGAL_Service_CloudMonitoring_Point';
	protected $pointsDataType         = 'array';
	protected $timeseriesDescType     = 'GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptor';
	protected $timeseriesDescDataType = '';


	public function setPoints( $points ) {
		$this->points = $points;
	}
	public function getPoints() {
		return $this->points;
	}
	public function setTimeseriesDesc( GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptor $timeseriesDesc ) {
		$this->timeseriesDesc = $timeseriesDesc;
	}
	public function getTimeseriesDesc() {
		return $this->timeseriesDesc;
	}
}

class GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $labels;
	public $metric;
	public $project;


	public function setLabels( $labels ) {
		$this->labels = $labels;
	}
	public function getLabels() {
		return $this->labels;
	}
	public function setMetric( $metric ) {
		$this->metric = $metric;
	}
	public function getMetric() {
		return $this->metric;
	}
	public function setProject( $project ) {
		$this->project = $project;
	}
	public function getProject() {
		return $this->project;
	}
}

class GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptorLabel extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $key;
	public $value;


	public function setKey( $key ) {
		$this->key = $key;
	}
	public function getKey() {
		return $this->key;
	}
	public function setValue( $value ) {
		$this->value = $value;
	}
	public function getValue() {
		return $this->value;
	}
}

class GoogleGAL_Service_CloudMonitoring_TimeseriesDescriptorLabels extends GoogleGAL_Model {

}
