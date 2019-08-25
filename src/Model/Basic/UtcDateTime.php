<?php

namespace ValenceWrapper\Model\Basic;

use DateTime;
use DateTimeZone;

/**
 * Object to define a {<string:UTCDateTime>} field in a JSON example
 * A string value that you should treat as an ISO 8061 formatted date-time string in the Z (UTC+0) time zone,
 *  with the addition of a three-digit millisecond value appended to the time value (before the Z time zone specifier).
 *  The service requires that the time string use the format yyyy-MM-ddTHH:mm:ss.fffZ.
 *  Note that each element must occupy the specified number of digits, so leading zeroes are required.
 * @url https://docs.valence.desire2learn.com/basic/conventions.html?highlight=utcdatetime
 * @url https://en.wikipedia.org/wiki/ISO_8601
 * @author ktrist
 */
class UtcDateTime {

    protected $utcDateTime;
    protected $milliseconds;

    /**
     * Convert a date string into a UTC date time with timezone offset
     * @param String $date
     * @return type
     */
    public function __construct($date) {

        $dateTime = new DateTime($date);
        $this->milliseconds = $this->calculateMilliseconds($dateTime);
        $this->utcDateTime = $dateTime->setTimezone(new DateTimeZone('UTC'))->format("o-m-d\TH:i:s.$this->milliseconds\Z");

        return $this->getUtcDateTime();
    }

    //TODO does this need a getter?
    public function getUtcDateTime() {
        return $this->utcDateTime;
    }

    /**
     * PHP 5.2 does not have a milliseconds function but does have a microseconds function
     * This function will calculate the milliseconds from microseconds to a length of 3 with leading zero
     * @param DateTime $dateTime
     */
    private function calculateMilliseconds(DateTime $dateTime) {

        $milliseconds = $dateTime->format('u') / 1000;
        $millisecondsWithLeadingZero = str_pad($milliseconds, 3, "0", STR_PAD_LEFT);

        return $millisecondsWithLeadingZero;
    }

}
