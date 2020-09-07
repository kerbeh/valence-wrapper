<?php
namespace ValenceWrapper\Model\OrgUnitType;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Actions that retrieve Org Unit Type information from the service receive
 * blocks that look like this:
 * @see https://docs.valence.desire2learn.com#org-unit-types
 */
class OrgUnitType
{
    /**
     * @param Permissions
     * @type { <composite:OrgUnit.Permissions> }
     */
    private $Permissions;

    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Code
     * @type <string>
     */
    private $Code;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param SortOrder
     * @type <number>
     */
    private $SortOrder;


    /**
     * Constructor for OrgUnitType
     */
    public function __construct(array $attributes = [])
    {
        $this->Permissions = $attributes["Permissions"];
        $this->Id = $attributes["Id"];
        $this->Code = $attributes["Code"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->SortOrder = $attributes["SortOrder"];
    }
}
