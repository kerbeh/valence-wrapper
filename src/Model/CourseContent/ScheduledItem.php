<?php
namespace ValenceWrapper\Model\ScheduledItem;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * A scheduled item describes an activity in an org unit that was added
 * to the content tool with start date, end date, or due date.
 * @see https://docs.valence.desire2learn.com#scheduled-items
 * If this property is present and not null, and IsExempt is false,
 * then the content topic has a due date.
 *
 * Completion type of the content topic. This value is set to 3
 * (completion type None) when the item is exempt.
 *
 * If true, the user is exempt from the topic; otherwise, false. This
 * property is only present if item exemptions are supported.
 */
class ScheduledItem
{
    /**
     * @param UserId
     * @type <string:D2LID>
     */
    private $UserId;

    /**
     * @param OrgUnitId
     * @type <string:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param ItemId
     * @type <number:D2LID>
     */
    private $ItemId;

    /**
     * @param ItemName
     * @type <string>
     */
    private $ItemName;

    /**
     * @param ItemType
     * @type <number:CONTENT_T>
     */
    private $ItemType;

    /**
     * @param ItemUrl
     * @type <string>
     */
    private $ItemUrl;

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
     * @param DueDate
     * @type <string:UTCDateTime>
     */
    private $DueDate;

    /**
     * @param CompletionType
     * @type <number:COMPLETIONTYPE_T>
     */
    private $CompletionType;

    /**
     * @param DateCompleted
     * @type <string:UTCDateTime>
     */
    private $DateCompleted;

    /**
     * @param ActivityType
     * @type <number:ACTIVITYTYPE_T>
     */
    private $ActivityType;

    /**
     * @param IsExempt
     * @type <boolean>
     */
    private $IsExempt;


    /**
     * Constructor for ScheduledItem
     */
    public function __construct(array $attributes = [])
    {
        $this->UserId = $attributes["UserId"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->ItemId = $attributes["ItemId"];
        $this->ItemName = $attributes["ItemName"];
        $this->ItemType = $attributes["ItemType"];
        $this->ItemUrl = $attributes["ItemUrl"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->DueDate = $attributes["DueDate"];
        $this->CompletionType = $attributes["CompletionType"];
        $this->DateCompleted = $attributes["DateCompleted"];
        $this->ActivityType = $attributes["ActivityType"];
        $this->IsExempt = $attributes["IsExempt"];
    }
}
