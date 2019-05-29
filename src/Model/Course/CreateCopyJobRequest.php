<?php

namespace ValenceWrapper\Model\Course;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
use ValenceWrapper\Model\Assessment\Rubric;
use Exception;

/**
 * Description of CreateCopyJobRequest
 *
 * @url https://docs.valence.desire2learn.com/res/course.html#Course.CreateCopyJobRequest
 * @author ktrist
 */
class CreateCopyJobRequest extends BaseValenceModel {

    /**
     * The D2L Id of the unit to copy from
     * @var Int
     */
    public $sourceOrgUnitId;

    /**
     * Array of course component type names, for example "Components": [ "Dropbox", "Grades", "Rubrics" ].
     * If this array property is present, only the components listed will get copied; if the property is missing or null, then all components will get copied.
     * @var Array | Null
     */
    public $components;

    /**
     * Url to to a callback in the application. When the back-end service completes its copy job,
     * it will issue a POST with the provided URL (including any query parameters you provided) with a CopyJobComplete JSON block in the posted body.
     * @var String
     */
    public $callbackUrl;

    /**
     * If you provide a number (max: 5000) here, all the dates copied into your destination course
     * (e.g. due dates, start dates, and end dates on activities such as quizzes) will be offset by
     *  the provided number of days. Enter a positive integer to offset forward, and a negative integer to offset backwards.
     * @var Int
     */
    public $daysToOffsetDates;

    /**
     * If you provide a decimal number (less than 24) here,
     *  all the dates copied into your destination course (e.g. due dates, start dates, and end dates on activities such as quizzes)
     * will be offset by the provided number of hours. Enter a positive number to offset forward, and negative to offset backwards.
     * @var Float
     */
    public $hoursToOffsetDates;

    /**
     * When true, the service will find the difference between the start date of the source course
     *  (the course that is being copied from) and the start date of the destination course (the course that is being copied to),
     * and offset all the dates copied into the destination course by that difference:
     * @var Bool
     */
    public $offsetByStartDateDifference;

    /**
     * Constructor that populates the object from an array
     * @param array $copyJobRequest
     */
    public function __construct(array $copyJobRequest) {



        $this->sourceOrgUnitId = (!empty($copyJobRequest["SourceOrgUnitId"])) ? $copyJobRequest["SourceOrgUnitId"] : null;
        $this->components = (!empty($copyJobRequest["Components"])) ? $copyJobRequest["Components"] : [];
        $this->callbackUrl = null;
        $this->daysToOffsetDates = (!empty($copyJobRequest["DaysToOffsetDates"])) ? $copyJobRequest["DaysToOffsetDates"] : null;
        $this->hoursToOffsetDates = (!empty($copyJobRequest["HoursToOffsetDates"])) ? $copyJobRequest["HoursToOffsetDates"] : null;
        $this->offsetByStartDateDifference = (!empty($copyJobRequest["OffsetByStartDateDifference"])) ? $copyJobRequest["OffsetByStartDateDifference"] : null;

        $this->validate();
    }

    protected function validate() {
        if (is_numeric($this->sourceOrgUnitId) != true) {
            throw new Exception("Source Org Unit Must be a valid number");
        }
    }

}
