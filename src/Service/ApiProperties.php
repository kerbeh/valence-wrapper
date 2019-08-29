<?php
namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;

/**
 * API Properties (versions, logging, authentication) — Developer Platform (September 2019)
 * @see https://docs.valence.desire2learn.com/res/apiprop.html
 */
class ApiProperties
{
    /**
     * Cancel the authentication process.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-auth-api-cancel
     * @return /PSR7 (Request)
     * Return. Expect this action to simply return 403 Forbidden to
     * signify that the calling application is not currently authenticated to use
     * the Framework API.
     */
    public function getD2LAuthApiCancel()
    {
        $uri = "/d2l/auth/api/cancel";
        return new Request('GET', $uri);
    }


    /**
     * Request an authentication token from the Learning System Framework API.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-auth-api-token
     * @return /PSR7 (Request)
     * Input. This route supports the first stage in the
     * ID-key authentication process used to set up an
     * authenticated calling context for further route invocations. Thus, unlike
     * with other routes, you do not provide all the authentication parameters as
     * with other REST API calls; instead, use the query
     * parameters listed here, only.
     *
     * @param [string] $xState Optional. Session state value the back-end service passes back to the trusted URL callback.
     * xState
     * @param [Application ID] $xA Unique Application ID issued by D2L for the calling client application.
     * @param [Application Signature] $xB Application session signature: target URL (not URL encoded) signed with the application key.
     * @param [string] $type Optional. Client application type: mobile or not present.
     * type
     */
    public function getD2LAuthApiToken($xState = null, $xA, $xB, $type = null)
    {
        $queryParrams = [
                            "xState" => $xState,                    "xA" => $xA,                    "xB" => $xB,                    "type" => $type

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/auth/api/token?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve a SOAP services authentication token given an existing calling user context.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-auth-soaptoken
     * @return /PSR7 (Request)
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
     * @param [string] $purpose Token type/request purpose for the underlying service’s token provider.
     */
    public function getAuthSoaptoken($version, $purpose)
    {
        $queryParrams = [
                            "purpose" => $purpose

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/auth/soaptoken?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all current log messages.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-logging-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following you bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting Message data blocks for
     * the segment following your bookmark parameter (or the first segment
     * occuring after your dateRangeStart parameter, if the bookmark is empty or
     * missing).
     *
     * @param [D2LVERSION] $version API version.
     * @param [UTCDateTime] $dateRangeStart Earliest log item to show.
     * @param [UTCDateTime] $dateRangeEnd Latest log item to show.
     * @param [string] $search Optional. Filter logs to those only including this search string.
     * search
     * @param [CSV of LOGLEVEL_Ts] $logLevel Optional. Filter logs to include particular levels of detail.
     * logLevel
     * @param [string] $loggerAssembly Optional. Filter logs to those emitted by a named application assembly.
     * loggerAssembly
     * @param [D2LID] $userId Optional. Filter logs to those related to identified user.
     * userId
     * @param [integer] $messageGroupId Optional. Filter logs to those in identified message group.
     * messageGroupId
     * @param [boolean] $includeTraces Optional. If true, include execution traces in retrieved logs.
     * includeTraces
     * @param [D2LID] $orgUnitId Optional. Filter logs to those related to identified org unit.
     * orgUnitId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getLogging(
        $version,
        $dateRangeStart,
        $dateRangeEnd,
        $search = null,
        $logLevel = null,
        $loggerAssembly = null,
        $userId = null,
        $messageGroupId = null,
        $includeTraces = null,
        $orgUnitId = null,
        $bookmark = null
    ) {
        $queryParrams = [
                            "dateRangeStart" => $dateRangeStart,                    "dateRangeEnd" => $dateRangeEnd,                    "search" => $search,                    "logLevel" => $logLevel,                    "loggerAssembly" => $loggerAssembly,                    "userId" => $userId,                    "messageGroupId" => $messageGroupId,                    "includeTraces" => $includeTraces,                    "orgUnitId" => $orgUnitId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/logging/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all current log arranged in message groups.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-logging-grouped-
     * @return /PSR7 (Request)
     * Input. You can use a bookmark query parameter as a paging offset, to
     * indicate that the service should return the segment of results immediately
     * following you bookmark.
     *
     * Return. This action returns a paged result set
     * containing the resulting MessageGroupSummary
     * data blocks for the segment for the segment following your bookmark parameter.
     *
     * @param [D2LVERSION] $version API version.
     * @param [UTCDateTime] $dateRangeStart Earliest log item to show.
     * @param [UTCDateTime] $dateRangeEnd Latest log item to show.
     * @param [string] $search Optional. Filter logs to those only including this search string.
     * search
     * @param [CSV of LOGLEVEL_Ts] $logLevel Optional. Filter logs to include particular levels of detail.
     * logLevel
     * @param [string] $loggerAssembly Optional. Filter logs to those emitted by a named application assembly.
     * loggerAssembly
     * @param [D2LID] $userId Optional. Filter logs to those related to identified user.
     * userId
     * @param [integer] $messageGroupId Optional. Filter logs to those in identified message group.
     * messageGroupId
     * @param [D2LID] $orgUnitId Optional. Filter logs to those related to identified org unit.
     * orgUnitId
     * @param [string] $bookmark Optional. Bookmark to use for fetching next data set segment.
     * bookmark
     */
    public function getLoggingGrouped(
        $version,
        $dateRangeStart,
        $dateRangeEnd,
        $search = null,
        $logLevel = null,
        $loggerAssembly = null,
        $userId = null,
        $messageGroupId = null,
        $orgUnitId = null,
        $bookmark = null
    ) {
        $queryParrams = [
                            "dateRangeStart" => $dateRangeStart,                    "dateRangeEnd" => $dateRangeEnd,                    "search" => $search,                    "logLevel" => $logLevel,                    "loggerAssembly" => $loggerAssembly,                    "userId" => $userId,                    "messageGroupId" => $messageGroupId,                    "orgUnitId" => $orgUnitId,                    "bookmark" => $bookmark

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/logging/grouped/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve identified log message.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-lp-(version)-logging-(logMessageId)-
     * @return /PSR7 (Request)
     * Return. This action returns a Message JSON
     * block containing the data for the indicated log message.
     *
     * @param [D2LVERSION] $version API version.
     * @param [D2LID] $logMessageId Log message ID.
     * @param [boolean] $includeTraces Optional. If true, include execution traces in retrieved logs.
     * includeTraces
     */
    public function getLoggingLogMessageId($version, $logMessageId, $includeTraces = null)
    {
        $queryParrams = [
                            "includeTraces" => $includeTraces

        ];
        $queryString = http_build_query($queryParrams);
        $uri = "/d2l/api/lp/$version/logging/$logMessageId/?$queryString";
        return new Request('GET', $uri);
    }


    /**
     * Determine if a specific product component supports a particular API version.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-(productCode)-versions-(version)
     * @return /PSR7 (Request)
     * Return. This action returns a SupportedVersion
     * JSON block indicating if the provided product component supports the provided
     * API version.
     *
     * @param [D2LPRODUCT] $productCode Identifier for a Brightspace product component.
     * @param [D2LVERSION] $version API version to query.
     */
    public function getVersionsProductCode($productCode, $version)
    {
        $uri = "/d2l/api/$productCode/versions/$version";
        return new Request('GET', $uri);
    }


    /**
     * Retrieve all supported versions for all product components.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#get--d2l-api-versions-
     * @return /PSR7 (Request)
     * Return. This action returns a JSON array of ProductVersions blocks.
     */
    public function get()
    {
        $uri = "/d2l/api/versions/";
        return new Request('GET', $uri);
    }


    /**
     * Determine the versions supported by the back-end’s Brightspace API.
     * @see https://docs.valence.desire2learn.com/res/apiprop.html#post--d2l-api-versions-check
     * @return /PSR7 (Request)
     * Input. If you want to check the versions supported by a single product
     * component, you provide only a single element in the array you pass.
     *
     * Return. This action returns a BulkSupportedVersionResponse
     * JSON block.
     *
     * @param [Version.SupportedVersionRequest] $supportedVersionRequest Array of supported version requests blocks.
     */
    public function postCheck($supportedVersionRequest)
    {
        $uri = "/d2l/api/versions/check";
        $body = supportedVersionRequest;
        $headers = ["content-type" => 'application/json'];
        return new Request("PUT", $uri, $headers, $body);
    }
}
