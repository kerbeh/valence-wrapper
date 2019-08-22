<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Awards — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/awards.html
 */
class Awards
{
    /**
     * Delete an award’s association with an org unit.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $associationId Award Association ID.
     */
    public function deleteOrgunitsAssociationsOrgUnitIdAssociationId($version, $orgUnitId, $associationId)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an org unit’s associations.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of Associations.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (default is 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or associated award’s title or description.
     * search
     */
    public function getOrgunitsAssociationsOrgUnitId($version, $orgUnitId, $awardType = null, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve an association.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
     * @return /PSR7 (Request)
     * Return. This action returns an Association
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $associationId Award Association ID.
     */
    public function getOrgunitsAssociationsOrgUnitIdAssociationId($version, $orgUnitId, $associationId)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve associated awards that the calling user may earn and has already earned.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-associations-availableToEarn-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of MyAssociations.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Optional. Filter by Org Unit ID, defaults to all.
     * orgUnitId
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (default is 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or associated award’s title or description.
     * search
     */
    public function getAssociationsAvailabletoearn($version, $orgUnitId = null, $awardType = null, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/associations/availableToEarn/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve awards that have been, or could be, associated with an org unit.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-availableToManage-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of AwardAssociations.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (default is 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or associated award’s title or description.
     * search
     * @param [boolean] $showMine Optional. If present and true, retrieve only associations to awards created by the calling user; otherwise, ignore award creator’s identity (default).
     * showMine
     */
    public function getOrgunitsAssociationsAvailabletomanageOrgUnitId(
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
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/availableToManage/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Associate an award with an org unit.
     * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-
     * @return /PSR7 (Request)
     * Return. This action returns an Association
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [Awards.AssociationCreate] $associationCreate Data for new association.
     */
    public function postOrgunitsAssociationsOrgUnitId($version, $orgUnitId, $associationCreate)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/";
        return new Request('GET', $uri);
    }


    /**
     * Update an award association.
     * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-orgunits-(orgUnitId)-associations-(associationId)
     * @return /PSR7 (Request)
     * Return. This action returns an Association
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $associationId Award Association ID.
     * @param [Awards.AssociationUpdate] $associationUpdate Updated data for association.
     */
    public function putOrgunitsAssociationsOrgUnitIdAssociationId($version, $orgUnitId, $associationId, $associationUpdate)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/associations/$associationId";
        return new Request('GET', $uri);
    }


    /**
     * Delete an award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-awards-(awardId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $awardId Award ID.
     */
    public function deleteAwardsAwardId($version, $awardId)
    {
        $uri = "d2l/api/bas/$version/awards/$awardId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve awards available across the organization.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-awards-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of Award JSON blocks. Note that this
     * action returns all awards, including the awards currently in a deleted state (awards whose
     * IsDeleted property is true).
     *
     * @param [D2LVERSION] $version API version.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or award’s title or description.
     * search
     */
    public function getAwards($version, $awardType = null, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/awards/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a particular award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-awards-(awardId)
     * @return /PSR7 (Request)
     * Return. This action returns an Award JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $awardId Award ID.
     */
    public function getAwardsAwardId($version, $awardId)
    {
        $uri = "d2l/api/bas/$version/awards/$awardId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-awards-
     * @return /PSR7 (Request)
     * Return. This action returns an Award JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Awards.AwardCreate] $awardCreate Data for new award.
     */
    public function postAwards($version, $awardCreate)
    {
        $uri = "d2l/api/bas/$version/awards/";
        return new Request('GET', $uri);
    }


    /**
     * Update an award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-awards-(awardId)
     * @return /PSR7 (Request)
     * Return. This action returns an Award JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $awardId Award ID.
     * @param [Awards.AwardUpdate] $awardUpdate Updated data for award.
     */
    public function putAwardsAwardId($version, $awardId, $awardUpdate)
    {
        $uri = "d2l/api/bas/$version/awards/$awardId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the users in the classlist who are able to earn awards along with their first ten awards.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-classlist-
     * @return /PSR7 (Request)
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
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Limits the number of users returned between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and  a user’s first or last name containing this value.
     * search
     * @param [boolean] $includeExpired Optional. If present and true, include expired awards in the results.
     * includeExpired
     * @param [D2LID] $sectionId Optional. Filters the results based on a section from the provided the org unit.
     * sectionId
     * @param [CLASSLIST_SORT_T] $sortField Optional. Order the users by a given field, defaults to config value (d2l.Tools.Awards.DefaultClasslistSortField).
     * sortField
     * @param [boolean] $sortFieldIsAscending Optional. If present and true, the users are listed in  ascending order, defaults to config value (d2l.Tools.Awards.ClasslistSortAscending).
     * sortFieldIsAscending
     * @param [boolean] $fetchLatest Optional. If present and true, retrieves the classlist users latest ten awards, instead of their first ten.
     * fetchLatest
     */
    public function getOrgunitsClasslistOrgUnitId(
        $version,
        $orgUnitId,
        $awardType = null,
        $limit = null,
        $offset = null,
        $search = null,
        $includeExpired = null,
        $sectionId = null,
        $sortField = null,
        $sortFieldIsAscending = null,
        $fetchLatest = null
    ) {
        $queryParrams = [
                            "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search,                    "includeExpired" => $includeExpired,                    "sectionId" => $sectionId,                    "sortField" => $sortField,                    "sortFieldIsAscending" => $sortFieldIsAscending,                    "fetchLatest" => $fetchLatest

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/classlist/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the ten oldest awards for a classlist user.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-classlist-users-(userId)
     * @return /PSR7 (Request)
     * Input. When using FirstName or LastName as the sort field, the user’s rank is determined by AwardCount.
     *
     * Return. This action returns a JSON block containing the User Issued Award Summary.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $userId User ID.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [CLASSLIST_SORT_T] $sortField Optional. Ranks the user by a given field, defaults to config value (d2l.Tools.Awards.DefaultClasslistSortField).
     * sortField
     */
    public function getOrgunitsClasslistUsersOrgUnitIdUserId($version, $orgUnitId, $userId, $awardType = null, $sortField = null)
    {
        $queryParrams = [
                            "awardType" => $awardType,                    "sortField" => $sortField

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/classlist/users/$userId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the user’s current configuration.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-myConfiguration
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing the user’s
     * configuration.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     */
    public function getOrgunitsMyconfigurationOrgUnitId($version, $orgUnitId)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/myConfiguration";
        return new Request('GET', $uri);
    }


    /**
     * Revoke an issued award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-issued-(issuedId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $issuedId Issued ID.
     */
    public function deleteIssuedOrgUnitIdIssuedId($version, $orgUnitId, $issuedId)
    {
        $uri = "d2l/api/bas/$version/issued/$issuedId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the credit summary for the calling user’s issued awards.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-creditSummary
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing the User's Credit Summary.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Optional. Filter by Org Unit ID, defaults to all.
     * orgUnitId
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [boolean] $includeExpired Optional. If present and true, include expired awards in the results.
     * includeExpired
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or issued award’s title or description.
     * search
     */
    public function getCreditsummary($version, $orgUnitId = null, $awardType = null, $includeExpired = null, $search = null)
    {
        $queryParrams = [
                            "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "includeExpired" => $includeExpired,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/creditSummary?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the awards issued to a user.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-issued-users-(userId)-
     * @return /PSR7 (Request)
     * Input. If both userId and orgUnitId are provided, the user must be enrolled in the provided org unit.
     *
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of Issued Awards.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [D2LID] $orgUnitId Optional. Filter by the org unit.
     * orgUnitId
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [boolean] $includeExpired Optional. If present and true, include expired awards in the results.
     * includeExpired
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or issued award’s title or description.
     * search
     */
    public function getIssuedUsersUserId(
        $version,
        $userId,
        $orgUnitId = null,
        $awardType = null,
        $limit = null,
        $offset = null,
        $includeExpired = null,
        $search = null
    ) {
        $queryParrams = [
                            "orgUnitId" => $orgUnitId,                    "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "includeExpired" => $includeExpired,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/issued/users/$userId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the awards for a user that the calling user can revoke.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-revocableawards-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage JSON block
     * containing a list of Awards.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and org unit’s name, or issued award’s title or description.
     * search
     */
    public function getOrgunitsRevocableawardsOrgUnitId($version, $orgUnitId, $awardType = null, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "awardType" => $awardType,                    "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/revocableawards/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the issued awards for a specified user that can be revoked by the calling user.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-orgunits-(orgUnitId)-revocableawards-(userId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing a list of Issued Awards.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $userId User ID.
     * @param [AWARD_T] $awardType Optional. Filter by award type, defaults to all.
     * awardType
     * @param [boolean] $includeExpired Optional. If present and true, include expired awards in the results.
     * includeExpired
     * @param [string] $search Optional. Filters results based on an issued award’s title or description, defaults to empty.
     * search
     */
    public function getOrgunitsRevocableawardsOrgUnitIdUserId($version, $orgUnitId, $userId, $awardType = null, $includeExpired = null, $search = null)
    {
        $queryParrams = [
                            "awardType" => $awardType,                    "includeExpired" => $includeExpired,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/revocableawards/$userId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Issue an award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-orgunits-(orgUnitId)-issued-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing the Issued Award.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [Awards.IssuedAwardCreate] $issuedAwardCreate Data for the award to issue.
     */
    public function postOrgunitsIssuedOrgUnitId($version, $orgUnitId, $issuedAwardCreate)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/issued/";
        return new Request('GET', $uri);
    }


    /**
     * Update an issued award.
     * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-orgunits-(orgUnitId)-issued-(issuedId)
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing the Issued Award.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $issuedId Issued award ID.
     * @param [Awards.IssuedAwardUpdate] $issuedAwardUpdate Data for the award to update.
     */
    public function putOrgunitsIssuedOrgUnitIdIssuedId($version, $orgUnitId, $issuedId, $issuedAwardUpdate)
    {
        $uri = "d2l/api/bas/$version/orgunits/$orgUnitId/issued/$issuedId";
        return new Request('GET', $uri);
    }


    /**
     * Delete named icon from library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-library-icons-(fileName)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [string] $fileName File name including file extension.
     */
    public function deleteLibraryIconsFileName($version, $fileName)
    {
        $uri = "d2l/api/bas/$version/library/icons/$fileName";
        return new Request('GET', $uri);
    }


    /**
     * Delete named certificate template from library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-library-templates-(fileName)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [string] $fileName File name including file extension.
     */
    public function deleteLibraryTemplatesFileName($version, $fileName)
    {
        $uri = "d2l/api/bas/$version/library/templates/$fileName";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the icons contained in the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-icons-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and icon’s file name.
     * search
     */
    public function getLibraryIcons($version, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/library/icons/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve named icon from the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-icons-(fileName)
     * @return /PSR7 (Request)
     * Return. This action returns the icon file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $fileName File name including file extension.
     */
    public function getLibraryIconsFileName($version, $fileName)
    {
        $uri = "d2l/api/bas/$version/library/icons/$fileName";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the certificate templates contained in the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-templates-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [number] $limit Optional. Number of records to return between 1 and 200 (defaults to 100).
     * limit
     * @param [number] $offset Optional. Number of records to skip, defaults to 0.
     * offset
     * @param [string] $search Optional. Filter results to those with matches between search string and certificate template’s file name.
     * search
     */
    public function getLibraryTemplates($version, $limit = null, $offset = null, $search = null)
    {
        $queryParrams = [
                            "limit" => $limit,                    "offset" => $offset,                    "search" => $search

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "d2l/api/bas/$version/library/templates/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve named certificate template from the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#get--d2l-api-bas-(version)-library-templates-(fileName)
     * @return /PSR7 (Request)
     * Return. This action returns the pdf file.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $fileName File name including file extension.
     */
    public function getLibraryTemplatesFileName($version, $fileName)
    {
        $uri = "d2l/api/bas/$version/library/templates/$fileName";
        return new Request('GET', $uri);
    }


    /**
     * Add an icon to the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-library-icons-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing a file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Awards.LibraryInputFileInfo] $libraryInputFileInfo Data for the new icon.
     */
    public function postLibraryIcons($version, $libraryInputFileInfo)
    {
        $uri = "d2l/api/bas/$version/library/icons/";
        return new Request('GET', $uri);
    }


    /**
     * Add a certificate template to the library.
     * @see https://docs.valence.desire2learn.com/res/awards.html#post--d2l-api-bas-(version)-library-templates-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON block containing a file data.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Awards.LibraryInputFileInfo] $libraryInputFileInfo Data for the new certificate template.
     */
    public function postLibraryTemplates($version, $libraryInputFileInfo)
    {
        $uri = "d2l/api/bas/$version/library/templates/";
        return new Request('GET', $uri);
    }


    /**
     * Remove an issued award from the calling user’s profile.
     * @see https://docs.valence.desire2learn.com/res/awards.html#delete--d2l-api-bas-(version)-issued-(issuedId)-sharing-profile
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $issuedId ID of the issued award to be removed.
     */
    public function deleteIssuedSharingProfileIssuedId($version, $issuedId)
    {
        $uri = "d2l/api/bas/$version/issued/$issuedId/sharing/profile";
        return new Request('GET', $uri);
    }


    /**
     * Share an issued award on the calling user’s profile.
     * @see https://docs.valence.desire2learn.com/res/awards.html#put--d2l-api-bas-(version)-issued-(issuedId)-sharing-profile
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $issuedId Issued ID to be shared.
     */
    public function putIssuedSharingProfileIssuedId($version, $issuedId)
    {
        $uri = "d2l/api/bas/$version/issued/$issuedId/sharing/profile";
        return new Request('GET', $uri);
    }
}
