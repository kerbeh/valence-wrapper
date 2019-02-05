<?php

namespace ValenceWrapper;

use GuzzleHttp\Client;
use ValenceWrapper\Exception\HttpClientException;
use ValenceWrapper\Model\ApiResponse;
use ValenceWrapper\HttpClientInterface;

class GuzzleAdapter implements HttpClientInterface {

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
        $client = new Client;
        try {
            $response = $client->request('POST', $url, ['json' => $json]);
        } catch (HttpClientException $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

        return new ApiResponse($response);
    }

    public function put($url, $json) {

        $client = new Client;
        try {
            $response = $client->request('PUT', $url, ['json' => $json]);
        } catch (HttpClientException $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }

        return new ApiResponse($response);
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
