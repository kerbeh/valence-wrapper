<?php
namespace ValenceWrapper\Model\CreateEnrollmentData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Enrollment.CreateEnrollmentData
 */
class CreateEnrollmentData
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
     * Constructor for CreateEnrollmentData
     */
    public function __construct(array $attributes = [])
    {
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->UserId = $attributes["UserId"];
        $this->RoleId = $attributes["RoleId"];
    }
}
