<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use ValenceWrapper\Model\Grade\GradeValue;
use ValenceWrapper\ValenceInstance;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Grades {

    protected $le_version;
    protected $valenceInstance;
    protected $httpClient;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance::le_version;
        $this->httpClient = $this->valenceInstance->getClient();
    }

    /**
     * Retrieve a specific grade value for a particular user assigned in an org unit.
     * @url https://docs.valence.desire2learn.com/res/grade.html?highlight=displayedgrade#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param type $iserId
     * @return {Object} ValenceWrapper\Model\Grade\GradeValue
     */
    public function getUserGrade($orgUnitId, $gradeObjectId, $userId) {
        $urlStem = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId";
        $apiResponse = $this->httpClient->get($this->valenceInstance->authenticateUri($urlStem, "GET"));
        $gradeValue = new GradeValue($apiResponse->getJsonResponse());
        return $gradeValue;
    }

    /**
     * @url https://docs.valence.desire2learn.com/res/grade.html?highlight=displayedgrade#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @return string
     */
    public function getGrades($orgUnitId, $gradeObjectId) {
        $urlStem = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/";

        $apiResponse = $this->httpClient->get($this->valenceInstance->authenticateUri($urlStem, "GET"));
        return $apiResponse->getJsonResponse();
    }

}
