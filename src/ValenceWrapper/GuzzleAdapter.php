<?php

class GuzzleAdapter implements HttpClient {

    protected $protocol;
    protected $host;
    protected $port;

    public function get($url) {

    }

    public function concurrentGet($urlArray) {

    }

    public function post($url, $json) {

    }

    public function put($url, $json) {

    }

    public function delete($url) {

    }

    public function postMultiPartMixed($url, $file, $json) {

    }

    public function postMultiPartFormData($url, $file, $formData) {

    }

    function setProtocol($protocol) {
        $this->protocol = $protocol;
    }

    function setHost($host) {
        $this->host = $host;
    }

    function setPort($port) {
        $this->port = $port;
    }

}
