<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Assessments extends ValenceVersion {

    public function __construct() {

    }

    /**
     * Retrieve rubrics for an object in an org unit.
     * @ https://docs.valence.desire2learn.com/res/assessment.html#get--d2l-api-le-(version)-(orgUnitId)-rubrics
     * @param int $orgUnitId
     * @param string $objectType
     * @param int $objectId
     * @return PSR7 Request
     */
    public function getRubricRequest($orgUnitId, $objectType, $objectId) {

        $queryParrams = [
            'objectType' => $objectType,
            'objectId' => $objectId,
        ];

        $queryString = http_build_query($queryParrams);

        $this->le_version = 'unstable';

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/rubrics?$queryString";
        return new Request('GET', $uri);
    }

}
