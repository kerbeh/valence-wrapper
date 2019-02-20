<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use ValenceWrapper\Model\Grade\GradeValue;
use ValenceWrapper\ValenceInstance;
use ValenceWrapper\Model\User\User;
use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;
use ValenceWrapper\Model\Grade\GradeObjectNumeric;
use GuzzleHttp\Psr7\Request;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Assessments {

    protected $le_version;
    protected $valenceInstance;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance::le_version;
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

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/rubrics?$queryString", 'GET');
        return new Request('GET', $uri);
    }

}
