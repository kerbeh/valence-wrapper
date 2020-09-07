<?php
namespace ValenceWrapper\Model\GradeStatisticsInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#grade-statistics
 */
class GradeStatisticsInfo
{
    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param GradeObjectId
     * @type <number:D2LID>
     */
    private $GradeObjectId;

    /**
     * @param Minimum
     * @type <number:decimal>
     */
    private $Minimum;

    /**
     * @param Maximum
     * @type <number:decimal>
     */
    private $Maximum;

    /**
     * @param Average
     * @type <number:decimal>
     */
    private $Average;

    /**
     * @param Median
     * @type <number:decimal>
     */
    private $Median;

    /**
     * @param StandardDeviation
     * @type <number:decimal>
     */
    private $StandardDeviation;


    /**
     * Constructor for GradeStatisticsInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->GradeObjectId = $attributes["GradeObjectId"];
        $this->Minimum = $attributes["Minimum"];
        $this->Maximum = $attributes["Maximum"];
        $this->Average = $attributes["Average"];
        $this->Median = $attributes["Median"];
        $this->StandardDeviation = $attributes["StandardDeviation"];
    }
}
