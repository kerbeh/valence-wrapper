<?php
namespace ValenceWrapper\Model\Definition;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * When you make a query about a configuration variable’s definition, the
 * service provides a JSON block like this:
 * @see https://docs.valence.desire2learn.com#ConfigVariable.Definition
 */
class Definition
{
	/**
	 * @param ConfigId
	 * @type <string:GUID>
	 */
	private $ConfigId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Scope
	 * @type <string:CVSCOPE_T>
	 */
	private $Scope;

	/**
	 * @param Description
	 * @type <string>
	 */
	private $Description;

	/**
	 * @param DataType
	 * @type <string:CVTYPE_T>
	 */
	private $DataType;

	/**
	 * @param DefaultValue
	 * @type <string>
	 */
	private $DefaultValue;

	/**
	 * @param CanEditSystemValue
	 * @type <boolean>
	 */
	private $CanEditSystemValue;

	/**
	 * @param CanEditOverrideValues
	 * @type <boolean>
	 */
	private $CanEditOverrideValues;

	/**
	 * @param IsSensitiveData
	 * @type <boolean>
	 */
	private $IsSensitiveData;

	/**
	 * @param AllowedValues
	 * @type null
	 */
	private $AllowedValues;

	/**
	 * @param Value
	 * @type <string> }
	 */
	private $Value;


	/**
	 * Constructor for Definition
	 */
	public function __construct(array $attributes = [])
	{
		$this->ConfigId = $attributes["ConfigId"];
		$this->Name = $attributes["Name"];
		$this->Scope = $attributes["Scope"];
		$this->Description = $attributes["Description"];
		$this->DataType = $attributes["DataType"];
		$this->DefaultValue = $attributes["DefaultValue"];
		$this->CanEditSystemValue = $attributes["CanEditSystemValue"];
		$this->CanEditOverrideValues = $attributes["CanEditOverrideValues"];
		$this->IsSensitiveData = $attributes["IsSensitiveData"];
		$this->AllowedValues = $attributes["AllowedValues"];
		$this->Value = $attributes["Value"];
	}
}
