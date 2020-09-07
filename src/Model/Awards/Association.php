<?php
namespace ValenceWrapper\Model\Association;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * When you use an action that retrieves award associations, the
 * service returns a block like this:
 * @see https://docs.valence.desire2learn.com#associations
 * If credit has a value, that value must be a positive number.
 */
class Association
{
    /**
     * @param Award
     * @type { <composite:Awards.Award> }
     */
    private $Award;

    /**
     * @param AssociationId
     * @type <number:D2LID>
     */
    private $AssociationId;

    /**
     * @param OrgUnitId
     * @type <number:D2LID>
     */
    private $OrgUnitId;

    /**
     * @param ConditionSet
     * @type {
     */
    private $ConditionSet;

    /**
     * @param ConditionSetId
     * @type <number:D2LID>
     */
    private $ConditionSetId;

    /**
     * @param ConditionSetType
     * @type <number:D2LID>
     */
    private $ConditionSetType;

    /**
     * @param Credit
     * @type <number:decimal>
     */
    private $Credit;

    /**
     * @param HiddenAward
     * @type <boolean>
     */
    private $HiddenAward;


    /**
     * Constructor for Association
     */
    public function __construct(array $attributes = [])
    {
        $this->Award = $attributes["Award"];
        $this->AssociationId = $attributes["AssociationId"];
        $this->OrgUnitId = $attributes["OrgUnitId"];
        $this->ConditionSet = $attributes["ConditionSet"];
        $this->ConditionSetId = $attributes["ConditionSetId"];
        $this->ConditionSetType = $attributes["ConditionSetType"];
        $this->Credit = $attributes["Credit"];
        $this->HiddenAward = $attributes["HiddenAward"];
    }
}
