<?php
namespace ValenceWrapper\Model\BasicOrgUnit;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This composite contains basic information about an organizational unit to
 * which a course offering is related.
 * @see https://docs.valence.desire2learn.com#Course.BasicOrgUnit
 */
class BasicOrgUnit
{
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
     * Constructor for BasicOrgUnit
     */
    public function __construct(array $attributes = [])
    {
        $this->Identifier = $attributes["Identifier"];
        $this->Name = $attributes["Name"];
        $this->Code = $attributes["Code"];
    }
}
