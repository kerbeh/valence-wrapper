<?php
namespace ValenceWrapper\Model\LRWSObjectLink;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSObjectLink
 */
class LRWSObjectLink
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
	 * @param URL
	 * @type <string>
	 */
	private $Url;


	/**
	 * Constructor for LRWSObjectLink
	 */
	public function __construct(array $attributes = [])
	{
		$this->ExecutionMessage = $attributes["ExecutionMessage"];
		$this->ExecutionStatus = $attributes["ExecutionStatus"];
		$this->URL = $attributes["URL"];
	}
}
