<?php
namespace ValenceWrapper\Model\NewsItem;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If you use an action that retrieves a news item from the service, it sends
 * the data back to you in a block like this:
 * @see https://docs.valence.desire2learn.com#News.NewsItem
 */
class NewsItem
{
    /**
     * @param Body
     * @type { <composite:RichText> }
     */
    private $Body;

    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param IsHidden
     * @type <boolean>
     */
    private $IsHidden;

    /**
     * @param Title
     * @type <string>
     */
    private $Title;

    /**
     * @param StartDate
     * @type <string:UTCDateTime>
     */
    private $StartDate;

    /**
     * @param EndDate
     * @type <string:UTCDateTime>
     */
    private $EndDate;

    /**
     * @param IsGlobal
     * @type <boolean>
     */
    private $IsGlobal;

    /**
     * @param IsPublished
     * @type <boolean>
     */
    private $IsPublished;

    /**
     * @param ShowOnlyInCourseOfferings
     * @type <boolean>
     */
    private $ShowOnlyInCourseOfferings;


    /**
     * Constructor for NewsItem
     */
    public function __construct(array $attributes = [])
    {
        $this->Body = $attributes["Body"];
        $this->Id = $attributes["Id"];
        $this->IsHidden = $attributes["IsHidden"];
        $this->Title = $attributes["Title"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->IsGlobal = $attributes["IsGlobal"];
        $this->IsPublished = $attributes["IsPublished"];
        $this->ShowOnlyInCourseOfferings = $attributes["ShowOnlyInCourseOfferings"];
    }
}
