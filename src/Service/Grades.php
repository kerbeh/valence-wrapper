<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use ValenceWrapper\Model\Grade\GradeValue;

/**
 * Description of Grades
 *
 * @author ktrist
 */
class Grades {

    /**
     * Retrieve a specific grade value for a particular user assigned in an org unit.
     * @url https://docs.valence.desire2learn.com/res/grade.html?highlight=displayedgrade#get--d2l-api-le-(version)-(orgUnitId)-grades-(gradeObjectId)-values-(userId)
     * @param type $orgUnitId
     * @param type $gradeObjectId
     * @param type $iserId
     * @return {Object} ValenceWrapper\Model\Grade\GradeValue
     */
    public function getUserGrades($orgUnitId, $gradeObjectId, $userId) {

        $urlStem = "/d2l/api/le/(version)/$orgUnitId/grades/$gradeObjectId/values/$userId";
    }

    /**
     * Retrieve each user’s grade value for a particular grade object.
     * @param type $param
     */
    public function getGrades($orgUnitId, $gradeObjectId) {
        $urlStem = "/d2l/api/le/(version)/$orgUnitId/grades/$gradeObjectId/values/";
    }

}
