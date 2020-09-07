<?php
namespace ValenceWrapper\Model\UpdateStatus;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action to update a tool status, you should provide a JSON
 * block like this:
 * @see https://docs.valence.desire2learn.com#Tools.UpdateStatus
 */
class UpdateStatus
{
    /**
     * @param Status
     * @type <boolean>
     */
    private $Status;


    /**
     * Constructor for UpdateStatus
     */
    public function __construct(array $attributes = [])
    {
        $this->Status = $attributes["Status"];
    }
}
