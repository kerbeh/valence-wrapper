<?php
namespace ValenceWrapper\Model\AssociatedTool;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Included in grade objects to indicate the underlying tool and
 * tool item associated with the grade object.
 * @see https://docs.valence.desire2learn.com#Grade.AssociatedTool
 */
class AssociatedTool
{
    /**
     * @param ToolId
     * @type <number:D2LID>
     */
    private $ToolId;

    /**
     * @param ToolItemId
     * @type <number:D2LID>
     */
    private $ToolItemId;


    /**
     * Constructor for AssociatedTool
     */
    public function __construct(array $attributes = [])
    {
        $this->ToolId = $attributes["ToolId"];
        $this->ToolItemId = $attributes["ToolItemId"];
    }
}
