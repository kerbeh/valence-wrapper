<?php
namespace ValenceWrapper\Model\Values;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you make a query about a configuration variable’s current value state,
 * the service provides a JSON block like this:
 * @see https://docs.valence.desire2learn.com#ConfigVariable.Values
 */
class Values
{
	/**
	 * @param ConfigId
	 * @type <string:GUID>
	 */
	private $ConfigId;

	/**
	 * @param DefaultValue
	 * @type <string>
	 */
	private $DefaultValue;

	/**
	 * @param SystemValue
	 * @type <string>
	 */
	private $SystemValue;

	/**
	 * @param OrgValue
	 * @type <string>
	 */
	private $OrgValue;

	/**
	 * @param NumOrgUnitValues
	 * @type <number>
	 */
	private $NumOrgUnitValues;

	/**
	 * @param NumRoleValues
	 * @type <number>
	 */
	private $NumRoleValues;


	/**
	 * Constructor for Values
	 */
	public function __construct(array $attributes = [])
	{
		$this->ConfigId = $attributes["ConfigId"];
		$this->DefaultValue = $attributes["DefaultValue"];
		$this->SystemValue = $attributes["SystemValue"];
		$this->OrgValue = $attributes["OrgValue"];
		$this->NumOrgUnitValues = $attributes["NumOrgUnitValues"];
		$this->NumRoleValues = $attributes["NumRoleValues"];
	}
}
