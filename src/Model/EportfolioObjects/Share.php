<?php
namespace ValenceWrapper\Model\Share;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Profile identifier for the EP sharing group (note that this is not the
 * same thing as a Brightspace user’s ProfileId for the user profile).
 * @see https://docs.valence.desire2learn.com#EP.Share
 * Profile identifier for the EP sharing group (note that this is not the
 * same thing as a Brightspace user’s ProfileId for the user profile).
 *
 * System identifier for the share target (i.e. UserId if the target is
 * a user)
 */
class Share
{
    /**
     * @param ProfileId
     * @type <number:D2LID>
     */
    private $ProfileId;

    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Type
     * @type <number:PERMPROFILE_T>
     */
    private $Type;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;


    /**
     * Constructor for Share
     */
    public function __construct(array $attributes = [])
    {
        $this->ProfileId = $attributes["ProfileId"];
        $this->Id = $attributes["Id"];
        $this->Type = $attributes["Type"];
        $this->Name = $attributes["Name"];
    }
}
