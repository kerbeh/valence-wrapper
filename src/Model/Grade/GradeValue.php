<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * The framework can provide grade values slightly differently depending upon whether the underlying grade object type is a computable value, or not (basically, only Text (4) grade types are not computable).
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeValue
 * @author ktrist
 */
class GradeValue Extends BaseValenceModel {

    const NumericType = 1;
    const PassFailType = 2;

    /**
     * D2L defined user UID
     * @var String
     */
    protected $userId;

    /**
     * D2L UID for a unit
     * @var String
     */
    protected $orgUnitId;

    /**
     * The grade as displayed to the users.
     * May be a letter grade, percentage etc.
     * @var String
     */
    protected $displayedGrade;

    /**
     * D2L UID for the grade item
     * @var String
     */
    protected $gradeObjectIdentififier;

    /**
     * Pretty Name of the Grade Item
     * @var String
     */
    protected $gradeObjectName;

    /**
     * Numeric value of the Grade item type
     * @var Int
     */
    protected $gradeObjectType;

    /**
     * Name of the type of grade item i.e. Numeric, Text
     * @var String
     */
    protected $gradeObjectTypeName;

    /**
     * Composite of text comments, visible to the student
     * @var String
     */
    protected $comments;

    /**
     * Text comments of the grade, visible to graders only
     * @var String
     */
    protected $privateComments;

    /**
     * The numerator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    protected $pointsNumerator;

    /**
     * The denominator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    protected $pointsDenominator;

    /**
     * The weighted denominator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    protected $weightedDenominator;

    /**
     * The numerator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    protected $weightedNumerator;

    public function __construct($grade) {

        $this->userId = (!empty($grade["UserId"])) ? $grade["UserId"] : null;
        $this->orgUnitId = (!empty($grade["OrgUnitId"])) ? $grade["OrgUnitId"] : null;
        $this->displayedGrade = (!empty($grade["DisplayedGrade"])) ? $grade["DisplayedGrade"] : null;
        $this->gradeObjectIdentififier = (!empty($grade["GradeObjectIdentififier"])) ? $grade["GradeObjectIdentififier"] : null;
        $this->gradeObjectName = (!empty($grade["GradeObjectName"])) ? $grade["GradeObjectName"] : null;
        $this->gradeObjectType = (!empty($grade["GradeObjectType"])) ? $grade["GradeObjectType"] : null;
        $this->gradeObjectTypeName = (!empty($grade["GradeObjectTypeName"])) ? $grade["GradeObjectTypeName"] : null;
        $this->comments = (!empty($grade["Comments"])) ? $grade["Comments"] : null;
        $this->privateComments = (!empty($grade["PrivateComments"])) ? $grade["PrivateComments"] : null;
        $this->pointsNumerator = (!empty($grade["PointsNumerator"])) ? $grade["PointsNumerator"] : null;
        $this->pointsDenominator = (!empty($grade["PointsDenominator"])) ? $grade["PointsDenominator"] : null;
        $this->weightedDenominator = (!empty($grade["WeightedDenominator"])) ? $grade["WeightedDenominator"] : null;
        $this->weightedNumerator = (!empty($grade["WeightedNumerator"])) ? $grade["WeightedNumerator"] : null;
    }

    public function getUserId(): String {
        return $this->userId;
    }

    public function getOrgUnitId(): String {
        return $this->orgUnitId;
    }

    public function getDisplayedGrade(): String {
        return $this->displayedGrade;
    }

    public function getGradeObjectIdentifier(): String {
        return $this->gradeObjectIdentifier;
    }

    public function getGradeObjectName(): String {
        return $this->gradeObjectName;
    }

    public function getGradeObjectType(): Int {
        return $this->gradeObjectType;
    }

    public function getGradeObjectTypeName(): String {
        return $this->gradeObjectTypeName;
    }

    public function getComments(): String {
        return $this->comments;
    }

    public function getPrivateComments(): String {
        return $this->privateComments;
    }

    public function getPointsNumerator(): String {
        return $this->pointsNumerator;
    }

    public function getPointsDenominator(): String {
        return $this->pointsDenominator;
    }

    public function getWeightedDenominator(): String {
        return $this->weightedDenominator;
    }

    public function getWeightedNumerator(): String {
        return $this->weightedNumerator;
    }

}
