<?php
namespace ValenceWrapper\Model\ClaimGrant;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Permissions.ClaimGrant
 */
class ClaimGrant
{
    /**
     * @param GrantId
     * @type <string>
     */
    private $GrantId;

    /**
     * @param ClaimId
     * @type <string>
     */
    private $ClaimId;

    /**
     * @param RoleId
     * @type <number:D2LID>
     */
    private $RoleId;

    /**
     * @param OrgUnitTypeId
     * @type <number:D2LID>
     */
    private $OrgUnitTypeId;

    /**
     * @param Allowed
     * @type <boolean>
     */
    private $Allowed;


    /**
     * Constructor for ClaimGrant
     */
    public function __construct(array $attributes = [])
    {
        $this->GrantId = $attributes["GrantId"];
        $this->ClaimId = $attributes["ClaimId"];
        $this->RoleId = $attributes["RoleId"];
        $this->OrgUnitTypeId = $attributes["OrgUnitTypeId"];
        $this->Allowed = $attributes["Allowed"];
    }
}
