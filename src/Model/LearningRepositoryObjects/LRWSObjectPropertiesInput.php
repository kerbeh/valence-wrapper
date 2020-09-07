<?php
namespace ValenceWrapper\Model\LRWSObjectPropertiesInput;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When a client invokes an action to update a learning object’s properties, it
 * should provide a structure like this:
 * @see https://docs.valence.desire2learn.com#Repository.LRWSObjectPropertiesInput
 */
class LRWSObjectPropertiesInput
{
    /**
     * @param RepositoryId
     * @type <number:D2LID>
     */
    private $RepositoryId;

    /**
     * @param Status
     * @type <number:LR_OBJECT_STATUS_T>
     */
    private $Status;

    /**
     * @param HiddenFromSearchResults
     * @type <boolean>
     */
    private $HiddenFromSearchResults;

    /**
     * @param PublicallyAvailable
     * @type <boolean>
     */
    private $PublicallyAvailable;

    /**
     * @param OwnerId
     * @type <number:D2LID>
     */
    private $OwnerId;

    /**
     * @param Title
     * @type <string>
     */
    private $Title;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;


    /**
     * Constructor for LRWSObjectPropertiesInput
     */
    public function __construct(array $attributes = [])
    {
        $this->RepositoryId = $attributes["RepositoryId"];
        $this->Status = $attributes["Status"];
        $this->HiddenFromSearchResults = $attributes["HiddenFromSearchResults"];
        $this->PublicallyAvailable = $attributes["PublicallyAvailable"];
        $this->OwnerId = $attributes["OwnerId"];
        $this->Title = $attributes["Title"];
        $this->Description = $attributes["Description"];
    }
}
