<?php
namespace ValenceWrapper\Model\LockerItem;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Locker.LockerItem
 */
class LockerItem
{
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
     * @param Type
     * @type <number:LOCKERITEM_T>
     */
    private $Type;

    /**
     * @param Size
     * @type <number:long>
     */
    private $Size;

    /**
     * @param LastModified
     * @type <string:UTCDateTime>
     */
    private $LastModified;


    /**
     * Constructor for LockerItem
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->Type = $attributes["Type"];
        $this->Size = $attributes["Size"];
        $this->LastModified = $attributes["LastModified"];
    }
}
