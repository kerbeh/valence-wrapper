<?php
namespace ValenceWrapper\Model\OrgUnitUser;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Enrollment.OrgUnitUser
 */
class OrgUnitUser
{
    /**
     * @param Role
     * @type { <composite:Enrollment.RoleInfo> }
     */
    private $Role;

    /**
     * @param User
     * @type { <composite:User.User> }
     */
    private $User;


    /**
     * Constructor for OrgUnitUser
     */
    public function __construct(array $attributes = [])
    {
        $this->Role = $attributes["Role"];
        $this->User = $attributes["User"];
    }
}
