<?php
namespace ValenceWrapper\Model\UserPasswordData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#User.UserPasswordData
 */
class UserPasswordData
{
	/**
	 * @param Password
	 * @type <string>
	 */
	private $Password;


	/**
	 * Constructor for UserPasswordData
	 */
	public function __construct(array $attributes = [])
	{
		$this->Password = $attributes["Password"];
	}
}
