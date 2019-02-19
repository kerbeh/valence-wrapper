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
class Grades {

    protected $le_version;
    protected $valenceInstance;

    public function __construct(ValenceInstance $valenceInstance) {
        $this->valenceInstance = $valenceInstance;
        $this->le_version = $valenceInstance::le_version;
    }

    /**
     * Retrieve a specific grade value for a particular user assigned in an org unit.
     * @url https://docs.valence.desire2learn.com/res/grade.html?highlight=displayedgrade#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param type $iserId
     * @return /PSR7 Request
     */
    public function getUserGrade($orgUnitId, $gradeObjectId, $userId) {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId", 'GET');
        return new Request('GET', $uri);
    }

    /**
     * Get a paginated and filtered list of grades for the specified grade object.
     * @url https://docs.valence.desire2learn.com/res/grade.html?highlight=displayedgrade#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param String $searchText String to search the first and last name fields
     * @param String $sort Optional. Sort by firstname, lastname, or grade value (see description).
     * @param Int $pageSize Pagination size defautl and max are 200
     * @param Bool $isGraded If true only return users with a non null grade.
     * @return type
     */
    public function getGrades($orgUnitId, $gradeObjectId, $searchText = "", $sort = "lastname", $pageSize = 200, $isGraded = true) {
        $queryParrams = [
            "searchText" => $searchText,
            "sort" => $sort,
            "pageSize" => $pageSize,
            "isGrade" => $isGraded
        ];

        $queryString = http_build_query($queryParrams);

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/?$queryString", 'GET');
        return new Request('GET', $uri);
    }

    /**
     * Set an individual grade for a grade object
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param type $userId
     * @param IncomingGradeValueNumeric $incomingGradeValue
     * @return Bool //Returns true if the grade was updated or throws an error;
     */
    public function setGradeNumeric($orgUnitId, $gradeObjectId, $userId, IncomingGradeValueNumeric $incomingGradeValue) {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId", "POST");

        $body = $incomingGradeValue->toArray();
        $headers = ["content-type" => 'application/json'];

        return new Request("POST", $uri, $headers, $body);
    }

    public function createGradeObjectNumeric($orgUnitId, GradeObjectNumeric $gradeObjectNumeric) {

        $uri = $this->valenceInstance->authenticateUri("/d2l/api/le/$this->le_version/$orgUnitId/grades/", "POST");
        $body = $gradeObjectNumeric->toArray();
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, json_encode($body));
    }

}
