<?php
namespace ValenceWrapper\Model\DataSetFilter;
use ValenceWrapper\Model\BaseValenceModel;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Basic\RichText;
/**
 * This composite contains information about a filter definition for a data set.
 * @see https://docs.valence.desire2learn.com#DataExport.DataSetFilter
 */
class DataSetFilter
{
	/**
	 * @param Name
	 * @type <string>
	 */
	private $Name;

	/**
	 * @param Type
	 * @type <int:EXPORTFILTERTYPE_T>
	 */
	private $Type;


	/**
	 * Constructor for DataSetFilter
	 */
	public function __construct(array $attributes = [])
	{
		$this->Name = $attributes["Name"];
		$this->Type = $attributes["Type"];
	}
}
