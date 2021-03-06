<?php
namespace ValenceWrapper\Model\LRWSRepositoryCollection;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSRepositoryCollection
 */
class LRWSRepositoryCollection
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
     * Constructor for LRWSRepositoryCollection
     */
    public function __construct(array $attributes = [])
    {
        $this->ExecutionMessage = $attributes["ExecutionMessage"];
        $this->ExecutionStatus = $attributes["ExecutionStatus"];
    }
}
