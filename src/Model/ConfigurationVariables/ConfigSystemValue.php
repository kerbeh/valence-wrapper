<?php
namespace ValenceWrapper\Model\ConfigSystemValue;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Describes the configuration variable assigned for the system instance.
 * @see https://docs.valence.desire2learn.com#ConfigVariable.ConfigSystemValue
 */
class ConfigSystemValue
{
    /**
     * @param SystemValue
     * @type <string>
     */
    private $SystemValue;


    /**
     * Constructor for ConfigSystemValue
     */
    public function __construct(array $attributes = [])
    {
        $this->SystemValue = $attributes["SystemValue"];
    }
}
