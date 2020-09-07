<?php
namespace ValenceWrapper\Model\CreateCourseOffering;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Block used to create a course.
 * @see https://docs.valence.desire2learn.com#Course.CreateCourseOffering
 */
class CreateCourseOffering
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
     * @param Path
     * @type <string>
     */
    private $Path;

    /**
     * @param CourseTemplateId
     * @type <number:D2LID>
     */
    private $CourseTemplateId;

    /**
     * @param SemesterId
     * @type <number:D2LID>
     */
    private $SemesterId;

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
     * @param LocaleId
     * @type <number:D2LID>
     */
    private $LocaleId;

    /**
     * @param ForceLocale
     * @type <boolean>
     */
    private $ForceLocale;

    /**
     * @param ShowAddressBook
     * @type <boolean>
     */
    private $ShowAddressBook;


    /**
     * Constructor for CreateCourseOffering
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
        $this->Path = $attributes["Path"];
        $this->CourseTemplateId = $attributes["CourseTemplateId"];
        $this->SemesterId = $attributes["SemesterId"];
        $this->StartDate = $attributes["StartDate"];
        $this->EndDate = $attributes["EndDate"];
        $this->LocaleId = $attributes["LocaleId"];
        $this->ForceLocale = $attributes["ForceLocale"];
        $this->ShowAddressBook = $attributes["ShowAddressBook"];
    }
}
