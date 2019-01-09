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

    public function getUserId() {
        return $this->userId;
    }

    public function getOrgUnitId() {
        return $this->orgUnitId;
    }

    public function getDisplayedGrade() {
        return $this->displayedGrade;
    }

    public function getGradeObjectIdentifier() {
        return $this->gradeObjectIdentifier;
    }

    public function getGradeObjectName() {
        return $this->gradeObjectName;
    }

    public function getGradeObjectType() {
        return $this->gradeObjectType;
    }

    public function getGradeObjectTypeName() {
        return $this->gradeObjectTypeName;
    }

    public function getComments() {
        return $this->comments;
    }

    public function getPrivateComments() {
        return $this->privateComments;
    }

    public function getPointsNumerator() {
        return $this->pointsNumerator;
    }

    public function getPointsDenominator() {
        return $this->pointsDenominator;
    }

    public function getWeightedDenominator() {
        return $this->weightedDenominator;
    }

    public function getWeightedNumerator() {
        return $this->weightedNumerator;
    }

    public function setUserId(String $userId) {
        $this->userId = $userId;
    }

    public function setOrgUnitId(String $orgUnitId) {
        $this->orgUnitId = $orgUnitId;
    }

    public function setDisplayedGrade(String $displayedGrade) {
        $this->displayedGrade = $displayedGrade;
    }

    public function setGradeObjectIdentififier(String $gradeObjectIdentififier) {
        $this->gradeObjectIdentififier = $gradeObjectIdentififier;
    }

    public function setGradeObjectName(String $gradeObjectName) {
        $this->gradeObjectName = $gradeObjectName;
    }

    public function setGradeObjectType(Int $gradeObjectType) {
        $this->gradeObjectType = $gradeObjectType;
    }

    public function setGradeObjectTypeName(String $gradeObjectTypeName) {
        $this->gradeObjectTypeName = $gradeObjectTypeName;
    }

    public function setComments(String $comments) {
        $this->comments = $comments;
    }

    public function setPrivateComments(String $privateComments) {
        $this->privateComments = $privateComments;
    }

    public function setPointsNumerator(String $pointsNumerator) {
        $this->pointsNumerator = $pointsNumerator;
    }

    public function setPointsDenominator(String $pointsDenominator) {
        $this->pointsDenominator = $pointsDenominator;
    }

    public function setWeightedDenominator(String $weightedDenominator) {
        $this->weightedDenominator = $weightedDenominator;
    }

    public function setWeightedNumerator(String $weightedNumerator) {
        $this->weightedNumerator = $weightedNumerator;
    }

}
