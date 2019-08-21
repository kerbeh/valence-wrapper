<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Dropboxes (Folders, categories, submissions, feedback) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/dropbox.html
 */
class Dropboxes
{
	/**
	 * Retrieve a specific dropbox folder.
	 *
	 * Return. This action returns a DropboxFolder JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFolders($version, $orgUnitId, $folderId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a file attachment (identified by file ID) from a specific dropbox folder.
	 *
	 * Return. This action returns a file stream. This does not apply for link attachments.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
	 * @param [D2LID] $fileId File ID for the attachment to retrieve.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-attachments-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFoldersAttachments($version, $orgUnitId, $folderId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/attachments/$fileId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new dropbox folder in an org unit.
	 *
	 * Input. The action’s body should be a DropboxFolderUpdateData JSON data block.
	 *
	 * Return. This action returns a DropboxFolder JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFolders($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular dropbox folder in an org unit.
	 *
	 * Input. The action’s body should be a DropboxFolderUpdateData JSON data block.
	 *
	 * Return. This action returns a DropboxFolder JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for the specific dropbox folder.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)
	 * @return /PSR7 (Request)
	 */
	public function putDropboxFolders($version, $orgUnitId, $folderId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of org units for which the current user context has an
	 * assessment role on their dropbox folders (can see submissions and provide
	 * feedback).
	 *
	 * Return. This action returns a JSON array of
	 * OrgUnitCoreInfo structures to enumerate
	 * all the org units for which the current user context may provide feedback.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-dropbox-orgUnits-feedback-
	 * @return /PSR7 (Request)
	 */
	public function getDropboxOrgunitsFeedback($version, $type = null)
	{
		$queryParrams = [
		                    "type" => $type

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/dropbox/orgUnits/feedback/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the submissions for a specific dropbox folder.
	 *
	 * Return. This action retrieves a JSON array of
	 * EntityDropbox structures that fully
	 * enumerates all the submissions currently provided to the dropbox folders by
	 * all the entities. Any submission that already has feedback will come with the
	 * feedback as well.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFoldersSubmissions($version, $orgUnitId, $folderId, $activeOnly = null)
	{
		$queryParrams = [
		                    "activeOnly" => $activeOnly

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve one of the files included in a submission for a particular dropbox folder.
	 *
	 * Return. This action returns a file stream containing the attachment file data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [D2LID] $submissionId Submission ID.
	 * @param [D2LID] $fileId File ID for submission file attachment.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-(submissionId)-files-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFoldersSubmissionsFiles($version, $orgUnitId, $folderId, $submissionId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/$submissionId/files/$fileId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Post a new group submission to a particular dropbox folder.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-group-(groupId)
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersSubmissionsGroup($version, $orgUnitId, $folderId, $groupId, $description)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/group/$groupId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Post a new submission for the current user context to a particular dropbox folder.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-mysubmissions-
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersSubmissionsMysubmissions($version, $orgUnitId, $folderId, $description)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/mysubmissions/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Mark a submitted file as read.
	 *
	 * Input. Provide an empty post body. You should ensure that
	 * your request includes a Content-Length: 0 HTTP header value (some HTTP
	 * client libraries may neglect to do this with empty post calls).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [D2LID] $submissionId Submission ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-submissions-(submissionId)-files-(fileId)-markAsRead
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersSubmissionsFilesMarkasread($version, $orgUnitId, $folderId, $submissionId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/submissions/$submissionId/files/$fileId/markAsRead", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove a particular file attachment from an entity’s feedback entry within a
	 * specified dropbox folder.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
	 * @param [D2LID] $entityId Entity ID for a specific entity.
	 * @param [D2LID] $fileId File ID for the file to remove.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#delete--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attachments-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDropboxFoldersFeedbackAttachments($version, $orgUnitId, $folderId, $entityType, $entityId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attachments/$fileId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the feedback entry from a dropbox folder for the provided entity.
	 *
	 * Return. This action returns a DropboxFeedbackOut JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
	 * @param [D2LID] $entityId Entity ID for a specific entity.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFoldersFeedback($version, $orgUnitId, $folderId, $entityType, $entityId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a feedback entry’s file attachment from a dropbox folder for the
	 * provided entity.
	 *
	 * Return. This action returns a file stream containing the file attachment data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [string] $entityType Either “user” or “group”, to indicate the entity type.
	 * @param [D2LID] $entityId Entity ID for a specific entity.
	 * @param [D2LID] $fileId File ID for a specific file attachment.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attachments-(fileId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxFoldersFeedbackAttachments($version, $orgUnitId, $folderId, $entityType, $entityId, $fileId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attachments/$fileId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Post feedback (without attachment) for a particular submission in a specific
	 * dropbox folder.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersFeedback($version, $orgUnitId, $folderId, $entityType, $entityId, $dropboxFeedback)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Attach an uploaded file to a particular entity’s feedback entry in a specific dropbox folder.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-attach
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersFeedbackAttach($version, $orgUnitId, $folderId, $entityType, $entityId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/attach", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Initiate a resumable file upload request for a particular entity’s feedback for a
	 * specific dropbox folder.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-feedback-(entityType)-(entityId)-upload
	 * @return /PSR7 (Request)
	 */
	public function postDropboxFoldersFeedbackUpload($version, $orgUnitId, $folderId, $entityType, $entityId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/feedback/$entityType/$entityId/upload", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Manually set the completion date value for an entity within
	 * a specified observational dropbox folder.
	 *
	 * Input. The action’s body should be a EntityCompletionData JSON data block.
	 *
	 * Return. This action returns a EntityCompletionDate JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $folderId Folder ID for a specific dropbox folder.
	 * @param [D2LID] $entityId Entity ID for a specific entity.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-folders-(folderId)-entities-(entityId)-completion
	 * @return /PSR7 (Request)
	 */
	public function putDropboxFoldersEntitiesCompletion($version, $orgUnitId, $folderId, $entityId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/folders/$folderId/entities/$entityId/completion", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a specific dropbox folder category from an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $categoryId Category ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#delete--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
	 * @return /PSR7 (Request)
	 */
	public function deleteDropboxCategories($version, $orgUnitId, $categoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the information for a specific dropbox folder category.
	 *
	 * Return. This action retrieves a single DropboxCategoryWithFolders JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $categoryId Category ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#get--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
	 * @return /PSR7 (Request)
	 */
	public function getDropboxCategories($version, $orgUnitId, $categoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new dropbox folder category for the provided org unit.
	 *
	 * Input. The action’s body should be a DropboxCategory JSON data block.
	 *
	 * Return. This action retrieves a single DropboxCategory block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#post--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-
	 * @return /PSR7 (Request)
	 */
	public function postDropboxCategories($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/categories/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the information for a specific dropbox folder category.
	 *
	 * Input. The action’s body should be a DropboxCategory JSON data block.
	 *
	 * Return. This action retrieves a single DropboxCategory block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $categoryId Category ID.
	 * @see https://docs.valence.desire2learn.com/res/dropbox.html#put--d2l-api-le-(version)-(orgUnitId)-dropbox-categories-(categoryId)
	 * @return /PSR7 (Request)
	 */
	public function putDropboxCategories($version, $orgUnitId, $categoryId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/$orgUnitId/dropbox/categories/$categoryId", 'PUT');
		return new Request('GET', $uri);
	}
}
