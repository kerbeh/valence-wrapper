<?php
namespace ValenceWrapper\Model\EpObject;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Create. When you use actions that provide EP object data to the service,
 * you should provide a block that looks like this:
 * @see https://docs.valence.desire2learn.com#EP.EpObject
 */
class EpObject
{
    /**
     * @param GeoTag
     * @type { <composite:EP.GeoTag> }
     */
    private $GeoTag;

    /**
     * @param ObjectId
     * @type <number:D2LID>
     */
    private $ObjectId;

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
     * @param AllowComments
     * @type <boolean>
     */
    private $AllowComments;


    /**
     * Constructor for EpObject
     */
    public function __construct(array $attributes = [])
    {
        $this->GeoTag = $attributes["GeoTag"];
        $this->ObjectId = $attributes["ObjectId"];
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->AllowComments = $attributes["AllowComments"];
    }
}
