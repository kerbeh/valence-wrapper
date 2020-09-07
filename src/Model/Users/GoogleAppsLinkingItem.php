<?php
namespace ValenceWrapper\Model\GoogleAppsLinkingItem;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This block describes the linking relationship between a D2L user and a
 * Google Apps user.
 * @see https://docs.valence.desire2learn.com#integrations
 * The user’s D2L UserName property.
 *
 * The user’s name in the Google Apps records (for example, Dale.Witherspoon).
 *
 * The Google Apps domain for the user (for example, gmail.com).
 *
 * If true, notify the user that the linkage has taken place, when it succeeds.
 */
class GoogleAppsLinkingItem
{
    /**
     * @param UserName
     * @type <string>
     */
    private $UserName;

    /**
     * @param ExternalUserName
     * @type <string>
     */
    private $ExternalUserName;

    /**
     * @param Domain
     * @type <string>
     */
    private $Domain;

    /**
     * @param ShouldNotify
     * @type <boolean>
     */
    private $ShouldNotify;


    /**
     * Constructor for GoogleAppsLinkingItem
     */
    public function __construct(array $attributes = [])
    {
        $this->UserName = $attributes["UserName"];
        $this->ExternalUserName = $attributes["ExternalUserName"];
        $this->Domain = $attributes["Domain"];
        $this->ShouldNotify = $attributes["ShouldNotify"];
    }
}
