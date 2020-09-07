<?php
namespace ValenceWrapper\Model\Forum;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use actions that retrieve Forum information, the service provides a
 * block like this:
 * @see https://docs.valence.desire2learn.com#Discussions.Forum
 */
class Forum
{
    /**
     * @param Description
     * @type { <composite:RichText> }
     */
    private $Description;

    /**
     * @param ForumId
     * @type <number:D2LID>
     */
    private $ForumId;

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
     * @param PostStartDate
     * @type <string:UTCDateTime>
     */
    private $PostStartDate;

    /**
     * @param PostEndDate
     * @type <string:UTCDateTime>
     */
    private $PostEndDate;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param ShowDescriptionInTopics
     * @type <boolean>
     */
    private $ShowDescriptionInTopics;

    /**
     * @param AllowAnonymous
     * @type <boolean>
     */
    private $AllowAnonymous;

    /**
     * @param IsLocked
     * @type <boolean>
     */
    private $IsLocked;

    /**
     * @param IsHidden
     * @type <boolean>
     */
    private $IsHidden;

    /**
     * @param RequiresApproval
     * @type <boolean>
     */
    private $RequiresApproval;

    /**
     * @param DisplayInCalendar
     * @type <boolean>
     */
    private $DisplayInCalendar;

    /**
     * @param DisplayPostDatesInCalendar
     * @type <boolean>
     */
    private $DisplayPostDatesInCalendar;


    /**
     * Constructor for Forum
     */
    public function __construct(array $attributes = [])
    {
        $this->Description = $attributes["Description"];
        $this->ForumId = $attributes["ForumId"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->PostStartDate = $attributes["PostStartDate"];
        $this->PostEndDate = $attributes["PostEndDate"];
        $this->Name = $attributes["Name"];
        $this->ShowDescriptionInTopics = $attributes["ShowDescriptionInTopics"];
        $this->AllowAnonymous = $attributes["AllowAnonymous"];
        $this->IsLocked = $attributes["IsLocked"];
        $this->IsHidden = $attributes["IsHidden"];
        $this->RequiresApproval = $attributes["RequiresApproval"];
        $this->DisplayInCalendar = $attributes["DisplayInCalendar"];
        $this->DisplayPostDatesInCalendar = $attributes["DisplayPostDatesInCalendar"];
    }
}
