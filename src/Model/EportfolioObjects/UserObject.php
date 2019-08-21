<?php
namespace ValenceWrapper\Model\UserObject;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#EP.UserObject
 */
class UserObject
{
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
	 * Constructor for UserObject
	 */
	public function __construct(array $attributes = [])
	{
		$this->UserId = $attributes["UserId"];
		$this->FirstName = $attributes["FirstName"];
		$this->LastName = $attributes["LastName"];
	}
}
