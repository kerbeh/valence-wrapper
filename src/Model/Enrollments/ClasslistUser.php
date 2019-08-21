<?php
namespace ValenceWrapper\Model\ClasslistUser;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Structure for the enrolled user’s information that the service exposes
 * through the classlist API.
 * @see https://docs.valence.desire2learn.com#Enrollment.ClasslistUser
 */
class ClasslistUser
{
	/**
	 * @param Identifier
	 * @type <string:D2LID>
	 */
	private $Identifier;

	/**
	 * @param ProfileIdentifier
	 * @type <string>
	 */
	private $ProfileIdentifier;

	/**
	 * @param DisplayName
	 * @type <string>
	 */
	private $DisplayName;

	/**
	 * @param UserName
	 * @type <string>
	 */
	private $UserName;

	/**
	 * @param OrgDefinedId
	 * @type <string>
	 */
	private $OrgDefinedId;

	/**
	 * @param Email
	 * @type <string>
	 */
	private $Email;

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
	 * @param RoleId
	 * @type <number:D2LID>
	 */
	private $RoleId;

	/**
	 * @param LastAccessed
	 * @type <string:UTCDateTime>
	 */
	private $LastAccessed;

	/**
	 * @param IsOnline
	 * @type <boolean>
	 */
	private $IsOnline;


	/**
	 * Constructor for ClasslistUser
	 */
	public function __construct(array $attributes = [])
	{
		$this->Identifier = $attributes["Identifier"];
		$this->ProfileIdentifier = $attributes["ProfileIdentifier"];
		$this->DisplayName = $attributes["DisplayName"];
		$this->UserName = $attributes["UserName"];
		$this->OrgDefinedId = $attributes["OrgDefinedId"];
		$this->Email = $attributes["Email"];
		$this->FirstName = $attributes["FirstName"];
		$this->LastName = $attributes["LastName"];
		$this->RoleId = $attributes["RoleId"];
		$this->LastAccessed = $attributes["LastAccessed"];
		$this->IsOnline = $attributes["IsOnline"];
	}
}
