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
 * Service definition for Books (v1).
 *
 * <p>
 * Lets you search for books and manage your Google Books library.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/books/docs/v1/getting_started" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Books extends GoogleGAL_Service {

	/** Manage your books. */
	const BOOKS =
	  'https://www.googleapis.com/auth/books';

	public $bookshelves;
	public $bookshelves_volumes;
	public $cloudloading;
	public $dictionary;
	public $layers;
	public $layers_annotationData;
	public $layers_volumeAnnotations;
	public $myconfig;
	public $mylibrary_annotations;
	public $mylibrary_bookshelves;
	public $mylibrary_bookshelves_volumes;
	public $mylibrary_readingpositions;
	public $promooffer;
	public $volumes;
	public $volumes_associated;
	public $volumes_mybooks;
	public $volumes_recommended;
	public $volumes_useruploaded;


	/**
	 * Constructs the internal representation of the Books service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'books/v1/';
		$this->version     = 'v1';
		$this->serviceName = 'books';

		$this->bookshelves                   = new GoogleGAL_Service_Books_Bookshelves_Resource(
			$this,
			$this->serviceName,
			'bookshelves',
			array(
				'methods' => array(
					'get'  => array(
						'path'       => 'users/{userId}/bookshelves/{shelf}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'shelf'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list' => array(
						'path'       => 'users/{userId}/bookshelves',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->bookshelves_volumes           = new GoogleGAL_Service_Books_BookshelvesVolumes_Resource(
			$this,
			$this->serviceName,
			'volumes',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'users/{userId}/bookshelves/{shelf}/volumes',
						'httpMethod' => 'GET',
						'parameters' => array(
							'userId'        => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'shelf'         => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'showPreorders' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'maxResults'    => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startIndex'    => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->cloudloading                  = new GoogleGAL_Service_Books_Cloudloading_Resource(
			$this,
			$this->serviceName,
			'cloudloading',
			array(
				'methods' => array(
					'addBook'    => array(
						'path'       => 'cloudloading/addBook',
						'httpMethod' => 'POST',
						'parameters' => array(
							'upload_client_token' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'drive_document_id'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'mime_type'           => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'name'                => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'deleteBook' => array(
						'path'       => 'cloudloading/deleteBook',
						'httpMethod' => 'POST',
						'parameters' => array(
							'volumeId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'updateBook' => array(
						'path'       => 'cloudloading/updateBook',
						'httpMethod' => 'POST',
						'parameters' => array(),
					),
				),
			)
		);
		$this->dictionary                    = new GoogleGAL_Service_Books_Dictionary_Resource(
			$this,
			$this->serviceName,
			'dictionary',
			array(
				'methods' => array(
					'listOfflineMetadata' => array(
						'path'       => 'dictionary/listOfflineMetadata',
						'httpMethod' => 'GET',
						'parameters' => array(
							'cpksver' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
		$this->layers                        = new GoogleGAL_Service_Books_Layers_Resource(
			$this,
			$this->serviceName,
			'layers',
			array(
				'methods' => array(
					'get'  => array(
						'path'       => 'volumes/{volumeId}/layersummary/{summaryId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'       => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'summaryId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'contentVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list' => array(
						'path'       => 'volumes/{volumeId}/layersummary',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'       => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'pageToken'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'contentVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults'     => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->layers_annotationData         = new GoogleGAL_Service_Books_LayersAnnotationData_Resource(
			$this,
			$this->serviceName,
			'annotationData',
			array(
				'methods' => array(
					'get'  => array(
						'path'       => 'volumes/{volumeId}/layers/{layerId}/data/{annotationDataId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'            => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'layerId'             => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'annotationDataId'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'contentVersion'      => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'scale'               => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'              => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'allowWebDefinitions' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'h'                   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'locale'              => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'w'                   => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
					'list' => array(
						'path'       => 'volumes/{volumeId}/layers/{layerId}/data',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'         => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'layerId'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'contentVersion'   => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'scale'            => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'           => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'locale'           => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'h'                => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'updatedMax'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults'       => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'annotationDataId' => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'pageToken'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'w'                => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'updatedMin'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->layers_volumeAnnotations      = new GoogleGAL_Service_Books_LayersVolumeAnnotations_Resource(
			$this,
			$this->serviceName,
			'volumeAnnotations',
			array(
				'methods' => array(
					'get'  => array(
						'path'       => 'volumes/{volumeId}/layers/{layerId}/annotations/{annotationId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'     => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'layerId'      => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'annotationId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'locale'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list' => array(
						'path'       => 'volumes/{volumeId}/layers/{layerId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'                 => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'layerId'                  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'contentVersion'           => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'showDeleted'              => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'volumeAnnotationsVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'endPosition'              => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'endOffset'                => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'locale'                   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'updatedMin'               => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'updatedMax'               => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults'               => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'pageToken'                => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'                   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startOffset'              => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startPosition'            => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->myconfig                      = new GoogleGAL_Service_Books_Myconfig_Resource(
			$this,
			$this->serviceName,
			'myconfig',
			array(
				'methods' => array(
					'releaseDownloadAccess' => array(
						'path'       => 'myconfig/releaseDownloadAccess',
						'httpMethod' => 'POST',
						'parameters' => array(
							'volumeIds' => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							),
							'cpksver'   => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'locale'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'requestAccess'         => array(
						'path'       => 'myconfig/requestAccess',
						'httpMethod' => 'POST',
						'parameters' => array(
							'source'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'volumeId'     => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'nonce'        => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'cpksver'      => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'licenseTypes' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'locale'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'syncVolumeLicenses'    => array(
						'path'       => 'myconfig/syncVolumeLicenses',
						'httpMethod' => 'POST',
						'parameters' => array(
							'source'        => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'nonce'         => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'cpksver'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'features'      => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'locale'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'showPreorders' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'volumeIds'     => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
						),
					),
				),
			)
		);
		$this->mylibrary_annotations         = new GoogleGAL_Service_Books_MylibraryAnnotations_Resource(
			$this,
			$this->serviceName,
			'annotations',
			array(
				'methods' => array(
					'delete'  => array(
						'path'       => 'mylibrary/annotations/{annotationId}',
						'httpMethod' => 'DELETE',
						'parameters' => array(
							'annotationId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'get'     => array(
						'path'       => 'mylibrary/annotations/{annotationId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'annotationId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'insert'  => array(
						'path'       => 'mylibrary/annotations',
						'httpMethod' => 'POST',
						'parameters' => array(
							'country'                   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'showOnlySummaryInResponse' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'source'                    => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list'    => array(
						'path'       => 'mylibrary/annotations',
						'httpMethod' => 'GET',
						'parameters' => array(
							'showDeleted'    => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'updatedMin'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'layerIds'       => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'volumeId'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults'     => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'pageToken'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'pageIds'        => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'contentVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'layerId'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'updatedMax'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'summary' => array(
						'path'       => 'mylibrary/annotations/summary',
						'httpMethod' => 'POST',
						'parameters' => array(
							'layerIds' => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
								'required' => true,
							),
							'volumeId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
					'update'  => array(
						'path'       => 'mylibrary/annotations/{annotationId}',
						'httpMethod' => 'PUT',
						'parameters' => array(
							'annotationId' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->mylibrary_bookshelves         = new GoogleGAL_Service_Books_MylibraryBookshelves_Resource(
			$this,
			$this->serviceName,
			'bookshelves',
			array(
				'methods' => array(
					'addVolume'    => array(
						'path'       => 'mylibrary/bookshelves/{shelf}/addVolume',
						'httpMethod' => 'POST',
						'parameters' => array(
							'shelf'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'volumeId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'source'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'clearVolumes' => array(
						'path'       => 'mylibrary/bookshelves/{shelf}/clearVolumes',
						'httpMethod' => 'POST',
						'parameters' => array(
							'shelf'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'get'          => array(
						'path'       => 'mylibrary/bookshelves/{shelf}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'shelf'  => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list'         => array(
						'path'       => 'mylibrary/bookshelves',
						'httpMethod' => 'GET',
						'parameters' => array(
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'moveVolume'   => array(
						'path'       => 'mylibrary/bookshelves/{shelf}/moveVolume',
						'httpMethod' => 'POST',
						'parameters' => array(
							'shelf'          => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'volumeId'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'volumePosition' => array(
								'location' => 'query',
								'type'     => 'integer',
								'required' => true,
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'removeVolume' => array(
						'path'       => 'mylibrary/bookshelves/{shelf}/removeVolume',
						'httpMethod' => 'POST',
						'parameters' => array(
							'shelf'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'volumeId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'source'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->mylibrary_bookshelves_volumes = new GoogleGAL_Service_Books_MylibraryBookshelvesVolumes_Resource(
			$this,
			$this->serviceName,
			'volumes',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'mylibrary/bookshelves/{shelf}/volumes',
						'httpMethod' => 'GET',
						'parameters' => array(
							'shelf'         => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'projection'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'country'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'showPreorders' => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'maxResults'    => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'q'             => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startIndex'    => array(
								'location' => 'query',
								'type'     => 'integer',
							),
						),
					),
				),
			)
		);
		$this->mylibrary_readingpositions    = new GoogleGAL_Service_Books_MylibraryReadingpositions_Resource(
			$this,
			$this->serviceName,
			'readingpositions',
			array(
				'methods' => array(
					'get'         => array(
						'path'       => 'mylibrary/readingpositions/{volumeId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'       => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'contentVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'setPosition' => array(
						'path'       => 'mylibrary/readingpositions/{volumeId}/setPosition',
						'httpMethod' => 'POST',
						'parameters' => array(
							'volumeId'       => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'timestamp'      => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'position'       => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'deviceCookie'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'contentVersion' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'action'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->promooffer                    = new GoogleGAL_Service_Books_Promooffer_Resource(
			$this,
			$this->serviceName,
			'promooffer',
			array(
				'methods' => array(
					'accept'  => array(
						'path'       => 'promooffer/accept',
						'httpMethod' => 'POST',
						'parameters' => array(
							'product'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'volumeId'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'offerId'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'androidId'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'device'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'model'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'serial'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'manufacturer' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'dismiss' => array(
						'path'       => 'promooffer/dismiss',
						'httpMethod' => 'POST',
						'parameters' => array(
							'product'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'offerId'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'androidId'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'device'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'model'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'serial'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'manufacturer' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'get'     => array(
						'path'       => 'promooffer/get',
						'httpMethod' => 'GET',
						'parameters' => array(
							'product'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'androidId'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'device'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'model'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'serial'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'manufacturer' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->volumes                       = new GoogleGAL_Service_Books_Volumes_Resource(
			$this,
			$this->serviceName,
			'volumes',
			array(
				'methods' => array(
					'get'  => array(
						'path'       => 'volumes/{volumeId}',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'   => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'source'     => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'country'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'projection' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'partner'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'list' => array(
						'path'       => 'volumes',
						'httpMethod' => 'GET',
						'parameters' => array(
							'q'               => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'orderBy'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'projection'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'libraryRestrict' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'langRestrict'    => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'showPreorders'   => array(
								'location' => 'query',
								'type'     => 'boolean',
							),
							'printType'       => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'maxResults'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'filter'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startIndex'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'download'        => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'partner'         => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->volumes_associated            = new GoogleGAL_Service_Books_VolumesAssociated_Resource(
			$this,
			$this->serviceName,
			'associated',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'volumes/{volumeId}/associated',
						'httpMethod' => 'GET',
						'parameters' => array(
							'volumeId'    => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
							'locale'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'      => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'association' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->volumes_mybooks               = new GoogleGAL_Service_Books_VolumesMybooks_Resource(
			$this,
			$this->serviceName,
			'mybooks',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'volumes/mybooks',
						'httpMethod' => 'GET',
						'parameters' => array(
							'locale'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startIndex'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'maxResults'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'acquireMethod'   => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'processingState' => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
						),
					),
				),
			)
		);
		$this->volumes_recommended           = new GoogleGAL_Service_Books_VolumesRecommended_Resource(
			$this,
			$this->serviceName,
			'recommended',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'volumes/recommended',
						'httpMethod' => 'GET',
						'parameters' => array(
							'locale' => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source' => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
					'rate' => array(
						'path'       => 'volumes/recommended/rate',
						'httpMethod' => 'POST',
						'parameters' => array(
							'rating'   => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'volumeId' => array(
								'location' => 'query',
								'type'     => 'string',
								'required' => true,
							),
							'locale'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'source'   => array(
								'location' => 'query',
								'type'     => 'string',
							),
						),
					),
				),
			)
		);
		$this->volumes_useruploaded          = new GoogleGAL_Service_Books_VolumesUseruploaded_Resource(
			$this,
			$this->serviceName,
			'useruploaded',
			array(
				'methods' => array(
					'list' => array(
						'path'       => 'volumes/useruploaded',
						'httpMethod' => 'GET',
						'parameters' => array(
							'locale'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'volumeId'        => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
							'maxResults'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'source'          => array(
								'location' => 'query',
								'type'     => 'string',
							),
							'startIndex'      => array(
								'location' => 'query',
								'type'     => 'integer',
							),
							'processingState' => array(
								'location' => 'query',
								'type'     => 'string',
								'repeated' => true,
							),
						),
					),
				),
			)
		);
	}
}


/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class GoogleGAL_Service_Books_Bookshelves_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieves metadata for a specific bookshelf for the specified user.
	 * (bookshelves.get)
	 *
	 * @param string $userId ID of user for whom to retrieve bookshelves.
	 * @param string $shelf ID of bookshelf to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Bookshelf
	 */
	public function get( $userId, $shelf, $optParams = array() ) {
		$params = array(
			'userId' => $userId,
			'shelf'  => $shelf,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Bookshelf' );
	}

	/**
	 * Retrieves a list of public bookshelves for the specified user.
	 * (bookshelves.listBookshelves)
	 *
	 * @param string $userId ID of user for whom to retrieve bookshelves.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Bookshelves
	 */
	public function listBookshelves( $userId, $optParams = array() ) {
		$params = array( 'userId' => $userId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Bookshelves' );
	}
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class GoogleGAL_Service_Books_BookshelvesVolumes_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieves volumes in a specific bookshelf for the specified user.
	 * (volumes.listBookshelvesVolumes)
	 *
	 * @param string $userId ID of user for whom to retrieve bookshelf volumes.
	 * @param string $shelf ID of bookshelf to retrieve volumes.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults
	 * to false.
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first element to return (starts at
	 * 0)
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listBookshelvesVolumes( $userId, $shelf, $optParams = array() ) {
		$params = array(
			'userId' => $userId,
			'shelf'  => $shelf,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}

/**
 * The "cloudloading" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $cloudloading = $booksService->cloudloading;
 *  </code>
 */
class GoogleGAL_Service_Books_Cloudloading_Resource extends GoogleGAL_Service_Resource {


	/**
	 * (cloudloading.addBook)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string upload_client_token
	 * @opt_param string drive_document_id A drive document id. The
	 * upload_client_token must not be set.
	 * @opt_param string mime_type The document MIME type. It can be set only if the
	 * drive_document_id is set.
	 * @opt_param string name The document name. It can be set only if the
	 * drive_document_id is set.
	 * @return GoogleGAL_Service_Books_BooksCloudloadingResource
	 */
	public function addBook( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'addBook', array( $params ), 'GoogleGAL_Service_Books_BooksCloudloadingResource' );
	}

	/**
	 * Remove the book and its contents (cloudloading.deleteBook)
	 *
	 * @param string $volumeId The id of the book to be removed.
	 * @param array  $optParams Optional parameters.
	 */
	public function deleteBook( $volumeId, $optParams = array() ) {
		$params = array( 'volumeId' => $volumeId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'deleteBook', array( $params ) );
	}

	/**
	 * (cloudloading.updateBook)
	 *
	 * @param GoogleGAL_BooksCloudloadingResource $postBody
	 * @param array                               $optParams Optional parameters.
	 * @return GoogleGAL_Service_Books_BooksCloudloadingResource
	 */
	public function updateBook( GoogleGAL_Service_Books_BooksCloudloadingResource $postBody, $optParams = array() ) {
		$params = array( 'postBody' => $postBody );
		$params = array_merge( $params, $optParams );
		return $this->call( 'updateBook', array( $params ), 'GoogleGAL_Service_Books_BooksCloudloadingResource' );
	}
}

/**
 * The "dictionary" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $dictionary = $booksService->dictionary;
 *  </code>
 */
class GoogleGAL_Service_Books_Dictionary_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Returns a list of offline dictionary meatadata available
	 * (dictionary.listOfflineMetadata)
	 *
	 * @param string $cpksver The device/version ID from which to request the data.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Books_Metadata
	 */
	public function listOfflineMetadata( $cpksver, $optParams = array() ) {
		$params = array( 'cpksver' => $cpksver );
		$params = array_merge( $params, $optParams );
		return $this->call( 'listOfflineMetadata', array( $params ), 'GoogleGAL_Service_Books_Metadata' );
	}
}

/**
 * The "layers" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $layers = $booksService->layers;
 *  </code>
 */
class GoogleGAL_Service_Books_Layers_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets the layer summary for a volume. (layers.get)
	 *
	 * @param string $volumeId The volume to retrieve layers for.
	 * @param string $summaryId The ID for the layer to get the summary for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string contentVersion The content version for the requested
	 * volume.
	 * @return GoogleGAL_Service_Books_Layersummary
	 */
	public function get( $volumeId, $summaryId, $optParams = array() ) {
		$params = array(
			'volumeId'  => $volumeId,
			'summaryId' => $summaryId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Layersummary' );
	}

	/**
	 * List the layer summaries for a volume. (layers.listLayers)
	 *
	 * @param string $volumeId The volume to retrieve layers for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string pageToken The value of the nextToken from the previous
	 * page.
	 * @opt_param string contentVersion The content version for the requested
	 * volume.
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Layersummaries
	 */
	public function listLayers( $volumeId, $optParams = array() ) {
		$params = array( 'volumeId' => $volumeId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Layersummaries' );
	}
}

/**
 * The "annotationData" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $annotationData = $booksService->annotationData;
 *  </code>
 */
class GoogleGAL_Service_Books_LayersAnnotationData_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets the annotation data. (annotationData.get)
	 *
	 * @param string $volumeId The volume to retrieve annotations for.
	 * @param string $layerId The ID for the layer to get the annotations.
	 * @param string $annotationDataId The ID of the annotation data to retrieve.
	 * @param string $contentVersion The content version for the volume you are
	 * trying to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int scale The requested scale for the image.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param bool allowWebDefinitions For the dictionary layer. Whether or not
	 * to allow web definitions.
	 * @opt_param int h The requested pixel height for any images. If height is
	 * provided width must also be provided.
	 * @opt_param string locale The locale information for the data. ISO-639-1
	 * language and ISO-3166-1 country code. Ex: 'en_US'.
	 * @opt_param int w The requested pixel width for any images. If width is
	 * provided height must also be provided.
	 * @return GoogleGAL_Service_Books_Annotationdata
	 */
	public function get( $volumeId, $layerId, $annotationDataId, $contentVersion, $optParams = array() ) {
		$params = array(
			'volumeId'         => $volumeId,
			'layerId'          => $layerId,
			'annotationDataId' => $annotationDataId,
			'contentVersion'   => $contentVersion,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Annotationdata' );
	}

	/**
	 * Gets the annotation data for a volume and layer.
	 * (annotationData.listLayersAnnotationData)
	 *
	 * @param string $volumeId The volume to retrieve annotation data for.
	 * @param string $layerId The ID for the layer to get the annotation data.
	 * @param string $contentVersion The content version for the requested volume.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param int scale The requested scale for the image.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string locale The locale information for the data. ISO-639-1
	 * language and ISO-3166-1 country code. Ex: 'en_US'.
	 * @opt_param int h The requested pixel height for any images. If height is
	 * provided width must also be provided.
	 * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated
	 * prior to this timestamp (exclusive).
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string annotationDataId The list of Annotation Data Ids to
	 * retrieve. Pagination is ignored if this is set.
	 * @opt_param string pageToken The value of the nextToken from the previous
	 * page.
	 * @opt_param int w The requested pixel width for any images. If width is
	 * provided height must also be provided.
	 * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated
	 * since this timestamp (inclusive).
	 * @return GoogleGAL_Service_Books_Annotationsdata
	 */
	public function listLayersAnnotationData( $volumeId, $layerId, $contentVersion, $optParams = array() ) {
		$params = array(
			'volumeId'       => $volumeId,
			'layerId'        => $layerId,
			'contentVersion' => $contentVersion,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Annotationsdata' );
	}
}
/**
 * The "volumeAnnotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $volumeAnnotations = $booksService->volumeAnnotations;
 *  </code>
 */
class GoogleGAL_Service_Books_LayersVolumeAnnotations_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets the volume annotation. (volumeAnnotations.get)
	 *
	 * @param string $volumeId The volume to retrieve annotations for.
	 * @param string $layerId The ID for the layer to get the annotations.
	 * @param string $annotationId The ID of the volume annotation to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string locale The locale information for the data. ISO-639-1
	 * language and ISO-3166-1 country code. Ex: 'en_US'.
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Volumeannotation
	 */
	public function get( $volumeId, $layerId, $annotationId, $optParams = array() ) {
		$params = array(
			'volumeId'     => $volumeId,
			'layerId'      => $layerId,
			'annotationId' => $annotationId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Volumeannotation' );
	}

	/**
	 * Gets the volume annotations for a volume and layer.
	 * (volumeAnnotations.listLayersVolumeAnnotations)
	 *
	 * @param string $volumeId The volume to retrieve annotations for.
	 * @param string $layerId The ID for the layer to get the annotations.
	 * @param string $contentVersion The content version for the requested volume.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param bool showDeleted Set to true to return deleted annotations.
	 * updatedMin must be in the request to use this. Defaults to false.
	 * @opt_param string volumeAnnotationsVersion The version of the volume
	 * annotations that you are requesting.
	 * @opt_param string endPosition The end position to end retrieving data from.
	 * @opt_param string endOffset The end offset to end retrieving data from.
	 * @opt_param string locale The locale information for the data. ISO-639-1
	 * language and ISO-3166-1 country code. Ex: 'en_US'.
	 * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated
	 * since this timestamp (inclusive).
	 * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated
	 * prior to this timestamp (exclusive).
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string pageToken The value of the nextToken from the previous
	 * page.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startOffset The start offset to start retrieving data from.
	 * @opt_param string startPosition The start position to start retrieving data
	 * from.
	 * @return GoogleGAL_Service_Books_Volumeannotations
	 */
	public function listLayersVolumeAnnotations( $volumeId, $layerId, $contentVersion, $optParams = array() ) {
		$params = array(
			'volumeId'       => $volumeId,
			'layerId'        => $layerId,
			'contentVersion' => $contentVersion,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumeannotations' );
	}
}

/**
 * The "myconfig" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $myconfig = $booksService->myconfig;
 *  </code>
 */
class GoogleGAL_Service_Books_Myconfig_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Release downloaded content access restriction.
	 * (myconfig.releaseDownloadAccess)
	 *
	 * @param string $volumeIds The volume(s) to release restrictions for.
	 * @param string $cpksver The device/version ID from which to release the
	 * restriction.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message
	 * localization, i.e. en_US.
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_DownloadAccesses
	 */
	public function releaseDownloadAccess( $volumeIds, $cpksver, $optParams = array() ) {
		$params = array(
			'volumeIds' => $volumeIds,
			'cpksver'   => $cpksver,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'releaseDownloadAccess', array( $params ), 'GoogleGAL_Service_Books_DownloadAccesses' );
	}

	/**
	 * Request concurrent and download access restrictions. (myconfig.requestAccess)
	 *
	 * @param string $source String to identify the originator of this request.
	 * @param string $volumeId The volume to request concurrent/download
	 * restrictions for.
	 * @param string $nonce The client nonce value.
	 * @param string $cpksver The device/version ID from which to request the
	 * restrictions.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string licenseTypes The type of access license to request. If not
	 * specified, the default is BOTH.
	 * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message
	 * localization, i.e. en_US.
	 * @return GoogleGAL_Service_Books_RequestAccess
	 */
	public function requestAccess( $source, $volumeId, $nonce, $cpksver, $optParams = array() ) {
		$params = array(
			'source'   => $source,
			'volumeId' => $volumeId,
			'nonce'    => $nonce,
			'cpksver'  => $cpksver,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'requestAccess', array( $params ), 'GoogleGAL_Service_Books_RequestAccess' );
	}

	/**
	 * Request downloaded content access for specified volumes on the My eBooks
	 * shelf. (myconfig.syncVolumeLicenses)
	 *
	 * @param string $source String to identify the originator of this request.
	 * @param string $nonce The client nonce value.
	 * @param string $cpksver The device/version ID from which to release the
	 * restriction.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string features List of features supported by the client, i.e.,
	 * 'RENTALS'
	 * @opt_param string locale ISO-639-1, ISO-3166-1 codes for message
	 * localization, i.e. en_US.
	 * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults
	 * to false.
	 * @opt_param string volumeIds The volume(s) to request download restrictions
	 * for.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function syncVolumeLicenses( $source, $nonce, $cpksver, $optParams = array() ) {
		$params = array(
			'source'  => $source,
			'nonce'   => $nonce,
			'cpksver' => $cpksver,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'syncVolumeLicenses', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}

/**
 * The "mylibrary" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $mylibrary = $booksService->mylibrary;
 *  </code>
 */
class GoogleGAL_Service_Books_Mylibrary_Resource extends GoogleGAL_Service_Resource {

}

/**
 * The "annotations" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $annotations = $booksService->annotations;
 *  </code>
 */
class GoogleGAL_Service_Books_MylibraryAnnotations_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Deletes an annotation. (annotations.delete)
	 *
	 * @param string $annotationId The ID for the annotation to delete.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function delete( $annotationId, $optParams = array() ) {
		$params = array( 'annotationId' => $annotationId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'delete', array( $params ) );
	}

	/**
	 * Gets an annotation by its ID. (annotations.get)
	 *
	 * @param string $annotationId The ID for the annotation to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Annotation
	 */
	public function get( $annotationId, $optParams = array() ) {
		$params = array( 'annotationId' => $annotationId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Annotation' );
	}

	/**
	 * Inserts a new annotation. (annotations.insert)
	 *
	 * @param GoogleGAL_Annotation $postBody
	 * @param array                $optParams Optional parameters.
	 *
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param bool showOnlySummaryInResponse Requests that only the summary of
	 * the specified layer be provided in the response.
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Annotation
	 */
	public function insert( GoogleGAL_Service_Books_Annotation $postBody, $optParams = array() ) {
		$params = array( 'postBody' => $postBody );
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ), 'GoogleGAL_Service_Books_Annotation' );
	}

	/**
	 * Retrieves a list of annotations, possibly filtered.
	 * (annotations.listMylibraryAnnotations)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param bool showDeleted Set to true to return deleted annotations.
	 * updatedMin must be in the request to use this. Defaults to false.
	 * @opt_param string updatedMin RFC 3339 timestamp to restrict to items updated
	 * since this timestamp (inclusive).
	 * @opt_param string layerIds The layer ID(s) to limit annotation by.
	 * @opt_param string volumeId The volume to restrict annotations to.
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string pageToken The value of the nextToken from the previous
	 * page.
	 * @opt_param string pageIds The page ID(s) for the volume that is being
	 * queried.
	 * @opt_param string contentVersion The content version for the requested
	 * volume.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string layerId The layer ID to limit annotation by.
	 * @opt_param string updatedMax RFC 3339 timestamp to restrict to items updated
	 * prior to this timestamp (exclusive).
	 * @return GoogleGAL_Service_Books_Annotations
	 */
	public function listMylibraryAnnotations( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Annotations' );
	}

	/**
	 * Gets the summary of specified layers. (annotations.summary)
	 *
	 * @param string $layerIds Array of layer IDs to get the summary for.
	 * @param string $volumeId Volume id to get the summary for.
	 * @param array  $optParams Optional parameters.
	 * @return GoogleGAL_Service_Books_AnnotationsSummary
	 */
	public function summary( $layerIds, $volumeId, $optParams = array() ) {
		$params = array(
			'layerIds' => $layerIds,
			'volumeId' => $volumeId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'summary', array( $params ), 'GoogleGAL_Service_Books_AnnotationsSummary' );
	}

	/**
	 * Updates an existing annotation. (annotations.update)
	 *
	 * @param string               $annotationId The ID for the annotation to update.
	 * @param GoogleGAL_Annotation $postBody
	 * @param array                $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Annotation
	 */
	public function update( $annotationId, GoogleGAL_Service_Books_Annotation $postBody, $optParams = array() ) {
		$params = array(
			'annotationId' => $annotationId,
			'postBody'     => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'update', array( $params ), 'GoogleGAL_Service_Books_Annotation' );
	}
}
/**
 * The "bookshelves" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $bookshelves = $booksService->bookshelves;
 *  </code>
 */
class GoogleGAL_Service_Books_MylibraryBookshelves_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Adds a volume to a bookshelf. (bookshelves.addVolume)
	 *
	 * @param string $shelf ID of bookshelf to which to add a volume.
	 * @param string $volumeId ID of volume to add.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function addVolume( $shelf, $volumeId, $optParams = array() ) {
		$params = array(
			'shelf'    => $shelf,
			'volumeId' => $volumeId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'addVolume', array( $params ) );
	}

	/**
	 * Clears all volumes from a bookshelf. (bookshelves.clearVolumes)
	 *
	 * @param string $shelf ID of bookshelf from which to remove a volume.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function clearVolumes( $shelf, $optParams = array() ) {
		$params = array( 'shelf' => $shelf );
		$params = array_merge( $params, $optParams );
		return $this->call( 'clearVolumes', array( $params ) );
	}

	/**
	 * Retrieves metadata for a specific bookshelf belonging to the authenticated
	 * user. (bookshelves.get)
	 *
	 * @param string $shelf ID of bookshelf to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Bookshelf
	 */
	public function get( $shelf, $optParams = array() ) {
		$params = array( 'shelf' => $shelf );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Bookshelf' );
	}

	/**
	 * Retrieves a list of bookshelves belonging to the authenticated user.
	 * (bookshelves.listMylibraryBookshelves)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Bookshelves
	 */
	public function listMylibraryBookshelves( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Bookshelves' );
	}

	/**
	 * Moves a volume within a bookshelf. (bookshelves.moveVolume)
	 *
	 * @param string $shelf ID of bookshelf with the volume.
	 * @param string $volumeId ID of volume to move.
	 * @param int    $volumePosition Position on shelf to move the item (0 puts the
	 *    item before the current first item, 1 puts it between the first and the
	 *    second and so on.)
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function moveVolume( $shelf, $volumeId, $volumePosition, $optParams = array() ) {
		$params = array(
			'shelf'          => $shelf,
			'volumeId'       => $volumeId,
			'volumePosition' => $volumePosition,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'moveVolume', array( $params ) );
	}

	/**
	 * Removes a volume from a bookshelf. (bookshelves.removeVolume)
	 *
	 * @param string $shelf ID of bookshelf from which to remove a volume.
	 * @param string $volumeId ID of volume to remove.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 */
	public function removeVolume( $shelf, $volumeId, $optParams = array() ) {
		$params = array(
			'shelf'    => $shelf,
			'volumeId' => $volumeId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'removeVolume', array( $params ) );
	}
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class GoogleGAL_Service_Books_MylibraryBookshelvesVolumes_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets volume information for volumes on a bookshelf.
	 * (volumes.listMylibraryBookshelvesVolumes)
	 *
	 * @param string $shelf The bookshelf ID or name retrieve volumes for.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string projection Restrict information returned to a set of
	 * selected fields.
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param bool showPreorders Set to true to show pre-ordered books. Defaults
	 * to false.
	 * @opt_param string maxResults Maximum number of results to return
	 * @opt_param string q Full-text search query string in this bookshelf.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first element to return (starts at
	 * 0)
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listMylibraryBookshelvesVolumes( $shelf, $optParams = array() ) {
		$params = array( 'shelf' => $shelf );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}
/**
 * The "readingpositions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $readingpositions = $booksService->readingpositions;
 *  </code>
 */
class GoogleGAL_Service_Books_MylibraryReadingpositions_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Retrieves my reading position information for a volume.
	 * (readingpositions.get)
	 *
	 * @param string $volumeId ID of volume for which to retrieve a reading
	 * position.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string contentVersion Volume content version for which this
	 * reading position is requested.
	 * @return GoogleGAL_Service_Books_ReadingPosition
	 */
	public function get( $volumeId, $optParams = array() ) {
		$params = array( 'volumeId' => $volumeId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_ReadingPosition' );
	}

	/**
	 * Sets my reading position information for a volume.
	 * (readingpositions.setPosition)
	 *
	 * @param string $volumeId ID of volume for which to update the reading
	 * position.
	 * @param string $timestamp RFC 3339 UTC format timestamp associated with this
	 * reading position.
	 * @param string $position Position string for the new volume reading position.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string deviceCookie Random persistent device cookie optional on
	 * set position.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string contentVersion Volume content version for which this
	 * reading position applies.
	 * @opt_param string action Action that caused this reading position to be set.
	 */
	public function setPosition( $volumeId, $timestamp, $position, $optParams = array() ) {
		$params = array(
			'volumeId'  => $volumeId,
			'timestamp' => $timestamp,
			'position'  => $position,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'setPosition', array( $params ) );
	}
}

/**
 * The "promooffer" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $promooffer = $booksService->promooffer;
 *  </code>
 */
class GoogleGAL_Service_Books_Promooffer_Resource extends GoogleGAL_Service_Resource {


	/**
	 * (promooffer.accept)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string product device product
	 * @opt_param string volumeId Volume id to exercise the offer
	 * @opt_param string offerId
	 * @opt_param string androidId device android_id
	 * @opt_param string device device device
	 * @opt_param string model device model
	 * @opt_param string serial device serial
	 * @opt_param string manufacturer device manufacturer
	 */
	public function accept( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'accept', array( $params ) );
	}

	/**
	 * (promooffer.dismiss)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string product device product
	 * @opt_param string offerId Offer to dimiss
	 * @opt_param string androidId device android_id
	 * @opt_param string device device device
	 * @opt_param string model device model
	 * @opt_param string serial device serial
	 * @opt_param string manufacturer device manufacturer
	 */
	public function dismiss( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'dismiss', array( $params ) );
	}

	/**
	 * Returns a list of promo offers available to the user (promooffer.get)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string product device product
	 * @opt_param string androidId device android_id
	 * @opt_param string device device device
	 * @opt_param string model device model
	 * @opt_param string serial device serial
	 * @opt_param string manufacturer device manufacturer
	 * @return GoogleGAL_Service_Books_Offers
	 */
	public function get( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Offers' );
	}
}

