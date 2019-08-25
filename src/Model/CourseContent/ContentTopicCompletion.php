<?php
namespace ValenceWrapper\Model\ContentTopicCompletion;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When the client uses an action to retrieve a content topic’s completion,
 * @see https://docs.valence.desire2learn.com#user-progress
 * User the content topic completion belongs to.
 *
 * OrgUnit of the content topic.
 *
 * ID of the content topic.
 *
 * Completion type of the content topic.
 *
 * Date content topic was completed, or null if the topic has not been completed.
 */
class ContentTopicCompletion
{
	/**
	 * @param UserId
	 * @type <number:D2LID>
	 */
	private $UserId;

	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param TopicId
	 * @type <number:D2LID>
	 */
	private $TopicId;

	/**
	 * @param CompletionType
	 * @type <number:COMPLETIONTYPE_T>
	 */
	private $CompletionType;

	/**
	 * @param CompletionDate
	 * @type <string:UTCDateTime>
	 */
	private $CompletionDate;


	/**
	 * Constructor for ContentTopicCompletion
	 */
	public function __construct(array $attributes = [])
	{
		$this->UserId = $attributes["UserId"];
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->TopicId = $attributes["TopicId"];
		$this->CompletionType = $attributes["CompletionType"];
		$this->CompletionDate = $attributes["CompletionDate"];
	}
}
