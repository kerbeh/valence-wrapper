<?php
namespace ValenceWrapper\Model\OrgUnitValue;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * Describes the configuration variable value assigned for a particular org unit.
 * @see https://docs.valence.desire2learn.com#ConfigVariable.OrgUnitValue
 */
class OrgUnitValue
{
	/**
	 * @param OrgUnitId
	 * @type <number:D2LID>
	 */
	private $OrgUnitId;

	/**
	 * @param Value
	 * @type <string>
	 */
	private $Value;


	/**
	 * Constructor for OrgUnitValue
	 */
	public function __construct(array $attributes = [])
	{
		$this->OrgUnitId = $attributes["OrgUnitId"];
		$this->Value = $attributes["Value"];
	}
}