/**
 * The "volumes" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $volumes = $booksService->volumes;
 *  </code>
 */
class GoogleGAL_Service_Books_Volumes_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Gets volume information for a single volume. (volumes.get)
	 *
	 * @param string $volumeId ID of volume to retrieve.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string country ISO-3166-1 code to override the IP-based location.
	 * @opt_param string projection Restrict information returned to a set of
	 * selected fields.
	 * @opt_param string partner Brand results for partner ID.
	 * @return GoogleGAL_Service_Books_Volume
	 */
	public function get( $volumeId, $optParams = array() ) {
		$params = array( 'volumeId' => $volumeId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'get', array( $params ), 'GoogleGAL_Service_Books_Volume' );
	}

	/**
	 * Performs a book search. (volumes.listVolumes)
	 *
	 * @param string $q Full-text search query string.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string orderBy Sort search results.
	 * @opt_param string projection Restrict information returned to a set of
	 * selected fields.
	 * @opt_param string libraryRestrict Restrict search to this user's library.
	 * @opt_param string langRestrict Restrict results to books with this language
	 * code.
	 * @opt_param bool showPreorders Set to true to show books available for
	 * preorder. Defaults to false.
	 * @opt_param string printType Restrict to books or magazines.
	 * @opt_param string maxResults Maximum number of results to return.
	 * @opt_param string filter Filter search results.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first result to return (starts at
	 * 0)
	 * @opt_param string download Restrict to volumes by download availability.
	 * @opt_param string partner Restrict and brand results for partner ID.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listVolumes( $q, $optParams = array() ) {
		$params = array( 'q' => $q );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}

/**
 * The "associated" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $associated = $booksService->associated;
 *  </code>
 */
