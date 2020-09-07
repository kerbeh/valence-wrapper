<?php
namespace ValenceWrapper\Model\DropboxCategory;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * A dropbox folder may belong to a folder category. The following JSON block
 * describes the dropbox category information returned from the service or
 * provided to the service. When you use an action to create or update a
 * dropbox category, the Id field is not required.
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxCategory
 */
class DropboxCategory
{
    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param LastModifiedByUserId
     * @type <number:D2LID>
     */
    private $LastModifiedByUserId;

    /**
     * @param LastModifiedDate
     * @type <string:UTCDateTime>
     */
    private $LastModifiedDate;


    /**
     * Constructor for DropboxCategory
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->LastModifiedByUserId = $attributes["LastModifiedByUserId"];
        $this->LastModifiedDate = $attributes["LastModifiedDate"];
    }
}
