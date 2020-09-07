<?php
namespace ValenceWrapper\Model\LRWSTrustCollection;

use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;

/**
 * The structure of the LRWSTrustCollection
 * is somewhat different to the typical structures in the Brightspace
 * APIs. Each property in the RepositoryTrusts composite property is a set of
 * role ID-LRWSTrust tuples gathered together
 * by org unit ID.
 * @see https://docs.valence.desire2learn.com#Repository.LRWSTrustCollection
 */
class LRWSTrustCollection
{
    /**
     * @param RepositoryTrusts
     * @type {
     */
    private $RepositoryTrusts;

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
     * Constructor for LRWSTrustCollection
     */
    public function __construct(array $attributes = [])
    {
        $this->RepositoryTrusts = $attributes["RepositoryTrusts"];
        $this->ExecutionMessage = $attributes["ExecutionMessage"];
        $this->ExecutionStatus = $attributes["ExecutionStatus"];
    }
}
