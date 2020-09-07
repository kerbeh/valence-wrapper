<?php
namespace ValenceWrapper\Model\RoleInfo;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Enrollment.RoleInfo
 */
class RoleInfo
{
    /**
     * @param Id
     * @type <number:D2LID>
     */
    private $Id;

    /**
     * @param Code
     * @type <string>
     */
    private $Code;

    /**
     * @param Name
     * @type <string>
     */
    private $Name;


    /**
     * Constructor for RoleInfo
     */
    public function __construct(array $attributes = [])
    {
        $this->Id = $attributes["Id"];
        $this->Code = $attributes["Code"];
        $this->Name = $attributes["Name"];
    }
}
