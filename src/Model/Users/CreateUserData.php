<?php
namespace ValenceWrapper\Model\CreateUserData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action to create a user, you pass in a block of new-user data
 * like this:
 * @see https://docs.valence.desire2learn.com#User.CreateUserData
 */
class CreateUserData
{
    /**
     * @param OrgDefinedId
     * @type <string>
     */
    private $OrgDefinedId;

    /**
     * @param FirstName
     * @type <string>
     */
    private $FirstName;

    /**
     * @param MiddleName
     * @type <string>
     */
    private $MiddleName;

    /**
     * @param LastName
     * @type <string>
     */
    private $LastName;

    /**
     * @param ExternalEmail
     * @type <string>
     */
    private $ExternalEmail;

    /**
     * @param UserName
     * @type <string>
     */
    private $UserName;

    /**
     * @param RoleId
     * @type <number>
     */
    private $RoleId;

    /**
     * @param IsActive
     * @type <boolean>
     */
    private $IsActive;

    /**
     * @param SendCreationEmail
     * @type <boolean>
     */
    private $SendCreationEmail;


    /**
     * Constructor for CreateUserData
     */
    public function __construct(array $attributes = [])
    {
        $this->OrgDefinedId = $attributes["OrgDefinedId"];
        $this->FirstName = $attributes["FirstName"];
        $this->MiddleName = $attributes["MiddleName"];
        $this->LastName = $attributes["LastName"];
        $this->ExternalEmail = $attributes["ExternalEmail"];
        $this->UserName = $attributes["UserName"];
        $this->RoleId = $attributes["RoleId"];
        $this->IsActive = $attributes["IsActive"];
        $this->SendCreationEmail = $attributes["SendCreationEmail"];
    }
}
