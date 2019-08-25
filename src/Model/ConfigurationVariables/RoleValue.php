<?php
namespace ValenceWrapper\Model\RoleValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Describes the configuration variable value assigned for a particular role.
 * @see https://docs.valence.desire2learn.com#ConfigVariable.RoleValue
 */
class RoleValue
{
	/**
	 * @param RoleId
	 * @type <number:D2LID>
	 */
	private $RoleId;

	/**
	 * @param Value
	 * @type <string>
	 */
	private $Value;


	/**
	 * Constructor for RoleValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->RoleId = $attributes["RoleId"];
		$this->Value = $attributes["Value"];
	}
}
