<?php
namespace ValenceWrapper\Model\Invite;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#EP.Invite
 */
class Invite
{
	/**
	 * @param InviteId
	 * @type <number:D2LID>
	 */
	private $InviteId;

	/**
	 * @param ObjectId
	 * @type <number:D2LID>
	 */
	private $ObjectId;

	/**
	 * @param Subject
	 * @type <string>
	 */
	private $Subject;

	/**
	 * @param Message
	 * @type <string>
	 */
	private $Message;

	/**
	 * @param SentDate
	 * @type <string>
	 */
	private $SentDate;

	/**
	 * @param SenderUserId
	 * @type <number:D2LID>
	 */
	private $SenderUserId;

	/**
	 * @param TargetUserId
	 * @type <number:D2LID>
	 */
	private $TargetUserId;

	/**
	 * @param InviteType
	 * @type
	 */
	private $InviteType;

	/**
	 * @param IsRead
	 * @type <boolean>
	 */
	private $IsRead;


	/**
	 * Constructor for Invite
	 */
	public function __construct(array $attributes = [])
	{
		$this->InviteId = $attributes["InviteId"];
		$this->ObjectId = $attributes["ObjectId"];
		$this->Subject = $attributes["Subject"];
		$this->Message = $attributes["Message"];
		$this->SentDate = $attributes["SentDate"];
		$this->SenderUserId = $attributes["SenderUserId"];
		$this->TargetUserId = $attributes["TargetUserId"];
		$this->InviteType = $attributes["InviteType"];
		$this->IsRead = $attributes["IsRead"];
	}
}
