<?php

namespace ValenceWrapper;

use GuzzleHttp\Client;
use ValenceWrapper\Exception\HttpClientException;
use ValenceWrapper\Model\ApiResponse;

class GuzzleAdapter implements HttpClient {

    protected $protocol;
    protected $host;
    protected $port;

    public function get($url) {
        $client = new Client;

        try {
            $response = $client->request('GET', $url);
        } catch (HttpClientException $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

        return new ApiResponse($response);
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

    public function setProtocol($protocol) {
        $this->protocol = $protocol;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function setPort($port) {
        $this->port = $port;
    }

}
