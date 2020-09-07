<?php
namespace ValenceWrapper\Model\Rubric;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Defines a rubric in the abstract, without any attached assessment.
 * @see https://docs.valence.desire2learn.com#Rubric.Rubric
 */
class Rubric
{
    /**
     * @param RubricId
     * @type <number:D2LID>
     */
    private $RubricId;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type
     */
    private $Description;

    /**
     * @param RubricType
     * @type <number:RUBRIC_T>
     */
    private $RubricType;

    /**
     * @param ScoringMethod
     * @type <number:SCORING_M>
     */
    private $ScoringMethod;


    /**
     * Constructor for Rubric
     */
    public function __construct(array $attributes = [])
    {
        $this->RubricId = $attributes["RubricId"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->RubricType = $attributes["RubricType"];
        $this->ScoringMethod = $attributes["ScoringMethod"];
    }
}
