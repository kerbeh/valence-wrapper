<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Dropboxes (Folders, categories, submissions, feedback) — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/dropbox.html
 */
class Dropboxes
{
    /**
     * Retrieve all dropbox folders for an org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of DropboxFolder blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [boolean] $onlyCurrentStudentsAndGroups Optional. If true, show only currently enrolled students and active groups.
     * onlyCurrentStudentsAndGroups
     */
    public function getDropboxFoldersOrgUnitId($version, $orgUnitId, $onlyCurrentStudentsAndGroups = null)
    {
        $queryParrams = [
                            "onlyCurrentStudentsAndGroups" => $onlyCurrentStudentsAndGroups

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a specific dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
     * @return /PSR7 (Request)
     * Return. This action returns a DropboxFolder JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
     */
    public function getDropboxFoldersOrgUnitIdFolderId($version, $orgUnitId, $folderId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of users with access to a specified dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-access-
     * @return /PSR7 (Request)
     * Return. This action returns a object list page
     * containing the resulting UserAccess
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
     * @param [D2LID] $userId Optional. Retrieve access for a single user.
     * userId
     * @param [D2LID] $roleId Optional. Retrieve access for users with the given role.
     * roleId
     */
    public function getDropboxFoldersAccessOrgUnitIdFolderId($version, $orgUnitId, $folderId, $userId = null, $roleId = null)
    {
        $queryParrams = [
                            "userId" => $userId,                    "roleId" => $roleId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/access/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a file attachment (identified by file ID) from a specific dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-attachments-(fileId)
     * @return /PSR7 (Request)
     * Return. This action returns a file stream. This does not apply for link attachments.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
     * @param [D2LID] $fileId File ID for the attachment to retrieve.
     */
    public function getDropboxFoldersAttachmentsOrgUnitIdFolderIdFileId($version, $orgUnitId, $folderId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/attachments/$fileId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new dropbox folder in an org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-
     * @return /PSR7 (Request)
     * Input. The action’s body should be a DropboxFolderUpdateData JSON data block.
     *
     * Return. This action returns a DropboxFolder JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postDropboxFoldersOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/";
        return new Request('GET', $uri);
    }


    /**
     * Update a particular dropbox folder in an org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
     * @return /PSR7 (Request)
     * Input. The action’s body should be a DropboxFolderUpdateData JSON data block.
     *
     * Return. This action returns a DropboxFolder JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
     */
    public function putDropboxFoldersOrgUnitIdFolderId($version, $orgUnitId, $folderId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of org units for which the current user context has an
     * assessment role on their dropbox folders (can see submissions and provide
     * feedback).
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-dropbox-orgUnits-feedback-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of
     * OrgUnitCoreInfo structures to enumerate
     * all the org units for which the current user context may provide feedback.
     *
     * @param [D2LVERSION] $version API version.
     * @param [integer] $type Optional. Provide 0 for all org units, or 1 to filter for only active org units.
     * type
     */
    public function getDropboxOrgunitsFeedback($version, $type = null)
    {
        $queryParrams = [
                            "type" => $type

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/dropbox/orgUnits/feedback/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the submissions for a specific dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of
     * EntityDropbox structures that fully
     * enumerates all the submissions currently provided to the dropbox folders by
     * all the entities. Any submission that already has feedback will come with the
     * feedback as well.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [boolean] $activeOnly Optional. Include only submissions from actively enrolled users.
     * activeOnly
     */
    public function getDropboxFoldersSubmissionsOrgUnitIdFolderId($version, $orgUnitId, $folderId, $activeOnly = null)
    {
        $queryParrams = [
                            "activeOnly" => $activeOnly

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve one of the files included in a submission for a particular dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-(submissionId)-files-(fileId)
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the attachment file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [D2LID] $submissionId Submission ID.
     * @param [D2LID] $fileId File ID for submission file attachment.
     */
    public function getDropboxFoldersSubmissionsFilesOrgUnitIdFolderIdSubmissionIdFileId($version, $orgUnitId, $folderId, $submissionId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/$submissionId/files/$fileId";
        return new Request('GET', $uri);
    }


    /**
     * Post a new group submission to a particular dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-group-(groupId)
     * @return /PSR7 (Request)
     * Input. The post’s multipart/mixed body should contain a JSON part
     * encoding the submission’s descriptive comments in RichText (limited
     * in size to 4000 characters or less in the plain-text portion),
     * followed by the submission file’s data (the action requires a submission to
     * include a file, not just a description).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [D2LID] $groupId Entity group ID.
     * @param [RichText] $description Submission’s description as a part (see input description).
     */
    public function postDropboxFoldersSubmissionsGroupOrgUnitIdFolderIdGroupId($version, $orgUnitId, $folderId, $groupId, $description)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/group/$groupId";
        $body = $description;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Post a new submission for the current user context to a particular dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-mysubmissions-
     * @return /PSR7 (Request)
     * Input. The post’s multipart/mixed body should contain a JSON part
     * encoding the submission’s descriptive comments in RichText (limited
     * in size to 4000 characters or less in the plain-text portion), followed by
     * the submission file’s data (the action requires a submission to include a
     * file, not just a description).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [RichText] $description Submission’s description as a part (see input description).
     */
    public function postDropboxFoldersSubmissionsMysubmissionsOrgUnitIdFolderId($version, $orgUnitId, $folderId, $description)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/mysubmissions/";
        $body = $description;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Mark a submitted file as read.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-(submissionId)-files-(fileId)-markAsRead
     * @return /PSR7 (Request)
     * Input. Provide an empty post body. You should ensure that
     * your request includes a Content-Length: 0 HTTP header value (some HTTP
     * client libraries may neglect to do this with empty post calls).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [D2LID] $submissionId Submission ID.
     */
    public function postDropboxFoldersSubmissionsFilesMarkasreadOrgUnitIdFolderIdSubmissionId($version, $orgUnitId, $folderId, $submissionId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/$submissionId/files/$fileId/markAsRead";
        return new Request('GET', $uri);
    }


    /**
     * Remove a particular file attachment from an entity’s feedback entry within a
     * specified dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#delete--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attachments-(fileId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     * @param [D2LID] $fileId File ID for the file to remove.
     */
    public function deleteDropboxFoldersFeedbackAttachmentsOrgUnitIdFolderIdEntityTypeEntityIdFileId($version, $orgUnitId, $folderId, $entityType, $entityId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attachments/$fileId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the feedback entry from a dropbox folder for the provided entity.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)
     * @return /PSR7 (Request)
     * Return. This action returns a DropboxFeedbackOut JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     */
    public function getDropboxFoldersFeedbackOrgUnitIdFolderIdEntityTypeEntityId($version, $orgUnitId, $folderId, $entityType, $entityId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a feedback entry’s file attachment from a dropbox folder for the
     * provided entity.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attachments-(fileId)
     * @return /PSR7 (Request)
     * Return. This action returns a file stream containing the file attachment data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     * @param [D2LID] $fileId File ID for a specific file attachment.
     */
    public function getDropboxFoldersFeedbackAttachmentsOrgUnitIdFolderIdEntityTypeEntityIdFileId($version, $orgUnitId, $folderId, $entityType, $entityId, $fileId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attachments/$fileId";
        return new Request('GET', $uri);
    }


    /**
     * Post feedback (without attachment) for a particular submission in a specific
     * dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)
     * @return /PSR7 (Request)
     * Input. Note that, if you want the service to re-calculate the overall
     * level associated with the feedback for the submission, you should provide
     * null for the OverallLevel property in the data block you provide.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     * @param [Dropbox.DropboxFeedback] $dropboxFeedback Feedback for assessment.
     */
    public function postDropboxFoldersFeedbackOrgUnitIdFolderIdEntityTypeEntityId($version, $orgUnitId, $folderId, $entityType, $entityId, $dropboxFeedback)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId";
        $body = $dropboxFeedback;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Attach an uploaded file to a particular entity’s feedback entry in a specific dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attach
     * @return /PSR7 (Request)
     * Input. Provide a POST form with the file key the service sent you from
     * your resumable file upload action.
     * Note that you can provide a name parameter for the framework to
     * use for the file; if you provide no name parameter, the framework seeks to
     * gather the file name from the uploaded file itself.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     */
    public function postDropboxFoldersFeedbackAttachOrgUnitIdFolderIdEntityTypeEntityId($version, $orgUnitId, $folderId, $entityType, $entityId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attach";
        return new Request('GET', $uri);
    }


    /**
     * Initiate a resumable file upload request for a particular entity’s feedback for a
     * specific dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-upload
     * @return /PSR7 (Request)
     * Input. Initiate a resumable upload
     * process. Your POST request must contain three special headers:
     *
     * Return. If successful, this action initiates a resumable upload
     * process. As part of that process, the service provides you a file key value
     * that you can use to
     * attach the uploaded file
     * data to a feedback entry.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     */
    public function postDropboxFoldersFeedbackUploadOrgUnitIdFolderIdEntityTypeEntityId($version, $orgUnitId, $folderId, $entityType, $entityId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/upload";
        return new Request('GET', $uri);
    }


    /**
     * Manually set the completion date value for an entity within
     * a specified observational dropbox folder.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-entities-(entityId)-completion
     * @return /PSR7 (Request)
     * Input. The action’s body should be a EntityCompletionData JSON data block.
     *
     * Return. This action returns a EntityCompletionDate JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
     * @param [D2LID] $entityId Entity ID for a specific entity.
     */
    public function putDropboxFoldersEntitiesCompletionOrgUnitIdFolderIdEntityId($version, $orgUnitId, $folderId, $entityId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/entities/$entityId/completion";
        return new Request('GET', $uri);
    }


    /**
     * Delete a specific dropbox folder category from an org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#delete--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function deleteDropboxCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all dropbox folder categories for the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-
     * @return /PSR7 (Request)
     * Return. This action retrieves a JSON array of DropboxCategory blocks.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getDropboxCategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a specific dropbox folder category.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
     * @return /PSR7 (Request)
     * Return. This action retrieves a single DropboxCategoryWithFolders JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function getDropboxCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new dropbox folder category for the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-
     * @return /PSR7 (Request)
     * Input. The action’s body should be a DropboxCategory JSON data block.
     *
     * Return. This action retrieves a single DropboxCategory block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postDropboxCategoriesOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/categories/";
        return new Request('GET', $uri);
    }


    /**
     * Update the information for a specific dropbox folder category.
     * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
     * @return /PSR7 (Request)
     * Input. The action’s body should be a DropboxCategory JSON data block.
     *
     * Return. This action retrieves a single DropboxCategory block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $categoryId Category ID.
     */
    public function putDropboxCategoriesOrgUnitIdCategoryId($version, $orgUnitId, $categoryId)
    {
        $uri = "/d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId";
        return new Request('GET', $uri);
    }
}
