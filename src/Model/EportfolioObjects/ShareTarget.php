<?php
namespace ValenceWrapper\Model\ShareTarget;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Identifier for the EP sharing group.
 * @see https://docs.valence.desire2learn.com#EP.ShareTarget
 * Identifier for the EP sharing group.
 *
 * System identifier for the share target (i.e. UserID if the target is a user).
 */
class ShareTarget
{
	/**
	 * @param Id
	 * @type <number:D2LID>
	 */
	private $Id;

	/**
	 * @param TargetId
	 * @type <number:D2LID>
	 */
	private $TargetId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param ProfileType
	 * @type <number:PERMPROFILE_T>
	 */
	private $ProfileType;


	/**
	 * Constructor for ShareTarget
	 */
	public function __construct(array $attributes = [])
	{
		$this->Id = $attributes["Id"];
		$this->TargetId = $attributes["TargetId"];
		$this->Name = $attributes["Name"];
		$this->ProfileType = $attributes["ProfileType"];
	}
}
