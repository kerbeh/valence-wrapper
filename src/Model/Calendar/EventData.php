<?php
namespace ValenceWrapper\Model\EventData;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Actions that clients take to create or update events use a structure like this to
 * provide event property information to the service.
 * @see https://docs.valence.desire2learn.com#Calendar.EventData
 */
class EventData
{
    /**
     * @param VisibilityRestrictions
     * @type { <composite:Calendar.VisibilityInfo> }
     */
    private $VisibilityRestrictions;

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
     * @param AssociatedEntity
     * @type { <composite:Calendar.AssociatedEntity> }
     */
    private $AssociatedEntity;


    /**
     * Constructor for EventData
     */
    public function __construct(array $attributes = [])
    {
        $this->VisibilityRestrictions = $attributes["VisibilityRestrictions"];
        $this->Title = $attributes["Title"];
        $this->Description = $attributes["Description"];
        $this->StartDateTime = $attributes["StartDateTime"];
        $this->EndDateTime = $attributes["EndDateTime"];
        $this->StartDay = $attributes["StartDay"];
        $this->EndDay = $attributes["EndDay"];
        $this->GroupId = $attributes["GroupId"];
        $this->RecurrenceInfo = $attributes["RecurrenceInfo"];
        $this->LocationId = $attributes["LocationId"];
        $this->LocationName = $attributes["LocationName"];
        $this->AssociatedEntity = $attributes["AssociatedEntity"];
    }
}
