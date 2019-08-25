<?php
namespace ValenceWrapper\Model\ObjectComment;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When it appears, this value is a simplified version of an EPOBJ_T
 * value. It can have a value of 0 (for a generic EP object) or one of the
 * EPOBJ_T values evenly divisible by 100 (that is, the values for
 * Collection, Reflection, Artifact, Presentation, Learning Objective). It
 * can also have a value of 5 indicating an EP Form.
 * @see https://docs.valence.desire2learn.com#EP.ObjectComment
 * When it appears, this value is a simplified version of an EPOBJ_T
 * value. It can have a value of 0 (for a generic EP object) or one of the
 * EPOBJ_T values evenly divisible by 100 (that is, the values for
 * Collection, Reflection, Artifact, Presentation, Learning Objective). It
 * can also have a value of 5 indicating an EP Form.
 */
class ObjectComment
{
	/**
	 * @param CommentId
	 * @type <number:D2LID>
	 */
	private $CommentId;

	/**
	 * @param UserId
	 * @type <number:D2LID>
	 */
	private $UserId;

	/**
	 * @param FirstName
	 * @type <string>
	 */
	private $FirstName;

	/**
	 * @param LastName
	 * @type <string>
	 */
	private $LastName;

	/**
	 * @param CommentBody
	 * @type <string>
	 */
	private $CommentBody;

	/**
	 * @param CreatedDate
	 * @type <string:UTCDateTime>
	 */
	private $CreatedDate;

	/**
	 * @param CommentedObjectId
	 * @type <number:D2LID>
	 */
	private $CommentedObjectId;

	/**
	 * @param ContextObjectId
	 * @type <number:D2LID>
	 */
	private $ContextObjectId;

	/**
	 * @param ContextObjectTypeId
	 * @type <number>
	 */
	private $ContextObjectTypeId;


	/**
	 * Constructor for ObjectComment
	 */
	public function __construct(array $attributes = [])
	{
		$this->CommentId = $attributes["CommentId"];
		$this->UserId = $attributes["UserId"];
		$this->FirstName = $attributes["FirstName"];
		$this->LastName = $attributes["LastName"];
		$this->CommentBody = $attributes["CommentBody"];
		$this->CreatedDate = $attributes["CreatedDate"];
		$this->CommentedObjectId = $attributes["CommentedObjectId"];
		$this->ContextObjectId = $attributes["ContextObjectId"];
		$this->ContextObjectTypeId = $attributes["ContextObjectTypeId"];
	}
}
