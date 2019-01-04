<?php

namespace ValenceWrapper\Exception;

use Exception;

/**
 * Custom exception class to handle restful Http exceptions
 */
class HttpClientException extends Exception {

    /**
     * The response code of the excepted Http request
     * @var Int
     */
    protected $statusCode;

    /**
     * The content type of the excepted Http request.
     * As specified in the header content type line
     * @var String
     */
    protected $contentType;

    /**
     * The body of the excepted Http request.
     * @var String
     */
    protected $body;

// Redefine the exception so message isn't optional
    public function __construct($statusCode, $contentType, $body, $code = 0, Exception $previous = null) {


        $this->statusCode = $statusCode;
        $this->headerLineContentType = $contentType;
        $this->body = $body;

        $this->message = "The server was unable to compelte the request. The server responded: $this->body";

        parent::__construct($this->message, $code, $previous);
    }

    public function getStatusCode() {
        return $this->statusCode;
    }

    public function getContentType() {
        return $this->headerLineContentType;
    }

    public function getBody() {
        return $this->body;
    }

}
