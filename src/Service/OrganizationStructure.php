<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Organization structure (Org units, structure) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/orgunit.html
 */
class OrganizationStructure
{
    /**
     * Retrieve the organization properties information.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-organization-info
     * @return /PSR7 (Request)
     * Return. This action returns a Organization
     * JSON data block containing the identifier, name, and time zone of the organization.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOrganizationInfo($version)
    {
        $uri = "/d2l/api/lp/$version/organization/info";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the organization’s primary (root) URL.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-organization-primary-url
     * @return /PSR7 (Request)
     * Return. This action does not return a JSON document; rather, it
     * returns a simple text/plain body containing only the fully qualified root
     * URL for this back end service.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOrganizationPrimaryUrl($version)
    {
        $uri = "/d2l/api/lp/$version/organization/primary/url";
        return new Request('GET', $uri);
    }


    /**
     * Delete the relationship between a provided org unit and one of its children.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-(childOrgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $childOrgUnitId Org unit ID for the child to detach.
     */
    public function deleteOrgstructureChildrenOrgUnitIdChildOrgUnitId($version, $orgUnitId, $childOrgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/children/$childOrgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Delete the relationship between a provided org unit and one of its parents.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-(parentOrgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $parentOrgUnitId Org unit ID for the parent to detach.
     */
    public function deleteOrgstructureParentsOrgUnitIdParentOrgUnitId($version, $orgUnitId, $parentOrgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/parents/$parentOrgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve properties for all org units.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-
     * @return /PSR7 (Request)
     * Input. You can use the orgUnitType, orgUnitCode, and orgUnitName
     * query parameters as filters to further narrow the list of org units this
     * action retrieves. Note that for orgUnitType, the back-end service expects
     * to receive a valid org unit type ID value. Note that orgUnitCode and
     * orgUnitName both will search for matches that contain your parameter value.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitProperties
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $orgUnitType Optional. Filter to org units with type matching this org unit type ID.
     * orgUnitType
     * @param [string] $orgUnitCode Optional. Filter to org units with codes containing this substring.
     * orgUnitCode
     * @param [string] $orgUnitName Optional. Filter to org units with names containing this substring.
     * orgUnitName
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     * @param [string] $exactOrgUnitCode Optional. Filter to org units with codes precisely matching this string. Overrides orgUnitCode.
     * exactOrgUnitCode
     * @param [string] $exactOrgUnitName Optional. Filter to org units with names precisely matching this string. Overrides orgUnitName.
     * exactOrgUnitName
     */
    public function getOrgstructure(
        $version,
        $orgUnitType = null,
        $orgUnitCode = null,
        $orgUnitName = null,
        $bookmark = null,
        $exactOrgUnitCode = null,
        $exactOrgUnitName = null
    ) {
        $queryParrams = [
                            "orgUnitType" => $orgUnitType,                    "orgUnitCode" => $orgUnitCode,                    "orgUnitName" => $orgUnitName,                    "bookmark" => $bookmark,                    "exactOrgUnitCode" => $exactOrgUnitCode,                    "exactOrgUnitName" => $exactOrgUnitName

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the properties for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a OrgUnit JSON
     * structure containing the properties for the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getOrgstructureOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all org units that have no children.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-childless-
     * @return /PSR7 (Request)
     * Input. You can use the orgUnitType, orgUnitCode, and orgUnitName
     * query parameters as filters to further narrow the list of org units this
     * action retrieves.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitProperties
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $orgUnitType Optional. Filter to org units of this type.
     * orgUnitType
     * @param [string] $orgUnitCode Optional. Filter to org units with codes containing this substring.
     * orgUnitCode
     * @param [string] $orgUnitName Optional. Filter to org units with names containing this substring.
     * orgUnitName
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getOrgstructureChildless($version, $orgUnitType = null, $orgUnitCode = null, $orgUnitName = null, $bookmark = null)
    {
        $queryParrams = [
                            "orgUnitType" => $orgUnitType,                    "orgUnitCode" => $orgUnitCode,                    "orgUnitName" => $orgUnitName,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/childless/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all org units that are orphans (have no parents).
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-orphans-
     * @return /PSR7 (Request)
     * Input. You can use the orgUnitType, orgUnitCode, and orgUnitName
     * query parameters as filters to further narrow the list of org units this
     * action retrieves.
     *
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitProperties
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $orgUnitType Optional. Filter to org units of this type.
     * orgUnitType
     * @param [string] $orgUnitCode Optional. Filter to org units with codes containing this substring.
     * orgUnitCode
     * @param [string] $orgUnitName Optional. Filter to org units with names containing this substring.
     * orgUnitName
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getOrgstructureOrphans($version, $orgUnitType = null, $orgUnitCode = null, $orgUnitName = null, $bookmark = null)
    {
        $queryParrams = [
                            "orgUnitType" => $orgUnitType,                    "orgUnitCode" => $orgUnitCode,                    "orgUnitName" => $orgUnitName,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/orphans/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of ancestor-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-ancestors-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of OrgUnit
     * data blocks containing information about all the org units that are ancestors
     * of the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getOrgstructureAncestorsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/ancestors/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of child-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of OrgUnit
     * data blocks containing information about all the org units that are children
     * of the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ouTypeId Optional. Filter retrieved list by this org unit type.
     * ouTypeId
     */
    public function getOrgstructureChildrenOrgUnitId($version, $orgUnitId, $ouTypeId = null)
    {
        $queryParrams = [
                            "ouTypeId" => $ouTypeId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/children/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of child-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-paged-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting org unit blocks for the segment following your
     * bookmark parameter (or the first segment if that parameter is empty or
     * missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ouTypeId Optional. Filter retrieved list by this org unit type.
     * ouTypeId
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getOrgstructureChildrenPagedOrgUnitId($version, $orgUnitId, $ouTypeId = null, $bookmark = null)
    {
        $queryParrams = [
                            "ouTypeId" => $ouTypeId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/children/paged/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of descendent-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-descendants-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of OrgUnit
     * data blocks containing information about all the org units that are descendants
     * of the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ouTypeId Optional. Filter retrieved list by this org unit type.
     * ouTypeId
     */
    public function getOrgstructureDescendantsOrgUnitId($version, $orgUnitId, $ouTypeId = null)
    {
        $queryParrams = [
                            "ouTypeId" => $ouTypeId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/descendants/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of descendent-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-descendants-paged-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting org unit blocks for the segment following your
     * bookmark parameter (or the first segment if that parameter is empty or
     * missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ouTypeId Optional. Filter retrieved list by this org unit type.
     * ouTypeId
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getOrgstructureDescendantsPagedOrgUnitId($version, $orgUnitId, $ouTypeId = null, $bookmark = null)
    {
        $queryParrams = [
                            "ouTypeId" => $ouTypeId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/descendants/paged/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a list of parent-units for a provided org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of OrgUnit
     * data blocks containing information about all the org units that are parents
     * of the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ouTypeId Optional. Filter retrieved list by this org unit type.
     * ouTypeId
     */
    public function getOrgstructureParentsOrgUnitId($version, $orgUnitId, $ouTypeId = null)
    {
        $queryParrams = [
                            "ouTypeId" => $ouTypeId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/parents/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Create a new custom org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-
     * @return /PSR7 (Request)
     * Return. This action returns an OrgUnit JSON
     * data block containing the properties for the newly created org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [OrgUnit.OrgUnitCreateData] $orgUnitCreateData Data for new custom org unit.
     */
    public function postOrgstructure($version, $orgUnitCreateData)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/";
        $body = orgUnitCreateData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Give the provided org unit a new child org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to add org unit with ID 1234 as a child
     * of another org unit, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID as single JSON number] $orgUnitId Org unit to add as a child.
     */
    public function postOrgstructureChildrenOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/children/";
        $body = orgUnitId;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Give the provided org unit a new parent org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-
     * @return /PSR7 (Request)
     * Input. Note that you must pass a single JSON number in the body of this
     * request; for example, if you want to add org unit with ID 1234 as a parent
     * of another org unit, your POST body would be:
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID as single JSON number] $orgUnitId Org unit to add as a parent.
     */
    public function postOrgstructureParentsOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/parents/";
        $body = orgUnitId;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a custom org unit’s properties
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#put--d2l-api-lp-(version)-orgstructure-(orgUnitId)
     * @return /PSR7 (Request)
     * Input. Note that you can only update the Name, Code, and Path
     * properties; the values of the other proprties in the
     * OrgUnitProperties you provide are
     * not used to update your specified org unit.
     *
     * Return. This action returns an OrgUnitProperties
     * JSON data block containing the properties for the newly created org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit to update.
     * @param [OrgUnit.OrgUnitProperties] $orgUnitProperties Data for new custom org unit.
     */
    public function putOrgstructureOrgUnitId($version, $orgUnitId, $orgUnitProperties)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId";
        $body = orgUnitProperties;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Retrieve the colour scheme for an org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-colours
     * @return /PSR7 (Request)
     * Return. This action returns a ColourScheme
     * JSON data block containing the org unit’s current colour scheme.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getOrgstructureColoursOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/colours";
        return new Request('GET', $uri);
    }


    /**
     * Set a new colour scheme for an org unit.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#put--d2l-api-lp-(version)-orgstructure-(orgUnitId)-colours
     * @return /PSR7 (Request)
     * Return. This action returns a ColourScheme
     * JSON data block containing the org unit’s new colour scheme.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [OrgUnitEditor.ColourScheme] $colourScheme New colour scheme for org unit.
     */
    public function putOrgstructureColoursOrgUnitId($version, $orgUnitId, $colourScheme)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/$orgUnitId/colours";
        $body = colourScheme;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Permanently delete an org unit from the recycle bin.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function deleteOrgstructureRecyclebinOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the org units currently in the recycle bin.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-recyclebin-
     * @return /PSR7 (Request)
     * Return. This action returns a paged result set
     * containing the resulting OrgUnitProperties
     * blocks for the segment following your bookmark parameter (or the first
     * segment if that parameter is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [string] $bookmark Optional. Bookmark to use for fetching the next data set segment.
     * bookmark
     */
    public function getOrgstructureRecyclebin($version, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/orgstructure/recyclebin/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Send an org unit to the recycle bin.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)-recycle
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postOrgstructureRecyclebinRecycleOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId/recycle";
        return new Request('GET', $uri);
    }


    /**
     * Restore an org unit from the recycle bin.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)-restore
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function postOrgstructureRecyclebinRestoreOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId/restore";
        return new Request('GET', $uri);
    }


    /**
     * Delete a particular org unit type.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitTypeId Org unit type ID.
     */
    public function deleteOutypesOrgUnitTypeId($version, $orgUnitTypeId)
    {
        $uri = "/d2l/api/lp/$version/outypes/$orgUnitTypeId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the known and visible org unit types.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of OrgUnitType
     * JSON data blocks containing information for all the known and visible org
     * unit types. This action will not provide any of the not-visible org unit types.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOutypes($version)
    {
        $uri = "/d2l/api/lp/$version/outypes/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve information about a particular org unit type.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitTypeId Org unit type ID.
     */
    public function getOutypesOrgUnitTypeId($version, $orgUnitTypeId)
    {
        $uri = "/d2l/api/lp/$version/outypes/$orgUnitTypeId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the org unit type information for department org units.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-department
     * @return /PSR7 (Request)
     * Return. This action returns a OrgUnitType
     * JSON data block containing the properties of the built-in department org unit type.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOutypesDepartment($version)
    {
        $uri = "/d2l/api/lp/$version/outypes/department";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the org unit type information for semester org units.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-semester
     * @return /PSR7 (Request)
     * Return. This action returns a OrgUnitType
     * JSON data block containing the properties of the built-in semester org unit type.
     *
     * @param [D2LVERSION] $version API version.
     */
    public function getOutypesSemester($version)
    {
        $uri = "/d2l/api/lp/$version/outypes/semester";
        return new Request('GET', $uri);
    }


    /**
     * Create a new custom org unit type.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-outypes-
     * @return /PSR7 (Request)
     * Return. This action returns a OrgUnitType
     * JSON data block containing the current properties for the new custom org unit type.
     *
     * @param [D2LVERSION] $version API version.
     * @param [OrgUnit.CreateOrgUnitTypeData] $createOrgUnitTypeData Data for new custom org unit type.
     */
    public function postOutypes($version, $createOrgUnitTypeData)
    {
        $uri = "/d2l/api/lp/$version/outypes/";
        $body = createOrgUnitTypeData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update a particular org unit type.
     * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
     * @return /PSR7 (Request)
     * Return. This action returns a OrgUnitType
     * JSON data block containing the current, updated properties for the custom org
     * unit type.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitTypeId Org unit type ID.
     * @param [OrgUnit.CreateOrgUnitTypeData] $createOrgUnitTypeData Updated data for custom org unit type.
     */
    public function postOutypesOrgUnitTypeId($version, $orgUnitTypeId, $createOrgUnitTypeData)
    {
        $uri = "/d2l/api/lp/$version/outypes/$orgUnitTypeId";
        $body = createOrgUnitTypeData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
