<?php
namespace ValenceWrapper\Model\GetImportJobResponse;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * Course offering import jobs will have one of several distinct states,
 * depending on where they are in the import process. These string labels
 * describe the states:
 * @see https://docs.valence.desire2learn.com#importing-courses
 */
class GetImportJobResponse
{
    /**
     * @param JobToken
     * @type <string>
     */
    private $JobToken;

    /**
     * @param TargetOrgUnitId
     * @type <number:D2LID>
     */
    private $TargetOrgUnitId;

    /**
     * @param Status
     * @type <string:COI_IMPORTJOBTSTATUS_T>
     */
    private $Status;


    /**
     * Constructor for GetImportJobResponse
     */
    public function __construct(array $attributes = [])
    {
        $this->JobToken = $attributes["JobToken"];
        $this->TargetOrgUnitId = $attributes["TargetOrgUnitId"];
        $this->Status = $attributes["Status"];
    }
}
