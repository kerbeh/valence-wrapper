<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * Permissions — Developer Platform (September 2020)
 * @see https://docs.valence.desire2learn.com/res/permissions.html
 */
class Permissions
{
    /**
     * Remove the specified capability.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#delete--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-(capabilityId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [String] $capabilityId Capability ID.
     */
    public function deletePermissionsToolsCapabilitiesToolIdCapabilityId($version, $toolId, $capabilityId)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/capabilities/$capabilityId";
        return new Request('DELETE', $uri);
    }


    /**
     * Reset a permission grant to “not allowed”.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#delete--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [String] $grantId Permission grant ID.
     */
    public function deletePermissionsToolsClaimsAllowedToolIdGrantId($version, $toolId, $grantId)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId";
        return new Request('DELETE', $uri);
    }


    /**
     * Retrieve all the capability grants for a tool.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-
     * @return /PSR7 (Request)
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
     * @param [String] $name Optional. Filter capabilties to only those matching this name.
     * name
     * @param [D2LID] $actorRoleId Optional. Filter capabilties to only those offered to this role.
     * actorRoleId
     * @param [D2LID] $targetRoleId Optional. Filter capabilities to only those acting on this role.
     * targetRoleId
     * @param [D2LID] $orgUnitTypeId Optional. Filter capabilities to only those applying in this org unit type.
     * orgUnitTypeId
     */
    public function getPermissionsToolsCapabilitiesToolId($version, $toolId, $name = null, $actorRoleId = null, $targetRoleId = null, $orgUnitTypeId = null)
    {
        $queryParrams = [
                            "name" => $name,                    "actorRoleId" => $actorRoleId,                    "targetRoleId" => $targetRoleId,                    "orgUnitTypeId" => $orgUnitTypeId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/capabilities/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the permission grants for a tool’s permissions claims.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-
     * @return /PSR7 (Request)
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
     * @param [D2LID] $claimId Optional. Filter grants to those for identified claim only.
     * claimId
     * @param [D2LID] $roleId Optional. Filter grants for identified role only.
     * roleId
     * @param [D2LID] $orgUnitTypeId Optional. Filter grants for identified org unit type only.
     * orgUnitTypeId
     */
    public function getPermissionsToolsClaimsToolId($version, $toolId, $claimId = null, $roleId = null, $orgUnitTypeId = null)
    {
        $queryParrams = [
                            "claimId" => $claimId,                    "roleId" => $roleId,                    "orgUnitTypeId" => $orgUnitTypeId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all the allowed permission grants for a tool for a tool’s
     * permissions claims.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting allowed ClaimGrant
     * data blocks for the segment following your bookmarket parameter (for the
     * first segment, if the bookmark is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [D2LID] $claimId Optional. Filter grants to those for identified claim only.
     * claimId
     * @param [D2LID] $roleId Optional. Filter grants for identified role only.
     * roleId
     * @param [D2LID] $orgUnitTypeId Optional. Filter grants for identified org unit type only.
     * orgUnitTypeId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getPermissionsToolsClaimsAllowedToolId($version, $toolId, $claimId = null, $roleId = null, $orgUnitTypeId = null, $bookmark = null)
    {
        $queryParrams = [
                            "claimId" => $claimId,                    "roleId" => $roleId,                    "orgUnitTypeId" => $orgUnitTypeId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Determine the allowance state of a permission grant.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [String] $grantId Permission grant ID.
     */
    public function getPermissionsToolsClaimsAllowedToolIdGrantId($version, $toolId, $grantId)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the meta-data for all of a tool’s permission claims.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-metadata-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following your bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting ClaimMetaData
     * data blocks for the segment following your bookmark parameter (or the first
     * segment, if the bookmark is empty or missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getPermissionsToolsClaimsMetadataToolId($version, $toolId, $bookmark = null)
    {
        $queryParrams = [
                            "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/metadata/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the meta-data for one of a tool’s permission claims.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#get--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-metadata-(claimId)
     * @return /PSR7 (Request)
     * Return. This action returns a ClaimMetaData
     * JSON block containing the meta-data for the indicated permission claim.
     *
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [String] $claimId Permission claim ID.
     */
    public function getPermissionsToolsClaimsMetadataToolIdClaimId($version, $toolId, $claimId)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/metadata/$claimId";
        return new Request('GET', $uri);
    }


    /**
     * Grant a tool capability.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#post--d2l-api-lp-(version)-permissions-tools-(toolId)-capabilities-
     * @return /PSR7 (Request)
     * Return. Upon success, this action returns a Capability
     * JSON block containing the meta-data for the new tool capability granted.
     *
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [Permissions.Capability] $capability Capability to grant.
     */
    public function postPermissionsToolsCapabilitiesToolId($version, $toolId, $capability)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/capabilities/";
        $body = $capability;
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, $body);
    }


    /**
     * Set a permission grant to “allowed”.
     * @see https://docs.valence.desire2learn.com/res/permissions.html#put--d2l-api-lp-(version)-permissions-tools-(toolId)-claims-allowed-(grantId)
     * @return /PSR7 (Request)
     * Input. Provide an empty post body. You should ensure that
     * your request includes a Content-Length: 0 HTTP header value (some HTTP
     * client libraries may neglect to do this with empty post calls).
     *
     * @param [D2LVERSION] $version API version.
     * @param [String] $toolId Tool ID.
     * @param [String] $grantId Permission grant ID.
     */
    public function putPermissionsToolsClaimsAllowedToolIdGrantId($version, $toolId, $grantId)
    {
        $uri = "/d2l/api/lp/$version/permissions/tools/$toolId/claims/allowed/$grantId";
        return new Request('PUT', $uri);
    }
}
