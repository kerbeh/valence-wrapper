<?php
namespace ValenceWrapper\Model\Folder;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Locker.Folder
 */
class Folder
{
    /**
     * @param Name
     * @type <string>
     */
    private $Name;


    /**
     * Constructor for Folder
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
    }
}
