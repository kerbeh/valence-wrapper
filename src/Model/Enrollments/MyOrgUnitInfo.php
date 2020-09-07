<?php
namespace ValenceWrapper\Model\MyOrgUnitInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If present, presents the start date of the org unit.
 * @see https://docs.valence.desire2learn.com#Enrollment.MyOrgUnitInfo
 * If present, presents the start date of the org unit.
 *
 * If present, presents the end date of the org unit.
 *
 * If present, presents the name of the D2L enrollment role as it is
 * configured to appear in the classlist.
 *
 * If present, provides the list of standard IMS LIS roles that are
 * configured for the D2L enrollment role to get sent to an LTI Tool
 * Provider on an LTI Launch.
 *
 * Date that this enrollment was pinned to appear at the top of the list of
 * a user’s enrollments.
 */
class MyOrgUnitInfo
{
    /**
     * @param Access
     * @type {
     */
    private $Access;

    /**
     * @param IsActive
     * @type <boolean>
     */
    private $IsActive;

    /**
     * @param StartDate
     * @type <string:UTCDateTime>
     */
    private $StartDate;

    /**
     * @param EndDate
     * @type <string:UTCDateTime>
     */
    private $EndDate;

    /**
     * @param CanAccess
     * @type <boolean>
     */
    private $CanAccess;

    /**
     * @param ClasslistRoleName
     * @type <string>
     */
    private $ClasslistRoleName;

    /**
     * @param LISRoles
     * @type
     */
    private $LISRoles;

    /**
     * @param OrgUnit
     * @type { <composite:Enrollment.OrgUnitInfo> }
     */
    private $OrgUnit;

    /**
     * @param PinDate
     * @type <string:UTCDateTime>
     */
    private $PinDate;


    /**
     * Constructor for MyOrgUnitInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Access = $attributes["Access"];
        $this->IsActive = $attributes["IsActive"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->CanAccess = $attributes["CanAccess"];
        $this->ClasslistRoleName = $attributes["ClasslistRoleName"];
        $this->LISRoles = $attributes["LISRoles"];
        $this->OrgUnit = $attributes["OrgUnit"];
        $this->PinDate = $attributes["PinDate"];
    }
}
