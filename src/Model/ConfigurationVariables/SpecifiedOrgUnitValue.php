<?php
namespace ValenceWrapper\Model\SpecifiedOrgUnitValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you must provide a new value for a configuration value assigned for a
 * particular org unit, you provide a structure like this one:
 * @see https://docs.valence.desire2learn.com#ConfigVariable.SpecifiedOrgUnitValue
 */
class SpecifiedOrgUnitValue
{
	/**
	 * @param OrgUnitValue
	 * @type <string>
	 */
	private $OrgUnitValue;


	/**
	 * Constructor for SpecifiedOrgUnitValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgUnitValue = $attributes["OrgUnitValue"];
	}
}
