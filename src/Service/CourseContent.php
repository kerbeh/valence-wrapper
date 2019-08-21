<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Course content (content objects, ISBNs, tables of content) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/content.html
 */
class CourseContent
{
	/**
	 * Delete a specific module from an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
	 * @return /PSR7 (Request)
	 */
	public function deleteContentModules($version, $orgUnitId, $moduleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a specific topic from an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function deleteContentTopics($version, $orgUnitId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific module for an org unit.
	 *
	 * Return. This action returns a ContentObject
	 * JSON data block of type Module.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
	 * @return /PSR7 (Request)
	 */
	public function getContentModules($version, $orgUnitId, $moduleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the structure for a specific module in an org unit.
	 *
	 * Return. This action returns a JSON array of ContentObject
	 * data blocks (can by either Module or Topic type blocks).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)-structure-
	 * @return /PSR7 (Request)
	 */
	public function getContentModulesStructure($version, $orgUnitId, $moduleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId/structure/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the root module(s) for an org unit.
	 *
	 * Return. This action returns a JSON array of ContentObject
	 * data blocks of type Module.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-root-
	 * @return /PSR7 (Request)
	 */
	public function getContentRoot($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/root/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a specific topic for an org unit.
	 *
	 * Return. This action returns a ContentObject
	 * JSON data block of type Topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function getContentTopics($version, $orgUnitId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the content topic file for a content topic.
	 *
	 * Return. This action retrieves the underlying file for a file content
	 * topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-file
	 * @return /PSR7 (Request)
	 */
	public function getContentTopicsFile($version, $orgUnitId, $topicId, $stream = null)
	{
		$queryParrams = [
		                    "stream" => $stream

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/file?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add a child module or topic to a specific module’s structure.
	 *
	 * Input. You can use this action in several ways, depending on whether
	 * you’re attempting to add a child module, a child link topic, or a child file
	 * topic to an existing (parent) module.
	 *
	 * Return. On success, this action returns a JSON data block containin the
	 * properties for the content object you’ve created:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID for the parent  module.
	 * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)-structure-
	 * @return /PSR7 (Request)
	 */
	public function postContentModulesStructure($version, $orgUnitId, $moduleId, $base64 = null, $renameFileIfExists = null)
	{
		$queryParrams = [
		                    "base64" => $base64,                    "renameFileIfExists" => $renameFileIfExists

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId/structure/?$queryString", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new root module for an org unit.
	 *
	 * Return. This action returns a ContentObject
	 * JSON data block of type Module.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-root-
	 * @return /PSR7 (Request)
	 */
	public function postContentRoot($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/root/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular module for an org unit.
	 *
	 * Input. Note that you cannot use this action to affect a module’s existing
	 * Structure property.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
	 * @return /PSR7 (Request)
	 */
	public function putContentModules($version, $orgUnitId, $moduleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular topic for an org unit.
	 *
	 * Input. Note that you can use this action to change a topic’s Url
	 * property, but if it changes the new URL must be a valid one for the org
	 * unit’s content store (the service makes no check that the URL actually points
	 * at anything useful, however). You cannot use this action to provide new
	 * file data for an existing topic.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function putContentTopics($version, $orgUnitId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Replace the content topic file for a content topic.
	 *
	 * Input. Provide an uploaded content file using the
	 * simple file upload process; the content-disposition
	 * part header for the file part should have the name file. This file will be saved in the same
	 * location as the existing content topic file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-file
	 * @return /PSR7 (Request)
	 */
	public function putContentTopicsFile($version, $orgUnitId, $topicId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/file", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the content overview for a course offering.
	 *
	 * Return. This action returns a Overview
	 * JSON data block containing the course offering’s content overview details.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-overview
	 * @return /PSR7 (Request)
	 */
	public function getOverview($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/overview", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the content overview’s file attachment for a course offering.
	 *
	 * Return. This action returns a file stream containing the course
	 * offering’s content overview file attachment.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-overview-attachment
	 * @return /PSR7 (Request)
	 */
	public function getOverviewAttachment($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/overview/attachment", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the association between an ISBN and org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [string] $isbn ISBN.
	 * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-isbn-(isbn)
	 * @return /PSR7 (Request)
	 */
	public function deleteContentIsbn($version, $orgUnitId, $isbn)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/$isbn", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the association between a ISBN and org unit.
	 *
	 * Return. This action returns a IsbnAssociation
	 * JSON data block specifying the association between an org unit and an ISBN.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [string] $isbn ISBN.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-isbn-(isbn)
	 * @return /PSR7 (Request)
	 */
	public function getContentIsbn($version, $orgUnitId, $isbn)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/$isbn", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new association between an ISBN and an org unit.
	 *
	 * Return. This action returns a IsbnAssociation
	 * JSON data block for the newly created association.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [IsbnAssociationData] $isbnAssociationData New ISBN association properties.
	 * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-isbn-
	 * @return /PSR7 (Request)
	 */
	public function postContentIsbn($version, $orgUnitId, $isbnAssociationData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the calling user’s scheduled items for a particular org unit.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its completion status or whether an item’s due date
	 * falls within a provided time window. Exempted items do not have due dates.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of ScheduledItem blocks,
	 * sorted by the earliest of start date, end date, or due date, that match the
	 * provided query parameter filters.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitems($version, $orgUnitId, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/myItems/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the calling user’s scheduled items still due for a particular org unit.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its completion status or whether an item’s due date
	 * falls within a provided time window.
	 *
	 * Return. An ObjectListPage
	 * JSON block containing a list of ScheduledItem
	 * blocks of the user’s scheduled items that are still due, sorted by due date, and
	 * that match the provided query parameter filters. Exempted items are considered
	 * not due and will not appear in the result list.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-due-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsDue($version, $orgUnitId, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/myItems/due/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the quantities of the calling user’s scheduled items, organized by org unit.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments. You
	 * can also filter the data retrieved based on its
	 * completion status or whether an item’s due date falls
	 * within a provided time window. Exempted items do not have due dates.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of ScheduledItemCount
	 * blocks containing only the quantity of the calling user’s scheduled items that match
	 * the provided query parameter filters.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-itemCounts-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsItemcounts($version, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/itemCounts/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the quantities of the calling user’s scheduled items still due.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments. You
	 * can also filter the data retrieved based on its
	 * completion status or whether an item’s due date falls
	 * within a provided time window.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of ScheduledItemCount
	 * blocks containing only the quantity of the calling user’s scheduled items
	 * that are still due and match the provided query parameter filters. Exempted
	 * items are considered not due and will not be counted.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-due-itemCounts-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsDueItemcounts($version, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/due/itemCounts/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the calling user’s completed scheduled items.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments.
	 * You can also filter the data retrieved based on item’s completion date,
	 * which falls within the provided time window.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of completed ScheduledItem
	 * blocks, sorted by completion date that match the provided query parameter filters.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-completions-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsCompletions($version, $completedFromDateTime = null, $completedToDateTime = null)
	{
		$queryParrams = [
		                    "completedFromDateTime" => $completedFromDateTime,                    "completedToDateTime" => $completedToDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/completions/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the calling user’s completed scheduled items that have a due date.
	 *
	 * Input. When calling this action, you must provide a list of org unit
	 * IDs that amount to some or all of the calling user’s active enrollments.
	 * You can also filter the data retrieved based on item’s completion date,
	 * which falls within the provided time window.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of completed ScheduledItem
	 * blocks, sorted by completion date that match the provided query parameter filters.
	 * Exempted items are considered not due and will not appear in the result list.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-completions-due-
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsCompletionsDue($version, $completedFromDateTime = null, $completedToDateTime = null)
	{
		$queryParrams = [
		                    "completedFromDateTime" => $completedFromDateTime,                    "completedToDateTime" => $completedToDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/completions/due/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the quantity of the calling user’s scheduled items for provided org unit.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its completion status or whether an item’s due date
	 * falls within a provided time window. Exempted items do not have due dates.
	 *
	 * Return. This action returns a ScheduledItemCount
	 * JSON block containing only the quantity of the calling user’s scheduled
	 * items that match the provided query parameter filters.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-itemCount
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsItemcount($version, $orgUnitId, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/myItems/itemCount?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve quantity of the calling user’s scheduled items still due for a
	 * particular org unit.
	 *
	 * Input. When calling this action, you can filter the data retrieved based
	 * on its completion status or whether an item’s due date
	 * falls within a provided time window.
	 *
	 * Return. This action returns a ScheduledItemCount
	 * JSON block containing only the quantity of the calling user’s scheduled
	 * items that are still due and match the provided query parameter filters.
	 * Exempted items are considered not due and will not be counted.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-due-itemCount
	 * @return /PSR7 (Request)
	 */
	public function getContentMyitemsDueItemcount($version, $orgUnitId, $completion = null, $endDateTime = null, $startDateTime = null)
	{
		$queryParrams = [
		                    "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/myItems/due/itemCount?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the overdue items for a particular user in a particular org unit.
	 *
	 * Input. For this call, you must provide a userId query parameter and may
	 * provide an orgUnitIdsCSV query parameter:
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of OverdueItem blocks.
	 * Exempted items are considered not due and will not be counted.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-overdueItems-
	 * @return /PSR7 (Request)
	 */
	public function getOverdueitems($version, $userId = null)
	{
		$queryParrams = [
		                    "userId" => $userId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/overdueItems/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves the calling user’s overdue items, within a number of org units.
	 *
	 * Input. You may provide orgUnitIdsCSV query parameter for this call;
	 * you will be unable to retrieve overdue items for org units for which you do
	 * not have Manage Content privileges.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of OverdueItem.
	 * Exempted items are considered not due and will not be counted.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-overdueItems-myItems
	 * @return /PSR7 (Request)
	 */
	public function getOverdueitemsMyitems($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/overdueItems/myItems", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of topics that have been bookmarked.
	 *
	 * Return. This action returns a JSON array of Topic ToC entries.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-bookmarks
	 * @return /PSR7 (Request)
	 */
	public function getContentBookmarks($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/bookmarks", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of the most recently visited topics.
	 *
	 * Return. This action returns a JSON array of Topic ToC entries.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-recent
	 * @return /PSR7 (Request)
	 */
	public function getContentRecent($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/recent", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the table of course content for an org unit.
	 *
	 * Input. This action’s optional ignoreModuleDateRestrictions query parameter
	 * supports inclusion of content module entries regardless of date restrictions
	 * on viewing content:
	 *
	 * Return. This action returns a TableOfContents JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-toc
	 * @return /PSR7 (Request)
	 */
	public function getContentToc($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/toc", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of content topic completions for a topic for users the caller
	 * has access to.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of ContentTopicCompletion
	 * blocks, sorted by userId and the isAscendingSort parameter.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $topicId Content Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-
	 * @return /PSR7 (Request)
	 */
	public function getContentTopicsCompletions($version, $orgUnitId, $topicId, $isAscendingSort = null, $userBookmark = null, $userId = null)
	{
		$queryParrams = [
		                    "userId" => $userId,                    "isAscendingSort" => $isAscendingSort,                    "userBookmark" => $userBookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/completions/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a content topic completion for a topic for a particular user.
	 *
	 * Return. This action returns a
	 * ContentTopicCompletion JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $topicId Content Topic ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getContentTopicsCompletionsUsers($version, $orgUnitId, $topicId, $userId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/completions/users/$userId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves the aggregate count of completed and required content topics in an
	 * org unit for the calling user.
	 *
	 * Return. This action returns an ObjectListPage JSON block
	 * containing a list of ContentAggregateCompletion items.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-completions-mycount-
	 * @return /PSR7 (Request)
	 */
	public function getContentCompletionsMycount($version, $orgUnitId, $level = null)
	{
		$queryParrams = [
		                    "level" => $level

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/completions/mycount/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieves the count of completed and required content topics for a user
	 * in each org unit in the csv.
	 *
	 * Return. This action returns a JSON block containing a list of
	 * ContentLearnerProgress items.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-completions-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getContentCompletions($version, $userId, $ignoreInvalid = null)
	{
		$queryParrams = [
		                    "ignoreInvalid" => $ignoreInvalid

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/completions/$userId/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve one user’s progress within an org unit for a particular content topic.
	 *
	 * Input. The calling user context’s role affects the scope of this action:
	 *
	 * Return. This action returns a UserProgressData
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $topicId Topic ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-userprogress-(topicId)
	 * @return /PSR7 (Request)
	 */
	public function getContentUserprogress($version, $orgUnitId, $topicId, $userId = null)
	{
		$queryParrams = [
		                    "userId" => $userId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/userprogress/$topicId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update a user progress item.
	 *
	 * Input. Note that the UserId property in your provided user progress
	 * data must be the ID for the calling user context: this action only lets
	 * users update their own progress through content.
	 *
	 * Return. This action returns a UserProgressData
	 * JSON data block containing the updated state of the user’s progress.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [UserProgressData] $userProgressData Updated progress for a content topic.
	 * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-userprogress-
	 * @return /PSR7 (Request)
	 */
	public function postContentUserprogress($version, $orgUnitId, $userProgressData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/userprogress/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a content topic completion for a topic for a particular user.
	 *
	 * Input. This action expects a ContentTopicCompletionUpdate JSON block as input.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $topicId Content Topic ID.
	 * @param [D2LID] $userId User ID.
	 * @param [ContentTopicCompletionUpdate] $contentTopicCompletionUpdate Updated completion information for the topic.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function putContentTopicsCompletionsUsers($version, $orgUnitId, $topicId, $userId, $contentTopicCompletionUpdate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/completions/users/$userId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve pacing dates for content.
	 *
	 * Return. This action returns a PacingInfo
	 * JSON data block containing the course and semester start and end dates.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-pacing
	 * @return /PSR7 (Request)
	 */
	public function getContentPacing($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Set pacing dates for content.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-pacing
	 * @return /PSR7 (Request)
	 */
	public function putContentPacing($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Set pacing dates for a specific module.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $moduleId Module ID.
	 * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-pacing-modules-(moduleId)
	 * @return /PSR7 (Request)
	 */
	public function putContentPacingModules($version, $orgUnitId, $moduleId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing/modules/$moduleId", 'PUT');
		return new Request('GET', $uri);
	}
}
