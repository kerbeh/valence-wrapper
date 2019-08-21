<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Permissions — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/permissions.html
 */
class Permissions
{
	/**
	 * Remove the specified capability.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [String] $capabilityId Capability ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#delete--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-(capabilityId)
	 * @return /PSR7 (Request)
	 */
	public function deletePermissionsToolsCapabilities($version, $toolId, $capabilityId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/capabilities/$capabilityId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Reset a permission grant to “not allowed”.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [String] $grantId Permission grant ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#delete--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
	 * @return /PSR7 (Request)
	 */
	public function deletePermissionsToolsClaimsAllowed($version, $toolId, $grantId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the capability grants for a tool.
	 *
	 * Input. You can use a bookmark query parameter as a paging offset, to
	 * indicate that the service should return the segment of results immediately
	 * following your bookmark.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting Capability
	 * data blocks for the segment following your bookmarket parameter (for the
	 * first segment, if the bookmark is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-
	 * @return /PSR7 (Request)
	 */
	public function getPermissionsToolsCapabilities($version, $toolId, $actorRoleId = null, $name = null, $orgUnitTypeId = null, $targetRoleId = null)
	{
		$queryParrams = [
		                    "name" => $name,                    "actorRoleId" => $actorRoleId,                    "targetRoleId" => $targetRoleId,                    "orgUnitTypeId" => $orgUnitTypeId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/capabilities/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all the permission grants for a tool’s permissions claims.
	 *
	 * Input. You can use a bookmark query parameter as a paging offset, to
	 * indicate that the service should return the segment of results immediately
	 * following your bookmark.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting allowed and not-allowed ClaimGrant
	 * data blocks for the segment following your bookmarket parameter (for the
	 * first segment, if the bookmark is empty or missing).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-
	 * @return /PSR7 (Request)
	 */
	public function getPermissionsToolsClaims($version, $toolId, $claimId = null, $orgUnitTypeId = null, $roleId = null)
	{
		$queryParrams = [
		                    "claimId" => $claimId,                    "roleId" => $roleId,                    "orgUnitTypeId" => $orgUnitTypeId

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/claims/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Determine the allowance state of a permission grant.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [String] $grantId Permission grant ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
	 * @return /PSR7 (Request)
	 */
	public function getPermissionsToolsClaimsAllowed($version, $toolId, $grantId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the meta-data for one of a tool’s permission claims.
	 *
	 * Return. This action returns a ClaimMetaData
	 * JSON block containing the meta-data for the indicated permission claim.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [String] $claimId Permission claim ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-metadata-(claimId)
	 * @return /PSR7 (Request)
	 */
	public function getPermissionsToolsClaimsMetadata($version, $toolId, $claimId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/claims/metadata/$claimId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Grant a tool capability.
	 *
	 * Return. Upon success, this action returns a Capability
	 * JSON block containing the meta-data for the new tool capability granted.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [Permissions.Capability] $capability Capability to grant.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#post--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-
	 * @return /PSR7 (Request)
	 */
	public function postPermissionsToolsCapabilities($version, $toolId, $capability)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/capabilities/", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Set a permission grant to “allowed”.
	 *
	 * Input. Provide an empty post body. You should ensure that
	 * your request includes a Content-Length: 0 HTTP header value (some HTTP
	 * client libraries may neglect to do this with empty post calls).
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [String] $toolId Tool ID.
	 * @param [String] $grantId Permission grant ID.
	 * @see https://docs.valence.desire2learn.com/res/permissions.html#put--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
	 * @return /PSR7 (Request)
	 */
	public function putPermissionsToolsClaimsAllowed($version, $toolId, $grantId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId", 'PUT');
		return new Request('GET', $uri);
	}
}
