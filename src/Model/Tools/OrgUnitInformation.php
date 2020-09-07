<?php
namespace ValenceWrapper\Model\OrgUnitInformation;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you make a query about a tool’s status at the org unit level, the service
 * provides a JSON block like this:
 * @see https://docs.valence.desire2learn.com#org-units
 */
class OrgUnitInformation
{
    /**
     * @param ToolId
     * @type <string:D2LID>
     */
    private $ToolId;

    /**
     * @param DisplayName
     * @type <string>
     */
    private $DisplayName;

    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param Status
     * @type <boolean>
     */
    private $Status;

    /**
     * @param CustomNavbarName
     * @type <string>
     */
    private $CustomNavbarName;


    /**
     * Constructor for OrgUnitInformation
     */
    public function __construct(array $attributes = [])
    {
        $this->ToolId = $attributes["ToolId"];
        $this->DisplayName = $attributes["DisplayName"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->Status = $attributes["Status"];
        $this->CustomNavbarName = $attributes["CustomNavbarName"];
    }
}
