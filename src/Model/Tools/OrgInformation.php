<?php
namespace ValenceWrapper\Model\OrgInformation;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you make a query about a tool’s information at the organization level
 * (tool status, or its OUDefault property), the service provides a JSON block
 * like this:
 * @see https://docs.valence.desire2learn.com#organization
 */
class OrgInformation
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
     * @param OrgId
     * @type <number:D2LID>
     */
    private $OrgId;

    /**
     * @param Status
     * @type <boolean>
     */
    private $Status;

    /**
     * @param OUDefault
     * @type <boolean>
     */
    private $OUDefault;


    /**
     * Constructor for OrgInformation
     */
    public function __construct(array $attributes = [])
    {
        $this->ToolId = $attributes["ToolId"];
        $this->DisplayName = $attributes["DisplayName"];
        $this->OrgId = $attributes["OrgId"];
        $this->Status = $attributes["Status"];
        $this->OUDefault = $attributes["OUDefault"];
    }
}
