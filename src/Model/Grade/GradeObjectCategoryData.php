<?php

namespace ValenceWrapper\Model\Grade;

/**
 * Description of GradeObjectCategoryData
 *
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeObjectCategoryData
 * @author ktrist
 */
class GradeObjectCategoryData {

    private $name;
    private $shortName;
    private $canExceedMax;
    private $excludeFromFinalGrade;
    private $startDate;
    private $endDate;
    private $weight;
    private $maxPoints;
    private $autoPoints;
    private $weightDistributionType;
    private $numberOfHighestToDrop;
    private $numberOfLowestToDrop;

    public function __construct($gradeObjectCategoryData) {

        $this->name = (!empty($gradeObjectCategoryData["Name"])) ? $gradeObjectCategoryData["Name"] : "Untitled Category";
        $this->shortName = (!empty($gradeObjectCategoryData["ShortName"])) ? $gradeObjectCategoryData["ShortName"] : "";
        $this->canExceedMax = (!empty($gradeObjectCategoryData["CanExceedMax"])) ? $gradeObjectCategoryData["CanExceedMax"] : True;
        $this->excludeFromFinalGrade = (!empty($gradeObjectCategoryData["ExcludeFromFinalGrade"])) ? $gradeObjectCategoryData["ExcludeFromFinalGrade"] : True;
        $this->startDate = (!empty($gradeObjectCategoryData["StartDate"])) ? $gradeObjectCategoryData["StartDate"] : null;
        $this->endDate = (!empty($gradeObjectCategoryData["EndDate"])) ? $gradeObjectCategoryData["EndDate"] : null;
        $this->weight = (!empty($gradeObjectCategoryData["Weight"])) ? $gradeObjectCategoryData["Weight"] : null;
        $this->maxPoints = (!empty($gradeObjectCategoryData["MaxPoints"])) ? $gradeObjectCategoryData["MaxPoints"] : null;
        $this->autoPoints = (!empty($gradeObjectCategoryData["AutoPoints"])) ? $gradeObjectCategoryData["AutoPoints"] : null;
        $this->weightDistributionType = (!empty($gradeObjectCategoryData["WeightDistributionType"])) ? $gradeObjectCategoryData["WeightDistributionType"] : null;
        $this->numberOfHighestToDrop = (!empty($gradeObjectCategoryData["NumberOfHighestToDrop"])) ? $gradeObjectCategoryData["NumberOfHighestToDrop"] : null;
        $this->numberOfLowestToDrop = (!empty($gradeObjectCategoryData["NumberOfLowestToDrop"])) ? $gradeObjectCategoryData["NumberOfLowestToDrop"] : null;
    }

}
