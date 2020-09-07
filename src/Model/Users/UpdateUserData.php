<?php
namespace ValenceWrapper\Model\UpdateUserData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action to update a user’s data, you pass in a block like
 * this:
 * @see https://docs.valence.desire2learn.com#User.UpdateUserData
 */
class UpdateUserData
{
    /**
     * @param Activation
     * @type { <composite:User.UserActivationData> }
     */
    private $Activation;

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
     * Constructor for UpdateUserData
     */
    public function __construct(array $attributes = [])
    {
        $this->Activation = $attributes["Activation"];
        $this->OrgDefinedId = $attributes["OrgDefinedId"];
        $this->FirstName = $attributes["FirstName"];
        $this->MiddleName = $attributes["MiddleName"];
        $this->LastName = $attributes["LastName"];
        $this->ExternalEmail = $attributes["ExternalEmail"];
        $this->UserName = $attributes["UserName"];
    }
}
