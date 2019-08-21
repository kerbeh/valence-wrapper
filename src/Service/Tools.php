<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Tools — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/tools.html
 */
class Tools
{
	/**
	 * Retrieve the current organization-level information for a tool.
	 *
	 * Return. This action returns an OrgInformation
	 * JSON block, containing information about the provided tool.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-org-(toolId)
	 * @return /PSR7 (Request)
	 */
	public function getToolsOrg($version, $toolId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/org/$toolId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the organization-level status for a tool.
	 *
	 * Input. Provide an UpdateStatus JSON block
	 * for the new status of the provided tool.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)
	 * @return /PSR7 (Request)
	 */
	public function putToolsOrg($version, $toolId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/org/$toolId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update a tool’s default status for new org units.
	 *
	 * Input. Provide an UpdateStatus JSON block
	 * for the new OUDefault value assigned to the provided tool.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)-OUDefault
	 * @return /PSR7 (Request)
	 */
	public function putToolsOrgOudefault($version, $toolId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/org/$toolId/OUDefault", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Update a tool’s current status for all org units.
	 *
	 * Input. Provide an UpdateStatus JSON block
	 * for the new OUDefault value assigned to the provided tool.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-org-(toolId)-OUDefault-override
	 * @return /PSR7 (Request)
	 */
	public function putToolsOrgOudefaultOverride($version, $toolId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/org/$toolId/OUDefault/override", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current information for a tool enabled for the provided org unit.
	 *
	 * Return. If you provide true for the namesOnly query parameter, this action
	 * returns a ToolWithName JSON block; otherwise,
	 * this action returns an OrgUnitInformation JSON
	 * block.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-(toolId)
	 * @return /PSR7 (Request)
	 */
	public function getToolsOrgunits($version, $orgUnitId, $toolId, $namesOnly = null)
	{
		$queryParrams = [
		                    "namesOnly" => $namesOnly

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/orgUnits/$orgUnitId/$toolId?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the current id and localized name information for all tools enabled for
	 * the provided org unit, including restricted tools.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/tools.html#get--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-toolNames
	 * @return /PSR7 (Request)
	 */
	public function getToolsOrgunitsToolnames($version, $orgUnitId, $bookmark = null)
	{
		$queryParrams = [
		                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/orgUnits/$orgUnitId/toolNames?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Update the org unit-level information for a tool.
	 *
	 * Input. Provide an OrgUnitInformation JSON block
	 * for the new status of the provided tool.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/tools.html#put--d2l-api-lp-(version)-tools-orgUnits-(orgUnitId)-(toolId)
	 * @return /PSR7 (Request)
	 */
	public function putToolsOrgunits($version, $orgUnitId, $toolId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/tools/orgUnits/$orgUnitId/$toolId", 'PUT');
		return new Request('GET', $uri);
	}
}