class GoogleGAL_Service_Books_VolumesAssociated_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Return a list of associated books. (associated.listVolumesAssociated)
	 *
	 * @param string $volumeId ID of the source volume.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex:
	 * 'en_US'. Used for generating recommendations.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string association Association type.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listVolumesAssociated( $volumeId, $optParams = array() ) {
		$params = array( 'volumeId' => $volumeId );
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}
/**
 * The "mybooks" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $mybooks = $booksService->mybooks;
 *  </code>
 */
class GoogleGAL_Service_Books_VolumesMybooks_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Return a list of books in My Library. (mybooks.listVolumesMybooks)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code.
	 * Ex:'en_US'. Used for generating recommendations.
	 * @opt_param string startIndex Index of the first result to return (starts at
	 * 0)
	 * @opt_param string maxResults Maximum number of results to return.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string acquireMethod How the book was aquired
	 * @opt_param string processingState The processing state of the user uploaded
	 * volumes to be returned. Applicable only if the UPLOADED is specified in the
	 * acquireMethod.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listVolumesMybooks( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}
/**
 * The "recommended" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $recommended = $booksService->recommended;
 *  </code>
 */
class GoogleGAL_Service_Books_VolumesRecommended_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Return a list of recommended books for the current user.
	 * (recommended.listVolumesRecommended)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex:
	 * 'en_US'. Used for generating recommendations.
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listVolumesRecommended( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}

	/**
	 * Rate a recommended book for the current user. (recommended.rate)
	 *
	 * @param string $rating Rating to be given to the volume.
	 * @param string $volumeId ID of the source volume.
	 * @param array  $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex:
	 * 'en_US'. Used for generating recommendations.
	 * @opt_param string source String to identify the originator of this request.
	 * @return GoogleGAL_Service_Books_BooksVolumesRecommendedRateResponse
	 */
	public function rate( $rating, $volumeId, $optParams = array() ) {
		$params = array(
			'rating'   => $rating,
			'volumeId' => $volumeId,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'rate', array( $params ), 'GoogleGAL_Service_Books_BooksVolumesRecommendedRateResponse' );
	}
}
/**
 * The "useruploaded" collection of methods.
 * Typical usage is:
 *  <code>
 *   $booksService = new GoogleGAL_Service_Books(...);
 *   $useruploaded = $booksService->useruploaded;
 *  </code>
 */
