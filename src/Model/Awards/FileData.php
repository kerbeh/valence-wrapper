<?php
namespace ValenceWrapper\Model\FileData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action that returns file data, the service returns a block like this:
 * @see https://docs.valence.desire2learn.com#library
 * Name of file, including file extension.
 */
class FileData
{
    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Path
     * @type <string>
     */
    private $Path;


    /**
     * Constructor for FileData
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Path = $attributes["Path"];
    }
}
