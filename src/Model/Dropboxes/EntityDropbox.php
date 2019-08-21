<?php
namespace ValenceWrapper\Model\EntityDropbox;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * In each dropbox, each entity (user or group) that has permissions to submit
 * work, or provide feedback on submitted work, will have an associated
 * EntityDropbox once they’ve made a submission:
 * @see https://docs.valence.desire2learn.com#Dropbox.EntityDropbox
 */
class EntityDropbox
{
	/**
	 * @param Comment
	 * @type { <composite:RichText> }
	 */
	private $Comment;

	/**
	 * @param Entity
	 * @type { <composite:Dropbox.Entity> }
	 */
	private $Entity;

	/**
	 * @param Status
	 * @type <string:ENTITYDROPBOXSTATUS_T>
	 */
	private $Status;

	/**
	 * @param Feedback
	 * @type { <composite:Dropbox.DropboxFeedbackOut> }
	 */
	private $Feedback;

	/**
	 * @param CompletionDate
	 * @type <string:UTCDateTime>
	 */
	private $CompletionDate;


	/**
	 * Constructor for EntityDropbox
	 */
	public function __construct(array $attributes = [])
	{
		$this->Comment = $attributes["Comment"];
		$this->Entity = $attributes["Entity"];
		$this->Status = $attributes["Status"];
		$this->Feedback = $attributes["Feedback"];
		$this->CompletionDate = $attributes["CompletionDate"];
	}
}
