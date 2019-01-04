<?php

namespace ValenceWrapper;

use D2LAppContextFactory;
use D2LHostSpec;
use GuzzleHttp\Client;

class ValenceInstance {

    const le_version = "1.26";
    const lp_version = "1.18";

    protected $client;

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
     * @param type $userId
     * @param type $userKey
     * @param type $appId
     * @param type $appKey
     */
    public function __construct(HttpClient $client, $userId, $userKey, $appId, $appKey, $host, $port, $protocol) {

        // Create a HTTP client
        $this->client = $client;

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
    public function authenticateUri($route, $verb) {
        $uri = $this->userContext->createAuthenticatedUri($route, $verb);

        return $uri;
    }

    /**
     * Getter for the HTTP client
     * @return Client
     */
    public function getClient() {
        return $this->client;
    }

}
