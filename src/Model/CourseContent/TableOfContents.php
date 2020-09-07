<?php
namespace ValenceWrapper\Model\TableOfContents;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This is a nested structure. The TableOfContent comprises a list of Module
 * blocks. Each Module block can contain a list of Topic blocks, and can
 * contain a list of child Module blocks. Thus, each module can have a child
 * that’s a topic, or another module, but topics are “leaf nodes”.
 * @see https://docs.valence.desire2learn.com#table-of-contents
 */
class TableOfContents
{
    /**
     * @param IsHidden
     * @type <boolean>
     */
    private $IsHidden;

    /**
     * @param IsLocked
     * @type <boolean>
     */
    private $IsLocked;

    /**
     * @param PacingStartDate
     * @type <string:ISODate>
     */
    private $PacingStartDate;

    /**
     * @param PacingEndDate
     * @type <string:ISODate>
     */
    private $PacingEndDate;

    /**
     * @param DefaultPath
     * @type <string>
     */
    private $DefaultPath;

    /**
     * @param LastModifiedDate
     * @type <string:UTCDateTime>
     */
    private $LastModifiedDate;


    /**
     * Constructor for TableOfContents
     */
    public function __construct(array $attributes = [])
    {
        $this->IsHidden = $attributes["IsHidden"];
        $this->IsLocked = $attributes["IsLocked"];
        $this->PacingStartDate = $attributes["PacingStartDate"];
        $this->PacingEndDate = $attributes["PacingEndDate"];
        $this->DefaultPath = $attributes["DefaultPath"];
        $this->LastModifiedDate = $attributes["LastModifiedDate"];
    }
}
