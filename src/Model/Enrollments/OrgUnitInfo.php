<?php
namespace ValenceWrapper\Model\OrgUnitInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * In rare cases, an org unit may have no code set for it; in that case, you
 * may get null for the code on actions that retrieve this
 * structure. This is most likely to happen for the root organization org
 * unit only.
 * @see https://docs.valence.desire2learn.com#Enrollment.OrgUnitInfo
 * In rare cases, an org unit may have no code set for it; in that case, you
 * may get null for the code on actions that retrieve this
 * structure. This is most likely to happen for the root organization org
 * unit only.
 *
 * The value will be null when the user cannot access the org unit.
 *
 * A value will only be provided for course offerings that have an image
 * set; in all other situations the value will be null.
 */
class OrgUnitInfo
{
    /**
     * @param Type
     * @type { <composite:OrgUnit.OrgUnitTypeInfo> }
     */
    private $Type;

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
     * @param Code
     * @type <string>
     */
    private $Code;

    /**
     * @param HomeUrl
     * @type <string:URL>
     */
    private $HomeUrl;

    /**
     * @param ImageUrl
     * @type <string:APIURL>
     */
    private $ImageUrl;


    /**
     * Constructor for OrgUnitInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Type = $attributes["Type"];
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
        $this->HomeUrl = $attributes["HomeUrl"];
        $this->ImageUrl = $attributes["ImageUrl"];
    }
}
