<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Demographics (data types, fields, users and org units) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/demographics.html
 */
class Demographics
{
    /**
     * Delete one or more of a particular user’s associated demographics entries.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#delete--d2l-api-lp-(version)-demographics-users-(userId)
     * @return /PSR7 (Request)
     * Input. You can use this action in two ways:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [CSV] $entryIds Optional. Specific entry IDs for demographic entries to delete.
     * entryIds
     */
    public function deleteDemographicsUsersUserId($version, $userId, $entryIds = null)
    {
        $queryParrams = [
                            "entryIds" => $entryIds

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/users/$userId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the demographics entries for all users enrolled in a particular
     * org unit.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-orgUnits-(orgUnitId)-users-
     * @return /PSR7 (Request)
     * Input. This actions retrieves all the demographics entries for all the
     * users enrolled in a particular org unit; this could be a large data-set, and
     * therefore you should use one or more of the query parameters to filter the
     * results–you can restrict the results to:
     *
     * Return. This action returns a paged result set
     * containing the resulting demographics entry blocks for the segment following
     * your bookmark parameter (or the first segment if that parameter is empty or
     * missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [CSV of D2LIDs] $fieldIds Optional. Demographic field IDs.
     * fieldIds
     * @param [CSV of D2LIDs] $roleIds Optional. User role IDs.
     * roleIds
     * @param [CSV of D2LIDs] $userIds Optional. User IDs.
     * userIds
     * @param [string] $search Optional. Search string to look for in the demographic field values.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getDemographicsOrgunitsUsersOrgUnitId(
        $version,
        $orgUnitId,
        $fieldIds = null,
        $roleIds = null,
        $userIds = null,
        $search = null,
        $bookmark = null
    ) {
        $queryParrams = [
                            "fieldIds" => $fieldIds,                    "roleIds" => $roleIds,                    "userIds" => $userIds,                    "search" => $search,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/orgUnits/$orgUnitId/users/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the demographics entries for a specific user within a particular
     * org unit.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-orgUnits-(orgUnitId)-users-(userId)
     * @return /PSR7 (Request)
     * Input. This action retrieves all the demographics entries for a user
     * within a particular org unit. You can use the fieldIds query parameter to
     * further filter the results and restrict them to only those entries that match
     * your list of specific demographics fields (identified by field ID).
     *
     * Return. This action returns a
     * DemographicsUserEntryData
     * JSON block containing all the matching demographics entries for your query.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $userId User ID.
     * @param [CSV of D2LIDs] $fieldIds Optional. Demographic field IDs.
     * fieldIds
     */
    public function getDemographicsOrgunitsUsersOrgUnitIdUserId($version, $orgUnitId, $userId, $fieldIds = null)
    {
        $queryParrams = [
                            "fieldIds" => $fieldIds

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/orgUnits/$orgUnitId/users/$userId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the demographics entries for all users, and optionally filter
     * the results.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-users-
     * @return /PSR7 (Request)
     * Input. This actions retrieves all the demographics entries for all users;
     * this could be a very large data-set, and therefore you should use one or more
     * of the query parameters to filter the results–you can restrict the results
     * to:
     *
     * Return. This action returns a paged result set
     * containing the resulting demographics entry blocks for the segment following
     * your bookmark parameter (or the first segment if that parameter is empty or
     * missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [CSV of D2LIDs] $fieldIds Optional. Demographic field IDs.
     * fieldIds
     * @param [CSV of D2LIDs] $roleIds Optional. User role IDs.
     * roleIds
     * @param [CSV of D2LIDs] $userIds Optional. User IDs.
     * userIds
     * @param [string] $search Optional. Search string to look for in the demographic field values.
     * search
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getDemographicsUsers($version, $fieldIds = null, $roleIds = null, $userIds = null, $search = null, $bookmark = null)
    {
        $queryParrams = [
                            "fieldIds" => $fieldIds,                    "roleIds" => $roleIds,                    "userIds" => $userIds,                    "search" => $search,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/users/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the demographics entries for a single user.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-users-(userId)
     * @return /PSR7 (Request)
     * Input. This action retrieves all the demographics entries for a user
     * across all the user’s org unit enrollments. You can use the fieldIds query
     * parameter to further filter the results and restrict them to only those
     * entries that match your list of specific demographics fields (identified by
     * field ID).
     *
     * Return. This action returns a
     * DemographicsUserEntryData
     * JSON block containing all the matching demographics entries for your query.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [CSV of D2LIDs] $fieldIds Optional. Comma-separated list of demographic field IDs.
     * fieldIds
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getDemographicsUsersUserId($version, $userId, $fieldIds = null, $bookmark = null)
    {
        $queryParrams = [
                            "fieldIds" => $fieldIds,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/users/$userId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Update the demographics entries for a single user.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#put--d2l-api-lp-(version)-demographics-users-(userId)
     * @return /PSR7 (Request)
     * Input. This action uses your provided block’s data to replace all the
     * user’s demographics entries; therefore, we recommend that you first fetch all
     * the entries for the user so you can be sure to update the complete set of
     * entries.
     *
     * Return. This action returns a
     * DemographicsUserEntryData
     * JSON block containing the user’s updated entries.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $userId User ID.
     * @param [Demographics.DemographicsEntryData] $demographicsEntryData Updated demographics entry data for user.
     */
    public function putDemographicsUsersUserId($version, $userId, $demographicsEntryData)
    {
        $uri = "/d2l/api/lp/$version/demographics/users/$userId";
        $body = demographicsEntryData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete a single demographic field, provided it has no associated entries.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#delete--d2l-api-lp-(version)-demographics-fields-(fieldId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $fieldId Field ID.
     */
    public function deleteDemographicsFieldsFieldId($version, $fieldId)
    {
        $uri = "/d2l/api/lp/$version/demographics/fields/$fieldId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the list of all demographics fields.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-fields-
     * @return /PSR7 (Request)
     * Input. You can use the bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting demographic field blocks for the segment following your
     * bookmark parameter (or the first segment if that parameter is empty or
     * missing). Note that this action uses a FieldId property as the paging
     * control value. You can fetch the segment of results following any
     * demographics field’s entry in the data set by passing that field’s FieldId
     * as the bookmark value.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getDemographicsFields($version, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/fields/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a single demographic field.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-fields-(fieldId)
     * @return /PSR7 (Request)
     * Return. This action returns the fetch form of a
     * DemographicsField JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $fieldId Field ID.
     */
    public function getDemographicsFieldsFieldId($version, $fieldId)
    {
        $uri = "/d2l/api/lp/$version/demographics/fields/$fieldId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new demographic field.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#post--d2l-api-lp-(version)-demographics-fields-
     * @return /PSR7 (Request)
     * Return. This action returns the fetch form of a
     * DemographicsField JSON block
     * containing the data for the newly created field.
     *
     * @param [D2LVERSION] $version API version.
     * @param [Demographics.DemographicsField] $demographicsField New demographics field properties.
     */
    public function postDemographicsFields($version, $demographicsField)
    {
        $uri = "/d2l/api/lp/$version/demographics/fields/";
        $body = demographicsField;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a single demographic field.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#put--d2l-api-lp-(version)-demographics-fields-(fieldId)
     * @return /PSR7 (Request)
     * Return. This action returns the fetch form of a
     * DemographicsField JSON block
     * containing the data for the newly updated field.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $fieldId Field ID.
     * @param [Demographics.DemographicsField] $demographicsField Updated demographics field properties.
     */
    public function putDemographicsFieldsFieldId($version, $fieldId, $demographicsField)
    {
        $uri = "/d2l/api/lp/$version/demographics/fields/$fieldId";
        $body = demographicsField;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve the list of all demographics data types.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-dataTypes-
     * @return /PSR7 (Request)
     * Input. You can use the bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting demographic data type blocks for the segment following your
     * bookmark parameter (or the first segment if that parameter is empty or
     * missing). Note that this action uses a DataTypeId property as the paging
     * control value. You can fetch the segment of results following any
     * demographics data type’s entry in the data set by passing that data type’s
     * DataTypeId as the bookmark value.
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getDemographicsDatatypes($version, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/demographics/dataTypes/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a single demographic data type.
     * @see https://docs.valence.desire2learn.com/res/demographics.html#get--d2l-api-lp-(version)-demographics-dataTypes-(dataTypeId)
     * @return /PSR7 (Request)
     * Return. This action returns a DemographicsDataType
     * JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $dataTypeId Data Type ID.
     */
    public function getDemographicsDatatypesDataTypeId($version, $dataTypeId)
    {
        $uri = "/d2l/api/lp/$version/demographics/dataTypes/$dataTypeId";
        return new Request('GET', $uri);
    }
}
