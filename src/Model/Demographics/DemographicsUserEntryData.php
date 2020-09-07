<?php
namespace ValenceWrapper\Model\DemographicsUserEntryData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Demographics.DemographicsUserEntryData
 */
class DemographicsUserEntryData
{
    /**
     * @param UserId
     * @type <number:D2LID>
     */
    private $UserId;


    /**
     * Constructor for DemographicsUserEntryData
     */
    public function __construct(array $attributes = [])
    {
        $this->UserId = $attributes["UserId"];
    }
}
