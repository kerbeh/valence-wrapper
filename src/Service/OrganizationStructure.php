<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Organization structure (Org units, structure) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/orgunit.html
 */
class OrganizationStructure
{
	/**
	 * Retrieve the organization properties information.
	 *
	 * Return. This action returns a Organization
	 * JSON data block containing the identifier, name, and time zone of the organization.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-organization-info
	 * @return /PSR7 (Request)
	 */
	public function getOrganizationInfo($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/organization/info", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the organization’s primary (root) URL.
	 *
	 * Return. This action does not return a JSON document; rather, it
	 * returns a simple text/plain body containing only the fully qualified root
	 * URL for this back end service.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-organization-primary-url
	 * @return /PSR7 (Request)
	 */
	public function getOrganizationPrimaryUrl($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/organization/primary/url", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the relationship between a provided org unit and one of its children.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $childOrgUnitId Org unit ID for the child to detach.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-(childOrgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function deleteOrgstructureChildren($version, $orgUnitId, $childOrgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/children/$childOrgUnitId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Delete the relationship between a provided org unit and one of its parents.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $parentOrgUnitId Org unit ID for the parent to detach.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-(parentOrgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function deleteOrgstructureParents($version, $orgUnitId, $parentOrgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/parents/$parentOrgUnitId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the properties for a provided org unit.
	 *
	 * Return. This action returns a OrgUnit JSON
	 * structure containing the properties for the provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructure($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all org units that have no children.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-childless-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureChildless($version, $bookmark = null, $orgUnitCode = null, $orgUnitName = null, $orgUnitType = null)
	{
		$queryParrams = [
		                    "orgUnitType" => $orgUnitType,                    "orgUnitCode" => $orgUnitCode,                    "orgUnitName" => $orgUnitName,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/childless/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all org units that are orphans (have no parents).
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-orphans-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureOrphans($version, $bookmark = null, $orgUnitCode = null, $orgUnitName = null, $orgUnitType = null)
	{
		$queryParrams = [
		                    "orgUnitType" => $orgUnitType,                    "orgUnitCode" => $orgUnitCode,                    "orgUnitName" => $orgUnitName,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/orphans/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of ancestor-units for a provided org unit.
	 *
	 * Return. This action returns a JSON array of OrgUnit
	 * data blocks containing information about all the org units that are ancestors
	 * of the provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-ancestors-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureAncestors($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/ancestors/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of child-units for a provided org unit.
	 *
	 * Return. This action returns a JSON array of OrgUnit
	 * data blocks containing information about all the org units that are children
	 * of the provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureChildren($version, $orgUnitId, $ouTypeId = null)
	{
		$queryParrams = [
		                    "ouTypeId" => $ouTypeId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/children/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of child-units for a provided org unit.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting org unit blocks for the segment following your
	 * bookmark parameter (or the first segment if that parameter is empty or
	 * missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-paged-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureChildrenPaged($version, $orgUnitId, $bookmark = null, $ouTypeId = null)
	{
		$queryParrams = [
		                    "ouTypeId" => $ouTypeId,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/children/paged/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of descendent-units for a provided org unit.
	 *
	 * Return. This action returns a JSON array of OrgUnit
	 * data blocks containing information about all the org units that are descendants
	 * of the provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-descendants-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureDescendants($version, $orgUnitId, $ouTypeId = null)
	{
		$queryParrams = [
		                    "ouTypeId" => $ouTypeId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/descendants/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of descendent-units for a provided org unit.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting org unit blocks for the segment following your
	 * bookmark parameter (or the first segment if that parameter is empty or
	 * missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-descendants-paged-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureDescendantsPaged($version, $orgUnitId, $bookmark = null, $ouTypeId = null)
	{
		$queryParrams = [
		                    "ouTypeId" => $ouTypeId,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/descendants/paged/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a list of parent-units for a provided org unit.
	 *
	 * Return. This action returns a JSON array of OrgUnit
	 * data blocks containing information about all the org units that are parents
	 * of the provided org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureParents($version, $orgUnitId, $ouTypeId = null)
	{
		$queryParrams = [
		                    "ouTypeId" => $ouTypeId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/parents/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Create a new custom org unit.
	 *
	 * Return. This action returns an OrgUnit JSON
	 * data block containing the properties for the newly created org unit.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [OrgUnit.OrgUnitCreateData] $orgUnitCreateData Data for new custom org unit.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-
	 * @return /PSR7 (Request)
	 */
	public function postOrgstructure($version, $orgUnitCreateData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Give the provided org unit a new child org unit.
	 *
	 * Input. Note that you must pass a single JSON number in the body of this
	 * request; for example, if you want to add org unit with ID 1234 as a child
	 * of another org unit, your POST body would be:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-(orgUnitId)-children-
	 * @return /PSR7 (Request)
	 */
	public function postOrgstructureChildren($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/children/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Give the provided org unit a new parent org unit.
	 *
	 * Input. Note that you must pass a single JSON number in the body of this
	 * request; for example, if you want to add org unit with ID 1234 as a parent
	 * of another org unit, your POST body would be:
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-(orgUnitId)-parents-
	 * @return /PSR7 (Request)
	 */
	public function postOrgstructureParents($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/parents/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update a custom org unit’s properties
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#put--d2l-api-lp-(version)-orgstructure-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function putOrgstructure($version, $orgUnitId, $orgUnitProperties)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the colour scheme for an org unit.
	 *
	 * Return. This action returns a ColourScheme
	 * JSON data block containing the org unit’s current colour scheme.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-(orgUnitId)-colours
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureColours($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/colours", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Set a new colour scheme for an org unit.
	 *
	 * Return. This action returns a ColourScheme
	 * JSON data block containing the org unit’s new colour scheme.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [OrgUnitEditor.ColourScheme] $colourScheme New colour scheme for org unit.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#put--d2l-api-lp-(version)-orgstructure-(orgUnitId)-colours
	 * @return /PSR7 (Request)
	 */
	public function putOrgstructureColours($version, $orgUnitId, $colourScheme)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/$orgUnitId/colours", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Permanently delete an org unit from the recycle bin.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function deleteOrgstructureRecyclebin($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the org units currently in the recycle bin.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting OrgUnitProperties
	 * blocks for the segment following your bookmark parameter (or the first
	 * segment if that parameter is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-orgstructure-recyclebin-
	 * @return /PSR7 (Request)
	 */
	public function getOrgstructureRecyclebin($version, $bookmark = null)
	{
		$queryParrams = [
		                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/recyclebin/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Send an org unit to the recycle bin.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)-recycle
	 * @return /PSR7 (Request)
	 */
	public function postOrgstructureRecyclebinRecycle($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId/recycle", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Restore an org unit from the recycle bin.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-orgstructure-recyclebin-(orgUnitId)-restore
	 * @return /PSR7 (Request)
	 */
	public function postOrgstructureRecyclebinRestore($version, $orgUnitId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/orgstructure/recyclebin/$orgUnitId/restore", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Delete a particular org unit type.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitTypeId Org unit type ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#delete--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
	 * @return /PSR7 (Request)
	 */
	public function deleteOutypes($version, $orgUnitTypeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/outypes/$orgUnitTypeId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve information about a particular org unit type.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitTypeId Org unit type ID.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
	 * @return /PSR7 (Request)
	 */
	public function getOutypes($version, $orgUnitTypeId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/outypes/$orgUnitTypeId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the org unit type information for department org units.
	 *
	 * Return. This action returns a OrgUnitType
	 * JSON data block containing the properties of the built-in department org unit type.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-department
	 * @return /PSR7 (Request)
	 */
	public function getOutypesDepartment($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/outypes/department", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the org unit type information for semester org units.
	 *
	 * Return. This action returns a OrgUnitType
	 * JSON data block containing the properties of the built-in semester org unit type.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#get--d2l-api-lp-(version)-outypes-semester
	 * @return /PSR7 (Request)
	 */
	public function getOutypesSemester($version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/outypes/semester", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update a particular org unit type.
	 *
	 * Return. This action returns a OrgUnitType
	 * JSON data block containing the current, updated properties for the custom org
	 * unit type.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitTypeId Org unit type ID.
	 * @param [OrgUnit.CreateOrgUnitTypeData] $createOrgUnitTypeData Updated data for custom org unit type.
	 * @see https://docs.valence.desire2learn.com/res/orgunit.html#post--d2l-api-lp-(version)-outypes-(orgUnitTypeId)
	 * @return /PSR7 (Request)
	 */
	public function postOutypes($version, $orgUnitTypeId, $createOrgUnitTypeData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/outypes/$orgUnitTypeId", 'POST');
		return new Request('GET', $uri);
	}
}
