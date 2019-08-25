<?php
namespace ValenceWrapper\Model\LRWSBaseResult;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This is the base execution result object from which the ones actually passed
 * back to the client inherit.
 * @see https://docs.valence.desire2learn.com#Repository.LRWSBaseResult
 */
class LRWSBaseResult
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
	 * Constructor for LRWSBaseResult
	 */
	public function __construct(array $attributes = [])
	{
		$this->ExecutionMessage = $attributes["ExecutionMessage"];
		$this->ExecutionStatus = $attributes["ExecutionStatus"];
	}
}
