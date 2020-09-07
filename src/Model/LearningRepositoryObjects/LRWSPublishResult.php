<?php
namespace ValenceWrapper\Model\LRWSPublishResult;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * An opaque string identifier for this LR object represented as an Activity.
 * @see https://docs.valence.desire2learn.com#Repository.LRWSPublishResult
 * An opaque string identifier for this LR object represented as an Activity.
 */
class LRWSPublishResult
{
    /**
     * @param ExecutionMessage
     * @type <string>
     */
    private $ExecutionMessage;

    /**
     * @param ExecutionStatus
     * @type <number:LR_EXEC_STATUS_T>
     */
    private $ExecutionStatus;

    /**
     * @param IdentId
     * @type <number:D2LID>
     */
    private $IdentId;

    /**
     * @param Version
     * @type <number>
     */
    private $Version;

    /**
     * @param ActivityId
     * @type <string>
     */
    private $ActivityId;


    /**
     * Constructor for LRWSPublishResult
     */
    public function __construct(array $attributes = [])
    {
        $this->ExecutionMessage = $attributes["ExecutionMessage"];
        $this->ExecutionStatus = $attributes["ExecutionStatus"];
        $this->IdentId = $attributes["IdentId"];
        $this->Version = $attributes["Version"];
        $this->ActivityId = $attributes["ActivityId"];
    }
}
