<?php

namespace ValenceWrapper;

use D2LAppContextFactory;
use D2LHostSpec;
use ValenceWrapper\RequestFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use ValenceWrapper\Traits;

class ValenceInstance {

    const le_version = "1.26";
    const lp_version = "1.18";

    protected $le_version = "1.26";

    /**
     * Contains the server connection information
     *
     * @var hostSpec
     */
    protected $hostSpec;

    /**
     * Object containing the application context and authentication
     * @var appContext
     */
    protected $appContext;

    /**
     * Object containing the user context and authentication
     * @var userContext
     */
    protected $userContext;

    /**
     * The protocol the api is using HTTP/HTTPS
     * @var String
     */
    protected $protocol;

    /**
     * The hostname of the server the api is running on
     * @var String
     */
    protected $host;

    /**
     * The port number the server replies on for the specified protocol
     * @var Int
     */
    protected $port;

    /**
     * Constructor to build the App and User contexts as well as prepare a http client
     * @param \ValenceWrapper\ValenceApi\HttpClient $client
     * @param \ValenceWrapper\RequestFactory; $requestFactory
     * @param type $userId
     * @param type $userKey
     * @param type $appId
     * @param type $appKey
     */
    public function __construct($userId, $userKey, $appId, $appKey, $host, $port, $protocol) {

// Create hostSpec
        $this->hostSpec = new D2LHostSpec($host, $port, strtolower($protocol));

// Create appContext
        $this->appContext = $this->setAppContext($appId, $appKey);

// Create userContext
        $this->userContext = $this->setUserContext($this->appContext, $this->hostSpec, $userId, $userKey);
    }

    /**
     * Create a user context from  the provided user Id and Key
     * @param type $appContext
     * @param type $hostSpec
     * @param type $userId
     * @param type $userKey
     * @return userContext
     */
    protected function setUserContext($appContext, $hostSpec, $userId, $userKey) {

        $userContext = $appContext->createUserContextFromHostSpec($hostSpec, $userId, $userKey);

        return $userContext;
    }

    /**
     * Create an application context form the provided App Id and Key
     * @param type $appId
     * @param type $appKey
     * @return type
     */
    protected function setAppContext($appId, $appKey) {

        $appContextFactory = new D2LAppContextFactory();
        $appContext = $appContextFactory->createSecurityContext($appId, $appKey);

        return $appContext;
    }

    /**
     * Adds signed query parameters to an API request URL and verb
     *
     * @param type $route
     * @param type $verb
     * @return String
     */
    public function authenticateUri($route, $method) {
        $uri = $this->userContext->createAuthenticatedUri($route, $method);

        return $uri;
    }

    /**
     *
     * @param type $uri
     * @param type $method
     * @return type
     */
    protected function createRequest($uri, $method) {
        $signedUri = $this->authenticateUri($uri, $method);
        return $this->requestFactory->createRequest(stringtoupper($method), $signedUri);
    }

    public function getGrades($orgUnitId, $gradeObjectId, $searchText = "", $sort = "lastname", $pageSize = 200, $isGraded = true) {

        $urlStem = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/";
        $urlQuery = http_build_query([
            "searchText" => $searchText,
            "sort" => $sort,
            "pageSize" => $pageSize,
            "isGrade" => $isGraded
        ]);

        $this->requestFactory->createRequest('get', "$urlStem?$urlQuery");
    }

}
