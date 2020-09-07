<?php
namespace ValenceWrapper\Model\VisibilityInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This structure provides an encoding for the event’s visibility. By default,
 * events are Visible.
 * @see https://docs.valence.desire2learn.com#Calendar.VisibilityInfo
 * Type of visibility status, expressed by a VISIBILITY_T enumeration
 * value. Depending on this property’s value, the remainder of the properties
 * in this structure get used in different ways.
 *
 * Visible (1) means that the event is always visible.
 * HiddenUntil (2) means that the event is hidden until some time before
 * the StartDate, as determined by the Range and
 * HiddenRangeUnitType. Thus, with a range of “four hours”, the event is
 * invisible until four hours before the event’s start date; after that
 * point, the event will be visible.
 * HiddenStarting (3) means that the event is hidden some time after the
 * EndDate, as determined by the Range and HiddenRangeUnitType. Thus,
 * with a range of “two days”, the event is visible until two days after
 * the event’s end date; after that point, the event will be hidden.
 * VisibleBetween (4) means that the event is visible only between the
 * StartDate and EndDate property times; outside that time range, the
 * event remains hidden.
 * Hidden (5) means that the event is always hidden.
 *
 *
 * This value expresses the number of range units the visibility state should
 * persist (for example, a value of 2 with a HiddenRangeUnitType value of 2
 * would mean two hours).
 *
 * Used by HiddenUntil and VisibleBetween restriction types; this value
 * gets ignored in HiddenStarting, Visible, and Hidden types.
 *
 * Used by HiddenStarting and VisibleBetween restriction types; this value
 * gets ignored in HiddenUntil, Visible, and Hidden types.
 */
class VisibilityInfo
{
    /**
     * @param Type
     * @type <number:VISIBILITY_T>
     */
    private $Type;

    /**
     * @param Range
     * @type <number>
     */
    private $Range;

    /**
     * @param HiddenRangeUnitType
     * @type <number:HIDDENUNIT_T>
     */
    private $HiddenRangeUnitType;

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
     * Constructor for VisibilityInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Type = $attributes["Type"];
        $this->Range = $attributes["Range"];
        $this->HiddenRangeUnitType = $attributes["HiddenRangeUnitType"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
    }
}
