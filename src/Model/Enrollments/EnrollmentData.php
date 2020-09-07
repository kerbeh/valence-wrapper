<?php
namespace ValenceWrapper\Model\EnrollmentData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Enrollment.EnrollmentData
 */
class EnrollmentData
{
    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param UserId
     * @type <number:D2LID>
     */
    private $UserId;

    /**
     * @param RoleId
     * @type <number:D2LID>
     */
    private $RoleId;

    /**
     * @param IsCascading
     * @type <boolean>
     */
    private $IsCascading;


    /**
     * Constructor for EnrollmentData
     */
    public function __construct(array $attributes = [])
    {
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->UserId = $attributes["UserId"];
        $this->RoleId = $attributes["RoleId"];
        $this->IsCascading = $attributes["IsCascading"];
    }
}
