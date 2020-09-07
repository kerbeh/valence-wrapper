<?php
namespace ValenceWrapper\Model\TagObject;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#EP.TagObject
 */
class TagObject
{
    /**
     * @param Text
     * @type <string>
     */
    private $Text;

    /**
     * @param Type
     * @type <number:TAG_T>
     */
    private $Type;


    /**
     * Constructor for TagObject
     */
    public function __construct(array $attributes = [])
    {
        $this->Text = $attributes["Text"];
        $this->Type = $attributes["Type"];
    }
}
