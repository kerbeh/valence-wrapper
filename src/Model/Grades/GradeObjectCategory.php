<?php
namespace ValenceWrapper\Model\GradeObjectCategory;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This data block contains a GradeObjectCategoryData
 * block while adding an Id field and a Grades array field:
 * @see https://docs.valence.desire2learn.com#grade-categories
 */
class GradeObjectCategory
{
    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param ShortName
     * @type <string>
     */
    private $ShortName;

    /**
     * @param CanExceedMax
     * @type <boolean>
     */
    private $CanExceedMax;

    /**
     * @param ExcludeFromFinalGrade
     * @type <boolean>
     */
    private $ExcludeFromFinalGrade;

    /**
     * @param StartDate
     * @type <string:UTCDateTime>
     */
    private $StartDate;

    /**
     * @param EndDate
     * @type <string:UTCDateTime>
     */
    private $EndDate;

    /**
     * @param Weight
     * @type <number:decimal>
     */
    private $Weight;

    /**
     * @param MaxPoints
     * @type <number:decimal>
     */
    private $MaxPoints;

    /**
     * @param AutoPoints
     * @type <boolean>
     */
    private $AutoPoints;

    /**
     * @param WeightDistributionType
     * @type <number>
     */
    private $WeightDistributionType;

    /**
     * @param NumberOfHighestToDrop
     * @type <number>
     */
    private $NumberOfHighestToDrop;

    /**
     * @param NumberOfLowestToDrop
     * @type <number>
     */
    private $NumberOfLowestToDrop;


    /**
     * Constructor for GradeObjectCategory
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->ShortName = $attributes["ShortName"];
        $this->CanExceedMax = $attributes["CanExceedMax"];
        $this->ExcludeFromFinalGrade = $attributes["ExcludeFromFinalGrade"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->Weight = $attributes["Weight"];
        $this->MaxPoints = $attributes["MaxPoints"];
        $this->AutoPoints = $attributes["AutoPoints"];
        $this->WeightDistributionType = $attributes["WeightDistributionType"];
        $this->NumberOfHighestToDrop = $attributes["NumberOfHighestToDrop"];
        $this->NumberOfLowestToDrop = $attributes["NumberOfLowestToDrop"];
    }
}
