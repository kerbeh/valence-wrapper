<?php
namespace ValenceWrapper\Model\EventDataInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Actions that clients take to retrieve event information from the service will
 * receive it in a structure like this one.
 * @see https://docs.valence.desire2learn.com#Calendar.EventDataInfo
 */
class EventDataInfo
{
    /**
     * @param AssociatedEntity
     * @type { <composite:Calendar.AssociatedEntityInfo> }
     */
    private $AssociatedEntity;

    /**
     * @param CalendarEventId
     * @type <number:D2LID>
     */
    private $CalendarEventId;

    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

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
     * @param StartDateTime
     * @type <string:UTCDateTime>
     */
    private $StartDateTime;

    /**
     * @param EndDateTime
     * @type <string:UTCDateTime>
     */
    private $EndDateTime;

    /**
     * @param IsAllDayEvent
     * @type <boolean>
     */
    private $IsAllDayEvent;

    /**
     * @param StartDay
     * @type <string:LocalDateTime>
     */
    private $StartDay;

    /**
     * @param EndDay
     * @type <string:LocalDateTime>
     */
    private $EndDay;

    /**
     * @param GroupId
     * @type <number:D2LID>
     */
    private $GroupId;

    /**
     * @param IsRecurring
     * @type <boolean>
     */
    private $IsRecurring;

    /**
     * @param RecurrenceInfo
     * @type { <composite:Calendar.RecurrenceInfo> }
     */
    private $RecurrenceInfo;

    /**
     * @param LocationId
     * @type <number:D2LID>
     */
    private $LocationId;

    /**
     * @param LocationName
     * @type <string>
     */
    private $LocationName;

    /**
     * @param OrgUnitName
     * @type <string>
     */
    private $OrgUnitName;

    /**
     * @param OrgUnitCode
     * @type <string>
     */
    private $OrgUnitCode;

    /**
     * @param IsAssociatedWithEntity
     * @type <boolean>
     */
    private $IsAssociatedWithEntity;

    /**
     * @param HasVisibilityRestrictions
     * @type <boolean>
     */
    private $HasVisibilityRestrictions;


    /**
     * Constructor for EventDataInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->AssociatedEntity = $attributes["AssociatedEntity"];
        $this->CalendarEventId = $attributes["CalendarEventId"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->Title = $attributes["Title"];
        $this->Description = $attributes["Description"];
        $this->StartDateTime = $attributes["StartDateTime"];
        $this->EndDateTime = $attributes["EndDateTime"];
        $this->IsAllDayEvent = $attributes["IsAllDayEvent"];
        $this->StartDay = $attributes["StartDay"];
        $this->EndDay = $attributes["EndDay"];
        $this->GroupId = $attributes["GroupId"];
        $this->IsRecurring = $attributes["IsRecurring"];
        $this->RecurrenceInfo = $attributes["RecurrenceInfo"];
        $this->LocationId = $attributes["LocationId"];
        $this->LocationName = $attributes["LocationName"];
        $this->OrgUnitName = $attributes["OrgUnitName"];
        $this->OrgUnitCode = $attributes["OrgUnitCode"];
        $this->IsAssociatedWithEntity = $attributes["IsAssociatedWithEntity"];
        $this->HasVisibilityRestrictions = $attributes["HasVisibilityRestrictions"];
    }
}
