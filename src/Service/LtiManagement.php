<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * LTI management (links and tool providers) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/lti.html
 */
class LtiManagement
{
	/**
	 * Remove an LTI link.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $ltiLinkId LTI link ID.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#delete--d2l-api-le-(version)-lti-link-(ltiLinkId)
	 * @return /PSR7 (Request)
	 */
	public function deleteLtiLink($version, $ltiLinkId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/link/$ltiLinkId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the information for a particular LTI link.
	 *
	 * Return. This action returns a LtiLinkData
	 * JSON block containing the data associated with the matching LTI link.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $ltiLinkId LTI link ID.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-link-(orgUnitId)-(ltiLinkId)
	 * @return /PSR7 (Request)
	 */
	public function getLtiLink($version, $orgUnitId, $ltiLinkId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/link/$orgUnitId/$ltiLinkId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Register a new LTI link for an org unit.
	 *
	 * Return. This action returns a
	 * LtiLinkData JSON block
	 * containing the data associated with the newly registered LTI link.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [LTI.CreateLtiLinkData] $createLtiLinkData Data for new LTI link.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-link-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function postLtiLink($version, $orgUnitId, $createLtiLinkData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/link/$orgUnitId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Build a new quicklink around an existing LTI link.
	 *
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
	 * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-quicklink-(orgUnitId)-(ltiLinkId)
	 * @return /PSR7 (Request)
	 */
	public function postLtiQuicklink($version, $orgUnitId, $ltiLinkId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/quicklink/$orgUnitId/$ltiLinkId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the information associated with a registered LTI link.
	 *
	 * Return. This action returns a LtiLinkData
	 * JSON block containing the updated data for the tool provider.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $ltiLinkId LTI link ID.
	 * @param [LTI.CreateLtiLinkData] $createLtiLinkData Updated data for LTI link.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#put--d2l-api-le-(version)-lti-link-(ltiLinkId)
	 * @return /PSR7 (Request)
	 */
	public function putLtiLink($version, $ltiLinkId, $createLtiLinkData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/link/$ltiLinkId", 'PUT');
		return new Request('GET', $uri);
	}


	/**
	 * Remove the registration for an LTI tool provider.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $tpId Tool provider ID.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#delete--d2l-api-le-(version)-lti-tp-(tpId)
	 * @return /PSR7 (Request)
	 */
	public function deleteLtiTp($version, $tpId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/tp/$tpId", 'DELETE');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve the information for a particular LTI tool provider.
	 *
	 * Return. This action returns a
	 * LtiToolProviderData JSON block
	 * containing the data associated with the matching LTI tool provider.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [D2LID] $tpId Tool provider ID.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#get--d2l-api-le-(version)-lti-tp-(orgUnitId)-(tpId)
	 * @return /PSR7 (Request)
	 */
	public function getLtiTp($version, $orgUnitId, $tpId)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/tp/$orgUnitId/$tpId", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Register a new LTI tool provider for an org unit.
	 *
	 * Return. This action returns a
	 * LtiToolProviderData JSON block
	 * containing the data associated with the newly registered LTI tool provider.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $orgUnitId Org unit ID.
	 * @param [LTI.CreateLtiProviderData] $createLtiProviderData Data for new LTI tool provider.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#post--d2l-api-le-(version)-lti-tp-(orgUnitId)
	 * @return /PSR7 (Request)
	 */
	public function postLtiTp($version, $orgUnitId, $createLtiProviderData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/tp/$orgUnitId", 'POST');
		return new Request('GET', $uri);
	}


	/**
	 * Update the information associated with a registered LTI tool provider.
	 *
	 * Return. This action returns a LtiToolProviderData
	 * JSON block containing the updated data for the tool provider.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $tpId Tool provider ID.
	 * @param [LTI.CreateLtiProviderData] $createLtiProviderData Updated data for LTI tool provider.
	 * @see https://docs.valence.desire2learn.com/res/lti.html#put--d2l-api-le-(version)-lti-tp-(tpId)
	 * @return /PSR7 (Request)
	 */
	public function putLtiTp($version, $tpId, $createLtiProviderData)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/le/$version/lti/tp/$tpId", 'PUT');
		return new Request('GET', $uri);
	}
}
