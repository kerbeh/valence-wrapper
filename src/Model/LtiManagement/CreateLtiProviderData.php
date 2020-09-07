<?php
namespace ValenceWrapper\Model\CreateLtiProviderData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When a client invokes an action to register or update an already registered
 * LTI tool provider for an org unit, it should provide a structure like this:
 * @see https://docs.valence.desire2learn.com#LTI.CreateLtiProviderData
 */
class CreateLtiProviderData
{
    /**
     * @param LaunchPoint
     * @type <string>
     */
    private $LaunchPoint;

    /**
     * @param Secret
     * @type <string>
     */
    private $Secret;

    /**
     * @param UseDefaultTcInfo
     * @type <boolean>
     */
    private $UseDefaultTcInfo;

    /**
     * @param Key
     * @type <string>
     */
    private $Key;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param ContactEmail
     * @type <string>
     */
    private $ContactEmail;

    /**
     * @param IsVisible
     * @type <boolean>
     */
    private $IsVisible;

    /**
     * @param SendTcInfo
     * @type <boolean>
     */
    private $SendTcInfo;

    /**
     * @param SendContextInfo
     * @type <boolean>
     */
    private $SendContextInfo;

    /**
     * @param SendUserId
     * @type <boolean>
     */
    private $SendUserId;

    /**
     * @param SendUserName
     * @type <boolean>
     */
    private $SendUserName;

    /**
     * @param SendUserEmail
     * @type <boolean>
     */
    private $SendUserEmail;

    /**
     * @param SendLinkTitle
     * @type <boolean>
     */
    private $SendLinkTitle;

    /**
     * @param SendLinkDescription
     * @type <boolean>
     */
    private $SendLinkDescription;

    /**
     * @param SendD2LUserName
     * @type <boolean>
     */
    private $SendD2LUserName;

    /**
     * @param SendD2LOrgDefinedId
     * @type <boolean>
     */
    private $SendD2LOrgDefinedId;

    /**
     * @param SendD2LOrgRoleId
     * @type <boolean>
     */
    private $SendD2LOrgRoleId;


    /**
     * Constructor for CreateLtiProviderData
     */
    public function __construct(array $attributes = [])
    {
        $this->LaunchPoint = $attributes["LaunchPoint"];
        $this->Secret = $attributes["Secret"];
        $this->UseDefaultTcInfo = $attributes["UseDefaultTcInfo"];
        $this->Key = $attributes["Key"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->ContactEmail = $attributes["ContactEmail"];
        $this->IsVisible = $attributes["IsVisible"];
        $this->SendTcInfo = $attributes["SendTcInfo"];
        $this->SendContextInfo = $attributes["SendContextInfo"];
        $this->SendUserId = $attributes["SendUserId"];
        $this->SendUserName = $attributes["SendUserName"];
        $this->SendUserEmail = $attributes["SendUserEmail"];
        $this->SendLinkTitle = $attributes["SendLinkTitle"];
        $this->SendLinkDescription = $attributes["SendLinkDescription"];
        $this->SendD2LUserName = $attributes["SendD2LUserName"];
        $this->SendD2LOrgDefinedId = $attributes["SendD2LOrgDefinedId"];
        $this->SendD2LOrgRoleId = $attributes["SendD2LOrgRoleId"];
    }
}
