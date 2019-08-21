<?php
namespace ValenceWrapper\Model\DataSetData;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This composite contains information about all of the built-in data sets
 * available for you to use for your data export.
 * @see https://docs.valence.desire2learn.com#DataExport.DataSetData
 * The GUID for an available data set on the back-end service.
 *
 * The category of the data set on the back-end service (e.g. Insights).
 */
class DataSetData
{
	/**
	 * @param DataSetId
	 * @type <string:GUID>
	 */
	private $DataSetId;

	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Description
	 * @type <string>
	 */
	private $Description;

	/**
	 * @param Category
	 * @type <string>
	 */
	private $Category;


	/**
	 * Constructor for DataSetData
	 */
	public function __construct(array $attributes = [])
	{
		$this->DataSetId = $attributes["DataSetId"];
		$this->Name = $attributes["Name"];
		$this->Description = $attributes["Description"];
		$this->Category = $attributes["Category"];
	}
}
