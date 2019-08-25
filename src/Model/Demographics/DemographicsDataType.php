<?php
namespace ValenceWrapper\Model\DemographicsDataType;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * @see https://docs.valence.desire2learn.com#Demographics.DemographicsDataType
 */
class DemographicsDataType
{
	/**
	 * @param DataTypeId
	 * @type <string:GUID>
	 */
	private $DataTypeId;

	/**
	 * @param DataTypeName
	 * @type <string>
	 */
	private $DataTypeName;

	/**
	 * @param DisplayName
	 * @type <string>
	 */
	private $DisplayName;


	/**
	 * Constructor for DemographicsDataType
	 */
	public function __construct(array $attributes = [])
	{
		$this->DataTypeId = $attributes["DataTypeId"];
		$this->DataTypeName = $attributes["DataTypeName"];
		$this->DisplayName = $attributes["DisplayName"];
	}
}
