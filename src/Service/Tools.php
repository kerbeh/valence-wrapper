<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Tools — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/tools.html
 */
class Tools
{
    /**
     * Retrieve the current organization-level information for all tools.
     * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-org-
     * @return /PSR7 (Request)
     * Input You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgInformation
     * data blocks for the segment following your bookmark parameter (or the first
     * segment, if the parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [boolean] $includeRestrictedTools Optional. Include restricted tools as possible to retrieve (off by default).
     * includeRestrictedTools
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getToolsOrg($version, $includeRestrictedTools = null, $bookmark = null)
    {
        $queryParrams = [
                            "includeRestrictedTools" => $includeRestrictedTools,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/tools/org/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current organization-level information for a tool.
     * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-org-(toolId)
     * @return /PSR7 (Request)
     * Return. This action returns an OrgInformation
     * JSON block, containing information about the provided tool.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $toolId Tool ID.
     */
    public function getToolsOrgToolId($version, $toolId)
    {
        $uri = "/d2l/api/lp/$version/tools/org/$toolId";
        return new Request('GET', $uri);
    }


    /**
     * Update the organization-level status for a tool.
     * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)
     * @return /PSR7 (Request)
     * Input. Provide an UpdateStatus JSON block
     * for the new status of the provided tool.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $toolId Tool ID.
     */
    public function putToolsOrgToolId($version, $toolId)
    {
        $uri = "/d2l/api/lp/$version/tools/org/$toolId";
        return new Request('GET', $uri);
    }


    /**
     * Update a tool’s default status for new org units.
     * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)-OUDefault
     * @return /PSR7 (Request)
     * Input. Provide an UpdateStatus JSON block
     * for the new OUDefault value assigned to the provided tool.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $toolId Tool ID.
     */
    public function putToolsOrgOudefaultToolId($version, $toolId)
    {
        $uri = "/d2l/api/lp/$version/tools/org/$toolId/OUDefault";
        return new Request('GET', $uri);
    }


    /**
     * Update a tool’s current status for all org units.
     * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)-OUDefault-override
     * @return /PSR7 (Request)
     * Input. Provide an UpdateStatus JSON block
     * for the new OUDefault value assigned to the provided tool.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $toolId Tool ID.
     */
    public function putToolsOrgOudefaultOverrideToolId($version, $toolId)
    {
        $uri = "/d2l/api/lp/$version/tools/org/$toolId/OUDefault/override";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current information for all tools enabled for the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. If you provide true for the namesOnly query parameter, this
     * action returns a paged result set containing
     * ToolWithName data blocks for the segment
     * following your bookmark query parameter (or the first segment if the
     * bookmark parameter is missing or empty).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [boolean] $namesOnly Optional. If true, only tool ids and names are returned, and fewer permissions are required.
     * namesOnly
     */
    public function getToolsOrgunitsOrgUnitId($version, $orgUnitId, $bookmark = null, $namesOnly = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark,                    "namesOnly" => $namesOnly

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/tools/orgUnits/$orgUnitId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current id and localized name information for all tools enabled for
     * the provided org unit, including restricted tools.
     * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-toolNames
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing ToolWithName data blocks for the segment
     * following your bookmark query parameter (or the first segment if the bookmark
     * parameter is missing or empty).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getToolsOrgunitsToolnamesOrgUnitId($version, $orgUnitId, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/tools/orgUnits/$orgUnitId/toolNames?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the current information for a tool enabled for the provided org unit.
     * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-(toolId)
     * @return /PSR7 (Request)
     * Return. If you provide true for the namesOnly query parameter, this action
     * returns a ToolWithName JSON block; otherwise,
     * this action returns an OrgUnitInformation JSON
     * block.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $toolId Tool ID.
     * @param [boolean] $namesOnly Optional. If true, only tool id and name is returned, and fewer permissions are required.
     * namesOnly
     */
    public function getToolsOrgunitsOrgUnitIdToolId($version, $orgUnitId, $toolId, $namesOnly = null)
    {
        $queryParrams = [
                            "namesOnly" => $namesOnly

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/tools/orgUnits/$orgUnitId/$toolId?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Update the org unit-level information for a tool.
     * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-(toolId)
     * @return /PSR7 (Request)
     * Input. Provide an OrgUnitInformation JSON block
     * for the new status of the provided tool.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $toolId Tool ID.
     */
    public function putToolsOrgunitsOrgUnitIdToolId($version, $orgUnitId, $toolId)
    {
        $uri = "/d2l/api/lp/$version/tools/orgUnits/$orgUnitId/$toolId";
        return new Request('GET', $uri);
    }
}
