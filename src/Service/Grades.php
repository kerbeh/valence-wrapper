<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Service;

use ValenceWrapper\Model\Grade\IncomingGradeValueNumeric;
use ValenceWrapper\Model\Grade\GradeObjectNumeric;
use GuzzleHttp\Psr7\Request;
use ValenceWrapper\ValenceVersion;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Grades extends ValenceVersion {

    public function __construct() {

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

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId";
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
    public function getGradeValues($orgUnitId, $gradeObjectId, $searchText = "", $sort = "lastname", $pageSize = 200, $isGraded = true) {
        $queryParrams = [
            "searchText" => $searchText,
            "sort" => $sort,
            "pageSize" => $pageSize,
            "isGrade" => $isGraded
        ];

        $queryString = http_build_query($queryParrams);

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/?$queryString";
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

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId/values/$userId";

        $body = $incomingGradeValue->toArray();
        $headers = ["content-type" => 'application/json'];

        return new Request("PUT", $uri, $headers, json_encode($body));
    }

    public function createGradeObjectNumeric($orgUnitId, GradeObjectNumeric $gradeObjectNumeric) {

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/";
        $body = $gradeObjectNumeric->toArray();
        $headers = ["content-type" => 'application/json'];
        return new Request("POST", $uri, $headers, json_encode($body));
    }

    /**
     *
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-
     * @param type $orgUnitId
     * @return Request
     */
    public function getGradeObjects($orgUnitId) {

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/";
        return new Request('GET', $uri);
    }

    /**
     *
     * @see https://docs.valence.desire2learn.com/res/grade.html#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)
     * @param Int $orgUnitId
     * @param Int $gradeObjectId
     * @return Request
     */
    public function getGradeObject($orgUnitId, $gradeObjectId) {

        $uri = "/d2l/api/le/$this->le_version/$orgUnitId/grades/$gradeObjectId";
        return new Request('GET', $uri);
    }

}
