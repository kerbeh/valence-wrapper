<?php
namespace ValenceWrapper\Model\CourseOffering;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * The service’s fundamental information block for course offerings. Notice that
 * the last few fields for this block include BasicOrgUnit
 * blocks for the related org units.
 * @see https://docs.valence.desire2learn.com#Course.CourseOffering
 */
class CourseOffering
{
    /**
     * @param Department
     * @type { <composite:Course.BasicOrgUnit> }
     */
    private $Department;

    /**
     * @param Identifier
     * @type <string:D2LID>
     */
    private $Identifier;

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
     * @param IsActive
     * @type <boolean>
     */
    private $IsActive;

    /**
     * @param Path
     * @type <string>
     */
    private $Path;

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
     * @param CourseTemplate
     * @type { <composite:Course.BasicOrgUnit> }
     */
    private $CourseTemplate;

    /**
     * @param Semester
     * @type { <composite:Course.BasicOrgUnit> }
     */
    private $Semester;


    /**
     * Constructor for CourseOffering
     */
    public function __construct(array $attributes = [])
    {
        $this->Department = $attributes["Department"];
        $this->Identifier = $attributes["Identifier"];
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
        $this->IsActive = $attributes["IsActive"];
        $this->Path = $attributes["Path"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->CourseTemplate = $attributes["CourseTemplate"];
        $this->Semester = $attributes["Semester"];
    }
}
