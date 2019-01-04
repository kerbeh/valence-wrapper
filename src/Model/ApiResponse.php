<?php

namespace ValenceWrapper\Model;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseValenceModel
 *
 * @author ktrist
 */
class ApiResponse {

    /**
     * Http error codes with D2L Api errors
     * The list in the linked docuemntation is incomplete as 201 is also present
     * @url https://docs.valence.desire2learn.com/basic/apicall.html#id8
     */
    const responseCodes = [
        200 => "OK",
        400 => "Bad Request",
        403 => "Forbidden",
        404 => "Not Found",
        405 => "Method Not Allowed",
        409 => "Conflict",
        415 => "Unsupported Media Type",
        500 => "General service error",
        504 => "Service Error",
    ];

    protected $statusCode;
    protected $contentType;
    protected $body;
    protected $jsonResponse;

    public function __construct($response) {

        $this->statusCode = $response->getStatusCode();
        $this->contentType = $response->getHeaderLine('content-type');
        $this->body = $response->getBody();
        $this->decodeJson($this->body, $this->contentType);
    }

    public function getStatusCode() {
        return $this->statusCode;
    }

    public function getContentType() {
        return $this->contentType;
    }

    public function getBody() {
        return $this->body;
    }

    public function getJsonResponse() {
        return $this->jsonResponse;
    }

    /**
     * If the content type is JSON, decode the json body into a PHP array
     * @param Stream $body
     * @param String $contentType
     */
    protected function decodeJson($body, $contentType) {

        if (strpos($contentType, 'application/json') !== false) {
            $this->jsonResponse = json_decode($this->body, true);
        }
    }

    /**
     * Check if the response is 2XX and set up an exception if not.
     * @param type $response
     * @throws HttpClientException
     */
    protected function checkResponse($response) {

        if (substr($response->getStatusCode(), 0, 1) != 2) {
            throw new HttpClientException($response->getStatusCode(), $response->getHeaderLine('content-type'), $response->getBody(), 0);
        }
    }

}
