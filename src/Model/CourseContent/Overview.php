<?php
namespace ValenceWrapper\Model\Overview;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Each course offering org unit can have a content overview consisting of a
 * rich text description and an optional attachment.
 * @see https://docs.valence.desire2learn.com#content-overview
 */
class Overview
{
    /**
     * @param Description
     * @type <composite:RichText>
     */
    private $Description;

    /**
     * @param HasAttachment
     * @type <boolean>
     */
    private $HasAttachment;


    /**
     * Constructor for Overview
     */
    public function __construct(array $attributes = [])
    {
        $this->Description = $attributes["Description"];
        $this->HasAttachment = $attributes["HasAttachment"];
    }
}
