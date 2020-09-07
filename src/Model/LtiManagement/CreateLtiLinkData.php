<?php
namespace ValenceWrapper\Model\CreateLtiLinkData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When a client invokes an action to register or update an already registered
 * LTI link for an org unit, it should provide a structure like this:
 * @see https://docs.valence.desire2learn.com#LTI.CreateLtiLinkData
 * If true, then this link will use all the Send* properties defined for
 * the associated Tool Provider entry (as determined by URL matching against
 * Tool Provider definitions).
 *
 * Any custom parameters will get passed as name-value pairs in this
 * property; if no custom parameters are needed for this LTI link, this
 * property will be null.
 */
class CreateLtiLinkData
{
    /**
     * @param Title
     * @type <string>
     */
    private $Title;

    /**
     * @param Url
     * @type <string>
     */
    private $Url;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param Key
     * @type <string>
     */
    private $Key;

    /**
     * @param PlainSecret
     * @type <string>
     */
    private $PlainSecret;

    /**
     * @param IsVisible
     * @type <boolean>
     */
    private $IsVisible;

    /**
     * @param SignMessage
     * @type <boolean>
     */
    private $SignMessage;

    /**
     * @param SignWithTc
     * @type <boolean>
     */
    private $SignWithTc;

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
     * @param UseToolProviderSecuritySettings
     * @type <boolean>
     */
    private $UseToolProviderSecuritySettings;

    /**
     * @param CustomParameters
     * @type null
     */
    private $CustomParameters;


    /**
     * Constructor for CreateLtiLinkData
     */
    public function __construct(array $attributes = [])
    {
        $this->Title = $attributes["Title"];
        $this->Url = $attributes["Url"];
        $this->Description = $attributes["Description"];
        $this->Key = $attributes["Key"];
        $this->PlainSecret = $attributes["PlainSecret"];
        $this->IsVisible = $attributes["IsVisible"];
        $this->SignMessage = $attributes["SignMessage"];
        $this->SignWithTc = $attributes["SignWithTc"];
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
        $this->UseToolProviderSecuritySettings = $attributes["UseToolProviderSecuritySettings"];
        $this->CustomParameters = $attributes["CustomParameters"];
    }
}
