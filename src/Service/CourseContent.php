<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Course content (content objects, ISBNs, tables of content) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/content.html
 */
class CourseContent
{
    /**
     * Delete a specific module from an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $moduleId Module ID.
     */
    public function deleteContentModulesOrgUnitIdModuleId($version, $orgUnitId, $moduleId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'DELETE');
        return new Request('GET', $uri);
    }


    /**
     * Delete a specific topic from an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $topicId Topic ID.
     */
    public function deleteContentTopicsOrgUnitIdTopicId($version, $orgUnitId, $topicId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'DELETE');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific module for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
     * @return /PSR7 (Request)
     * Return. This action returns a ContentObject
     * JSON data block of type Module.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $moduleId Module ID.
     */
    public function getContentModulesOrgUnitIdModuleId($version, $orgUnitId, $moduleId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the structure for a specific module in an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)-structure-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of ContentObject
     * data blocks (can by either Module or Topic type blocks).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $moduleId Module ID.
     */
    public function getContentModulesStructureOrgUnitIdModuleId($version, $orgUnitId, $moduleId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId/structure/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the root module(s) for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-root-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of ContentObject
     * data blocks of type Module.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentRootOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/root/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific topic for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
     * @return /PSR7 (Request)
     * Return. This action returns a ContentObject
     * JSON data block of type Topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $topicId Topic ID.
     */
    public function getContentTopicsOrgUnitIdTopicId($version, $orgUnitId, $topicId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the content topic file for a content topic.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-file
     * @return /PSR7 (Request)
     * Return. This action retrieves the underlying file for a file content
     * topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [boolean] $stream Optional. If set to true, will stream the file instead of downloading it.
     * stream
     */
    public function getContentTopicsFileOrgUnitIdTopicId($version, $orgUnitId, $topicId, $stream = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)-structure-
     * @return /PSR7 (Request)
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
     * @param [boolean] $base64 Optional. If present and true, when adding a file topic, you are providing base64-encoded file attachment data.
     * base64
     * @param [boolean] $renameFileIfExists Optional. If present and true, when adding a file topic, if a file already exists with the same name then it will rename this new one and continue rather than overwrite it.
     * renameFileIfExists
     */
    public function postContentModulesStructureOrgUnitIdModuleId($version, $orgUnitId, $moduleId, $base64 = null, $renameFileIfExists = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-root-
     * @return /PSR7 (Request)
     * Return. This action returns a ContentObject
     * JSON data block of type Module.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postContentRootOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/root/", 'POST');
        return new Request('GET', $uri);
    }


    /**
     * Update a particular module for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-modules-(moduleId)
     * @return /PSR7 (Request)
     * Input. Note that you cannot use this action to affect a module’s existing
     * Structure property.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $moduleId Module ID.
     */
    public function putContentModulesOrgUnitIdModuleId($version, $orgUnitId, $moduleId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/modules/$moduleId", 'PUT');
        return new Request('GET', $uri);
    }


    /**
     * Update a particular topic for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)
     * @return /PSR7 (Request)
     * Input. Note that you can use this action to change a topic’s Url
     * property, but if it changes the new URL must be a valid one for the org
     * unit’s content store (the service makes no check that the URL actually points
     * at anything useful, however). You cannot use this action to provide new
     * file data for an existing topic.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $topicId Topic ID.
     */
    public function putContentTopicsOrgUnitIdTopicId($version, $orgUnitId, $topicId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId", 'PUT');
        return new Request('GET', $uri);
    }


    /**
     * Replace the content topic file for a content topic.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-file
     * @return /PSR7 (Request)
     * Input. Provide an uploaded content file using the
     * simple file upload process; the content-disposition
     * part header for the file part should have the name file. This file will be saved in the same
     * location as the existing content topic file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $topicId Topic ID.
     */
    public function putContentTopicsFileOrgUnitIdTopicId($version, $orgUnitId, $topicId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/file", 'PUT');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the content overview for a course offering.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-overview
     * @return /PSR7 (Request)
     * Return. This action returns a Overview
     * JSON data block containing the course offering’s content overview details.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getOverviewOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/overview", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the content overview’s file attachment for a course offering.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-overview-attachment
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the course
     * offering’s content overview file attachment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getOverviewAttachmentOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/overview/attachment", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Remove the association between an ISBN and org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#delete--d2l-api-le-(version)-(orgUnitId)-content-isbn-(isbn)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $isbn ISBN.
     */
    public function deleteContentIsbnOrgUnitIdIsbn($version, $orgUnitId, $isbn)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/$isbn", 'DELETE');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the org units associated with an ISBN.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-isbn-(isbn)
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of IsbnAssociation
     * data blocks specifying all the org units associated with the provided ISBN.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $isbn ISBN.
     */
    public function getContentIsbnIsbn($version, $isbn)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/isbn/$isbn", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all ISBNs associated with an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-isbn-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of IsbnAssociation
     * data blocks specifying all the org units associated with the provided ISBN.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentIsbnOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the association between a ISBN and org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-isbn-(isbn)
     * @return /PSR7 (Request)
     * Return. This action returns a IsbnAssociation
     * JSON data block specifying the association between an org unit and an ISBN.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $isbn ISBN.
     */
    public function getContentIsbnOrgUnitIdIsbn($version, $orgUnitId, $isbn)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/$isbn", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Create a new association between an ISBN and an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-isbn-
     * @return /PSR7 (Request)
     * Return. This action returns a IsbnAssociation
     * JSON data block for the newly created association.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [IsbnAssociationData] $isbnAssociationData New ISBN association properties.
     */
    public function postContentIsbnOrgUnitId($version, $orgUnitId, $isbnAssociationData)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/isbn/", 'POST');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the calling user’s scheduled items.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-
     * @return /PSR7 (Request)
     * Input. When calling this action, you must provide a list of org unit
     * IDs that amount to some or all of the calling user’s active enrollments. You
     * can also filter the data retrieved based on its
     * completion status or whether an item’s due date falls
     * within a provided time window. Exempted items do not have due dates.
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of ScheduledItem
     * blocks, sorted by the earliest of start date, end date, or due date that
     * match the provided query parameter filters.
     *
     * @param [D2LVERSION] $version API version.
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitems($version, $completion = null, $startDateTime = null, $endDateTime = null)
    {
        $queryParrams = [
                            "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the calling user’s scheduled items still due.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-due-
     * @return /PSR7 (Request)
     * Input. When calling this action, you must provide a list of org unit
     * IDs that amount to some or all of the calling user’s active enrollments. You
     * can also filter the data retrieved based on its
     * completion status or whether an item’s due date falls
     * within a provided time window.
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of ScheduledItem
     * blocks of the user’s scheduled items that are still due, sorted by the due date,
     * and that match the provided query parameter filters. Exempted items are considered
     * not due and will not appear in the result list.
     *
     * @param [D2LVERSION] $version API version.
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsDue($version, $completion = null, $startDateTime = null, $endDateTime = null)
    {
        $queryParrams = [
                            "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/myItems/due/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the quantities of the calling user’s scheduled items, organized by org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-itemCounts-
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsItemcounts($version, $completion = null, $startDateTime = null, $endDateTime = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-due-itemCounts-
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsDueItemcounts($version, $completion = null, $startDateTime = null, $endDateTime = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-completions-
     * @return /PSR7 (Request)
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
     * @param [UTCDateTime] $completedFromDateTime Optional. Start of time window to examine.
     * completedFromDateTime
     * @param [UTCDateTime] $completedToDateTime Optional. End of time window to examine.
     * completedToDateTime
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-myItems-completions-due-
     * @return /PSR7 (Request)
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
     * @param [UTCDateTime] $completedFromDateTime Optional. Start of time window to examine.
     * completedFromDateTime
     * @param [UTCDateTime] $completedToDateTime Optional. End of time window to examine.
     * completedToDateTime
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
     * Retrieve the calling user’s scheduled items for a particular org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsOrgUnitId($version, $orgUnitId, $completion = null, $startDateTime = null, $endDateTime = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-due-
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsDueOrgUnitId($version, $orgUnitId, $completion = null, $startDateTime = null, $endDateTime = null)
    {
        $queryParrams = [
                            "completion" => $completion,                    "startDateTime" => $startDateTime,                    "endDateTime" => $endDateTime

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/myItems/due/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the quantity of the calling user’s scheduled items for provided org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-itemCount
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsItemcountOrgUnitId($version, $orgUnitId, $completion = null, $startDateTime = null, $endDateTime = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-myItems-due-itemCount
     * @return /PSR7 (Request)
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
     * @param [COMPLETION_T] $completion Optional. Completion status.
     * completion
     * @param [UTCDateTime] $startDateTime Optional. Start of time window to examine.
     * startDateTime
     * @param [UTCDateTime] $endDateTime Optional. End of time window to examine.
     * endDateTime
     */
    public function getContentMyitemsDueItemcountOrgUnitId($version, $orgUnitId, $completion = null, $startDateTime = null, $endDateTime = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-overdueItems-
     * @return /PSR7 (Request)
     * Input. For this call, you must provide a userId query parameter and may
     * provide an orgUnitIdsCSV query parameter:
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of OverdueItem blocks.
     * Exempted items are considered not due and will not be counted.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User for which to retrieve the overdue activities.
     */
    public function getOverdueitems($version, $userId)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-overdueItems-myItems
     * @return /PSR7 (Request)
     * Input. You may provide orgUnitIdsCSV query parameter for this call;
     * you will be unable to retrieve overdue items for org units for which you do
     * not have Manage Content privileges.
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of OverdueItem.
     * Exempted items are considered not due and will not be counted.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOverdueitemsMyitems($version)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/overdueItems/myItems", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of topics that have been bookmarked.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-bookmarks
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Topic ToC entries.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentBookmarksOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/bookmarks", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of the most recently visited topics.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-recent
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of Topic ToC entries.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentRecentOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/recent", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the table of course content for an org unit.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-toc
     * @return /PSR7 (Request)
     * Input. This action’s optional ignoreModuleDateRestrictions query parameter
     * supports inclusion of content module entries regardless of date restrictions
     * on viewing content:
     *
     * Return. This action returns a TableOfContents JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentTocOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/toc", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of content topic completions for a topic for users the caller
     * has access to.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of ContentTopicCompletion
     * blocks, sorted by userId and the isAscendingSort parameter.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $topicId Content Topic ID.
     * @param [D2LID] $userId Optional. User ID.
     * userId
     * @param [boolean] $isAscendingSort Optional. Whether to sort ascending. True by default.
     * isAscendingSort
     * @param [D2LID] $userBookmark Optional. Bookmark for last user returned.
     * userBookmark
     */
    public function getContentTopicsCompletionsOrgUnitIdTopicId($version, $orgUnitId, $topicId, $userId = null, $isAscendingSort = null, $userBookmark = null)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-users-(userId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * ContentTopicCompletion JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $topicId Content Topic ID.
     * @param [D2LID] $userId User ID.
     */
    public function getContentTopicsCompletionsUsersOrgUnitIdTopicIdUserId($version, $orgUnitId, $topicId, $userId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/completions/users/$userId", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the aggregate count of completed and required content topics in an
     * org unit for the calling user.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-completions-mycount-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage JSON block
     * containing a list of ContentAggregateCompletion items.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [CONTENTCOMPLETIONLEVEL_T] $level Completion aggregation level.
     */
    public function getContentCompletionsMycountOrgUnitId($version, $orgUnitId, $level)
    {
        $queryParrams = [
                            "level" => $level

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/completions/mycount/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the count of completed and required content topics in an org unit
     * for each of the users in the csv.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-completions-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing a list of
     * ContentLearnerProgress items.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [boolean] $ignoreInvalid If true, prompt the back-end service to filter out and ignore provided userIdsCSV values that are unauthorized or non-existent.
     */
    public function getContentCompletionsOrgUnitId($version, $orgUnitId, $ignoreInvalid)
    {
        $queryParrams = [
                            "ignoreInvalid" => $ignoreInvalid

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/completions/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieves the count of completed and required content topics for a user
     * in each org unit in the csv.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-content-completions-(userId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing a list of
     * ContentLearnerProgress items.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [boolean] $ignoreInvalid If true, prompt the back-end service to filter out and ignore provided orgUnitIdsCSV values that are unauthorized or non-existent.
     */
    public function getContentCompletionsUserId($version, $userId, $ignoreInvalid)
    {
        $queryParrams = [
                            "ignoreInvalid" => $ignoreInvalid

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/content/completions/$userId/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the user progress items in an org unit, for specific users or
     * content topics.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-userprogress-
     * @return /PSR7 (Request)
     * Input. The calling user context’s role affects the scope of this action:
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of UserProgressData.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $userId Report on progress for these users (you can use this parameter more than once for multiple users).
     * @param [D2LID] $objectId Report on progress through these content topics (you can use this parameter more than once for multiple topics).
     */
    public function getContentUserprogressOrgUnitId($version, $orgUnitId, $userId, $objectId)
    {
        $queryParrams = [
                            "userId" => $userId,                    "objectId" => $objectId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/userprogress/?$queryString", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve one user’s progress within an org unit for a particular content topic.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-userprogress-(topicId)
     * @return /PSR7 (Request)
     * Input. The calling user context’s role affects the scope of this action:
     *
     * Return. This action returns a UserProgressData
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $topicId Topic ID.
     * @param [D2LID] $userId Report on progress for this user.
     */
    public function getContentUserprogressOrgUnitIdTopicId($version, $orgUnitId, $topicId, $userId)
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
     * @see https://docs.valence.desire2learn.com/res/content.html#post--d2l-api-le-(version)-(orgUnitId)-content-userprogress-
     * @return /PSR7 (Request)
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
     */
    public function postContentUserprogressOrgUnitId($version, $orgUnitId, $userProgressData)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/userprogress/", 'POST');
        return new Request('GET', $uri);
    }


    /**
     * Update a content topic completion for a topic for a particular user.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-topics-(topicId)-completions-users-(userId)
     * @return /PSR7 (Request)
     * Input. This action expects a ContentTopicCompletionUpdate JSON block as input.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $topicId Content Topic ID.
     * @param [D2LID] $userId User ID.
     * @param [ContentTopicCompletionUpdate] $contentTopicCompletionUpdate Updated completion information for the topic.
     */
    public function putContentTopicsCompletionsUsersOrgUnitIdTopicIdUserId($version, $orgUnitId, $topicId, $userId, $contentTopicCompletionUpdate)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/topics/$topicId/completions/users/$userId", 'PUT');
        return new Request('GET', $uri);
    }


    /**
     * Retrieve pacing dates for content.
     * @see https://docs.valence.desire2learn.com/res/content.html#get--d2l-api-le-(version)-(orgUnitId)-content-pacing
     * @return /PSR7 (Request)
     * Return. This action returns a PacingInfo
     * JSON data block containing the course and semester start and end dates.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getContentPacingOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing", 'GET');
        return new Request('GET', $uri);
    }


    /**
     * Set pacing dates for content.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-pacing
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function putContentPacingOrgUnitId($version, $orgUnitId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing", 'PUT');
        return new Request('GET', $uri);
    }


    /**
     * Set pacing dates for a specific module.
     * @see https://docs.valence.desire2learn.com/res/content.html#put--d2l-api-le-(version)-(orgUnitId)-content-pacing-modules-(moduleId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $moduleId Module ID.
     */
    public function putContentPacingModulesOrgUnitIdModuleId($version, $orgUnitId, $moduleId)
    {
        $uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/content/pacing/modules/$moduleId", 'PUT');
        return new Request('GET', $uri);
    }
}