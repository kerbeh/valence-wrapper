<?php
namespace ValenceWrapper\Model\SchemaElement;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * This block describes constraints for parent org units of course offerings
 * (that is, whether particular org units are not permitted as parents
 * for course offerings, or are required as parents for course offerings).
 * @see https://docs.valence.desire2learn.com#Course.SchemaElement
 * OrgUnit.OrgUnitTypeInfo composite block to describe the org
 * unit type for a course schema.
 *
 * If true, the org unit type cannot be a parent to the org unit.
 *
 * If true, the org unit type is required as a parent to the org unit. This
 * value takes precedence over the IsNotAllowed property’s value.
 */
class SchemaElement
{
    /**
     * @param Type
     * @type { <composite:OrgUnit.OrgUnitTypeInfo> }
     */
    private $Type;

    /**
     * @param IsNotAllowed
     * @type <boolean>
     */
    private $IsNotAllowed;

    /**
     * @param IsRequired
     * @type <boolean>
     */
    private $IsRequired;


    /**
     * Constructor for SchemaElement
     */
    public function __construct(array $attributes = [])
    {
        $this->Type = $attributes["Type"];
        $this->IsNotAllowed = $attributes["IsNotAllowed"];
        $this->IsRequired = $attributes["IsRequired"];
    }
}
