<?php
namespace ValenceWrapper\Model\GradeSetupInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#grade-setup
 */
class GradeSetupInfo
{
    /**
     * @param GradingSystem
     * @type <string:GRADINGSYSTEM_T>
     */
    private $GradingSystem;

    /**
     * @param IsNullGradeZero
     * @type <boolean>
     */
    private $IsNullGradeZero;

    /**
     * @param DefaultGradeSchemeId
     * @type <number:D2LID>
     */
    private $DefaultGradeSchemeId;


    /**
     * Constructor for GradeSetupInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->GradingSystem = $attributes["GradingSystem"];
        $this->IsNullGradeZero = $attributes["IsNullGradeZero"];
        $this->DefaultGradeSchemeId = $attributes["DefaultGradeSchemeId"];
    }
}
