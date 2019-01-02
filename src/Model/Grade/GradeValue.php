<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace ValenceWrapper\Model\Grade;

/**
 * The framework can provide grade values slightly differently depending upon whether the underlying grade object type is a computable value, or not (basically, only Text (4) grade types are not computable).
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeValue
 * @author ktrist
 */
class GradeValue {

    const NumericType = 1;
    const PassFailType = 2;

    /**
     * D2L defined user UID
     * @var String
     */
    private $userId;

    /**
     * D2L UID for a unit
     * @var String
     */
    private $orgUnitId;

    /**
     * The grade as displayed to the users.
     * May be a letter grade, percentage etc.
     * @var String
     */
    private $displayedGrade;

    /**
     * D2L UID for the grade item
     * @var String
     */
    private $gradeObjectIdentifier;

    /**
     * Pretty Name of the Grade Item
     * @var String
     */
    private $gradeObjectName;

    /**
     * Numeric value of the Grade item type
     * @var Int
     */
    private $gradeObjectType;

    /**
     * Name of the type of grade item i.e. Numeric, Text
     * @var String
     */
    private $gradeObjectTypeName;

    /**
     * Composite of text comments, visible to the student
     * @var String
     */
    private $comments;

    /**
     * Text comments of the grade, visible to graders only
     * @var String
     */
    private $privateComments;

    /**
     * The numerator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    private $pointsNumerator;

    /**
     * The denominator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    private $pointsDenominator;

    /**
     * The weighted denominator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    private $weightedDenominator;

    /**
     * The numerator of the grade
     * Only used in Commputable non text grades
     * @var String
     */
    private $weightedNumerator;

    public function __construct($grade) {

        $this->userId = (!empty($grade[""])) ? $grade[""] : null;
        $this->orgUnitId = (!empty($grade[""])) ? $grade[""] : null;
        $this->displayedGrade = (!empty($grade[""])) ? $grade[""] : null;
        $this->gradeObjectIdentifier = (!empty($grade[""])) ? $grade[""] : null;
        $this->gradeObjectName = (!empty($grade[""])) ? $grade[""] : null;
        $this->gradeObjectType = (!empty($grade[""])) ? $grade[""] : null;
        $this->gradeObjectTypeName = (!empty($grade[""])) ? $grade[""] : null;
        $this->comments = (!empty($grade[""])) ? $grade[""] : null;
        $this->privateComments = (!empty($grade[""])) ? $grade[""] : null;
        $this->pointsNumerator = (!empty($grade[""])) ? $grade[""] : null;
        $this->pointsDenominator = (!empty($grade[""])) ? $grade[""] : null;
        $this->weightedDenominator = (!empty($grade[""])) ? $grade[""] : null;
        $this->weightedNumerator = (!empty($grade[""])) ? $grade[""] : null;
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
