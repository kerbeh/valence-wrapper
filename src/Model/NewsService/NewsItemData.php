<?php
namespace ValenceWrapper\Model\NewsItemData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * If you use an action where you must provide news item data, then the service
 * expects you to send it in a block like this:
 * @see https://docs.valence.desire2learn.com#News.NewsItemData
 */
class NewsItemData
{
    /**
     * @param Body
     * @type { <composite:RichText> }
     */
    private $Body;

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
     * Constructor for NewsItemData
     */
    public function __construct(array $attributes = [])
    {
        $this->Body = $attributes["Body"];
        $this->Title = $attributes["Title"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->IsGlobal = $attributes["IsGlobal"];
        $this->IsPublished = $attributes["IsPublished"];
        $this->ShowOnlyInCourseOfferings = $attributes["ShowOnlyInCourseOfferings"];
    }
}
