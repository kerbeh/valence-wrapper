<?php
namespace ValenceWrapper\Model\OverallLevel;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Note that these properties require a RichText object.
 * @see https://docs.valence.desire2learn.com#Rubric.OverallLevel
 */
class OverallLevel
{
    /**
     * @param Feedback
     * @type { <composite:RichText> }
     */
    private $Feedback;

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
     * @param RangeStart
     * @type <number:decimal>
     */
    private $RangeStart;

    /**
     * @param Description
     * @type { <composite:RichText> }
     */
    private $Description;


    /**
     * Constructor for OverallLevel
     */
    public function __construct(array $attributes = [])
    {
        $this->Feedback = $attributes["Feedback"];
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->RangeStart = $attributes["RangeStart"];
        $this->Description = $attributes["Description"];
    }
}
