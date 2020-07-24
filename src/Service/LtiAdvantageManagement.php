<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * LTI Advantage management (registrations, deployments, and links) — Developer Platform (July 2020)
 * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html
 */
class LtiAdvantageManagement
{
    /**
     * Remove an LTI Advantage registration.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#delete--d2l-api-le-(version)-ltiadvantage-registration-(clientId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $clientId Client ID.
     */
    public function deleteLtiadvantageRegistrationClientId($version, $clientId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/registration/$clientId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI registrations for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-registration-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of registrations
     * belonging to the organization.
     *
     * @param [D2LVERSION] $version API version.
     * @param [boolean] $isEnabled Optional. Used to limit registrations based on IsEnabled status.
     * isEnabled
     */
    public function getLtiadvantageRegistration($version, $isEnabled = null)
    {
        $queryParrams = [
                            "isEnabled" => $isEnabled

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ltiadvantage/registration/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI registration.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-registration-(clientId)
     * @return /PSR7 (Request)
     * Return. This action returns a Registration
     * JSON block containing the data associated with the matching LTI registration.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $clientId Client ID.
     */
    public function getLtiadvantageRegistrationClientId($version, $clientId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/registration/$clientId";
        return new Request('GET', $uri);
    }


    /**
     * Register a new LTI tool for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-registration-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * Registration JSON block
     * containing the data associated with the newly created LTI registratation.
     *
     * @param [D2LVERSION] $version API version.
     * @param [LTI.CreateRegistrationData] $createRegistrationData Data for new LTI registration.
     */
    public function postLtiadvantageRegistration($version, $createRegistrationData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/registration/";
        $body = $createRegistrationData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the information associated with an LTI tool registration.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#put--d2l-api-le-(version)-ltiadvantage-registration-(clientId)
     * @return /PSR7 (Request)
     * Return. This action returns a Registration
     * JSON block containing the updated data for the tool registration.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $clientId Client ID.
     * @param [LTI.CreateRegistrationData] $createRegistrationData Updated data for LTI link.
     */
    public function putLtiadvantageRegistrationClientId($version, $clientId, $createRegistrationData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/registration/$clientId";
        $body = $createRegistrationData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Remove an LTI Advantage deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#delete--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     */
    public function deleteLtiadvantageDeploymentDeploymentId($version, $deploymentId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI deployments for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-deployment-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of LTI tool deployments
     * belonging to the organization.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $clientId Optional. Used to limit deployments based on ClientId value.
     * clientId
     * @param [boolean] $isEnabled Optional. Used to limit deployments based on IsEnabled status.
     * isEnabled
     * @param [boolean] $isAvailable Optional. Used to limit deployments based on IsAvailable status.
     * isAvailable
     */
    public function getLtiadvantageDeployment($version, $clientId = null, $isEnabled = null, $isAvailable = null)
    {
        $queryParrams = [
                            "clientId" => $clientId,                    "isEnabled" => $isEnabled,                    "isAvailable" => $isAvailable

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI tool deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)
     * @return /PSR7 (Request)
     * Return. This action returns a Deployment
     * JSON block containing the data associated with the matching LTI tool deployment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     */
    public function getLtiadvantageDeploymentDeploymentId($version, $deploymentId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new LTI tool deployment for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-deployment-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * Deployment JSON block
     * containing the data associated with the newly created LTI tool deployment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [LTI.CreateDeploymentData] $createDeploymentData Data for new LTI tool deployment.
     */
    public function postLtiadvantageDeployment($version, $createDeploymentData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/";
        $body = $createDeploymentData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the information associated with an LTI tool deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#put--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)
     * @return /PSR7 (Request)
     * Return. This action returns a Deployment
     * JSON block containing the updated data for the LTI tool deployment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     * @param [LTI.CreateDeploymentData] $createDeploymentData Updated data for LTI tool deployment.
     */
    public function putLtiadvantageDeploymentDeploymentId($version, $deploymentId, $createDeploymentData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId";
        $body = $createDeploymentData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Delete all sharing rules for a particular LTI deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#delete--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)-sharing-
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     */
    public function deleteLtiadvantageDeploymentSharingDeploymentId($version, $deploymentId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId/sharing/";
        return new Request('GET', $uri);
    }


    /**
     * Delete the sharing rule for a particular org unit and LTI deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#delete--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)-sharing-(sharingOrgUnitId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     * @param [D2LID] $sharingOrgUnitId Org unit ID the deployment is shared to.
     */
    public function deleteLtiadvantageDeploymentSharingDeploymentIdSharingOrgUnitId($version, $deploymentId, $sharingOrgUnitId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId/sharing/$sharingOrgUnitId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the sharing rules for a particular LTI deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)-sharing-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of OrgUnitSharingRuleData
     * for the deployment.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     * @param [boolean] $incldueInherited Optional. Used to include org units shared by inheritence.
     * incldueInherited
     * @param [D2LID] $orgUnitId Optional. Used to limit to a single org unit.
     * orgUnitId
     */
    public function getLtiadvantageDeploymentSharingDeploymentId($version, $deploymentId, $incldueInherited = null, $orgUnitId = null)
    {
        $queryParrams = [
                            "incldueInherited" => $incldueInherited,                    "orgUnitId" => $orgUnitId

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId/sharing/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Add a sharing rule for a particular LTI deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)-sharing-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * CreateSharingRuleData JSON block
     * containing the data associated with the newly registered sharing rule.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     * @param [LTI.CreateSharingRuleData] $createSharingRuleData Data for a new or updated sharing rule.
     */
    public function postLtiadvantageDeploymentSharingDeploymentId($version, $deploymentId, $createSharingRuleData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId/sharing/";
        $body = $createSharingRuleData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the sharing rule for a particular org unit and LTI tool deployment.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#put--d2l-api-le-(version)-ltiadvantage-deployment-(deploymentId)-sharing-(sharingOrgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * CreateSharingRuleData JSON block
     * containing the data associated with the newly updated sharing rule.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $deploymentId Deployment ID.
     * @param [D2LID] $sharingOrgUnitId Org unit ID the deployment is shared to.
     * @param [LTI.UpdateSharingRuleData] $updateSharingRuleData Data for a new or updated sharing rule.
     */
    public function putLtiadvantageDeploymentSharingDeploymentIdSharingOrgUnitId($version, $deploymentId, $sharingOrgUnitId, $updateSharingRuleData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/deployment/$deploymentId/sharing/$sharingOrgUnitId";
        $body = $updateSharingRuleData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Remove an LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#delete--d2l-api-le-(version)-ltiadvantage-links-orgunit-(orgUnitId)-(linkId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org Unit ID.
     * @param [D2LID] $linkId Link ID.
     */
    public function deleteLtiadvantageLinksOrgunitOrgUnitIdLinkId($version, $orgUnitId, $linkId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/orgunit/$orgUnitId/$linkId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI Advantage links for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-links-organization-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of Links
     * belonging to the organization.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $deploymentId Optional. Used to limit links based on deployment.
     * deploymentId
     * @param [boolean] $isEnabled Optional. Used to limit links based on IsEnabled status.
     * isEnabled
     * @param [boolean] $isAvailable Optional. Used to limit links based on IsAvailable status.
     * isAvailable
     */
    public function getLtiadvantageLinksOrganization($version, $deploymentId = null, $isEnabled = null, $isAvailable = null)
    {
        $queryParrams = [
                            "deploymentId" => $deploymentId,                    "isEnabled" => $isEnabled,                    "isAvailable" => $isAvailable

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ltiadvantage/links/organization/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI Advantage organization link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-links-organization-(linkId)
     * @return /PSR7 (Request)
     * Return. This action returns a Link
     * JSON block containing the data associated with the matching LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $linkId Link ID.
     */
    public function getLtiadvantageLinksOrganizationLinkId($version, $linkId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/organization/$linkId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI Advantage links within the scope of an org unit.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-links-orgunit-(orgUnitId)-
     * @return /PSR7 (Request)
     * Return. This action returns an ObjectListPage
     * JSON block containing a list of Links
     * belonging to the org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [GUID] $deploymentId Optional. Used to limit links based on deployment.
     * deploymentId
     * @param [boolean] $isEnabled Optional. Used to limit links based on IsEnabled status.
     * isEnabled
     * @param [boolean] $isAvailable Optional. Used to limit links based on IsAvailable status.
     * isAvailable
     */
    public function getLtiadvantageLinksOrgunit($version, $deploymentId = null, $isEnabled = null, $isAvailable = null)
    {
        $queryParrams = [
                            "deploymentId" => $deploymentId,                    "isEnabled" => $isEnabled,                    "isAvailable" => $isAvailable

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/le/$version/ltiadvantage/links/orgunit/$orgUnitId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#get--d2l-api-le-(version)-ltiadvantage-links-orgunit-(orgUnitId)-(linkId)
     * @return /PSR7 (Request)
     * Return. This action returns a Link
     * JSON block containing the data associated with the matching LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $linkId Link ID.
     */
    public function getLtiadvantageLinksOrgunitLinkId($version, $linkId)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/orgunit/$orgUnitId/$linkId";
        return new Request('GET', $uri);
    }


    /**
     * Create a new LTI Advantage link for the organization.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-links-organization-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * Link JSON block
     * containing the data associated with the newly created LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [LTI.CreateLTIAdvantageLinkData] $createLTIAdvantageLinkData Data for new LTI Advantage link.
     */
    public function postLtiadvantageLinksOrganization($version, $createLTIAdvantageLinkData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/organization/";
        $body = $createLTIAdvantageLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Create a new LTI Advantage link for an org unit.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-links-orgunit-(orgUnitId)-
     * @return /PSR7 (Request)
     * Return. This action returns a
     * Link JSON block
     * containing the data associated with the newly created LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [LTI.CreateLTIAdvantageLinkData] $createLTIAdvantageLinkData Data for new LTI Advantage link.
     */
    public function postLtiadvantageLinksOrgunit($version, $createLTIAdvantageLinkData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/orgunit/$orgUnitId/";
        $body = $createLTIAdvantageLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Build a new quicklink around an existing LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(apiVersion)-ltiadvantage-quicklinks-orgunit-(orgUnitId)-link-(linkId)
     * @return /PSR7 (Request)
     * Input. Provide an empty post body.
     *
     * Return. This action returns a
     * Quicklink JSON block
     * containing the details for the new quicklink.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $linkId Link ID.
     */
    public function postLtiadvantageQuicklinksOrgunitLinkOrgUnitIdLinkId($version, $orgUnitId, $linkId)
    {
        $uri = "/d2l/api/le/$apiVersion/ltiadvantage/quicklinks/orgunit/$orgUnitId/link/$linkId";
        return new Request('GET', $uri);
    }


    /**
     * Update the information associated with an LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#put--d2l-api-le-(version)-ltiadvantage-links-organization-(linkId)
     * @return /PSR7 (Request)
     * Return. This action returns a Link
     * JSON block containing the updated data for the LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $linkId Link ID.
     * @param [LTI.CreateLTIAdvantageLinkData] $createLTIAdvantageLinkData Updated data for LTI link.
     */
    public function putLtiadvantageLinksOrganizationLinkId($version, $linkId, $createLTIAdvantageLinkData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/organization/$linkId";
        $body = $createLTIAdvantageLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the information associated with an LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#put--d2l-api-le-(version)-ltiadvantage-links-orgunit-(orgUnitId)-(linkId)
     * @return /PSR7 (Request)
     * Return. This action returns a Link
     * JSON block containing the updated data for the LTI Advantage link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $linkId Link ID.
     * @param [LTI.CreateLTIAdvantageLinkData] $createLTIAdvantageLinkData Updated data for LTI link.
     */
    public function putLtiadvantageLinksOrgunitLinkId($version, $linkId, $createLTIAdvantageLinkData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/links/orgunit/$orgUnitId/$linkId";
        $body = $createLTIAdvantageLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Migrate a legacy LTI link to an LTI Advantage link.
     * @see https://docs.valence.desire2learn.com/res/ltiadvantage.html#post--d2l-api-le-(version)-ltiadvantage-migration-links-(linkId)
     * @return /PSR7 (Request)
     * Input. The action’s body should be a MigrationData JSON data block.
     *
     * Return. This action returns an empty body.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $linkId Link ID.
     * @param [MigrationData] $migrationData Migration directions for link.
     */
    public function postLtiadvantageMigrationLinksLinkId($version, $linkId, $migrationData)
    {
        $uri = "/d2l/api/le/$version/ltiadvantage/migration/links/$linkId";
        $body = $migrationData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
