<?php
namespace ValenceWrapper\Model\DemographicsField;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Create. When you use actions that define a new Demographics Field for the
 * service, you should provide a block that looks like this:
 * @see https://docs.valence.desire2learn.com#Demographics.DemographicsField
 */
class DemographicsField
{
    /**
     * @param Name
     * @type <string>
     */
    private $Name;

    /**
     * @param Description
     * @type <string>
     */
    private $Description;

    /**
     * @param DataTypeId
     * @type <string:GUID>
     */
    private $DataTypeId;


    /**
     * Constructor for DemographicsField
     */
    public function __construct(array $attributes = [])
    {
        $this->Name = $attributes["Name"];
        $this->Description = $attributes["Description"];
        $this->DataTypeId = $attributes["DataTypeId"];
    }
}
