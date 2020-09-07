<?php
namespace ValenceWrapper\Model\DropboxCategoryWithFolders;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Once you know a dropbox folder category’s ID, you can use the API to fetch
 * its info block that also lists all the
 * dropbox folders that belong to the category:
 * @see https://docs.valence.desire2learn.com#Dropbox.DropboxCategoryWithFolders
 */
class DropboxCategoryWithFolders
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
     * Constructor for DropboxCategoryWithFolders
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->Name = $attributes["Name"];
        $this->LastModifiedByUserId = $attributes["LastModifiedByUserId"];
        $this->LastModifiedDate = $attributes["LastModifiedDate"];
    }
}
