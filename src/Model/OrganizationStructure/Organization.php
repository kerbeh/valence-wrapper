<?php
namespace ValenceWrapper\Model\Organization;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Fundamental information for the organization itself (the root org unit).
 * @see https://docs.valence.desire2learn.com#Org.Organization
 * Configured local time zone for the back-end
 * Brightspace service.
 */
class Organization
{
    /**
     * @param Identifier
     * @type <string:D2LID>
     */
    private $Identifier;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param TimeZone
     * @type <string:TimeZone>
     */
    private $TimeZone;


    /**
     * Constructor for Organization
     */
    public function __construct(array $attributes = [])
    {
        $this->Identifier = $attributes["Identifier"];
        $this->Name = $attributes["Name"];
        $this->TimeZone = $attributes["TimeZone"];
    }
}
