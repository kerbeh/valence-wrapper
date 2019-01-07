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
        $urlStem = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/";
        $urlQuery = http_build_query([
            "searchText" => $searchText,
            "sort" => $sort,
            "pageSize" => $pageSize,
            "isGrade" => $isGraded
        ]);

        $apiResponse = $this->httpClient->get($this->valenceInstance->authenticateUri("$urlStem?$urlQuery", "GET"));
        $compositeUserGradesArray = array_map(function($userGrade) {
            return [
                new User($userGrade["User"]),
                new GradeValue($userGrade["GradeValue"])
            ];
        }, $apiResponse->getJsonResponse()["Objects"]);

        return $compositeUserGradesArray;
    }

    /**
     *
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param type $userId
     * @param IncomingGradeValueNumeric $incomingGradeValue
     * @return Bool //Returns true if the grade was updated or throws an error;
     */
    public function setGradeNumeric($orgUnitId, $gradeObjectId, $userId, IncomingGradeValueNumeric $incomingGradeValue) {
        $urlStem = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId";

        $json = $incomingGradeValue->toArray();
        $apiResponse = $this->httpClient->put($this->valenceInstance->authenticateUri($urlStem, "PUT"), $json);

        return ($apiResponse->getStatusCode() == 200) ? TRUE : FALSE;
    }

}
