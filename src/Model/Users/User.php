<?php
namespace ValenceWrapper\Model\User;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This structure gets used as a composite to include in resource blocks
 * returned by a variety of services (for example, enrollments).
 * @see https://docs.valence.desire2learn.com#User.User
 * This property can be missing depending on permissions afforded the
 * caller’s context. If it’s missing, then it’s likely that the rest of the
 * properties will also be null.
 *
 * If the user has a profile image, this property contains the
 * URL for an API action to retrieve it; otherwise, this
 * property may be null.
 */
class User
{
    /**
     * @param Identifier
     * @type <string>
     */
    private $Identifier;

    /**
     * @param DisplayName
     * @type <string>
     */
    private $DisplayName;

    /**
     * @param EmailAddress
     * @type <string>
     */
    private $EmailAddress;

    /**
     * @param OrgDefinedId
     * @type <string>
     */
    private $OrgDefinedId;

    /**
     * @param ProfileBadgeUrl
     * @type <string:APIURL>
     */
    private $ProfileBadgeUrl;

    /**
     * @param ProfileIdentifier
     * @type <string>
     */
    private $ProfileIdentifier;


    /**
     * Constructor for User
     */
    public function __construct(array $attributes = [])
    {
        $this->Identifier = $attributes["Identifier"];
        $this->DisplayName = $attributes["DisplayName"];
        $this->EmailAddress = $attributes["EmailAddress"];
        $this->OrgDefinedId = $attributes["OrgDefinedId"];
        $this->ProfileBadgeUrl = $attributes["ProfileBadgeUrl"];
        $this->ProfileIdentifier = $attributes["ProfileIdentifier"];
    }
}
