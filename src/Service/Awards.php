<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Awards — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/awards.html
 */
class Awards
{
	/**
	 * Delete an award’s association with an org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $associationId Award Association ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
	 * @return /PSR7 (Request)
	 */
	public function deleteOrgunitsAssociations($version, $orgUnitId, $associationId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve an association.
	 *
	 * Return. This action returns an Association
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $associationId Award Association ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsAssociations($version, $orgUnitId, $associationId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve associated awards that the calling user may earn and has already earned.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of MyAssociations.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-associations-availableToEarn-
	 * @return /PSR7 (Request)
	 */
	public function getAssociationsAvailabletoearn($version, $awardType = null, $limit = null, $offset = null, $orgUnitId = null, $search = null)
	{
		$queryParrams = [
		                    "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/associations/availableToEarn/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve awards that have been, or could be, associated with an org unit.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of AwardAssociations.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-availableToManage-
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsAssociationsAvailabletomanage(
		$version,
		$orgUnitId,
		$awardType = null,
		$limit = null,
		$offset = null,
		$search = null,
		$showMine = null
	) {
		$queryParrams = [
		                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search,                    "showMine" => $showMine

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/associations/availableToManage/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Associate an award with an org unit.
	 *
	 * Return. This action returns an Association
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [Awards.AssociationCreate] $associationCreate Data for new association.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-
	 * @return /PSR7 (Request)
	 */
	public function postOrgunitsAssociations($version, $orgUnitId, $associationCreate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/associations/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an award association.
	 *
	 * Return. This action returns an Association
	 * JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $associationId Award Association ID.
	 * @param [Awards.AssociationUpdate] $associationUpdate Updated data for association.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
	 * @return /PSR7 (Request)
	 */
	public function putOrgunitsAssociations($version, $orgUnitId, $associationId, $associationUpdate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete an award.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $awardId Award ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-awards-(awardId)
	 * @return /PSR7 (Request)
	 */
	public function deleteAwards($version, $awardId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/awards/$awardId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a particular award.
	 *
	 * Return. This action returns an Award JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $awardId Award ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-awards-(awardId)
	 * @return /PSR7 (Request)
	 */
	public function getAwards($version, $awardId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/awards/$awardId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new award.
	 *
	 * Return. This action returns an Award JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Awards.AwardCreate] $awardCreate Data for new award.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-awards-
	 * @return /PSR7 (Request)
	 */
	public function postAwards($version, $awardCreate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/awards/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an award.
	 *
	 * Return. This action returns an Award JSON block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $awardId Award ID.
	 * @param [Awards.AwardUpdate] $awardUpdate Updated data for award.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-awards-(awardId)
	 * @return /PSR7 (Request)
	 */
	public function putAwards($version, $awardId, $awardUpdate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/awards/$awardId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the users in the classlist who are able to earn awards along with their first ten awards.
	 *
	 * Input. The users are sorted based on the sortField and sortFieldIsAscending parameters.
	 * The sorting of ascending or decending is done based on the sort field followed by last name then
	 * first name if the given sort field isn’t enough to determine ordering. When using FirstName
	 * or LastName as the sort field, the user’s rank is determined by AwardCount.
	 *
	 * Return. This action returns an ObjectListPage JSON block
	 * containing a list of the User's Issued Awards values.
	 * Only awards of types (AWARD_T) that the calling user can view are returned.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-classlist-
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsClasslist(
		$version,
		$orgUnitId,
		$awardType = null,
		$fetchLatest = null,
		$includeExpired = null,
		$limit = null,
		$offset = null,
		$search = null,
		$sectionId = null,
		$sortField = null,
		$sortFieldIsAscending = null
	) {
		$queryParrams = [
		                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search,                    "includeExpired" => $includeExpired,                    "sectionId" => $sectionId,                    "sortField" => $sortField,                    "sortFieldIsAscending" => $sortFieldIsAscending,                    "fetchLatest" => $fetchLatest

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/classlist/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the ten oldest awards for a classlist user.
	 *
	 * Input. When using FirstName or LastName as the sort field, the user’s rank is determined by AwardCount.
	 *
	 * Return. This action returns a JSON block containing the User Issued Award Summary.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-classlist-users-(userId)
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsClasslistUsers($version, $orgUnitId, $userId, $awardType = null, $sortField = null)
	{
		$queryParrams = [
		                    "awardType" => $awardType,                    "sortField" => $sortField

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/classlist/users/$userId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the user’s current configuration.
	 *
	 * Return. This action returns a JSON block containing the user’s
	 * configuration.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-myConfiguration
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsMyconfiguration($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/myConfiguration", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Revoke an issued award.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $issuedId Issued ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-issued-(issuedId)
	 * @return /PSR7 (Request)
	 */
	public function deleteIssued($version, $orgUnitId, $issuedId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/issued/$issuedId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the credit summary for the calling user’s issued awards.
	 *
	 * Return. This action returns a JSON block containing the User's Credit Summary.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-creditSummary
	 * @return /PSR7 (Request)
	 */
	public function getCreditsummary($version, $awardType = null, $includeExpired = null, $orgUnitId = null, $search = null)
	{
		$queryParrams = [
		                    "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "includeExpired" => $includeExpired,                    "search" => $search

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/creditSummary?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the awards issued to a user.
	 *
	 * Input. If both userId and orgUnitId are provided, the user must be enrolled in the provided org unit.
	 *
	 * Return. This action returns an ObjectListPage
	 * JSON block containing a list of Issued Awards.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-issued-users-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getIssuedUsers(
		$version,
		$userId,
		$awardType = null,
		$includeExpired = null,
		$limit = null,
		$offset = null,
		$orgUnitId = null,
		$search = null
	) {
		$queryParrams = [
		                    "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "includeExpired" => $includeExpired,                    "search" => $search

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/issued/users/$userId/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the issued awards for a specified user that can be revoked by the calling user.
	 *
	 * Return. This action returns a JSON block containing a list of Issued Awards.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $userId User ID.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-revocableawards-(userId)-
	 * @return /PSR7 (Request)
	 */
	public function getOrgunitsRevocableawards($version, $orgUnitId, $userId, $awardType = null, $includeExpired = null, $search = null)
	{
		$queryParrams = [
		                    "awardType" => $awardType,                    "includeExpired" => $includeExpired,                    "search" => $search

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/revocableawards/$userId/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Issue an award.
	 *
	 * Return. This action returns a JSON block containing the Issued Award.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [Awards.IssuedAwardCreate] $issuedAwardCreate Data for the award to issue.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-orgunits-(orgUnitId)-issued-
	 * @return /PSR7 (Request)
	 */
	public function postOrgunitsIssued($version, $orgUnitId, $issuedAwardCreate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/issued/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update an issued award.
	 *
	 * Return. This action returns a JSON block containing the Issued Award.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org Unit ID.
	 * @param [D2LID] $issuedId Issued award ID.
	 * @param [Awards.IssuedAwardUpdate] $issuedAwardUpdate Data for the award to update.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-orgunits-(orgUnitId)-issued-(issuedId)
	 * @return /PSR7 (Request)
	 */
	public function putOrgunitsIssued($version, $orgUnitId, $issuedId, $issuedAwardUpdate)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/orgunits/$orgUnitId/issued/$issuedId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Delete named icon from library.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $fileName File name including file extension.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-library-icons-(fileName)
	 * @return /PSR7 (Request)
	 */
	public function deleteLibraryIcons($version, $fileName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/icons/$fileName", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete named certificate template from library.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $fileName File name including file extension.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-library-templates-(fileName)
	 * @return /PSR7 (Request)
	 */
	public function deleteLibraryTemplates($version, $fileName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/templates/$fileName", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve named icon from the library.
	 *
	 * Return. This action returns the icon file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $fileName File name including file extension.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-icons-(fileName)
	 * @return /PSR7 (Request)
	 */
	public function getLibraryIcons($version, $fileName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/icons/$fileName", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve named certificate template from the library.
	 *
	 * Return. This action returns the pdf file.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [string] $fileName File name including file extension.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-templates-(fileName)
	 * @return /PSR7 (Request)
	 */
	public function getLibraryTemplates($version, $fileName)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/templates/$fileName", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Add an icon to the library.
	 *
	 * Return. This action returns a JSON block containing a file data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Awards.LibraryInputFileInfo] $libraryInputFileInfo Data for the new icon.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-library-icons-
	 * @return /PSR7 (Request)
	 */
	public function postLibraryIcons($version, $libraryInputFileInfo)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/icons/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Add a certificate template to the library.
	 *
	 * Return. This action returns a JSON block containing a file data.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [Awards.LibraryInputFileInfo] $libraryInputFileInfo Data for the new certificate template.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-library-templates-
	 * @return /PSR7 (Request)
	 */
	public function postLibraryTemplates($version, $libraryInputFileInfo)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/library/templates/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Remove an issued award from the calling user’s profile.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $issuedId ID of the issued award to be removed.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-issued-(issuedId)-sharing-profile
	 * @return /PSR7 (Request)
	 */
	public function deleteIssuedSharingProfile($version, $issuedId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/issued/$issuedId/sharing/profile", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Share an issued award on the calling user’s profile.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $issuedId Issued ID to be shared.
	 * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-issued-(issuedId)-sharing-profile
	 * @return /PSR7 (Request)
	 */
	public function putIssuedSharingProfile($version, $issuedId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/bas/$version/issued/$issuedId/sharing/profile", 'PUT');
		return new Request('GET', $uri);
	}
}
