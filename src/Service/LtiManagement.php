<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * LTI management (links and tool providers) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/lti.html
 */
class LtiManagement
{
    /**
     * Remove an LTI link.
     * @see https://docs.valence.desire2learn.com/res/lti.html#delete--d2l-api-le-(version)-lti-link-(ltiLinkId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $ltiLinkId LTI link ID.
     */
    public function deleteLtiLinkLtiLinkId($version, $ltiLinkId)
    {
        $uri = "/d2l/api/le/$version/lti/link/$ltiLinkId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI links registered for an org unit.
     * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-link-(orgUnitId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of
     * LtiLinkData data blocks, containing the details
     * for all the LTI links registered for the provided org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getLtiLinkOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/lti/link/$orgUnitId/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI link.
     * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-link-(orgUnitId)-(ltiLinkId)
     * @return /PSR7 (Request)
     * Return. This action returns a LtiLinkData
     * JSON block containing the data associated with the matching LTI link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ltiLinkId LTI link ID.
     */
    public function getLtiLinkOrgUnitIdLtiLinkId($version, $orgUnitId, $ltiLinkId)
    {
        $uri = "/d2l/api/le/$version/lti/link/$orgUnitId/$ltiLinkId";
        return new Request('GET', $uri);
    }


    /**
     * Register a new LTI link for an org unit.
     * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-link-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * LtiLinkData JSON block
     * containing the data associated with the newly registered LTI link.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [LTI.CreateLtiLinkData] $createLtiLinkData Data for new LTI link.
     */
    public function postLtiLinkOrgUnitId($version, $orgUnitId, $createLtiLinkData)
    {
        $uri = "/d2l/api/le/$version/lti/link/$orgUnitId";
        $body = createLtiLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Build a new quicklink around an existing LTI link.
     * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-quicklink-(orgUnitId)-(ltiLinkId)
     * @return /PSR7 (Request)
     * Input. Provide an empty post body. You should ensure that
     * your request includes a Content-Length: 0 HTTP header value (some HTTP
     * client libraries may neglect to do this with empty post calls).
     *
     * Return. This action returns a LtiQuickLinkData
     * JSON block containing the details for the new quicklink.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $ltiLinkId LTI link ID.
     */
    public function postLtiQuicklinkOrgUnitIdLtiLinkId($version, $orgUnitId, $ltiLinkId)
    {
        $uri = "/d2l/api/le/$version/lti/quicklink/$orgUnitId/$ltiLinkId";
        return new Request('GET', $uri);
    }


    /**
     * Update the information associated with a registered LTI link.
     * @see https://docs.valence.desire2learn.com/res/lti.html#put--d2l-api-le-(version)-lti-link-(ltiLinkId)
     * @return /PSR7 (Request)
     * Return. This action returns a LtiLinkData
     * JSON block containing the updated data for the tool provider.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $ltiLinkId LTI link ID.
     * @param [LTI.CreateLtiLinkData] $createLtiLinkData Updated data for LTI link.
     */
    public function putLtiLinkLtiLinkId($version, $ltiLinkId, $createLtiLinkData)
    {
        $uri = "/d2l/api/le/$version/lti/link/$ltiLinkId";
        $body = createLtiLinkData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Remove the registration for an LTI tool provider.
     * @see https://docs.valence.desire2learn.com/res/lti.html#delete--d2l-api-le-(version)-lti-tp-(tpId)
     * @return /PSR7 (Request)
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $tpId Tool provider ID.
     */
    public function deleteLtiTpTpId($version, $tpId)
    {
        $uri = "/d2l/api/le/$version/lti/tp/$tpId";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for all LTI tool providers registered for an org unit.
     * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-tp-(orgUnitId)-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of
     * LtiToolProviderData data blocks,
     * containing the details for all the tool providers registered for the provided
     * org unit.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     */
    public function getLtiTpOrgUnitId($version, $orgUnitId)
    {
        $uri = "/d2l/api/le/$version/lti/tp/$orgUnitId/";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve the information for a particular LTI tool provider.
     * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-tp-(orgUnitId)-(tpId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * LtiToolProviderData JSON block
     * containing the data associated with the matching LTI tool provider.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [D2LID] $tpId Tool provider ID.
     */
    public function getLtiTpOrgUnitIdTpId($version, $orgUnitId, $tpId)
    {
        $uri = "/d2l/api/le/$version/lti/tp/$orgUnitId/$tpId";
        return new Request('GET', $uri);
    }


    /**
     * Register a new LTI tool provider for an org unit.
     * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-tp-(orgUnitId)
     * @return /PSR7 (Request)
     * Return. This action returns a
     * LtiToolProviderData JSON block
     * containing the data associated with the newly registered LTI tool provider.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $orgUnitId Org unit ID.
     * @param [LTI.CreateLtiProviderData] $createLtiProviderData Data for new LTI tool provider.
     */
    public function postLtiTpOrgUnitId($version, $orgUnitId, $createLtiProviderData)
    {
        $uri = "/d2l/api/le/$version/lti/tp/$orgUnitId";
        $body = createLtiProviderData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }


    /**
     * Update the information associated with a registered LTI tool provider.
     * @see https://docs.valence.desire2learn.com/res/lti.html#put--d2l-api-le-(version)-lti-tp-(tpId)
     * @return /PSR7 (Request)
     * Return. This action returns a LtiToolProviderData
     * JSON block containing the updated data for the tool provider.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $tpId Tool provider ID.
     * @param [LTI.CreateLtiProviderData] $createLtiProviderData Updated data for LTI tool provider.
     */
    public function putLtiTpTpId($version, $tpId, $createLtiProviderData)
    {
        $uri = "/d2l/api/le/$version/lti/tp/$tpId";
        $body = createLtiProviderData;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
