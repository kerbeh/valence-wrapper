<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Model\Course\CreateCopyJobRequest;

/**
 * Description of Grades
 *
 * @author ktrist
 */
Class Course {

    protected $le_version;
    protected $valenceInstance;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance->le_version;
    }

    /**
     * Return a psr7 request to add a course copy job to the queue
     * @see https://docs.valence.desire2learn.com/res/course.html#post--d2l-api-le-(version)-import-(orgUnitId)-copy-
     * @return Request
     */
    public function enqueueCourseCopy($orgUnitId, CreateCopyJobRequest $copyJobRequest) {

        $le_version = $this->le_version;

        $body = $copyJobRequest->toArray();
        $headers = ["content-type" => 'application/json'];

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$le_version/import/$orgUnitId/copy/", 'POST');

        return new Request("POST", $uri, $headers, json_encode($body));
    }

}
