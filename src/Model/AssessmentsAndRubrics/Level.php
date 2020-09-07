<?php
namespace ValenceWrapper\Model\Level;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Rubric.Level
 */
class Level
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
     * @param Points
     * @type <number:decimal>
     */
    private $Points;


    /**
     * Constructor for Level
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->Points = $attributes["Points"];
    }
}
