<?php
namespace ValenceWrapper\Model\CreateCourseTemplate;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Note that course template  code values have these limitations:
 * @see https://docs.valence.desire2learn.com#Course.CreateCourseTemplate
 */
class CreateCourseTemplate
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
     * Constructor for CreateCourseTemplate
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
        $this->Path = $attributes["Path"];
    }
}
