<?php
namespace ValenceWrapper\Model\LRWSPublishStatusResult;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Repository.LRWSPublishStatusResult
 */
class LRWSPublishStatusResult
{
	/**
	 * @param PublishStatus
	 * @type <number>
	 */
	private $PublishStatus;

	/**
	 * @param ErrorMessage
	 * @type <string>
	 */
	private $ErrorMessage;

	/**
	 * @param LoUrl
	 * @type <string>
	 */
	private $LoUrl;


	/**
	 * Constructor for LRWSPublishStatusResult
	 */
	public function __construct(array $attributes = [])
	{
		$this->PublishStatus = $attributes["PublishStatus"];
		$this->ErrorMessage = $attributes["ErrorMessage"];
		$this->LoUrl = $attributes["LoUrl"];
	}
}