class GoogleGAL_Service_Books_VolumesUseruploaded_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Return a list of books uploaded by the current user.
	 * (useruploaded.listVolumesUseruploaded)
	 *
	 * @param array $optParams Optional parameters.
	 *
	 * @opt_param string locale ISO-639-1 language and ISO-3166-1 country code. Ex:
	 * 'en_US'. Used for generating recommendations.
	 * @opt_param string volumeId The ids of the volumes to be returned. If not
	 * specified all that match the processingState are returned.
	 * @opt_param string maxResults Maximum number of results to return.
	 * @opt_param string source String to identify the originator of this request.
	 * @opt_param string startIndex Index of the first result to return (starts at
	 * 0)
	 * @opt_param string processingState The processing state of the user uploaded
	 * volumes to be returned.
	 * @return GoogleGAL_Service_Books_Volumes
	 */
	public function listVolumesUseruploaded( $optParams = array() ) {
		$params = array();
		$params = array_merge( $params, $optParams );
		return $this->call( 'list', array( $params ), 'GoogleGAL_Service_Books_Volumes' );
	}
}




class GoogleGAL_Service_Books_Annotation extends GoogleGAL_Collection {

	protected $collection_key         = 'pageIds';
	protected $internal_gapi_mappings = array();
	public $afterSelectedText;
	public $beforeSelectedText;
	protected $clientVersionRangesType     = 'GoogleGAL_Service_Books_AnnotationClientVersionRanges';
	protected $clientVersionRangesDataType = '';
	public $created;
	protected $currentVersionRangesType     = 'GoogleGAL_Service_Books_AnnotationCurrentVersionRanges';
	protected $currentVersionRangesDataType = '';
	public $data;
	public $deleted;
	public $highlightStyle;
	public $id;
	public $kind;
	public $layerId;
	protected $layerSummaryType     = 'GoogleGAL_Service_Books_AnnotationLayerSummary';
	protected $layerSummaryDataType = '';
	public $pageIds;
	public $selectedText;
	public $selfLink;
	public $updated;
	public $volumeId;


	public function setAfterSelectedText( $afterSelectedText ) {
		$this->afterSelectedText = $afterSelectedText;
	}
	public function getAfterSelectedText() {
		return $this->afterSelectedText;
	}
	public function setBeforeSelectedText( $beforeSelectedText ) {
		$this->beforeSelectedText = $beforeSelectedText;
	}
	public function getBeforeSelectedText() {
		return $this->beforeSelectedText;
	}
	public function setClientVersionRanges( GoogleGAL_Service_Books_AnnotationClientVersionRanges $clientVersionRanges ) {
		$this->clientVersionRanges = $clientVersionRanges;
	}
	public function getClientVersionRanges() {
		return $this->clientVersionRanges;
	}
	public function setCreated( $created ) {
		$this->created = $created;
	}
	public function getCreated() {
		return $this->created;
	}
	public function setCurrentVersionRanges( GoogleGAL_Service_Books_AnnotationCurrentVersionRanges $currentVersionRanges ) {
		$this->currentVersionRanges = $currentVersionRanges;
	}
	public function getCurrentVersionRanges() {
		return $this->currentVersionRanges;
	}
	public function setData( $data ) {
		$this->data = $data;
	}
	public function getData() {
		return $this->data;
	}
	public function setDeleted( $deleted ) {
		$this->deleted = $deleted;
	}
	public function getDeleted() {
		return $this->deleted;
	}
	public function setHighlightStyle( $highlightStyle ) {
		$this->highlightStyle = $highlightStyle;
	}
	public function getHighlightStyle() {
		return $this->highlightStyle;
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
	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
	}
	public function setLayerSummary( GoogleGAL_Service_Books_AnnotationLayerSummary $layerSummary ) {
		$this->layerSummary = $layerSummary;
	}
	public function getLayerSummary() {
		return $this->layerSummary;
	}
	public function setPageIds( $pageIds ) {
		$this->pageIds = $pageIds;
	}
	public function getPageIds() {
		return $this->pageIds;
	}
	public function setSelectedText( $selectedText ) {
		$this->selectedText = $selectedText;
	}
	public function getSelectedText() {
		return $this->selectedText;
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
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_AnnotationClientVersionRanges extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $cfiRangeType           = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $cfiRangeDataType       = '';
	public $contentVersion;
	protected $gbImageRangeType      = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbImageRangeDataType  = '';
	protected $gbTextRangeType       = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbTextRangeDataType   = '';
	protected $imageCfiRangeType     = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $imageCfiRangeDataType = '';


	public function setCfiRange( GoogleGAL_Service_Books_BooksAnnotationsRange $cfiRange ) {
		$this->cfiRange = $cfiRange;
	}
	public function getCfiRange() {
		return $this->cfiRange;
	}
	public function setContentVersion( $contentVersion ) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setGbImageRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbImageRange ) {
		$this->gbImageRange = $gbImageRange;
	}
	public function getGbImageRange() {
		return $this->gbImageRange;
	}
	public function setGbTextRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbTextRange ) {
		$this->gbTextRange = $gbTextRange;
	}
	public function getGbTextRange() {
		return $this->gbTextRange;
	}
	public function setImageCfiRange( GoogleGAL_Service_Books_BooksAnnotationsRange $imageCfiRange ) {
		$this->imageCfiRange = $imageCfiRange;
	}
	public function getImageCfiRange() {
		return $this->imageCfiRange;
	}
}

class GoogleGAL_Service_Books_AnnotationCurrentVersionRanges extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $cfiRangeType           = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $cfiRangeDataType       = '';
	public $contentVersion;
	protected $gbImageRangeType      = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbImageRangeDataType  = '';
	protected $gbTextRangeType       = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbTextRangeDataType   = '';
	protected $imageCfiRangeType     = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $imageCfiRangeDataType = '';


	public function setCfiRange( GoogleGAL_Service_Books_BooksAnnotationsRange $cfiRange ) {
		$this->cfiRange = $cfiRange;
	}
	public function getCfiRange() {
		return $this->cfiRange;
	}
	public function setContentVersion( $contentVersion ) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setGbImageRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbImageRange ) {
		$this->gbImageRange = $gbImageRange;
	}
	public function getGbImageRange() {
		return $this->gbImageRange;
	}
	public function setGbTextRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbTextRange ) {
		$this->gbTextRange = $gbTextRange;
	}
	public function getGbTextRange() {
		return $this->gbTextRange;
	}
	public function setImageCfiRange( GoogleGAL_Service_Books_BooksAnnotationsRange $imageCfiRange ) {
		$this->imageCfiRange = $imageCfiRange;
	}
	public function getImageCfiRange() {
		return $this->imageCfiRange;
	}
}

class GoogleGAL_Service_Books_AnnotationLayerSummary extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $allowedCharacterCount;
	public $limitType;
	public $remainingCharacterCount;


	public function setAllowedCharacterCount( $allowedCharacterCount ) {
		$this->allowedCharacterCount = $allowedCharacterCount;
	}
	public function getAllowedCharacterCount() {
		return $this->allowedCharacterCount;
	}
	public function setLimitType( $limitType ) {
		$this->limitType = $limitType;
	}
	public function getLimitType() {
		return $this->limitType;
	}
	public function setRemainingCharacterCount( $remainingCharacterCount ) {
		$this->remainingCharacterCount = $remainingCharacterCount;
	}
	public function getRemainingCharacterCount() {
		return $this->remainingCharacterCount;
	}
}

class GoogleGAL_Service_Books_Annotationdata extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array(
		'encodedData' => 'encoded_data',
	);
	public $annotationType;
	public $data;
	public $encodedData;
	public $id;
	public $kind;
	public $layerId;
	public $selfLink;
	public $updated;
	public $volumeId;


	public function setAnnotationType( $annotationType ) {
		$this->annotationType = $annotationType;
	}
	public function getAnnotationType() {
		return $this->annotationType;
	}
	public function setData( $data ) {
		$this->data = $data;
	}
	public function getData() {
		return $this->data;
	}
	public function setEncodedData( $encodedData ) {
		$this->encodedData = $encodedData;
	}
	public function getEncodedData() {
		return $this->encodedData;
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
	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
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
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_Annotations extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Annotation';
	protected $itemsDataType          = 'array';
	public $kind;
	public $nextPageToken;
	public $totalItems;


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

class GoogleGAL_Service_Books_AnnotationsSummary extends GoogleGAL_Collection {

	protected $collection_key         = 'layers';
	protected $internal_gapi_mappings = array();
	public $kind;
	protected $layersType     = 'GoogleGAL_Service_Books_AnnotationsSummaryLayers';
	protected $layersDataType = 'array';


	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLayers( $layers ) {
		$this->layers = $layers;
	}
	public function getLayers() {
		return $this->layers;
	}
}

class GoogleGAL_Service_Books_AnnotationsSummaryLayers extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $allowedCharacterCount;
	public $layerId;
	public $limitType;
	public $remainingCharacterCount;
	public $updated;


	public function setAllowedCharacterCount( $allowedCharacterCount ) {
		$this->allowedCharacterCount = $allowedCharacterCount;
	}
	public function getAllowedCharacterCount() {
		return $this->allowedCharacterCount;
	}
	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
	}
	public function setLimitType( $limitType ) {
		$this->limitType = $limitType;
	}
	public function getLimitType() {
		return $this->limitType;
	}
	public function setRemainingCharacterCount( $remainingCharacterCount ) {
		$this->remainingCharacterCount = $remainingCharacterCount;
	}
	public function getRemainingCharacterCount() {
		return $this->remainingCharacterCount;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
}

class GoogleGAL_Service_Books_Annotationsdata extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Annotationdata';
	protected $itemsDataType          = 'array';
	public $kind;
	public $nextPageToken;
	public $totalItems;


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

class GoogleGAL_Service_Books_BooksAnnotationsRange extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $endOffset;
	public $endPosition;
	public $startOffset;
	public $startPosition;


	public function setEndOffset( $endOffset ) {
		$this->endOffset = $endOffset;
	}
	public function getEndOffset() {
		return $this->endOffset;
	}
	public function setEndPosition( $endPosition ) {
		$this->endPosition = $endPosition;
	}
	public function getEndPosition() {
		return $this->endPosition;
	}
	public function setStartOffset( $startOffset ) {
		$this->startOffset = $startOffset;
	}
	public function getStartOffset() {
		return $this->startOffset;
	}
	public function setStartPosition( $startPosition ) {
		$this->startPosition = $startPosition;
	}
	public function getStartPosition() {
		return $this->startPosition;
	}
}

