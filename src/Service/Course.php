<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\Model\Course\CreateCopyJobRequest;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class Course extends ValenceVersion {

    protected $valenceInstance;

    public function __construct() {

    }

    /**
     * Return a psr7 request to add a course copy job to the queue
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-copy-
     * @return Request
     * @since LMS 20.19.6.
     */
    public function enqueueCourseCopy($orgUnitId, CreateCopyJobRequest $copyJobRequest) {


        $body = $copyJobRequest->toArray();
        $headers = ["content-type" => 'application/json'];

        $uri = "/d2l/api/le/$this->le_version/import/$orgUnitId/copy/";

        return new Request("POST", $uri, $headers, json_encode($body));
    }

}
