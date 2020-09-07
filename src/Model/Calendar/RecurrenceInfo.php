<?php
namespace ValenceWrapper\Model\RecurrenceInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Recurrence frequency unit type (recurrence expressed
 * in days, weeks, months, years, or no recurrence).
 * @see https://docs.valence.desire2learn.com#Calendar.RecurrenceInfo
 * Occurrence template to indicate which
 * days in the week a repeating event occurs on. This property applies only
 * with weekly RepeatType events.
 *
 * Recurrence frequency unit type (recurrence expressed
 * in days, weeks, months, years, or no recurrence).
 *
 * How many of the units make up the recurrence cycle (every two days, every
 * four weeks, and so on).
 */
class RecurrenceInfo
{
    /**
     * @param RepeatOnInfo
     * @type { <composite:Calendar.RepeatOnInfo> }
     */
    private $RepeatOnInfo;

    /**
     * @param RepeatType
     * @type <number:REPEAT_T>
     */
    private $RepeatType;

    /**
     * @param RepeatEvery
     * @type <number>
     */
    private $RepeatEvery;

    /**
     * @param RepeatUntilDate
     * @type <string:UTCDateTime>
     */
    private $RepeatUntilDate;


    /**
     * Constructor for RecurrenceInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->RepeatOnInfo = $attributes["RepeatOnInfo"];
        $this->RepeatType = $attributes["RepeatType"];
        $this->RepeatEvery = $attributes["RepeatEvery"];
        $this->RepeatUntilDate = $attributes["RepeatUntilDate"];
    }
}
