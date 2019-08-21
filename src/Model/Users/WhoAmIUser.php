<?php
namespace ValenceWrapper\Model\WhoAmIUser;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This user information block is the one handled by the WhoAmI service actions
 * (notice that it’s different to the User.UserData information block
 * handled by the User Management service actions).
 * @see https://docs.valence.desire2learn.com#User.WhoAmIUser
 * This field carries the same value as the UniqueIdentifier field in the
 * User.UserData structure.
 */
class WhoAmIUser
{
	/**
	 * @param Identifier
	 * @type <string:D2LID>
	 */
	private $Identifier;

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
	 * @param UniqueName
	 * @type <string>
	 */
	private $UniqueName;

	/**
	 * @param ProfileIdentifier
	 * @type <string>
	 */
	private $ProfileIdentifier;


	/**
	 * Constructor for WhoAmIUser
	 */
	public function __construct(array $attributes = [])
	{
		$this->Identifier = $attributes["Identifier"];
		$this->FirstName = $attributes["FirstName"];
		$this->LastName = $attributes["LastName"];
		$this->UniqueName = $attributes["UniqueName"];
		$this->ProfileIdentifier = $attributes["ProfileIdentifier"];
	}
}
