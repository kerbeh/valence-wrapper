<?php
namespace ValenceWrapper\Model\LtiToolProviderData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When a client invokes an action that would retrieve the registration
 * information for an LTI tool provider, the Learning Service sends back a
 * structure like this:
 * @see https://docs.valence.desire2learn.com#LTI.LtiToolProviderData
 */
class LtiToolProviderData
{
    /**
     * @param LtiToolProviderId
     * @type <number:D2LID>
     */
    private $LtiToolProviderId;

    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param LaunchPoint
     * @type <string>
     */
    private $LaunchPoint;

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
     * Constructor for LtiToolProviderData
     */
    public function __construct(array $attributes = [])
    {
        $this->LtiToolProviderId = $attributes["LtiToolProviderId"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->LaunchPoint = $attributes["LaunchPoint"];
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
