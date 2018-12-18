<?php

namespace ValenceWrapper\Model\Grade;

/**
 * Numeric type Grade Object
 * A grade object describes a single point of assessment for an org unit,
 * containing the parameters within which participants will get assessed.
 * The framework supports the creation of four different types of GradeObjects, each with slightly different properties.
 * @url https://docs.valence.desire2learn.com/res/grade.html#Grade.GradeObject
 */
class Numeric {

    /**
     * The MaxPoints field (for grade objects that have one) must have a value that ranges between 0.01 and 9999999999.
     * @var type Dec
     */
    private $maxPoints;
    private $canExceedMaxPoints;
    private $isBonus;
    private $excludeFromFinalGradeCalculation;

    /**
     * The GradeScheme field for numeric or pass-fail grade objects should match an existing grade scheme ID for the org unit,
     * but can be null if the grade object has no associated scheme.
     * @var type
     */
    private $gradeSchemeId = null;

    /**
     * Unique D2L created Id for the Grade Object
     * Do not provide an Id when creating new Grade Objects
     * @var int
     */
    private $id;

    /**
     * The Name field must not be the same as any current grade object in the org unit’s gradebook.
     * The Name field may not contain any of these characters: / ” * < > + = | , %
     * Both the Name and ShortName field must be 128 unicode characters or fewer in length.
     * @var String
     */
    private $name;
    private $shortName;
    private $gradeType;

    /**
     * The Category that the GRade Object belongs to or 0 if in the root category
     * The CategoryId field should contain a valid category ID value for an existing grade category, or a value of 0.
     * @var Int
     */
    private $categoryId = 0;

    /**
     * Description is either plain text or HTML and is set as a RichTextInput object
     * @var type ValenceWrapper\Model\Basic\RickTextInput
     */
    private $description;
    private $gradeSchemeUrl;
    private $weight;

    /**
     * Intedned for future use
     * @var type
     */
    private $activityId = null;

    /**
     * Describes the tools teh grade item is asscoaited with. I.e. Assignment Folder, Discussions LTI
     * @var type
     */
    private $associatedTool;

    public function __construct($numericGrade) {


        $this->maxPoints = (!empty($numericGrade["maxPoints"])) ? $numericGrade["maxPoints"] : null;
        $this->canExceedMaxPoints = (!empty($numericGrade["canExceedMaxPoints"])) ? $numericGrade["canExceedMaxPoints"] : null;
        $this->isBonus = (!empty($numericGrade["isBonus"])) ? $numericGrade["isBonus"] : null;
        $this->excludeFromFinalGradeCalculation = (!empty($numericGrade["excludeFromFinalGradeCalculation"])) ? $numericGrade["excludeFromFinalGradeCalculation"] : null;
        $this->gradeSchemeId = (!empty($numericGrade["gradeSchemeId"])) ? $numericGrade["gradeSchemeId"] : null;
        $this->id = (!empty($numericGrade["id"])) ? $numericGrade["id"] : null;
        $this->name = (!empty($numericGrade["name"])) ? $numericGrade["name"] : null;
        $this->shortName = (!empty($numericGrade["shortName"])) ? $numericGrade["shortName"] : null;
        $this->gradeType = (!empty($numericGrade["gradeType"])) ? $numericGrade["gradeType"] : null;
        $this->categoryId = (!empty($numericGrade["categoryId"])) ? $numericGrade["categoryId"] : null;
        $this->description = (!empty($numericGrade["description"])) ? $numericGrade["description"] : null;
        $this->gradeSchemeUrl = (!empty($numericGrade["gradeSchemeUrl"])) ? $numericGrade["gradeSchemeUrl"] : null;
        $this->weight = (!empty($numericGrade["weight"])) ? $numericGrade["weight"] : null;
        $this->activityId = (!empty($numericGrade["activityId"])) ? $numericGrade["activityId"] : null;
        $this->associatedTool = (!empty($numericGrade["associatedTool"])) ? $numericGrade["associatedTool"] : null;
    }

}
