<?php

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;

/**
 * Description of GradeObjectCategoryData
 *
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeObjectCategoryData
 * @author ktrist
 */
class GradeObjectCategoryData extends BaseValenceModel {

    /**
     * The Name of the Grade item as dsipalyed to the user
     * Must be unique within the Category
     * @var String
     */
    protected $name;

    /**
     * Shortname of the GradeItem as displayed to the user in the gradebook
     * Must be unique within the category
     * @var String
     */
    protected $shortName;

    /**
     * Set true if you want to allow users' grades for the category to exceed 100%.
     * E.g. 105%
     * @var Bool
     */
    protected $canExceedMax;

    /**
     * Should the category count to the final grade
     * @var type
     */
    protected $excludeFromFinalGrade;

    /**
     * The start date that the grade item is visible from
     * @var ValenceWrapper\Model\Basic\UtcDateTime | NULL
     */
    protected $startDate;

    /**
     * The last date that the grade item is visible.
     * @var ValenceWrapper\Model\Basic\UtcDateTime | NULL
     */
    protected $endDate;

    /**
     * Enter the weight (%) that you want the category to contribute to the final grade.
     * Grade items within the category contribute towards this weight.
     * @var Float
     */
    protected $weight;

    /**
     * The maximum possible score for the category
     * @var Int
     */
    protected $maxPoints;

    /**
     * Automaticly assign points for the grade category.
     * Set to false for manually assigning points
     * @var Bool
     */
    protected $autoPoints;

    /**
     * Set to 1 to Distribute weights by points across all items in the category
     * or Set to 2 Distribute weight evenly across all items
     * Null is manual distribution
     * @var type
     */
    protected $weightDistributionType;

    /**
     * Use this option to drop users' highest grades in the category from their final grade.
     * You can only use this option if all grade items in the category are worth the same amount.
     * @var Int | Null
     */
    protected $numberOfHighestToDrop;

    /**
     * Use this option to drop users' lowest grades in the category from their final grade.
     * You can only use this option if all grade items in the category are worth the same amount.
     * @var Int | Null
     */
    protected $numberOfLowestToDrop;

    public function __construct($gradeObjectCategoryData) {

        $this->name = (!empty($gradeObjectCategoryData["Name"])) ? $gradeObjectCategoryData["Name"] : "Untitled Category";
        $this->shortName = (!empty($gradeObjectCategoryData["ShortName"])) ? $gradeObjectCategoryData["ShortName"] : "";
        $this->canExceedMax = (!empty($gradeObjectCategoryData["CanExceedMax"])) ? $gradeObjectCategoryData["CanExceedMax"] : True;
        $this->excludeFromFinalGrade = (!empty($gradeObjectCategoryData["ExcludeFromFinalGrade"])) ? $gradeObjectCategoryData["ExcludeFromFinalGrade"] : True;
        $this->startDate = (!empty($gradeObjectCategoryData["StartDate"])) ? $gradeObjectCategoryData["StartDate"] : null;
        $this->endDate = (!empty($gradeObjectCategoryData["EndDate"])) ? $gradeObjectCategoryData["EndDate"] : null;
        $this->weight = (!empty($gradeObjectCategoryData["Weight"])) ? $gradeObjectCategoryData["Weight"] : 0;
        $this->maxPoints = (!empty($gradeObjectCategoryData["MaxPoints"])) ? $gradeObjectCategoryData["MaxPoints"] : null;
        $this->autoPoints = (!empty($gradeObjectCategoryData["AutoPoints"])) ? $gradeObjectCategoryData["AutoPoints"] : null;
        $this->weightDistributionType = (!empty($gradeObjectCategoryData["WeightDistributionType"])) ? $gradeObjectCategoryData["WeightDistributionType"] : 0;
        $this->numberOfHighestToDrop = (!empty($gradeObjectCategoryData["NumberOfHighestToDrop"])) ? $gradeObjectCategoryData["NumberOfHighestToDrop"] : 0;
        $this->numberOfLowestToDrop = (!empty($gradeObjectCategoryData["NumberOfLowestToDrop"])) ? $gradeObjectCategoryData["NumberOfLowestToDrop"] : 0;
    }

    public function getName(): String {
        return $this->name;
    }

    public function getShortName(): String {
        return $this->shortName;
    }

    public function getCanExceedMax(): Bool {
        return $this->canExceedMax;
    }

    public function getExcludeFromFinalGrade(): type {
        return $this->excludeFromFinalGrade;
    }

    public function getStartDate(): ValenceWrapper\Model\Basic\UtcDateTime {
        return $this->startDate;
    }

    public function getEndDate(): ValenceWrapper\Model\Basic\UtcDateTime {
        return $this->endDate;
    }

    public function getWeight(): Float {
        return $this->weight;
    }

    public function getMaxPoints(): Int {
        return $this->maxPoints;
    }

    public function getAutoPoints(): Bool {
        return $this->autoPoints;
    }

    public function getWeightDistributionType(): type {
        return $this->weightDistributionType;
    }

    public function getNumberOfHighestToDrop(): Int {
        return $this->numberOfHighestToDrop;
    }

    public function getNumberOfLowestToDrop(): Int {
        return $this->numberOfLowestToDrop;
    }

    public function setName(String $name) {
        $this->name = $name;
    }

    public function setShortName(String $shortName) {
        $this->shortName = $shortName;
    }

    public function setCanExceedMax(Bool $canExceedMax) {
        $this->canExceedMax = $canExceedMax;
    }

    public function setExcludeFromFinalGrade(type $excludeFromFinalGrade) {
        $this->excludeFromFinalGrade = $excludeFromFinalGrade;
    }

    public function setStartDate(ValenceWrapper\Model\Basic\UtcDateTime $startDate) {
        $this->startDate = $startDate;
    }

    public function setEndDate(ValenceWrapper\Model\Basic\UtcDateTime $endDate) {
        $this->endDate = $endDate;
    }

    public function setWeight(Float $weight) {
        $this->weight = $weight;
    }

    public function setMaxPoints(Int $maxPoints) {
        $this->maxPoints = $maxPoints;
    }

    public function setAutoPoints(Bool $autoPoints) {
        $this->autoPoints = $autoPoints;
    }

    public function setWeightDistributionType(type $weightDistributionType) {
        $this->weightDistributionType = $weightDistributionType;
    }

    public function setNumberOfHighestToDrop(Int $numberOfHighestToDrop) {
        $this->numberOfHighestToDrop = $numberOfHighestToDrop;
    }

    public function setNumberOfLowestToDrop(Int $numberOfLowestToDrop) {
        $this->numberOfLowestToDrop = $numberOfLowestToDrop;
    }

}
