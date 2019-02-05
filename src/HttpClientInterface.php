<?php

namespace ValenceWrapper;

interface HttpClientInterface {

    public function get($url);

    public function concurrentGet($urlArray);

    public function post($url, $json);

    public function put($url, $json);

    public function delete($url);

    public function postMultiPartMixed($url, $file, $json);

    public function postMultiPartFormData($url, $file, $formData);
}
