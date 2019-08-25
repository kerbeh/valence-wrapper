<?php
namespace ValenceWrapper\Model\SpecifiedRoleValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you must provide a new value for a configuration value assigned for a
 * particular role, you provide a structure like this one:
 * @see https://docs.valence.desire2learn.com#ConfigVariable.SpecifiedRoleValue
 */
class SpecifiedRoleValue
{
	/**
	 * @param RoleValue
	 * @type <string>
	 */
	private $RoleValue;


	/**
	 * Constructor for SpecifiedRoleValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->RoleValue = $attributes["RoleValue"];
	}
}
