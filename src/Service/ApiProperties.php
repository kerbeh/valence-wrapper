<?php
namespace ValenceWrapper\Service;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * API Properties (versions, logging, authentication) — Developer Platform (August 2019)
 * @see https://docs.valence.desire2learn.com/res/apiprop.html
 */
class ApiProperties
{
	/**
	 * Cancel the authentication process.
	 *
	 * Return. Expect this action to simply return 403 Forbidden to
	 * signify that the calling application is not currently authenticated to use
	 * the Framework API.
	 *
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-auth-api-cancel
	 * @return /PSR7 (Request)
	 */
	public function getD2LAuthApiCancel()
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/auth/api/cancel", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Request an authentication token from the Learning System Framework API.
	 *
	 * Input. This route supports the first stage in the
	 * ID-key authentication process used to set up an
	 * authenticated calling context for further route invocations. Thus, unlike
	 * with other routes, you do not provide all the authentication parameters as
	 * with other REST API calls; instead, use the query
	 * parameters listed here, only.
	 *
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-auth-api-token
	 * @return /PSR7 (Request)
	 */
	public function getD2LAuthApiToken($type = null, $x_state = null)
	{
		$queryParrams = [
		                    "x_state" => $x_state,                    "type" => $type

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/auth/api/token?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve a SOAP services authentication token given an existing calling user context.
	 *
	 * Input. Your call must provide a query parameter identifying the purpose
	 * of the request (that is, the type of token you want to retrieve). For each
	 * token type the back-end service can provide, the administrator must have
	 * installed, confirmed, and enabled the appropriate component of the service:
	 *
	 * Return. Successful calls will retrieve a TokenInfo
	 * JSON data block wrapping a SOAP token string of the appropriate type for the
	 * current user context.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-auth-soaptoken
	 * @return /PSR7 (Request)
	 */
	public function getAuthSoaptoken($version, $purpose = null)
	{
		$queryParrams = [
		                    "purpose" => $purpose

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/auth/soaptoken?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve identified log message.
	 *
	 * Return. This action returns a Message JSON
	 * block containing the data for the indicated log message.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @param [D2LID] $logMessageId Log message ID.
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-logging-(logMessageId)-
	 * @return /PSR7 (Request)
	 */
	public function getLogging($version, $logMessageId, $includeTraces = null)
	{
		$queryParrams = [
		                    "includeTraces" => $includeTraces

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/logging/$logMessageId/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all current log arranged in message groups.
	 *
	 * Input. You can use a bookmark query parameter as a paging offset, to
	 * indicate that the service should return the segment of results immediately
	 * following you bookmark.
	 *
	 * Return. This action returns a paged result set
	 * containing the resulting MessageGroupSummary
	 * data blocks for the segment for the segment following your bookmark parameter.
	 *
	 * @param [D2LVERSION] $version API version.
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-logging-grouped-
	 * @return /PSR7 (Request)
	 */
	public function getLoggingGrouped(
		$version,
		$bookmark = null,
		$dateRangeEnd = null,
		$dateRangeStart = null,
		$loggerAssembly = null,
		$messageGroupId = null,
		$orgUnitId = null,
		$search = null,
		$userId = null
	) {
		$queryParrams = [
		                    "dateRangeStart" => $dateRangeStart,                    "dateRangeEnd" => $dateRangeEnd,                    "search" => $search,                    "loggerAssembly" => $loggerAssembly,                    "userId" => $userId,                    "messageGroupId" => $messageGroupId,                    "orgUnitId" => $orgUnitId,                    "bookmark" => $bookmark

		];
		$queryString = http_build_query($queryParrams);
		$uri = $this->valenceInstance->authenticateUri("d2l/api/lp/$version/logging/grouped/?$queryString", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Determine if a specific product component supports a particular API version.
	 *
	 * Return. This action returns a SupportedVersion
	 * JSON block indicating if the provided product component supports the provided
	 * API version.
	 *
	 * @param [D2LPRODUCT] $productCode Identifier for a Brightspace product component.
	 * @param [D2LVERSION] $version API version to query.
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-(productCode)-versions-(version)
	 * @return /PSR7 (Request)
	 */
	public function getVersions($productCode, $version)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/$productCode/versions/$version", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Retrieve all supported versions for all product components.
	 *
	 * Return. This action returns a JSON array of ProductVersions blocks.
	 *
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-versions-
	 * @return /PSR7 (Request)
	 */
	public function get()
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/versions/", 'GET');
		return new Request('GET', $uri);
	}


	/**
	 * Determine the versions supported by the back-end’s Brightspace API.
	 *
	 * Input. If you want to check the versions supported by a single product
	 * component, you provide only a single element in the array you pass.
	 *
	 * Return. This action returns a BulkSupportedVersionResponse
	 * JSON block.
	 *
	 * @param [Version.SupportedVersionRequest] $supportedVersionRequest Array of supported version requests blocks.
	 * @see https://docs.valence.desire2learn.com/res/apiprop.html#post--d2l-api-versions-check
	 * @return /PSR7 (Request)
	 */
	public function postCheck($supportedVersionRequest)
	{
		$uri = $this->valenceInstance->authenticateUri("d2l/api/versions/check", 'POST');
		return new Request('GET', $uri);
	}
}
