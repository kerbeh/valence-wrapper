<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Course updates for end users — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/updates.html
 */
class CourseUpdatesForEndUsers
{
    /**
     * Retrieve numbers of updates for the current user in the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/updates.html#get--d2l-api-le-(version)-(orgUnitId)-updates-myUpdates
     * @return /PSR7 (Request)
     * Input. You may use the updateTypesCSV query parameter to retrieve update
     * information for a specific list of one or more types; if you don’t use this query parameter,
     * the results include values for all update types.
     *
     * Return. This action returns an OrgUnitUpdates JSON block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [CSV of UPDATETYPES_T] $updateTypesCSV Optional. List of org unit update types.
     * updateTypesCSV
     */
    public function getUpdatesMyupdatesOrgUnitId($version, $orgUnitId, $updateTypesCSV = null)
    {
        $queryParrams = [
                            "updateTypesCSV" => $updateTypesCSV

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/$orgUnitId/updates/myUpdates?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve numbers of updates for the current user across several org units.
     * @see https://docs.valence.desire2learn.com/res/updates.html#get--d2l-api-le-(version)-updates-myUpdates-
     * @return /PSR7 (Request)
     * Input. When calling this action, you must provide a list of org unit
     * IDs that amount to some or all of the calling user’s active enrollments.
     * You may use the updateTypesCSV query parameter to retrieve update
     * information for a specific list of one or more types; if you don’t use this query parameter,
     * the results include values for all update types.
     *
     * Return. This action returns an ObjectListPage JSON
     * block containing a list of OrgUnitUpdates.
     *
     * @param [D2LVERSION] $version API version.
     * @param [CSV of D2LIDs] $orgUnitIdsCSV List of org units to check (limited to 100 or fewer).
     * @param [CSV of UPDATETYPES_T] $updateTypesCSV Optional. List of org units update types.
     * updateTypesCSV
     */
    public function getUpdatesMyupdates($version, $orgUnitIdsCSV, $updateTypesCSV = null)
    {
        $queryParrams = [
                            "orgUnitIdsCSV" => $orgUnitIdsCSV,                    "updateTypesCSV" => $updateTypesCSV

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/updates/myUpdates/?$queryString";
        return new Request('GET', $uri);
    }
}