class GoogleGAL_Service_Books_BooksCloudloadingResource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $author;
	public $processingState;
	public $title;
	public $volumeId;


	public function setAuthor( $author ) {
		$this->author = $author;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setProcessingState( $processingState ) {
		$this->processingState = $processingState;
	}
	public function getProcessingState() {
		return $this->processingState;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_BooksVolumesRecommendedRateResponse extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array(
		'consistencyToken' => 'consistency_token',
	);
	public $consistencyToken;


	public function setConsistencyToken( $consistencyToken ) {
		$this->consistencyToken = $consistencyToken;
	}
	public function getConsistencyToken() {
		return $this->consistencyToken;
	}
}

class GoogleGAL_Service_Books_Bookshelf extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $access;
	public $created;
	public $description;
	public $id;
	public $kind;
	public $selfLink;
	public $title;
	public $updated;
	public $volumeCount;
	public $volumesLastUpdated;


	public function setAccess( $access ) {
		$this->access = $access;
	}
	public function getAccess() {
		return $this->access;
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
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
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
	public function setVolumeCount( $volumeCount ) {
		$this->volumeCount = $volumeCount;
	}
	public function getVolumeCount() {
		return $this->volumeCount;
	}
	public function setVolumesLastUpdated( $volumesLastUpdated ) {
		$this->volumesLastUpdated = $volumesLastUpdated;
	}
	public function getVolumesLastUpdated() {
		return $this->volumesLastUpdated;
	}
}

class GoogleGAL_Service_Books_Bookshelves extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Bookshelf';
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

class GoogleGAL_Service_Books_ConcurrentAccessRestriction extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $deviceAllowed;
	public $kind;
	public $maxConcurrentDevices;
	public $message;
	public $nonce;
	public $reasonCode;
	public $restricted;
	public $signature;
	public $source;
	public $timeWindowSeconds;
	public $volumeId;


	public function setDeviceAllowed( $deviceAllowed ) {
		$this->deviceAllowed = $deviceAllowed;
	}
	public function getDeviceAllowed() {
		return $this->deviceAllowed;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMaxConcurrentDevices( $maxConcurrentDevices ) {
		$this->maxConcurrentDevices = $maxConcurrentDevices;
	}
	public function getMaxConcurrentDevices() {
		return $this->maxConcurrentDevices;
	}
	public function setMessage( $message ) {
		$this->message = $message;
	}
	public function getMessage() {
		return $this->message;
	}
	public function setNonce( $nonce ) {
		$this->nonce = $nonce;
	}
	public function getNonce() {
		return $this->nonce;
	}
	public function setReasonCode( $reasonCode ) {
		$this->reasonCode = $reasonCode;
	}
	public function getReasonCode() {
		return $this->reasonCode;
	}
	public function setRestricted( $restricted ) {
		$this->restricted = $restricted;
	}
	public function getRestricted() {
		return $this->restricted;
	}
	public function setSignature( $signature ) {
		$this->signature = $signature;
	}
	public function getSignature() {
		return $this->signature;
	}
	public function setSource( $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setTimeWindowSeconds( $timeWindowSeconds ) {
		$this->timeWindowSeconds = $timeWindowSeconds;
	}
	public function getTimeWindowSeconds() {
		return $this->timeWindowSeconds;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_Dictlayerdata extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $commonType             = 'GoogleGAL_Service_Books_DictlayerdataCommon';
	protected $commonDataType         = '';
	protected $dictType               = 'GoogleGAL_Service_Books_DictlayerdataDict';
	protected $dictDataType           = '';
	public $kind;


	public function setCommon( GoogleGAL_Service_Books_DictlayerdataCommon $common ) {
		$this->common = $common;
	}
	public function getCommon() {
		return $this->common;
	}
	public function setDict( GoogleGAL_Service_Books_DictlayerdataDict $dict ) {
		$this->dict = $dict;
	}
	public function getDict() {
		return $this->dict;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_Books_DictlayerdataCommon extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $title;


	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDict extends GoogleGAL_Collection {

	protected $collection_key         = 'words';
	protected $internal_gapi_mappings = array();
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictSource';
	protected $sourceDataType         = '';
	protected $wordsType              = 'GoogleGAL_Service_Books_DictlayerdataDictWords';
	protected $wordsDataType          = 'array';


	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setWords( $words ) {
		$this->words = $words;
	}
	public function getWords() {
		return $this->words;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWords extends GoogleGAL_Collection {

	protected $collection_key         = 'senses';
	protected $internal_gapi_mappings = array();
	protected $derivativesType        = 'GoogleGAL_Service_Books_DictlayerdataDictWordsDerivatives';
	protected $derivativesDataType    = 'array';
	protected $examplesType           = 'GoogleGAL_Service_Books_DictlayerdataDictWordsExamples';
	protected $examplesDataType       = 'array';
	protected $sensesType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSenses';
	protected $sensesDataType         = 'array';
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSource';
	protected $sourceDataType         = '';


	public function setDerivatives( $derivatives ) {
		$this->derivatives = $derivatives;
	}
	public function getDerivatives() {
		return $this->derivatives;
	}
	public function setExamples( $examples ) {
		$this->examples = $examples;
	}
	public function getExamples() {
		return $this->examples;
	}
	public function setSenses( $senses ) {
		$this->senses = $senses;
	}
	public function getSenses() {
		return $this->senses;
	}
	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsDerivatives extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsDerivativesSource';
	protected $sourceDataType         = '';
	public $text;


	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsDerivativesSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setText( $text ) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsDerivativesSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsExamples extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsExamplesSource';
	protected $sourceDataType         = '';
	public $text;


	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsExamplesSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setText( $text ) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsExamplesSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSenses extends GoogleGAL_Collection {

	protected $collection_key         = 'synonyms';
	protected $internal_gapi_mappings = array();
	protected $conjugationsType       = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesConjugations';
	protected $conjugationsDataType   = 'array';
	protected $definitionsType        = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitions';
	protected $definitionsDataType    = 'array';
	public $partOfSpeech;
	public $pronunciation;
	public $pronunciationUrl;
	protected $sourceType     = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSource';
	protected $sourceDataType = '';
	public $syllabification;
	protected $synonymsType     = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSynonyms';
	protected $synonymsDataType = 'array';


	public function setConjugations( $conjugations ) {
		$this->conjugations = $conjugations;
	}
	public function getConjugations() {
		return $this->conjugations;
	}
	public function setDefinitions( $definitions ) {
		$this->definitions = $definitions;
	}
	public function getDefinitions() {
		return $this->definitions;
	}
	public function setPartOfSpeech( $partOfSpeech ) {
		$this->partOfSpeech = $partOfSpeech;
	}
	public function getPartOfSpeech() {
		return $this->partOfSpeech;
	}
	public function setPronunciation( $pronunciation ) {
		$this->pronunciation = $pronunciation;
	}
	public function getPronunciation() {
		return $this->pronunciation;
	}
	public function setPronunciationUrl( $pronunciationUrl ) {
		$this->pronunciationUrl = $pronunciationUrl;
	}
	public function getPronunciationUrl() {
		return $this->pronunciationUrl;
	}
	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setSyllabification( $syllabification ) {
		$this->syllabification = $syllabification;
	}
	public function getSyllabification() {
		return $this->syllabification;
	}
	public function setSynonyms( $synonyms ) {
		$this->synonyms = $synonyms;
	}
	public function getSynonyms() {
		return $this->synonyms;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesConjugations extends GoogleGAL_Model {

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

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitions extends GoogleGAL_Collection {

	protected $collection_key         = 'examples';
	protected $internal_gapi_mappings = array();
	public $definition;
	protected $examplesType     = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamples';
	protected $examplesDataType = 'array';


	public function setDefinition( $definition ) {
		$this->definition = $definition;
	}
	public function getDefinition() {
		return $this->definition;
	}
	public function setExamples( $examples ) {
		$this->examples = $examples;
	}
	public function getExamples() {
		return $this->examples;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamples extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamplesSource';
	protected $sourceDataType         = '';
	public $text;


	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamplesSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setText( $text ) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesDefinitionsExamplesSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSynonyms extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $sourceType             = 'GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSynonymsSource';
	protected $sourceDataType         = '';
	public $text;


	public function setSource( GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSynonymsSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setText( $text ) {
		$this->text = $text;
	}
	public function getText() {
		return $this->text;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSensesSynonymsSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DictlayerdataDictWordsSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $attribution;
	public $url;


	public function setAttribution( $attribution ) {
		$this->attribution = $attribution;
	}
	public function getAttribution() {
		return $this->attribution;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_DownloadAccessRestriction extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $deviceAllowed;
	public $downloadsAcquired;
	public $justAcquired;
	public $kind;
	public $maxDownloadDevices;
	public $message;
	public $nonce;
	public $reasonCode;
	public $restricted;
	public $signature;
	public $source;
	public $volumeId;


	public function setDeviceAllowed( $deviceAllowed ) {
		$this->deviceAllowed = $deviceAllowed;
	}
	public function getDeviceAllowed() {
		return $this->deviceAllowed;
	}
	public function setDownloadsAcquired( $downloadsAcquired ) {
		$this->downloadsAcquired = $downloadsAcquired;
	}
	public function getDownloadsAcquired() {
		return $this->downloadsAcquired;
	}
	public function setJustAcquired( $justAcquired ) {
		$this->justAcquired = $justAcquired;
	}
	public function getJustAcquired() {
		return $this->justAcquired;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setMaxDownloadDevices( $maxDownloadDevices ) {
		$this->maxDownloadDevices = $maxDownloadDevices;
	}
	public function getMaxDownloadDevices() {
		return $this->maxDownloadDevices;
	}
	public function setMessage( $message ) {
		$this->message = $message;
	}
	public function getMessage() {
		return $this->message;
	}
	public function setNonce( $nonce ) {
		$this->nonce = $nonce;
	}
	public function getNonce() {
		return $this->nonce;
	}
	public function setReasonCode( $reasonCode ) {
		$this->reasonCode = $reasonCode;
	}
	public function getReasonCode() {
		return $this->reasonCode;
	}
	public function setRestricted( $restricted ) {
		$this->restricted = $restricted;
	}
	public function getRestricted() {
		return $this->restricted;
	}
	public function setSignature( $signature ) {
		$this->signature = $signature;
	}
	public function getSignature() {
		return $this->signature;
	}
	public function setSource( $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_DownloadAccesses extends GoogleGAL_Collection {

	protected $collection_key             = 'downloadAccessList';
	protected $internal_gapi_mappings     = array();
	protected $downloadAccessListType     = 'GoogleGAL_Service_Books_DownloadAccessRestriction';
	protected $downloadAccessListDataType = 'array';
	public $kind;


	public function setDownloadAccessList( $downloadAccessList ) {
		$this->downloadAccessList = $downloadAccessList;
	}
	public function getDownloadAccessList() {
		return $this->downloadAccessList;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_Books_Geolayerdata extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $commonType             = 'GoogleGAL_Service_Books_GeolayerdataCommon';
	protected $commonDataType         = '';
	protected $geoType                = 'GoogleGAL_Service_Books_GeolayerdataGeo';
	protected $geoDataType            = '';
	public $kind;


	public function setCommon( GoogleGAL_Service_Books_GeolayerdataCommon $common ) {
		$this->common = $common;
	}
	public function getCommon() {
		return $this->common;
	}
	public function setGeo( GoogleGAL_Service_Books_GeolayerdataGeo $geo ) {
		$this->geo = $geo;
	}
	public function getGeo() {
		return $this->geo;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_Books_GeolayerdataCommon extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $lang;
	public $previewImageUrl;
	public $snippet;
	public $snippetUrl;
	public $title;


	public function setLang( $lang ) {
		$this->lang = $lang;
	}
	public function getLang() {
		return $this->lang;
	}
	public function setPreviewImageUrl( $previewImageUrl ) {
		$this->previewImageUrl = $previewImageUrl;
	}
	public function getPreviewImageUrl() {
		return $this->previewImageUrl;
	}
	public function setSnippet( $snippet ) {
		$this->snippet = $snippet;
	}
	public function getSnippet() {
		return $this->snippet;
	}
	public function setSnippetUrl( $snippetUrl ) {
		$this->snippetUrl = $snippetUrl;
	}
	public function getSnippetUrl() {
		return $this->snippetUrl;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
}

class GoogleGAL_Service_Books_GeolayerdataGeo extends GoogleGAL_Collection {

	protected $collection_key         = 'boundary';
	protected $internal_gapi_mappings = array();
	protected $boundaryType           = 'GoogleGAL_Service_Books_GeolayerdataGeoBoundary';
	protected $boundaryDataType       = 'array';
	public $cachePolicy;
	public $countryCode;
	public $latitude;
	public $longitude;
	public $mapType;
	protected $viewportType     = 'GoogleGAL_Service_Books_GeolayerdataGeoViewport';
	protected $viewportDataType = '';
	public $zoom;


	public function setBoundary( $boundary ) {
		$this->boundary = $boundary;
	}
	public function getBoundary() {
		return $this->boundary;
	}
	public function setCachePolicy( $cachePolicy ) {
		$this->cachePolicy = $cachePolicy;
	}
	public function getCachePolicy() {
		return $this->cachePolicy;
	}
	public function setCountryCode( $countryCode ) {
		$this->countryCode = $countryCode;
	}
	public function getCountryCode() {
		return $this->countryCode;
	}
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
	public function setMapType( $mapType ) {
		$this->mapType = $mapType;
	}
	public function getMapType() {
		return $this->mapType;
	}
	public function setViewport( GoogleGAL_Service_Books_GeolayerdataGeoViewport $viewport ) {
		$this->viewport = $viewport;
	}
	public function getViewport() {
		return $this->viewport;
	}
	public function setZoom( $zoom ) {
		$this->zoom = $zoom;
	}
	public function getZoom() {
		return $this->zoom;
	}
}

class GoogleGAL_Service_Books_GeolayerdataGeoBoundary extends GoogleGAL_Model {

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

class GoogleGAL_Service_Books_GeolayerdataGeoViewport extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $hiType                 = 'GoogleGAL_Service_Books_GeolayerdataGeoViewportHi';
	protected $hiDataType             = '';
	protected $loType                 = 'GoogleGAL_Service_Books_GeolayerdataGeoViewportLo';
	protected $loDataType             = '';


	public function setHi( GoogleGAL_Service_Books_GeolayerdataGeoViewportHi $hi ) {
		$this->hi = $hi;
	}
	public function getHi() {
		return $this->hi;
	}
	public function setLo( GoogleGAL_Service_Books_GeolayerdataGeoViewportLo $lo ) {
		$this->lo = $lo;
	}
	public function getLo() {
		return $this->lo;
	}
}

class GoogleGAL_Service_Books_GeolayerdataGeoViewportHi extends GoogleGAL_Model {

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

class GoogleGAL_Service_Books_GeolayerdataGeoViewportLo extends GoogleGAL_Model {

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

class GoogleGAL_Service_Books_Layersummaries extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Layersummary';
	protected $itemsDataType          = 'array';
	public $kind;
	public $totalItems;


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
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}

class GoogleGAL_Service_Books_Layersummary extends GoogleGAL_Collection {

	protected $collection_key         = 'annotationTypes';
	protected $internal_gapi_mappings = array();
	public $annotationCount;
	public $annotationTypes;
	public $annotationsDataLink;
	public $annotationsLink;
	public $contentVersion;
	public $dataCount;
	public $id;
	public $kind;
	public $layerId;
	public $selfLink;
	public $updated;
	public $volumeAnnotationsVersion;
	public $volumeId;


	public function setAnnotationCount( $annotationCount ) {
		$this->annotationCount = $annotationCount;
	}
	public function getAnnotationCount() {
		return $this->annotationCount;
	}
	public function setAnnotationTypes( $annotationTypes ) {
		$this->annotationTypes = $annotationTypes;
	}
	public function getAnnotationTypes() {
		return $this->annotationTypes;
	}
	public function setAnnotationsDataLink( $annotationsDataLink ) {
		$this->annotationsDataLink = $annotationsDataLink;
	}
	public function getAnnotationsDataLink() {
		return $this->annotationsDataLink;
	}
	public function setAnnotationsLink( $annotationsLink ) {
		$this->annotationsLink = $annotationsLink;
	}
	public function getAnnotationsLink() {
		return $this->annotationsLink;
	}
	public function setContentVersion( $contentVersion ) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setDataCount( $dataCount ) {
		$this->dataCount = $dataCount;
	}
	public function getDataCount() {
		return $this->dataCount;
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
	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
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
	public function setVolumeAnnotationsVersion( $volumeAnnotationsVersion ) {
		$this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
	}
	public function getVolumeAnnotationsVersion() {
		return $this->volumeAnnotationsVersion;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_Metadata extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_MetadataItems';
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

class GoogleGAL_Service_Books_MetadataItems extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array(
		'downloadUrl'  => 'download_url',
		'encryptedKey' => 'encrypted_key',
	);
	public $downloadUrl;
	public $encryptedKey;
	public $language;
	public $size;
	public $version;


	public function setDownloadUrl( $downloadUrl ) {
		$this->downloadUrl = $downloadUrl;
	}
	public function getDownloadUrl() {
		return $this->downloadUrl;
	}
	public function setEncryptedKey( $encryptedKey ) {
		$this->encryptedKey = $encryptedKey;
	}
	public function getEncryptedKey() {
		return $this->encryptedKey;
	}
	public function setLanguage( $language ) {
		$this->language = $language;
	}
	public function getLanguage() {
		return $this->language;
	}
	public function setSize( $size ) {
		$this->size = $size;
	}
	public function getSize() {
		return $this->size;
	}
	public function setVersion( $version ) {
		$this->version = $version;
	}
	public function getVersion() {
		return $this->version;
	}
}

class GoogleGAL_Service_Books_Offers extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_OffersItems';
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

class GoogleGAL_Service_Books_OffersItems extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	public $artUrl;
	public $id;
	protected $itemsType     = 'GoogleGAL_Service_Books_OffersItemsItems';
	protected $itemsDataType = 'array';


	public function setArtUrl( $artUrl ) {
		$this->artUrl = $artUrl;
	}
	public function getArtUrl() {
		return $this->artUrl;
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
}

class GoogleGAL_Service_Books_OffersItemsItems extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $author;
	public $canonicalVolumeLink;
	public $coverUrl;
	public $description;
	public $title;
	public $volumeId;


	public function setAuthor( $author ) {
		$this->author = $author;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setCanonicalVolumeLink( $canonicalVolumeLink ) {
		$this->canonicalVolumeLink = $canonicalVolumeLink;
	}
	public function getCanonicalVolumeLink() {
		return $this->canonicalVolumeLink;
	}
	public function setCoverUrl( $coverUrl ) {
		$this->coverUrl = $coverUrl;
	}
	public function getCoverUrl() {
		return $this->coverUrl;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_ReadingPosition extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $epubCfiPosition;
	public $gbImagePosition;
	public $gbTextPosition;
	public $kind;
	public $pdfPosition;
	public $updated;
	public $volumeId;


	public function setEpubCfiPosition( $epubCfiPosition ) {
		$this->epubCfiPosition = $epubCfiPosition;
	}
	public function getEpubCfiPosition() {
		return $this->epubCfiPosition;
	}
	public function setGbImagePosition( $gbImagePosition ) {
		$this->gbImagePosition = $gbImagePosition;
	}
	public function getGbImagePosition() {
		return $this->gbImagePosition;
	}
	public function setGbTextPosition( $gbTextPosition ) {
		$this->gbTextPosition = $gbTextPosition;
	}
	public function getGbTextPosition() {
		return $this->gbTextPosition;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setPdfPosition( $pdfPosition ) {
		$this->pdfPosition = $pdfPosition;
	}
	public function getPdfPosition() {
		return $this->pdfPosition;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_RequestAccess extends GoogleGAL_Model {

	protected $internal_gapi_mappings   = array();
	protected $concurrentAccessType     = 'GoogleGAL_Service_Books_ConcurrentAccessRestriction';
	protected $concurrentAccessDataType = '';
	protected $downloadAccessType       = 'GoogleGAL_Service_Books_DownloadAccessRestriction';
	protected $downloadAccessDataType   = '';
	public $kind;


	public function setConcurrentAccess( GoogleGAL_Service_Books_ConcurrentAccessRestriction $concurrentAccess ) {
		$this->concurrentAccess = $concurrentAccess;
	}
	public function getConcurrentAccess() {
		return $this->concurrentAccess;
	}
	public function setDownloadAccess( GoogleGAL_Service_Books_DownloadAccessRestriction $downloadAccess ) {
		$this->downloadAccess = $downloadAccess;
	}
	public function getDownloadAccess() {
		return $this->downloadAccess;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
}

class GoogleGAL_Service_Books_Review extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $authorType             = 'GoogleGAL_Service_Books_ReviewAuthor';
	protected $authorDataType         = '';
	public $content;
	public $date;
	public $fullTextUrl;
	public $kind;
	public $rating;
	protected $sourceType     = 'GoogleGAL_Service_Books_ReviewSource';
	protected $sourceDataType = '';
	public $title;
	public $type;
	public $volumeId;


	public function setAuthor( GoogleGAL_Service_Books_ReviewAuthor $author ) {
		$this->author = $author;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function setContent( $content ) {
		$this->content = $content;
	}
	public function getContent() {
		return $this->content;
	}
	public function setDate( $date ) {
		$this->date = $date;
	}
	public function getDate() {
		return $this->date;
	}
	public function setFullTextUrl( $fullTextUrl ) {
		$this->fullTextUrl = $fullTextUrl;
	}
	public function getFullTextUrl() {
		return $this->fullTextUrl;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setRating( $rating ) {
		$this->rating = $rating;
	}
	public function getRating() {
		return $this->rating;
	}
	public function setSource( GoogleGAL_Service_Books_ReviewSource $source ) {
		$this->source = $source;
	}
	public function getSource() {
		return $this->source;
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
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_ReviewAuthor extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $displayName;


	public function setDisplayName( $displayName ) {
		$this->displayName = $displayName;
	}
	public function getDisplayName() {
		return $this->displayName;
	}
}

class GoogleGAL_Service_Books_ReviewSource extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $description;
	public $extraDescription;
	public $url;


	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setExtraDescription( $extraDescription ) {
		$this->extraDescription = $extraDescription;
	}
	public function getExtraDescription() {
		return $this->extraDescription;
	}
	public function setUrl( $url ) {
		$this->url = $url;
	}
	public function getUrl() {
		return $this->url;
	}
}

class GoogleGAL_Service_Books_Volume extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $accessInfoType         = 'GoogleGAL_Service_Books_VolumeAccessInfo';
	protected $accessInfoDataType     = '';
	public $etag;
	public $id;
	public $kind;
	protected $layerInfoType           = 'GoogleGAL_Service_Books_VolumeLayerInfo';
	protected $layerInfoDataType       = '';
	protected $recommendedInfoType     = 'GoogleGAL_Service_Books_VolumeRecommendedInfo';
	protected $recommendedInfoDataType = '';
	protected $saleInfoType            = 'GoogleGAL_Service_Books_VolumeSaleInfo';
	protected $saleInfoDataType        = '';
	protected $searchInfoType          = 'GoogleGAL_Service_Books_VolumeSearchInfo';
	protected $searchInfoDataType      = '';
	public $selfLink;
	protected $userInfoType       = 'GoogleGAL_Service_Books_VolumeUserInfo';
	protected $userInfoDataType   = '';
	protected $volumeInfoType     = 'GoogleGAL_Service_Books_VolumeVolumeInfo';
	protected $volumeInfoDataType = '';


	public function setAccessInfo( GoogleGAL_Service_Books_VolumeAccessInfo $accessInfo ) {
		$this->accessInfo = $accessInfo;
	}
	public function getAccessInfo() {
		return $this->accessInfo;
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
	public function setLayerInfo( GoogleGAL_Service_Books_VolumeLayerInfo $layerInfo ) {
		$this->layerInfo = $layerInfo;
	}
	public function getLayerInfo() {
		return $this->layerInfo;
	}
	public function setRecommendedInfo( GoogleGAL_Service_Books_VolumeRecommendedInfo $recommendedInfo ) {
		$this->recommendedInfo = $recommendedInfo;
	}
	public function getRecommendedInfo() {
		return $this->recommendedInfo;
	}
	public function setSaleInfo( GoogleGAL_Service_Books_VolumeSaleInfo $saleInfo ) {
		$this->saleInfo = $saleInfo;
	}
	public function getSaleInfo() {
		return $this->saleInfo;
	}
	public function setSearchInfo( GoogleGAL_Service_Books_VolumeSearchInfo $searchInfo ) {
		$this->searchInfo = $searchInfo;
	}
	public function getSearchInfo() {
		return $this->searchInfo;
	}
	public function setSelfLink( $selfLink ) {
		$this->selfLink = $selfLink;
	}
	public function getSelfLink() {
		return $this->selfLink;
	}
	public function setUserInfo( GoogleGAL_Service_Books_VolumeUserInfo $userInfo ) {
		$this->userInfo = $userInfo;
	}
	public function getUserInfo() {
		return $this->userInfo;
	}
	public function setVolumeInfo( GoogleGAL_Service_Books_VolumeVolumeInfo $volumeInfo ) {
		$this->volumeInfo = $volumeInfo;
	}
	public function getVolumeInfo() {
		return $this->volumeInfo;
	}
}

class GoogleGAL_Service_Books_VolumeAccessInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $accessViewStatus;
	public $country;
	protected $downloadAccessType     = 'GoogleGAL_Service_Books_DownloadAccessRestriction';
	protected $downloadAccessDataType = '';
	public $driveImportedContentLink;
	public $embeddable;
	protected $epubType     = 'GoogleGAL_Service_Books_VolumeAccessInfoEpub';
	protected $epubDataType = '';
	public $explicitOfflineLicenseManagement;
	protected $pdfType     = 'GoogleGAL_Service_Books_VolumeAccessInfoPdf';
	protected $pdfDataType = '';
	public $publicDomain;
	public $quoteSharingAllowed;
	public $textToSpeechPermission;
	public $viewOrderUrl;
	public $viewability;
	public $webReaderLink;


	public function setAccessViewStatus( $accessViewStatus ) {
		$this->accessViewStatus = $accessViewStatus;
	}
	public function getAccessViewStatus() {
		return $this->accessViewStatus;
	}
	public function setCountry( $country ) {
		$this->country = $country;
	}
	public function getCountry() {
		return $this->country;
	}
	public function setDownloadAccess( GoogleGAL_Service_Books_DownloadAccessRestriction $downloadAccess ) {
		$this->downloadAccess = $downloadAccess;
	}
	public function getDownloadAccess() {
		return $this->downloadAccess;
	}
	public function setDriveImportedContentLink( $driveImportedContentLink ) {
		$this->driveImportedContentLink = $driveImportedContentLink;
	}
	public function getDriveImportedContentLink() {
		return $this->driveImportedContentLink;
	}
	public function setEmbeddable( $embeddable ) {
		$this->embeddable = $embeddable;
	}
	public function getEmbeddable() {
		return $this->embeddable;
	}
	public function setEpub( GoogleGAL_Service_Books_VolumeAccessInfoEpub $epub ) {
		$this->epub = $epub;
	}
	public function getEpub() {
		return $this->epub;
	}
	public function setExplicitOfflineLicenseManagement( $explicitOfflineLicenseManagement ) {
		$this->explicitOfflineLicenseManagement = $explicitOfflineLicenseManagement;
	}
	public function getExplicitOfflineLicenseManagement() {
		return $this->explicitOfflineLicenseManagement;
	}
	public function setPdf( GoogleGAL_Service_Books_VolumeAccessInfoPdf $pdf ) {
		$this->pdf = $pdf;
	}
	public function getPdf() {
		return $this->pdf;
	}
	public function setPublicDomain( $publicDomain ) {
		$this->publicDomain = $publicDomain;
	}
	public function getPublicDomain() {
		return $this->publicDomain;
	}
	public function setQuoteSharingAllowed( $quoteSharingAllowed ) {
		$this->quoteSharingAllowed = $quoteSharingAllowed;
	}
	public function getQuoteSharingAllowed() {
		return $this->quoteSharingAllowed;
	}
	public function setTextToSpeechPermission( $textToSpeechPermission ) {
		$this->textToSpeechPermission = $textToSpeechPermission;
	}
	public function getTextToSpeechPermission() {
		return $this->textToSpeechPermission;
	}
	public function setViewOrderUrl( $viewOrderUrl ) {
		$this->viewOrderUrl = $viewOrderUrl;
	}
	public function getViewOrderUrl() {
		return $this->viewOrderUrl;
	}
	public function setViewability( $viewability ) {
		$this->viewability = $viewability;
	}
	public function getViewability() {
		return $this->viewability;
	}
	public function setWebReaderLink( $webReaderLink ) {
		$this->webReaderLink = $webReaderLink;
	}
	public function getWebReaderLink() {
		return $this->webReaderLink;
	}
}

class GoogleGAL_Service_Books_VolumeAccessInfoEpub extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $acsTokenLink;
	public $downloadLink;
	public $isAvailable;


	public function setAcsTokenLink( $acsTokenLink ) {
		$this->acsTokenLink = $acsTokenLink;
	}
	public function getAcsTokenLink() {
		return $this->acsTokenLink;
	}
	public function setDownloadLink( $downloadLink ) {
		$this->downloadLink = $downloadLink;
	}
	public function getDownloadLink() {
		return $this->downloadLink;
	}
	public function setIsAvailable( $isAvailable ) {
		$this->isAvailable = $isAvailable;
	}
	public function getIsAvailable() {
		return $this->isAvailable;
	}
}

class GoogleGAL_Service_Books_VolumeAccessInfoPdf extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $acsTokenLink;
	public $downloadLink;
	public $isAvailable;


	public function setAcsTokenLink( $acsTokenLink ) {
		$this->acsTokenLink = $acsTokenLink;
	}
	public function getAcsTokenLink() {
		return $this->acsTokenLink;
	}
	public function setDownloadLink( $downloadLink ) {
		$this->downloadLink = $downloadLink;
	}
	public function getDownloadLink() {
		return $this->downloadLink;
	}
	public function setIsAvailable( $isAvailable ) {
		$this->isAvailable = $isAvailable;
	}
	public function getIsAvailable() {
		return $this->isAvailable;
	}
}

class GoogleGAL_Service_Books_VolumeLayerInfo extends GoogleGAL_Collection {

	protected $collection_key         = 'layers';
	protected $internal_gapi_mappings = array();
	protected $layersType             = 'GoogleGAL_Service_Books_VolumeLayerInfoLayers';
	protected $layersDataType         = 'array';


	public function setLayers( $layers ) {
		$this->layers = $layers;
	}
	public function getLayers() {
		return $this->layers;
	}
}

class GoogleGAL_Service_Books_VolumeLayerInfoLayers extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $layerId;
	public $volumeAnnotationsVersion;


	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
	}
	public function setVolumeAnnotationsVersion( $volumeAnnotationsVersion ) {
		$this->volumeAnnotationsVersion = $volumeAnnotationsVersion;
	}
	public function getVolumeAnnotationsVersion() {
		return $this->volumeAnnotationsVersion;
	}
}

class GoogleGAL_Service_Books_VolumeRecommendedInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $explanation;


	public function setExplanation( $explanation ) {
		$this->explanation = $explanation;
	}
	public function getExplanation() {
		return $this->explanation;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfo extends GoogleGAL_Collection {

	protected $collection_key         = 'offers';
	protected $internal_gapi_mappings = array();
	public $buyLink;
	public $country;
	public $isEbook;
	protected $listPriceType     = 'GoogleGAL_Service_Books_VolumeSaleInfoListPrice';
	protected $listPriceDataType = '';
	protected $offersType        = 'GoogleGAL_Service_Books_VolumeSaleInfoOffers';
	protected $offersDataType    = 'array';
	public $onSaleDate;
	protected $retailPriceType     = 'GoogleGAL_Service_Books_VolumeSaleInfoRetailPrice';
	protected $retailPriceDataType = '';
	public $saleability;


	public function setBuyLink( $buyLink ) {
		$this->buyLink = $buyLink;
	}
	public function getBuyLink() {
		return $this->buyLink;
	}
	public function setCountry( $country ) {
		$this->country = $country;
	}
	public function getCountry() {
		return $this->country;
	}
	public function setIsEbook( $isEbook ) {
		$this->isEbook = $isEbook;
	}
	public function getIsEbook() {
		return $this->isEbook;
	}
	public function setListPrice( GoogleGAL_Service_Books_VolumeSaleInfoListPrice $listPrice ) {
		$this->listPrice = $listPrice;
	}
	public function getListPrice() {
		return $this->listPrice;
	}
	public function setOffers( $offers ) {
		$this->offers = $offers;
	}
	public function getOffers() {
		return $this->offers;
	}
	public function setOnSaleDate( $onSaleDate ) {
		$this->onSaleDate = $onSaleDate;
	}
	public function getOnSaleDate() {
		return $this->onSaleDate;
	}
	public function setRetailPrice( GoogleGAL_Service_Books_VolumeSaleInfoRetailPrice $retailPrice ) {
		$this->retailPrice = $retailPrice;
	}
	public function getRetailPrice() {
		return $this->retailPrice;
	}
	public function setSaleability( $saleability ) {
		$this->saleability = $saleability;
	}
	public function getSaleability() {
		return $this->saleability;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoListPrice extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $amount;
	public $currencyCode;


	public function setAmount( $amount ) {
		$this->amount = $amount;
	}
	public function getAmount() {
		return $this->amount;
	}
	public function setCurrencyCode( $currencyCode ) {
		$this->currencyCode = $currencyCode;
	}
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoOffers extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $finskyOfferType;
	protected $listPriceType          = 'GoogleGAL_Service_Books_VolumeSaleInfoOffersListPrice';
	protected $listPriceDataType      = '';
	protected $rentalDurationType     = 'GoogleGAL_Service_Books_VolumeSaleInfoOffersRentalDuration';
	protected $rentalDurationDataType = '';
	protected $retailPriceType        = 'GoogleGAL_Service_Books_VolumeSaleInfoOffersRetailPrice';
	protected $retailPriceDataType    = '';


	public function setFinskyOfferType( $finskyOfferType ) {
		$this->finskyOfferType = $finskyOfferType;
	}
	public function getFinskyOfferType() {
		return $this->finskyOfferType;
	}
	public function setListPrice( GoogleGAL_Service_Books_VolumeSaleInfoOffersListPrice $listPrice ) {
		$this->listPrice = $listPrice;
	}
	public function getListPrice() {
		return $this->listPrice;
	}
	public function setRentalDuration( GoogleGAL_Service_Books_VolumeSaleInfoOffersRentalDuration $rentalDuration ) {
		$this->rentalDuration = $rentalDuration;
	}
	public function getRentalDuration() {
		return $this->rentalDuration;
	}
	public function setRetailPrice( GoogleGAL_Service_Books_VolumeSaleInfoOffersRetailPrice $retailPrice ) {
		$this->retailPrice = $retailPrice;
	}
	public function getRetailPrice() {
		return $this->retailPrice;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoOffersListPrice extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $amountInMicros;
	public $currencyCode;


	public function setAmountInMicros( $amountInMicros ) {
		$this->amountInMicros = $amountInMicros;
	}
	public function getAmountInMicros() {
		return $this->amountInMicros;
	}
	public function setCurrencyCode( $currencyCode ) {
		$this->currencyCode = $currencyCode;
	}
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoOffersRentalDuration extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $count;
	public $unit;


	public function setCount( $count ) {
		$this->count = $count;
	}
	public function getCount() {
		return $this->count;
	}
	public function setUnit( $unit ) {
		$this->unit = $unit;
	}
	public function getUnit() {
		return $this->unit;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoOffersRetailPrice extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $amountInMicros;
	public $currencyCode;


	public function setAmountInMicros( $amountInMicros ) {
		$this->amountInMicros = $amountInMicros;
	}
	public function getAmountInMicros() {
		return $this->amountInMicros;
	}
	public function setCurrencyCode( $currencyCode ) {
		$this->currencyCode = $currencyCode;
	}
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
}

class GoogleGAL_Service_Books_VolumeSaleInfoRetailPrice extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $amount;
	public $currencyCode;


	public function setAmount( $amount ) {
		$this->amount = $amount;
	}
	public function getAmount() {
		return $this->amount;
	}
	public function setCurrencyCode( $currencyCode ) {
		$this->currencyCode = $currencyCode;
	}
	public function getCurrencyCode() {
		return $this->currencyCode;
	}
}

class GoogleGAL_Service_Books_VolumeSearchInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $textSnippet;


	public function setTextSnippet( $textSnippet ) {
		$this->textSnippet = $textSnippet;
	}
	public function getTextSnippet() {
		return $this->textSnippet;
	}
}

class GoogleGAL_Service_Books_VolumeUserInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $copyType               = 'GoogleGAL_Service_Books_VolumeUserInfoCopy';
	protected $copyDataType           = '';
	public $isInMyBooks;
	public $isPreordered;
	public $isPurchased;
	public $isUploaded;
	protected $readingPositionType     = 'GoogleGAL_Service_Books_ReadingPosition';
	protected $readingPositionDataType = '';
	protected $rentalPeriodType        = 'GoogleGAL_Service_Books_VolumeUserInfoRentalPeriod';
	protected $rentalPeriodDataType    = '';
	public $rentalState;
	protected $reviewType     = 'GoogleGAL_Service_Books_Review';
	protected $reviewDataType = '';
	public $updated;
	protected $userUploadedVolumeInfoType     = 'GoogleGAL_Service_Books_VolumeUserInfoUserUploadedVolumeInfo';
	protected $userUploadedVolumeInfoDataType = '';


	public function setCopy( GoogleGAL_Service_Books_VolumeUserInfoCopy $copy ) {
		$this->copy = $copy;
	}
	public function getCopy() {
		return $this->copy;
	}
	public function setIsInMyBooks( $isInMyBooks ) {
		$this->isInMyBooks = $isInMyBooks;
	}
	public function getIsInMyBooks() {
		return $this->isInMyBooks;
	}
	public function setIsPreordered( $isPreordered ) {
		$this->isPreordered = $isPreordered;
	}
	public function getIsPreordered() {
		return $this->isPreordered;
	}
	public function setIsPurchased( $isPurchased ) {
		$this->isPurchased = $isPurchased;
	}
	public function getIsPurchased() {
		return $this->isPurchased;
	}
	public function setIsUploaded( $isUploaded ) {
		$this->isUploaded = $isUploaded;
	}
	public function getIsUploaded() {
		return $this->isUploaded;
	}
	public function setReadingPosition( GoogleGAL_Service_Books_ReadingPosition $readingPosition ) {
		$this->readingPosition = $readingPosition;
	}
	public function getReadingPosition() {
		return $this->readingPosition;
	}
	public function setRentalPeriod( GoogleGAL_Service_Books_VolumeUserInfoRentalPeriod $rentalPeriod ) {
		$this->rentalPeriod = $rentalPeriod;
	}
	public function getRentalPeriod() {
		return $this->rentalPeriod;
	}
	public function setRentalState( $rentalState ) {
		$this->rentalState = $rentalState;
	}
	public function getRentalState() {
		return $this->rentalState;
	}
	public function setReview( GoogleGAL_Service_Books_Review $review ) {
		$this->review = $review;
	}
	public function getReview() {
		return $this->review;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
	public function setUserUploadedVolumeInfo( GoogleGAL_Service_Books_VolumeUserInfoUserUploadedVolumeInfo $userUploadedVolumeInfo ) {
		$this->userUploadedVolumeInfo = $userUploadedVolumeInfo;
	}
	public function getUserUploadedVolumeInfo() {
		return $this->userUploadedVolumeInfo;
	}
}

class GoogleGAL_Service_Books_VolumeUserInfoCopy extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $allowedCharacterCount;
	public $limitType;
	public $remainingCharacterCount;
	public $updated;


	public function setAllowedCharacterCount( $allowedCharacterCount ) {
		$this->allowedCharacterCount = $allowedCharacterCount;
	}
	public function getAllowedCharacterCount() {
		return $this->allowedCharacterCount;
	}
	public function setLimitType( $limitType ) {
		$this->limitType = $limitType;
	}
	public function getLimitType() {
		return $this->limitType;
	}
	public function setRemainingCharacterCount( $remainingCharacterCount ) {
		$this->remainingCharacterCount = $remainingCharacterCount;
	}
	public function getRemainingCharacterCount() {
		return $this->remainingCharacterCount;
	}
	public function setUpdated( $updated ) {
		$this->updated = $updated;
	}
	public function getUpdated() {
		return $this->updated;
	}
}

class GoogleGAL_Service_Books_VolumeUserInfoRentalPeriod extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $endUtcSec;
	public $startUtcSec;


	public function setEndUtcSec( $endUtcSec ) {
		$this->endUtcSec = $endUtcSec;
	}
	public function getEndUtcSec() {
		return $this->endUtcSec;
	}
	public function setStartUtcSec( $startUtcSec ) {
		$this->startUtcSec = $startUtcSec;
	}
	public function getStartUtcSec() {
		return $this->startUtcSec;
	}
}

class GoogleGAL_Service_Books_VolumeUserInfoUserUploadedVolumeInfo extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $processingState;


	public function setProcessingState( $processingState ) {
		$this->processingState = $processingState;
	}
	public function getProcessingState() {
		return $this->processingState;
	}
}

class GoogleGAL_Service_Books_VolumeVolumeInfo extends GoogleGAL_Collection {

	protected $collection_key         = 'industryIdentifiers';
	protected $internal_gapi_mappings = array();
	public $authors;
	public $averageRating;
	public $canonicalVolumeLink;
	public $categories;
	public $contentVersion;
	public $description;
	protected $dimensionsType              = 'GoogleGAL_Service_Books_VolumeVolumeInfoDimensions';
	protected $dimensionsDataType          = '';
	protected $imageLinksType              = 'GoogleGAL_Service_Books_VolumeVolumeInfoImageLinks';
	protected $imageLinksDataType          = '';
	protected $industryIdentifiersType     = 'GoogleGAL_Service_Books_VolumeVolumeInfoIndustryIdentifiers';
	protected $industryIdentifiersDataType = 'array';
	public $infoLink;
	public $language;
	public $mainCategory;
	public $pageCount;
	public $previewLink;
	public $printType;
	public $printedPageCount;
	public $publishedDate;
	public $publisher;
	public $ratingsCount;
	public $readingModes;
	public $subtitle;
	public $title;


	public function setAuthors( $authors ) {
		$this->authors = $authors;
	}
	public function getAuthors() {
		return $this->authors;
	}
	public function setAverageRating( $averageRating ) {
		$this->averageRating = $averageRating;
	}
	public function getAverageRating() {
		return $this->averageRating;
	}
	public function setCanonicalVolumeLink( $canonicalVolumeLink ) {
		$this->canonicalVolumeLink = $canonicalVolumeLink;
	}
	public function getCanonicalVolumeLink() {
		return $this->canonicalVolumeLink;
	}
	public function setCategories( $categories ) {
		$this->categories = $categories;
	}
	public function getCategories() {
		return $this->categories;
	}
	public function setContentVersion( $contentVersion ) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setDescription( $description ) {
		$this->description = $description;
	}
	public function getDescription() {
		return $this->description;
	}
	public function setDimensions( GoogleGAL_Service_Books_VolumeVolumeInfoDimensions $dimensions ) {
		$this->dimensions = $dimensions;
	}
	public function getDimensions() {
		return $this->dimensions;
	}
	public function setImageLinks( GoogleGAL_Service_Books_VolumeVolumeInfoImageLinks $imageLinks ) {
		$this->imageLinks = $imageLinks;
	}
	public function getImageLinks() {
		return $this->imageLinks;
	}
	public function setIndustryIdentifiers( $industryIdentifiers ) {
		$this->industryIdentifiers = $industryIdentifiers;
	}
	public function getIndustryIdentifiers() {
		return $this->industryIdentifiers;
	}
	public function setInfoLink( $infoLink ) {
		$this->infoLink = $infoLink;
	}
	public function getInfoLink() {
		return $this->infoLink;
	}
	public function setLanguage( $language ) {
		$this->language = $language;
	}
	public function getLanguage() {
		return $this->language;
	}
	public function setMainCategory( $mainCategory ) {
		$this->mainCategory = $mainCategory;
	}
	public function getMainCategory() {
		return $this->mainCategory;
	}
	public function setPageCount( $pageCount ) {
		$this->pageCount = $pageCount;
	}
	public function getPageCount() {
		return $this->pageCount;
	}
	public function setPreviewLink( $previewLink ) {
		$this->previewLink = $previewLink;
	}
	public function getPreviewLink() {
		return $this->previewLink;
	}
	public function setPrintType( $printType ) {
		$this->printType = $printType;
	}
	public function getPrintType() {
		return $this->printType;
	}
	public function setPrintedPageCount( $printedPageCount ) {
		$this->printedPageCount = $printedPageCount;
	}
	public function getPrintedPageCount() {
		return $this->printedPageCount;
	}
	public function setPublishedDate( $publishedDate ) {
		$this->publishedDate = $publishedDate;
	}
	public function getPublishedDate() {
		return $this->publishedDate;
	}
	public function setPublisher( $publisher ) {
		$this->publisher = $publisher;
	}
	public function getPublisher() {
		return $this->publisher;
	}
	public function setRatingsCount( $ratingsCount ) {
		$this->ratingsCount = $ratingsCount;
	}
	public function getRatingsCount() {
		return $this->ratingsCount;
	}
	public function setReadingModes( $readingModes ) {
		$this->readingModes = $readingModes;
	}
	public function getReadingModes() {
		return $this->readingModes;
	}
	public function setSubtitle( $subtitle ) {
		$this->subtitle = $subtitle;
	}
	public function getSubtitle() {
		return $this->subtitle;
	}
	public function setTitle( $title ) {
		$this->title = $title;
	}
	public function getTitle() {
		return $this->title;
	}
}

class GoogleGAL_Service_Books_VolumeVolumeInfoDimensions extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $height;
	public $thickness;
	public $width;


	public function setHeight( $height ) {
		$this->height = $height;
	}
	public function getHeight() {
		return $this->height;
	}
	public function setThickness( $thickness ) {
		$this->thickness = $thickness;
	}
	public function getThickness() {
		return $this->thickness;
	}
	public function setWidth( $width ) {
		$this->width = $width;
	}
	public function getWidth() {
		return $this->width;
	}
}

class GoogleGAL_Service_Books_VolumeVolumeInfoImageLinks extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $extraLarge;
	public $large;
	public $medium;
	public $small;
	public $smallThumbnail;
	public $thumbnail;


	public function setExtraLarge( $extraLarge ) {
		$this->extraLarge = $extraLarge;
	}
	public function getExtraLarge() {
		return $this->extraLarge;
	}
	public function setLarge( $large ) {
		$this->large = $large;
	}
	public function getLarge() {
		return $this->large;
	}
	public function setMedium( $medium ) {
		$this->medium = $medium;
	}
	public function getMedium() {
		return $this->medium;
	}
	public function setSmall( $small ) {
		$this->small = $small;
	}
	public function getSmall() {
		return $this->small;
	}
	public function setSmallThumbnail( $smallThumbnail ) {
		$this->smallThumbnail = $smallThumbnail;
	}
	public function getSmallThumbnail() {
		return $this->smallThumbnail;
	}
	public function setThumbnail( $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}
	public function getThumbnail() {
		return $this->thumbnail;
	}
}

class GoogleGAL_Service_Books_VolumeVolumeInfoIndustryIdentifiers extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	public $identifier;
	public $type;


	public function setIdentifier( $identifier ) {
		$this->identifier = $identifier;
	}
	public function getIdentifier() {
		return $this->identifier;
	}
	public function setType( $type ) {
		$this->type = $type;
	}
	public function getType() {
		return $this->type;
	}
}

class GoogleGAL_Service_Books_Volumeannotation extends GoogleGAL_Collection {

	protected $collection_key         = 'pageIds';
	protected $internal_gapi_mappings = array();
	public $annotationDataId;
	public $annotationDataLink;
	public $annotationType;
	protected $contentRangesType     = 'GoogleGAL_Service_Books_VolumeannotationContentRanges';
	protected $contentRangesDataType = '';
	public $data;
	public $deleted;
	public $id;
	public $kind;
	public $layerId;
	public $pageIds;
	public $selectedText;
	public $selfLink;
	public $updated;
	public $volumeId;


	public function setAnnotationDataId( $annotationDataId ) {
		$this->annotationDataId = $annotationDataId;
	}
	public function getAnnotationDataId() {
		return $this->annotationDataId;
	}
	public function setAnnotationDataLink( $annotationDataLink ) {
		$this->annotationDataLink = $annotationDataLink;
	}
	public function getAnnotationDataLink() {
		return $this->annotationDataLink;
	}
	public function setAnnotationType( $annotationType ) {
		$this->annotationType = $annotationType;
	}
	public function getAnnotationType() {
		return $this->annotationType;
	}
	public function setContentRanges( GoogleGAL_Service_Books_VolumeannotationContentRanges $contentRanges ) {
		$this->contentRanges = $contentRanges;
	}
	public function getContentRanges() {
		return $this->contentRanges;
	}
	public function setData( $data ) {
		$this->data = $data;
	}
	public function getData() {
		return $this->data;
	}
	public function setDeleted( $deleted ) {
		$this->deleted = $deleted;
	}
	public function getDeleted() {
		return $this->deleted;
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
	public function setLayerId( $layerId ) {
		$this->layerId = $layerId;
	}
	public function getLayerId() {
		return $this->layerId;
	}
	public function setPageIds( $pageIds ) {
		$this->pageIds = $pageIds;
	}
	public function getPageIds() {
		return $this->pageIds;
	}
	public function setSelectedText( $selectedText ) {
		$this->selectedText = $selectedText;
	}
	public function getSelectedText() {
		return $this->selectedText;
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
	public function setVolumeId( $volumeId ) {
		$this->volumeId = $volumeId;
	}
	public function getVolumeId() {
		return $this->volumeId;
	}
}

class GoogleGAL_Service_Books_VolumeannotationContentRanges extends GoogleGAL_Model {

	protected $internal_gapi_mappings = array();
	protected $cfiRangeType           = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $cfiRangeDataType       = '';
	public $contentVersion;
	protected $gbImageRangeType     = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbImageRangeDataType = '';
	protected $gbTextRangeType      = 'GoogleGAL_Service_Books_BooksAnnotationsRange';
	protected $gbTextRangeDataType  = '';


	public function setCfiRange( GoogleGAL_Service_Books_BooksAnnotationsRange $cfiRange ) {
		$this->cfiRange = $cfiRange;
	}
	public function getCfiRange() {
		return $this->cfiRange;
	}
	public function setContentVersion( $contentVersion ) {
		$this->contentVersion = $contentVersion;
	}
	public function getContentVersion() {
		return $this->contentVersion;
	}
	public function setGbImageRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbImageRange ) {
		$this->gbImageRange = $gbImageRange;
	}
	public function getGbImageRange() {
		return $this->gbImageRange;
	}
	public function setGbTextRange( GoogleGAL_Service_Books_BooksAnnotationsRange $gbTextRange ) {
		$this->gbTextRange = $gbTextRange;
	}
	public function getGbTextRange() {
		return $this->gbTextRange;
	}
}

class GoogleGAL_Service_Books_Volumeannotations extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Volumeannotation';
	protected $itemsDataType          = 'array';
	public $kind;
	public $nextPageToken;
	public $totalItems;
	public $version;


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
	public function setVersion( $version ) {
		$this->version = $version;
	}
	public function getVersion() {
		return $this->version;
	}
}

class GoogleGAL_Service_Books_Volumes extends GoogleGAL_Collection {

	protected $collection_key         = 'items';
	protected $internal_gapi_mappings = array();
	protected $itemsType              = 'GoogleGAL_Service_Books_Volume';
	protected $itemsDataType          = 'array';
	public $kind;
	public $totalItems;


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
	public function setTotalItems( $totalItems ) {
		$this->totalItems = $totalItems;
	}
	public function getTotalItems() {
		return $this->totalItems;
	}
}
