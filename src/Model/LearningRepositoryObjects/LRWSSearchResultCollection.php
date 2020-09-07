<?php
namespace ValenceWrapper\Model\LRWSSearchResultCollection;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSSearchResultCollection
 */
class LRWSSearchResultCollection
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
     * @param TotalResults
     * @type <number>
     */
    private $TotalResults;


    /**
     * Constructor for LRWSSearchResultCollection
     */
    public function __construct(array $attributes = [])
    {
        $this->ExecutionMessage = $attributes["ExecutionMessage"];
        $this->ExecutionStatus = $attributes["ExecutionStatus"];
        $this->TotalResults = $attributes["TotalResults"];
    }
}
