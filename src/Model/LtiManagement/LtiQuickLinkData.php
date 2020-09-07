<?php
namespace ValenceWrapper\Model\LtiQuickLinkData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When a client creates a new quicklink around an existing LTI link, the
 * service returns a structure like this to describe the new quicklink:
 * @see https://docs.valence.desire2learn.com#LTI.LtiQuickLinkData
 * This property contains the URL location for the new quicklink.
 */
class LtiQuickLinkData
{
    /**
     * @param LtiLinkId
     * @type <number:D2LID>
     */
    private $LtiLinkId;

    /**
     * @param PublicUrl
     * @type <string>
     */
    private $PublicUrl;


    /**
     * Constructor for LtiQuickLinkData
     */
    public function __construct(array $attributes = [])
    {
        $this->LtiLinkId = $attributes["LtiLinkId"];
        $this->PublicUrl = $attributes["PublicUrl"];
    }
}
