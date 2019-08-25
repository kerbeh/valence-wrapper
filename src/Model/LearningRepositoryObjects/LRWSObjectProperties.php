<?php
namespace ValenceWrapper\Model\LRWSObjectProperties;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Actions that retrieve learning object properties from the Learning Repository
 * fetch back a structure like this:
 * @see https://docs.valence.desire2learn.com#Repository.LRWSObjectProperties
 */
class LRWSObjectProperties
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
	 * @param RepositoryId
	 * @type <number:D2LID>
	 */
	private $RepositoryId;

	/**
	 * @param Status
	 * @type <number:LR_OBJECT_STATUS_T>
	 */
	private $Status;

	/**
	 * @param HiddenFromSearchResults
	 * @type <boolean>
	 */
	private $HiddenFromSearchResults;

	/**
	 * @param PublicallyAvailable
	 * @type <boolean>
	 */
	private $PublicallyAvailable;

	/**
	 * @param IdentId
	 * @type <number:D2LID>
	 */
	private $IdentId;

	/**
	 * @param Version
	 * @type <number>
	 */
	private $Version;

	/**
	 * @param URL
	 * @type <string>
	 */
	private $Url;

	/**
	 * @param Title
	 * @type <string>
	 */
	private $Title;

	/**
	 * @param Description
	 * @type <string>
	 */
	private $Description;

	/**
	 * @param OwnerId
	 * @type <number:D2LID>
	 */
	private $OwnerId;

	/**
	 * @param Type
	 * @type <number:LR_OBJECT_T>
	 */
	private $Type;


	/**
	 * Constructor for LRWSObjectProperties
	 */
	public function __construct(array $attributes = [])
	{
		$this->ExecutionMessage = $attributes["ExecutionMessage"];
		$this->ExecutionStatus = $attributes["ExecutionStatus"];
		$this->RepositoryId = $attributes["RepositoryId"];
		$this->Status = $attributes["Status"];
		$this->HiddenFromSearchResults = $attributes["HiddenFromSearchResults"];
		$this->PublicallyAvailable = $attributes["PublicallyAvailable"];
		$this->IdentId = $attributes["IdentId"];
		$this->Version = $attributes["Version"];
		$this->URL = $attributes["URL"];
		$this->Title = $attributes["Title"];
		$this->Description = $attributes["Description"];
		$this->OwnerId = $attributes["OwnerId"];
		$this->Type = $attributes["Type"];
	}
}
