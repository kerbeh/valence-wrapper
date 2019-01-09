<?php

namespace ValenceWrapper\Model\Grade;

use ValenceWrapper\Model\BaseValenceModel;

/**
 * Numeric type Grade Object
 * A grade object describes a single point of assessment for an org unit,
 * containing the parameters within which participants will get assessed.
 * Unlike a GradeValue it includes the Associated Tool for the Grade. I.e. Dropbox or eProtfolio
 * The framework supports the creation of four different types of GradeObjects, each with slightly different properties.
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeObject
 */
class GradeObjectNumeric extends BaseValenceModel {

    /**
     * The MaxPoints field (for grade objects that have one) must have a value that ranges between 0.01 and 9999999999.
     * @var type Dec
     */
    protected $maxPoints;

    /**
     * Select this option if you want to allow users' grades to exceed the maximum points specified for the item.
     * @var Bool
     */
    protected $canExceedMaxPoints;

    /**
     * Bonus items are not included in the maximum points for a category or final grade. They are added on top of the calculated grade.
     * Bonus items cannot make users' grades exceed the maximum points specified, unless the Can Exceed option is selected.
     * @var Bool
     */
    protected $isBonus;

    /**
     * Exclude from the final grade calculation.
     * @var Bool
     */
    protected $excludeFromFinalGradeCalculation;

    /**
     * The GradeScheme field for numeric or pass-fail grade objects should match an existing grade scheme ID for the org unit,
     * but can be null if the grade object has no associated scheme.
     * @var type
     */
    protected $gradeSchemeId = null;

    /**
     * Unique D2L created Id for the Grade Object
     * Do not provide an Id when creating new Grade Objects
     * @var int
     */
    protected $id;

    /**
     * The Name field must not be the same as any current grade object in the org unit’s gradebook.
     * The Name field may not contain any of these characters: / ” * < > + = | , %
     * Both the Name and ShortName field must be 128 unicode characters or fewer in length.
     * @var String
     */
    protected $name;

    /**
     * Enter a short version of the grade item name (or an abbreviation) to display in the grade book to save space.
     * @var type
     */
    protected $shortName;

    /**
     * The type of Grade Item
     * @var String
     */
    protected $gradeType = "Numeric";

    /**
     * The Category that the GRade Object belongs to or 0 if in the root category
     * The CategoryId field should contain a valid category ID value for an existing grade category, or a value of 0.
     * @var Int
     */
    protected $categoryId = 0;

    /**
     * Description is either plain text or HTML and is set as a RichTextInput object
     * @var type ValenceWrapper\Model\Basic\RickTextInput
     */
    protected $description;

    /**
     * Enter the weight (%) that you want the grade item to contribute to the category or final grade.
     * If a grade item is within a category you must specify the weight as a % of the category, not the final grade.
     * E.g. 25% of a category worth 30%
     * @var Bool
     */
    protected $weight;

    /**
     * Intedned for future use
     * @var type
     */
    protected $activityId = null;

    /**
     * Describes the tools the grade item is asscoaited with. I.e. Assignment Folder, Discussions LTI
     * @var Object | Null
     */
    protected $associatedTool;

    public function __construct($numericGrade) {

        $this->maxPoints = (!empty($numericGrade["MaxPoints"])) ? $numericGrade["MaxPoints"] : 0;
        $this->canExceedMaxPoints = (!empty($numericGrade["CanExceedMaxPoints"])) ? $numericGrade["CanExceedMaxPoints"] : TRUE;
        $this->isBonus = (!empty($numericGrade["IsBonus"])) ? $numericGrade["IsBonus"] : FALSE;
        $this->excludeFromFinalGradeCalculation = (!empty($numericGrade["ExcludeFromFinalGradeCalculation"])) ? $numericGrade["ExcludeFromFinalGradeCalculation"] : True;
        $this->gradeSchemeId = (!empty($numericGrade["GradeSchemeId"])) ? $numericGrade["GradeSchemeId"] : NULL;
        $this->id = (!empty($numericGrade["id"])) ? $numericGrade["id"] : null;
        $this->name = (!empty($numericGrade["Name"])) ? $numericGrade["Name"] : "Untitled Grade";
        $this->shortName = (!empty($numericGrade["ShortName"])) ? $numericGrade["ShortName"] : "";
        $this->categoryId = (!empty($numericGrade["CategoryId"])) ? $numericGrade["CategoryId"] : 0;
        $this->description = (!empty($numericGrade["Description"])) ? $numericGrade["Description"] : null;
        $this->weight = (!empty($numericGrade["Weight"])) ? $numericGrade["Weight"] : 0;
        $this->associatedTool = (!empty($numericGrade["AssociatedTool"])) ? $numericGrade["AssociatedTool"] : null;
    }

    public function getMaxPoints() {
        return $this->maxPoints;
    }

    public function getCanExceedMaxPoints() {
        return $this->canExceedMaxPoints;
    }

    public function getIsBonus() {
        return $this->isBonus;
    }

    public function getExcludeFromFinalGradeCalculation() {
        return $this->excludeFromFinalGradeCalculation;
    }

    public function getGradeSchemeId() {
        return $this->gradeSchemeId;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getShortName() {
        return $this->shortName;
    }

    public function getGradeType() {
        return $this->gradeType;
    }

    public function getCategoryId() {
        return $this->categoryId;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getActivityId() {
        return $this->activityId;
    }

    public function getAssociatedTool() {
        return $this->associatedTool;
    }

    public function setMaxPoints(type $maxPoints) {
        $this->maxPoints = $maxPoints;
    }

    public function setCanExceedMaxPoints(Bool $canExceedMaxPoints) {
        $this->canExceedMaxPoints = $canExceedMaxPoints;
    }

    public function setIsBonus(Bool $isBonus) {
        $this->isBonus = $isBonus;
    }

    public function setExcludeFromFinalGradeCalculation(Bool $excludeFromFinalGradeCalculation) {
        $this->excludeFromFinalGradeCalculation = $excludeFromFinalGradeCalculation;
    }

    public function setGradeSchemeId(type $gradeSchemeId) {
        $this->gradeSchemeId = $gradeSchemeId;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName(String $name) {
        $this->name = $name;
    }

    public function setShortName(type $shortName) {
        $this->shortName = $shortName;
    }

    public function setCategoryId(Int $categoryId) {
        $this->categoryId = $categoryId;
    }

    public function setDescription(type $description) {
        $this->description = $description;
    }

    public function setWeight(Bool $weight) {
        $this->weight = $weight;
    }

    public function setActivityId(type $activityId) {
        $this->activityId = $activityId;
    }

    public function setAssociatedTool(Object $associatedTool) {
        $this->associatedTool = $associatedTool;
    }

}
