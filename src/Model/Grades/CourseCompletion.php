<?php
namespace ValenceWrapper\Model\CourseCompletion;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Course created with an expiry date if this property is not null.
 * @see https://docs.valence.desire2learn.com#course-completion
 * Course created with an expiry date if this property is not null.
 */
class CourseCompletion
{
	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param CompletionId
	 * @type <number:D2LID>
	 */
	private $CompletionId;

	/**
	 * @param UserId
	 * @type <number:D2LID>
	 */
	private $UserId;

	/**
	 * @param CompletedDate
	 * @type <string:UTCDateTime>
	 */
	private $CompletedDate;

	/**
	 * @param ExpiryDate
	 * @type <string:UTCDateTime>
	 */
	private $ExpiryDate;


	/**
	 * Constructor for CourseCompletion
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->CompletionId = $attributes["CompletionId"];
		$this->UserId = $attributes["UserId"];
		$this->CompletedDate = $attributes["CompletedDate"];
		$this->ExpiryDate = $attributes["ExpiryDate"];
	}
}
