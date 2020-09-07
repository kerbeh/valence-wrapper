<?php
namespace ValenceWrapper\Model\UserData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action with the User Management service to retrieve a user’s
 * data, the service passes you back a data block like this (notice that it’s
 * different to the User.WhoAmIUser information block provided by the
 * WhoAmI service actions):
 * @see https://docs.valence.desire2learn.com#User.UserData
 */
class UserData
{
    /**
     * @param Activation
     * @type { <composite:User.UserActivationData> }
     */
    private $Activation;

    /**
     * @param OrgId
     * @type <number:D2LID>
     */
    private $OrgId;

    /**
     * @param UserId
     * @type <number:D2LID>
     */
    private $UserId;

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
     * @param UserName
     * @type <string>
     */
    private $UserName;

    /**
     * @param ExternalEmail
     * @type <string>
     */
    private $ExternalEmail;

    /**
     * @param OrgDefinedId
     * @type <string>
     */
    private $OrgDefinedId;

    /**
     * @param UniqueIdentifier
     * @type <string>
     */
    private $UniqueIdentifier;


    /**
     * Constructor for UserData
     */
    public function __construct(array $attributes = [])
    {
        $this->Activation = $attributes["Activation"];
        $this->OrgId = $attributes["OrgId"];
        $this->UserId = $attributes["UserId"];
        $this->FirstName = $attributes["FirstName"];
        $this->MiddleName = $attributes["MiddleName"];
        $this->LastName = $attributes["LastName"];
        $this->UserName = $attributes["UserName"];
        $this->ExternalEmail = $attributes["ExternalEmail"];
        $this->OrgDefinedId = $attributes["OrgDefinedId"];
        $this->UniqueIdentifier = $attributes["UniqueIdentifier"];
    }
}
