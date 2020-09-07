<?php
namespace ValenceWrapper\Model\CourseOfferingInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use actions that update course information for a course offering,
 * you should provide one of these blocks:
 * @see https://docs.valence.desire2learn.com#Course.CourseOfferingInfo
 */
class CourseOfferingInfo
{
    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Code
     * @type <string>
     */
    private $Code;

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
     * @param IsActive
     * @type <boolean>
     */
    private $IsActive;


    /**
     * Constructor for CourseOfferingInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->IsActive = $attributes["IsActive"];
    }
}
