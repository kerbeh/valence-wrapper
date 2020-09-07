<?php
namespace ValenceWrapper\Model\Capability;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Not that when you see this structure sent to you from the back-end
 * service, it includes a capability ID; when you provide a capability
 * structure in to the service, you should omit this property.
 * @see https://docs.valence.desire2learn.com#Permissions.Capability
 */
class Capability
{
    /**
     * @param CapabilityId
     * @type <string>
     */
    private $CapabilityId;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param ActorRoleId
     * @type <number:D2LID>
     */
    private $ActorRoleId;

    /**
     * @param TargetRoleId
     * @type <number:D2LID>
     */
    private $TargetRoleId;

    /**
     * @param OrgUnitTypeId
     * @type <number:D2LID>
     */
    private $OrgUnitTypeId;


    /**
     * Constructor for Capability
     */
    public function __construct(array $attributes = [])
    {
        $this->CapabilityId = $attributes["CapabilityId"];
        $this->Name = $attributes["Name"];
        $this->ActorRoleId = $attributes["ActorRoleId"];
        $this->TargetRoleId = $attributes["TargetRoleId"];
        $this->OrgUnitTypeId = $attributes["OrgUnitTypeId"];
    }
}
