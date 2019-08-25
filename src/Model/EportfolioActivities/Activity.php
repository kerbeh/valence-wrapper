<?php
namespace ValenceWrapper\Model\Activity;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Org ID for the owner of the acted-upon object.
 * @see https://docs.valence.desire2learn.com#EP.Activity
 * Org ID for the owner of the acted-upon object.
 *
 * User ID for the user who owns the acted-upon object.
 *
 * ID for the referred object: this property’s interpretation is determined
 * by the ActivityType property. If the activity is a
 * Comment (5) or an Assessment (6), then this ID refers to the comment
 * or assessment object; otherwise, it refers to the
 * context chain for the action (the path by which
 * the user obtained access to the acted-upon object).
 *
 * User ID for the user who performed the action on the acted-upon object.
 */
class Activity
{
	/**
	 * @param ActionType
	 * @type <number:ACTIVITYACTION_T>
	 */
	private $ActionType;

	/**
	 * @param ActivityTime
	 * @type <string:UTCDateTime>
	 */
	private $ActivityTime;

	/**
	 * @param ActivityType
	 * @type <number:ACTIVITY_T>
	 */
	private $ActivityType;

	/**
	 * @param ObjectId
	 * @type <number:D2LID>
	 */
	private $ObjectId;

	/**
	 * @param OrgId
	 * @type <number:D2LID>
	 */
	private $OrgId;

	/**
	 * @param OwnerId
	 * @type <number:D2LID>
	 */
	private $OwnerId;

	/**
	 * @param RefObjectId
	 * @type <string:D2LID>
	 */
	private $RefObjectId;

	/**
	 * @param UserId
	 * @type <number:D2LID>
	 */
	private $UserId;


	/**
	 * Constructor for Activity
	 */
	public function __construct(array $attributes = [])
	{
		$this->ActionType = $attributes["ActionType"];
		$this->ActivityTime = $attributes["ActivityTime"];
		$this->ActivityType = $attributes["ActivityType"];
		$this->ObjectId = $attributes["ObjectId"];
		$this->OrgId = $attributes["OrgId"];
		$this->OwnerId = $attributes["OwnerId"];
		$this->RefObjectId = $attributes["RefObjectId"];
		$this->UserId = $attributes["UserId"];
	}
}
