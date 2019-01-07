<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

/**
 * As with grade objects, the framework handles incoming grade values slightly differently
 * depending upon the grade object type associated with the grade value
 *
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.IncomingGradeValue
 * @author ktrist
 */
class IncomingGradeValueNumeric Extends IncomingGradeValue {

    Const GradeObjectType = 1;

    protected $gradeObjectType;
    protected $pointsNumerator;

    public function __construct($incomingGradeValueNumeric) {
        parent::__construct($incomingGradeValueNumeric);
        $this->pointsNumerator = (!empty($incomingGradeValueNumeric["PointsNumerator"])) ? $incomingGradeValueNumeric["PointsNumerator"] : Null;
        $this->gradeObjectType = self::GradeObjectType;
    }

    public function getGradeObjectType() {
        return $this->gradeObjectType;
    }

    public function getPointsNumerator() {
        return $this->pointsNumerator;
    }

    public function setPointsNumerator($pointsNumerator) {
        $this->pointsNumerator = $pointsNumerator;
    }

}
