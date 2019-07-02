<?php

namespace ValenceWrapper;

use GuzzleHttp\Psr7\Request;

class OauthValenceInstance {

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
     * Oauth Bearertoken to authenticate requests
     * @var String
     */
    protected $token;

    /*
     *
     */

    public function __construct($host, $token, $port = 443, $protocol = "HTTPS") {
        $this->host = $host;
        $this->port = $port;
        $this->protocol = $protocol;
        $this->token = $token;
    }

    public function authenticateRequest(Request $request) {

        return $request->withAddedHeader('Authorization', "Bearer $this->token");
    }

}
