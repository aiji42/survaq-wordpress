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
 * Service definition for Admin (email_migration_v2).
 *
 * <p>
 * Email Migration API lets you migrate emails of users to Google backends.</p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="https://developers.google.com/admin-sdk/email-migration/v2/" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class GoogleGAL_Service_Admin extends GoogleGAL_Service {

	/** Manage email messages of users on your domain. */
	const EMAIL_MIGRATION =
	  'https://www.googleapis.com/auth/email.migration';

	public $mail;


	/**
	 * Constructs the internal representation of the Admin service.
	 *
	 * @param GoogleGAL_Client $client
	 */
	public function __construct( GoogleGAL_Client $client ) {
		parent::__construct( $client );
		$this->servicePath = 'email/v2/users/';
		$this->version     = 'email_migration_v2';
		$this->serviceName = 'admin';

		$this->mail = new GoogleGAL_Service_Admin_Mail_Resource(
			$this,
			$this->serviceName,
			'mail',
			array(
				'methods' => array(
					'insert' => array(
						'path'       => '{userKey}/mail',
						'httpMethod' => 'POST',
						'parameters' => array(
							'userKey' => array(
								'location' => 'path',
								'type'     => 'string',
								'required' => true,
							),
						),
					),
				),
			)
		);
	}
}


/**
 * The "mail" collection of methods.
 * Typical usage is:
 *  <code>
 *   $adminService = new GoogleGAL_Service_Admin(...);
 *   $mail = $adminService->mail;
 *  </code>
 */
class GoogleGAL_Service_Admin_Mail_Resource extends GoogleGAL_Service_Resource {


	/**
	 * Insert Mail into Google's Gmail backends (mail.insert)
	 *
	 * @param string             $userKey The email or immutable id of the user
	 * @param GoogleGAL_MailItem $postBody
	 * @param array              $optParams Optional parameters.
	 */
	public function insert( $userKey, GoogleGAL_Service_Admin_MailItem $postBody, $optParams = array() ) {
		$params = array(
			'userKey'  => $userKey,
			'postBody' => $postBody,
		);
		$params = array_merge( $params, $optParams );
		return $this->call( 'insert', array( $params ) );
	}
}




class GoogleGAL_Service_Admin_MailItem extends GoogleGAL_Collection {

	protected $collection_key         = 'labels';
	protected $internal_gapi_mappings = array();
	public $isDeleted;
	public $isDraft;
	public $isInbox;
	public $isSent;
	public $isStarred;
	public $isTrash;
	public $isUnread;
	public $kind;
	public $labels;


	public function setIsDeleted( $isDeleted ) {
		$this->isDeleted = $isDeleted;
	}
	public function getIsDeleted() {
		return $this->isDeleted;
	}
	public function setIsDraft( $isDraft ) {
		$this->isDraft = $isDraft;
	}
	public function getIsDraft() {
		return $this->isDraft;
	}
	public function setIsInbox( $isInbox ) {
		$this->isInbox = $isInbox;
	}
	public function getIsInbox() {
		return $this->isInbox;
	}
	public function setIsSent( $isSent ) {
		$this->isSent = $isSent;
	}
	public function getIsSent() {
		return $this->isSent;
	}
	public function setIsStarred( $isStarred ) {
		$this->isStarred = $isStarred;
	}
	public function getIsStarred() {
		return $this->isStarred;
	}
	public function setIsTrash( $isTrash ) {
		$this->isTrash = $isTrash;
	}
	public function getIsTrash() {
		return $this->isTrash;
	}
	public function setIsUnread( $isUnread ) {
		$this->isUnread = $isUnread;
	}
	public function getIsUnread() {
		return $this->isUnread;
	}
	public function setKind( $kind ) {
		$this->kind = $kind;
	}
	public function getKind() {
		return $this->kind;
	}
	public function setLabels( $labels ) {
		$this->labels = $labels;
	}
	public function getLabels() {
		return $this->labels;
	}
}
