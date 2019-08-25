<?php
namespace ValenceWrapper\Model\EventCountInfo;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Number of events for a user in the provided course.
 * @see https://docs.valence.desire2learn.com#Calendar.EventCountInfo
 * Number of events for a user in the provided course.
 */
class EventCountInfo
{
	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param UserId
	 * @type <number:D2LID>
	 */
	private $UserId;

	/**
	 * @param EventCount
	 * @type <number>
	 */
	private $EventCount;


	/**
	 * Constructor for EventCountInfo
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->UserId = $attributes["UserId"];
		$this->EventCount = $attributes["EventCount"];
	}
}
