<?php
namespace ValenceWrapper\Model\UserOrgUnit;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If the enrollment was directly made by a user, provides the user ID
 * of the person who created this enrollment. If the enrollment was made by
 * other methods such as an auto enrollment of a cascading role, the
 * field will be null.
 * @see https://docs.valence.desire2learn.com#Enrollment.UserOrgUnit
 * If the enrollment was directly made by a user, provides the user ID
 * of the person who created this enrollment. If the enrollment was made by
 * other methods such as an auto enrollment of a cascading role, the
 * field will be null.
 *
 * If the enrollment was directly made by a user, provides the date when
 * this enrollment was created. If the enrollment was made by
 * other methods such as an auto enrollment of a cascading role, the
 * field will be null.
 */
class UserOrgUnit
{
    /**
     * @param Role
     * @type { <composite:Enrollment.RoleInfo> }
     */
    private $Role;

    /**
     * @param OrgUnit
     * @type { <composite:Enrollment.OrgUnitInfo> }
     */
    private $OrgUnit;

    /**
     * @param IsCascading
     * @type <boolean>
     */
    private $IsCascading;

    /**
     * @param EnrolledByUserId
     * @type <number:D2LID>
     */
    private $EnrolledByUserId;

    /**
     * @param EnrolledByUserDate
     * @type <string:UTCDateTime>
     */
    private $EnrolledByUserDate;


    /**
     * Constructor for UserOrgUnit
     */
    public function __construct(array $attributes = [])
    {
        $this->Role = $attributes["Role"];
        $this->OrgUnit = $attributes["OrgUnit"];
        $this->IsCascading = $attributes["IsCascading"];
        $this->EnrolledByUserId = $attributes["EnrolledByUserId"];
        $this->EnrolledByUserDate = $attributes["EnrolledByUserDate"];
    }
}
